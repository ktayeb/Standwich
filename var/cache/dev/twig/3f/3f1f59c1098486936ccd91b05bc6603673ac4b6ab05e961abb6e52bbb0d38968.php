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

/* standwich/connection.html.twig */
class __TwigTemplate_d7208e97798e3b78f3250e63dbcec328e0bb7503046a5195e9d4f66b599b7ec6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/connection.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "standwich/connection.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "standwich/connection.html.twig", 1);
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
<div class=\"container \" style=\"background-color: lightgray;\">
   <div class=\"row\">
      <div class=\"col-md-5 mx-auto\">
         <div id=\"first\">
            <div class=\"myform form \">
               <div class=\"logo mb-3\">
                  <div class=\"col-md-12 text-center\">
                     <h1>Connection</h1>
                  </div>
               </div>
               <form action=\"\" method=\"post\" name=\"login\">
                  <div class=\"form-group\">
                     <label for=\"exampleInputEmail1\">Email</label>
                     <input type=\"email\" name=\"email\"  class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Entrer email\">
                  </div>
                  <div class=\"form-group\">
                     <label for=\"exampleInputEmail1\">Mot de passe</label>
                     <input type=\"password\" name=\"password\" id=\"password\"  class=\"form-control\" aria-describedby=\"emailHelp\" placeholder=\"Entrer Mot de passe\">
                  </div>
                  <div class=\"form-group\">
                     <p class=\"text-center\">En cliquant sur connection vous accecepter <a href=\"#\">Nos Condition</a></p>
                  </div>
                  <div class=\"col-md-12 text-center \">
                     <button type=\"submit\" class=\" btn btn-block mybtn btn-primary tx-tfm\">Je me connecte</button>
                  </div>
                  <div class=\"col-md-12 \">
                     <div class=\"login-or\">
                        <hr class=\"hr-or\">
                        <span class=\"span-or\">Ou</span>
                     </div>
                  </div>

                  <div class=\"form-group\">
                     <p class=\"text-center\">Pas de compte ? Inscrivez-Vous</p>
                  </div>
               </form>
            </div>
         </div>
         <div id=\"second\">
            <div class=\"myform form \">
               <div class=\"logo mb-3\">
                  <div class=\"col-md-12 text-center\">
                     <h1 >Inscription</h1>
                  </div>
               </div>
               <form action=\"#\" name=\"registration\">
                  <div class=\"form-group\">
                     <label for=\"exampleInputEmail1\">Nom</label>
                     <input type=\"text\"  name=\"firstname\" class=\"form-control\" id=\"firstname\" aria-describedby=\"emailHelp\" placeholder=\"Entrer votre Nom\">
                  </div>
                  <div class=\"form-group\">
                     <label for=\"exampleInputEmail1\">Prénom</label>
                     <input type=\"text\"  name=\"lastname\" class=\"form-control\" id=\"lastname\" aria-describedby=\"emailHelp\" placeholder=\"Entrer votre Prénom\">
                  </div>
                  <div class=\"form-group\">
                     <label for=\"exampleInputEmail1\">Email </label>
                     <input type=\"email\" name=\"email\"  class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Entrer votre email\">
                  </div>
                  <div class=\"form-group\">
                     <label for=\"exampleInputEmail1\">Mot de passe</label>
                     <input type=\"password\" name=\"password\" id=\"password\"  class=\"form-control\" aria-describedby=\"emailHelp\" placeholder=\"Entrer Mot de passe\">
                  </div>
                  <div class=\"col-md-12 text-center mb-3\">
                     <button type=\"submit\" class=\" btn btn-block mybtn btn-primary tx-tfm\">Je m'inscris</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>   

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "standwich/connection.html.twig";
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

<div class=\"container \" style=\"background-color: lightgray;\">
   <div class=\"row\">
      <div class=\"col-md-5 mx-auto\">
         <div id=\"first\">
            <div class=\"myform form \">
               <div class=\"logo mb-3\">
                  <div class=\"col-md-12 text-center\">
                     <h1>Connection</h1>
                  </div>
               </div>
               <form action=\"\" method=\"post\" name=\"login\">
                  <div class=\"form-group\">
                     <label for=\"exampleInputEmail1\">Email</label>
                     <input type=\"email\" name=\"email\"  class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Entrer email\">
                  </div>
                  <div class=\"form-group\">
                     <label for=\"exampleInputEmail1\">Mot de passe</label>
                     <input type=\"password\" name=\"password\" id=\"password\"  class=\"form-control\" aria-describedby=\"emailHelp\" placeholder=\"Entrer Mot de passe\">
                  </div>
                  <div class=\"form-group\">
                     <p class=\"text-center\">En cliquant sur connection vous accecepter <a href=\"#\">Nos Condition</a></p>
                  </div>
                  <div class=\"col-md-12 text-center \">
                     <button type=\"submit\" class=\" btn btn-block mybtn btn-primary tx-tfm\">Je me connecte</button>
                  </div>
                  <div class=\"col-md-12 \">
                     <div class=\"login-or\">
                        <hr class=\"hr-or\">
                        <span class=\"span-or\">Ou</span>
                     </div>
                  </div>

                  <div class=\"form-group\">
                     <p class=\"text-center\">Pas de compte ? Inscrivez-Vous</p>
                  </div>
               </form>
            </div>
         </div>
         <div id=\"second\">
            <div class=\"myform form \">
               <div class=\"logo mb-3\">
                  <div class=\"col-md-12 text-center\">
                     <h1 >Inscription</h1>
                  </div>
               </div>
               <form action=\"#\" name=\"registration\">
                  <div class=\"form-group\">
                     <label for=\"exampleInputEmail1\">Nom</label>
                     <input type=\"text\"  name=\"firstname\" class=\"form-control\" id=\"firstname\" aria-describedby=\"emailHelp\" placeholder=\"Entrer votre Nom\">
                  </div>
                  <div class=\"form-group\">
                     <label for=\"exampleInputEmail1\">Prénom</label>
                     <input type=\"text\"  name=\"lastname\" class=\"form-control\" id=\"lastname\" aria-describedby=\"emailHelp\" placeholder=\"Entrer votre Prénom\">
                  </div>
                  <div class=\"form-group\">
                     <label for=\"exampleInputEmail1\">Email </label>
                     <input type=\"email\" name=\"email\"  class=\"form-control\" id=\"email\" aria-describedby=\"emailHelp\" placeholder=\"Entrer votre email\">
                  </div>
                  <div class=\"form-group\">
                     <label for=\"exampleInputEmail1\">Mot de passe</label>
                     <input type=\"password\" name=\"password\" id=\"password\"  class=\"form-control\" aria-describedby=\"emailHelp\" placeholder=\"Entrer Mot de passe\">
                  </div>
                  <div class=\"col-md-12 text-center mb-3\">
                     <button type=\"submit\" class=\" btn btn-block mybtn btn-primary tx-tfm\">Je m'inscris</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>   

{% endblock %}", "standwich/connection.html.twig", "/home/rimkus/Documents/Sites/Standwich/templates/standwich/connection.html.twig");
    }
}
