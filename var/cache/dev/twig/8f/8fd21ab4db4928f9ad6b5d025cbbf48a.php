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

/* reservation_busAdmin/show.html.twig */
class __TwigTemplate_476e51ed83cc9d281c78fceb3e657378 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_busAdmin/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation_busAdmin/show.html.twig", 1);
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>ReservationBus</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 12, $this->source); })()), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 16, $this->source); })()), "prenom", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NumPlace</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 20, $this->source); })()), "numPlace", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 24, $this->source); })()), "date", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 24, $this->source); })()), "date", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Destination</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 32, $this->source); })()), "destination", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_bus_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_bus_edit", ["idReservationBus" => twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 39, $this->source); })()), "idReservationBus", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "reservation_busAdmin/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation_busAdmin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  129 => 39,  124 => 37,  116 => 32,  109 => 28,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ReservationBus{% endblock %}

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

    <a href=\"{{ path('admin_reservation_bus_index') }}\">back to list</a>

    <a href=\"{{ path('admin_reservation_bus_edit', {'idReservationBus': reservation_bu.idReservationBus}) }}\">edit</a>

    {{ include('reservation_busAdmin/_delete_form.html.twig') }}
{% endblock %}
", "reservation_busAdmin/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\reservation_busAdmin\\show.html.twig");
    }
}
