<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_096ed86f5682f3edfefda4e6b60a3ca177a2b4bacb7cdde37ff916a6cbe07503 extends Twig_Template
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
        $__internal_3e7babfaab37a545ad7749a881db026b702b40d6c8ebe56417998c3609793cd8 = $this->env->getExtension("native_profiler");
        $__internal_3e7babfaab37a545ad7749a881db026b702b40d6c8ebe56417998c3609793cd8->enter($__internal_3e7babfaab37a545ad7749a881db026b702b40d6c8ebe56417998c3609793cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3e7babfaab37a545ad7749a881db026b702b40d6c8ebe56417998c3609793cd8->leave($__internal_3e7babfaab37a545ad7749a881db026b702b40d6c8ebe56417998c3609793cd8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
