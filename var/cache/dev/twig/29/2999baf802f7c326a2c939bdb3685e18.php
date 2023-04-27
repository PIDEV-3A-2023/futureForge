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

/* admin/index.html.twig */
class __TwigTemplate_5869e30312d478e543fcb282aa15c343 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-line fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Today Sale</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-bar fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Total Sale</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-area fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Today Revenue</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-pie fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Total Revenue</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard Admin{% endblock %}

{% block body %}
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-line fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Today Sale</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-bar fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Total Sale</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-area fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Today Revenue</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-6 col-xl-3\">
                        <div class=\"bg-light rounded d-flex align-items-center justify-content-between p-4\">
                            <i class=\"fa fa-chart-pie fa-3x text-primary\"></i>
                            <div class=\"ms-3\">
                                <p class=\"mb-2\">Total Revenue</p>
                                <h6 class=\"mb-0\">\$1234</h6>
                            </div>
                        </div>
                    </div>
{% endblock %}
", "admin/index.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\admin\\index.html.twig");
    }
}
