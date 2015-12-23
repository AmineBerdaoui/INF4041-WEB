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
        'esiea_blog_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'task_success' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\LuckyController::numberAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lucky/number',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'lucky_test2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\LuckyController::numberAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/lucky/number',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esiea_blog_menu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::menuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/menu',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esiea_blog_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esiea_blog_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::formAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esiea_blog_view' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::viewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Article',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esiea_blog_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/mod',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'esiea_blog_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Esiea\\BlogBundle\\Controller\\ArticleController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/supp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
