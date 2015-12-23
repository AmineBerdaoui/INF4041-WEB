<?php

/* base.html.twig */
class __TwigTemplate_62c7ce85c0e6ef7498c6dfe354ab85d49bbdd82cde3e592ef38557bbd82fb3de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69c8dbed8552a502192ccb53ccd85b5042bdffe4a4433a898082d77d4fd87b87 = $this->env->getExtension("native_profiler");
        $__internal_69c8dbed8552a502192ccb53ccd85b5042bdffe4a4433a898082d77d4fd87b87->enter($__internal_69c8dbed8552a502192ccb53ccd85b5042bdffe4a4433a898082d77d4fd87b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_69c8dbed8552a502192ccb53ccd85b5042bdffe4a4433a898082d77d4fd87b87->leave($__internal_69c8dbed8552a502192ccb53ccd85b5042bdffe4a4433a898082d77d4fd87b87_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_afb16330a1d166c23588f5cf30125b3abc112cbce2c995fae030a777cc2350f1 = $this->env->getExtension("native_profiler");
        $__internal_afb16330a1d166c23588f5cf30125b3abc112cbce2c995fae030a777cc2350f1->enter($__internal_afb16330a1d166c23588f5cf30125b3abc112cbce2c995fae030a777cc2350f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_afb16330a1d166c23588f5cf30125b3abc112cbce2c995fae030a777cc2350f1->leave($__internal_afb16330a1d166c23588f5cf30125b3abc112cbce2c995fae030a777cc2350f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b26a52f0630bb8fa31d2a3a467c7c096efcf9df555c8d40126130bbc6ba910a6 = $this->env->getExtension("native_profiler");
        $__internal_b26a52f0630bb8fa31d2a3a467c7c096efcf9df555c8d40126130bbc6ba910a6->enter($__internal_b26a52f0630bb8fa31d2a3a467c7c096efcf9df555c8d40126130bbc6ba910a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b26a52f0630bb8fa31d2a3a467c7c096efcf9df555c8d40126130bbc6ba910a6->leave($__internal_b26a52f0630bb8fa31d2a3a467c7c096efcf9df555c8d40126130bbc6ba910a6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6531b000d9c4c3871a3ddc40bce6e83c53e99d2d6ea47e61c24121c2a475f114 = $this->env->getExtension("native_profiler");
        $__internal_6531b000d9c4c3871a3ddc40bce6e83c53e99d2d6ea47e61c24121c2a475f114->enter($__internal_6531b000d9c4c3871a3ddc40bce6e83c53e99d2d6ea47e61c24121c2a475f114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6531b000d9c4c3871a3ddc40bce6e83c53e99d2d6ea47e61c24121c2a475f114->leave($__internal_6531b000d9c4c3871a3ddc40bce6e83c53e99d2d6ea47e61c24121c2a475f114_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_30908aea2dd373c4ca9345b933f7bb75d3f30220fba032e52bdc3720f47657a9 = $this->env->getExtension("native_profiler");
        $__internal_30908aea2dd373c4ca9345b933f7bb75d3f30220fba032e52bdc3720f47657a9->enter($__internal_30908aea2dd373c4ca9345b933f7bb75d3f30220fba032e52bdc3720f47657a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_30908aea2dd373c4ca9345b933f7bb75d3f30220fba032e52bdc3720f47657a9->leave($__internal_30908aea2dd373c4ca9345b933f7bb75d3f30220fba032e52bdc3720f47657a9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
