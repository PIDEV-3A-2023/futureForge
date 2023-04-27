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

/* abonnementAdmin/index.html.twig */
class __TwigTemplate_c3ebd9060377d92f89a1fb15d5a0acae extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnementAdmin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abonnementAdmin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Abonnement index
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
        echo "\t<h1>Abonnement index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>Identifiant</th>
\t\t\t\t<th>Cin</th>
\t\t\t\t<th>Type</th>
\t\t\t\t<th>Dated</th>
\t\t\t\t<th>Datef</th>
\t\t\t\t<th>Prix</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 27
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "prenom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img style=\"height: 100px; width: 100px; object-fit: cover;\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["abonnement"], "image", [], "any", false, false, false, 31))), "html", null, true);
            echo "\"/></td>
\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "identifiant", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "cin", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "type", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 36
            ((twig_get_attribute($this->env, $this->source, $context["abonnement"], "dated", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "dated", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 37
            ((twig_get_attribute($this->env, $this->source, $context["abonnement"], "datef", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "datef", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "prix", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_abonnement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("print_abonnement", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">export</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"12\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t</tbody>
\t</table>

\t\t\t\t\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("print_abonnements", ["id" => 0]);
        echo "\">export all</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "abonnementAdmin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 52,  167 => 49,  158 => 45,  149 => 41,  145 => 40,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  124 => 34,  120 => 33,  116 => 32,  112 => 31,  107 => 29,  103 => 28,  100 => 27,  95 => 26,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Abonnement index
{% endblock %}

{% block body %}
\t<h1>Abonnement index</h1>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<th>Image</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>Identifiant</th>
\t\t\t\t<th>Cin</th>
\t\t\t\t<th>Type</th>
\t\t\t\t<th>Dated</th>
\t\t\t\t<th>Datef</th>
\t\t\t\t<th>Prix</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for abonnement in abonnements %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ abonnement.nom }}</td>
\t\t\t\t\t<td>{{ abonnement.prenom }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<img style=\"height: 100px; width: 100px; object-fit: cover;\" src=\"{{ asset('uploads/' ~ abonnement.image) }}\"/></td>
\t\t\t\t\t<td>{{ abonnement.email }}</td>
\t\t\t\t\t<td>{{ abonnement.identifiant }}</td>
\t\t\t\t\t<td>{{ abonnement.cin }}</td>
\t\t\t\t\t<td>{{ abonnement.type }}</td>
\t\t\t\t\t<td>{{ abonnement.dated ? abonnement.dated|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ abonnement.datef ? abonnement.datef|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ abonnement.prix }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('admin_abonnement_show', {'id': abonnement.id}) }}\">show</a>
\t\t\t\t\t\t<a href=\"{{ path('print_abonnement', {'id': abonnement.id}) }}\">export</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"12\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t\t\t\t\t\t<a href=\"{{ path('print_abonnements', {'id': 0}) }}\">export all</a>
{% endblock %}
", "abonnementAdmin/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\abonnementAdmin\\index.html.twig");
    }
}
