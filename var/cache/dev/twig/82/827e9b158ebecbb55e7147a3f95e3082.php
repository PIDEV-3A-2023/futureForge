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

/* abonnement/_form.html.twig */
class __TwigTemplate_3af61530b60d263b463d7fe27308b4ab extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

<div class=\"form-group\">
\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "nom", [], "any", false, false, false, 4), 'label', ["attr" => ["class" => "form-label"], "label" => "Nom : "]);
        echo "
\t";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "prenom", [], "any", false, false, false, 13), 'label', ["attr" => ["class" => "form-label"], "label" => "prenom : "]);
        echo "
\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "prenom", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "prenom", [], "any", false, false, false, 16), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'label', ["attr" => ["class" => "form-label"], "label" => "email : "]);
        echo "
\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "image", [], "any", false, false, false, 31), 'label', ["attr" => ["class" => "form-label"], "label" => "image : "]);
        echo "
\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "image", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "image", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "identifiant", [], "any", false, false, false, 40), 'label', ["attr" => ["class" => "form-label"], "label" => "identifiant : "]);
        echo "
\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "identifiant", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "identifiant", [], "any", false, false, false, 43), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "cin", [], "any", false, false, false, 49), 'label', ["attr" => ["class" => "form-label"], "label" => "cin : "]);
        echo "
\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "cin", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "cin", [], "any", false, false, false, 52), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "dated", [], "any", false, false, false, 58), 'label', ["attr" => ["class" => "form-label"], "label" => "dated : "]);
        echo "
\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dated", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "dated", [], "any", false, false, false, 61), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>


<div class=\"form-group\">
\t";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "datef", [], "any", false, false, false, 67), 'label', ["attr" => ["class" => "form-label"], "label" => "datef : "]);
        echo "
\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "datef", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t<div style=\"color: red; list-style: none;\">
\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "datef", [], "any", false, false, false, 70), 'errors', ["attr" => ["class" => "form-control"]]);
        echo "
\t</div>
</div>

<button type=\"submit\" style=\"background-color: #01d28e!important; border-color: #01d28e!important;\" class=\"btn btn-primary py-3 px-5\">";
        // line 74
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 74, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 75,  188 => 74,  181 => 70,  176 => 68,  172 => 67,  163 => 61,  158 => 59,  154 => 58,  145 => 52,  140 => 50,  136 => 49,  127 => 43,  122 => 41,  118 => 40,  109 => 34,  104 => 32,  100 => 31,  91 => 25,  86 => 23,  82 => 22,  73 => 16,  68 => 14,  64 => 13,  55 => 7,  50 => 5,  46 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}

<div class=\"form-group\">
\t{{form_label(form.nom,'Nom : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.nom,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.nom,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.prenom,'prenom : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.prenom,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.prenom,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.email,'email : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.email,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.email,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.image,'image : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.image,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.image,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.identifiant,'identifiant : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.identifiant,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.identifiant,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.cin,'cin : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.cin,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.cin,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.dated,'dated : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.dated,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.dated,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>


<div class=\"form-group\">
\t{{form_label(form.datef,'datef : ',{'attr':{'class':'form-label'}})}}
\t{{form_widget(form.datef,{'attr':{'class':'form-control'}})}}
\t<div style=\"color: red; list-style: none;\">
\t\t{{ form_errors(form.datef,{'attr':{'class':'form-control'}}) }}
\t</div>
</div>

<button type=\"submit\" style=\"background-color: #01d28e!important; border-color: #01d28e!important;\" class=\"btn btn-primary py-3 px-5\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
", "abonnement/_form.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\abonnement\\_form.html.twig");
    }
}
