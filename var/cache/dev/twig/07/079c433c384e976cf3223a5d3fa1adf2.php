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

/* offre2Admin/index.html.twig */
class __TwigTemplate_c1f32052ef51100e405a122beb4c4cce extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre2Admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "offre2Admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Offre2 index
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
        echo "\t<h1>Offre ABONNEMENT
\t</h1>

\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
\t<div style=\"margin-bottom: 10px;\" class=\"form-group\">
\t\t<div style=\"margin-bottom: 4px;\">
\t\t\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "offre2Type", [], "any", false, false, false, 13), 'label', ["attr" => ["class" => "form-label"], "label" => "Select offre type : "]);
        echo "
\t\t</div>
\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "offre2Type", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "offre2Type", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
\t<button class=\"btn btn-primary py-1 px-3\">";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 18, $this->source); })()), "Filter")) : ("Filter")), "html", null, true);
        echo "</button>
\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_end');
        echo "
\t
\t";
        // line 21
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["offre2s"]) || array_key_exists("offre2s", $context) ? $context["offre2s"] : (function () { throw new RuntimeError('Variable "offre2s" does not exist.', 21, $this->source); })()));
        echo "

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Reduction</th>
\t\t\t\t<th>Type</th>
\t\t\t\t<th>Dated</th>
\t\t\t\t<th>Datef</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre2s"]) || array_key_exists("offre2s", $context) ? $context["offre2s"] : (function () { throw new RuntimeError('Variable "offre2s" does not exist.', 36, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["offre2"]) {
            // line 37
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre2"], "nom", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre2"], "description", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre2"], "reduction", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre2"], "type", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 42
            ((twig_get_attribute($this->env, $this->source, $context["offre2"], "dated", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre2"], "dated", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>";
            // line 43
            ((twig_get_attribute($this->env, $this->source, $context["offre2"], "datef", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre2"], "datef", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre2_show", ["id" => twig_get_attribute($this->env, $this->source, $context["offre2"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">show</a>
\t\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre2_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["offre2"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">edit</a>

\t\t\t\t\t\t";
            // line 48
            echo twig_include($this->env, $context, "offre2Admin/_delete_form.html.twig");
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
            // line 52
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t</tbody>
\t</table>
\t";
        // line 58
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["offre2s"]) || array_key_exists("offre2s", $context) ? $context["offre2s"] : (function () { throw new RuntimeError('Variable "offre2s" does not exist.', 58, $this->source); })()));
        echo "

\t<a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre2_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offre2Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 60,  211 => 58,  207 => 56,  198 => 52,  181 => 48,  176 => 46,  172 => 45,  167 => 43,  163 => 42,  159 => 41,  155 => 40,  151 => 39,  147 => 38,  144 => 37,  126 => 36,  108 => 21,  103 => 19,  99 => 18,  94 => 16,  90 => 15,  85 => 13,  79 => 10,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Offre2 index
{% endblock %}

{% block body %}
\t<h1>Offre ABONNEMENT
\t</h1>

\t{{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
\t<div style=\"margin-bottom: 10px;\" class=\"form-group\">
\t\t<div style=\"margin-bottom: 4px;\">
\t\t\t{{form_label(form.offre2Type,'Select offre type : ',{'attr':{'class':'form-label'}})}}
\t\t</div>
\t\t{{form_widget(form.offre2Type,{'attr':{'class':'form-control'}})}}
\t\t{{ form_errors(form.offre2Type,{'attr':{'class':'form-control'}}) }}
\t</div>
\t<button class=\"btn btn-primary py-1 px-3\">{{ button_label|default('Filter') }}</button>
\t{{ form_end(form) }}
\t
\t{{ knp_pagination_render(offre2s) }}

\t<table class=\"table\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Description</th>
\t\t\t\t<th>Reduction</th>
\t\t\t\t<th>Type</th>
\t\t\t\t<th>Dated</th>
\t\t\t\t<th>Datef</th>
\t\t\t\t<th>actions</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for offre2 in offre2s %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ offre2.nom }}</td>
\t\t\t\t\t<td>{{ offre2.description }}</td>
\t\t\t\t\t<td>{{ offre2.reduction }}</td>
\t\t\t\t\t<td>{{ offre2.type }}</td>
\t\t\t\t\t<td>{{ offre2.dated ? offre2.dated|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>{{ offre2.datef ? offre2.datef|date('Y-m-d') : '' }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('admin_offre2_show', {'id': offre2.id}) }}\">show</a>
\t\t\t\t\t\t<a href=\"{{ path('admin_offre2_edit', {'id': offre2.id}) }}\">edit</a>

\t\t\t\t\t\t{{ include('offre2Admin/_delete_form.html.twig') }}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\">no records found</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t</tbody>
\t</table>
\t{{ knp_pagination_render(offre2s) }}

\t<a href=\"{{ path('admin_offre2_new') }}\">Create new</a>
{% endblock %}
", "offre2Admin/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\offre2Admin\\index.html.twig");
    }
}
