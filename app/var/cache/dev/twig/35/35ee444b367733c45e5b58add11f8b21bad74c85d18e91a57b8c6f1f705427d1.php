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

/* user/edit.html.twig */
class __TwigTemplate_2300598c86d4470f7df27a53d295274ac605d777ebedd2549b7f7a11099bf7c4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "user/user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("user/user.html.twig", "user/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "<head>
    ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title> Edytuj profil - Netflix</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <body>
    <form id=\"myForm\" method=\"post\">
        ";
        // line 20
        if (array_key_exists("subuser", $context)) {
            // line 21
            echo "            <div class=\"parent\">
                <div class=\"div1\"><p class=\"heading\">Edytuj profil</p>
                    <hr>
                </div>
                <div class=\"div2\">
                    <input id=\"text\"
                           type=\"hidden\"
                           name=\"avatar\"
                           value=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subuser"]) || array_key_exists("subuser", $context) ? $context["subuser"] : (function () { throw new RuntimeError('Variable "subuser" does not exist.', 29, $this->source); })()), "avatar", [], "any", false, false, false, 29), "html", null, true);
            echo "\"/>

                    <img class=\"avatar\"
                         src=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subuser"]) || array_key_exists("subuser", $context) ? $context["subuser"] : (function () { throw new RuntimeError('Variable "subuser" does not exist.', 32, $this->source); })()), "avatar", [], "any", false, false, false, 32), "html", null, true);
            echo "\"
                         alt=\"avatar\">
                </div>
                <div class=\"div3\">
                    <input class=\"name\"
                           type=\"text\"
                           name=\"name\"
                           placeholder=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subuser"]) || array_key_exists("subuser", $context) ? $context["subuser"] : (function () { throw new RuntimeError('Variable "subuser" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
            echo "\"/>
                    ";
            // line 40
            if (array_key_exists("errorRegex", $context)) {
                // line 41
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["errorRegex"]) || array_key_exists("errorRegex", $context) ? $context["errorRegex"] : (function () { throw new RuntimeError('Variable "errorRegex" does not exist.', 41, $this->source); })()), "html", null, true);
                echo "
                    ";
            }
            // line 43
            echo "                    <div class=\"selectMedium\">
                        <select>
                            <option value=\"0\">Polski</option>
                            <option value=\"1\">English</option>
                        </select>
                    </div>

                    <hr>
                </div>
                <div class=\"div4\">
                    Ustawienia grup wiekowych:<br>
                    <ul>
                        <li>
                            Wszystkie grupy wiekowe<br>
                        </li>
                    </ul>
                    Wyświetlaj w tym profilu tytuły z wszystkich kategorii wiekowych.<br><br>
                    <a class=\"profileButton\"> Edytuj </a>
                    <hr>
                </div>
                <div class=\"div5\">
                    Ustawienia automatycznego odtwarzania <br>
                    <input type=\"checkbox\">Automatycznie odtwarzaj kolejny odcinek na wszystkich urządzeniach.<br>
                    <input type=\"checkbox\">Automatycznie odtwarzaj podglądy podczas przeglądania na wszystkich
                    urządzeniach.
                </div>
                <div class=\"div6\">
                    <hr>
                    <div class=\"div7\">
                        <div>
                            <a class=\"profileButton\" onclick=\"document.getElementById('myForm').submit()\">Zapisz</a>
                        </div>
                        <div>
                            <a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manageUser");
            echo "\" class=\"profileButton\">
                                Anuluj
                            </a>
                        </div>
                        ";
            // line 80
            if (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 80, $this->source); })()) != 0)) {
                // line 81
                echo "                        <form method=\"post\">
                            <div class=\"deleteBtnContainer\">
                                <a class=\"deleteButton\" href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteSubuser", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 83, $this->source); })())]), "html", null, true);
                echo "\">
                                    Usuń
                                </a>
                            </div>
                        </form>
                        ";
            }
            // line 89
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 93
        echo "    </form>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 98
        echo "    <style>

        ";
        // line 103
        echo "
        select {
            font-family: \"Netflix Sans Black\", serif;
            text-align-last: left;
            align-content: center;
            margin-top: 15px;
            padding: 5px 30px 5px;
            border-radius: 4px;
            background-color: #222222;
            color: #FFF;
        }

        hr {
            border-bottom: 4px solid rgb(118, 118, 118);
        }

        @font-face {
            font-family: 'Netflix Sans Regular';
        }

        html {
            margin-left: -8px;
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            background-color: #141414;
        }
        h1 {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            color: white;
            text-align: center;
        }
        ul {
            list-style-type: none;
        }

        li {
            background-color: #333;
            width: 40%;
            height: 30%;
            padding: 7px 0;
            text-align: center;
            border-radius: 10px;
            color: white;
        }

        img.round {
            outline-offset: -4px;
            border: 0px solid;
            border-radius: 10px;
        }

        img.round:hover {
            color: #000;
            box-shadow: 0px 0px 0px 4px white;
            background-color: #FFF;
            background-image: none;
        }

        ";
        // line 167
        echo "
        .deleteBtnContainer {
            text-align: center;
            padding-bottom: 10px;
        }

        .profileButton {
            color: gray;
            padding: .5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid grey;
            text-decoration: none;
        }

        .deleteButton {
            color: red;
            padding: .5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid red;
            text-decoration: none;
        }

        .deleteButton:hover {
            color: red;
        }

        ";
        // line 200
        echo "
        .logo {
            margin-left: 25px;
            margin-top: 10px;
            align-items: center;
            vertical-align: middle;
            display: inline-block;
            height: 60%;
            justify-content: center;

        }

        .brandLogoWrapper {
            height: 68px;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, .7) 10%, rgba(0, 0, 0, 0));
        }

        #headerContainer {
            vertical-align: top;
            margin: -0.4em auto 2em auto;
            width: 100vw;
            height: 5vh;
        }
        ";
        // line 226
        echo "
        .parent {
            margin: auto;
            align-content: center;
            color: white;
            width: 60%;
            justify-items: center;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-template-rows: repeat(5, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .div1 {
            margin-top: auto;
            height: 130px;
            text-align: left;
            width: 100%;
            grid-area: 1 / 1 / 2 / 6;
        }

        .div2 {
            display: flex;
            justify-content: center;
            grid-area: 2 / 1 / 5 / 2;
        }

        .div3 {
            height: 100px;
            width: 100%;
            display: flex;
            flex-direction: column;
            float: left;
            margin-right: auto;
            align-content: flex-start;
            grid-area: 2 / 2 / 3 / 6;
        }

        .div4 {
            height: 140px;
            width: 100%;
            grid-area: 3 / 2 / 4 / 6;
        }

        .div5 {
            margin-top: 55px;
            text-align: left;
            width: 100%;
            grid-area: 4 / 2 / 5 / 6;
        }

        .div6 {
            display: flex;
            flex-direction: column;
            height: 100px;
            width: 100%;
            flex-shrink: 1;
            grid-area: 5 / 1 / 6 / 6;
        }

        .div7 {
            display: flex;
            gap: 20px;
        }

        .heading {
            font-size: 50px;
        }

        .name {
            color: white;
            background-color: #666;
            width: 40%;
        }

        .name::placeholder {
            color: white;
            opacity: 0.5;
        }

        .avatar {
            border-radius: 10px;
            height: 100px;
            width: 100px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 226,  354 => 200,  322 => 167,  259 => 103,  255 => 98,  245 => 97,  233 => 93,  227 => 89,  218 => 83,  214 => 81,  212 => 80,  205 => 76,  170 => 43,  164 => 41,  162 => 40,  158 => 39,  148 => 32,  142 => 29,  132 => 21,  130 => 20,  126 => 18,  116 => 17,  97 => 6,  84 => 13,  76 => 7,  74 => 6,  71 => 5,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/user.html.twig' %}


{% block head %}
<head>
    {% block title %}<title> Edytuj profil - Netflix</title>{% endblock %}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.ico') }}\">
</head>
{% endblock %}

{% block body %}
    <body>
    <form id=\"myForm\" method=\"post\">
        {% if subuser is defined %}
            <div class=\"parent\">
                <div class=\"div1\"><p class=\"heading\">Edytuj profil</p>
                    <hr>
                </div>
                <div class=\"div2\">
                    <input id=\"text\"
                           type=\"hidden\"
                           name=\"avatar\"
                           value=\"{{ subuser.avatar }}\"/>

                    <img class=\"avatar\"
                         src=\"{{ subuser.avatar }}\"
                         alt=\"avatar\">
                </div>
                <div class=\"div3\">
                    <input class=\"name\"
                           type=\"text\"
                           name=\"name\"
                           placeholder=\"{{ subuser.name }}\"/>
                    {% if errorRegex is defined %}
                        {{ errorRegex }}
                    {% endif %}
                    <div class=\"selectMedium\">
                        <select>
                            <option value=\"0\">Polski</option>
                            <option value=\"1\">English</option>
                        </select>
                    </div>

                    <hr>
                </div>
                <div class=\"div4\">
                    Ustawienia grup wiekowych:<br>
                    <ul>
                        <li>
                            Wszystkie grupy wiekowe<br>
                        </li>
                    </ul>
                    Wyświetlaj w tym profilu tytuły z wszystkich kategorii wiekowych.<br><br>
                    <a class=\"profileButton\"> Edytuj </a>
                    <hr>
                </div>
                <div class=\"div5\">
                    Ustawienia automatycznego odtwarzania <br>
                    <input type=\"checkbox\">Automatycznie odtwarzaj kolejny odcinek na wszystkich urządzeniach.<br>
                    <input type=\"checkbox\">Automatycznie odtwarzaj podglądy podczas przeglądania na wszystkich
                    urządzeniach.
                </div>
                <div class=\"div6\">
                    <hr>
                    <div class=\"div7\">
                        <div>
                            <a class=\"profileButton\" onclick=\"document.getElementById('myForm').submit()\">Zapisz</a>
                        </div>
                        <div>
                            <a href=\"{{ path('manageUser') }}\" class=\"profileButton\">
                                Anuluj
                            </a>
                        </div>
                        {% if id != 0 %}
                        <form method=\"post\">
                            <div class=\"deleteBtnContainer\">
                                <a class=\"deleteButton\" href=\"{{ path('deleteSubuser', {'id': id}) }}\">
                                    Usuń
                                </a>
                            </div>
                        </form>
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endif %}
    </form>
    </body>
{% endblock %}

{% block stylesheets %}
    <style>

        {#======================
                Global
        ======================#}

        select {
            font-family: \"Netflix Sans Black\", serif;
            text-align-last: left;
            align-content: center;
            margin-top: 15px;
            padding: 5px 30px 5px;
            border-radius: 4px;
            background-color: #222222;
            color: #FFF;
        }

        hr {
            border-bottom: 4px solid rgb(118, 118, 118);
        }

        @font-face {
            font-family: 'Netflix Sans Regular';
        }

        html {
            margin-left: -8px;
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            background-color: #141414;
        }
        h1 {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            color: white;
            text-align: center;
        }
        ul {
            list-style-type: none;
        }

        li {
            background-color: #333;
            width: 40%;
            height: 30%;
            padding: 7px 0;
            text-align: center;
            border-radius: 10px;
            color: white;
        }

        img.round {
            outline-offset: -4px;
            border: 0px solid;
            border-radius: 10px;
        }

        img.round:hover {
            color: #000;
            box-shadow: 0px 0px 0px 4px white;
            background-color: #FFF;
            background-image: none;
        }

        {#======================
                Buttons
        ======================#}

        .deleteBtnContainer {
            text-align: center;
            padding-bottom: 10px;
        }

        .profileButton {
            color: gray;
            padding: .5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid grey;
            text-decoration: none;
        }

        .deleteButton {
            color: red;
            padding: .5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid red;
            text-decoration: none;
        }

        .deleteButton:hover {
            color: red;
        }

        {#======================
                Header
        ======================#}

        .logo {
            margin-left: 25px;
            margin-top: 10px;
            align-items: center;
            vertical-align: middle;
            display: inline-block;
            height: 60%;
            justify-content: center;

        }

        .brandLogoWrapper {
            height: 68px;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, .7) 10%, rgba(0, 0, 0, 0));
        }

        #headerContainer {
            vertical-align: top;
            margin: -0.4em auto 2em auto;
            width: 100vw;
            height: 5vh;
        }
        {#======================
                Content
        ======================#}

        .parent {
            margin: auto;
            align-content: center;
            color: white;
            width: 60%;
            justify-items: center;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-template-rows: repeat(5, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .div1 {
            margin-top: auto;
            height: 130px;
            text-align: left;
            width: 100%;
            grid-area: 1 / 1 / 2 / 6;
        }

        .div2 {
            display: flex;
            justify-content: center;
            grid-area: 2 / 1 / 5 / 2;
        }

        .div3 {
            height: 100px;
            width: 100%;
            display: flex;
            flex-direction: column;
            float: left;
            margin-right: auto;
            align-content: flex-start;
            grid-area: 2 / 2 / 3 / 6;
        }

        .div4 {
            height: 140px;
            width: 100%;
            grid-area: 3 / 2 / 4 / 6;
        }

        .div5 {
            margin-top: 55px;
            text-align: left;
            width: 100%;
            grid-area: 4 / 2 / 5 / 6;
        }

        .div6 {
            display: flex;
            flex-direction: column;
            height: 100px;
            width: 100%;
            flex-shrink: 1;
            grid-area: 5 / 1 / 6 / 6;
        }

        .div7 {
            display: flex;
            gap: 20px;
        }

        .heading {
            font-size: 50px;
        }

        .name {
            color: white;
            background-color: #666;
            width: 40%;
        }

        .name::placeholder {
            color: white;
            opacity: 0.5;
        }

        .avatar {
            border-radius: 10px;
            height: 100px;
            width: 100px;
        }
    </style>
{% endblock %}

", "user/edit.html.twig", "/var/www/symfony_docker/templates/user/edit.html.twig");
    }
}
