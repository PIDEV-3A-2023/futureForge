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

/* base.html.twig */
class __TwigTemplate_d1c42314a730cd82383bf65518b2ddc4 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>
\t\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t\t<meta content=\"\" name=\"keywords\">
\t\t<meta
\t\tcontent=\"\" name=\"description\">

\t\t<!-- Favicon -->
\t\t<link
\t\thref=\"../../../../admin/img/favicon.ico\" rel=\"icon\">

\t\t<!-- Google Web Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">

\t\t<!-- Icon Font Stylesheet -->
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

\t\t<!-- Libraries Stylesheet -->
\t\t<link href=\"../../../../admin/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"../../../../admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css\" rel=\"stylesheet\"/>

\t\t<!-- Customized Bootstrap Stylesheet -->
\t\t<link
\t\thref=\"../../../../admin/css/bootstrap.min.css\" rel=\"stylesheet\">

\t\t<!-- Template Stylesheet -->
\t\t<link href=\"../../../../admin/css/style.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.8.0/dist/leaflet.css\" integrity=\"sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==\" crossorigin=\"\"/>
\t</head>

\t<body>
\t\t<div
\t\t\tclass=\"container-xxl position-relative bg-white d-flex p-0\">
\t\t\t<!-- Spinner Start -->
\t\t\t<div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
\t\t\t\t<div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
\t\t\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Spinner End -->


\t\t\t<!-- Sidebar Start -->
\t\t\t<div class=\"sidebar pe-4 pb-3\">
\t\t\t\t<nav class=\"navbar bg-light navbar-light\">
\t\t\t\t\t<a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\" class=\"navbar-brand mx-4 mb-3\">
\t\t\t\t\t\t<h3 class=\"text-primary\">
\t\t\t\t\t\t\t<i class=\"fa fa-hashtag me-2\"></i>DASHMIN</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"d-flex align-items-center ms-4 mb-4\">
\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"../../../../admin/img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t<div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Jhon Doe</h6>
\t\t\t\t\t\t\t<span>Admin</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"navbar-nav w-100\">
\t\t\t\t\t\t<a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>Dashboard</a>
\t\t\t\t\t\t<a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre2_index");
        echo "\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>OffreAb</a>
\t\t\t\t\t\t<a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_abonnement_index");
        echo "\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>Abonnements</a>
\t\t\t\t\t\t<a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_offre_index");
        echo "\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>Offre</a>
\t\t\t\t\t\t<a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_avis_index");
        echo "\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>Avis</a>
\t\t\t\t\t\t<a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_bus_index");
        echo "\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>ReservationBus</a>
\t\t\t\t\t\t<a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservation_covoiturage_index");
        echo "\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>ReservationCov</a>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<!-- Sidebar End -->


\t\t\t<!-- Content Start -->
\t\t\t<div
\t\t\t\tclass=\"content\">
\t\t\t\t<!-- Navbar Start -->
\t\t\t\t<nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
\t\t\t\t\t<a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\" class=\"navbar-brand d-flex d-lg-none me-4\">
\t\t\t\t\t\t<h2 class=\"text-primary mb-0\">
\t\t\t\t\t\t\t<i class=\"fa fa-hashtag\"></i>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<form class=\"d-none d-md-flex ms-4\">
\t\t\t\t\t\t<input class=\"form-control border-0\" type=\"search\" placeholder=\"Search\">
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"navbar-nav align-items-center ms-auto\">
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope me-lg-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">Message</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"../../../../admin/img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
\t\t\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"../../../../admin/img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
\t\t\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"../../../../admin/img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
\t\t\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item text-center\">See all message</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bell me-lg-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">Notificatin</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Profile updated</h6>
\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">New user added</h6>
\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Password changed</h6>
\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item text-center\">See all notifications</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-lg-2\" src=\"../../../../admin/img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">Thnity Thnity</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">My Profile</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Settings</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Log Out</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t\t<!-- Navbar End -->


\t\t\t\t<!-- Sale & Revenue Start -->
\t\t\t\t<div class=\"container-fluid pt-4 px-4\">
\t\t\t\t\t<div class=\"row g-4\"> ";
        // line 191
        $this->displayBlock('body', $context, $blocks);
        // line 192
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Sale & Revenue End -->


