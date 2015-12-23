<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8b17e7e210bfb55c67f4019ade666cce3924b52d3b00696835c59f809fdc7dda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08a631a5846630de95b5930f6bdbaccc1e7aee9f633d906f0bbaa97827fca07a = $this->env->getExtension("native_profiler");
        $__internal_08a631a5846630de95b5930f6bdbaccc1e7aee9f633d906f0bbaa97827fca07a->enter($__internal_08a631a5846630de95b5930f6bdbaccc1e7aee9f633d906f0bbaa97827fca07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_08a631a5846630de95b5930f6bdbaccc1e7aee9f633d906f0bbaa97827fca07a->leave($__internal_08a631a5846630de95b5930f6bdbaccc1e7aee9f633d906f0bbaa97827fca07a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc25a47b764cd088c9cb291dedbd609a6a5508bab838f21cd475a6ed2b4e7123 = $this->env->getExtension("native_profiler");
        $__internal_fc25a47b764cd088c9cb291dedbd609a6a5508bab838f21cd475a6ed2b4e7123->enter($__internal_fc25a47b764cd088c9cb291dedbd609a6a5508bab838f21cd475a6ed2b4e7123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fc25a47b764cd088c9cb291dedbd609a6a5508bab838f21cd475a6ed2b4e7123->leave($__internal_fc25a47b764cd088c9cb291dedbd609a6a5508bab838f21cd475a6ed2b4e7123_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
