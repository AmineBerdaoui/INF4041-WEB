<?php

/* EsieaBlogBundle:Article:new.html.twig */
class __TwigTemplate_498313345a771ce5c5da034972d06a9b46e45925e39ef1b9d94e0c345e67a107 extends Twig_Template
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
        $__internal_f4155f43ea69a699953ae4b444d4e66e92f4be139a40c1bc7049f7bdfabf0a72 = $this->env->getExtension("native_profiler");
        $__internal_f4155f43ea69a699953ae4b444d4e66e92f4be139a40c1bc7049f7bdfabf0a72->enter($__internal_f4155f43ea69a699953ae4b444d4e66e92f4be139a40c1bc7049f7bdfabf0a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Article:new.html.twig"));

        // line 1
        echo "
<html>
\t<head>
\t\t<title>Page d'articles</title>
\t</head>
\t<body>
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t<p>Coucou !!!</p>
\t</body>
</html>";
        
        $__internal_f4155f43ea69a699953ae4b444d4e66e92f4be139a40c1bc7049f7bdfabf0a72->leave($__internal_f4155f43ea69a699953ae4b444d4e66e92f4be139a40c1bc7049f7bdfabf0a72_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Article:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 9,  34 => 8,  30 => 7,  22 => 1,);
    }
}
/* */
/* <html>*/
/* 	<head>*/
/* 		<title>Page d'articles</title>*/
/* 	</head>*/
/* 	<body>*/
/* 	{{ form_start(form) }}*/
/* 	{{ form_widget(form) }}*/
/* 	{{ form_end(form) }}*/
/* 	<p>Coucou !!!</p>*/
/* 	</body>*/
/* </html>*/
