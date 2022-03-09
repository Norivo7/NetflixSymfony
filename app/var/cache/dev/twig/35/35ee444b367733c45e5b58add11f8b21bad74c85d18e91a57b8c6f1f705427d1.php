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

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "<head>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <body>
    <form id=\"myForm\" method=\"post\">
        ";
        // line 16
        echo "
        ";
        // line 17
        if (array_key_exists("subuser", $context)) {
            // line 18
            echo "            <div class=\"parent\">
                <div class=\"div1\"><p class=\"heading\">Edytuj profil</p>
                    <hr>
                </div>
                <div class=\"div2\">
                    <input id=\"text\"
                           type=\"hidden\"
                           name=\"avatar\"
                           value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subuser"]) || array_key_exists("subuser", $context) ? $context["subuser"] : (function () { throw new RuntimeError('Variable "subuser" does not exist.', 26, $this->source); })()), "avatar", [], "any", false, false, false, 26), "html", null, true);
            echo "\"/>

                    <img class=\"avatar\"
                         src=\"";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subuser"]) || array_key_exists("subuser", $context) ? $context["subuser"] : (function () { throw new RuntimeError('Variable "subuser" does not exist.', 29, $this->source); })()), "avatar", [], "any", false, false, false, 29), "html", null, true);
            echo "\"
                         alt=\"avatar\">
                </div>
                <div class=\"div3\">
";
            // line 38
            echo "                    <input class=\"name\"
                           type=\"text\"
                           name=\"name\"
                           placeholder=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subuser"]) || array_key_exists("subuser", $context) ? $context["subuser"] : (function () { throw new RuntimeError('Variable "subuser" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), "html", null, true);
            echo "\"/>
                    ";
            // line 42
            if (array_key_exists("errorRegex", $context)) {
                // line 43
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["errorRegex"]) || array_key_exists("errorRegex", $context) ? $context["errorRegex"] : (function () { throw new RuntimeError('Variable "errorRegex" does not exist.', 43, $this->source); })()), "html", null, true);
                echo "
                    ";
            }
            // line 45
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
                            <a class=\"profileButton\" href=\"#\" onclick=\"document.getElementById('myForm').submit()\">Zapisz</a>
                            ";
            // line 77
            echo "                            ";
            // line 78
            echo "                            ";
            // line 79
            echo "                        </div>
                        <div>

                            <a href=\"/manageUser\" class=\"profileButton\">
                                Anuluj
                            </a>

                        </div>
                        ";
            // line 87
            if (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 87, $this->source); })()) != 0)) {
                // line 88
                echo "                        <form method=\"post\">
                            <div class=\"deleteBtnContainer\">
                                <a class=\"deleteButton\" href=\"/manageUser/delete/";
                // line 90
                echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 90, $this->source); })()), "html", null, true);
                echo "\">
                                    Usuń
                                </a>
                            </div>
                        </form>
                        ";
            }
            // line 96
            echo "                    </div>
                </div>


            </div>

            ";
            // line 103
            echo "            ";
            // line 104
            echo "            ";
            // line 105
            echo "            ";
            // line 106
            echo "        ";
        }
        // line 107
        echo "        ";
        // line 108
        echo "    </form>

    </body>
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
        .deleteBtnContainer {
            text-align: center;
            padding-bottom: 10px;
        }

        .selectMedium {
            margin-right: 0;
        }

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

        .main {
            margin: 0 auto;
            display: flex;
            height: 90%;
            align-items: center;
            /*vertical-align: center;*/
            justify-content: space-evenly;
            /*width: 100%;*/
        }

        h1 {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            color: white;
            text-align: center;
        }

        /*.profile:hover {*/
        /*    color:#000;*/
        /*    background-color:#FFF;*/
        /*    background-image:none;*/

        /*}*/
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

        ul {
            list-style-type: none;
        }

        li {

            background-color: #333;
            width: 40%;
            height: 30%;
            padding: 7px 0;
            text-align: center;
            /*border: 2px solid red;*/
            border-radius: 10px;
            color: white;
            /*padding: 20px;*/

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

        .brandLogoWrapper {

        }

        .logo {
            margin-left: 25px;
            margin-top: 10px;
            align-items: center;
            vertical-align: middle;
            display: inline-block;
            height: 60%;
            justify-content: center;

        }

        #buttonDiv {
            align-items: center;
            text-align: center;
            width: 100%;

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

        .parent {
            margin: auto;
            align-content: center;
            color: white;
            /*border: 2px solid red;*/
            width: 60%;
            justify-items: center;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-template-rows: repeat(5, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .div1 {
            /*margin-right: auto;*/
            margin-top: auto;
            height: 130px;
            text-align: left;
            width: 100%;
            grid-area: 1 / 1 / 2 / 6;
        }

        .div2 {
            display: flex;
            justify-content: center;
            /*border: 2px solid green;*/
            grid-area: 2 / 1 / 5 / 2;
        }

        .div3 {
            height: 100px;
            width: 100%;
            /*padding-left: 20px;*/
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
            /*width: 1000px;*/
            flex-shrink: 1;
            grid-area: 5 / 1 / 6 / 6;
        }

        .div7 {
            display: flex;
            gap: 20px;
            /*height: 100%;*/
            /*margin-bottom: 100px;*/
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
        return array (  251 => 114,  241 => 113,  228 => 108,  226 => 107,  223 => 106,  221 => 105,  219 => 104,  217 => 103,  209 => 96,  200 => 90,  196 => 88,  194 => 87,  184 => 79,  182 => 78,  180 => 77,  147 => 45,  141 => 43,  139 => 42,  135 => 41,  130 => 38,  123 => 29,  117 => 26,  107 => 18,  105 => 17,  102 => 16,  98 => 13,  88 => 12,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/user.html.twig' %}
{% block head %}
<head>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">

    {% endblock %}
    {% block body %}
    <body>
    <form id=\"myForm\" method=\"post\">
        {#    <div class=\"main\"> #}

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
{#                    <input class=\"name\"#}
{#                           type=\"hidden\"#}
{#                           name=\"name\"#}
{#                           src=\"{{ subuser.name }}\"#}
{#                           placeholder=\"{{ subuser.name }}\"/>#}
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
                            <a class=\"profileButton\" href=\"#\" onclick=\"document.getElementById('myForm').submit()\">Zapisz</a>
                            {#                                <button type=\"submit\">Zapisz #}
                            {#                                    <a href=\"/manageUser/update/{{ id }}\" class=\"profileButton\">Zapisz</a> #}
                            {#                                </button> #}
                        </div>
                        <div>

                            <a href=\"/manageUser\" class=\"profileButton\">
                                Anuluj
                            </a>

                        </div>
                        {% if id != 0 %}
                        <form method=\"post\">
                            <div class=\"deleteBtnContainer\">
                                <a class=\"deleteButton\" href=\"/manageUser/delete/{{ id }}\">
                                    Usuń
                                </a>
                            </div>
                        </form>
                        {% endif %}
                    </div>
                </div>


            </div>

            {#        {% else %} #}
            {#            <p> #}
            {#                     {{ error }} #}
            {#            </p> #}
        {% endif %}
        {#    </div> #}
    </form>

    </body>
{% endblock %}

{% block stylesheets %}
    <style>
        .deleteBtnContainer {
            text-align: center;
            padding-bottom: 10px;
        }

        .selectMedium {
            margin-right: 0;
        }

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

        .main {
            margin: 0 auto;
            display: flex;
            height: 90%;
            align-items: center;
            /*vertical-align: center;*/
            justify-content: space-evenly;
            /*width: 100%;*/
        }

        h1 {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            color: white;
            text-align: center;
        }

        /*.profile:hover {*/
        /*    color:#000;*/
        /*    background-color:#FFF;*/
        /*    background-image:none;*/

        /*}*/
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

        ul {
            list-style-type: none;
        }

        li {

            background-color: #333;
            width: 40%;
            height: 30%;
            padding: 7px 0;
            text-align: center;
            /*border: 2px solid red;*/
            border-radius: 10px;
            color: white;
            /*padding: 20px;*/

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

        .brandLogoWrapper {

        }

        .logo {
            margin-left: 25px;
            margin-top: 10px;
            align-items: center;
            vertical-align: middle;
            display: inline-block;
            height: 60%;
            justify-content: center;

        }

        #buttonDiv {
            align-items: center;
            text-align: center;
            width: 100%;

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

        .parent {
            margin: auto;
            align-content: center;
            color: white;
            /*border: 2px solid red;*/
            width: 60%;
            justify-items: center;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            grid-template-rows: repeat(5, 1fr);
            grid-column-gap: 0px;
            grid-row-gap: 0px;
        }

        .div1 {
            /*margin-right: auto;*/
            margin-top: auto;
            height: 130px;
            text-align: left;
            width: 100%;
            grid-area: 1 / 1 / 2 / 6;
        }

        .div2 {
            display: flex;
            justify-content: center;
            /*border: 2px solid green;*/
            grid-area: 2 / 1 / 5 / 2;
        }

        .div3 {
            height: 100px;
            width: 100%;
            /*padding-left: 20px;*/
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
            /*width: 1000px;*/
            flex-shrink: 1;
            grid-area: 5 / 1 / 6 / 6;
        }

        .div7 {
            display: flex;
            gap: 20px;
            /*height: 100%;*/
            /*margin-bottom: 100px;*/
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
