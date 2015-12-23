<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_177f4252f7b358e479d46295dd013ac1ed8f844a239bb15db3828d60a333e358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8591d46787f7336f9d24b1bfac128ab65dea568ee875e80de9b261210ce4fe5 = $this->env->getExtension("native_profiler");
        $__internal_c8591d46787f7336f9d24b1bfac128ab65dea568ee875e80de9b261210ce4fe5->enter($__internal_c8591d46787f7336f9d24b1bfac128ab65dea568ee875e80de9b261210ce4fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8591d46787f7336f9d24b1bfac128ab65dea568ee875e80de9b261210ce4fe5->leave($__internal_c8591d46787f7336f9d24b1bfac128ab65dea568ee875e80de9b261210ce4fe5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a80ef83d408d2ee17be4a45bb799b8fb46b7edab6719ac1d0f2ab041d210c90 = $this->env->getExtension("native_profiler");
        $__internal_0a80ef83d408d2ee17be4a45bb799b8fb46b7edab6719ac1d0f2ab041d210c90->enter($__internal_0a80ef83d408d2ee17be4a45bb799b8fb46b7edab6719ac1d0f2ab041d210c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0a80ef83d408d2ee17be4a45bb799b8fb46b7edab6719ac1d0f2ab041d210c90->leave($__internal_0a80ef83d408d2ee17be4a45bb799b8fb46b7edab6719ac1d0f2ab041d210c90_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d42ef735d4d594a935280a930a6203e31689a4f89c9b98c9bb32cc12fc5e382 = $this->env->getExtension("native_profiler");
        $__internal_6d42ef735d4d594a935280a930a6203e31689a4f89c9b98c9bb32cc12fc5e382->enter($__internal_6d42ef735d4d594a935280a930a6203e31689a4f89c9b98c9bb32cc12fc5e382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6d42ef735d4d594a935280a930a6203e31689a4f89c9b98c9bb32cc12fc5e382->leave($__internal_6d42ef735d4d594a935280a930a6203e31689a4f89c9b98c9bb32cc12fc5e382_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
