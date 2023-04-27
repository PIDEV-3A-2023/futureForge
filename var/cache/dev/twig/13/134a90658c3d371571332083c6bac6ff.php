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

/* offre/index.html.twig */
class __TwigTemplate_c1f22a7d21bda67ff61058de091dceac extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/index.html.twig"));

        $this->parent = $this->loadTemplate("basepage.html.twig", "offre/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Offres de Cov
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "Offres de Cov
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        echo "Offres de Cov
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
        echo "
\t<a style=\"border: 1px solid #01d28e; padding: 10px;\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_new");
        echo "\">Ajout Offre de Cov</a>
\t<div style=\"display: block; margin-top: 50px;\">
\t\t<div style=\"display: flex;
\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;
\t\t\t\t\t\t\t\t\t  justify-content: center;
\t\t\t\t\t\t\t\t\t  align-items: center;\" class=\"fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<div style=\"width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: flex-start;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;\">
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 23
            echo "\t\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\">
\t\t\t\t\t\t\t<img class=\"img rounded d-flex align-items-end\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["offre"], "imageVehicule", [], "any", false, false, false, 31))), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t\t<a href=\"car-single.html\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "prenomChauff", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<div class=\"d-flex mb-3\" style=\"display: flex;\">
\t\t\t\t\t\t\t\t<div style=\"margin-left: 0; margin-right: auto;\">
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\" class=\"cat\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "numChauff", [], "any", false, false, false, 39), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "placesDispo", [], "any", false, false, false, 40), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "prixOffre", [], "any", false, false, false, 41), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\tTND</p>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["offre"], "dateOffre", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "dateOffre", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t";
            // line 45
            ((twig_get_attribute($this->env, $this->source, $context["offre"], "heure", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "heure", [], "any", false, false, false, 45), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "depart", [], "any", false, false, false, 46), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t->
\t\t\t\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "destination", [], "any", false, false, false, 48), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 52
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_edit", ["idOffre" => twig_get_attribute($this->env, $this->source, $context["offre"], "idOffre", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\" class=\"btn btn-primary py-2 mr-1\">Edit</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_avis", ["idOffre" => twig_get_attribute($this->env, $this->source, $context["offre"], "idOffre", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\" class=\"btn btn-primary py-2 ml-1\">Avis</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_show", ["idOffre" => twig_get_attribute($this->env, $this->source, $context["offre"], "idOffre", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"btn btn-secondary py-2 ml-1\">Details</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>no records found</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offre/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 65,  203 => 61,  193 => 56,  189 => 55,  185 => 54,  181 => 52,  176 => 48,  171 => 46,  167 => 45,  162 => 43,  157 => 41,  153 => 40,  149 => 39,  142 => 35,  135 => 31,  125 => 23,  120 => 22,  107 => 12,  104 => 11,  97 => 10,  83 => 7,  69 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basepage.html.twig' %}

{% block title %}Offres de Cov
{% endblock %}
{% block titre %}Offres de Cov
{% endblock %}
{% block breadcrumbs %}Offres de Cov
{% endblock %}

{% block body %}

\t<a style=\"border: 1px solid #01d28e; padding: 10px;\" href=\"{{ path('app_offre_new') }}\">Ajout Offre de Cov</a>
\t<div style=\"display: block; margin-top: 50px;\">
\t\t<div style=\"display: flex;
\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;
\t\t\t\t\t\t\t\t\t  justify-content: center;
\t\t\t\t\t\t\t\t\t  align-items: center;\" class=\"fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<div style=\"width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: flex-start;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;\">
\t\t\t\t{% for offre in offres %}
\t\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\">
\t\t\t\t\t\t\t<img class=\"img rounded d-flex align-items-end\" src=\"{{ asset('uploads/' ~ offre.imageVehicule) }}\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t\t<a href=\"car-single.html\">{{ offre.prenomChauff }}</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<div class=\"d-flex mb-3\" style=\"display: flex;\">
\t\t\t\t\t\t\t\t<div style=\"margin-left: 0; margin-right: auto;\">
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\" class=\"cat\">{{ offre.numChauff }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">{{ offre.placesDispo }}</span>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">{{ offre.prixOffre }}
\t\t\t\t\t\t\t\t\t\tTND</p>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">{{ offre.dateOffre ? offre.dateOffre|date('Y-m-d') : '' }}
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t{{ offre.heure ? offre.heure|date('H:i:s') : '' }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">{{ offre.depart }}
\t\t\t\t\t\t\t\t\t\t->
\t\t\t\t\t\t\t\t\t\t{{ offre.destination }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{# <div style=\"margin-right: 0; margin-left: auto;\">
\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offre_edit', {'idOffre': offre.idOffre}) }}\" class=\"btn btn-primary py-2 mr-1\">Edit</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offre_avis', {'idOffre': offre.idOffre}) }}\" class=\"btn btn-primary py-2 ml-1\">Avis</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offre_show', {'idOffre': offre.idOffre}) }}\" class=\"btn btn-secondary py-2 ml-1\">Details</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>no records found</p>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "offre/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\offre\\index.html.twig");
    }
}
