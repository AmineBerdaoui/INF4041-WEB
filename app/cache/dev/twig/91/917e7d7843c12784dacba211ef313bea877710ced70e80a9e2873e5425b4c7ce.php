<?php

/* EsieaBlogBundle::layout.html.twig */
class __TwigTemplate_f664fa9814b741311296f6dfbe60f609ee97b0b36edf4c2eccd05464e72e4a01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26194d6aff2e7a6fbd8b4ae27f64eac2f53761f16c16e71cdc6b8a199e54a790 = $this->env->getExtension("native_profiler");
        $__internal_26194d6aff2e7a6fbd8b4ae27f64eac2f53761f16c16e71cdc6b8a199e54a790->enter($__internal_26194d6aff2e7a6fbd8b4ae27f64eac2f53761f16c16e71cdc6b8a199e54a790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EsieaBlogBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<head>
  <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"Ce siite\">
    <meta name=\"author\" content=\"BERDAOUI\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  

  ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "  
</head>

<body>
  <div class=\"container\">

<nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">Blog</a>
          </div>
          <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
              <li class=\"active\"><a href=\"/\">Accueil</a></li>
              <li><a href=\"about\">A propos</a></li>
              <li><a href=\"contact\">Contact</a></li>
              <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Liens Bonus <span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"default\">Messi VS Ronaldo</a></li>
                  <li><a href=\"dultefa\">Les pépites de diamant</a></li>
                  <li><a href=\"default\">Something else here</a></li>
                  <li role=\"separator\" class=\"divider\"></li>
                  <li class=\"dropdown-header\">Nav header</li>
                  <li><a href=\"#\">Separated link</a></li>
                  <li><a href=\"#\">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
              <li class=\"active\"><a href=\"./\">Default <span class=\"sr-only\">(current)</span></a></li>
              <li><a href=\"../navbar-static-top/\">Static top</a></li>
              <li><a href=\"../navbar-fixed-top/\">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

    <div id=\"header\" class=\"jumbotron\">
      <h1>Site en construction</h1>
      <p>
        Nous sommes en PLS
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Menu Principal</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("esiea_blog_homepage");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 79
        echo $this->env->getExtension('routing')->getPath("esiea_blog_add");
        echo "\">Ajouter un article</a></li>
        </ul>

        <h4>Derniers articles</h4>
        ";
        // line 83
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("EsieaBlogBundle:Article:menu", array("limit" => 4)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "      </div>
    </div>

    <hr>

    <footer>
      <!--<p>The sky's the limit © ";
        // line 94
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>-->
      <h6>The world God only knows. ";
        // line 95
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</h1>
    </footer>
  </div>

";
        // line 99
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "
</body>
</html>";
        
        $__internal_26194d6aff2e7a6fbd8b4ae27f64eac2f53761f16c16e71cdc6b8a199e54a790->leave($__internal_26194d6aff2e7a6fbd8b4ae27f64eac2f53761f16c16e71cdc6b8a199e54a790_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_199c0019449175607aceccd29248c26502bbe52df3edaf925239cbffdac2c12e = $this->env->getExtension("native_profiler");
        $__internal_199c0019449175607aceccd29248c26502bbe52df3edaf925239cbffdac2c12e->enter($__internal_199c0019449175607aceccd29248c26502bbe52df3edaf925239cbffdac2c12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bootstrap/css/blog.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style type=\"text/css\">
      [class*=\"col\"] 
      img { width: 100%; }
      body { margin-top: 10px; }
    </style>
  ";
        
        $__internal_199c0019449175607aceccd29248c26502bbe52df3edaf925239cbffdac2c12e->leave($__internal_199c0019449175607aceccd29248c26502bbe52df3edaf925239cbffdac2c12e_prof);

    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        $__internal_d688f4d40ce564db6215e75c86b6ad42c0454cde9b6dac49969fe35c16459e60 = $this->env->getExtension("native_profiler");
        $__internal_d688f4d40ce564db6215e75c86b6ad42c0454cde9b6dac49969fe35c16459e60->enter($__internal_d688f4d40ce564db6215e75c86b6ad42c0454cde9b6dac49969fe35c16459e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 87
        echo "        ";
        
        $__internal_d688f4d40ce564db6215e75c86b6ad42c0454cde9b6dac49969fe35c16459e60->leave($__internal_d688f4d40ce564db6215e75c86b6ad42c0454cde9b6dac49969fe35c16459e60_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_022762529551e51ec27fc76e0854ef1d324d4d8706b56a9e8770940a62c604a9 = $this->env->getExtension("native_profiler");
        $__internal_022762529551e51ec27fc76e0854ef1d324d4d8706b56a9e8770940a62c604a9->enter($__internal_022762529551e51ec27fc76e0854ef1d324d4d8706b56a9e8770940a62c604a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "    ";
        // line 101
        echo "     <script src=\"https://code.jquery.com/jquery-1.11.2.min.js\"></script>
     <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX\" crossorigin=\"anonymous\">

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==\" crossorigin=\"anonymous\"></script>
   <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
<link rel=\"stylesheet\" type=\"text/css\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
  ";
        
        $__internal_022762529551e51ec27fc76e0854ef1d324d4d8706b56a9e8770940a62c604a9->leave($__internal_022762529551e51ec27fc76e0854ef1d324d4d8706b56a9e8770940a62c604a9_prof);

    }

    public function getTemplateName()
    {
        return "EsieaBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 101,  193 => 100,  187 => 99,  180 => 87,  174 => 86,  160 => 17,  156 => 16,  153 => 15,  147 => 14,  138 => 109,  136 => 99,  129 => 95,  125 => 94,  117 => 88,  115 => 86,  109 => 83,  102 => 79,  98 => 78,  41 => 23,  39 => 14,  25 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="Ce siite">*/
/*     <meta name="author" content="BERDAOUI">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   */
/* */
/*   {% block stylesheets %}*/
/* */
/*     <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('bootstrap/css/blog.css') }}" rel="stylesheet">*/
/*     <style type="text/css">*/
/*       [class*="col"] */
/*       img { width: 100%; }*/
/*       body { margin-top: 10px; }*/
/*     </style>*/
/*   {% endblock %}  */
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/* */
/* <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*           <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*               <span class="sr-only">Toggle navigation</span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="/">Blog</a>*/
/*           </div>*/
/*           <div id="navbar" class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav">*/
/*               <li class="active"><a href="/">Accueil</a></li>*/
/*               <li><a href="about">A propos</a></li>*/
/*               <li><a href="contact">Contact</a></li>*/
/*               <li class="dropdown">*/
/*                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Liens Bonus <span class="caret"></span></a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li><a href="default">Messi VS Ronaldo</a></li>*/
/*                   <li><a href="dultefa">Les pépites de diamant</a></li>*/
/*                   <li><a href="default">Something else here</a></li>*/
/*                   <li role="separator" class="divider"></li>*/
/*                   <li class="dropdown-header">Nav header</li>*/
/*                   <li><a href="#">Separated link</a></li>*/
/*                   <li><a href="#">One more separated link</a></li>*/
/*                 </ul>*/
/*               </li>*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*               <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>*/
/*               <li><a href="../navbar-static-top/">Static top</a></li>*/
/*               <li><a href="../navbar-fixed-top/">Fixed top</a></li>*/
/*             </ul>*/
/*           </div><!--/.nav-collapse -->*/
/*         </div><!--/.container-fluid -->*/
/*       </nav>*/
/* */
/*     <div id="header" class="jumbotron">*/
/*       <h1>Site en construction</h1>*/
/*       <p>*/
/*         Nous sommes en PLS*/
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Menu Principal</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('esiea_blog_homepage') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('esiea_blog_add') }}">Ajouter un article</a></li>*/
/*         </ul>*/
/* */
/*         <h4>Derniers articles</h4>*/
/*         {{ render(controller("EsieaBlogBundle:Article:menu", {'limit': 4})) }}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <!--<p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>-->*/
/*       <h6>The world God only knows. {{ 'now'|date('Y') }}</h1>*/
/*     </footer>*/
/*   </div>*/
/* */
/* {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*      <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>*/
/*      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">*/
/* */
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>*/
/*    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>*/
/* <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>*/
/* <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
