<?php

namespace Netelip\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Netelip\UserBundle\Entity\Task;
use Netelip\UserBundle\Form\TaskType;
use Netelip\UserBundle\Services\TaskService;

class TaskController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $dql = 'SELECT t FROM NetelipUserBundle:Task t ORDER BY t.id DESC';
        $tasks = $em->createQuery($dql);

        $createPagination = new TaskService();
        $paginator = $this->get('knp_paginator');
        $pagination = $createPagination->createPagination($tasks, $request, $paginator);

        return $this->render('NetelipUserBundle:Task:index.html.twig',[
            'pagination' => $pagination
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function customAction(Request $request){
        $idUser = $this->get('security.token_storage')->getToken()->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $dql = 'SELECT t FROM NetelipUserBundle:Task t JOIN t.user u WHERE u.id = :idUser ORDER BY t.id DESC';
        $tasks = $em->createQuery($dql)->setParameter('idUser', $idUser);

        $createPagination = new TaskService();
        $paginator = $this->get('knp_paginator');
        $pagination = $createPagination->createPagination($tasks, $request, $paginator);

        $updateForm = $this->createCustomForm(':TASK_ID', 'PUT', 'netelip_task_process');

        return $this->render('NetelipUserBundle:Task:custom.html.twig',[
            'pagination' => $pagination,
            'update_form' => $updateForm->createView()
        ]);
    }

    public function processAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('NetelipUserBundle:Task')->find($id);

        if (!$task) throw $this->createNotFoundExecption('The task does not exit.');

        $form = $this->createCustomForm($task->getId(), 'PUT', 'netelip_task_process');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            if ($task->getStatus() == 0){
                $task->setStatus(1);
                $em->flush();
                if ($request->isXmlHttpRequest()){
                    return new Response(
                      json_encode(['processed' => 1]),
                        200,
                        ['Content-type' => 'application/json']
                    );
                }
            }
            else {
                if ($request->isXmlHttpRequest()){
                    return new Response(
                        json_encode(['processed' => 0]),
                        200,
                        ['Content-type' => 'application/json']
                    );
                }
            }
        }
    }

    public function addAction(){
        $task = new Task();
        $form = $this->createCreateForm($task);

        return $this->render('NetelipUserBundle:Task:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    private function createCreateForm(Task $entity){
        $form = $this->createForm(new TaskType(), $entity, [
            'action' => $this->generateUrl('netelip_task_create'),
            'method' => 'POST'
        ]);
        return $form;
    }

    public function createAction(Request $request){
        $task = new Task();
        $form = $this->createCreateForm($task);
        $form->handleRequest($request);

        if($form->isValid()){
            $task->setStatus(0);
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();

            $successMessage = $this->get('translator')->trans('The task has been created');
            $this->addFlash('mensaje', $successMessage);

            return $this->redirectToRoute('netelip_task_index');
        }

        return $this->render('NetelipUserBundle:Task:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function viewAction($id){
        $task = $this->getDoctrine()->getRepository('NetelipUserBundle:Task')->find($id);

        if (!$task) throw $this->createNotFoundExecption('The task does not exit.');
        $deleteForm = $this->createCustomForm($task->getId(), 'DELETE', 'netelip_task_delete');
        $user = $task->getUser();

        return $this->render('NetelipUserBundle:Task:view.html.twig', [
            'task' => $task,
            'user' => $user,
            'delete_form' => $deleteForm->createView()
        ]);
    }

    public function editAction($id){
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('NetelipUserBundle:Task')->find($id);

        if (!$task) throw $this->createNotFoundExecption('The task does not exit.');
        $form = $this->createEditForm($task);

        return $this->render('NetelipUserBundle:Task:edit.html.twig', [
            'task' => $task,
            'form' => $form->createView()
        ]);

    }

    private function createEditForm(Task $entity){
        $form = $this->createForm(new TaskType(), $entity, [
            'action' => $this->generateUrl('netelip_task_update', ['id' => $entity->getId()]),
            'method' => 'PUT'
        ]);
        return $form;
    }

    public function updateAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('NetelipUserBundle:Task')->find($id);

        if (!$task) throw $this->createNotFoundExecption('The task does not exit.');

        $form = $this->createEditForm($task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $task->setStatus(0);
            $em->flush();
            $successMessage = $this->get('translator')->trans('The task has been modified');
            $this->addFlash('mensaje', $successMessage);
            return $this->redirectToRoute('netelip_task_index');
        }
        return $this->render('NetelipUserBundle:Task:edit.html.twig', [
            'task' => $task,
            'form' => $form->createView()
        ]);
    }

    public function deleteAction(Request $request, $id){
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('NetelipUserBundle:Task')->find($id);

        if (!$task){
            throw $this->createNotFoundExecption('The task does not exit.');
        }

        $form = $this->createCustomForm($task->getId(), 'DELETE', 'netelip_task_delete');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em->remove($task);
            $em->flush();

            $successMessage = $this->get('translator')->trans('The task has been delete');
            $this->addFlash('mensaje', $successMessage);

            return $this->redirectToRoute('netelip_task_index');
        }

    }

    public function createCustomForm($id, $method, $route){
        return $this->createFormBuilder()
            ->setAction($this->generateUrl($route, ['id' => $id]))
            ->setMethod($method)
            ->getForm();
    }

}
