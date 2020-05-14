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

/* standwich/menu.html.twig */
class __TwigTemplate_9c4bab289ad74bcbe5f39fafc5a4786a988455affe9e51be1c46b660ac101727 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section' => [$this, 'block_section'],
            'menu' => [$this, 'block_menu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/menu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "standwich/menu.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section"));

        // line 4
        echo "\t<div id=\"buttons\" class=\"row justify-content-center\" >
\t\t
\t\t<div class=\"col-md-2  text-center \" style=\"margin: 5px; border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/classique\" style=\"color: white;\"> CASSIQUE</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/speciaux\" style=\"color: white;\"> SPECIAUX</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/burgers\" style=\"color: white;\"> BURGERS</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/salades\" style=\"color: white;\"> SALADES</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/assiettes\" style=\"color: white;\"> ASSIETTES</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/tacos\" style=\"color: white\"> TACOS</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/panini\" style=\"color: white;\"> PANINI</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/barquettes\" style=\"color: white;\"> BARQUETTES</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/desserts\" style=\"color: white;\"> DESSERTS</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/boissons\" style=\"color: white;\"> BOISSONS</a>
\t\t</div>
\t\t
\t\t
\t</div>
\t<div id=\"presentationMenu\" style=\"width: 100%; background-color: lightgray\">
\t\t<div >
\t\t\t";
        // line 41
        $this->displayBlock('menu', $context, $blocks);
        // line 42
        echo "\t\t</div>

\t\t
\t</div>
\t\t\t

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "standwich/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  110 => 42,  108 => 41,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block section %}
\t<div id=\"buttons\" class=\"row justify-content-center\" >
\t\t
\t\t<div class=\"col-md-2  text-center \" style=\"margin: 5px; border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/classique\" style=\"color: white;\"> CASSIQUE</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/speciaux\" style=\"color: white;\"> SPECIAUX</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/burgers\" style=\"color: white;\"> BURGERS</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/salades\" style=\"color: white;\"> SALADES</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/assiettes\" style=\"color: white;\"> ASSIETTES</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/tacos\" style=\"color: white\"> TACOS</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/panini\" style=\"color: white;\"> PANINI</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/barquettes\" style=\"color: white;\"> BARQUETTES</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/desserts\" style=\"color: white;\"> DESSERTS</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"/menu/boissons\" style=\"color: white;\"> BOISSONS</a>
\t\t</div>
\t\t
\t\t
\t</div>
\t<div id=\"presentationMenu\" style=\"width: 100%; background-color: lightgray\">
\t\t<div >
\t\t\t{% block menu %}{% endblock %}
\t\t</div>

\t\t
\t</div>
\t\t\t

{% endblock %}




", "standwich/menu.html.twig", "/home/rimkus/Documents/Sites/Standwich/templates/standwich/menu.html.twig");
    }
}
