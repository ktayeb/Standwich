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

/* standwich/menu/classique.html.twig */
class __TwigTemplate_c9a36364e27421681f21bcfa5ce5a8c797ec8c075373ed4deab1d80aedc1e54b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/menu/classique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/menu/classique.html.twig"));

        $this->parent = $this->loadTemplate("/standwich/menu.html.twig", "standwich/menu/classique.html.twig", 1);
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
\t\t<h1>Les Classiques</h1>
\t\t\t\t\t
\t</div>
\t<!-- le Kebab -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Kebab</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto \"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/kebab.jpg\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tLe plus grand des classiques. Un sandwich garnie de crudité au choix, d'une sauce au choix et de  l’indétronable viande de Kebab.
\t\t\t</h5>
\t\t\t
\t\t</div>
\t\t\t
\t</div>

\t<!-- le Chiken -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Chiken</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto\"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/chiken.png\" style=\"width: 200px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tDu poulet frais marié par notre chef et accompagné de nos crudités. Aussi moelleux que savoureux !
\t\t\t</h5>
\t\t</div>
\t\t\t
\t</div>

\t<!-- le Steak -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Steak</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto\"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/steak.jpg\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tLe plus rapide des classiques, une consistante adéquate , Notre sandwich Steak hachée vous donnera la force pour finir la journée.  
\t\t\t</h5>
\t\t</div>
\t\t\t
\t</div>

\t<!-- le Merguez -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Merguez</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto\"  >
\t\t\t
\t\t\t<img  class=\"rounded-circle\" src=\"/img/menu/merguez.jpg\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tLe plus ancien des classiques. Des Merguez succulente dans votre pain s'accompagnant des crudités désiré. A déguster aprés une petite séance de sport !!
\t\t\t</h5>
\t\t</div>
\t\t\t
\t</div>

\t<!-- le escalope -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Escalope</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto\"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/escalope.png\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tDu poulet frais, salé, poivré par notre chef et accompagné de nos crudités. Aussi moelleux que savoureux !
\t\t\t</h5>
\t\t</div>
\t\t\t
\t</div>

\t<!-- le Cordon Bleu -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Cordon Bleu</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto\"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/cordonbleu.jpg\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tServit avec des Frites et accompagner des condiments desiré vous aurez un sandwich délicieux et plein de protéines.
\t\t\t</h5>
\t\t</div>
\t\t\t
\t</div>





\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "standwich/menu/classique.html.twig";
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
\t\t<h1>Les Classiques</h1>
\t\t\t\t\t
\t</div>
\t<!-- le Kebab -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Kebab</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto \"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/kebab.jpg\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tLe plus grand des classiques. Un sandwich garnie de crudité au choix, d'une sauce au choix et de  l’indétronable viande de Kebab.
\t\t\t</h5>
\t\t\t
\t\t</div>
\t\t\t
\t</div>

\t<!-- le Chiken -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Chiken</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto\"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/chiken.png\" style=\"width: 200px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tDu poulet frais marié par notre chef et accompagné de nos crudités. Aussi moelleux que savoureux !
\t\t\t</h5>
\t\t</div>
\t\t\t
\t</div>

\t<!-- le Steak -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Steak</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto\"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/steak.jpg\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tLe plus rapide des classiques, une consistante adéquate , Notre sandwich Steak hachée vous donnera la force pour finir la journée.  
\t\t\t</h5>
\t\t</div>
\t\t\t
\t</div>

\t<!-- le Merguez -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Merguez</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto\"  >
\t\t\t
\t\t\t<img  class=\"rounded-circle\" src=\"/img/menu/merguez.jpg\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tLe plus ancien des classiques. Des Merguez succulente dans votre pain s'accompagnant des crudités désiré. A déguster aprés une petite séance de sport !!
\t\t\t</h5>
\t\t</div>
\t\t\t
\t</div>

\t<!-- le escalope -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Escalope</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto\"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/escalope.png\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tDu poulet frais, salé, poivré par notre chef et accompagné de nos crudités. Aussi moelleux que savoureux !
\t\t\t</h5>
\t\t</div>
\t\t\t
\t</div>

\t<!-- le Cordon Bleu -->
\t<div class=\"row center-block\" style=\"border: black 2px solid; padding: 20px\">
\t\t\t<div class=\"col-md-12 text-center my-auto\"  >
\t\t\t\t<h1 style=\"padding-top: 10px\">Cordon Bleu</h1>
\t\t\t</div>
\t\t\t
\t\t<div class=\"col-md-4 text-center my-auto\"  >
\t\t\t
\t\t\t<img class=\"rounded-circle\" src=\"/img/menu/cordonbleu.jpg\" style=\"width: 220px; height: 200px;\">
\t\t</div>
\t\t<div class=\"col-md-8 text-center my-auto\" >
\t\t\t<h5 >
\t\t\t\tServit avec des Frites et accompagner des condiments desiré vous aurez un sandwich délicieux et plein de protéines.
\t\t\t</h5>
\t\t</div>
\t\t\t
\t</div>





\t
{% endblock %}", "standwich/menu/classique.html.twig", "/home/rimkus/Documents/Sites/Standwich/templates/standwich/menu/classique.html.twig");
    }
}
