<?php

/* EsieaBlogBundle:Article:form.html.twig */
class __TwigTemplate_e4f4ece6ee65ab414fc25e77926bee2c5103a51f210879fa57b1e7aa0a62c84c extends Twig_Template
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
        $__internal_e9148ec180f1175bc9e8fcf74bc1e9f632e06ff4afa258d18b675f550136be56 = $this->env->getExtension("native_profiler");
        $__internal_e9148ec180f1175bc9e8fcf74bc1e9f632e06ff4afa258d18b675f550136be56->enter($__internal_e9148ec180f1175bc9e8fcf74bc1e9f632e06ff4afa258d18b675f550136be56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Article:form.html.twig"));

        // line 1
        echo "<h3>Formulaire d'article</h3>

<div class=\"well\">
  ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 7
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group\">
      ";
        // line 11
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'article"));
        echo "

      ";
        // line 14
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

      <div class=\"col-sm-4\">
        ";
        // line 18
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    ";
        // line 23
        echo "    <div class=\"form-group\">
      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'annonce"));
        echo "
      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

  ";
        // line 32
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "writeDate", array()), 'row');
        echo "

  ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
  

  ";
        // line 38
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 43
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  
  ";
        // line 46
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_e9148ec180f1175bc9e8fcf74bc1e9f632e06ff4afa258d18b675f550136be56->leave($__internal_e9148ec180f1175bc9e8fcf74bc1e9f632e06ff4afa258d18b675f550136be56_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Article:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 46,  97 => 43,  91 => 38,  85 => 34,  79 => 32,  72 => 27,  67 => 25,  63 => 24,  60 => 23,  52 => 18,  45 => 14,  39 => 11,  32 => 7,  27 => 4,  22 => 1,);
    }
}
/* <h3>Formulaire d'article</h3>*/
/* */
/* <div class="well">*/
/*   {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*     {# Les erreurs générales du formulaire. #}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="form-group">*/
/*       {# Génération du label. #}*/
/*       {{ form_label(form.title, "Titre de l'article", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*       {# Affichage des erreurs pour ce champ précis. #}*/
/*       {{ form_errors(form.title) }}*/
/* */
/*       <div class="col-sm-4">*/
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     {# Idem pour un autre champ. #}*/
/*     <div class="form-group">*/
/*       {{ form_label(form.content, "Contenu de l'annonce", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*       {{ form_errors(form.title) }}*/
/*       <div class="col-sm-4">*/
/*         {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*   {# Génération du label + error + widget pour un champ #}*/
/*   {{ form_row(form.writeDate) }}*/
/* */
/*   {{ form_row(form.author) }}*/
/*   */
/* */
/*   {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*   {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/* */
/*   {# Génération automatique des champs pas encore écrits.*/
/*      Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*      et tous les champs cachés (type « hidden »). #}*/
/*   {{ form_rest(form) }}*/
/*   */
/*   {# Fermeture de la balise <form> du formulaire HTML #}*/
/*   {{ form_end(form) }}*/
/* </div>*/
