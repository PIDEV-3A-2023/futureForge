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

/* emails/abonnementconfirmed.html.twig */
class __TwigTemplate_44c41b28926205eb38572907868cfda2 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/abonnementconfirmed.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" lang=\"en\">

\t<head>
\t\t<title></title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
\t\t<style>
\t\t\t* {
\t\t\t\tbox-sizing: border-box;
\t\t\t}

\t\t\tbody {
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t}

\t\t\ta[x-apple-data-detectors] {
\t\t\t\tcolor: inherit !important;
\t\t\t\ttext-decoration: inherit !important;
\t\t\t}

\t\t\t#MessageViewBody a {
\t\t\t\tcolor: inherit;
\t\t\t\ttext-decoration: none;
\t\t\t}

\t\t\tp {
\t\t\t\tline-height: inherit
\t\t\t}

\t\t\t.desktop_hide,
\t\t\t.desktop_hide table {
\t\t\t\tmso-hide: all;
\t\t\t\tdisplay: none;
\t\t\t\tmax-height: 0;
\t\t\t\toverflow: hidden;
\t\t\t}

\t\t\t.image_block img+div {
\t\t\t\tdisplay: none;
\t\t\t}

\t\t\t.menu_block.desktop_hide .menu-links span {
\t\t\t\tmso-hide: all;
\t\t\t}

