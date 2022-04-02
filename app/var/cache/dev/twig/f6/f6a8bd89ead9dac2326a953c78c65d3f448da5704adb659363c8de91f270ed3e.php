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
            'title' => [$this, 'block_title'],
            'navigation' => [$this, 'block_navigation'],
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
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('navigation', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "
";
        // line 128
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
        ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
    </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title> Ustawienia Konta - Netflix</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 16
        echo "    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogo.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
        </div>
        <a class=\"avatar\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("browse");
        echo "\">
            <img class=\"userAvatar\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" alt=\"avatar\"></a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div class=\"mainWrapper\">
        <div class=\"parent\">
            <div class=\"div1\"><p style=\"font-size: 26px\">Konto</p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style=\"font-size: 20px;color:red\" class=\"bi bi-person-video3\">&nbsp;&nbsp;</i>użytkownik
                od:
            </div>
            <div class=\"div2\">
                <hr>
                <br>
                <p class=\"gray\">Członkostwo i rozliczenia</p>

                ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "subscription", [], "any", false, false, false, 39) != null)) {
            // line 40
            echo "                    <button class=\"btnAccount\" onclick=\"window.location.href='/subscription'\">Anuluj członkostwo</button>
                    ";
        } else {
            // line 42
            echo "                    <button class=\"btnAccount\" onclick=\"window.location.href='/subscription'\">Dodaj członkostwo</button>
                ";
        }
        // line 44
        echo "

            </div>
            <div class=\"div3\">
                <hr>
                ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), "html", null, true);
        echo "<br>
                hasło: ******<br>
                telefon:
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
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 96
            echo "                    <div class=\"row\">
                        <img class=\"profile\" src=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "avatar", [], "any", false, false, false, 97), "html", null, true);
            echo "\" alt=\"profile avatar\">
                        <div style=\"display: inline-block;width: 30%;justify-content: center\">
                        <p style=\"line-height: 70px\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", [], "any", false, false, false, 99), "html", null, true);
            echo "</p>
                        </div>
                    </div>

                    <hr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
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

        <div class=\"footer\">
            ";
        // line 122
        $this->loadTemplate("user/profile.html.twig", "user/profile.html.twig", 122, "1883889162")->display($context);
        // line 123
        echo "        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 128
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 129
        echo "    <style>

        ";
        // line 134
        echo "
        li {
            list-style-type: none;
            color: black;
        }

        a {
            color: #0a53be;
        }

        a:hover {
            opacity: 0.8;
        }

        a {
            text-decoration: none;
            color: #0a53be;
        }

        body {
            background-color: black;
            color: black;
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

        .gray {
            color: #757575;
        }

        ";
        // line 180
        echo "
        .btnAccount {
            font-size: 14px;
            background-color: #e6e6e6;
            border: none;
            border-radius: 2px;
            padding: 13px;
            box-shadow: 0 1px 0 rgb(0 0 0 / 20%);
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        ";
        // line 194
        echo "
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
            height: 20px;
            margin-top: 14px;
            margin-right: 28px;
            color: white;
            align-items: center;
            justify-content: center;
        }

        ";
        // line 231
        echo "
        .mainWrapper {
            width: 100%;
            height: 190%;
            background-color: #f3f3f3;
        }

        .parent {
            margin: auto;
            width: 70%;
            height: 100%;
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
        }

        .profile {
            width: 100px;
            padding: 10px;
            border-radius: 5px;
        }

        .div13 {
            margin-top: 100px;
            text-align: left;
            grid-area: 9 / 1 / 12 / 3;
        }

        .div14 {
            margin-top: 100px;
            line-height: 2.5;
            text-align: left;
            grid-area: 9 / 3 / 12 / 9;
        }

        .row {
            flex-direction: row;
width: 20%;
        }

        ";
        // line 343
        echo "
        .footer {
            color: gray;
        }
        .footer a {
            color: gray;
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
        return array (  535 => 343,  424 => 231,  388 => 194,  375 => 180,  330 => 134,  326 => 129,  316 => 128,  303 => 123,  301 => 122,  282 => 105,  270 => 99,  265 => 97,  262 => 96,  258 => 95,  209 => 49,  202 => 44,  198 => 42,  194 => 40,  192 => 39,  179 => 28,  169 => 27,  156 => 23,  152 => 22,  146 => 19,  142 => 18,  138 => 16,  128 => 15,  109 => 4,  96 => 11,  88 => 5,  86 => 4,  83 => 3,  73 => 2,  63 => 128,  60 => 127,  58 => 27,  55 => 26,  53 => 15,  50 => 14,  48 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'user/user.html.twig' %} #}
{% block head %}
    <head>
        {% block title %}<title> Ustawienia Konta - Netflix</title>{% endblock %}
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.ico') }}\">
    </head>
{% endblock %}

{% block navigation %}
    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"{{ path('home') }}\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogo.svg.png') }}\" alt=\"av1\"/>
            </a>
        </div>
        <a class=\"avatar\" href=\"{{ path('browse') }}\">
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

                {% if user.subscription != null %}
                    <button class=\"btnAccount\" onclick=\"window.location.href='/subscription'\">Anuluj członkostwo</button>
                    {% else %}
                    <button class=\"btnAccount\" onclick=\"window.location.href='/subscription'\">Dodaj członkostwo</button>
                {% endif %}


            </div>
            <div class=\"div3\">
                <hr>
                {{ user.email }}<br>
                hasło: ******<br>
                telefon:
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
                        <div style=\"display: inline-block;width: 30%;justify-content: center\">
                        <p style=\"line-height: 70px\">{{ profile.name }}</p>
                        </div>
                    </div>

                    <hr>
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

        <div class=\"footer\">
            {% embed 'reusable/footer.html.twig' %} {% endembed %}
        </div>

    </div>
{% endblock %}

{% block stylesheets %}
    <style>

        {#======================
                 Global
        ======================#}

        li {
            list-style-type: none;
            color: black;
        }

        a {
            color: #0a53be;
        }

        a:hover {
            opacity: 0.8;
        }

        a {
            text-decoration: none;
            color: #0a53be;
        }

        body {
            background-color: black;
            color: black;
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

        .gray {
            color: #757575;
        }

        {#======================
                Buttons
        ======================#}

        .btnAccount {
            font-size: 14px;
            background-color: #e6e6e6;
            border: none;
            border-radius: 2px;
            padding: 13px;
            box-shadow: 0 1px 0 rgb(0 0 0 / 20%);
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        {#======================
               Navigation
        ======================#}

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
            height: 20px;
            margin-top: 14px;
            margin-right: 28px;
            color: white;
            align-items: center;
            justify-content: center;
        }

        {#======================
                Content
        ======================#}

        .mainWrapper {
            width: 100%;
            height: 190%;
            background-color: #f3f3f3;
        }

        .parent {
            margin: auto;
            width: 70%;
            height: 100%;
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
        }

        .profile {
            width: 100px;
            padding: 10px;
            border-radius: 5px;
        }

        .div13 {
            margin-top: 100px;
            text-align: left;
            grid-area: 9 / 1 / 12 / 3;
        }

        .div14 {
            margin-top: 100px;
            line-height: 2.5;
            text-align: left;
            grid-area: 9 / 3 / 12 / 9;
        }

        .row {
            flex-direction: row;
width: 20%;
        }

        {#======================
                Footer
        ======================#}

        .footer {
            color: gray;
        }
        .footer a {
            color: gray;
        }


    </style>
{% endblock %}", "user/profile.html.twig", "/var/www/symfony_docker/templates/user/profile.html.twig");
    }
}


/* user/profile.html.twig */
class __TwigTemplate_8f06adf4fe64d001261d40bf4c6987642e67fcebc4e29dbc2599a5b592268d28___1883889162 extends Template
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
        // line 122
        return "reusable/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $this->parent = $this->loadTemplate("reusable/footer.html.twig", "user/profile.html.twig", 122);
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
        return array (  942 => 122,  535 => 343,  424 => 231,  388 => 194,  375 => 180,  330 => 134,  326 => 129,  316 => 128,  303 => 123,  301 => 122,  282 => 105,  270 => 99,  265 => 97,  262 => 96,  258 => 95,  209 => 49,  202 => 44,  198 => 42,  194 => 40,  192 => 39,  179 => 28,  169 => 27,  156 => 23,  152 => 22,  146 => 19,  142 => 18,  138 => 16,  128 => 15,  109 => 4,  96 => 11,  88 => 5,  86 => 4,  83 => 3,  73 => 2,  63 => 128,  60 => 127,  58 => 27,  55 => 26,  53 => 15,  50 => 14,  48 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'user/user.html.twig' %} #}
{% block head %}
    <head>
        {% block title %}<title> Ustawienia Konta - Netflix</title>{% endblock %}
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.ico') }}\">
    </head>
{% endblock %}

{% block navigation %}
    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"{{ path('home') }}\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogo.svg.png') }}\" alt=\"av1\"/>
            </a>
        </div>
        <a class=\"avatar\" href=\"{{ path('browse') }}\">
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

                {% if user.subscription != null %}
                    <button class=\"btnAccount\" onclick=\"window.location.href='/subscription'\">Anuluj członkostwo</button>
                    {% else %}
                    <button class=\"btnAccount\" onclick=\"window.location.href='/subscription'\">Dodaj członkostwo</button>
                {% endif %}


            </div>
            <div class=\"div3\">
                <hr>
                {{ user.email }}<br>
                hasło: ******<br>
                telefon:
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
                        <div style=\"display: inline-block;width: 30%;justify-content: center\">
                        <p style=\"line-height: 70px\">{{ profile.name }}</p>
                        </div>
                    </div>

                    <hr>
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

        <div class=\"footer\">
            {% embed 'reusable/footer.html.twig' %} {% endembed %}
        </div>

    </div>
{% endblock %}

{% block stylesheets %}
    <style>

        {#======================
                 Global
        ======================#}

        li {
            list-style-type: none;
            color: black;
        }

        a {
            color: #0a53be;
        }

        a:hover {
            opacity: 0.8;
        }

        a {
            text-decoration: none;
            color: #0a53be;
        }

        body {
            background-color: black;
            color: black;
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

        .gray {
            color: #757575;
        }

        {#======================
                Buttons
        ======================#}

        .btnAccount {
            font-size: 14px;
            background-color: #e6e6e6;
            border: none;
            border-radius: 2px;
            padding: 13px;
            box-shadow: 0 1px 0 rgb(0 0 0 / 20%);
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        {#======================
               Navigation
        ======================#}

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
            height: 20px;
            margin-top: 14px;
            margin-right: 28px;
            color: white;
            align-items: center;
            justify-content: center;
        }

        {#======================
                Content
        ======================#}

        .mainWrapper {
            width: 100%;
            height: 190%;
            background-color: #f3f3f3;
        }

        .parent {
            margin: auto;
            width: 70%;
            height: 100%;
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
        }

        .profile {
            width: 100px;
            padding: 10px;
            border-radius: 5px;
        }

        .div13 {
            margin-top: 100px;
            text-align: left;
            grid-area: 9 / 1 / 12 / 3;
        }

        .div14 {
            margin-top: 100px;
            line-height: 2.5;
            text-align: left;
            grid-area: 9 / 3 / 12 / 9;
        }

        .row {
            flex-direction: row;
width: 20%;
        }

        {#======================
                Footer
        ======================#}

        .footer {
            color: gray;
        }
        .footer a {
            color: gray;
        }


    </style>
{% endblock %}", "user/profile.html.twig", "/var/www/symfony_docker/templates/user/profile.html.twig");
    }
}
