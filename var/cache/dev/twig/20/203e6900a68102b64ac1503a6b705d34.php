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

/* reservation_covoiturage/show.html.twig */
class __TwigTemplate_718b5542eded7421f43b965ba288f4e0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_covoiturage/show.html.twig"));

        $this->parent = $this->loadTemplate("basepage.html.twig", "reservation_covoiturage/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ReservationCovoiturage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "ReservationCovoiturage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        echo "ReservationCovoiturage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>ReservationCovoiturage</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_covoiturage"]) || array_key_exists("reservation_covoiturage", $context) ? $context["reservation_covoiturage"] : (function () { throw new RuntimeError('Variable "reservation_covoiturage" does not exist.', 14, $this->source); })()), "nom", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_covoiturage"]) || array_key_exists("reservation_covoiturage", $context) ? $context["reservation_covoiturage"] : (function () { throw new RuntimeError('Variable "reservation_covoiturage" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PntRencontre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_covoiturage"]) || array_key_exists("reservation_covoiturage", $context) ? $context["reservation_covoiturage"] : (function () { throw new RuntimeError('Variable "reservation_covoiturage" does not exist.', 22, $this->source); })()), "pntRencontre", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Distination</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_covoiturage"]) || array_key_exists("reservation_covoiturage", $context) ? $context["reservation_covoiturage"] : (function () { throw new RuntimeError('Variable "reservation_covoiturage" does not exist.', 26, $this->source); })()), "distination", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NbrPlace</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_covoiturage"]) || array_key_exists("reservation_covoiturage", $context) ? $context["reservation_covoiturage"] : (function () { throw new RuntimeError('Variable "reservation_covoiturage" does not exist.', 30, $this->source); })()), "nbrPlace", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["reservation_covoiturage"]) || array_key_exists("reservation_covoiturage", $context) ? $context["reservation_covoiturage"] : (function () { throw new RuntimeError('Variable "reservation_covoiturage" does not exist.', 34, $this->source); })()), "date", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation_covoiturage"]) || array_key_exists("reservation_covoiturage", $context) ? $context["reservation_covoiturage"] : (function () { throw new RuntimeError('Variable "reservation_covoiturage" does not exist.', 34, $this->source); })()), "date", [], "any", false, false, false, 34), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_covoiturage_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_covoiturage_edit", ["idReservation" => twig_get_attribute($this->env, $this->source, (isset($context["reservation_covoiturage"]) || array_key_exists("reservation_covoiturage", $context) ? $context["reservation_covoiturage"] : (function () { throw new RuntimeError('Variable "reservation_covoiturage" does not exist.', 41, $this->source); })()), "idReservation", [], "any", false, false, false, 41)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 43
        echo twig_include($this->env, $context, "reservation_covoiturage/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation_covoiturage/show.html.twig";
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

{% block title %}ReservationCovoiturage{% endblock %}
{% block titre %}ReservationCovoiturage{% endblock %}
{% block breadcrumbs %}ReservationCovoiturage{% endblock %}

{% block body %}
    <h1>ReservationCovoiturage</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>{{ reservation_covoiturage.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ reservation_covoiturage.prenom }}</td>
            </tr>
            <tr>
                <th>PntRencontre</th>
                <td>{{ reservation_covoiturage.pntRencontre }}</td>
            </tr>
            <tr>
                <th>Distination</th>
                <td>{{ reservation_covoiturage.distination }}</td>
            </tr>
            <tr>
                <th>NbrPlace</th>
                <td>{{ reservation_covoiturage.nbrPlace }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ reservation_covoiturage.date ? reservation_covoiturage.date|date('Y-m-d') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_reservation_covoiturage_index') }}\">back to list</a>

    <a href=\"{{ path('app_reservation_covoiturage_edit', {'idReservation': reservation_covoiturage.idReservation}) }}\">edit</a>

    {{ include('reservation_covoiturage/_delete_form.html.twig') }}
{% endblock %}
", "reservation_covoiturage/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\reservation_covoiturage\\show.html.twig");
    }
}
