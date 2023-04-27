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

/* reservation_covoiturageAdmin/index.html.twig */
class __TwigTemplate_0369e7877bd07a01931f4a03ba71ee3f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_covoiturageAdmin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation_covoiturageAdmin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ReservationCovoiturage index
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
        echo "\t<h1>Reservation Covoiturage
\t</h1>

    <form id=\"search-form\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_covoiturage_search");
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
\t\t\t\t<th>PntRencontre</th>
\t\t\t\t<th>Distination</th>
\t\t\t\t<th>NbrPlace</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_covoiturages"]) || array_key_exists("reservation_covoiturages", $context) ? $context["reservation_covoiturages"] : (function () { throw new RuntimeError('Variable "reservation_covoiturages" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_covoiturage"]) {
            // line 33
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "prenom", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "pntRencontre", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "distination", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "nbrPlace", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "date", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "date", [], "any", false, false, false, 39), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_covoiturage_show", ["idReservation" => twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "idReservation", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_covoiturage_edit", ["idReservation" => twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "idReservation", [], "any", false, false, false, 42)]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_covoiturage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_covoiturage_new");
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
        return "reservation_covoiturageAdmin/index.html.twig";
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

{% block title %}ReservationCovoiturage index
{% endblock %}

{% block body %}
\t<h1>Reservation Covoiturage
\t</h1>

    <form id=\"search-form\" action=\"{{ path('reservation_covoiturage_search') }}\" method=\"get\">
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
\t\t\t\t<th>PntRencontre</th>
\t\t\t\t<th>Distination</th>
\t\t\t\t<th>NbrPlace</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for reservation_covoiturage in reservation_covoiturages %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ reservation_covoiturage.nom }}</td>
\t\t\t\t\t<td>{{ reservation_covoiturage.prenom }}</td>
\t\t\t\t\t<td>{{ reservation_covoiturage.pntRencontre }}</td>
\t\t\t\t\t<td>{{ reservation_covoiturage.distination }}</td>
\t\t\t\t\t<td>{{ reservation_covoiturage.nbrPlace }}</td>
\t\t\t\t\t<td>{{ reservation_covoiturage.date ? reservation_covoiturage.date|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('admin_reservation_covoiturage_show', {'idReservation': reservation_covoiturage.idReservation}) }}\">show</a>
\t\t\t\t\t\t<a href=\"{{ path('admin_reservation_covoiturage_edit', {'idReservation': reservation_covoiturage.idReservation}) }}\">edit</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('admin_reservation_covoiturage_new') }}\">Create new</a>

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
", "reservation_covoiturageAdmin/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\reservation_covoiturageAdmin\\index.html.twig");
    }
}
