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

/* abonnementAdmin/printall.html.twig */
class __TwigTemplate_7d6fa9737e01e1066886436a31ceccb0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnementAdmin/printall.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Abonnement Print</title>
\t\t<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\"/>
\t</head>
\t<body>
\t\t<header class=\"clearfix\">
\t\t\t<div id=\"logo\">
\t\t\t\tThniTy
\t\t\t</div>
\t\t\t<h1 align=\"center\">ThniTy - tous les Abonnements</h1>
\t\t\t<hr></hr>
\t\t<div class=\"table-wrapper\">
\t\t\t<h1>Abonnements</h1>

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t<th>Etat</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnements"]) || array_key_exists("abonnements", $context) ? $context["abonnements"] : (function () { throw new RuntimeError('Variable "abonnements" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 31
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "prenom", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<img style=\"height: 100px; width: 100px; object-fit: cover;\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("https://127.0.0.1:8004/uploads/" . twig_get_attribute($this->env, $this->source, $context["abonnement"], "image", [], "any", false, false, false, 35))), "html", null, true);
            echo "\"/></td>
\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "email", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "identifiant", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "cin", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "type", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            ((twig_get_attribute($this->env, $this->source, $context["abonnement"], "dated", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "dated", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 41
            ((twig_get_attribute($this->env, $this->source, $context["abonnement"], "datef", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "datef", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["abonnement"], "prix", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"6\">no abonnements found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonnement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "abonnementAdmin/printall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 49,  130 => 45,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  106 => 38,  102 => 37,  98 => 36,  94 => 35,  89 => 33,  85 => 32,  82 => 31,  77 => 30,  51 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Abonnement Print</title>
\t\t<link href=\"{{ asset('admin/css/sb-admin-2.css') }}\" rel=\"stylesheet\"/>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front/css/style.css') }}\"/>
\t</head>
\t<body>
\t\t<header class=\"clearfix\">
\t\t\t<div id=\"logo\">
\t\t\t\tThniTy
\t\t\t</div>
\t\t\t<h1 align=\"center\">ThniTy - tous les Abonnements</h1>
\t\t\t<hr></hr>
\t\t<div class=\"table-wrapper\">
\t\t\t<h1>Abonnements</h1>

\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t<th>Prenom</th>
\t\t\t\t\t\t<th>Email</th>
\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t<th>Etat</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for abonnement in abonnements %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{ abonnement.nom }}</td>
\t\t\t\t\t\t\t<td>{{ abonnement.prenom }}</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<img style=\"height: 100px; width: 100px; object-fit: cover;\" src=\"{{ asset('https://127.0.0.1:8004/uploads/' ~ abonnement.image) }}\"/></td>
\t\t\t\t\t\t\t<td>{{ abonnement.email }}</td>
\t\t\t\t\t\t\t<td>{{ abonnement.identifiant }}</td>
\t\t\t\t\t\t\t<td>{{ abonnement.cin }}</td>
\t\t\t\t\t\t\t<td>{{ abonnement.type }}</td>
\t\t\t\t\t\t\t<td>{{ abonnement.dated ? abonnement.dated|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t<td>{{ abonnement.datef ? abonnement.datef|date('Y-m-d') : '' }}</td>
\t\t\t\t\t\t\t<td>{{ abonnement.prix }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"6\">no abonnements found</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</body>
</html>
", "abonnementAdmin/printall.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\abonnementAdmin\\printall.html.twig");
    }
}
