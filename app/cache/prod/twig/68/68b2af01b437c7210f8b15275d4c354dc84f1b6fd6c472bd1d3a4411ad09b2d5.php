<?php

/* EsieaBlogBundle:Article:new.html.twig */
class __TwigTemplate_e1ccb81bbad8269cf851e4cc602e9c1919fc46578697b51b3cb4df944297926c extends Twig_Template
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
        // line 1
        echo "
<html>
\t<head>
\t\t<title>Page d'articles</title>
\t</head>
\t<body>
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
\t";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
\t<p>Coucou !!!</p>
\t</body>
</html>";
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
        return array (  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
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
