<?php

/* EsieaBlogBundle:Article:edit.html.twig */
class __TwigTemplate_f49f63cd6d082ac6bbed830cd6cd311dba555cea47356fcc2c956e8d33d4c6a2 extends Twig_Template
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
        $__internal_3e72036c9605de8fd39867735a5d9f64a8a66134995006f5d52a23921a3dad2c = $this->env->getExtension("native_profiler");
        $__internal_3e72036c9605de8fd39867735a5d9f64a8a66134995006f5d52a23921a3dad2c->enter($__internal_3e72036c9605de8fd39867735a5d9f64a8a66134995006f5d52a23921a3dad2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Article:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e72036c9605de8fd39867735a5d9f64a8a66134995006f5d52a23921a3dad2c->leave($__internal_3e72036c9605de8fd39867735a5d9f64a8a66134995006f5d52a23921a3dad2c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e5f4190c8ae50bfe1c57dc80086675a6516e309929c3523806dc56af53fe23d = $this->env->getExtension("native_profiler");
        $__internal_3e5f4190c8ae50bfe1c57dc80086675a6516e309929c3523806dc56af53fe23d->enter($__internal_3e5f4190c8ae50bfe1c57dc80086675a6516e309929c3523806dc56af53fe23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3e5f4190c8ae50bfe1c57dc80086675a6516e309929c3523806dc56af53fe23d->leave($__internal_3e5f4190c8ae50bfe1c57dc80086675a6516e309929c3523806dc56af53fe23d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_259a951a6cc3f683d6bc8f94f140706a10fc4a6c76c9be832284b364f01b3b0d = $this->env->getExtension("native_profiler");
        $__internal_259a951a6cc3f683d6bc8f94f140706a10fc4a6c76c9be832284b364f01b3b0d->enter($__internal_259a951a6cc3f683d6bc8f94f140706a10fc4a6c76c9be832284b364f01b3b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_view", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'article
    </a>
  </p>

";
        
        $__internal_259a951a6cc3f683d6bc8f94f140706a10fc4a6c76c9be832284b364f01b3b0d->leave($__internal_259a951a6cc3f683d6bc8f94f140706a10fc4a6c76c9be832284b364f01b3b0d_prof);

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
        return array (  73 => 19,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
