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

/* offre/_form.html.twig */
class __TwigTemplate_da760b165fab647e56cc7ce6ce9c4794 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

<div class=\"form-group\">
\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "imageVehicule", [], "any", false, false, false, 4), 'label', ["attr" => ["class" => "form-label"], "label" => "imageVehicule : "]);
        echo "
\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "imageVehicule", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "imageVehicule", [], "any", false, false, false, 7), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "prenomChauff", [], "any", false, false, false, 13), 'label', ["attr" => ["class" => "form-label"], "label" => "prenomChauff : "]);
        echo "
\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "prenomChauff", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "prenomChauff", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "numChauff", [], "any", false, false, false, 22), 'label', ["attr" => ["class" => "form-label"], "label" => "numChauff : "]);
        echo "
\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "numChauff", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "numChauff", [], "any", false, false, false, 25), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "dateOffre", [], "any", false, false, false, 31), 'label', ["attr" => ["class" => "form-label"], "label" => "dateOffre : "]);
        echo "
\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "dateOffre", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "dateOffre", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "heure", [], "any", false, false, false, 40), 'label', ["attr" => ["class" => "form-label"], "label" => "heure : "]);
        echo "
\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "heure", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "heure", [], "any", false, false, false, 43), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "prixOffre", [], "any", false, false, false, 49), 'label', ["attr" => ["class" => "form-label"], "label" => "prixOffre : "]);
        echo "
\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "prixOffre", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "prixOffre", [], "any", false, false, false, 52), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "depart", [], "any", false, false, false, 58), 'label', ["attr" => ["class" => "form-label"], "label" => "depart : "]);
        echo "
\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "depart", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "depart", [], "any", false, false, false, 61), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "destination", [], "any", false, false, false, 67), 'label', ["attr" => ["class" => "form-label"], "label" => "destination : "]);
        echo "
\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "destination", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "destination", [], "any", false, false, false, 70), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "placesDispo", [], "any", false, false, false, 76), 'label', ["attr" => ["class" => "form-label"], "label" => "placesDispo : "]);
        echo "
\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "placesDispo", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "placesDispo", [], "any", false, false, false, 79), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>

<button type=\"submit\" style=\"background-color: #01d28e!important; border-color: #01d28e!important;\" class=\"btn btn-primary py-3 px-5\">";
        // line 83
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 83, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offre/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 84,  206 => 83,  199 => 79,  194 => 77,  190 => 76,  181 => 70,  176 => 68,  172 => 67,  163 => 61,  158 => 59,  154 => 58,  145 => 52,  140 => 50,  136 => 49,  127 => 43,  122 => 41,  118 => 40,  109 => 34,  104 => 32,  100 => 31,  91 => 25,  86 => 23,  82 => 22,  73 => 16,  68 => 14,  64 => 13,  55 => 7,  50 => 5,  46 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}

<div class=\"form-group\">
\t{{form_label(form.imageVehicule,'imageVehicule : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.imageVehicule,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.imageVehicule,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.prenomChauff,'prenomChauff : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.prenomChauff,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.prenomChauff,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.numChauff,'numChauff : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.numChauff,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.numChauff,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.dateOffre,'dateOffre : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.dateOffre,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.dateOffre,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.heure,'heure : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.heure,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.heure,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.prixOffre,'prixOffre : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.prixOffre,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.prixOffre,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.depart,'depart : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.depart,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.depart,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.destination,'destination : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.destination,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.destination,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.placesDispo,'placesDispo : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.placesDispo,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.placesDispo,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>

<button type=\"submit\" style=\"background-color: #01d28e!important; border-color: #01d28e!important;\" class=\"btn btn-primary py-3 px-5\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "offre/_form.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\offre\\_form.html.twig");
    }
}
