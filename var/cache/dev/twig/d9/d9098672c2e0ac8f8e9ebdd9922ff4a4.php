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

/* reservation_covoiturage/index.html.twig */
class __TwigTemplate_1399812c89e0f708396a66bb305b6216 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_covoiturage/index.html.twig"));

        $this->parent = $this->loadTemplate("basepage.html.twig", "reservation_covoiturage/index.html.twig", 1);
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
        echo "            <a style=\"border: 1px solid #01d28e; padding: 10px;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_covoiturage_new");
        echo "\">Ajout ReservationCovoiturage</a>
    \t\t<div style=\"margin-top: 50px;\" class=\"row\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation_covoiturages"]) || array_key_exists("reservation_covoiturages", $context) ? $context["reservation_covoiturages"] : (function () { throw new RuntimeError('Variable "reservation_covoiturages" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation_covoiturage"]) {
            // line 11
            echo "    \t\t\t<div class=\"col-md-4\">
    \t\t\t\t<div class=\"car-wrap rounded ftco-animate\">
    \t\t\t\t\t<div class=\"text\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "prenom", [], "any", false, false, false, 14), "html", null, true);
            echo "</a></h2>
    \t\t\t\t\t\t<div class=\"d-flex mb-3\" style=\"display: flex;\">
                            <div style=\"margin-left: 0; margin-right: auto;\">
\t    \t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\" class=\"cat\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "pntRencontre", [], "any", false, false, false, 17), "html", null, true);
            echo "</span>
\t    \t\t\t\t\t\t<span class=\"cat\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "nbrPlace", [], "any", false, false, false, 18), "html", null, true);
            echo "</span>
                            </div>
                            <div style=\"margin-right: 0; margin-left: auto;\">
\t    \t\t\t\t\t\t<p class=\"price ml-auto\">";
            // line 21
            ((twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "date", [], "any", false, false, false, 21)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "date", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
\t    \t\t\t\t\t\t<p class=\"price ml-auto\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "distination", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
                            </div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_covoiturage_edit", ["idReservation" => twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "idReservation", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" class=\"btn btn-primary py-2 mr-1\">Edit</a>
\t\t\t\t\t\t\t <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_covoiturage_show", ["idReservation" => twig_get_attribute($this->env, $this->source, $context["reservation_covoiturage"], "idReservation", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"btn btn-secondary py-2 ml-1\">Details</a>
\t\t\t\t\t\t\t </p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "    \t\t\t<div class=\"col-md-4\">
                <p>no records found</p>
    \t\t\t</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation_covoiturage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    \t\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation_covoiturage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 36,  160 => 32,  149 => 26,  145 => 25,  139 => 22,  135 => 21,  129 => 18,  125 => 17,  117 => 14,  112 => 11,  107 => 10,  101 => 8,  94 => 7,  81 => 5,  68 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basepage.html.twig' %}

{% block title %}ReservationCovoiturage{% endblock %}
{% block titre %}ReservationCovoiturage{% endblock %}
{% block breadcrumbs %}ReservationCovoiturage{% endblock %}

{% block body %}
            <a style=\"border: 1px solid #01d28e; padding: 10px;\" href=\"{{ path('app_reservation_covoiturage_new') }}\">Ajout ReservationCovoiturage</a>
    \t\t<div style=\"margin-top: 50px;\" class=\"row\">
        {% for reservation_covoiturage in reservation_covoiturages %}
    \t\t\t<div class=\"col-md-4\">
    \t\t\t\t<div class=\"car-wrap rounded ftco-animate\">
    \t\t\t\t\t<div class=\"text\">
    \t\t\t\t\t\t<h2 class=\"mb-0\"><a href=\"car-single.html\">{{ reservation_covoiturage.nom }} {{ reservation_covoiturage.prenom }}</a></h2>
    \t\t\t\t\t\t<div class=\"d-flex mb-3\" style=\"display: flex;\">
                            <div style=\"margin-left: 0; margin-right: auto;\">
\t    \t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\" class=\"cat\">{{ reservation_covoiturage.pntRencontre }}</span>
\t    \t\t\t\t\t\t<span class=\"cat\">{{ reservation_covoiturage.nbrPlace }}</span>
                            </div>
                            <div style=\"margin-right: 0; margin-left: auto;\">
\t    \t\t\t\t\t\t<p class=\"price ml-auto\">{{ reservation_covoiturage.date ? reservation_covoiturage.date|date('Y-m-d') : '' }}</p>
\t    \t\t\t\t\t\t<p class=\"price ml-auto\">{{ reservation_covoiturage.distination }}</p>
                            </div>
    \t\t\t\t\t\t</div>
    \t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\"><a href=\"{{ path('app_reservation_covoiturage_edit', {'idReservation': reservation_covoiturage.idReservation}) }}\" class=\"btn btn-primary py-2 mr-1\">Edit</a>
\t\t\t\t\t\t\t <a href=\"{{ path('app_reservation_covoiturage_show', {'idReservation': reservation_covoiturage.idReservation}) }}\" class=\"btn btn-secondary py-2 ml-1\">Details</a>
\t\t\t\t\t\t\t </p>
    \t\t\t\t\t</div>
    \t\t\t\t</div>
    \t\t\t</div>
        {% else %}
    \t\t\t<div class=\"col-md-4\">
                <p>no records found</p>
    \t\t\t</div>
        {% endfor %}
    \t\t</div>
{% endblock %}
", "reservation_covoiturage/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\reservation_covoiturage\\index.html.twig");
    }
}
