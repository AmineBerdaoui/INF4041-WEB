<?php

/* EsieaBlogBundle:Article:add.html.twig */
class __TwigTemplate_b535d7e3c6dd82b4fc6c7b5bd3f050b22aa816469b9182c8299899a80976af55 extends Twig_Template
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
        $__internal_e37850a48c33ffa20292120ace2e303a7528480bd36740e9d45963a4e306f84d = $this->env->getExtension("native_profiler");
        $__internal_e37850a48c33ffa20292120ace2e303a7528480bd36740e9d45963a4e306f84d->enter($__internal_e37850a48c33ffa20292120ace2e303a7528480bd36740e9d45963a4e306f84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Article:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e37850a48c33ffa20292120ace2e303a7528480bd36740e9d45963a4e306f84d->leave($__internal_e37850a48c33ffa20292120ace2e303a7528480bd36740e9d45963a4e306f84d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfa4632d2706617e8bf45d4f75c25b5ad5a2893c94f8157626167ed4d37a4326 = $this->env->getExtension("native_profiler");
        $__internal_cfa4632d2706617e8bf45d4f75c25b5ad5a2893c94f8157626167ed4d37a4326->enter($__internal_cfa4632d2706617e8bf45d4f75c25b5ad5a2893c94f8157626167ed4d37a4326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cfa4632d2706617e8bf45d4f75c25b5ad5a2893c94f8157626167ed4d37a4326->leave($__internal_cfa4632d2706617e8bf45d4f75c25b5ad5a2893c94f8157626167ed4d37a4326_prof);

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
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
