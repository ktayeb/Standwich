<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_b8c55721a463f0f635caa5d9d5c3c0f8228e32d7bda5daa5b0a5bf570a798c85 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'section' => [$this, 'block_section'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
     \t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Font-Awesome-master/css/all.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/bootstrap.min.js"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/js/jquery.js"), "html", null, true);
        echo "\">
\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>


        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    
         <style> 
        \t
        /* Setting the stroke to green using rgb values (0, 128, 0) */ 
          
        .custom-toggler .navbar-toggler-icon { 
            background-image: url( 
\"data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E\"); 

        } 

    </style> 


    </head>
    <body style=\"/*background-image:url(img/imagedefond.jpg)*/ background-color: black;\" >
    \t<div class=\"container\">
    \t\t<!-- En tete-->
    \t\t<header class=\"fixed-top position-sticky\" >
    \t\t\t
    \t\t\t<nav class=\"navbar-nav navbar-expand-lg\" style=\"margin-bottom: 5px; padding-left: 15px; background-color: #850606 \" >
    \t\t\t\t<a  class=\"navbar-brand\" href=\"/\" >
    \t\t\t\t\t<div align=\"center\"><i class=\" fas fa-home fa-3x\" style=\"color: black;\"  ></i>
    \t\t\t\t\t<strong><h5 style=\"font-family: fantasy; color: #775935\">Stand'Wich</h5></strong>
    \t\t\t\t\t</div>
    \t\t\t\t</a>
    \t\t\t\t<button class=\"navbar-toggler custom-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    \t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
    \t\t\t\t</button>

    \t\t\t\t<div class=\"collapse navbar-collapse \" id=\"navbarColor02\" >
    \t\t\t\t\t<ul class=\"navbar-nav mx-auto\" style=\"font-family: fantasy; \"  >
    \t\t\t\t\t\t<li class=\"nav-item active\" style=\"border:2px solid #666\">
    \t\t\t\t\t\t\t<a style=\"font-size:1.2em; text-align: center; color: white\" class=\"nav-link waves-effect waves-light\" href=\"/connection\">Connexion<span class=\"sr-only\">(current)</span></a>
    \t\t\t\t\t\t</li>

    \t\t\t\t\t\t<li class=\"nav-item\" style=\"border:2px solid #666\"\t>
    \t\t\t\t\t\t\t<a style=\"font-size:1.2em; text-align: center; color: white\" class=\"nav-link\" href=\"/menu\">Menu<span class=\"sr-only\">(current)</span></a>
    \t\t\t\t\t\t</li>

    \t\t\t\t\t\t<li class=\"nav-item\" style=\"border:2px solid #666\">
    \t\t\t\t\t\t\t<a style=\"font-size:1.2em; text-align: center; color: white\" class=\"nav-link\" href=\"/commande\">Commander</a>
    \t\t\t\t\t\t</li>

    \t\t\t\t\t\t<li class=\"nav-item\" style=\"border:2px solid #666\">
    \t\t\t\t\t\t\t<a style=\"font-size:1.2em; text-align: center; color: white\" class=\"nav-link\" href=\"/contact\">Contact</a>
    \t\t\t\t\t\t</li>
    \t\t\t\t\t</ul>
\t    \t\t\t\t<div align=\"center\" style=\"padding-top: 15px;padding-bottom: 15px\">\t
\t    \t\t\t\t\t<!--Telephone-->
\t    \t\t\t\t\t<a class=\" \tfas fa-phone mr-3 fa-2x\" style=\"color: white;\" role=\"button\"><i ></i></a>
\t    \t\t\t\t\t<!--Maps-->
\t    \t\t\t\t\t<a class=\" \tfas fa-map-marker-alt mr-3 fa-2x\t\" style=\"color: white;\" role=\"button\"><i ></i></a>

\t    \t\t\t\t\t<!--Facebook-->
\t\t\t\t\t\t\t<a class=\"fb-ic mr-3\" style=\"color: black;\" role=\"button\"><i class=\"fab fa-lg fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t<!--Google +-->
\t\t\t\t\t\t\t<a class=\"gplus-ic mr-3\" style=\"color: black;\" role=\"button\"><i class=\"fab fa-lg fa-google\"></i></a>
\t\t\t\t\t\t\t<!--Instagram-->
\t\t\t\t\t\t\t<a class=\"ins-ic mr-3\" style=\"color: black;\" role=\"button\"><i class=\"fab fa-lg fa-instagram\"></i></a>
\t\t\t\t\t\t</div>\t
    \t\t\t\t</div>
    \t\t\t</nav>
    \t\t</header>

    \t\t<!-- Corps du site-->
    \t\t<section class=\"container \" >
    \t\t\t";
        // line 83
        $this->displayBlock('section', $context, $blocks);
        // line 84
        echo "    \t\t\t
    \t\t\t

    \t\t</section>

    \t\t<!-- Pied de page-->
    \t\t<footer class=\"fixed-bottom position-relative\" style=\"background-color: #850606; margin-top:5px\">
    \t\t\t<h5 align=\"center\" style=\"color: white\">© 2019 • Stand'wich • Tous droits réservés</h1>
    \t\t</footer>
    \t</div>
        
        ";
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 96
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Stand'Wich | Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  233 => 95,  215 => 83,  197 => 15,  178 => 5,  166 => 96,  164 => 95,  151 => 84,  149 => 83,  80 => 16,  78 => 15,  69 => 9,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Stand'Wich | Welcome!{% endblock %}</title>
     \t<link rel=\"stylesheet\" href=\"{{ asset('/css/bootstrap.min.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('/Font-Awesome-master/css/all.css') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('/js/bootstrap.min.js') }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ asset('/js/jquery.js') }}\">
\t\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js\" integrity=\"sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js\" integrity=\"sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k\" crossorigin=\"anonymous\"></script>


        {% block stylesheets %}{% endblock %}
    
         <style> 
        \t
        /* Setting the stroke to green using rgb values (0, 128, 0) */ 
          
        .custom-toggler .navbar-toggler-icon { 
            background-image: url( 
\"data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.8)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E\"); 

        } 

    </style> 


    </head>
    <body style=\"/*background-image:url(img/imagedefond.jpg)*/ background-color: black;\" >
    \t<div class=\"container\">
    \t\t<!-- En tete-->
    \t\t<header class=\"fixed-top position-sticky\" >
    \t\t\t
    \t\t\t<nav class=\"navbar-nav navbar-expand-lg\" style=\"margin-bottom: 5px; padding-left: 15px; background-color: #850606 \" >
    \t\t\t\t<a  class=\"navbar-brand\" href=\"/\" >
    \t\t\t\t\t<div align=\"center\"><i class=\" fas fa-home fa-3x\" style=\"color: black;\"  ></i>
    \t\t\t\t\t<strong><h5 style=\"font-family: fantasy; color: #775935\">Stand'Wich</h5></strong>
    \t\t\t\t\t</div>
    \t\t\t\t</a>
    \t\t\t\t<button class=\"navbar-toggler custom-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    \t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
    \t\t\t\t</button>

    \t\t\t\t<div class=\"collapse navbar-collapse \" id=\"navbarColor02\" >
    \t\t\t\t\t<ul class=\"navbar-nav mx-auto\" style=\"font-family: fantasy; \"  >
    \t\t\t\t\t\t<li class=\"nav-item active\" style=\"border:2px solid #666\">
    \t\t\t\t\t\t\t<a style=\"font-size:1.2em; text-align: center; color: white\" class=\"nav-link waves-effect waves-light\" href=\"/connection\">Connexion<span class=\"sr-only\">(current)</span></a>
    \t\t\t\t\t\t</li>

    \t\t\t\t\t\t<li class=\"nav-item\" style=\"border:2px solid #666\"\t>
    \t\t\t\t\t\t\t<a style=\"font-size:1.2em; text-align: center; color: white\" class=\"nav-link\" href=\"/menu\">Menu<span class=\"sr-only\">(current)</span></a>
    \t\t\t\t\t\t</li>

    \t\t\t\t\t\t<li class=\"nav-item\" style=\"border:2px solid #666\">
    \t\t\t\t\t\t\t<a style=\"font-size:1.2em; text-align: center; color: white\" class=\"nav-link\" href=\"/commande\">Commander</a>
    \t\t\t\t\t\t</li>

    \t\t\t\t\t\t<li class=\"nav-item\" style=\"border:2px solid #666\">
    \t\t\t\t\t\t\t<a style=\"font-size:1.2em; text-align: center; color: white\" class=\"nav-link\" href=\"/contact\">Contact</a>
    \t\t\t\t\t\t</li>
    \t\t\t\t\t</ul>
\t    \t\t\t\t<div align=\"center\" style=\"padding-top: 15px;padding-bottom: 15px\">\t
\t    \t\t\t\t\t<!--Telephone-->
\t    \t\t\t\t\t<a class=\" \tfas fa-phone mr-3 fa-2x\" style=\"color: white;\" role=\"button\"><i ></i></a>
\t    \t\t\t\t\t<!--Maps-->
\t    \t\t\t\t\t<a class=\" \tfas fa-map-marker-alt mr-3 fa-2x\t\" style=\"color: white;\" role=\"button\"><i ></i></a>

\t    \t\t\t\t\t<!--Facebook-->
\t\t\t\t\t\t\t<a class=\"fb-ic mr-3\" style=\"color: black;\" role=\"button\"><i class=\"fab fa-lg fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t<!--Google +-->
\t\t\t\t\t\t\t<a class=\"gplus-ic mr-3\" style=\"color: black;\" role=\"button\"><i class=\"fab fa-lg fa-google\"></i></a>
\t\t\t\t\t\t\t<!--Instagram-->
\t\t\t\t\t\t\t<a class=\"ins-ic mr-3\" style=\"color: black;\" role=\"button\"><i class=\"fab fa-lg fa-instagram\"></i></a>
\t\t\t\t\t\t</div>\t
    \t\t\t\t</div>
    \t\t\t</nav>
    \t\t</header>

    \t\t<!-- Corps du site-->
    \t\t<section class=\"container \" >
    \t\t\t{% block section %}{% endblock %}
    \t\t\t
    \t\t\t

    \t\t</section>

    \t\t<!-- Pied de page-->
    \t\t<footer class=\"fixed-bottom position-relative\" style=\"background-color: #850606; margin-top:5px\">
    \t\t\t<h5 align=\"center\" style=\"color: white\">© 2019 • Stand'wich • Tous droits réservés</h1>
    \t\t</footer>
    \t</div>
        
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/rimkus/Documents/Sites/Standwich/templates/base.html.twig");
    }
}
