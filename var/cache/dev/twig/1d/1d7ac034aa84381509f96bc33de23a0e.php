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

/* reservation_covoiturage/_form.html.twig */
class __TwigTemplate_79f7409218d6665faede281ab020c416 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_covoiturage/_form.html.twig"));

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "prenom", [], "any", false, false, false, 12), 'label', ["attr" => ["class" => "form-label"], "label" => "Prenom : "]);
        echo "
\t<div class=\"form-floating mb-3\">
\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "prenom", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t</div>
\t</div>

\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "pntRencontre", [], "any", false, false, false, 20), 'label', ["attr" => ["class" => "form-label"], "label" => "Point Rencontre : "]);
        echo "
\t<div class=\"form-floating mb-3\">
\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "pntRencontre", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "pntRencontre", [], "any", false, false, false, 24), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t</div>
\t</div>

\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28), 'label', ["attr" => ["class" => "form-label"], "label" => "date : "]);
        echo "
\t<div class=\"form-floating mb-3\">
\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "date", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "date", [], "any", false, false, false, 32), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t</div>
\t</div>
\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "distination", [], "any", false, false, false, 35), 'label', ["attr" => ["class" => "form-label"], "label" => "Destination : "]);
        echo "
\t<div class=\"form-floating mb-3\">
\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "distination", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "distination", [], "any", false, false, false, 39), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t</div>
\t</div>
\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "nbrPlace", [], "any", false, false, false, 42), 'label', ["attr" => ["class" => "form-label"], "label" => "Nbr place : "]);
        echo "
\t<div class=\"form-floating mb-3\">
\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nbrPlace", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t<div style=\"color: red;\">
\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nbrPlace", [], "any", false, false, false, 46), 'errors', ["attr" => ["class" => "form-control"]]);
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
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation_covoiturage/_form.html.twig";
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

\t{{form_label(form.prenom,'Prenom : ',{'attr':{'class':'form-label'}})}}
\t<div class=\"form-floating mb-3\">
\t\t{{form_widget(form.prenom,{'attr':{'class':'form-control'}})}}
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t{{ form_errors(form.prenom,{'attr':{'class':'form-control'}}) }}
\t\t</div>
\t</div>

\t{{form_label(form.pntRencontre,'Point Rencontre : ',{'attr':{'class':'form-label'}})}}
\t<div class=\"form-floating mb-3\">
\t\t{{form_widget(form.pntRencontre,{'attr':{'class':'form-control'}})}}
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t{{ form_errors(form.pntRencontre,{'attr':{'class':'form-control'}}) }}
\t\t</div>
\t</div>

\t{{form_label(form.date,'date : ',{'attr':{'class':'form-label'}})}}
\t<div class=\"form-floating mb-3\">
\t\t{{form_widget(form.date,{'attr':{'class':'form-control'}})}}
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t{{ form_errors(form.date,{'attr':{'class':'form-control'}}) }}
\t\t</div>
\t</div>
\t{{form_label(form.distination,'Destination : ',{'attr':{'class':'form-label'}})}}
\t<div class=\"form-floating mb-3\">
\t\t{{form_widget(form.distination,{'attr':{'class':'form-control'}})}}
\t\t<div style=\"color: red; list-style: none;\">
\t\t\t{{ form_errors(form.distination,{'attr':{'class':'form-control'}}) }}
\t\t</div>
\t</div>
\t{{form_label(form.nbrPlace,'Nbr place : ',{'attr':{'class':'form-label'}})}}
\t<div class=\"form-floating mb-3\">
\t\t{{form_widget(form.nbrPlace,{'attr':{'class':'form-control'}})}}
\t\t<div style=\"color: red;\">
\t\t\t{{ form_errors(form.nbrPlace,{'attr':{'class':'form-control'}}) }}
\t\t</div>
\t</div>
\t<button class=\"btn\">{{ button_label|default('Save') }}</button>
\t{{ form_end(form) }}
</div>", "reservation_covoiturage/_form.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\reservation_covoiturage\\_form.html.twig");
    }
}
