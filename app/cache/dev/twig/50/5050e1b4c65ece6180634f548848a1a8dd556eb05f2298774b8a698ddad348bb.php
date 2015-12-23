<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_07618ffcefd2aaff96ac599d297f5229a653e88fba3ef375ecb4f45b64481a05 extends Twig_Template
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
        $__internal_3c37f5c11f9b2cffc4577ef8b7a63df19f59558e96047b3b46a65bca6f32ce71 = $this->env->getExtension("native_profiler");
        $__internal_3c37f5c11f9b2cffc4577ef8b7a63df19f59558e96047b3b46a65bca6f32ce71->enter($__internal_3c37f5c11f9b2cffc4577ef8b7a63df19f59558e96047b3b46a65bca6f32ce71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3c37f5c11f9b2cffc4577ef8b7a63df19f59558e96047b3b46a65bca6f32ce71->leave($__internal_3c37f5c11f9b2cffc4577ef8b7a63df19f59558e96047b3b46a65bca6f32ce71_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
