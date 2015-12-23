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

        // esiea_blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'esiea_blog_homepage');
            }

            return array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::indexAction',  '_route' => 'esiea_blog_homepage',);
        }

        // task_success
        if ($pathinfo === '/lucky/number') {
            return array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\LuckyController::numberAction',  '_route' => 'task_success',);
        }

        // lucky_test2
        if ($pathinfo === '/api/lucky/number') {
            return array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\LuckyController::numberAction',  '_route' => 'lucky_test2',);
        }

        // esiea_blog_menu
        if ($pathinfo === '/menu') {
            return array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::menuAction',  '_route' => 'esiea_blog_menu',);
        }

        // esiea_blog_add
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::addAction',  '_route' => 'esiea_blog_add',);
        }

        // esiea_blog_form
        if ($pathinfo === '/form') {
            return array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::formAction',  '_route' => 'esiea_blog_form',);
        }

        // esiea_blog_view
        if (0 === strpos($pathinfo, '/Article') && preg_match('#^/Article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_view')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::viewAction',));
        }

        // esiea_blog_edit
        if (0 === strpos($pathinfo, '/mod') && preg_match('#^/mod/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_edit')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::editAction',));
        }

        // esiea_blog_delete
        if (0 === strpos($pathinfo, '/supp') && preg_match('#^/supp/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'esiea_blog_delete')), array (  '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::deleteAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
