<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3f8019ea8440524c6820ef6ff83f5490055f148a9977a4ed12cbdc4295aae2e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8aeb3f50590d8a0a90c7a309611bc1b316dd60d0101d73b401f59a9bc7338f90 = $this->env->getExtension("native_profiler");
        $__internal_8aeb3f50590d8a0a90c7a309611bc1b316dd60d0101d73b401f59a9bc7338f90->enter($__internal_8aeb3f50590d8a0a90c7a309611bc1b316dd60d0101d73b401f59a9bc7338f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aeb3f50590d8a0a90c7a309611bc1b316dd60d0101d73b401f59a9bc7338f90->leave($__internal_8aeb3f50590d8a0a90c7a309611bc1b316dd60d0101d73b401f59a9bc7338f90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9a47cd6740f7957739ddaa411a06f9380ad02757bf3aa2695b350dd5ad99f7f = $this->env->getExtension("native_profiler");
        $__internal_a9a47cd6740f7957739ddaa411a06f9380ad02757bf3aa2695b350dd5ad99f7f->enter($__internal_a9a47cd6740f7957739ddaa411a06f9380ad02757bf3aa2695b350dd5ad99f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a9a47cd6740f7957739ddaa411a06f9380ad02757bf3aa2695b350dd5ad99f7f->leave($__internal_a9a47cd6740f7957739ddaa411a06f9380ad02757bf3aa2695b350dd5ad99f7f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_98f36177589d2a8656a40db7ac1ece8110b1fb998bd4dff177822bd5c3132774 = $this->env->getExtension("native_profiler");
        $__internal_98f36177589d2a8656a40db7ac1ece8110b1fb998bd4dff177822bd5c3132774->enter($__internal_98f36177589d2a8656a40db7ac1ece8110b1fb998bd4dff177822bd5c3132774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_98f36177589d2a8656a40db7ac1ece8110b1fb998bd4dff177822bd5c3132774->leave($__internal_98f36177589d2a8656a40db7ac1ece8110b1fb998bd4dff177822bd5c3132774_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf7e4c0eb0e6203b3eaea14a32135eb73b434c6c7ad8a545e9c583466448b47b = $this->env->getExtension("native_profiler");
        $__internal_cf7e4c0eb0e6203b3eaea14a32135eb73b434c6c7ad8a545e9c583466448b47b->enter($__internal_cf7e4c0eb0e6203b3eaea14a32135eb73b434c6c7ad8a545e9c583466448b47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cf7e4c0eb0e6203b3eaea14a32135eb73b434c6c7ad8a545e9c583466448b47b->leave($__internal_cf7e4c0eb0e6203b3eaea14a32135eb73b434c6c7ad8a545e9c583466448b47b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
