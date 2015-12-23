<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c1cc9a76fc2da2ecf5dfe3f9c9b4628284eff52bee15a80d00433215c5a79b5f extends Twig_Template
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
        $__internal_878ac9c3f07ed3cda2f5a520ebde2a82a3fb9f007633d20c4c9db1a681b8fd54 = $this->env->getExtension("native_profiler");
        $__internal_878ac9c3f07ed3cda2f5a520ebde2a82a3fb9f007633d20c4c9db1a681b8fd54->enter($__internal_878ac9c3f07ed3cda2f5a520ebde2a82a3fb9f007633d20c4c9db1a681b8fd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_878ac9c3f07ed3cda2f5a520ebde2a82a3fb9f007633d20c4c9db1a681b8fd54->leave($__internal_878ac9c3f07ed3cda2f5a520ebde2a82a3fb9f007633d20c4c9db1a681b8fd54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
