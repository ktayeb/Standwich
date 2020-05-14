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

/* standwich/commande.html.twig */
class __TwigTemplate_dec2a2b7a718df95d0876c72d2fc10127c64cf4aea1641f65199685856c44308 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section' => [$this, 'block_section'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/commande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/commande.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "standwich/commande.html.twig", 1);
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
        echo "
<div id=\"buttons\" class=\"row justify-content-center\" >
\t\t
\t\t<div class=\"col-md-2  text-center \" style=\"margin: 5px; border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> CASSIQUE</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> SPECIAUX</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> BURGERS</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> SALADES</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> ASSIETTES</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white\"> TACOS</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> PANINI</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> BARQUETTES</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> DESSERTS</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> BOISSONS</a>
\t\t</div>
\t\t
\t</div>
\t<div id=\"presentationMenu\" style=\"width: 100%; background-color: lightgray\">
\t\t<div >
\t\t\t<div >
\t\t\t\t<h3 id=\"test\" align=\"center\">Page en construction</h3>
\t\t\t</div>
\t\t\t<div >
\t\t\t\t<div class=\" text-center\">
\t\t\t\t\t<h1 align=\"center\">Patience les amis !!!</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3 align=\"center\">Page en construction</h3>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "standwich/commande.html.twig";
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
        return new Source("{% extends 'base.html.twig' %}

{% block section %}

<div id=\"buttons\" class=\"row justify-content-center\" >
\t\t
\t\t<div class=\"col-md-2  text-center \" style=\"margin: 5px; border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> CASSIQUE</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> SPECIAUX</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> BURGERS</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> SALADES</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> ASSIETTES</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white\"> TACOS</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> PANINI</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> BARQUETTES</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> DESSERTS</a>
\t\t</div>
\t\t<div class=\"col-md-2 text-center\" style=\"margin: 5px;border:2px solid;padding: 3px;\">
\t\t\t<a href=\"\" style=\"color: white;\"> BOISSONS</a>
\t\t</div>
\t\t
\t</div>
\t<div id=\"presentationMenu\" style=\"width: 100%; background-color: lightgray\">
\t\t<div >
\t\t\t<div >
\t\t\t\t<h3 id=\"test\" align=\"center\">Page en construction</h3>
\t\t\t</div>
\t\t\t<div >
\t\t\t\t<div class=\" text-center\">
\t\t\t\t\t<h1 align=\"center\">Patience les amis !!!</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<h3 align=\"center\">Page en construction</h3>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>

{% endblock %}", "standwich/commande.html.twig", "/home/rimkus/Documents/Sites/Standwich/templates/standwich/commande.html.twig");
    }
}
