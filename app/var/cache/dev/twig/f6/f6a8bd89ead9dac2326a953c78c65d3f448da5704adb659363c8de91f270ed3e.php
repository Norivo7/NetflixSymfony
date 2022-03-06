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

/* user/profile.html.twig */
class __TwigTemplate_8f06adf4fe64d001261d40bf4c6987642e67fcebc4e29dbc2599a5b592268d28 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <head>
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
    </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogo.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
        </div>
        <a class=\"avatar\" href=\"/browse\">
            <img class=\"userAvatar\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\" alt=\"avatar\"></a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
    <div class=\"mainWrapper\">

        <div class=\"parent\">
            <div class=\"div1\"><p style=\"font-size: 26px\">Konto</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style=\"font-size: 20px;color:red\" class=\"bi bi-person-video3\">&nbsp;&nbsp;</i>użytkownik
                od:
            </div>
            <div class=\"div2\">
                <hr>
                <br>
                <p class=\"gray\">Członkostwo i rozliczenia</p>
                <button class=\"btnAccount\">Anuluj członkostwo</button>
            </div>
            <div class=\"div3\">
                <hr>
                ";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "<br>
                hasło:<br>
                telefon:s
            </div>
            <div class=\"div4\">
                <hr>
                <a href=\"#\">Zmień adres e-mail</a><br>
                <a href=\"#\">Zmień hasło</a><br>
                <a href=\"#\">Zweryfikuj numer telefon</a><br>
                <a href=\"#\">Zmień numer telefon</a>
            </div>
            <div class=\"div5\">
                <hr>
                4124 1242 1242 12414<br>
                Twoja kolejna data rozliczenia to:
            </div>
            <div class=\"div6\">
                <hr>
                <a href=\"#\">Zarządzaj metodami płatności</a><br>
                <a href=\"#\">Dodaj zapasową metodę płatności</a><br>
                <a href=\"#\">Szczegóły rozliczenia</a><br>
                <a href=\"#\">Zmień dzień rozliczenia</a>
            </div>
            <div class=\"div7\">
                <hr>
                <a href=\"#\">Zrealizuj kartę podarunkową lub kod promocyjny</a><br>
                <a href=\"#\">Gdzie kupić karty podarunkowe</a>
            </div>
            <div class=\"div8\">
                <hr>
                <p class=\"gray\">Szczegóły</p>
            </div>
            <div class=\"div9\">
                <hr>
                <p class=\"gray\">Standard</p>
            </div>
            <div class=\"div10\">
                <hr>
                <a href=\"#\">Zmień plan</a>
            </div>
            <div class=\"div11\">
                <hr>
                <p class=\"gray\">Profile i kontrola rodzicielska</p>
            </div>
            <div class=\"div12\">
                <hr>
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 89
            echo "                    <div class=\"row\">
                        <img class=\"profile\" src=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "avatar", [], "any", false, false, false, 90), "html", null, true);
            echo "\" alt=\"profile avatar\">
                        ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", [], "any", false, false, false, 91), "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "            </div>
            <div class=\"div13\">
                <hr>
                <p class=\"gray\">Ustawienia</p>
            </div>
            <div class=\"div14\">
                <hr>
                <a href=\"#\"> Udział w testach</a><br>
                <a href=\"#\">Zarządzaj urządzeniami do pobierania</a><br>
                <a href=\"#\">Aktywuj urządzenie</a><br>
                <a href=\"#\">Urządzenia: ostatnia aktywność na koncie</a><br>
                <a href=\"#\">Wyloguj się na wszystkich urządzeniach</a><br>
                <a href=\"#\">Pobierz swoje dane osobowe</a>
            </div>
        </div>
        ";
        // line 109
        $this->loadTemplate("user/profile.html.twig", "user/profile.html.twig", 109, "1581621508")->display($context);
        // line 110
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 114
        echo "    <style>
        .gray {
            color: #757575;
        }

        .btnAccount {
            font-size: 14px;
            background-color: #e6e6e6;
            border: none;
            border-radius: 2px;
            padding: 13px;
            box-shadow: 0 1px 0 rgb(0 0 0 / 20%);
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        .parent {
            margin: auto;
            width: 70%;
            height: 100%;
            /*border: 4px solid red;*/
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            grid-template-rows: repeat(11, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .div1 {
            margin-top: 130px;
            display: flex;
            flex-direction: row;
            height: 20%;
            width: 100%;
            /*border: 4px solid green;*/
            grid-area: 1 / 1 / 2 / 9;
        }

        .div2 {

            text-align: center;
            grid-area: 2 / 1 / 5 / 3;
        }

        .div3 {
            line-height: 2.2;
            text-align: left;
            grid-area: 2 / 3 / 3 / 6;
        }

        .div4 {
            line-height: 2.2;
            text-align: right;
            grid-area: 2 / 6 / 3 / 9;
        }

        .div5 {
            line-height: 2.2;
            grid-area: 3 / 3 / 4 / 6;
        }

        .div6 {
            line-height: 1.8;
            text-align: right;
            grid-area: 3 / 6 / 4 / 9;
        }

        .div7 {
            line-height: 2.5;
            text-align: right;
            grid-area: 4 / 3 / 5 / 9;
        }

        .div8 {
            grid-area: 5 / 1 / 6 / 3;
        }

        .div9 {
            grid-area: 5 / 3 / 6 / 7;
        }

        .div10 {
            text-align: right;
            grid-area: 5 / 7 / 6 / 9;
        }

        .div11 {
            grid-area: 6 / 1 / 9 / 3;
        }

        .div12 {

            display: flex;
            flex-direction: column;
            grid-area: 6 / 3 / 9 / 9;
            padding-bottom: 150px;
        }

        .profile {
            width: 100px;
            padding: 10px;
        }

        .div13 {
            margin-top: 250px;
            text-align: left;
            grid-area: 9 / 1 / 12 / 3;
        }

        .div14 {
            margin-top: 250px;
            line-height: 2.5;
            text-align: left;
            grid-area: 9 / 3 / 12 / 9;
        }

        .row {
            flex-direction: row;
        }

        li {
            list-style-type: none;
            color: black;
        }

        a {
            color: #0a53be;
        }

        #headerContainer {
            display: flex;
            flex-direction: row;
            height: 70px;
            justify-content: space-between;
            flex-wrap: nowrap;
        }

        .brandLogoWrapper {
            height: 100%;
            justify-content: center;
            padding: 17px 40px;
            margin-right: 15px;
        }

        .logo {
            height: 31px;
        }

        .userAvatar {
            width: 30px;
            border-radius: 4px;
        }

        .avatar {
            /*padding: 13px 0;*/
            height: 20px;
            margin-top: 14px;
            margin-right: 28px;
            color: white;
            align-items: center;
            justify-content: center;
        }

        /*a:link {*/
        /*    color: #0a53be;*/
        /*}*/
        a:hover {
            opacity: 0.8;
        }

        a {
            text-decoration: none;
            color: #0a53be;
        }

        /*a:hover {*/
        /*    color: red;*/
        /*}*/

        /*a:active {*/
        /*    color: red;*/
        /*}*/

        /*a:visited {*/
        /*    color: red;*/
        /*}*/
        body {
            background-color: black;
            color: black;
        }

        .mainWrapper {
            width: 100%;
            height: 2000px;
            background-color: #f3f3f3;
        }

        hr {
            border-bottom: 2px solid rgb(118, 118, 118);
        }

        h2 {
            font-weight: 400;
            color: black;
            width: 10px;
        }

        h3 {
            padding-bottom: 20px;
            font-size: 1.2rem;
            color: #FFFFFF;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  272 => 114,  262 => 113,  251 => 110,  249 => 109,  232 => 94,  223 => 91,  219 => 90,  216 => 89,  212 => 88,  163 => 42,  145 => 26,  135 => 25,  122 => 21,  115 => 17,  110 => 14,  100 => 13,  82 => 3,  72 => 2,  62 => 113,  59 => 112,  57 => 25,  54 => 24,  52 => 13,  49 => 12,  47 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'user/user.html.twig' %} #}
{% block head %}
    <head>
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
    </head>
{% endblock %}

{% block header %}
    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogo.svg.png') }}\" alt=\"av1\"/>
            </a>
        </div>
        <a class=\"avatar\" href=\"/browse\">
            <img class=\"userAvatar\" src=\"{{ userAvatar }}\" alt=\"avatar\"></a>
    </div>
{% endblock %}

{% block body %}

    <div class=\"mainWrapper\">

        <div class=\"parent\">
            <div class=\"div1\"><p style=\"font-size: 26px\">Konto</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style=\"font-size: 20px;color:red\" class=\"bi bi-person-video3\">&nbsp;&nbsp;</i>użytkownik
                od:
            </div>
            <div class=\"div2\">
                <hr>
                <br>
                <p class=\"gray\">Członkostwo i rozliczenia</p>
                <button class=\"btnAccount\">Anuluj członkostwo</button>
            </div>
            <div class=\"div3\">
                <hr>
                {{ email }}<br>
                hasło:<br>
                telefon:s
            </div>
            <div class=\"div4\">
                <hr>
                <a href=\"#\">Zmień adres e-mail</a><br>
                <a href=\"#\">Zmień hasło</a><br>
                <a href=\"#\">Zweryfikuj numer telefon</a><br>
                <a href=\"#\">Zmień numer telefon</a>
            </div>
            <div class=\"div5\">
                <hr>
                4124 1242 1242 12414<br>
                Twoja kolejna data rozliczenia to:
            </div>
            <div class=\"div6\">
                <hr>
                <a href=\"#\">Zarządzaj metodami płatności</a><br>
                <a href=\"#\">Dodaj zapasową metodę płatności</a><br>
                <a href=\"#\">Szczegóły rozliczenia</a><br>
                <a href=\"#\">Zmień dzień rozliczenia</a>
            </div>
            <div class=\"div7\">
                <hr>
                <a href=\"#\">Zrealizuj kartę podarunkową lub kod promocyjny</a><br>
                <a href=\"#\">Gdzie kupić karty podarunkowe</a>
            </div>
            <div class=\"div8\">
                <hr>
                <p class=\"gray\">Szczegóły</p>
            </div>
            <div class=\"div9\">
                <hr>
                <p class=\"gray\">Standard</p>
            </div>
            <div class=\"div10\">
                <hr>
                <a href=\"#\">Zmień plan</a>
            </div>
            <div class=\"div11\">
                <hr>
                <p class=\"gray\">Profile i kontrola rodzicielska</p>
            </div>
            <div class=\"div12\">
                <hr>
                {% for profile in profiles %}
                    <div class=\"row\">
                        <img class=\"profile\" src=\"{{ profile.avatar }}\" alt=\"profile avatar\">
                        {{ profile.name }}
                    </div>
                {% endfor %}
            </div>
            <div class=\"div13\">
                <hr>
                <p class=\"gray\">Ustawienia</p>
            </div>
            <div class=\"div14\">
                <hr>
                <a href=\"#\"> Udział w testach</a><br>
                <a href=\"#\">Zarządzaj urządzeniami do pobierania</a><br>
                <a href=\"#\">Aktywuj urządzenie</a><br>
                <a href=\"#\">Urządzenia: ostatnia aktywność na koncie</a><br>
                <a href=\"#\">Wyloguj się na wszystkich urządzeniach</a><br>
                <a href=\"#\">Pobierz swoje dane osobowe</a>
            </div>
        </div>
        {% embed 'reusable/footer.html.twig' %} {% endembed %}
    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        .gray {
            color: #757575;
        }

        .btnAccount {
            font-size: 14px;
            background-color: #e6e6e6;
            border: none;
            border-radius: 2px;
            padding: 13px;
            box-shadow: 0 1px 0 rgb(0 0 0 / 20%);
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        .parent {
            margin: auto;
            width: 70%;
            height: 100%;
            /*border: 4px solid red;*/
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            grid-template-rows: repeat(11, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .div1 {
            margin-top: 130px;
            display: flex;
            flex-direction: row;
            height: 20%;
            width: 100%;
            /*border: 4px solid green;*/
            grid-area: 1 / 1 / 2 / 9;
        }

        .div2 {

            text-align: center;
            grid-area: 2 / 1 / 5 / 3;
        }

        .div3 {
            line-height: 2.2;
            text-align: left;
            grid-area: 2 / 3 / 3 / 6;
        }

        .div4 {
            line-height: 2.2;
            text-align: right;
            grid-area: 2 / 6 / 3 / 9;
        }

        .div5 {
            line-height: 2.2;
            grid-area: 3 / 3 / 4 / 6;
        }

        .div6 {
            line-height: 1.8;
            text-align: right;
            grid-area: 3 / 6 / 4 / 9;
        }

        .div7 {
            line-height: 2.5;
            text-align: right;
            grid-area: 4 / 3 / 5 / 9;
        }

        .div8 {
            grid-area: 5 / 1 / 6 / 3;
        }

        .div9 {
            grid-area: 5 / 3 / 6 / 7;
        }

        .div10 {
            text-align: right;
            grid-area: 5 / 7 / 6 / 9;
        }

        .div11 {
            grid-area: 6 / 1 / 9 / 3;
        }

        .div12 {

            display: flex;
            flex-direction: column;
            grid-area: 6 / 3 / 9 / 9;
            padding-bottom: 150px;
        }

        .profile {
            width: 100px;
            padding: 10px;
        }

        .div13 {
            margin-top: 250px;
            text-align: left;
            grid-area: 9 / 1 / 12 / 3;
        }

        .div14 {
            margin-top: 250px;
            line-height: 2.5;
            text-align: left;
            grid-area: 9 / 3 / 12 / 9;
        }

        .row {
            flex-direction: row;
        }

        li {
            list-style-type: none;
            color: black;
        }

        a {
            color: #0a53be;
        }

        #headerContainer {
            display: flex;
            flex-direction: row;
            height: 70px;
            justify-content: space-between;
            flex-wrap: nowrap;
        }

        .brandLogoWrapper {
            height: 100%;
            justify-content: center;
            padding: 17px 40px;
            margin-right: 15px;
        }

        .logo {
            height: 31px;
        }

        .userAvatar {
            width: 30px;
            border-radius: 4px;
        }

        .avatar {
            /*padding: 13px 0;*/
            height: 20px;
            margin-top: 14px;
            margin-right: 28px;
            color: white;
            align-items: center;
            justify-content: center;
        }

        /*a:link {*/
        /*    color: #0a53be;*/
        /*}*/
        a:hover {
            opacity: 0.8;
        }

        a {
            text-decoration: none;
            color: #0a53be;
        }

        /*a:hover {*/
        /*    color: red;*/
        /*}*/

        /*a:active {*/
        /*    color: red;*/
        /*}*/

        /*a:visited {*/
        /*    color: red;*/
        /*}*/
        body {
            background-color: black;
            color: black;
        }

        .mainWrapper {
            width: 100%;
            height: 2000px;
            background-color: #f3f3f3;
        }

        hr {
            border-bottom: 2px solid rgb(118, 118, 118);
        }

        h2 {
            font-weight: 400;
            color: black;
            width: 10px;
        }

        h3 {
            padding-bottom: 20px;
            font-size: 1.2rem;
            color: #FFFFFF;
        }

    </style>
{% endblock %}", "user/profile.html.twig", "/var/www/symfony_docker/templates/user/profile.html.twig");
    }
}


/* user/profile.html.twig */
class __TwigTemplate_8f06adf4fe64d001261d40bf4c6987642e67fcebc4e29dbc2599a5b592268d28___1581621508 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 109
        return "reusable/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("reusable/footer.html.twig", "user/profile.html.twig", 109);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  856 => 109,  272 => 114,  262 => 113,  251 => 110,  249 => 109,  232 => 94,  223 => 91,  219 => 90,  216 => 89,  212 => 88,  163 => 42,  145 => 26,  135 => 25,  122 => 21,  115 => 17,  110 => 14,  100 => 13,  82 => 3,  72 => 2,  62 => 113,  59 => 112,  57 => 25,  54 => 24,  52 => 13,  49 => 12,  47 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'user/user.html.twig' %} #}
{% block head %}
    <head>
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
    </head>
{% endblock %}

{% block header %}
    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogo.svg.png') }}\" alt=\"av1\"/>
            </a>
        </div>
        <a class=\"avatar\" href=\"/browse\">
            <img class=\"userAvatar\" src=\"{{ userAvatar }}\" alt=\"avatar\"></a>
    </div>
{% endblock %}

{% block body %}

    <div class=\"mainWrapper\">

        <div class=\"parent\">
            <div class=\"div1\"><p style=\"font-size: 26px\">Konto</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style=\"font-size: 20px;color:red\" class=\"bi bi-person-video3\">&nbsp;&nbsp;</i>użytkownik
                od:
            </div>
            <div class=\"div2\">
                <hr>
                <br>
                <p class=\"gray\">Członkostwo i rozliczenia</p>
                <button class=\"btnAccount\">Anuluj członkostwo</button>
            </div>
            <div class=\"div3\">
                <hr>
                {{ email }}<br>
                hasło:<br>
                telefon:s
            </div>
            <div class=\"div4\">
                <hr>
                <a href=\"#\">Zmień adres e-mail</a><br>
                <a href=\"#\">Zmień hasło</a><br>
                <a href=\"#\">Zweryfikuj numer telefon</a><br>
                <a href=\"#\">Zmień numer telefon</a>
            </div>
            <div class=\"div5\">
                <hr>
                4124 1242 1242 12414<br>
                Twoja kolejna data rozliczenia to:
            </div>
            <div class=\"div6\">
                <hr>
                <a href=\"#\">Zarządzaj metodami płatności</a><br>
                <a href=\"#\">Dodaj zapasową metodę płatności</a><br>
                <a href=\"#\">Szczegóły rozliczenia</a><br>
                <a href=\"#\">Zmień dzień rozliczenia</a>
            </div>
            <div class=\"div7\">
                <hr>
                <a href=\"#\">Zrealizuj kartę podarunkową lub kod promocyjny</a><br>
                <a href=\"#\">Gdzie kupić karty podarunkowe</a>
            </div>
            <div class=\"div8\">
                <hr>
                <p class=\"gray\">Szczegóły</p>
            </div>
            <div class=\"div9\">
                <hr>
                <p class=\"gray\">Standard</p>
            </div>
            <div class=\"div10\">
                <hr>
                <a href=\"#\">Zmień plan</a>
            </div>
            <div class=\"div11\">
                <hr>
                <p class=\"gray\">Profile i kontrola rodzicielska</p>
            </div>
            <div class=\"div12\">
                <hr>
                {% for profile in profiles %}
                    <div class=\"row\">
                        <img class=\"profile\" src=\"{{ profile.avatar }}\" alt=\"profile avatar\">
                        {{ profile.name }}
                    </div>
                {% endfor %}
            </div>
            <div class=\"div13\">
                <hr>
                <p class=\"gray\">Ustawienia</p>
            </div>
            <div class=\"div14\">
                <hr>
                <a href=\"#\"> Udział w testach</a><br>
                <a href=\"#\">Zarządzaj urządzeniami do pobierania</a><br>
                <a href=\"#\">Aktywuj urządzenie</a><br>
                <a href=\"#\">Urządzenia: ostatnia aktywność na koncie</a><br>
                <a href=\"#\">Wyloguj się na wszystkich urządzeniach</a><br>
                <a href=\"#\">Pobierz swoje dane osobowe</a>
            </div>
        </div>
        {% embed 'reusable/footer.html.twig' %} {% endembed %}
    </div>
{% endblock %}

{% block stylesheets %}
    <style>
        .gray {
            color: #757575;
        }

        .btnAccount {
            font-size: 14px;
            background-color: #e6e6e6;
            border: none;
            border-radius: 2px;
            padding: 13px;
            box-shadow: 0 1px 0 rgb(0 0 0 / 20%);
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        .parent {
            margin: auto;
            width: 70%;
            height: 100%;
            /*border: 4px solid red;*/
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            grid-template-rows: repeat(11, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .div1 {
            margin-top: 130px;
            display: flex;
            flex-direction: row;
            height: 20%;
            width: 100%;
            /*border: 4px solid green;*/
            grid-area: 1 / 1 / 2 / 9;
        }

        .div2 {

            text-align: center;
            grid-area: 2 / 1 / 5 / 3;
        }

        .div3 {
            line-height: 2.2;
            text-align: left;
            grid-area: 2 / 3 / 3 / 6;
        }

        .div4 {
            line-height: 2.2;
            text-align: right;
            grid-area: 2 / 6 / 3 / 9;
        }

        .div5 {
            line-height: 2.2;
            grid-area: 3 / 3 / 4 / 6;
        }

        .div6 {
            line-height: 1.8;
            text-align: right;
            grid-area: 3 / 6 / 4 / 9;
        }

        .div7 {
            line-height: 2.5;
            text-align: right;
            grid-area: 4 / 3 / 5 / 9;
        }

        .div8 {
            grid-area: 5 / 1 / 6 / 3;
        }

        .div9 {
            grid-area: 5 / 3 / 6 / 7;
        }

        .div10 {
            text-align: right;
            grid-area: 5 / 7 / 6 / 9;
        }

        .div11 {
            grid-area: 6 / 1 / 9 / 3;
        }

        .div12 {

            display: flex;
            flex-direction: column;
            grid-area: 6 / 3 / 9 / 9;
            padding-bottom: 150px;
        }

        .profile {
            width: 100px;
            padding: 10px;
        }

        .div13 {
            margin-top: 250px;
            text-align: left;
            grid-area: 9 / 1 / 12 / 3;
        }

        .div14 {
            margin-top: 250px;
            line-height: 2.5;
            text-align: left;
            grid-area: 9 / 3 / 12 / 9;
        }

        .row {
            flex-direction: row;
        }

        li {
            list-style-type: none;
            color: black;
        }

        a {
            color: #0a53be;
        }

        #headerContainer {
            display: flex;
            flex-direction: row;
            height: 70px;
            justify-content: space-between;
            flex-wrap: nowrap;
        }

        .brandLogoWrapper {
            height: 100%;
            justify-content: center;
            padding: 17px 40px;
            margin-right: 15px;
        }

        .logo {
            height: 31px;
        }

        .userAvatar {
            width: 30px;
            border-radius: 4px;
        }

        .avatar {
            /*padding: 13px 0;*/
            height: 20px;
            margin-top: 14px;
            margin-right: 28px;
            color: white;
            align-items: center;
            justify-content: center;
        }

        /*a:link {*/
        /*    color: #0a53be;*/
        /*}*/
        a:hover {
            opacity: 0.8;
        }

        a {
            text-decoration: none;
            color: #0a53be;
        }

        /*a:hover {*/
        /*    color: red;*/
        /*}*/

        /*a:active {*/
        /*    color: red;*/
        /*}*/

        /*a:visited {*/
        /*    color: red;*/
        /*}*/
        body {
            background-color: black;
            color: black;
        }

        .mainWrapper {
            width: 100%;
            height: 2000px;
            background-color: #f3f3f3;
        }

        hr {
            border-bottom: 2px solid rgb(118, 118, 118);
        }

        h2 {
            font-weight: 400;
            color: black;
            width: 10px;
        }

        h3 {
            padding-bottom: 20px;
            font-size: 1.2rem;
            color: #FFFFFF;
        }

    </style>
{% endblock %}", "user/profile.html.twig", "/var/www/symfony_docker/templates/user/profile.html.twig");
    }
}
