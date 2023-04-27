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

/* abonnement/index.html.twig */
class __TwigTemplate_2329182bd91832533c130eb08205857d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/index.html.twig"));

        $this->parent = $this->loadTemplate("basepage.html.twig", "abonnement/index.html.twig", 1);
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
        echo "\tMes Abonnements
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
        echo "\tMes Abonnements
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
        echo "\tMes Abonnements
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
        echo "
\t<a style=\"border: 1px solid #01d28e; padding: 10px;\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre2_index");
        echo "\">See Offres Abonnement</a>
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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 26
            echo "\t\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\">
\t\t\t\t\t\t\t<img class=\"img rounded d-flex align-items-end\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["abonnement"], "image", [], "any", false, false, false, 34))), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t\t<a href=\"car-single.html\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "prenom", [], "any", false, false, false, 39), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<div class=\"d-flex mb-3\" style=\"display: flex;\">
\t\t\t\t\t\t\t\t<div style=\"margin-left: 0; margin-right: auto;\">
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\" class=\"cat\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "identifiant", [], "any", false, false, false, 43), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "cin", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "email", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "type", [], "any", false, false, false, 46), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "prix", [], "any", false, false, false, 47), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\tTND</p>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "type", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">";
            // line 50
            ((twig_get_attribute($this->env, $this->source, $context["abonnement"], "dated", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "dated", [], "any", false, false, false, 50), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t";
            // line 52
            ((twig_get_attribute($this->env, $this->source, $context["abonnement"], "datef", [], "any", false, false, false, 52)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "datef", [], "any", false, false, false, 52), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 56
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\" class=\"btn btn-primary py-2 mr-1\">Edit</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_show", ["id" => twig_get_attribute($this->env, $this->source, $context["abonnement"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"btn btn-secondary py-2 ml-1\">Details</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            echo "\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>no records found</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 68,  209 => 64,  199 => 59,  195 => 58,  191 => 56,  186 => 52,  181 => 50,  177 => 49,  172 => 47,  168 => 46,  164 => 45,  160 => 44,  156 => 43,  149 => 39,  145 => 38,  138 => 34,  128 => 26,  123 => 25,  110 => 15,  107 => 14,  100 => 13,  92 => 10,  85 => 9,  77 => 7,  70 => 6,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basepage.html.twig' %}

{% block title %}
\tMes Abonnements
{% endblock %}
{% block titre %}
\tMes Abonnements
{% endblock %}
{% block breadcrumbs %}
\tMes Abonnements
{% endblock %}

{% block body %}

\t<a style=\"border: 1px solid #01d28e; padding: 10px;\" href=\"{{ path('app_offre2_index') }}\">See Offres Abonnement</a>
\t<div style=\"display: block; margin-top: 50px;\">
\t\t<div style=\"display: flex;
\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;
\t\t\t\t\t\t\t\t\t  justify-content: center;
\t\t\t\t\t\t\t\t\t  align-items: center;\" class=\"fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<div style=\"width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: flex-start;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;\">
\t\t\t\t{% for abonnement in abonnements %}
\t\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\">
\t\t\t\t\t\t\t<img class=\"img rounded d-flex align-items-end\" src=\"{{ asset('uploads/' ~ abonnement.image) }}\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t<h2 class=\"mb-0\">
\t\t\t\t\t\t\t\t<a href=\"car-single.html\">{{ abonnement.nom }}
\t\t\t\t\t\t\t\t\t{{ abonnement.prenom }}</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<div class=\"d-flex mb-3\" style=\"display: flex;\">
\t\t\t\t\t\t\t\t<div style=\"margin-left: 0; margin-right: auto;\">
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\" class=\"cat\">{{ abonnement.identifiant }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">{{ abonnement.cin }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">{{ abonnement.email }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">{{ abonnement.type }}</span>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">{{ abonnement.prix }}
\t\t\t\t\t\t\t\t\t\tTND</p>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">{{ abonnement.type }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">{{ abonnement.dated ? abonnement.dated|date('Y-m-d') : '' }}
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t{{ abonnement.datef ? abonnement.datef|date('Y-m-d') : '' }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{# <div style=\"margin-right: 0; margin-left: auto;\">
\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_abonnement_edit', {'id': abonnement.id}) }}\" class=\"btn btn-primary py-2 mr-1\">Edit</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_abonnement_show', {'id': abonnement.id}) }}\" class=\"btn btn-secondary py-2 ml-1\">Details</a>
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
", "abonnement/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\abonnement\\index.html.twig");
    }
}
