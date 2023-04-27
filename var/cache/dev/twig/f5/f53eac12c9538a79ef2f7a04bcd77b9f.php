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

/* reservation_busAdmin/index.html.twig */
class __TwigTemplate_833ce36bb4cd29776c6a08ab2e1e774a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_busAdmin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation_busAdmin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ReservationBus index
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
        echo "\t<h1>Reservation Bus
\t</h1>

    <form id=\"search-form\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_bus_search");
        echo "\" method=\"get\">
        <div style=\"margin-bottom: 4px;\" class=\"form-group\">
            <input type=\"text\" name=\"q\" class=\"form-control\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Search</button>
    </form>

    <hr>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<th>NumPlace</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>Destination</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_buses"]) || array_key_exists("reservation_buses", $context) ? $context["reservation_buses"] : (function () { throw new RuntimeError('Variable "reservation_buses" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_bu"]) {
            // line 33
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_bu"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_bu"], "prenom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_bu"], "numPlace", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 37
            ((twig_get_attribute($this->env, $this->source, $context["reservation_bu"], "date", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_bu"], "date", [], "any", false, false, false, 37), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_bu"], "email", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_bu"], "destination", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_bus_show", ["idReservationBus" => twig_get_attribute($this->env, $this->source, $context["reservation_bu"], "idReservationBus", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_bus_edit", ["idReservationBus" => twig_get_attribute($this->env, $this->source, $context["reservation_bu"], "idReservationBus", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_bu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_bus_new");
        echo "\">Create new</a>

    <script>
        \$(function () {
            \$('#search-form').submit(function (e) {
                e.preventDefault();

                \$.ajax({
                    url: \$(this).attr('action'),
                    data: \$(this).serialize(),
                    success: function (data) {
                        \$('#search-results').html(data);
                    }
                });
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation_busAdmin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 53,  162 => 50,  153 => 46,  144 => 42,  140 => 41,  135 => 39,  131 => 38,  127 => 37,  123 => 36,  119 => 35,  115 => 34,  112 => 33,  107 => 32,  84 => 12,  79 => 10,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ReservationBus index
{% endblock %}

{% block body %}
\t<h1>Reservation Bus
\t</h1>

    <form id=\"search-form\" action=\"{{ path('reservation_bus_search') }}\" method=\"get\">
        <div style=\"margin-bottom: 4px;\" class=\"form-group\">
            <input type=\"text\" name=\"q\" class=\"form-control\" value=\"{{ query }}\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Search</button>
    </form>

    <hr>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Prenom</th>
\t\t\t\t<th>NumPlace</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Email</th>
\t\t\t\t<th>Destination</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for reservation_bu in reservation_buses %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ reservation_bu.nom }}</td>
\t\t\t\t\t<td>{{ reservation_bu.prenom }}</td>
\t\t\t\t\t<td>{{ reservation_bu.numPlace }}</td>
\t\t\t\t\t<td>{{ reservation_bu.date ? reservation_bu.date|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ reservation_bu.email }}</td>
\t\t\t\t\t<td>{{ reservation_bu.destination }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('admin_reservation_bus_show', {'idReservationBus': reservation_bu.idReservationBus}) }}\">show</a>
\t\t\t\t\t\t<a href=\"{{ path('admin_reservation_bus_edit', {'idReservationBus': reservation_bu.idReservationBus}) }}\">edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('admin_reservation_bus_new') }}\">Create new</a>

    <script>
        \$(function () {
            \$('#search-form').submit(function (e) {
                e.preventDefault();

                \$.ajax({
                    url: \$(this).attr('action'),
                    data: \$(this).serialize(),
                    success: function (data) {
                        \$('#search-results').html(data);
                    }
                });
            });
        });
    </script>
{% endblock %}
", "reservation_busAdmin/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\reservation_busAdmin\\index.html.twig");
    }
}
