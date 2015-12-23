<?php

/* EsieaBlogBundle:Article:add.html.twig */
class __TwigTemplate_ac67e807b4ae29f24e9cf4540277175ad0a2afdfb8b94d35bde8f1260a9e8437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Article:add.html.twig", 1);
        $this->blocks = array(
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  <h2>Ajouter un article</h2>

  ";
        // line 7
        echo twig_include($this->env, $context, "EsieaBlogBundle:Article:form.html.twig");
        echo "

  <p>
    Attention : cet article sera ajouté directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Article:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter un article</h2>*/
/* */
/*   {{ include("EsieaBlogBundle:Article:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cet article sera ajouté directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
