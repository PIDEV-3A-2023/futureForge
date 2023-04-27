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

/* basepage.html.twig */
class __TwigTemplate_4784ea6c1fcfe28cb05e8c3a4f8b777d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'titre' => [$this, 'block_titre'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basepage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<title>
\t\t\t";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "\t\t</title>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap\" rel=\"stylesheet\">

\t\t<link rel=\"stylesheet\" href=\"../../../css/open-iconic-bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../../../css/animate.css\">

\t\t<link rel=\"stylesheet\" href=\"../../../css/owl.carousel.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../../../css/owl.theme.default.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../../../css/magnific-popup.css\">

\t\t<link rel=\"stylesheet\" href=\"../../../css/aos.css\">

\t\t<link rel=\"stylesheet\" href=\"../../../css/ionicons.min.css\">

\t\t<link rel=\"stylesheet\" href=\"../../../css/bootstrap-datepicker.css\">
\t\t<link rel=\"stylesheet\" href=\"../../../css/jquery.timepicker.css\">


\t\t<link rel=\"stylesheet\" href=\"../../../css/flaticon.css\">
\t\t<link rel=\"stylesheet\" href=\"../../../css/icomoon.css\">
\t\t<link rel=\"stylesheet\" href=\"../../../css/style.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t</head>
\t<body>

\t\t<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Thn<span>ity</span>
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"oi oi-menu\"></span>
\t\t\t\t\tMenu
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\"nav-link\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_abonnement_index");
        echo "\" class=\"nav-link\">Abonnement</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre2_index");
        echo "\" class=\"nav-link\">Offre Ab</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offre_index");
        echo "\" class=\"nav-link\">Offre de Cov</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_bus_index");
        echo "\" class=\"nav-link\">Reservation Bus</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_covoiturage_index");
        echo "\" class=\"nav-link\">Reservation Covoiturage</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<!-- END nav -->

\t\t<section style=\"height: 200px;\" class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('images/bg_3.jpg');\" data-stellar-background-ratio=\"0.5\">
\t\t\t<div class=\"overlay\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-start\">
\t\t\t\t\t<div class=\"col-md-9 ftco-animate pb-5\">
\t\t\t\t\t\t<p class=\"breadcrumbs\">
\t\t\t\t\t\t\t<span class=\"mr-2\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Home
\t\t\t\t\t\t\t\t\t<i class=\"ion-ios-arrow-forward\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t";
        // line 81
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 82
        echo "\t\t\t\t\t\t\t\t<i class=\"ion-ios-arrow-forward\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h1 class=\"mb-3 bread\"> ";
        // line 85
        $this->displayBlock('titre', $context, $blocks);
        // line 86
        echo "\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>


\t\t\t<section class=\"ftco-section bg-light\">
\t\t\t\t<div class=\"container\"> ";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "\t\t\t\t\t</div>
\t\t\t\t</section>


\t\t\t\t<footer class=\"ftco-footer ftco-bg-dark ftco-section\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t<div class=\"col-md\">
\t\t\t\t\t\t\t\t<div class=\"ftco-footer-widget mb-4\">
\t\t\t\t\t\t\t\t\t<h2 class=\"ftco-heading-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"logo\">THN<span>ITY</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>Réserver un trajet devient encore plus simple ! Facile d'utilisation et dotée de technologies avancées, notre appli vous permet de réserver un trajet à proximité en un rien de temps..</p>
\t\t\t\t\t\t\t\t\t<ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
\t\t\t\t\t\t\t\t\t\t<li class=\"ftco-animate\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-twitter\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"ftco-animate\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-facebook\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"ftco-animate\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-instagram\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md\">
\t\t\t\t\t\t\t\t<div class=\"ftco-footer-widget mb-4\">
\t\t\t\t\t\t\t\t\t<h2 class=\"ftco-heading-2\">Have a Questions?</h2>
\t\t\t\t\t\t\t\t\t<div class=\"block-23 mb-3\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-map-marker\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Zone Industrielle Chotrana II, B.P. 160 Pôle Technologique El Ghazela 2083 Ariana Tunis، 2083</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-phone\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t+216 21789456</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-envelope\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">thnity@gmail.com</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 text-center\">

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\t\t\tCopyright &copy;<script>
\t\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\tAll rights reserved | This template is made with
\t\t\t\t\t\t\t\t\t<i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\tby
\t\t\t\t\t\t\t\t\t<a href=\"https://colorlib.com\" target=\"_blank\">FuturForge</a>
\t\t\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>


