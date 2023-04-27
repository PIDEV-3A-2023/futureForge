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

/* offre2/offre.html.twig */
class __TwigTemplate_2a182ab7867f7d1d5f42a638fd00d170 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre2/offre.html.twig"));

        $this->parent = $this->loadTemplate("basepage.html.twig", "offre2/offre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tOffres Ab
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "\tOffres Ab
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 10
        echo "\tOffres Ab
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "\t<div style=\"display: block;\">
\t\t<div style=\"display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: center;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  align-items: center;\" class=\"fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<div style=\"width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: flex-start;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;\">


\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\theight: 200px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\"></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t<a href=\"#\">Choose your Offre Type</a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\"></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t<a href=\"car-single.html\">Offre Mensuelle</a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div style=\"display: block;\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">remise 10 %</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">120 TND</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">1 Mois</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t<a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre2_men");
        echo "\" class=\"btn btn-secondary py-2 ml-1\">See All</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\"></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t<a href=\"car-single.html\">Offre Semestrielle</a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div style=\"display: block;\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">remise 20 %</span>
\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t<span class=\"cat\">120 TND</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">6 Mois</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t<a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre2_sem");
        echo "\" class=\"btn btn-secondary py-2 ml-1\">See All</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\"></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t<a href=\"car-single.html\">Offre Annuelle</a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div style=\"display: block;\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\" class=\"cat\">remise 30 %</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">120 TND</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">12 Mois</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t<a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre2_ann");
        echo "\" class=\"btn btn-secondary py-2 ml-1\">See All</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offre2/offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 125,  193 => 95,  161 => 66,  107 => 14,  100 => 13,  92 => 10,  85 => 9,  77 => 7,  70 => 6,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basepage.html.twig' %}

{% block title %}
\tOffres Ab
{% endblock %}
{% block titre %}
\tOffres Ab
{% endblock %}
{% block breadcrumbs %}
\tOffres Ab
{% endblock %}

{% block body %}
\t<div style=\"display: block;\">
\t\t<div style=\"display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: center;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  align-items: center;\" class=\"fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<div style=\"width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: flex-start;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;\">


\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\theight: 200px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\"></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t<a href=\"#\">Choose your Offre Type</a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\"></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t<a href=\"car-single.html\">Offre Mensuelle</a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div style=\"display: block;\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">remise 10 %</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">120 TND</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">1 Mois</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_offre2_men') }}\" class=\"btn btn-secondary py-2 ml-1\">See All</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\"></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t<a href=\"car-single.html\">Offre Semestrielle</a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div style=\"display: block;\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">remise 20 %</span>
\t\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t\t\t<span class=\"cat\">120 TND</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">6 Mois</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_offre2_sem') }}\" class=\"btn btn-secondary py-2 ml-1\">See All</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\"></div>
\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t<a href=\"car-single.html\">Offre Annuelle</a>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div style=\"display: block;\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\" class=\"cat\">remise 30 %</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">120 TND</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"cat\">12 Mois</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_offre2_ann') }}\" class=\"btn btn-secondary py-2 ml-1\">See All</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "offre2/offre.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\offre2\\offre.html.twig");
    }
}
