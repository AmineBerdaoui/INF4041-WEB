<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ed862c3fc53c25534e2f52ffa009a5c969cfa91ae33af1a99a16ebf7fa2f5177 extends Twig_Template
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
        $__internal_df82f2cddb550d28ad526239982d31b968f5a3ec40cb3c0d5d7df1fcade9a6ec = $this->env->getExtension("native_profiler");
        $__internal_df82f2cddb550d28ad526239982d31b968f5a3ec40cb3c0d5d7df1fcade9a6ec->enter($__internal_df82f2cddb550d28ad526239982d31b968f5a3ec40cb3c0d5d7df1fcade9a6ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_df82f2cddb550d28ad526239982d31b968f5a3ec40cb3c0d5d7df1fcade9a6ec->leave($__internal_df82f2cddb550d28ad526239982d31b968f5a3ec40cb3c0d5d7df1fcade9a6ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