\t\t\t\t\t<!-- Footer Start -->
\t\t\t\t\t<div class=\"container-fluid pt-4 px-4\">
\t\t\t\t\t\t<div class=\"bg-light rounded-top p-4\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 text-center text-sm-start\">
\t\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t\t<a href=\"#\">THNITY.tn</a>, All Right Reserved.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-12 col-sm-6 text-center text-sm-end\">
\t\t\t\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t\t\t\t\t\tDesigned By
\t\t\t\t\t\t\t\t\t<a href=\"https://htmlcodex.com\">HTML Codex</a>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\tDistributed By
\t\t\t\t\t\t\t\t<a class=\"border-bottom\" href=\"https://themewagon.com\" target=\"_blank\">FuturForge</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Footer End -->
\t\t\t</div>
\t\t\t<!-- Content End -->


\t\t\t<!-- Back to Top -->
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\">
\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t</a>
\t\t</body>
\t</html>
</div>

<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"../../../../admin/lib/chart/chart.min.js\"></script>
<script src=\"../../../../admin/lib/easing/easing.min.js\"></script>
<script src=\"../../../../admin/lib/waypoints/waypoints.min.js\"></script>
<script src=\"../../../../admin/lib/owlcarousel/owl.carousel.min.js\"></script>
<script src=\"../../../../admin/lib/tempusdominus/js/moment.min.js\"></script>
<script src=\"../../../../admin/lib/tempusdominus/js/moment-timezone.min.js\"></script>
<script src=\"../../../../admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js\"></script>

<!-- Template Javascript -->
<script src=\"../../../../admin/js/main.js\"></script></body></html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 191
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 191,  324 => 7,  266 => 192,  264 => 191,  168 => 98,  152 => 85,  147 => 83,  142 => 81,  137 => 79,  132 => 77,  127 => 75,  122 => 73,  104 => 58,  52 => 8,  50 => 7,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>
\t\t\t{% block title %}{% endblock %}
\t\t</title>
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t\t<meta content=\"\" name=\"keywords\">
\t\t<meta
\t\tcontent=\"\" name=\"description\">

\t\t<!-- Favicon -->
\t\t<link
\t\thref=\"../../../../admin/img/favicon.ico\" rel=\"icon\">

\t\t<!-- Google Web Fonts -->
\t\t<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
\t\t<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap\" rel=\"stylesheet\">

\t\t<!-- Icon Font Stylesheet -->
\t\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

\t\t<!-- Libraries Stylesheet -->
\t\t<link href=\"../../../../admin/lib/owlcarousel/assets/owl.carousel.min.css\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"../../../../admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css\" rel=\"stylesheet\"/>

\t\t<!-- Customized Bootstrap Stylesheet -->
\t\t<link
\t\thref=\"../../../../admin/css/bootstrap.min.css\" rel=\"stylesheet\">

\t\t<!-- Template Stylesheet -->
\t\t<link href=\"../../../../admin/css/style.css\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.8.0/dist/leaflet.css\" integrity=\"sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==\" crossorigin=\"\"/>
\t</head>

\t<body>
\t\t<div
\t\t\tclass=\"container-xxl position-relative bg-white d-flex p-0\">
\t\t\t<!-- Spinner Start -->
\t\t\t<div id=\"spinner\" class=\"show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center\">
\t\t\t\t<div class=\"spinner-border text-primary\" style=\"width: 3rem; height: 3rem;\" role=\"status\">
\t\t\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Spinner End -->


\t\t\t<!-- Sidebar Start -->
\t\t\t<div class=\"sidebar pe-4 pb-3\">
\t\t\t\t<nav class=\"navbar bg-light navbar-light\">
\t\t\t\t\t<a href=\"{{ path('app_admin') }}\" class=\"navbar-brand mx-4 mb-3\">
\t\t\t\t\t\t<h3 class=\"text-primary\">
\t\t\t\t\t\t\t<i class=\"fa fa-hashtag me-2\"></i>DASHMIN</h3>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"d-flex align-items-center ms-4 mb-4\">
\t\t\t\t\t\t<div class=\"position-relative\">
\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"../../../../admin/img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t<div class=\"bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Jhon Doe</h6>
\t\t\t\t\t\t\t<span>Admin</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"navbar-nav w-100\">
\t\t\t\t\t\t<a href=\"{{ path('app_admin') }}\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>Dashboard</a>
\t\t\t\t\t\t<a href=\"{{ path('admin_offre2_index') }}\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>OffreAb</a>
\t\t\t\t\t\t<a href=\"{{ path('admin_abonnement_index') }}\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>Abonnements</a>
\t\t\t\t\t\t<a href=\"{{ path('admin_offre_index') }}\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>Offre</a>
\t\t\t\t\t\t<a href=\"{{ path('admin_avis_index') }}\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>Avis</a>
\t\t\t\t\t\t<a href=\"{{ path('admin_reservation_bus_index') }}\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>ReservationBus</a>
\t\t\t\t\t\t<a href=\"{{ path('admin_reservation_covoiturage_index') }}\" class=\"nav-item nav-link\">
\t\t\t\t\t\t\t<i class=\"fa fa-tachometer-alt me-2\"></i>ReservationCov</a>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t</div>
\t\t\t<!-- Sidebar End -->


