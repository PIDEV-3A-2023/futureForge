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

/* avisAdmin/show.html.twig */
class __TwigTemplate_89987c9bf020d7fdabad6577657764d7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avisAdmin/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "avisAdmin/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Avis
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
        echo "\t<h1>Avis</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Rate</th>
\t\t\t\t<td>
\t\t\t\t\t";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new RuntimeError('Variable "avi" does not exist.', 14, $this->source); })()), "rate", [], "any", false, false, false, 14) <= 0)) {
            // line 15
            echo "\t\t\t\t\t\t<span class=\"fa fa-star\" style=\"color: #c2c0c0;\"></span>
\t\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new RuntimeError('Variable "avi" does not exist.', 17, $this->source); })()), "rate", [], "any", false, false, false, 17)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 18
                echo "\t\t\t\t\t\t\t<span class=\"fa fa-star checked\" style=\"color: #01d28e;\"></span>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>DescriptionAvis</th>
\t\t\t\t<td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new RuntimeError('Variable "avi" does not exist.', 25, $this->source); })()), "descriptionAvis", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>DescriptionAvis</th>
\t\t\t\t<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new RuntimeError('Variable "avi" does not exist.', 29, $this->source); })()), "idOffre", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>DescriptionAvis</th>
\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["avi"]) || array_key_exists("avi", $context) ? $context["avi"] : (function () { throw new RuntimeError('Variable "avi" does not exist.', 33, $this->source); })()), "idUser", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_avis_index");
        echo "\">back to list</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "avisAdmin/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 38,  124 => 33,  117 => 29,  110 => 25,  104 => 21,  101 => 20,  94 => 18,  89 => 17,  85 => 15,  83 => 14,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Avis
{% endblock %}

{% block body %}
\t<h1>Avis</h1>

\t<table class=\"table\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Rate</th>
\t\t\t\t<td>
\t\t\t\t\t{% if avi.rate <= 0 %}
\t\t\t\t\t\t<span class=\"fa fa-star\" style=\"color: #c2c0c0;\"></span>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% for i in 1..avi.rate %}
\t\t\t\t\t\t\t<span class=\"fa fa-star checked\" style=\"color: #01d28e;\"></span>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>DescriptionAvis</th>
\t\t\t\t<td>{{ avi.descriptionAvis }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>DescriptionAvis</th>
\t\t\t\t<td>{{ avi.idOffre }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>DescriptionAvis</th>
\t\t\t\t<td>{{ avi.idUser }}</td>
\t\t\t</tr>
\t\t</tbody>
\t</table>

\t<a href=\"{{ path('admin_avis_index') }}\">back to list</a>
{% endblock %}
", "avisAdmin/show.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\avisAdmin\\show.html.twig");
    }
}
