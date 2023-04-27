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
class __TwigTemplate_d75742fb8b58fd8ebe469e77b9741daf extends Template
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

        echo "ReservationBus
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "ReservationBus
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        echo "ReservationBus
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
        echo "\t<h1>ReservationBus</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>QR Code</th>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 18
        if ((isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 18, $this->source); })())) {
            // line 19
            echo "\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["qrCode"]) || array_key_exists("qrCode", $context) ? $context["qrCode"] : (function () { throw new RuntimeError('Variable "qrCode" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\" alt=\"qr-code\">
\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>NumPlace</th>
\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 33, $this->source); })()), "numPlace", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Date</th>
\t\t\t\t<td>";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 37, $this->source); })()), "date", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 37, $this->source); })()), "date", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Email</th>
\t\t\t\t<td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Destination</th>
\t\t\t\t<td>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 45, $this->source); })()), "destination", [], "any", false, false, false, 45), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_bus_index");
        echo "\">back to list</a>

\t<a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_bus_edit", ["idReservationBus" => twig_get_attribute($this->env, $this->source, (isset($context["reservation_bu"]) || array_key_exists("reservation_bu", $context) ? $context["reservation_bu"] : (function () { throw new RuntimeError('Variable "reservation_bu" does not exist.', 52, $this->source); })()), "idReservationBus", [], "any", false, false, false, 52)]), "html", null, true);
        echo "\">edit</a>

\t";
        // line 54
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
        return array (  180 => 54,  175 => 52,  170 => 50,  162 => 45,  155 => 41,  148 => 37,  141 => 33,  134 => 29,  127 => 25,  121 => 21,  115 => 19,  113 => 18,  104 => 11,  97 => 10,  83 => 7,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basepage.html.twig' %}

{% block title %}ReservationBus
{% endblock %}
{% block titre %}ReservationBus
{% endblock %}
{% block breadcrumbs %}ReservationBus
{% endblock %}

{% block body %}
\t<h1>ReservationBus</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>QR Code</th>
\t\t\t\t<td>
\t\t\t\t\t{% if qrCode %}
\t\t\t\t\t\t<img src=\"{{ qrCode }}\" alt=\"qr-code\">
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>{{ reservation_bu.nom }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<td>{{ reservation_bu.prenom }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>NumPlace</th>
\t\t\t\t<td>{{ reservation_bu.numPlace }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Date</th>
\t\t\t\t<td>{{ reservation_bu.date ? reservation_bu.date|date('Y-m-d') : '' }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Email</th>
\t\t\t\t<td>{{ reservation_bu.email }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Destination</th>
\t\t\t\t<td>{{ reservation_bu.destination }}</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('app_reservation_bus_index') }}\">back to list</a>

\t<a href=\"{{ path('app_reservation_bus_edit', {'idReservationBus': reservation_bu.idReservationBus}) }}\">edit</a>

\t{{ include('reservation_bus/_delete_form.html.twig') }}
{% endblock %}
", "reservation_bus/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\reservation_bus\\show.html.twig");
    }
}
