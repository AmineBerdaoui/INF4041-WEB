<?php

/* EsieaBlogBundle:Article:view.html.twig */
class __TwigTemplate_474f963d3a64663a80febaa6f8cdbafcca5ab97c6baa377825844556dffb03e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Article:view.html.twig", 1);
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
        echo "  Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "writeDate", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'article
    </a>
    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'article
    </a>
  </p>

";
    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Article:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  71 => 21,  64 => 17,  57 => 13,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'un article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>{{ article.title }}</h2>*/
/*   <i>Par {{ article.author }}, le {{ article.writeDate|date('d/m/Y') }}</i>*/
/* */
/*   <div class="well">*/
/*     {{ article.content }}*/
/*   </div>*/
/* */
/*   <p>*/
/*     <a href="{{ path('esiea_blog_homepage') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('esiea_blog_edit', {'id': article.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'article*/
/*     </a>*/
/*     <a href="{{ path('esiea_blog_delete', {'id': article.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'article*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
