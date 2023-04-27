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

/* offre/search.html.twig */
class __TwigTemplate_8f7ee85ae657f80e51992ff6050dc62a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "offre/search.html.twig"));

        $this->parent = $this->loadTemplate("basepage.html.twig", "offre/search.html.twig", 1);
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
        echo "
\t<a style=\"border: 1px solid #01d28e; padding: 10px;\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_new");
        echo "\">Ajout Offre de Cov</a>
\t<div style=\"display: block; margin-top: 50px;\">
\t\t<form id=\"search-form\" action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_search");
        echo "\" method=\"get\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Search</button>
\t\t</form>

\t\t<hr>
\t\t<div style=\"display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: center;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  align-items: center;\" class=\"fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<div style=\"width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: flex-start;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;\">


\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 32, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 33
            echo "\t\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\">
\t\t\t\t\t\t\t<img class=\"img rounded d-flex align-items-end\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["offre"], "imageVehicule", [], "any", false, false, false, 41))), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t<h2 class=\"mb-0\" style=\"display: flex;\">
\t\t\t\t\t\t\t\t<a href=\"car-single.html\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "prenomChauff", [], "any", false, false, false, 45), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<div class=\"d-flex mb-3\" style=\"display: flex;\">
\t\t\t\t\t\t\t\t<div style=\"margin-left: 0; margin-right: auto;\">
\t\t\t\t\t\t\t\t\t<div style=\"margin-left: auto; margin-right: 0;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 50
            $context["avgRate"] = 0;
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["nb"] = 0;
            // line 52
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 52, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["avi"]) {
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["avi"], "idOffre", [], "any", false, false, false, 53) == $context["offre"])) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["nb"] = ((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 54, $this->source); })()) + 1);
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["avgRate"] = ((isset($context["avgRate"]) || array_key_exists("avgRate", $context) ? $context["avgRate"] : (function () { throw new RuntimeError('Variable "avgRate" does not exist.', 55, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["avi"], "rate", [], "any", false, false, false, 55));
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 58, $this->source); })()) == 0)) {
                // line 59
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["avgRate"] = (isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 59, $this->source); })());
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context["avgRate"] = ((isset($context["avgRate"]) || array_key_exists("avgRate", $context) ? $context["avgRate"] : (function () { throw new RuntimeError('Variable "avgRate" does not exist.', 61, $this->source); })()) / (isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 61, $this->source); })()));
                // line 62
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["avgRate"]) || array_key_exists("avgRate", $context) ? $context["avgRate"] : (function () { throw new RuntimeError('Variable "avgRate" does not exist.', 63, $this->source); })()) <= 0)) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\" style=\"font-size: 20px; color: #c2c0c0;\"></span>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 66
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["avgRate"]) || array_key_exists("avgRate", $context) ? $context["avgRate"] : (function () { throw new RuntimeError('Variable "avgRate" does not exist.', 66, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 67
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\" style=\"font-size: 20px; color: #01d28e;\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\" class=\"cat\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "numChauff", [], "any", false, false, false, 71), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "placesDispo", [], "any", false, false, false, 72), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "prixOffre", [], "any", false, false, false, 73), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\tTND</p>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">";
            // line 75
            ((twig_get_attribute($this->env, $this->source, $context["offre"], "dateOffre", [], "any", false, false, false, 75)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "dateOffre", [], "any", false, false, false, 75), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t";
            // line 77
            ((twig_get_attribute($this->env, $this->source, $context["offre"], "heure", [], "any", false, false, false, 77)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "heure", [], "any", false, false, false, 77), "H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "depart", [], "any", false, false, false, 78), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t->
\t\t\t\t\t\t\t\t\t\t";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "destination", [], "any", false, false, false, 80), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            // line 84
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_edit", ["idOffre" => twig_get_attribute($this->env, $this->source, $context["offre"], "idOffre", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\" class=\"btn btn-primary py-2 mr-1\">Edit</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_avis", ["idOffre" => twig_get_attribute($this->env, $this->source, $context["offre"], "idOffre", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\" class=\"btn btn-primary py-2 ml-1\">Avis</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_show", ["idOffre" => twig_get_attribute($this->env, $this->source, $context["offre"], "idOffre", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" class=\"btn btn-secondary py-2 ml-1\">Details</a>
\t\t\t\t\t\t\t\t<div style=\"margin-top: 6px;\">
\t\t\t\t\t\t\t\t\t";
            // line 90
            echo twig_include($this->env, $context, "offre/_delete_form.html.twig");
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
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
            // line 96
            echo "\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>no records found</p>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<script>
\t\t\$(function () {
\$('#search-form').submit(function (e) {
e.preventDefault();

\$.ajax({
url: \$(this).attr('action'),
data: \$(this).serialize(),
success: function (data) {
\$('#search-results').html(data);
}
});
});
});
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "offre/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 100,  315 => 96,  296 => 90,  291 => 88,  287 => 87,  283 => 86,  279 => 84,  274 => 80,  269 => 78,  265 => 77,  260 => 75,  255 => 73,  251 => 72,  247 => 71,  244 => 70,  241 => 69,  234 => 67,  229 => 66,  225 => 64,  222 => 63,  219 => 62,  216 => 61,  213 => 60,  210 => 59,  207 => 58,  201 => 57,  198 => 56,  195 => 55,  192 => 54,  189 => 53,  184 => 52,  181 => 51,  179 => 50,  171 => 45,  164 => 41,  154 => 33,  136 => 32,  117 => 16,  112 => 14,  107 => 12,  104 => 11,  97 => 10,  83 => 7,  69 => 5,  55 => 3,  38 => 1,);
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

\t<a style=\"border: 1px solid #01d28e; padding: 10px;\" href=\"{{ path('app_offre_new') }}\">Ajout Offre de Cov</a>
\t<div style=\"display: block; margin-top: 50px;\">
\t\t<form id=\"search-form\" action=\"{{ path('offre_search') }}\" method=\"get\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" value=\"{{ query }}\">
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Search</button>
\t\t</form>

\t\t<hr>
\t\t<div style=\"display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: center;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  align-items: center;\" class=\"fadeInUp\" data-wow-delay=\"0.1s\">
\t\t\t<div style=\"width: 100%;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  display: flex;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  justify-content: flex-start;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  flex-wrap: wrap;\">


\t\t\t\t{% for offre in offres %}
\t\t\t\t\t<div style=\"width: calc(25% - 20px);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-right: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  margin-bottom: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  padding: 20px;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  background-color: #fff;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  border-radius: 4px;\" class=\"project-item mb-5\">
\t\t\t\t\t\t<div class=\"car-wrap rounded ftco-animate\">
\t\t\t\t\t\t\t<img class=\"img rounded d-flex align-items-end\" src=\"{{ asset('uploads/' ~ offre.imageVehicule) }}\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t<h2 class=\"mb-0\" style=\"display: flex;\">
\t\t\t\t\t\t\t\t<a href=\"car-single.html\">{{ offre.prenomChauff }}</a>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<div class=\"d-flex mb-3\" style=\"display: flex;\">
\t\t\t\t\t\t\t\t<div style=\"margin-left: 0; margin-right: auto;\">
\t\t\t\t\t\t\t\t\t<div style=\"margin-left: auto; margin-right: 0;\">
\t\t\t\t\t\t\t\t\t\t{% set avgRate = 0 %}
\t\t\t\t\t\t\t\t\t\t{% set nb = 0 %}
\t\t\t\t\t\t\t\t\t\t{% for avi in avis %}
\t\t\t\t\t\t\t\t\t\t\t{% if avi.idOffre == offre %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set nb = nb + 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set avgRate = avgRate + avi.rate %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t{% if nb == 0 %}
\t\t\t\t\t\t\t\t\t\t\t{% set avgRate = nb %}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{% set avgRate = avgRate / nb %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if avgRate <= 0 %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\" style=\"font-size: 20px; color: #c2c0c0;\"></span>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t{% for i in 1..avgRate %}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star checked\" style=\"font-size: 20px; color: #01d28e;\"></span>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span style=\"margin-left: 0; margin-right: auto;\" class=\"cat\">{{ offre.numChauff }}</span>
\t\t\t\t\t\t\t\t\t<span class=\"cat\">{{ offre.placesDispo }}</span>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">{{ offre.prixOffre }}
\t\t\t\t\t\t\t\t\t\tTND</p>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">{{ offre.dateOffre ? offre.dateOffre|date('Y-m-d') : '' }}
\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t{{ offre.heure ? offre.heure|date('H:i:s') : '' }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"price ml-auto\">{{ offre.depart }}
\t\t\t\t\t\t\t\t\t\t->
\t\t\t\t\t\t\t\t\t\t{{ offre.destination }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{# <div style=\"margin-right: 0; margin-left: auto;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\"d-flex mb-0 d-block\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offre_edit', {'idOffre': offre.idOffre}) }}\" class=\"btn btn-primary py-2 mr-1\">Edit</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offre_avis', {'idOffre': offre.idOffre}) }}\" class=\"btn btn-primary py-2 ml-1\">Avis</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_offre_show', {'idOffre': offre.idOffre}) }}\" class=\"btn btn-secondary py-2 ml-1\">Details</a>
\t\t\t\t\t\t\t\t<div style=\"margin-top: 6px;\">
\t\t\t\t\t\t\t\t\t{{ include('offre/_delete_form.html.twig') }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<p>no records found</p>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>

\t<script>
\t\t\$(function () {
\$('#search-form').submit(function (e) {
e.preventDefault();

\$.ajax({
url: \$(this).attr('action'),
data: \$(this).serialize(),
success: function (data) {
\$('#search-results').html(data);
}
});
});
});
\t</script>
{% endblock %}
", "offre/search.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\offre\\search.html.twig");
    }
}
