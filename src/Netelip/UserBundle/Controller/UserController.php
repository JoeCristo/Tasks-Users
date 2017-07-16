<?php

namespace Netelip\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;
use Netelip\UserBundle\Entity\User;
use Netelip\UserBundle\Form\UserType;
use Netelip\UserBundle\Services\TaskService;



class UserController extends Controller {

    public function homeAction(){

        return $this->render('NetelipUserBundle:User:home.html.twig');
    }

    public function indexAction(Request $request){

        $searchedUser = $request->get('query');

        if (!empty($searchedUser)){
            $finder = $this->container->get('fos_elastica.finder.app.user');
            $users = $finder->createPaginatorAdapter($searchedUser);
        }
        else {
            $em = $this->getDoctrine()->getManager();
            $dql = "SELECT u FROM NetelipUserBundle:User u";
            $users = $em->createQuery($dql);
        }

        $createPagination = new TaskService();
        $paginator = $this->get('knp_paginator');
        $pagination = $createPagination->createPagination($users, $request, $paginator, 5);

        $deleteFormAjax = $this->createCustomForm(':USER_ID', 'DELETE', 'netelip_user_delete');

        return $this->render('NetelipUserBundle:User:index.html.twig', ['pagination' => $pagination,
        'delete_form_ajax' => $deleteFormAjax->createView()]);
    }

    public function addAction(){
        $user = new User();
        $form = $this->createCreateForm($user);
        return $this->render('NetelipUserBundle:User:add.html.twig', ['form' => $form->createView()]);
    }

    private function createCreateForm(User $entity){
        $form = $this->createForm(new UserType(), $entity, [
            'action' => $this->generateUrl('netelip_user_create'),
            'method' => 'POST'
        ]);
        return $form;
    } 

    public function createAction(Request $request){
        $user = new User();
        $form = $this->createCreateForm($user);
        $form->handleRequest($request);

        if ($form->isValid()){

            $password = $form->get('password')->getData();

            $passwordConstraint = new Assert\NotBlank();
            $errorList = $this->get('validator')->validate($password, $passwordConstraint);

            if (count($errorList) == 0) {

                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($user, $password);
                $user->setPassword($encoded);

                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $successMessage = $this->get('translator')->trans('The user has been create');
                $this->addFlash('message', $successMessage);

                return $this->redirectToRoute('netelip_user_index');
            }
            else {
                $errorMessage = new FormError($errorList[0]->getMessage());
                $form->get('password')->addError($errorMessage);
            }
        }
        return $this->render('NetelipUserBundle:User:add.html.twig', ['form' => $form->createView()]);
    }

    public function editAction($id){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('NetelipUserBundle:User')->find($id);

        if (!$user){
            $messageException = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($messageException);
        }

        $form = $this->createEditForm($user);

        return $this->render('NetelipUserBundle:User:edit.html.twig',
            ['user' => $user, 'form' => $form->createView()]);
    }

    private function createEditForm(User $entity){
        $form = $this->createForm( new UserType(), $entity,
            ['action' => $this->generateUrl('netelip_user_update', ['id' => $entity->getId()]),
                'method' => 'PUT']
        );
        return $form;
    }

    public function updateAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('NetelipUserBundle:User')->find($id);

        if (!$user){
            $messageException = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($messageException);
        }

        $form = $this->createEditForm($user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $password = $form->get('password')->getData();
            if (!empty($password)){
                $encoder = $this->container->get('security.password_encoder');
                $encoded = $encoder->encodePassword($user, $password);
                $user->setPassword($encoded);
            }
            else {
                $recoverPass = $this->recoverPass($id);
                $user->setPassword($recoverPass[0]['password']);
            }

            if ($form->get('role')->getData() == 'ROLE_ADMIN'){
                $user->setIsActive(1);
            }

            $em->flush();
            $successMessage = $this->get('translator')->trans('The user has been modified.');
            $this->addFlash('message', $successMessage);
            return $this->redirectToRoute('netelip_user_edit', ['id' => $user->getId()]);
        }

        return $this->render('NetelipUserBundle:User:edit.html.twig', [
           'user'=> $user, 'form' => $form->createView()
        ]);
    }

    private function recoverPass($id){
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT u.password FROM NetelipUserBundle:User u WHERE u.id = :id'
        )->setParameter('id', $id);

        $currentPass = $query->getResult();
        return $currentPass;
    }

    public function viewAction($id){
        $repository = $this->getDoctrine()->getRepository('NetelipUserBundle:User');
        $user = $repository->findOneById($id);

        if (!$user) throw $this->createNotFoundException('User not found.');

        $deleteForm = $this->createCustomForm($user->getId(), 'DELETE', 'netelip_user_delete');

        return $this->render('NetelipUserBundle:User:view.html.twig', ['user' => $user, 'delete_form' => $deleteForm->createView()]);
    }


    public function deleteAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('NetelipUserBundle:User')->find($id);

        if (!$user){
            $messageException = $this->get('translator')->trans('User not found.');
            throw $this->createNotFoundException($messageException);
        }

        $allUsers = $em->getRepository('NetelipUserBundle:User')->findAll();
        $countUsers = count($allUsers);

        $form = $this->createCustomForm($user->getId(), 'DELETE', 'netelip_user_delete');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            if($request->isXmlHttpRequest()){
                $res = $this->deleteUser($user->getRole(), $em, $user);
                return new Response(
                  json_encode(['removed' => $res['remove'], 'message' => $res['message'], 'countUsers' => $countUsers]),
                      200,
                      ['Content-Type' => 'application/json']
                  );
            }
            $res = $this->deleteUser($user->getRole(), $em, $user);

            $this->addFlash($res['alert'], $res['message']);
            return $this->redirectToRoute('netelip_user_index');
        }
    }

    private function deleteUser($role, $em, $user){
        if ($role == 'ROLE_USER'){
            $em->remove($user);
            $em->flush();

            $message = $this->get('translator')->trans('The user has been delete.');
            $remove = 1;
            $alert = 'mensaje';
        }
        else {
            $message = $this->get('translator')->trans('The user couldnt be delete.');
            $remove = 0;
            $alert = 'error';
        }

        return ['remove' => $remove, 'message' => $message, 'alert' => $alert];
    }

    private function createCustomForm($id, $method, $route){
        return $this->createFormBuilder()
            ->setAction($this->generateUrl($route, ['id' => $id]))
            ->setMethod($method)
            ->getForm();
    }

}
