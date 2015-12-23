<?php

/* EsieaBlogBundle:Article:edit.html.twig */
class __TwigTemplate_b77170ec9326e32e6d4199b11feb55867819d2743766b72ad38f33bf5798b978 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Article:edit.html.twig", 1);
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
        echo "  Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>Modifier un article</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "EsieaBlogBundle:Article:form.html.twig");
        echo "

  <p>
    Vous éditez un article déjà existant, merci de ne pas changer
    l'esprit générale de l'article déjà publié.
  </p>

  <p>
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'article
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier un article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Modifier un article</h2>*/
/* */
/*   {{ include("EsieaBlogBundle:Article:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez un article déjà existant, merci de ne pas changer*/
/*     l'esprit générale de l'article déjà publié.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('esiea_blog_view', {'id': article.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'article*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
