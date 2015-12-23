<?php

/* EsieaBlogBundle:Article:index.html.twig */
class __TwigTemplate_9e631009ed466d22b6a64c25fa7f9c477214636ca17929e8dd7baad0d62c34d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EsieaBlogBundle::layout.html.twig", "EsieaBlogBundle:Article:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EsieaBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e883a649c81545efffc33532bb9ae472e3a950b93caa4666927f431be5f7092 = $this->env->getExtension("native_profiler");
        $__internal_5e883a649c81545efffc33532bb9ae472e3a950b93caa4666927f431be5f7092->enter($__internal_5e883a649c81545efffc33532bb9ae472e3a950b93caa4666927f431be5f7092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Article:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e883a649c81545efffc33532bb9ae472e3a950b93caa4666927f431be5f7092->leave($__internal_5e883a649c81545efffc33532bb9ae472e3a950b93caa4666927f431be5f7092_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9969d4112aa632025fa55f48b03fb6184d9cd3df33b16a645f27035a02c8049e = $this->env->getExtension("native_profiler");
        $__internal_9969d4112aa632025fa55f48b03fb6184d9cd3df33b16a645f27035a02c8049e->enter($__internal_9969d4112aa632025fa55f48b03fb6184d9cd3df33b16a645f27035a02c8049e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9969d4112aa632025fa55f48b03fb6184d9cd3df33b16a645f27035a02c8049e->leave($__internal_9969d4112aa632025fa55f48b03fb6184d9cd3df33b16a645f27035a02c8049e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6d447a6aaac1f2974125a803b30f2cb57ea974e9ab0316c3add4b431cecac6f = $this->env->getExtension("native_profiler");
        $__internal_c6d447a6aaac1f2974125a803b30f2cb57ea974e9ab0316c3add4b431cecac6f->enter($__internal_c6d447a6aaac1f2974125a803b30f2cb57ea974e9ab0316c3add4b431cecac6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
  <h2>Liste des articles</h2>

  <ul>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 13
            echo "      <li>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "writeDate", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "      <li>Pas (encore !) d'articles</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </ul>

";
        
        $__internal_c6d447a6aaac1f2974125a803b30f2cb57ea974e9ab0316c3add4b431cecac6f->leave($__internal_c6d447a6aaac1f2974125a803b30f2cb57ea974e9ab0316c3add4b431cecac6f_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 23,  92 => 21,  84 => 18,  80 => 17,  75 => 15,  71 => 14,  68 => 13,  63 => 12,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "EsieaBlogBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Liste des articles</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('esiea_blog_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.writeDate|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'articles</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