\t\t\t@media(max-width:670px) {

\t\t\t\t.desktop_hide table.icons-inner,
\t\t\t\t.row-9 .column-2 .block-2.image_block img,
\t\t\t\t.social_block.desktop_hide .social-table {
\t\t\t\t\tdisplay: inline-block !important;
\t\t\t\t}

\t\t\t\t.icons-inner {
\t\t\t\t\ttext-align: center;
\t\t\t\t}

\t\t\t\t.icons-inner td {
\t\t\t\t\tmargin: 0 auto;
\t\t\t\t}

\t\t\t\t.fullMobileWidth,
\t\t\t\t.image_block img.big,
\t\t\t\t.row-content {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}

\t\t\t\t.mobile_hide {
\t\t\t\t\tdisplay: none;
\t\t\t\t}

\t\t\t\t.stack .column {
\t\t\t\t\twidth: 100%;
\t\t\t\t\tdisplay: block;
\t\t\t\t}

\t\t\t\t.mobile_hide {
\t\t\t\t\tmin-height: 0;
\t\t\t\t\tmax-height: 0;
\t\t\t\t\tmax-width: 0;
\t\t\t\t\toverflow: hidden;
\t\t\t\t\tfont-size: 0;
\t\t\t\t}

\t\t\t\t.desktop_hide,
\t\t\t\t.desktop_hide table {
\t\t\t\t\tdisplay: table !important;
\t\t\t\t\tmax-height: none !important;
\t\t\t\t}

\t\t\t\t.row-2 .column-1 .block-1.heading_block td.pad,
\t\t\t\t.row-3 .column-1 .block-1.heading_block td.pad,
\t\t\t\t.row-4 .column-1 .block-2.heading_block td.pad,
\t\t\t\t.row-4 .column-2 .block-2.heading_block td.pad,
\t\t\t\t.row-4 .column-3 .block-2.heading_block td.pad,
\t\t\t\t.row-5 .column-1 .block-1.heading_block td.pad,
\t\t\t\t.row-5 .column-1 .block-2.heading_block td.pad,
\t\t\t\t.row-9 .column-1 .block-3.heading_block td.pad {
\t\t\t\t\tpadding: 0 0 0 20px !important;
\t\t\t\t}

\t\t\t\t.row-2 .column-1 .block-1.heading_block h1,
\t\t\t\t.row-3 .column-1 .block-1.heading_block h1,
\t\t\t\t.row-4 .column-1 .block-2.heading_block h1,
\t\t\t\t.row-4 .column-2 .block-2.heading_block h1,
\t\t\t\t.row-4 .column-3 .block-2.heading_block h1,
\t\t\t\t.row-5 .column-1 .block-1.heading_block h1,
\t\t\t\t.row-5 .column-1 .block-2.heading_block h1,
\t\t\t\t.row-6 .column-2 .block-2.heading_block h1,
\t\t\t\t.row-7 .column-1 .block-2.heading_block h1,
\t\t\t\t.row-7 .column-2 .block-2.heading_block h1,
\t\t\t\t.row-9 .column-1 .block-3.heading_block h1 {
\t\t\t\t\tfont-size: 30px !important;
\t\t\t\t}

\t\t\t\t.row-2 .column-1 .block-2.paragraph_block td.pad,
\t\t\t\t.row-4 .column-1 .block-3.paragraph_block td.pad,
\t\t\t\t.row-4 .column-2 .block-3.paragraph_block td.pad,
\t\t\t\t.row-4 .column-3 .block-3.paragraph_block td.pad,
\t\t\t\t.row-6 .column-1 .block-2.heading_block td.pad,
\t\t\t\t.row-6 .column-1 .block-3.paragraph_block td.pad,
\t\t\t\t.row-6 .column-1 .block-4.paragraph_block td.pad,
\t\t\t\t.row-6 .column-2 .block-3.paragraph_block td.pad,
\t\t\t\t.row-7 .column-1 .block-3.paragraph_block td.pad,
\t\t\t\t.row-7 .column-2 .block-3.paragraph_block td.pad,
\t\t\t\t.row-9 .column-1 .block-4.paragraph_block td.pad,
\t\t\t\t.row-9 .column-2 .block-2.image_block td.pad {
\t\t\t\t\tpadding: 0 20px !important;
\t\t\t\t}

\t\t\t\t.row-6 .column-2 .block-1.image_block td.pad,
\t\t\t\t.row-7 .column-1 .block-1.image_block td.pad,
\t\t\t\t.row-7 .column-2 .block-1.image_block td.pad {
\t\t\t\t\tpadding: 30px 0 0 !important;
\t\t\t\t}

\t\t\t\t.row-6 .column-2 .block-2.heading_block td.pad,
\t\t\t\t.row-6 .column-2 .block-4.paragraph_block td.pad,
\t\t\t\t.row-7 .column-1 .block-2.heading_block td.pad,
\t\t\t\t.row-7 .column-1 .block-4.paragraph_block td.pad,
\t\t\t\t.row-7 .column-2 .block-2.heading_block td.pad {
\t\t\t\t\tpadding: 10px 20px 5px !important;
\t\t\t\t}

\t\t\t\t.row-6 .column-1 .block-2.heading_block h1 {
\t\t\t\t\ttext-align: left !important;
\t\t\t\t\tfont-size: 30px !important;
\t\t\t\t}

\t\t\t\t.row-9 .column-2 .block-2.image_block .alignment {
\t\t\t\t\ttext-align: left !important;
\t\t\t\t}

\t\t\t\t.row-7 .column-2 .block-4.paragraph_block td.pad {
\t\t\t\t\tpadding: 10px 20px 0 !important;
\t\t\t\t}

\t\t\t\t.row-9 .column-2 .block-3.heading_block h1 {
\t\t\t\t\ttext-align: left !important;
\t\t\t\t\tfont-size: 24px !important;
\t\t\t\t}

\t\t\t\t.row-9 .column-2 .block-3.heading_block td.pad {
\t\t\t\t\tpadding: 10px 20px 20px !important;
\t\t\t\t}

\t\t\t\t.row-1 .column-1 {
\t\t\t\t\tpadding: 35px 0 20px 10px !important;
\t\t\t\t}

\t\t\t\t.row-1 .column-2 {
\t\t\t\t\tpadding: 28px 20px 20px 0 !important;
\t\t\t\t}

\t\t\t\t.row-3 .column-1 {
\t\t\t\t\tpadding: 40px 0 5px !important;
\t\t\t\t}

\t\t\t\t.row-4 .column-1 {
\t\t\t\t\tpadding: 30px 0 !important;
\t\t\t\t}

\t\t\t\t.row-4 .column-2 {
\t\t\t\t\tpadding: 0 0 30px !important;
\t\t\t\t}

\t\t\t\t.row-4 .column-3 {
\t\t\t\t\tpadding: 0 0 40px !important;
\t\t\t\t}

\t\t\t\t.row-11 .column-2,
\t\t\t\t.row-8 .column-1 {
\t\t\t\t\tpadding: 10px 0 20px !important;
\t\t\t\t}

\t\t\t\t.row-10 .column-1 {
\t\t\t\t\tpadding: 60px 0 0 !important;
\t\t\t\t}

\t\t\t\t.row-11 .column-1 {
\t\t\t\t\tpadding: 20px 0 5px !important;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t</head>

\t<body style=\"background-color: #dfeaf1; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;\">
\t\t<table class=\"nl-container\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dfeaf1;\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<table class=\"row row-1\" align=\"center\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<table class=\"row-content\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dcf1ff; border-radius: 0; color: #000000; width: 650px;\" width=\"650\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"column column-1\" width=\"25%\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 30px; padding-left: 20px; padding-right: 20px; padding-top: 30px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"image_block block-1\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"pad\" style=\"width:100%;padding-right:0px;padding-left:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alignment\" align=\"left\" style=\"line-height:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"https://127.0.0.1:8004/\">THN<span>ITY</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table class=\"row row-2\" align=\"center\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<table class=\"row-content stack\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dcf1ff; border-radius: 0; color: #000000; width: 650px;\" width=\"650\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"column column-1\" width=\"100%\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-top: 20px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"paragraph_block block-2\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"pad\" style=\"padding-left:20px;padding-right:60px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"color:#101112;direction:ltr;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:150%;text-align:left;mso-line-height-alt:24px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Salut ";
        // line 253
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 253, $this->source); })()), "nom", [], "any", false, false, false, 253), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 253, $this->source); })()), "prenom", [], "any", false, false, false, 253), "html", null, true);
        echo ", votre abonnement pour l'offre ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 253, $this->source); })()), "idOffre", [], "any", false, false, false, 253), "nom", [], "any", false, false, false, 253), "html", null, true);
        echo " a été confirmé avec succès.</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Details:</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Nom: ";
        // line 257
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 257, $this->source); })()), "nom", [], "any", false, false, false, 257), "html", null, true);
        echo "</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Prenom: ";
        // line 259
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 259, $this->source); })()), "prenom", [], "any", false, false, false, 259), "html", null, true);
        echo "</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Email: ";
        // line 261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 261, $this->source); })()), "email", [], "any", false, false, false, 261), "html", null, true);
        echo "</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">CIN: ";
        // line 263
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 263, $this->source); })()), "cin", [], "any", false, false, false, 263), "html", null, true);
        echo "</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Identifiant: ";
        // line 265
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 265, $this->source); })()), "identifiant", [], "any", false, false, false, 265), "html", null, true);
        echo "</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Type: ";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 267, $this->source); })()), "type", [], "any", false, false, false, 267), "html", null, true);
        echo "</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Date début: ";
        // line 269
        ((twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 269, $this->source); })()), "dated", [], "any", false, false, false, 269)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 269, $this->source); })()), "dated", [], "any", false, false, false, 269), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Date fin: ";
        // line 271
        ((twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 271, $this->source); })()), "datef", [], "any", false, false, false, 271)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 271, $this->source); })()), "datef", [], "any", false, false, false, 271), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Prix: ";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 273, $this->source); })()), "prix", [], "any", false, false, false, 273), "html", null, true);
        echo "</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Offre: ";
        // line 275
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 275, $this->source); })()), "idOffre", [], "any", false, false, false, 275), "nom", [], "any", false, false, false, 275), "html", null, true);
        echo "</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Description: ";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 277, $this->source); })()), "idOffre", [], "any", false, false, false, 277), "description", [], "any", false, false, false, 277), "html", null, true);
        echo "</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Réduction: ";
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 279, $this->source); })()), "idOffre", [], "any", false, false, false, 279), "reduction", [], "any", false, false, false, 279), "html", null, true);
        echo " %</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Date début (Offre): ";
        // line 281
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 281, $this->source); })()), "idOffre", [], "any", false, false, false, 281), "dated", [], "any", false, false, false, 281)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 281, $this->source); })()), "idOffre", [], "any", false, false, false, 281), "dated", [], "any", false, false, false, 281), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Date fin (Offre): ";
        // line 283
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 283, $this->source); })()), "idOffre", [], "any", false, false, false, 283), "datef", [], "any", false, false, false, 283)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 283, $this->source); })()), "idOffre", [], "any", false, false, false, 283), "datef", [], "any", false, false, false, 283), "d-m-Y"), "html", null, true))) : (print ("")));
        echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"image_block block-4\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"pad\" style=\"width:100%;padding-right:0px;padding-left:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alignment\" align=\"center\" style=\"line-height:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://127.0.0.1:8004/\" target=\"_blank\" style=\"outline:none\" tabindex=\"-1\"><img class=\"big\" src=\"https://d1oco4z2z1fhwp.cloudfront.net/templates/default/7371/Banner1.png\" style=\"display: block; height: auto; border: 0; width: 650px; max-width: 100%;\" width=\"650\" alt=\"MainBanner Image - Blue Car\" title=\"MainBanner Image - Blue Car\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<!-- End -->
