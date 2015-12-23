<?php

/* EsieaBlogBundle::layout.html.twig */
class __TwigTemplate_165830f6307d5245c9c096f83a1b1ae4619fe30378d611d06b9ff07d60e7d131 extends Twig_Template
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
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        // line 87
        echo "        ";
    }

    // line 99
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  174 => 101,  172 => 100,  169 => 99,  165 => 87,  162 => 86,  151 => 17,  147 => 16,  144 => 15,  141 => 14,  135 => 109,  133 => 99,  126 => 95,  122 => 94,  114 => 88,  112 => 86,  106 => 83,  99 => 79,  95 => 78,  38 => 23,  36 => 14,  22 => 2,);
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
