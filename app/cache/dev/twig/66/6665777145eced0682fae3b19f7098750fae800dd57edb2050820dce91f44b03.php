<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ba34fce74b63f887a6ec6c70c791fc8d6f5a934a83b2d4407569569c70724fe4 extends Twig_Template
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
        $__internal_a5a36011ac48586713696122d25958390a0f0b78559f12c9349b76a887e3f5e3 = $this->env->getExtension("native_profiler");
        $__internal_a5a36011ac48586713696122d25958390a0f0b78559f12c9349b76a887e3f5e3->enter($__internal_a5a36011ac48586713696122d25958390a0f0b78559f12c9349b76a887e3f5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_a5a36011ac48586713696122d25958390a0f0b78559f12c9349b76a887e3f5e3->leave($__internal_a5a36011ac48586713696122d25958390a0f0b78559f12c9349b76a887e3f5e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
