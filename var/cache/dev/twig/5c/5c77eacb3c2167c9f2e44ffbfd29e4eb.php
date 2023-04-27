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

/* offreAdmin/index.html.twig */
class __TwigTemplate_20b2acc72eb89d7766dda206d66a3408 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offreAdmin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offreAdmin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Offres
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<h1>Offres COVOITURAGE</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>ImageVehicule</th>
\t\t\t\t<th>PrenomChauff</th>
\t\t\t\t<th>NumChauff</th>
\t\t\t\t<th>DateOffre</th>
\t\t\t\t<th>Heure</th>
\t\t\t\t<th>PrixOffre</th>
\t\t\t\t<th>Depart</th>
\t\t\t\t<th>Destination</th>
\t\t\t\t<th>PlacesDispo</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 26
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "imageVehicule", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "prenomChauff", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "numChauff", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 30
            ((twig_get_attribute($this->env, $this->source, $context["offre"], "dateOffre", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "dateOffre", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 31
            ((twig_get_attribute($this->env, $this->source, $context["offre"], "heure", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "heure", [], "any", false, false, false, 31), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "prixOffre", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "depart", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "destination", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "placesDispo", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_show", ["idOffre" => twig_get_attribute($this->env, $this->source, $context["offre"], "idOffre", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"11\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offreAdmin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 45,  148 => 41,  139 => 37,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  99 => 26,  94 => 25,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offres
{% endblock %}

{% block body %}
\t<h1>Offres COVOITURAGE</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>ImageVehicule</th>
\t\t\t\t<th>PrenomChauff</th>
\t\t\t\t<th>NumChauff</th>
\t\t\t\t<th>DateOffre</th>
\t\t\t\t<th>Heure</th>
\t\t\t\t<th>PrixOffre</th>
\t\t\t\t<th>Depart</th>
\t\t\t\t<th>Destination</th>
\t\t\t\t<th>PlacesDispo</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for offre in offres %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ offre.imageVehicule }}</td>
\t\t\t\t\t<td>{{ offre.prenomChauff }}</td>
\t\t\t\t\t<td>{{ offre.numChauff }}</td>
\t\t\t\t\t<td>{{ offre.dateOffre ? offre.dateOffre|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ offre.heure ? offre.heure|date('H:i:s') : '' }}</td>
\t\t\t\t\t<td>{{ offre.prixOffre }}</td>
\t\t\t\t\t<td>{{ offre.depart }}</td>
\t\t\t\t\t<td>{{ offre.destination }}</td>
\t\t\t\t\t<td>{{ offre.placesDispo }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('admin_offre_show', {'idOffre': offre.idOffre}) }}\">show</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"11\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
{% endblock %}
", "offreAdmin/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\offreAdmin\\index.html.twig");
    }
}
