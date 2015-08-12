<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

        // _assetic_d4f7f96
        if ($pathinfo === '/css/d4f7f96.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'd4f7f96',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_d4f7f96',);
        }

        // _assetic_0fb93bc
        if ($pathinfo === '/fonts/glyphicons-halflings-regular.woff') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '0fb93bc',  'pos' => NULL,  '_format' => 'woff',  '_route' => '_assetic_0fb93bc',);
        }

        // _assetic_a901966
        if ($pathinfo === '/js/a901966.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a901966',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a901966',);
        }

        // user_logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'user_logout');
        }

        if (0 === strpos($pathinfo, '/main')) {
            // med_celia_main
            if (rtrim($pathinfo, '/') === '/main') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'med_celia_main');
                }

                return array (  '_controller' => 'Med\\CeliaBundle\\Controller\\MainController::indexAction',  '_route' => 'med_celia_main',);
            }

            if (0 === strpos($pathinfo, '/main/delete')) {
                // med_celia_delete_cat
                if (0 === strpos($pathinfo, '/main/deletecat') && preg_match('#^/main/deletecat/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'med_celia_delete_cat')), array (  '_controller' => 'Med\\CeliaBundle\\Controller\\MainController::DeleteCategorieAction',));
                }

                // med_celia_delete_marque
                if (0 === strpos($pathinfo, '/main/deletemarque') && preg_match('#^/main/deletemarque/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'med_celia_delete_marque')), array (  '_controller' => 'Med\\CeliaBundle\\Controller\\MainController::DeleteMarqueAction',));
                }

            }

            if (0 === strpos($pathinfo, '/main/recette')) {
                // med_celia_recette
                if ($pathinfo === '/main/recette') {
                    return array (  '_controller' => 'Med\\CeliaBundle\\Controller\\RecetteController::indexAction',  '_route' => 'med_celia_recette',);
                }

                // med_celia_view_recette
                if (preg_match('#^/main/recette/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'med_celia_view_recette')), array (  '_controller' => 'Med\\CeliaBundle\\Controller\\RecetteController::viewAction',));
                }

                // med_celia_delete_recette
                if (0 === strpos($pathinfo, '/main/recette/delete') && preg_match('#^/main/recette/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'med_celia_delete_recette')), array (  '_controller' => 'Med\\CeliaBundle\\Controller\\RecetteController::deleteAction',));
                }

                // med_celia_add_recette
                if ($pathinfo === '/main/recette/add') {
                    return array (  '_controller' => 'Med\\CeliaBundle\\Controller\\RecetteController::addAction',  '_route' => 'med_celia_add_recette',);
                }

            }

            if (0 === strpos($pathinfo, '/main/produit')) {
                // med_celia_produit
                if ($pathinfo === '/main/produit') {
                    return array (  '_controller' => 'Med\\CeliaBundle\\Controller\\ProduitController::indexAction',  '_route' => 'med_celia_produit',);
                }

                // med_celia_view_produit
                if (preg_match('#^/main/produit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'med_celia_view_produit')), array (  '_controller' => 'Med\\CeliaBundle\\Controller\\ProduitController::viewAction',));
                }

                // med_celia_delete_produit
                if (0 === strpos($pathinfo, '/main/produit/delete') && preg_match('#^/main/produit/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'med_celia_delete_produit')), array (  '_controller' => 'Med\\CeliaBundle\\Controller\\ProduitController::deleteAction',));
                }

                // med_celia_add_produit
                if ($pathinfo === '/main/produit/add') {
                    return array (  '_controller' => 'Med\\CeliaBundle\\Controller\\ProduitController::addAction',  '_route' => 'med_celia_add_produit',);
                }

            }

        }

        // med_celia_get_produit
        if (rtrim($pathinfo, '/') === '/produits') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_med_celia_get_produit;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'med_celia_get_produit');
            }

            return array (  '_controller' => 'Med\\CeliaBundle\\Controller\\RestController::getAllProduitsAction',  '_format' => 'json',  '_route' => 'med_celia_get_produit',);
        }
        not_med_celia_get_produit:

        if (0 === strpos($pathinfo, '/recettes')) {
            // med_celia_get_recettes
            if (rtrim($pathinfo, '/') === '/recettes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_med_celia_get_recettes;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'med_celia_get_recettes');
                }

                return array (  '_controller' => 'Med\\CeliaBundle\\Controller\\RestController::getAllRecettesAction',  '_format' => 'json',  '_route' => 'med_celia_get_recettes',);
            }
            not_med_celia_get_recettes:

            // med_celia_get_recette
            if (preg_match('#^/recettes/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_med_celia_get_recette;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'med_celia_get_recette')), array (  '_controller' => 'Med\\CeliaBundle\\Controller\\RestController::getAction',  '_format' => 'json',));
            }
            not_med_celia_get_recette:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
