<?php

namespace Netelip\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class SecurityController extends Controller
{
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('NetelipUserBundle:Security:login.html.twig', [
            'last_username' => $lastUsername, 'error' => $error
        ]);
    }

    public function loginCheckAction()
    {

    }
}