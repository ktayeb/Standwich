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

/* standwich/menu/barquettes.html.twig */
class __TwigTemplate_5ec39859181388c72d0fb243e7a3bffebae59b6374a28c0c9609f524765bee59 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/standwich/menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/menu/barquettes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/menu/barquettes.html.twig"));

        $this->parent = $this->loadTemplate("/standwich/menu.html.twig", "standwich/menu/barquettes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        echo "\t
\t<div class=\"row justify-content-center\" style=\"background-color: gold; font-family: Jazz LET, fantasy\">
\t\t<h1>Les Assiettes</h1>
\t</div>

\t<!-- le Kebab -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Barquette Viandes</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto \"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/assiette-viande.jpg\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tLe plus grand des classiques. Un sandwich garnie de crudité au choix, d'une sauce au choix et de  l’indétronable viande de Kebab.
\t\t\t</h5>
\t\t\t<h4>Irresistiblement Bon</h4>
\t\t</div>
\t\t\t
\t</div>

\t<!-- le Kebab -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Barquette Frites</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto \"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/barquette-frite.jpg\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tLe plus grand des classiques. Un sandwich garnie de crudité au choix, d'une sauce au choix et de  l’indétronable viande de Kebab.
\t\t\t</h5>
\t\t\t<h4>Irresistiblement Bon</h4>
\t\t</div>
\t\t\t
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "standwich/menu/barquettes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/standwich/menu.html.twig' %}

{% block menu %}
\t
\t<div class=\"row justify-content-center\" style=\"background-color: gold; font-family: Jazz LET, fantasy\">
\t\t<h1>Les Assiettes</h1>
\t</div>

\t<!-- le Kebab -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Barquette Viandes</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto \"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/assiette-viande.jpg\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tLe plus grand des classiques. Un sandwich garnie de crudité au choix, d'une sauce au choix et de  l’indétronable viande de Kebab.
\t\t\t</h5>
\t\t\t<h4>Irresistiblement Bon</h4>
\t\t</div>
\t\t\t
\t</div>

\t<!-- le Kebab -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Barquette Frites</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto \"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/barquette-frite.jpg\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tLe plus grand des classiques. Un sandwich garnie de crudité au choix, d'une sauce au choix et de  l’indétronable viande de Kebab.
\t\t\t</h5>
\t\t\t<h4>Irresistiblement Bon</h4>
\t\t</div>
\t\t\t
\t</div>

{% endblock %}", "standwich/menu/barquettes.html.twig", "/home/rimkus/Documents/Sites/Standwich/templates/standwich/menu/barquettes.html.twig");
    }
}
