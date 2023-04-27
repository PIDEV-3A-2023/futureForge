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

/* offre2Admin/_form.html.twig */
class __TwigTemplate_efa6058ebf01253c189d02845f5e8b0b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre2Admin/_form.html.twig"));

        // line 1
        echo "<div class=\"bg-light rounded h-100 p-4\">
\t";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), 'label', ["attr" => ["class" => "form-label"], "label" => "Nom : "]);
        echo "
\t<div class=\"form-floating mb-3\">
\t\t";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t</div>
\t</div>

\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12), 'label', ["attr" => ["class" => "form-label"], "label" => "Description : "]);
        echo "
\t<div class=\"form-floating mb-3\">
\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t</div>
\t</div>

\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "type", [], "any", false, false, false, 20), 'label', ["attr" => ["class" => "form-label"], "label" => "Type : "]);
        echo "
\t<div class=\"form-floating mb-3\">
\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "type", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "type", [], "any", false, false, false, 24), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t</div>
\t</div>

\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "reduction", [], "any", false, false, false, 28), 'label', ["attr" => ["class" => "form-label"], "label" => "Reduction : "]);
        echo "
\t<div class=\"form-floating mb-3\">
\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "reduction", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "reduction", [], "any", false, false, false, 32), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t</div>
\t</div>
\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "dated", [], "any", false, false, false, 35), 'label', ["attr" => ["class" => "form-label"], "label" => "Date Debut : "]);
        echo "
\t<div class=\"form-floating mb-3\">
\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "dated", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "dated", [], "any", false, false, false, 39), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t</div>
\t</div>
\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "datef", [], "any", false, false, false, 42), 'label', ["attr" => ["class" => "form-label"], "label" => "Date Fin : "]);
        echo "
\t<div class=\"form-floating mb-3\">
\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "datef", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t<div style=\"color: red;\">
\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "datef", [], "any", false, false, false, 46), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t</div>
\t</div>
\t<button class=\"btn\">";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 49, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
\t";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offre2Admin/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 50,  147 => 49,  141 => 46,  136 => 44,  131 => 42,  125 => 39,  120 => 37,  115 => 35,  109 => 32,  104 => 30,  99 => 28,  92 => 24,  87 => 22,  82 => 20,  75 => 16,  70 => 14,  65 => 12,  58 => 8,  53 => 6,  48 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-light rounded h-100 p-4\">
\t{{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}

\t{{form_label(form.nom,'Nom : ',{'attr':{'class':'form-label'}})}}
\t<div class=\"form-floating mb-3\">
\t\t{{form_widget(form.nom,{'attr':{'class':'form-control'}})}}
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t{{ form_errors(form.nom,{'attr':{'class':'form-control'}}) }}
\t\t</div>
\t</div>

\t{{form_label(form.description,'Description : ',{'attr':{'class':'form-label'}})}}
\t<div class=\"form-floating mb-3\">
\t\t{{form_widget(form.description,{'attr':{'class':'form-control'}})}}
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t{{ form_errors(form.description,{'attr':{'class':'form-control'}}) }}
\t\t</div>
\t</div>

\t{{form_label(form.type,'Type : ',{'attr':{'class':'form-label'}})}}
\t<div class=\"form-floating mb-3\">
\t\t{{form_widget(form.type,{'attr':{'class':'form-control'}})}}
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t{{ form_errors(form.type,{'attr':{'class':'form-control'}}) }}
\t\t</div>
\t</div>

\t{{form_label(form.reduction,'Reduction : ',{'attr':{'class':'form-label'}})}}
\t<div class=\"form-floating mb-3\">
\t\t{{form_widget(form.reduction,{'attr':{'class':'form-control'}})}}
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t{{ form_errors(form.reduction,{'attr':{'class':'form-control'}}) }}
\t\t</div>
\t</div>
\t{{form_label(form.dated,'Date Debut : ',{'attr':{'class':'form-label'}})}}
\t<div class=\"form-floating mb-3\">
\t\t{{form_widget(form.dated,{'attr':{'class':'form-control'}})}}
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t{{ form_errors(form.dated,{'attr':{'class':'form-control'}}) }}
\t\t</div>
\t</div>
\t{{form_label(form.datef,'Date Fin : ',{'attr':{'class':'form-label'}})}}
\t<div class=\"form-floating mb-3\">
\t\t{{form_widget(form.datef,{'attr':{'class':'form-control'}})}}
\t\t<div style=\"color: red;\">
\t\t\t{{ form_errors(form.datef,{'attr':{'class':'form-control'}}) }}
\t\t</div>
\t</div>
\t<button class=\"btn\">{{ button_label|default('Save') }}</button>
\t{{ form_end(form) }}
</div>
", "offre2Admin/_form.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\offre2Admin\\_form.html.twig");
    }
}
