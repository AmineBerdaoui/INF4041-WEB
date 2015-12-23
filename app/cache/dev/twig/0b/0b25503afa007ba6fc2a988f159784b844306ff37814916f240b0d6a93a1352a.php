<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b8f28fc0d1b0bc5bc17b000f267eb46f91bbb10bec435b42136bf0c282193e50 extends Twig_Template
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
        $__internal_ebdbc510cae4e395d609ed0d850a9ecd292f53e85ad5bd8da19f08b77cbc16de = $this->env->getExtension("native_profiler");
        $__internal_ebdbc510cae4e395d609ed0d850a9ecd292f53e85ad5bd8da19f08b77cbc16de->enter($__internal_ebdbc510cae4e395d609ed0d850a9ecd292f53e85ad5bd8da19f08b77cbc16de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ebdbc510cae4e395d609ed0d850a9ecd292f53e85ad5bd8da19f08b77cbc16de->leave($__internal_ebdbc510cae4e395d609ed0d850a9ecd292f53e85ad5bd8da19f08b77cbc16de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
