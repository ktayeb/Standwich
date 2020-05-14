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

/* standwich/contact.html.twig */
class __TwigTemplate_da38182cf13436bef2bf020d626ff807c6ae234e5cc44e9a810fc04bcec1746c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "standwich/contact.html.twig", 1);
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
<div class=\"container contact-form\" style=\"background-color: lightgray;\">

\t<form method=\"post\" >
\t\t<br>
\t\t<h3 align=\"center\" class=\"title tpl streaked-title\">CONTACTEZ-NOUS</h3>
\t\t<h7>Pour toute information, nous sommes à votre disposition par mail en renseignant le formulaire ci-dessous :</h7>
\t\t<br><br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t<select class=\"form-group\" name=\"profil\" style=\"width: 100%;\">
\t\t\t\t\t\t<option value=\"parti\" selected=\"selected\">Monsieur</option>
\t\t\t\t\t\t<option value=\"profe\" >Madame</option>
\t\t\t\t\t\t<option value=\"insti\">Mademoiselle </option>
\t\t\t\t\t</select> 

\t\t\t\t\t\t<input type=\"text\" name=\"firstName\" class=\"form-control\" placeholder=\"Nom *\" value=\"\" style=\"margin-top: 5px\"/>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" name=\"lastName\" class=\"form-control\" placeholder=\"Prénom *\" value=\"\" />
\t\t\t\t\t<input type=\"text\" name=\"txtEmail\" class=\"form-control\" placeholder=\"Email *\" value=\"\" style=\"margin-top: 5px\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-12\" align=\"center\">
\t\t\t\t<input type=\"text\" name=\"objet\" class=\"form-control\" placeholder=\"Objet *\" value=\"\" />
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-12\" align=\"center\">
\t\t\t\t<textarea name=\"txtMsg\" class=\"form-control\" placeholder=\"Votre Message *\"  style=\"width: 100%; height: 100%;\"></textarea>
\t\t\t\t<div class=\"form-group col-md-6\" align=\"center\">
\t\t\t\t\t<label>* Champs obligatoires</label>
\t\t\t\t\t<input type=\"submit\" name=\"btnSubmit\" class=\"btnContact\" value=\"Envoyer\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</form>

\t<!--Grid column-->
\t<div >
\t\t<!--Google map-->
\t\t<br><br>
\t\t<div id=\"map-container-google-11\" class=\"z-depth-1-half map-container-6\" style=\"height: 100%;margin: auto;\">


\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.5917939315996!2d0.23933335140319628!3d47.165848726210946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fd42281ab04e99%3A0x3c8e69d18178a564!2s29%20Rue%20Rabelais%2C%2037500%20Chinon!5e0!3m2!1sfr!2sfr!4v1588778043311!5m2!1sfr!2sfr\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
\t\t</div>

\t\t<br>
\t\t<!--Buttons-->
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a class=\"btn-floating blue accent-1\"><i class=\"fas fa-map-marker-alt\"></i></a>
\t\t\t\t<p>29 Rue Rabelais, 37500 Chinon, France</p>

\t\t\t</div>

\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a class=\"btn-floating blue accent-1\"><i class=\"fas fa-phone\"></i></a>
\t\t\t\t<p>02.47.93.99.54 </p>
\t\t\t</div>

\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a class=\"btn-floating blue accent-1\"><i class=\"fas fa-envelope\"></i></a>
\t\t\t\t<p>contact@standwich.com</p>

\t\t\t</div>
\t\t</div>

\t</div>


</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "standwich/contact.html.twig";
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

{%block section %}

<div class=\"container contact-form\" style=\"background-color: lightgray;\">

\t<form method=\"post\" >
\t\t<br>
\t\t<h3 align=\"center\" class=\"title tpl streaked-title\">CONTACTEZ-NOUS</h3>
\t\t<h7>Pour toute information, nous sommes à votre disposition par mail en renseignant le formulaire ci-dessous :</h7>
\t\t<br><br>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t<select class=\"form-group\" name=\"profil\" style=\"width: 100%;\">
\t\t\t\t\t\t<option value=\"parti\" selected=\"selected\">Monsieur</option>
\t\t\t\t\t\t<option value=\"profe\" >Madame</option>
\t\t\t\t\t\t<option value=\"insti\">Mademoiselle </option>
\t\t\t\t\t</select> 

\t\t\t\t\t\t<input type=\"text\" name=\"firstName\" class=\"form-control\" placeholder=\"Nom *\" value=\"\" style=\"margin-top: 5px\"/>
\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" name=\"lastName\" class=\"form-control\" placeholder=\"Prénom *\" value=\"\" />
\t\t\t\t\t<input type=\"text\" name=\"txtEmail\" class=\"form-control\" placeholder=\"Email *\" value=\"\" style=\"margin-top: 5px\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-12\" align=\"center\">
\t\t\t\t<input type=\"text\" name=\"objet\" class=\"form-control\" placeholder=\"Objet *\" value=\"\" />
\t\t\t</div>
\t\t\t<div class=\"form-group col-md-12\" align=\"center\">
\t\t\t\t<textarea name=\"txtMsg\" class=\"form-control\" placeholder=\"Votre Message *\"  style=\"width: 100%; height: 100%;\"></textarea>
\t\t\t\t<div class=\"form-group col-md-6\" align=\"center\">
\t\t\t\t\t<label>* Champs obligatoires</label>
\t\t\t\t\t<input type=\"submit\" name=\"btnSubmit\" class=\"btnContact\" value=\"Envoyer\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</form>

\t<!--Grid column-->
\t<div >
\t\t<!--Google map-->
\t\t<br><br>
\t\t<div id=\"map-container-google-11\" class=\"z-depth-1-half map-container-6\" style=\"height: 100%;margin: auto;\">


\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.5917939315996!2d0.23933335140319628!3d47.165848726210946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fd42281ab04e99%3A0x3c8e69d18178a564!2s29%20Rue%20Rabelais%2C%2037500%20Chinon!5e0!3m2!1sfr!2sfr!4v1588778043311!5m2!1sfr!2sfr\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
\t\t</div>

\t\t<br>
\t\t<!--Buttons-->
\t\t<div class=\"row text-center\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a class=\"btn-floating blue accent-1\"><i class=\"fas fa-map-marker-alt\"></i></a>
\t\t\t\t<p>29 Rue Rabelais, 37500 Chinon, France</p>

\t\t\t</div>

\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a class=\"btn-floating blue accent-1\"><i class=\"fas fa-phone\"></i></a>
\t\t\t\t<p>02.47.93.99.54 </p>
\t\t\t</div>

\t\t\t<div class=\"col-md-4\">
\t\t\t\t<a class=\"btn-floating blue accent-1\"><i class=\"fas fa-envelope\"></i></a>
\t\t\t\t<p>contact@standwich.com</p>

\t\t\t</div>
\t\t</div>

\t</div>


</div>


{% endblock %}", "standwich/contact.html.twig", "/home/rimkus/Documents/Sites/Standwich/templates/standwich/contact.html.twig");
    }
}