\t</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "emails/abonnementconfirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 283,  365 => 281,  360 => 279,  355 => 277,  350 => 275,  345 => 273,  340 => 271,  335 => 269,  330 => 267,  325 => 265,  320 => 263,  315 => 261,  310 => 259,  305 => 257,  294 => 253,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\" lang=\"en\">

\t<head>
\t\t<title></title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
\t\t<style>
\t\t\t* {
\t\t\t\tbox-sizing: border-box;
\t\t\t}

\t\t\tbody {
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t}

\t\t\ta[x-apple-data-detectors] {
\t\t\t\tcolor: inherit !important;
\t\t\t\ttext-decoration: inherit !important;
\t\t\t}

\t\t\t#MessageViewBody a {
\t\t\t\tcolor: inherit;
\t\t\t\ttext-decoration: none;
\t\t\t}

\t\t\tp {
\t\t\t\tline-height: inherit
\t\t\t}

\t\t\t.desktop_hide,
\t\t\t.desktop_hide table {
\t\t\t\tmso-hide: all;
\t\t\t\tdisplay: none;
\t\t\t\tmax-height: 0;
\t\t\t\toverflow: hidden;
\t\t\t}

\t\t\t.image_block img+div {
\t\t\t\tdisplay: none;
\t\t\t}

