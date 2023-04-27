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

/* abonnementAdmin/print.html.twig */
class __TwigTemplate_3a256ab352622d7d6d7707cfff9c4ddb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnementAdmin/print.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Abonnement Print</title>
    <link rel=\"stylesheet\" href=\"/style.css\" media=\"all\" />
</head>
<body>
<header class=\"clearfix\">
    <h1 align=\"center\">ThniTy Abonnement </h1>
    <hr></hr>
    <div><span>Abonnement N° </span> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo " </div>
    <hr></hr>
    <div id=\"company\" class=\"clearfix\">
        <div><span>Nom: </span> ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        echo "  </div>
        <div><span>Prenom: </span> ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 16, $this->source); })()), "prenom", [], "any", false, false, false, 16), "html", null, true);
        echo "  </div>
        <div><span>Email: </span> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), "html", null, true);
        echo "  </div>
        <div><span>Identifiant: </span> ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 18, $this->source); })()), "identifiant", [], "any", false, false, false, 18), "html", null, true);
        echo "  </div>
        <div><span>CIN: </span> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 19, $this->source); })()), "cin", [], "any", false, false, false, 19), "html", null, true);
        echo "  </div>
        <div><span>Type d'offre: </span> ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20), "html", null, true);
        echo "  </div>
        <div><span>Etat: </span> ";
        // line 21
        ((twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 21, $this->source); })()), "dated", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 21, $this->source); })()), "dated", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "  </div>
        <div><span>Etat: </span> ";
        // line 22
        ((twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 22, $this->source); })()), "datef", [], "any", false, false, false, 22)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 22, $this->source); })()), "datef", [], "any", false, false, false, 22), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "  </div>
        <div><span>Offre: </span> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 23, $this->source); })()), "idOffre", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
        echo "  </div>
        <hr></hr>
    </div>
</header>

</body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "abonnementAdmin/print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  53 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Abonnement Print</title>
    <link rel=\"stylesheet\" href=\"/style.css\" media=\"all\" />
</head>
<body>
<header class=\"clearfix\">
    <h1 align=\"center\">ThniTy Abonnement </h1>
    <hr></hr>
    <div><span>Abonnement N° </span> {{ abonnement.id }} </div>
    <hr></hr>
    <div id=\"company\" class=\"clearfix\">
        <div><span>Nom: </span> {{ abonnement.nom }}  </div>
        <div><span>Prenom: </span> {{ abonnement.prenom }}  </div>
        <div><span>Email: </span> {{ abonnement.email }}  </div>
        <div><span>Identifiant: </span> {{ abonnement.identifiant }}  </div>
        <div><span>CIN: </span> {{ abonnement.cin }}  </div>
        <div><span>Type d'offre: </span> {{ abonnement.type }}  </div>
        <div><span>Etat: </span> {{ abonnement.dated ? abonnement.dated|date('Y-m-d') : '' }}  </div>
        <div><span>Etat: </span> {{ abonnement.datef ? abonnement.datef|date('Y-m-d') : '' }}  </div>
        <div><span>Offre: </span> {{ abonnement.idOffre.nom }}  </div>
        <hr></hr>
    </div>
</header>

</body>", "abonnementAdmin/print.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\abonnementAdmin\\print.html.twig");
    }
}
