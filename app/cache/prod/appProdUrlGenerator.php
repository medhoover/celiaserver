<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_assetic_d4f7f96' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'd4f7f96',    'pos' => NULL,    '_format' => 'css',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/css/d4f7f96.css',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_0fb93bc' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => '0fb93bc',    'pos' => NULL,    '_format' => 'woff',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fonts/glyphicons-halflings-regular.woff',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_assetic_a901966' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'assetic.controller:render',    'name' => 'a901966',    'pos' => NULL,    '_format' => 'js',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/js/a901966.js',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_main' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/main/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_delete_cat' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\MainController::DeleteCategorieAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/main/deletecat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_delete_marque' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\MainController::DeleteMarqueAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/main/deletemarque',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_recette' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\RecetteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/main/recette',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_view_recette' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\RecetteController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/main/recette',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_delete_recette' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\RecetteController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/main/recette/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_add_recette' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\RecetteController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/main/recette/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_produit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\ProduitController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/main/produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_view_produit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\ProduitController::viewAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/main/produit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_delete_produit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\ProduitController::deleteAction',  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/main/produit/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_add_produit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\ProduitController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/main/produit/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_get_produit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\RestController::getAllProduitsAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => '(xml|json)',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/produits/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_get_recettes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\RestController::getAllRecettesAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => '(xml|json)',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recettes/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'med_celia_get_recette' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Med\\CeliaBundle\\Controller\\RestController::getAction',    '_format' => 'json',  ),  2 =>   array (    '_format' => '(xml|json)',    'id' => '\\d+',    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/recettes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
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