\t\t\t.menu_block.desktop_hide .menu-links span {
\t\t\t\tmso-hide: all;
\t\t\t}

\t\t\t@media(max-width:670px) {

\t\t\t\t.desktop_hide table.icons-inner,
\t\t\t\t.row-9 .column-2 .block-2.image_block img,
\t\t\t\t.social_block.desktop_hide .social-table {
\t\t\t\t\tdisplay: inline-block !important;
\t\t\t\t}

\t\t\t\t.icons-inner {
\t\t\t\t\ttext-align: center;
\t\t\t\t}

\t\t\t\t.icons-inner td {
\t\t\t\t\tmargin: 0 auto;
\t\t\t\t}

\t\t\t\t.fullMobileWidth,
\t\t\t\t.image_block img.big,
\t\t\t\t.row-content {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t}

\t\t\t\t.mobile_hide {
\t\t\t\t\tdisplay: none;
\t\t\t\t}

\t\t\t\t.stack .column {
\t\t\t\t\twidth: 100%;
\t\t\t\t\tdisplay: block;
\t\t\t\t}

\t\t\t\t.mobile_hide {
\t\t\t\t\tmin-height: 0;
\t\t\t\t\tmax-height: 0;
\t\t\t\t\tmax-width: 0;
\t\t\t\t\toverflow: hidden;
\t\t\t\t\tfont-size: 0;
\t\t\t\t}

\t\t\t\t.desktop_hide,
\t\t\t\t.desktop_hide table {
\t\t\t\t\tdisplay: table !important;
\t\t\t\t\tmax-height: none !important;
\t\t\t\t}

\t\t\t\t.row-2 .column-1 .block-1.heading_block td.pad,
\t\t\t\t.row-3 .column-1 .block-1.heading_block td.pad,
\t\t\t\t.row-4 .column-1 .block-2.heading_block td.pad,
\t\t\t\t.row-4 .column-2 .block-2.heading_block td.pad,
\t\t\t\t.row-4 .column-3 .block-2.heading_block td.pad,
\t\t\t\t.row-5 .column-1 .block-1.heading_block td.pad,
\t\t\t\t.row-5 .column-1 .block-2.heading_block td.pad,
\t\t\t\t.row-9 .column-1 .block-3.heading_block td.pad {
\t\t\t\t\tpadding: 0 0 0 20px !important;
\t\t\t\t}

\t\t\t\t.row-2 .column-1 .block-1.heading_block h1,
\t\t\t\t.row-3 .column-1 .block-1.heading_block h1,
\t\t\t\t.row-4 .column-1 .block-2.heading_block h1,
\t\t\t\t.row-4 .column-2 .block-2.heading_block h1,
\t\t\t\t.row-4 .column-3 .block-2.heading_block h1,
\t\t\t\t.row-5 .column-1 .block-1.heading_block h1,
\t\t\t\t.row-5 .column-1 .block-2.heading_block h1,
\t\t\t\t.row-6 .column-2 .block-2.heading_block h1,
\t\t\t\t.row-7 .column-1 .block-2.heading_block h1,
\t\t\t\t.row-7 .column-2 .block-2.heading_block h1,
\t\t\t\t.row-9 .column-1 .block-3.heading_block h1 {
\t\t\t\t\tfont-size: 30px !important;
\t\t\t\t}

\t\t\t\t.row-2 .column-1 .block-2.paragraph_block td.pad,
\t\t\t\t.row-4 .column-1 .block-3.paragraph_block td.pad,
\t\t\t\t.row-4 .column-2 .block-3.paragraph_block td.pad,
\t\t\t\t.row-4 .column-3 .block-3.paragraph_block td.pad,
\t\t\t\t.row-6 .column-1 .block-2.heading_block td.pad,
\t\t\t\t.row-6 .column-1 .block-3.paragraph_block td.pad,
\t\t\t\t.row-6 .column-1 .block-4.paragraph_block td.pad,
\t\t\t\t.row-6 .column-2 .block-3.paragraph_block td.pad,
\t\t\t\t.row-7 .column-1 .block-3.paragraph_block td.pad,
\t\t\t\t.row-7 .column-2 .block-3.paragraph_block td.pad,
\t\t\t\t.row-9 .column-1 .block-4.paragraph_block td.pad,
\t\t\t\t.row-9 .column-2 .block-2.image_block td.pad {
\t\t\t\t\tpadding: 0 20px !important;
\t\t\t\t}

\t\t\t\t.row-6 .column-2 .block-1.image_block td.pad,
\t\t\t\t.row-7 .column-1 .block-1.image_block td.pad,
\t\t\t\t.row-7 .column-2 .block-1.image_block td.pad {
\t\t\t\t\tpadding: 30px 0 0 !important;
\t\t\t\t}

\t\t\t\t.row-6 .column-2 .block-2.heading_block td.pad,
\t\t\t\t.row-6 .column-2 .block-4.paragraph_block td.pad,
\t\t\t\t.row-7 .column-1 .block-2.heading_block td.pad,
\t\t\t\t.row-7 .column-1 .block-4.paragraph_block td.pad,
\t\t\t\t.row-7 .column-2 .block-2.heading_block td.pad {
\t\t\t\t\tpadding: 10px 20px 5px !important;
\t\t\t\t}

\t\t\t\t.row-6 .column-1 .block-2.heading_block h1 {
\t\t\t\t\ttext-align: left !important;
\t\t\t\t\tfont-size: 30px !important;
\t\t\t\t}

\t\t\t\t.row-9 .column-2 .block-2.image_block .alignment {
\t\t\t\t\ttext-align: left !important;
\t\t\t\t}

\t\t\t\t.row-7 .column-2 .block-4.paragraph_block td.pad {
\t\t\t\t\tpadding: 10px 20px 0 !important;
\t\t\t\t}

\t\t\t\t.row-9 .column-2 .block-3.heading_block h1 {
\t\t\t\t\ttext-align: left !important;
\t\t\t\t\tfont-size: 24px !important;
\t\t\t\t}

\t\t\t\t.row-9 .column-2 .block-3.heading_block td.pad {
\t\t\t\t\tpadding: 10px 20px 20px !important;
\t\t\t\t}

\t\t\t\t.row-1 .column-1 {
\t\t\t\t\tpadding: 35px 0 20px 10px !important;
\t\t\t\t}

\t\t\t\t.row-1 .column-2 {
\t\t\t\t\tpadding: 28px 20px 20px 0 !important;
\t\t\t\t}

\t\t\t\t.row-3 .column-1 {
\t\t\t\t\tpadding: 40px 0 5px !important;
\t\t\t\t}

\t\t\t\t.row-4 .column-1 {
\t\t\t\t\tpadding: 30px 0 !important;
\t\t\t\t}

\t\t\t\t.row-4 .column-2 {
\t\t\t\t\tpadding: 0 0 30px !important;
\t\t\t\t}

\t\t\t\t.row-4 .column-3 {
\t\t\t\t\tpadding: 0 0 40px !important;
\t\t\t\t}

\t\t\t\t.row-11 .column-2,
\t\t\t\t.row-8 .column-1 {
\t\t\t\t\tpadding: 10px 0 20px !important;
\t\t\t\t}

\t\t\t\t.row-10 .column-1 {
\t\t\t\t\tpadding: 60px 0 0 !important;
\t\t\t\t}

\t\t\t\t.row-11 .column-1 {
\t\t\t\t\tpadding: 20px 0 5px !important;
\t\t\t\t}
\t\t\t}
\t\t</style>
\t</head>

