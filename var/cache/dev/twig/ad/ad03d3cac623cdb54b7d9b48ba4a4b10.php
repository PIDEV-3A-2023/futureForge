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

/* avisAdmin/index.html.twig */
class __TwigTemplate_821b42babde3b83280ed24c0ad24498a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avisAdmin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avisAdmin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Avis index
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
        echo "\t<h1>Avis
\t</h1>

\t<div id=\"div_chart\"></div>

\t<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
\t<script type=\"text/javascript\">
\t\t";
        // line 14
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw((isset($context["piechart"]) || array_key_exists("piechart", $context) ? $context["piechart"] : (function () { throw new RuntimeError('Variable "piechart" does not exist.', 14, $this->source); })()), "div_chart");
        echo "</script>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Rate</th>
\t\t\t\t<th>DescriptionAvis</th>
\t\t\t\t<th>Offre Cov</th>
\t\t\t\t<th>User</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
            // line 28
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, $context["avi"], "rate", [], "any", false, false, false, 30) <= 0)) {
                // line 31
                echo "\t\t\t\t\t\t\t<span class=\"fa fa-star\" style=\"color: #c2c0c0;\"></span>
\t\t\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["avi"], "rate", [], "any", false, false, false, 33)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\" style=\"color: #01d28e;\"></span>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "descriptionAvis", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "idOffre", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avi"], "idUser", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_avis_show", ["idAvis" => twig_get_attribute($this->env, $this->source, $context["avi"], "idAvis", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t";
            // line 43
            echo twig_include($this->env, $context, "avisAdmin/_delete_form.html.twig");
            echo "
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 47
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t</tbody>
\t</table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "avisAdmin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 51,  179 => 47,  162 => 43,  158 => 42,  153 => 40,  149 => 39,  145 => 38,  142 => 37,  139 => 36,  132 => 34,  127 => 33,  123 => 31,  121 => 30,  117 => 28,  99 => 27,  83 => 14,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Avis index
{% endblock %}

{% block body %}
\t<h1>Avis
\t</h1>

\t<div id=\"div_chart\"></div>

\t<script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
\t<script type=\"text/javascript\">
\t\t{{ gc_draw(piechart, \"div_chart\") }}</script>

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Rate</th>
\t\t\t\t<th>DescriptionAvis</th>
\t\t\t\t<th>Offre Cov</th>
\t\t\t\t<th>User</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for avi in avis %}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if avi.rate <= 0 %}
\t\t\t\t\t\t\t<span class=\"fa fa-star\" style=\"color: #c2c0c0;\"></span>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{% for i in 1..avi.rate %}
\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\" style=\"color: #01d28e;\"></span>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ avi.descriptionAvis }}</td>
\t\t\t\t\t<td>{{ avi.idOffre }}</td>
\t\t\t\t\t<td>{{ avi.idUser }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('admin_avis_show', {'idAvis': avi.idAvis}) }}\">show</a>
\t\t\t\t\t\t{{ include('avisAdmin/_delete_form.html.twig') }}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"4\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
{% endblock %}
", "avisAdmin/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\avisAdmin\\index.html.twig");
    }
}
