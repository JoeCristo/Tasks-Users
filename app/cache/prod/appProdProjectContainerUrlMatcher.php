<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/user')) {
            // netelip_user_index
            if ($pathinfo === '/user/index') {
                return array (  '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'netelip_user_index',);
            }

            // netelip_user_add
            if ($pathinfo === '/user/add') {
                return array (  '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::addAction',  '_route' => 'netelip_user_add',);
            }

            // netelip_user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_netelip_user_create;
                }

                return array (  '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'netelip_user_create',);
            }
            not_netelip_user_create:

            // netelip_user_edit
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'netelip_user_edit')), array (  '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::editAction',));
            }

            // netelip_user_update
            if (0 === strpos($pathinfo, '/user/update') && preg_match('#^/user/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_netelip_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'netelip_user_update')), array (  '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_netelip_user_update:

            // netelip_user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'netelip_user_view')), array (  '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::viewAction',));
            }

            // netelip_user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_netelip_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'netelip_user_delete')), array (  '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_netelip_user_delete:

            // netelip_user_redirect_add
            if ($pathinfo === '/user/create') {
                return array (  '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::addAction',  'path' => '/add',  'permanent' => true,  '_route' => 'netelip_user_redirect_add',);
            }

            // netelip_user_redirect_edit
            if (0 === strpos($pathinfo, '/user/update') && preg_match('#^/user/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'netelip_user_redirect_edit')), array (  '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::editAction',  'path' => '/edit',  'permanent' => true,));
            }

        }

        if (0 === strpos($pathinfo, '/task')) {
            // netelip_task_index
            if ($pathinfo === '/task/index') {
                return array (  '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::indexAction',  '_route' => 'netelip_task_index',);
            }

            // netelip_task_add
            if ($pathinfo === '/task/add') {
                return array (  '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::addAction',  '_route' => 'netelip_task_add',);
            }

            // netelip_task_create
            if ($pathinfo === '/task/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_netelip_task_create;
                }

                return array (  '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::createAction',  '_route' => 'netelip_task_create',);
            }
            not_netelip_task_create:

            // netelip_task_edit
            if (0 === strpos($pathinfo, '/task/edit') && preg_match('#^/task/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'netelip_task_edit')), array (  '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::editAction',));
            }

            // netelip_task_update
            if (0 === strpos($pathinfo, '/task/update') && preg_match('#^/task/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_netelip_task_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'netelip_task_update')), array (  '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::updateAction',));
            }
            not_netelip_task_update:

            // netelip_task_view
            if (0 === strpos($pathinfo, '/task/view') && preg_match('#^/task/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'netelip_task_view')), array (  '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::viewAction',));
            }

            // netelip_task_delete
            if (0 === strpos($pathinfo, '/task/delete') && preg_match('#^/task/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_netelip_task_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'netelip_task_delete')), array (  '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::deleteAction',));
            }
            not_netelip_task_delete:

            if (0 === strpos($pathinfo, '/task/c')) {
                // netelip_task_redirect_add
                if ($pathinfo === '/task/create') {
                    return array (  '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::addAction',  'path' => '/add',  'permanent' => true,  '_route' => 'netelip_task_redirect_add',);
                }

                // netelip_task_custom
                if ($pathinfo === '/task/custom') {
                    return array (  '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::customAction',  '_route' => 'netelip_task_custom',);
                }

            }

            // netelip_task_process
            if (0 === strpos($pathinfo, '/task/process') && preg_match('#^/task/process/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_netelip_task_process;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'netelip_task_process')), array (  '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::processAction',));
            }
            not_netelip_task_process:

            // netelip_task_redirect_edit
            if (0 === strpos($pathinfo, '/task/update') && preg_match('#^/task/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'netelip_task_redirect_edit')), array (  '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::editAction',  'path' => '/edit/{id}',  'permanent' => true,));
            }

        }

        // netelip_user_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'netelip_user_homepage');
            }

            return array (  '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::homeAction',  '_route' => 'netelip_user_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // netelip_user_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Netelip\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'netelip_user_login',);
                }

                // netelip_user_login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Netelip\\UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'netelip_user_login_check',);
                }

            }

            // netelip_user_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'netelip_user_logout');
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
