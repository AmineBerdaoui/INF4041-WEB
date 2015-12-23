<?php

/* EsieaBlogBundle:Article:delete.html.twig */
class __TwigTemplate_92a100734efd9080953a50c063da364d6dd141c11bb64965c058ad65835fe206 extends Twig_Template
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
        $__internal_445901085abb80b4428a43368b9e3893f49a5ac43719015f1b1a00002d7481d5 = $this->env->getExtension("native_profiler");
        $__internal_445901085abb80b4428a43368b9e3893f49a5ac43719015f1b1a00002d7481d5->enter($__internal_445901085abb80b4428a43368b9e3893f49a5ac43719015f1b1a00002d7481d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Article:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445901085abb80b4428a43368b9e3893f49a5ac43719015f1b1a00002d7481d5->leave($__internal_445901085abb80b4428a43368b9e3893f49a5ac43719015f1b1a00002d7481d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d98e9da8b4c447d3e7320b5f09f5ec404e90ba207d66b613a518ab50c4e8de0 = $this->env->getExtension("native_profiler");
        $__internal_5d98e9da8b4c447d3e7320b5f09f5ec404e90ba207d66b613a518ab50c4e8de0->enter($__internal_5d98e9da8b4c447d3e7320b5f09f5ec404e90ba207d66b613a518ab50c4e8de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Suppression d'article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5d98e9da8b4c447d3e7320b5f09f5ec404e90ba207d66b613a518ab50c4e8de0->leave($__internal_5d98e9da8b4c447d3e7320b5f09f5ec404e90ba207d66b613a518ab50c4e8de0_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fb8d27717d092f178f0e721e93e505d57db26db193415a7723d3519f809587d = $this->env->getExtension("native_profiler");
        $__internal_8fb8d27717d092f178f0e721e93e505d57db26db193415a7723d3519f809587d->enter($__internal_8fb8d27717d092f178f0e721e93e505d57db26db193415a7723d3519f809587d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8fb8d27717d092f178f0e721e93e505d57db26db193415a7723d3519f809587d->leave($__internal_8fb8d27717d092f178f0e721e93e505d57db26db193415a7723d3519f809587d_prof);

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
        return array (  67 => 16,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
