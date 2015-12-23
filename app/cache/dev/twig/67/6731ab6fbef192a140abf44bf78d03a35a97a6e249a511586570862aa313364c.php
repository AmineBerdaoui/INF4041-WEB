<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_dd050230fcdb50d37ebbbbbe1251ca5679eb8c033bdf3a2fb097b3257adf0cf3 extends Twig_Template
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
        $__internal_31aa1368c6b6256f260652b9226039b31a7f16b2882a2651cdf0726c28eca661 = $this->env->getExtension("native_profiler");
        $__internal_31aa1368c6b6256f260652b9226039b31a7f16b2882a2651cdf0726c28eca661->enter($__internal_31aa1368c6b6256f260652b9226039b31a7f16b2882a2651cdf0726c28eca661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_31aa1368c6b6256f260652b9226039b31a7f16b2882a2651cdf0726c28eca661->leave($__internal_31aa1368c6b6256f260652b9226039b31a7f16b2882a2651cdf0726c28eca661_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
