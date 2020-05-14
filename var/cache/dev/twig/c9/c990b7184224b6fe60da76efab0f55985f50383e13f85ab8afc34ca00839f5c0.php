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

/* standwich/menu/boissons.html.twig */
class __TwigTemplate_bd27d76e2af16882d6cb5b38b1c0f83637f54776d1922e6426bbbda9194ce168 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/menu/boissons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/menu/boissons.html.twig"));

        $this->parent = $this->loadTemplate("/standwich/menu.html.twig", "standwich/menu/boissons.html.twig", 1);
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
\t\t<h1>Les Boissons</h1>
\t</div>

\t<!-- le Kebab -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t
\t\t\t
\t\t<div class=\"col-md-3 text-center my-auto \"  >
\t\t\t<h3> 1L5</h3>
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/cocacola.png\" style=\"width: 220px; height: 200px;\">
\t\t\t<p><br> Coca-cola, Fanta, Sprite, Fustea</p>
\t\t</div>
\t\t<div class=\"col-md-3 text-center my-auto \"  >
\t\t\t<h3> 33cl</h3>
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/sprite.png\" style=\"width: 220px; height: 200px;\">
\t\t\t<p><br> Coca-cola, Coca-cola zero, Coca-cola cherry, Fanta Orange, Fanta Citron, 7up Mokhito,
\t\t\t\tFustea péche, Tropico, Oasis Tropical, Shwepesse Agrum, Orangina, Caprisun, EVian
\t\t\t</p>
\t\t</div>
\t\t
\t\t<div class=\"col-md-3 text-center my-auto \"  >
\t\t\t<h3>Sirot</h3>
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/sirot.jpg\" style=\"width: 220px; height: 200px;\">
\t\t\t<p>
\t\t\t\t<br> Grenadine, Péche, Fraise, Citron, Melon, Menthe, Pomme, Kiwi, Mangue, Cerise, Framboise
\t\t\t</p>
\t\t</div>

\t\t<div class=\"col-md-3 text-center my-auto \"  >
\t\t\t<h3>Caprisun</h3>
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/caprisun.png\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t\t
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "standwich/menu/boissons.html.twig";
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
\t\t<h1>Les Boissons</h1>
\t</div>

\t<!-- le Kebab -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t
\t\t\t
\t\t<div class=\"col-md-3 text-center my-auto \"  >
\t\t\t<h3> 1L5</h3>
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/cocacola.png\" style=\"width: 220px; height: 200px;\">
\t\t\t<p><br> Coca-cola, Fanta, Sprite, Fustea</p>
\t\t</div>
\t\t<div class=\"col-md-3 text-center my-auto \"  >
\t\t\t<h3> 33cl</h3>
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/sprite.png\" style=\"width: 220px; height: 200px;\">
\t\t\t<p><br> Coca-cola, Coca-cola zero, Coca-cola cherry, Fanta Orange, Fanta Citron, 7up Mokhito,
\t\t\t\tFustea péche, Tropico, Oasis Tropical, Shwepesse Agrum, Orangina, Caprisun, EVian
\t\t\t</p>
\t\t</div>
\t\t
\t\t<div class=\"col-md-3 text-center my-auto \"  >
\t\t\t<h3>Sirot</h3>
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/sirot.jpg\" style=\"width: 220px; height: 200px;\">
\t\t\t<p>
\t\t\t\t<br> Grenadine, Péche, Fraise, Citron, Melon, Menthe, Pomme, Kiwi, Mangue, Cerise, Framboise
\t\t\t</p>
\t\t</div>

\t\t<div class=\"col-md-3 text-center my-auto \"  >
\t\t\t<h3>Caprisun</h3>
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/caprisun.png\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t\t
\t</div>
{% endblock %}", "standwich/menu/boissons.html.twig", "/home/rimkus/Documents/Sites/Standwich/templates/standwich/menu/boissons.html.twig");
    }
}
