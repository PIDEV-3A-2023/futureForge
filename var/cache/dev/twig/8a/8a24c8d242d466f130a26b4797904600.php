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

/* offre2/index.html.twig */
class __TwigTemplate_ff532e265a6af69d65a077c484d3d928 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre2/index.html.twig"));

        $this->parent = $this->loadTemplate("basepage.html.twig", "offre2/index.html.twig", 1);
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
\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;
\t\t\t\t\t\t\t\t\t  justify-content: center;
\t\t\t\t\t\t\t\t\t  align-items: center;\" class=\"fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<div style=\"width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: flex-start;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;\">
\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre2s"]) || array_key_exists("offre2s", $context) ? $context["offre2s"] : (function () { throw new RuntimeError('Variable "offre2s" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre2"]) {
            // line 24
            echo "\t\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\"></div>
\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t\t<a href=\"car-single.html\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre2"], "nom", [], "any", false, false, false, 34), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<div style=\"display: block;\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\" class=\"cat\">-";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre2"], "reduction", [], "any", false, false, false, 38), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre2"], "description", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre2"], "type", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">";
            // line 48
            ((twig_get_attribute($this->env, $this->source, $context["offre2"], "dated", [], "any", false, false, false, 48)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre2"], "dated", [], "any", false, false, false, 48), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t";
            // line 50
            ((twig_get_attribute($this->env, $this->source, $context["offre2"], "dated", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre2"], "dated", [], "any", false, false, false, 50), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 55
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_new", ["id" => twig_get_attribute($this->env, $this->source, $context["offre2"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"btn btn-primary py-2 mr-1\">Abonner</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre2_show", ["id" => twig_get_attribute($this->env, $this->source, $context["offre2"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\"btn btn-secondary py-2 ml-1\">Details</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 62
            echo "\t\t\t\t\t<div style=\"margin-top: 50px; display: flex;\">
\t\t\t\t\t\t<p>No offers available at the moment</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t</div>
\t
\t";
        // line 68
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["offre2s"]) || array_key_exists("offre2s", $context) ? $context["offre2s"] : (function () { throw new RuntimeError('Variable "offre2s" does not exist.', 68, $this->source); })()));
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offre2/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 68,  198 => 66,  189 => 62,  180 => 58,  176 => 57,  172 => 55,  166 => 50,  161 => 48,  155 => 45,  149 => 42,  142 => 38,  135 => 34,  123 => 24,  118 => 23,  107 => 14,  100 => 13,  92 => 10,  85 => 9,  77 => 7,  70 => 6,  62 => 4,  55 => 3,  38 => 1,);
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
\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;
\t\t\t\t\t\t\t\t\t  justify-content: center;
\t\t\t\t\t\t\t\t\t  align-items: center;\" class=\"fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<div style=\"width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: flex-start;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;\">
\t\t\t\t{% for offre2 in offre2s %}
\t\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\"></div>
\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t\t<a href=\"car-single.html\">{{ offre2.nom }}</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<div style=\"display: block;\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\" class=\"cat\">-{{ offre2.reduction }}
\t\t\t\t\t\t\t\t\t\t%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">{{ offre2.description }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">{{ offre2.type }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">{{ offre2.dated ? offre2.dated|date('Y-m-d') : '' }}
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t{{ offre2.dated ? offre2.dated|date('Y-m-d') : '' }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{# <div style=\"margin-right: 0; margin-left: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_abonnement_new', {'id': offre2.id}) }}\" class=\"btn btn-primary py-2 mr-1\">Abonner</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_offre2_show', {'id': offre2.id}) }}\" class=\"btn btn-secondary py-2 ml-1\">Details</a>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<div style=\"margin-top: 50px; display: flex;\">
\t\t\t\t\t\t<p>No offers available at the moment</p>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t
\t{{ knp_pagination_render(offre2s) }}
\t\t</div>
\t</div>
{% endblock %}
", "offre2/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\offre2\\index.html.twig");
    }
}