\t\t\t<!-- Content Start -->
\t\t\t<div
\t\t\t\tclass=\"content\">
\t\t\t\t<!-- Navbar Start -->
\t\t\t\t<nav class=\"navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0\">
\t\t\t\t\t<a href=\"{{ path('app_admin') }}\" class=\"navbar-brand d-flex d-lg-none me-4\">
\t\t\t\t\t\t<h2 class=\"text-primary mb-0\">
\t\t\t\t\t\t\t<i class=\"fa fa-hashtag\"></i>
\t\t\t\t\t\t</h2>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"sidebar-toggler flex-shrink-0\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<form class=\"d-none d-md-flex ms-4\">
\t\t\t\t\t\t<input class=\"form-control border-0\" type=\"search\" placeholder=\"Search\">
\t\t\t\t\t</form>
\t\t\t\t\t<div class=\"navbar-nav align-items-center ms-auto\">
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope me-lg-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">Message</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"../../../../admin/img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
\t\t\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"../../../../admin/img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
\t\t\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"../../../../admin/img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Jhon send you a message</h6>
\t\t\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item text-center\">See all message</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-bell me-lg-2\"></i>
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">Notificatin</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Profile updated</h6>
\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">New user added</h6>
\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t<h6 class=\"fw-normal mb-0\">Password changed</h6>
\t\t\t\t\t\t\t\t\t<small>15 minutes ago</small>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<hr class=\"dropdown-divider\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item text-center\">See all notifications</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle me-lg-2\" src=\"../../../../admin/img/user.jpg\" alt=\"\" style=\"width: 40px; height: 40px;\">
\t\t\t\t\t\t\t\t<span class=\"d-none d-lg-inline-flex\">Thnity Thnity</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">My Profile</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Settings</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Log Out</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>
\t\t\t\t<!-- Navbar End -->


\t\t\t\t<!-- Sale & Revenue Start -->
\t\t\t\t<div class=\"container-fluid pt-4 px-4\">
\t\t\t\t\t<div class=\"row g-4\"> {% block body %}{% endblock %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Sale & Revenue End -->


\t\t\t\t\t<!-- Footer Start -->
\t\t\t\t\t<div class=\"container-fluid pt-4 px-4\">
\t\t\t\t\t\t<div class=\"bg-light rounded-top p-4\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12 col-sm-6 text-center text-sm-start\">
\t\t\t\t\t\t\t\t\t&copy;
\t\t\t\t\t\t\t\t\t<a href=\"#\">THNITY.tn</a>, All Right Reserved.
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"col-12 col-sm-6 text-center text-sm-end\">
\t\t\t\t\t\t\t\t\t<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". Thank you for your support. ***/-->
\t\t\t\t\t\t\t\t\tDesigned By
\t\t\t\t\t\t\t\t\t<a href=\"https://htmlcodex.com\">HTML Codex</a>
\t\t\t\t\t\t\t\t</br>
\t\t\t\t\t\t\t\tDistributed By
\t\t\t\t\t\t\t\t<a class=\"border-bottom\" href=\"https://themewagon.com\" target=\"_blank\">FuturForge</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Footer End -->
\t\t\t</div>
\t\t\t<!-- Content End -->


\t\t\t<!-- Back to Top -->
\t\t\t<a href=\"#\" class=\"btn btn-lg btn-primary btn-lg-square back-to-top\">
\t\t\t\t<i class=\"bi bi-arrow-up\"></i>
\t\t\t</a>
\t\t</body>
\t</html>
</div>

<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"../../../../admin/lib/chart/chart.min.js\"></script>
<script src=\"../../../../admin/lib/easing/easing.min.js\"></script>
<script src=\"../../../../admin/lib/waypoints/waypoints.min.js\"></script>
<script src=\"../../../../admin/lib/owlcarousel/owl.carousel.min.js\"></script>
<script src=\"../../../../admin/lib/tempusdominus/js/moment.min.js\"></script>
<script src=\"../../../../admin/lib/tempusdominus/js/moment-timezone.min.js\"></script>
<script src=\"../../../../admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js\"></script>

<!-- Template Javascript -->
<script src=\"../../../../admin/js/main.js\"></script></body></html>
", "base.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\base.html.twig");
    }
}
