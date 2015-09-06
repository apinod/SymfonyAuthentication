<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // user_create
        if ($pathinfo === '/register/user') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_user_create;
            }

            return array (  '_controller' => 'Simple\\ProfileBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
        }
        not_user_create:

        if (0 === strpos($pathinfo, '/user')) {
            // user_edit
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_edit;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_edit');
                }

                return array (  '_controller' => 'Simple\\ProfileBundle\\Controller\\UserController::editAction',  '_route' => 'user_edit',);
            }
            not_user_edit:

            // user_update
            if ($pathinfo === '/user/update') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_update;
                }

                return array (  '_controller' => 'Simple\\ProfileBundle\\Controller\\UserController::updateAction',  '_route' => 'user_update',);
            }
            not_user_update:

            // user_delete
            if ($pathinfo === '/user/delete') {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return array (  '_controller' => 'Simple\\ProfileBundle\\Controller\\UserController::deleteAction',  '_route' => 'user_delete',);
            }
            not_user_delete:

        }

        // cities
        if ($pathinfo === '/cities') {
            return array (  '_controller' => 'Simple\\ProfileBundle\\Controller\\UserController::searchCitiesAction',  '_route' => 'cities',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Simple\\ProfileBundle\\Controller\\SecurityController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Simple\\ProfileBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
