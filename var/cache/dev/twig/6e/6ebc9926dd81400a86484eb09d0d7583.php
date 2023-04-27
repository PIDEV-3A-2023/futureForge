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

/* offre/show.html.twig */
class __TwigTemplate_dc33640ce5fd21add227f2616d3f99f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'titre' => [$this, 'block_titre'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/show.html.twig"));

        $this->parent = $this->loadTemplate("basepage.html.twig", "offre/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Offres de Cov
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "Offres de Cov
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        echo "Offres de Cov
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<h1>Offre COVOITURAGE</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>ImageVehicule</th>
\t\t\t\t<td>
\t\t\t\t\t<img width=\"200\" height=\"200\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 18, $this->source); })()), "imageVehicule", [], "any", false, false, false, 18))), "html", null, true);
        echo "\"/></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>PrenomChauff</th>
\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 22, $this->source); })()), "prenomChauff", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>NumChauff</th>
\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 26, $this->source); })()), "numChauff", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>DateOffre</th>
\t\t\t\t<td>";
        // line 30
        ((twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 30, $this->source); })()), "dateOffre", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 30, $this->source); })()), "dateOffre", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Heure</th>
\t\t\t\t<td>";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 34, $this->source); })()), "heure", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 34, $this->source); })()), "heure", [], "any", false, false, false, 34), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>PrixOffre</th>
\t\t\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 38, $this->source); })()), "prixOffre", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Depart</th>
\t\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 42, $this->source); })()), "depart", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Destination</th>
\t\t\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 46, $this->source); })()), "destination", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>PlacesDispo</th>
\t\t\t\t<td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 50, $this->source); })()), "placesDispo", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_index");
        echo "\">back to list</a>

\t<a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_edit", ["idOffre" => twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 57, $this->source); })()), "idOffre", [], "any", false, false, false, 57)]), "html", null, true);
        echo "\">edit</a>

\t";
        // line 59
        echo twig_include($this->env, $context, "offre/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offre/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 59,  182 => 57,  177 => 55,  169 => 50,  162 => 46,  155 => 42,  148 => 38,  141 => 34,  134 => 30,  127 => 26,  120 => 22,  113 => 18,  104 => 11,  97 => 10,  83 => 7,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basepage.html.twig' %}

{% block title %}Offres de Cov
{% endblock %}
{% block titre %}Offres de Cov
{% endblock %}
{% block breadcrumbs %}Offres de Cov
{% endblock %}

{% block body %}
\t<h1>Offre COVOITURAGE</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>ImageVehicule</th>
\t\t\t\t<td>
\t\t\t\t\t<img width=\"200\" height=\"200\" src=\"{{ asset('uploads/' ~ offre.imageVehicule) }}\"/></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>PrenomChauff</th>
\t\t\t\t<td>{{ offre.prenomChauff }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>NumChauff</th>
\t\t\t\t<td>{{ offre.numChauff }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>DateOffre</th>
\t\t\t\t<td>{{ offre.dateOffre ? offre.dateOffre|date('Y-m-d') : '' }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Heure</th>
\t\t\t\t<td>{{ offre.heure ? offre.heure|date('H:i:s') : '' }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>PrixOffre</th>
\t\t\t\t<td>{{ offre.prixOffre }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Depart</th>
\t\t\t\t<td>{{ offre.depart }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Destination</th>
\t\t\t\t<td>{{ offre.destination }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>PlacesDispo</th>
\t\t\t\t<td>{{ offre.placesDispo }}</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('app_offre_index') }}\">back to list</a>

\t<a href=\"{{ path('app_offre_edit', {'idOffre': offre.idOffre}) }}\">edit</a>

\t{{ include('offre/_delete_form.html.twig') }}
{% endblock %}
", "offre/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\offre\\show.html.twig");
    }
}
