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

/* abonnement/new.html.twig */
class __TwigTemplate_96ed3b217245d79adb8636267805c394 extends Template
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
        return "basepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/new.html.twig"));

        $this->parent = $this->loadTemplate("basepage.html.twig", "abonnement/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Abonner
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
        echo "\t<h1>Abonner à un offre</h1>

\t<div style=\"display: block;\">
\t\t<div style=\"display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: center;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  align-items: center;\" class=\"fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<div style=\"width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: flex-start;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;\">
\t\t\t\t<div style=\"width: calc(50% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t";
        // line 25
        echo twig_include($this->env, $context, "abonnement/_form.html.twig");
        echo "
\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_index");
        echo "\">back to list</a>
\t\t\t\t</div>

\t\t\t\t<div style=\"width: calc(50% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;\" class=\"project-item mb-5\">
\t\t\t\t\t<p>Type d'offre: ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre2"]) || array_key_exists("offre2", $context) ? $context["offre2"] : (function () { throw new RuntimeError('Variable "offre2" does not exist.', 33, $this->source); })()), "type", [], "any", false, false, false, 33), "html", null, true);
        echo "</p>
\t\t\t\t\t<p>Prix: 120 TND</p>
\t\t\t\t\t<p>Remise: ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre2"]) || array_key_exists("offre2", $context) ? $context["offre2"] : (function () { throw new RuntimeError('Variable "offre2" does not exist.', 35, $this->source); })()), "reduction", [], "any", false, false, false, 35), "html", null, true);
        echo " %</p>
\t\t\t\t\t<p>Prix après remise: ";
        // line 36
        echo twig_escape_filter($this->env, (120 - ((twig_get_attribute($this->env, $this->source, (isset($context["offre2"]) || array_key_exists("offre2", $context) ? $context["offre2"] : (function () { throw new RuntimeError('Variable "offre2" does not exist.', 36, $this->source); })()), "reduction", [], "any", false, false, false, 36) * 120) / 100)), "html", null, true);
        echo " TND</p>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 36,  113 => 35,  108 => 33,  98 => 26,  94 => 25,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basepage.html.twig' %}

{% block title %}Abonner
{% endblock %}

{% block body %}
\t<h1>Abonner à un offre</h1>

\t<div style=\"display: block;\">
\t\t<div style=\"display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: center;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  align-items: center;\" class=\"fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<div style=\"width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: flex-start;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;\">
\t\t\t\t<div style=\"width: calc(50% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t{{ include('abonnement/_form.html.twig') }}
\t\t\t\t\t<a href=\"{{ path('app_abonnement_index') }}\">back to list</a>
\t\t\t\t</div>

\t\t\t\t<div style=\"width: calc(50% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;\" class=\"project-item mb-5\">
\t\t\t\t\t<p>Type d'offre: {{ offre2.type }}</p>
\t\t\t\t\t<p>Prix: 120 TND</p>
\t\t\t\t\t<p>Remise: {{ offre2.reduction }} %</p>
\t\t\t\t\t<p>Prix après remise: {{ 120 - offre2.reduction * 120 / 100 }} TND</p>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "abonnement/new.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\abonnement\\new.html.twig");
    }
}
