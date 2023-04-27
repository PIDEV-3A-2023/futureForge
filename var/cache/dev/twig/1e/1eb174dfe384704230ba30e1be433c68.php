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

/* offre2Admin/show.html.twig */
class __TwigTemplate_314eba2447f162ff876f1be5942ffc27 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre2Admin/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre2Admin/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Offre2
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
        echo "\t<h1>Offre</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre2"]) || array_key_exists("offre2", $context) ? $context["offre2"] : (function () { throw new RuntimeError('Variable "offre2" does not exist.', 13, $this->source); })()), "nom", [], "any", false, false, false, 13), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Description</th>
\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre2"]) || array_key_exists("offre2", $context) ? $context["offre2"] : (function () { throw new RuntimeError('Variable "offre2" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Reduction</th>
\t\t\t\t<td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre2"]) || array_key_exists("offre2", $context) ? $context["offre2"] : (function () { throw new RuntimeError('Variable "offre2" does not exist.', 21, $this->source); })()), "reduction", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Type</th>
\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre2"]) || array_key_exists("offre2", $context) ? $context["offre2"] : (function () { throw new RuntimeError('Variable "offre2" does not exist.', 25, $this->source); })()), "type", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Dated</th>
\t\t\t\t<td>";
        // line 29
        ((twig_get_attribute($this->env, $this->source, (isset($context["offre2"]) || array_key_exists("offre2", $context) ? $context["offre2"] : (function () { throw new RuntimeError('Variable "offre2" does not exist.', 29, $this->source); })()), "dated", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre2"]) || array_key_exists("offre2", $context) ? $context["offre2"] : (function () { throw new RuntimeError('Variable "offre2" does not exist.', 29, $this->source); })()), "dated", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Datef</th>
\t\t\t\t<td>";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["offre2"]) || array_key_exists("offre2", $context) ? $context["offre2"] : (function () { throw new RuntimeError('Variable "offre2" does not exist.', 33, $this->source); })()), "datef", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre2"]) || array_key_exists("offre2", $context) ? $context["offre2"] : (function () { throw new RuntimeError('Variable "offre2" does not exist.', 33, $this->source); })()), "datef", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre2_index");
        echo "\">back to list</a>

\t<a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre2_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["offre2"]) || array_key_exists("offre2", $context) ? $context["offre2"] : (function () { throw new RuntimeError('Variable "offre2" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
        echo "\">edit</a>

\t";
        // line 42
        echo twig_include($this->env, $context, "offre2Admin/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offre2Admin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 42,  130 => 40,  125 => 38,  117 => 33,  110 => 29,  103 => 25,  96 => 21,  89 => 17,  82 => 13,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offre2
{% endblock %}

{% block body %}
\t<h1>Offre</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>{{ offre2.nom }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Description</th>
\t\t\t\t<td>{{ offre2.description }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Reduction</th>
\t\t\t\t<td>{{ offre2.reduction }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Type</th>
\t\t\t\t<td>{{ offre2.type }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Dated</th>
\t\t\t\t<td>{{ offre2.dated ? offre2.dated|date('Y-m-d') : '' }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Datef</th>
\t\t\t\t<td>{{ offre2.datef ? offre2.datef|date('Y-m-d') : '' }}</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('admin_offre2_index') }}\">back to list</a>

\t<a href=\"{{ path('admin_offre2_edit', {'id': offre2.id}) }}\">edit</a>

\t{{ include('offre2Admin/_delete_form.html.twig') }}
{% endblock %}
", "offre2Admin/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\offre2Admin\\show.html.twig");
    }
}
