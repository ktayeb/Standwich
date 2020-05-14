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

/* standwich/home.html.twig */
class __TwigTemplate_86ed403845f129de2e72f0f8cec0c33694b70b486ae3234c94963bb2ccbb6317 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "standwich/home.html.twig", 1);
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
\t<!--Carousel Wrapper-->
<div id=\"carousel-example-1z\" class=\"carousel slide \" data-ride=\"carousel\"  >
\t<!--Indicators-->
\t<ol class=\"carousel-indicators\" >
\t\t<li data-target=\"#carousel-example-1z\" data-slide-to=\"0\" class=\"active\"></li>
\t\t<li data-target=\"#carousel-example-1z\" data-slide-to=\"1\"></li>
\t\t<li data-target=\"#carousel-example-1z\" data-slide-to=\"2\"></li>
\t\t<li data-target=\"#carousel-example-1z\" data-slide-to=\"3\"></li>
\t\t<li data-target=\"#carousel-example-1z\" data-slide-to=\"4\"></li>
\t
\t</ol>
\t<!--/.Indicators-->
\t<!--Slides-->
\t<div class=\"carousel-inner text-center \" role=\"listbox\" style=\"height: auto; margin-bottom: 5px \" >
\t\t<!--First slide-->
\t\t<div class=\"carousel-item active\"  data-interval=\"2000\" >
\t\t\t<img class=\"img-fluid\"  src=\"/img/assiette-kebab.png\" alt=\"First slide\" data-holder-rendered=\"true\" >
\t\t</div>
\t\t<!--/First slide-->
\t\t<!--Second slide-->
\t\t<div class=\"carousel-item\"  data-interval=\"2000\" >
\t\t\t<img class=\"img-fluid\" src=\"/img/frite.png\" alt=\"Second slide\" data-holder-rendered=\"true\">
\t\t</div>
\t\t<!--/Second slide-->
\t\t<!--Third slide-->
\t\t<div class=\"carousel-item\"  data-interval=\"2000\">
\t\t\t<img class=\"img-fluid\" src=\"/img/burger.png\" alt=\"Third slide\" data-holder-rendered=\"true\">
\t\t</div>
\t\t<!--/Third slide-->
\t\t<!--4 slide-->
\t\t<div class=\"carousel-item\"  data-interval=\"2000\">
\t\t\t<img class=\"img-fluid\" src=\"/img/salade.png\" alt=\"4 slide\" data-holder-rendered=\"true\">
\t\t</div>
\t\t<!--/4 slide-->
\t\t<!--5 slide-->
\t\t<div class=\"carousel-item\"  data-interval=\"2000\">
\t\t\t<img class=\"img-fluid\" src=\"/img/tacos.png\" alt=\"5 slide\" data-holder-rendered=\"true\">
\t\t</div>
\t\t<!--/5 slide-->
\t</div>
\t<!--/.Slides-->
\t<!--Controls-->
\t<a class=\"carousel-control-prev\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"sr-only\">Previous</span>
\t</a>
\t<a class=\"carousel-control-next\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"sr-only\">Next</span>
\t</a>
\t<!--/.Controls-->
</div>



<div class=\"card\" style=\"width: 100%; background-color: lightgray\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Présentation </h5>
    <p>
\tDepuis 10 ans, nous réalisons vos projets électriques du plus simple au plus complexe.

\tNous intervenons dans le neuf, la rénovation ou le tertiaire. Conception, études et réalisation, nous vous accompagnons tout au long des travaux et vous fournissons tous les conseils utiles à la parfaite réalisation de vos projets.


    Reconnus pour le sérieux et la qualité de nos prestations, n’hésitez pas à demander autour de vous pour plus de renseignements. Notre meilleure publicité est le bouche à oreilles.
\t</p>
\t    <p>
\tDepuis 10 ans, nous réalisons vos projets électriques du plus simple au plus complexe.

