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

/* offre/show.html.twig */
class __TwigTemplate_e7a0786e0a8592e65cdc165b90b79d21 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/show.html.twig"));

        $this->parent = $this->loadTemplate("basepage.html.twig", "offre/show.html.twig", 1);
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
        echo "\t<h1>Offre COVOITURAGE</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>ImageVehicule</th>
\t\t\t\t<td>
\t\t\t\t\t<img width=\"200\" height=\"200\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 18, $this->source); })()), "imageVehicule", [], "any", false, false, false, 18))), "html", null, true);
        echo "\"/></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>PrenomChauff</th>
\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 22, $this->source); })()), "prenomChauff", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>NumChauff</th>
\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 26, $this->source); })()), "numChauff", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>DateOffre</th>
\t\t\t\t<td>";
        // line 30
        ((twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 30, $this->source); })()), "dateOffre", [], "any", false, false, false, 30)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 30, $this->source); })()), "dateOffre", [], "any", false, false, false, 30), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Heure</th>
\t\t\t\t<td>";
        // line 34
        ((twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 34, $this->source); })()), "heure", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 34, $this->source); })()), "heure", [], "any", false, false, false, 34), "H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>PrixOffre</th>
\t\t\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 38, $this->source); })()), "prixOffre", [], "any", false, false, false, 38), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Depart</th>
\t\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 42, $this->source); })()), "depart", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Destination</th>
\t\t\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 46, $this->source); })()), "destination", [], "any", false, false, false, 46), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>PlacesDispo</th>
\t\t\t\t<td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 50, $this->source); })()), "placesDispo", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Avis</th>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 55
        if (((isset($context["avgRate"]) || array_key_exists("avgRate", $context) ? $context["avgRate"] : (function () { throw new RuntimeError('Variable "avgRate" does not exist.', 55, $this->source); })()) <= 0)) {
            // line 56
            echo "\t\t\t\t\t\t<span class=\"fa fa-star\" style=\"color: #c2c0c0;\"></span>
\t\t\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["avgRate"]) || array_key_exists("avgRate", $context) ? $context["avgRate"] : (function () { throw new RuntimeError('Variable "avgRate" does not exist.', 58, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 59
                echo "\t\t\t\t\t\t\t<span class=\"fa fa-star checked\" style=\"color: #01d28e;\"></span>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Avis des clients</th>
\t\t\t\t<td>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 69
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "idUser", [], "any", false, false, false, 70), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "rate", [], "any", false, false, false, 72), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "descriptionAvis", [], "any", false, false, false, 74), "html", null, true);
            echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t\t\t</ul>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_index");
        echo "\">back to list</a>

\t<a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_edit", ["idOffre" => twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 85, $this->source); })()), "idOffre", [], "any", false, false, false, 85)]), "html", null, true);
        echo "\">edit</a>

\t";
        // line 87
        echo twig_include($this->env, $context, "offre/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offre/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 87,  245 => 85,  240 => 83,  232 => 77,  223 => 74,  218 => 72,  213 => 70,  210 => 69,  206 => 68,  198 => 62,  195 => 61,  188 => 59,  183 => 58,  179 => 56,  177 => 55,  169 => 50,  162 => 46,  155 => 42,  148 => 38,  141 => 34,  134 => 30,  127 => 26,  120 => 22,  113 => 18,  104 => 11,  97 => 10,  83 => 7,  69 => 5,  55 => 3,  38 => 1,);
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
\t<h1>Offre COVOITURAGE</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>ImageVehicule</th>
\t\t\t\t<td>
\t\t\t\t\t<img width=\"200\" height=\"200\" src=\"{{ asset('uploads/' ~ offre.imageVehicule) }}\"/></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>PrenomChauff</th>
\t\t\t\t<td>{{ offre.prenomChauff }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>NumChauff</th>
\t\t\t\t<td>{{ offre.numChauff }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>DateOffre</th>
\t\t\t\t<td>{{ offre.dateOffre ? offre.dateOffre|date('Y-m-d') : '' }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Heure</th>
\t\t\t\t<td>{{ offre.heure ? offre.heure|date('H:i:s') : '' }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>PrixOffre</th>
\t\t\t\t<td>{{ offre.prixOffre }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Depart</th>
\t\t\t\t<td>{{ offre.depart }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Destination</th>
\t\t\t\t<td>{{ offre.destination }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>PlacesDispo</th>
\t\t\t\t<td>{{ offre.placesDispo }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Avis</th>
\t\t\t\t<td>
\t\t\t\t\t{% if avgRate <= 0 %}
\t\t\t\t\t\t<span class=\"fa fa-star\" style=\"color: #c2c0c0;\"></span>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% for i in 1..avgRate %}
\t\t\t\t\t\t\t<span class=\"fa fa-star checked\" style=\"color: #01d28e;\"></span>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Avis des clients</th>
\t\t\t\t<td>
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for avi in avis %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{{ avi.idUser }}
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t{{ avi.rate }}
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t{{ avi.descriptionAvis }}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('app_offre_index') }}\">back to list</a>

\t<a href=\"{{ path('app_offre_edit', {'idOffre': offre.idOffre}) }}\">edit</a>

\t{{ include('offre/_delete_form.html.twig') }}
{% endblock %}
", "offre/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\offre\\show.html.twig");
    }
}