\t\t\t\t<!-- loader -->
\t\t\t\t<div id=\"ftco-loader\" class=\"show fullscreen\">
\t\t\t\t\t<svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg>
\t\t\t\t</div>


\t\t\t\t<script src=\"../../../js/jquery.min.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery-migrate-3.0.1.min.js\"></script>
\t\t\t\t<script src=\"../../../js/popper.min.js\"></script>
\t\t\t\t<script src=\"../../../js/bootstrap.min.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery.easing.1.3.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery.waypoints.min.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery.stellar.min.js\"></script>
\t\t\t\t<script src=\"../../../js/owl.carousel.min.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery.magnific-popup.min.js\"></script>
\t\t\t\t<script src=\"../../../js/aos.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery.animateNumber.min.js\"></script>
\t\t\t\t<script src=\"../../../js/bootstrap-datepicker.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery.timepicker.min.js\"></script>
\t\t\t\t<script src=\"../../../js/scrollax.min.js\"></script>
\t\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
\t\t\t\t<script src=\"../../../js/google-map.js\"></script>
\t\t\t\t<script src=\"../../../js/main.js\"></script>

\t\t\t</body>
\t\t</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 81
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 85
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 94
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "basepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 94,  312 => 85,  300 => 81,  288 => 5,  174 => 95,  172 => 94,  162 => 86,  160 => 85,  155 => 82,  153 => 81,  145 => 76,  127 => 61,  121 => 58,  115 => 55,  109 => 52,  103 => 49,  97 => 46,  84 => 36,  52 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<title>
\t\t\t{% block title %}{% endblock %}
\t\t</title>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap\" rel=\"stylesheet\">

\t\t<link rel=\"stylesheet\" href=\"../../../css/open-iconic-bootstrap.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../../../css/animate.css\">

\t\t<link rel=\"stylesheet\" href=\"../../../css/owl.carousel.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../../../css/owl.theme.default.min.css\">
\t\t<link rel=\"stylesheet\" href=\"../../../css/magnific-popup.css\">

\t\t<link rel=\"stylesheet\" href=\"../../../css/aos.css\">

\t\t<link rel=\"stylesheet\" href=\"../../../css/ionicons.min.css\">

\t\t<link rel=\"stylesheet\" href=\"../../../css/bootstrap-datepicker.css\">
\t\t<link rel=\"stylesheet\" href=\"../../../css/jquery.timepicker.css\">


\t\t<link rel=\"stylesheet\" href=\"../../../css/flaticon.css\">
\t\t<link rel=\"stylesheet\" href=\"../../../css/icomoon.css\">
\t\t<link rel=\"stylesheet\" href=\"../../../css/style.css\">
\t\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
\t</head>
\t<body>

\t\t<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">Thn<span>ity</span>
\t\t\t\t</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"oi oi-menu\"></span>
\t\t\t\t\tMenu
\t\t\t\t</button>

\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\" class=\"nav-link\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_abonnement_index') }}\" class=\"nav-link\">Abonnement</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_offre2_index') }}\" class=\"nav-link\">Offre Ab</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_offre_index') }}\" class=\"nav-link\">Offre de Cov</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_reservation_bus_index') }}\" class=\"nav-link\">Reservation Bus</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_reservation_covoiturage_index') }}\" class=\"nav-link\">Reservation Covoiturage</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<!-- END nav -->

