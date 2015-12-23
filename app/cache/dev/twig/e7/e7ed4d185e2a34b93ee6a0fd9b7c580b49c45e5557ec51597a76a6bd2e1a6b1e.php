<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_7dd51a5dbbc2ef9bedd2c8417245fdb95d64124963a1d64e4faf5f952427499e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75f6f43314eba1ef26cb2bcc04fb06e2fcbca15aa1e71176131984fcc8cf05c5 = $this->env->getExtension("native_profiler");
        $__internal_75f6f43314eba1ef26cb2bcc04fb06e2fcbca15aa1e71176131984fcc8cf05c5->enter($__internal_75f6f43314eba1ef26cb2bcc04fb06e2fcbca15aa1e71176131984fcc8cf05c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75f6f43314eba1ef26cb2bcc04fb06e2fcbca15aa1e71176131984fcc8cf05c5->leave($__internal_75f6f43314eba1ef26cb2bcc04fb06e2fcbca15aa1e71176131984fcc8cf05c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34f0be049a1d061985f2a7ca22564151b5848c48d896e593f9ffb30978339e0b = $this->env->getExtension("native_profiler");
        $__internal_34f0be049a1d061985f2a7ca22564151b5848c48d896e593f9ffb30978339e0b->enter($__internal_34f0be049a1d061985f2a7ca22564151b5848c48d896e593f9ffb30978339e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_34f0be049a1d061985f2a7ca22564151b5848c48d896e593f9ffb30978339e0b->leave($__internal_34f0be049a1d061985f2a7ca22564151b5848c48d896e593f9ffb30978339e0b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9b8db08680f60f2fcc1165fb9d02b5e04e2b84a5a04be42499e1228c9560eaf = $this->env->getExtension("native_profiler");
        $__internal_d9b8db08680f60f2fcc1165fb9d02b5e04e2b84a5a04be42499e1228c9560eaf->enter($__internal_d9b8db08680f60f2fcc1165fb9d02b5e04e2b84a5a04be42499e1228c9560eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_d9b8db08680f60f2fcc1165fb9d02b5e04e2b84a5a04be42499e1228c9560eaf->leave($__internal_d9b8db08680f60f2fcc1165fb9d02b5e04e2b84a5a04be42499e1228c9560eaf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd0e08cbfc3f76d96fd2c090ecdcfb809c134b4af5497ceef9298f8635c14725 = $this->env->getExtension("native_profiler");
        $__internal_bd0e08cbfc3f76d96fd2c090ecdcfb809c134b4af5497ceef9298f8635c14725->enter($__internal_bd0e08cbfc3f76d96fd2c090ecdcfb809c134b4af5497ceef9298f8635c14725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_bd0e08cbfc3f76d96fd2c090ecdcfb809c134b4af5497ceef9298f8635c14725->leave($__internal_bd0e08cbfc3f76d96fd2c090ecdcfb809c134b4af5497ceef9298f8635c14725_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_68c7a70abf6042dda76c300d3ec3273c3092d35be45a00ca6e2dad01755cb2d2 = $this->env->getExtension("native_profiler");
        $__internal_68c7a70abf6042dda76c300d3ec3273c3092d35be45a00ca6e2dad01755cb2d2->enter($__internal_68c7a70abf6042dda76c300d3ec3273c3092d35be45a00ca6e2dad01755cb2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_68c7a70abf6042dda76c300d3ec3273c3092d35be45a00ca6e2dad01755cb2d2->leave($__internal_68c7a70abf6042dda76c300d3ec3273c3092d35be45a00ca6e2dad01755cb2d2_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
