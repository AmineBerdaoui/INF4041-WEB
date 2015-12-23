<?php

/* EsieaBlogBundle:Article:menu.html.twig */
class __TwigTemplate_2b34d437298df144e57427b480fdf3c354c27c9754d95a2b2c1835b0be08876f extends Twig_Template
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
        $__internal_8b8acc0aa533c226a41a4f8d508c41ce39297b3ab75318711312437640f0578a = $this->env->getExtension("native_profiler");
        $__internal_8b8acc0aa533c226a41a4f8d508c41ce39297b3ab75318711312437640f0578a->enter($__internal_8b8acc0aa533c226a41a4f8d508c41ce39297b3ab75318711312437640f0578a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle:Article:menu.html.twig"));

        // line 3
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 6
            echo "    <li>
      <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esiea_blog_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>";
        
        $__internal_8b8acc0aa533c226a41a4f8d508c41ce39297b3ab75318711312437640f0578a->leave($__internal_8b8acc0aa533c226a41a4f8d508c41ce39297b3ab75318711312437640f0578a_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle:Article:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  37 => 8,  33 => 7,  30 => 6,  26 => 5,  22 => 3,);
    }
}
/* {# Ce template n'hérite de personne,*/
/*    tout comme le template inclus avec {{ include() }}. #}*/
/* */
/* <ul class="nav nav-pills nav-stacked">*/
/*   {% for advert in listAdverts %}*/
/*     <li>*/
/*       <a href="{{ path('esiea_blog_view', {'id': advert.id}) }}">*/
/*         {{ advert.title }}*/
/*       </a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
