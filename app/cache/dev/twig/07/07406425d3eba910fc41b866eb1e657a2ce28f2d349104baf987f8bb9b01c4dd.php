<?php

/* EsieaBlogBundle:Default:index.html.twig */
class __TwigTemplate_cdfec834d2802063228e14c976192102289586c194a16e5ca6f3f2f48b62e39c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b10f3b8facf0a58cd5a91f9e48306bd3b4acd4027308cd1730bede6b31653a6c = $this->env->getExtension("native_profiler");
        $__internal_b10f3b8facf0a58cd5a91f9e48306bd3b4acd4027308cd1730bede6b31653a6c->enter($__internal_b10f3b8facf0a58cd5a91f9e48306bd3b4acd4027308cd1730bede6b31653a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_b10f3b8facf0a58cd5a91f9e48306bd3b4acd4027308cd1730bede6b31653a6c->leave($__internal_b10f3b8facf0a58cd5a91f9e48306bd3b4acd4027308cd1730bede6b31653a6c_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
