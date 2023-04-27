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

/* reservation_covoiturage/_delete_form.html.twig */
class __TwigTemplate_d2fbf3d270bf077e75eff4916b350216 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation_covoiturage/_delete_form.html.twig"));

        // line 1
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_covoiturage_delete", ["idReservation" => twig_get_attribute($this->env, $this->source, (isset($context["reservation_covoiturage"]) || array_key_exists("reservation_covoiturage", $context) ? $context["reservation_covoiturage"] : (function () { throw new RuntimeError('Variable "reservation_covoiturage" does not exist.', 1, $this->source); })()), "idReservation", [], "any", false, false, false, 1)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["reservation_covoiturage"]) || array_key_exists("reservation_covoiturage", $context) ? $context["reservation_covoiturage"] : (function () { throw new RuntimeError('Variable "reservation_covoiturage" does not exist.', 2, $this->source); })()), "idReservation", [], "any", false, false, false, 2))), "html", null, true);
        echo "\">
    <button class=\"btn\">Delete</button>
</form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation_covoiturage/_delete_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form method=\"post\" action=\"{{ path('app_reservation_covoiturage_delete', {'idReservation': reservation_covoiturage.idReservation}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reservation_covoiturage.idReservation) }}\">
    <button class=\"btn\">Delete</button>
</form>
", "reservation_covoiturage/_delete_form.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\reservation_covoiturage\\_delete_form.html.twig");
    }
}
