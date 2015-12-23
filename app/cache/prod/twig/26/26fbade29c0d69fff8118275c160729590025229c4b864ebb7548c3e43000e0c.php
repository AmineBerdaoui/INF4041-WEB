<?php

/* EsieaBlogBundle:Article:delete.html.twig */
class __TwigTemplate_d5939d15d779117284c4aad328e416c3fe194bfb6ed3895dffe0b055897dde2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Article:delete.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EsieaBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Suppression d'article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>Suppression d'un article</h2>

  <p>
    Vous venez de supprimer un article.
  </p>

  <p>
    <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\" class=\"bouton boutonRetour\">
      Retour
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Article:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Suppression d'article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Suppression d'un article</h2>*/
/* */
/*   <p>*/
/*     Vous venez de supprimer un article.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('esiea_blog_homepage') }}" class="bouton boutonRetour">*/
/*       Retour*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
