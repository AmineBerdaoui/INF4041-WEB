<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b6eab335f8940d23a52a55e8cf4397a087746655d05706b8c9e20e5b40703062 extends Twig_Template
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
        $__internal_91c2de2a11cb61e3ca3e8188d1ba06b51bf64ecbf464b84e990c8fb56b72c2de = $this->env->getExtension("native_profiler");
        $__internal_91c2de2a11cb61e3ca3e8188d1ba06b51bf64ecbf464b84e990c8fb56b72c2de->enter($__internal_91c2de2a11cb61e3ca3e8188d1ba06b51bf64ecbf464b84e990c8fb56b72c2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_91c2de2a11cb61e3ca3e8188d1ba06b51bf64ecbf464b84e990c8fb56b72c2de->leave($__internal_91c2de2a11cb61e3ca3e8188d1ba06b51bf64ecbf464b84e990c8fb56b72c2de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
