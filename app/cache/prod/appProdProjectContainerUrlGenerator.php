<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'netelip_user_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_user_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_user_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_user_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_user_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_user_redirect_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::addAction',    'path' => '/add',    'permanent' => true,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_user_redirect_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::editAction',    'path' => '/edit',    'permanent' => true,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_task_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/task/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_task_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/task/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_task_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/task/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_task_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/task/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_task_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/task/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_task_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/task/view',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_task_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/task/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_task_redirect_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::addAction',    'path' => '/add',    'permanent' => true,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/task/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_task_custom' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::customAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/task/custom',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_task_process' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::processAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/task/process',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_task_redirect_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\TaskController::editAction',    'path' => '/edit/{id}',    'permanent' => true,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/task/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\UserController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_user_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_user_login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Netelip\\UserBundle\\Controller\\SecurityController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'netelip_user_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