\tNous intervenons dans le neuf, la rénovation ou le tertiaire. Conception, études et réalisation, nous vous accompagnons tout au long des travaux et vous fournissons tous les conseils utiles à la parfaite réalisation de vos projets.


    Reconnus pour le sérieux et la qualité de nos prestations, n’hésitez pas à demander autour de vous pour plus de renseignements. Notre meilleure publicité est le bouche à oreilles.
\t</p>
\t    <p>
\tDepuis 10 ans, nous réalisons vos projets électriques du plus simple au plus complexe.

\tNous intervenons dans le neuf, la rénovation ou le tertiaire. Conception, études et réalisation, nous vous accompagnons tout au long des travaux et vous fournissons tous les conseils utiles à la parfaite réalisation de vos projets.


    Reconnus pour le sérieux et la qualité de nos prestations, n’hésitez pas à demander autour de vous pour plus de renseignements. Notre meilleure publicité est le bouche à oreilles.
\t</p>
\t    <p>
\tDepuis 10 ans, nous réalisons vos projets électriques du plus simple au plus complexe.

\tNous intervenons dans le neuf, la rénovation ou le tertiaire. Conception, études et réalisation, nous vous accompagnons tout au long des travaux et vous fournissons tous les conseils utiles à la parfaite réalisation de vos projets.


    Reconnus pour le sérieux et la qualité de nos prestations, n’hésitez pas à demander autour de vous pour plus de renseignements. Notre meilleure publicité est le bouche à oreilles.
\t</p>
\t    <p>
\tDepuis 10 ans, nous réalisons vos projets électriques du plus simple au plus complexe.

\tNous intervenons dans le neuf, la rénovation ou le tertiaire. Conception, études et réalisation, nous vous accompagnons tout au long des travaux et vous fournissons tous les conseils utiles à la parfaite réalisation de vos projets.


    Reconnus pour le sérieux et la qualité de nos prestations, n’hésitez pas à demander autour de vous pour plus de renseignements. Notre meilleure publicité est le bouche à oreilles.
\t</p>
  </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "standwich/home.html.twig";
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

\t<!--Carousel Wrapper-->
<div id=\"carousel-example-1z\" class=\"carousel slide \" data-ride=\"carousel\"  >
\t<!--Indicators-->
\t<ol class=\"carousel-indicators\" >
\t\t<li data-target=\"#carousel-example-1z\" data-slide-to=\"0\" class=\"active\"></li>
\t\t<li data-target=\"#carousel-example-1z\" data-slide-to=\"1\"></li>
\t\t<li data-target=\"#carousel-example-1z\" data-slide-to=\"2\"></li>
\t\t<li data-target=\"#carousel-example-1z\" data-slide-to=\"3\"></li>
\t\t<li data-target=\"#carousel-example-1z\" data-slide-to=\"4\"></li>
\t
\t</ol>
\t<!--/.Indicators-->
\t<!--Slides-->
\t<div class=\"carousel-inner text-center \" role=\"listbox\" style=\"height: auto; margin-bottom: 5px \" >
\t\t<!--First slide-->
\t\t<div class=\"carousel-item active\"  data-interval=\"2000\" >
\t\t\t<img class=\"img-fluid\"  src=\"/img/assiette-kebab.png\" alt=\"First slide\" data-holder-rendered=\"true\" >
\t\t</div>
\t\t<!--/First slide-->
\t\t<!--Second slide-->
\t\t<div class=\"carousel-item\"  data-interval=\"2000\" >
\t\t\t<img class=\"img-fluid\" src=\"/img/frite.png\" alt=\"Second slide\" data-holder-rendered=\"true\">
\t\t</div>
\t\t<!--/Second slide-->
\t\t<!--Third slide-->
\t\t<div class=\"carousel-item\"  data-interval=\"2000\">
\t\t\t<img class=\"img-fluid\" src=\"/img/burger.png\" alt=\"Third slide\" data-holder-rendered=\"true\">
\t\t</div>
\t\t<!--/Third slide-->
\t\t<!--4 slide-->
\t\t<div class=\"carousel-item\"  data-interval=\"2000\">
\t\t\t<img class=\"img-fluid\" src=\"/img/salade.png\" alt=\"4 slide\" data-holder-rendered=\"true\">
\t\t</div>
\t\t<!--/4 slide-->
\t\t<!--5 slide-->
\t\t<div class=\"carousel-item\"  data-interval=\"2000\">
\t\t\t<img class=\"img-fluid\" src=\"/img/tacos.png\" alt=\"5 slide\" data-holder-rendered=\"true\">
\t\t</div>
\t\t<!--/5 slide-->
\t</div>
\t<!--/.Slides-->
\t<!--Controls-->
\t<a class=\"carousel-control-prev\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"sr-only\">Previous</span>
\t</a>
\t<a class=\"carousel-control-next\" href=\"#carousel-example-1z\" role=\"button\" data-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"sr-only\">Next</span>
\t</a>
\t<!--/.Controls-->
</div>



