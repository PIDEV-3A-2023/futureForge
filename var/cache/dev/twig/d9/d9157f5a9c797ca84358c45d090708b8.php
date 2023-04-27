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

/* reservation_bus/show.html.twig */
class __TwigTemplate_83d70d931ba2182b5d4688c6bd093d4d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_bus/show.html.twig"));

        $this->parent = $this->loadTemplate("basepage.html.twig", "reservation_bus/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ReservationBus";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "ReservationBus";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        echo "ReservationBus";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>ReservationBus</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NumPlace</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 22, $this->source); })()), "numPlace", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 26
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 26, $this->source); })()), "date", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Destination</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 34, $this->source); })()), "destination", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_bus_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_bus_edit", ["idReservationBus" => twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 41, $this->source); })()), "idReservationBus", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 43
        echo twig_include($this->env, $context, "reservation_bus/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation_bus/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 43,  157 => 41,  152 => 39,  144 => 34,  137 => 30,  130 => 26,  123 => 22,  116 => 18,  109 => 14,  101 => 8,  94 => 7,  81 => 5,  68 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basepage.html.twig' %}

{% block title %}ReservationBus{% endblock %}
{% block titre %}ReservationBus{% endblock %}
{% block breadcrumbs %}ReservationBus{% endblock %}

{% block body %}
    <h1>ReservationBus</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>{{ reservation_bu.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ reservation_bu.prenom }}</td>
            </tr>
            <tr>
                <th>NumPlace</th>
                <td>{{ reservation_bu.numPlace }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ reservation_bu.date ? reservation_bu.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ reservation_bu.email }}</td>
            </tr>
            <tr>
                <th>Destination</th>
                <td>{{ reservation_bu.destination }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_reservation_bus_index') }}\">back to list</a>

    <a href=\"{{ path('app_reservation_bus_edit', {'idReservationBus': reservation_bu.idReservationBus}) }}\">edit</a>

    {{ include('reservation_bus/_delete_form.html.twig') }}
{% endblock %}
", "reservation_bus/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\reservation_bus\\show.html.twig");
    }
}