\t<body style=\"background-color: #dfeaf1; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;\">
\t\t<table class=\"nl-container\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dfeaf1;\">
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<table class=\"row row-1\" align=\"center\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<table class=\"row-content\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dcf1ff; border-radius: 0; color: #000000; width: 650px;\" width=\"650\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"column column-1\" width=\"25%\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 30px; padding-left: 20px; padding-right: 20px; padding-top: 30px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"image_block block-1\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"pad\" style=\"width:100%;padding-right:0px;padding-left:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alignment\" align=\"left\" style=\"line-height:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"https://127.0.0.1:8004/\">THN<span>ITY</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t\t<table class=\"row row-2\" align=\"center\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<table class=\"row-content stack\" align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #dcf1ff; border-radius: 0; color: #000000; width: 650px;\" width=\"650\">
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"column column-1\" width=\"100%\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-top: 20px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"paragraph_block block-2\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"pad\" style=\"padding-left:20px;padding-right:60px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"color:#101112;direction:ltr;font-family:Helvetica Neue, Helvetica, Arial, sans-serif;font-size:16px;font-weight:400;letter-spacing:0px;line-height:150%;text-align:left;mso-line-height-alt:24px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Salut {{ abonnement.nom }} {{ abonnement.prenom }}, votre abonnement pour l'offre {{ abonnement.idOffre.nom }} a été confirmé avec succès.</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Details:</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Nom: {{ abonnement.nom }}</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Prenom: {{ abonnement.prenom }}</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Email: {{ abonnement.email }}</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">CIN: {{ abonnement.cin }}</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Identifiant: {{ abonnement.identifiant }}</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Type: {{ abonnement.type }}</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Date début: {{ abonnement.dated ? abonnement.dated|date('d-m-Y') : '' }}</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Date fin: {{ abonnement.datef ? abonnement.datef|date('d-m-Y') : '' }}</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Prix: {{ abonnement.prix }}</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Offre: {{ abonnement.idOffre.nom }}</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Description: {{ abonnement.idOffre.description }}</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Réduction: {{ abonnement.idOffre.reduction }} %</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Date début (Offre): {{ abonnement.idOffre.dated ? abonnement.idOffre.dated|date('d-m-Y') : '' }}</p>
                                                                        
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p style=\"margin: 0;\">Date fin (Offre): {{ abonnement.idOffre.datef ? abonnement.idOffre.datef|date('d-m-Y') : '' }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"image_block block-4\" width=\"100%\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"mso-table-lspace: 0pt; mso-table-rspace: 0pt;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"pad\" style=\"width:100%;padding-right:0px;padding-left:0px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"alignment\" align=\"center\" style=\"line-height:10px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"https://127.0.0.1:8004/\" target=\"_blank\" style=\"outline:none\" tabindex=\"-1\"><img class=\"big\" src=\"https://d1oco4z2z1fhwp.cloudfront.net/templates/default/7371/Banner1.png\" style=\"display: block; height: auto; border: 0; width: 650px; max-width: 100%;\" width=\"650\" alt=\"MainBanner Image - Blue Car\" title=\"MainBanner Image - Blue Car\"></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<!-- End -->
\t</body>

</html>
", "emails/abonnementconfirmed.html.twig", "C:\\Users\\Foura\\Desktop\\pidev\\Symfony\\prd2\\ghada meddeb\\last version\\thnity_web\\templates\\emails\\abonnementconfirmed.html.twig");
    }
}