<div class=\"card\" style=\"width: 100%; background-color: lightgray\">
  <div class=\"card-body\">
    <h5 class=\"card-title\">Présentation </h5>
    <p>
\tDepuis 10 ans, nous réalisons vos projets électriques du plus simple au plus complexe.

\tNous intervenons dans le neuf, la rénovation ou le tertiaire. Conception, études et réalisation, nous vous accompagnons tout au long des travaux et vous fournissons tous les conseils utiles à la parfaite réalisation de vos projets.


    Reconnus pour le sérieux et la qualité de nos prestations, n’hésitez pas à demander autour de vous pour plus de renseignements. Notre meilleure publicité est le bouche à oreilles.
\t</p>
\t    <p>
\tDepuis 10 ans, nous réalisons vos projets électriques du plus simple au plus complexe.

\tNous intervenons dans le neuf, la rénovation ou le tertiaire. Conception, études et réalisation, nous vous accompagnons tout au long des travaux et vous fournissons tous les conseils utiles à la parfaite réalisation de vos projets.


    Reconnus pour le sérieux et la qualité de nos prestations, n’hésitez pas à demander autour de vous pour plus de renseignements. Notre meilleure publicité est le bouche à oreilles.
\t</p>
\t    <p>
\tDepuis 10 ans, nous réalisons vos projets électriques du plus simple au plus complexe.

\tNous intervenons dans le neuf, la rénovation ou le tertiaire. Conception, études et réalisation, nous vous accompagnons tout au long des travaux et vous fournissons tous les conseils utiles à la parfaite réalisation de vos projets.


    Reconnus pour le sérieux et la qualité de nos prestations, n’hésitez pas à demander autour de vous pour plus de renseignements. Notre meilleure publicité est le bouche à oreilles.
\t</p>
\t    <p>
\tDepuis 10 ans, nous réalisons vos projets électriques du plus simple au plus complexe.

\tNous intervenons dans le neuf, la rénovation ou le tertiaire. Conception, études et réalisation, nous vous accompagnons tout au long des travaux et vous fournissons tous les conseils utiles à la parfaite réalisation de vos projets.


    Reconnus pour le sérieux et la qualité de nos prestations, n’hésitez pas à demander autour de vous pour plus de renseignements. Notre meilleure publicité est le bouche à oreilles.
\t</p>
\t    <p>
\tDepuis 10 ans, nous réalisons vos projets électriques du plus simple au plus complexe.

\tNous intervenons dans le neuf, la rénovation ou le tertiaire. Conception, études et réalisation, nous vous accompagnons tout au long des travaux et vous fournissons tous les conseils utiles à la parfaite réalisation de vos projets.


    Reconnus pour le sérieux et la qualité de nos prestations, n’hésitez pas à demander autour de vous pour plus de renseignements. Notre meilleure publicité est le bouche à oreilles.
\t</p>
  </div>
</div>

{% endblock %}

", "standwich/home.html.twig", "/home/rimkus/Documents/Sites/Standwich/templates/standwich/home.html.twig");
    }
}