\t\t<section style=\"height: 200px;\" class=\"hero-wrap hero-wrap-2 js-fullheight\" style=\"background-image: url('images/bg_3.jpg');\" data-stellar-background-ratio=\"0.5\">
\t\t\t<div class=\"overlay\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row no-gutters slider-text js-fullheight align-items-end justify-content-start\">
\t\t\t\t\t<div class=\"col-md-9 ftco-animate pb-5\">
\t\t\t\t\t\t<p class=\"breadcrumbs\">
\t\t\t\t\t\t\t<span class=\"mr-2\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\">Home
\t\t\t\t\t\t\t\t\t<i class=\"ion-ios-arrow-forward\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t{% block breadcrumbs %}{% endblock %}
\t\t\t\t\t\t\t\t<i class=\"ion-ios-arrow-forward\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<h1 class=\"mb-3 bread\"> {% block titre %}{% endblock %}
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>


\t\t\t<section class=\"ftco-section bg-light\">
\t\t\t\t<div class=\"container\"> {% block body %}{% endblock %}
\t\t\t\t\t</div>
\t\t\t\t</section>


\t\t\t\t<footer class=\"ftco-footer ftco-bg-dark ftco-section\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row mb-5\">
\t\t\t\t\t\t\t<div class=\"col-md\">
\t\t\t\t\t\t\t\t<div class=\"ftco-footer-widget mb-4\">
\t\t\t\t\t\t\t\t\t<h2 class=\"ftco-heading-2\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"logo\">THN<span>ITY</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>Réserver un trajet devient encore plus simple ! Facile d'utilisation et dotée de technologies avancées, notre appli vous permet de réserver un trajet à proximité en un rien de temps..</p>
\t\t\t\t\t\t\t\t\t<ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
\t\t\t\t\t\t\t\t\t\t<li class=\"ftco-animate\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-twitter\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"ftco-animate\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-facebook\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"ftco-animate\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon-instagram\"></span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md\">
\t\t\t\t\t\t\t\t<div class=\"ftco-footer-widget mb-4\">
\t\t\t\t\t\t\t\t\t<h2 class=\"ftco-heading-2\">Have a Questions?</h2>
\t\t\t\t\t\t\t\t\t<div class=\"block-23 mb-3\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-map-marker\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">Zone Industrielle Chotrana II, B.P. 160 Pôle Technologique El Ghazela 2083 Ariana Tunis، 2083</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-phone\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t+216 21789456</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"icon icon-envelope\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text\">thnity@gmail.com</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12 text-center\">

\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\t\t\tCopyright &copy;<script>
\t\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear());
\t\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\t\tAll rights reserved | This template is made with
\t\t\t\t\t\t\t\t\t<i class=\"icon-heart color-danger\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\tby
\t\t\t\t\t\t\t\t\t<a href=\"https://colorlib.com\" target=\"_blank\">FuturForge</a>
\t\t\t\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>


\t\t\t\t<!-- loader -->
\t\t\t\t<div id=\"ftco-loader\" class=\"show fullscreen\">
\t\t\t\t\t<svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg>
\t\t\t\t</div>


\t\t\t\t<script src=\"../../../js/jquery.min.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery-migrate-3.0.1.min.js\"></script>
\t\t\t\t<script src=\"../../../js/popper.min.js\"></script>
\t\t\t\t<script src=\"../../../js/bootstrap.min.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery.easing.1.3.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery.waypoints.min.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery.stellar.min.js\"></script>
\t\t\t\t<script src=\"../../../js/owl.carousel.min.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery.magnific-popup.min.js\"></script>
\t\t\t\t<script src=\"../../../js/aos.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery.animateNumber.min.js\"></script>
\t\t\t\t<script src=\"../../../js/bootstrap-datepicker.js\"></script>
\t\t\t\t<script src=\"../../../js/jquery.timepicker.min.js\"></script>
\t\t\t\t<script src=\"../../../js/scrollax.min.js\"></script>
\t\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false\"></script>
\t\t\t\t<script src=\"../../../js/google-map.js\"></script>
\t\t\t\t<script src=\"../../../js/main.js\"></script>

\t\t\t</body>
\t\t</html>
", "basepage.html.twig", "C:\\xampp\\htdocs\\thnity_web\\templates\\basepage.html.twig");
    }
}
