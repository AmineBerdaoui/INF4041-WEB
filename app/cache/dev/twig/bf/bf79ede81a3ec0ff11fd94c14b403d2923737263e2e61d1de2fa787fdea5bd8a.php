<?php

/* EsieaBlogBundle:Article:view.html.twig */
class __TwigTemplate_d4ed376e8e2a895d0154e8b5b06f91fce087f0b8989895366feecfe5cc47bda2 extends Twig_Template
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
        $__internal_a59235c1152641acbcca67a29a33b6ad43419f30ef0be71405e4df387d0182e6 = $this->env->getExtension("native_profiler");
        $__internal_a59235c1152641acbcca67a29a33b6ad43419f30ef0be71405e4df387d0182e6->enter($__internal_a59235c1152641acbcca67a29a33b6ad43419f30ef0be71405e4df387d0182e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Article:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a59235c1152641acbcca67a29a33b6ad43419f30ef0be71405e4df387d0182e6->leave($__internal_a59235c1152641acbcca67a29a33b6ad43419f30ef0be71405e4df387d0182e6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7918cb804a1057e838d9af1dd777f357e52875339d2a39d6ab1793062402d2a = $this->env->getExtension("native_profiler");
        $__internal_b7918cb804a1057e838d9af1dd777f357e52875339d2a39d6ab1793062402d2a->enter($__internal_b7918cb804a1057e838d9af1dd777f357e52875339d2a39d6ab1793062402d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Lecture d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b7918cb804a1057e838d9af1dd777f357e52875339d2a39d6ab1793062402d2a->leave($__internal_b7918cb804a1057e838d9af1dd777f357e52875339d2a39d6ab1793062402d2a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_13b12366d49652fb2a55f588fedbfb8b553d963dce75caffaf25ed348961a017 = $this->env->getExtension("native_profiler");
        $__internal_13b12366d49652fb2a55f588fedbfb8b553d963dce75caffaf25ed348961a017->enter($__internal_13b12366d49652fb2a55f588fedbfb8b553d963dce75caffaf25ed348961a017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "writeDate", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'article
    </a>
    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'article
    </a>
  </p>

";
        
        $__internal_13b12366d49652fb2a55f588fedbfb8b553d963dce75caffaf25ed348961a017->leave($__internal_13b12366d49652fb2a55f588fedbfb8b553d963dce75caffaf25ed348961a017_prof);

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
        return array (  93 => 25,  86 => 21,  79 => 17,  72 => 13,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
