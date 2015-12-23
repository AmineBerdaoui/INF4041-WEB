<?php

/* EsieaBlogBundle:Article:form.html.twig */
class __TwigTemplate_a1630be59a9ca49fbdeb7397d45904312f640534f0495b5a8ca5f7b92d796358 extends Twig_Template
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
        echo "<h3>Formulaire d'article</h3>

<div class=\"well\">
  ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

    ";
        // line 7
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

    <div class=\"form-group\">
      ";
        // line 11
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Titre de l'article"));
        echo "

      ";
        // line 14
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'errors');
        echo "

      <div class=\"col-sm-4\">
        ";
        // line 18
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

    ";
        // line 23
        echo "    <div class=\"form-group\">
      ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Contenu de l'annonce"));
        echo "
      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>

  ";
        // line 32
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "writeDate", array()), 'row');
        echo "

  ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "author", array()), 'row');
        echo "
  

  ";
        // line 38
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 43
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
  
  ";
        // line 46
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
</div>";
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
        return array (  100 => 46,  94 => 43,  88 => 38,  82 => 34,  76 => 32,  69 => 27,  64 => 25,  60 => 24,  57 => 23,  49 => 18,  42 => 14,  36 => 11,  29 => 7,  24 => 4,  19 => 1,);
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
