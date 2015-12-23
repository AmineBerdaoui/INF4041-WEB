<?php

/* ::base.html.twig */
class __TwigTemplate_1bb30ff180f97f09b1bc1d5e4fe0e94f0cdd8b1009b0b9f78356ed48f4571056 extends Twig_Template
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
        $__internal_797c5db571f28a44bb8d8478bc11cae278f2785a1f714ed0b70bb857dcf63e50 = $this->env->getExtension("native_profiler");
        $__internal_797c5db571f28a44bb8d8478bc11cae278f2785a1f714ed0b70bb857dcf63e50->enter($__internal_797c5db571f28a44bb8d8478bc11cae278f2785a1f714ed0b70bb857dcf63e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_797c5db571f28a44bb8d8478bc11cae278f2785a1f714ed0b70bb857dcf63e50->leave($__internal_797c5db571f28a44bb8d8478bc11cae278f2785a1f714ed0b70bb857dcf63e50_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c010e45226ca3e5077b93d5a33c9ff6bef4b5c61dc780c10aedfaca4c0e7855b = $this->env->getExtension("native_profiler");
        $__internal_c010e45226ca3e5077b93d5a33c9ff6bef4b5c61dc780c10aedfaca4c0e7855b->enter($__internal_c010e45226ca3e5077b93d5a33c9ff6bef4b5c61dc780c10aedfaca4c0e7855b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c010e45226ca3e5077b93d5a33c9ff6bef4b5c61dc780c10aedfaca4c0e7855b->leave($__internal_c010e45226ca3e5077b93d5a33c9ff6bef4b5c61dc780c10aedfaca4c0e7855b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df8029a060f086ed98a538880657c34abf0b3a9954cf436e2f120c875011d643 = $this->env->getExtension("native_profiler");
        $__internal_df8029a060f086ed98a538880657c34abf0b3a9954cf436e2f120c875011d643->enter($__internal_df8029a060f086ed98a538880657c34abf0b3a9954cf436e2f120c875011d643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_df8029a060f086ed98a538880657c34abf0b3a9954cf436e2f120c875011d643->leave($__internal_df8029a060f086ed98a538880657c34abf0b3a9954cf436e2f120c875011d643_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c559de9e7490ad6993e47e2808eb43cfb045119e01a5c17183b9e82ceafb511d = $this->env->getExtension("native_profiler");
        $__internal_c559de9e7490ad6993e47e2808eb43cfb045119e01a5c17183b9e82ceafb511d->enter($__internal_c559de9e7490ad6993e47e2808eb43cfb045119e01a5c17183b9e82ceafb511d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c559de9e7490ad6993e47e2808eb43cfb045119e01a5c17183b9e82ceafb511d->leave($__internal_c559de9e7490ad6993e47e2808eb43cfb045119e01a5c17183b9e82ceafb511d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_478532a33c471732ed4d5e5bbcc16172e4e4598b223e6ec01dc0245cc8dbf40c = $this->env->getExtension("native_profiler");
        $__internal_478532a33c471732ed4d5e5bbcc16172e4e4598b223e6ec01dc0245cc8dbf40c->enter($__internal_478532a33c471732ed4d5e5bbcc16172e4e4598b223e6ec01dc0245cc8dbf40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_478532a33c471732ed4d5e5bbcc16172e4e4598b223e6ec01dc0245cc8dbf40c->leave($__internal_478532a33c471732ed4d5e5bbcc16172e4e4598b223e6ec01dc0245cc8dbf40c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
