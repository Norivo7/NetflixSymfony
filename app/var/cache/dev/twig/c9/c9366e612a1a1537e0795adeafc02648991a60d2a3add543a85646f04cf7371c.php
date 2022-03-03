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
class __TwigTemplate_e2741a875b9d916aaa66e9b2c14d0f6b9f8baa3b4da9bfb7e5a4ed8bf0e72c6e extends Template
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
        echo "<body>
";
        // line 15
        echo "        ";
        if (array_key_exists("subuser", $context)) {
            // line 16
            echo "            <div class=\"parent\">
                <div class=\"div1\"><p class=\"heading\">Edytuj profil</p>
                    <hr>
                    </div>

                <div class=\"div2\">
                    <img class=\"avatar\" src=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subuser"]) || array_key_exists("subuser", $context) ? $context["subuser"] : (function () { throw new RuntimeError('Variable "subuser" does not exist.', 22, $this->source); })()), "avatar", [], "any", false, false, false, 22), "html", null, true);
            echo "\" alt=\"avatar\">
                </div>
                <div class=\"div3\">
                    <input class=\"name\" type=\"name\" placeholder=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subuser"]) || array_key_exists("subuser", $context) ? $context["subuser"] : (function () { throw new RuntimeError('Variable "subuser" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
            echo "\"/>
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
                    <input type=\"checkbox\">Automatycznie odtwarzaj podglądy podczas przeglądania na wszystkich urządzeniach.
                </div>
                <div class=\"div6\">
                    <hr>
                    <a class=\"profileButton\">Zapisz</a>
                    <a href=\"/manageUser\" class=\"profileButton\">Anuluj</a>
                </div>
            </div>

        ";
        } else {
            // line 58
            echo "        <p> ";
            echo twig_escape_filter($this->env, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 58, $this->source); })()), "html", null, true);
            echo "</p>
        ";
        }
        // line 61
        echo "</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 65
        echo "    <style>
        .selectMedium{
            margin-right: 0;
        }
        select {
            font-family: \"Netflix Sans Black\", serif;
            text-align-last:left;
            align-content: center;
            margin-top: 15px;
            padding: 5px 30px 5px ;
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
        body{
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
        ul{
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
            color:#000;
            box-shadow: 0px 0px 0px 4px white;
            background-color:#FFF;
            background-image:none;
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
            background-image: linear-gradient(to bottom,rgba(0,0,0,.7) 10%,rgba(0,0,0,0));
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
            width:  60%;
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
            width: 100%;
            /*padding: 30px;*/
            text-align: left;
            grid-area: 5 / 1 / 6 / 6;
        }
        .heading{
            font-size: 50px;
        }
        .name {
            color: white;
            background-color: #666;
            width: 40%;
        }
        .name::placeholder {
            color: white;
        }
        .avatar{
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
        return array (  181 => 65,  171 => 64,  160 => 61,  154 => 58,  118 => 25,  112 => 22,  104 => 16,  101 => 15,  98 => 13,  88 => 12,  70 => 3,  60 => 2,  37 => 1,);
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
{#    <div class=\"main\">#}
        {% if subuser is defined %}
            <div class=\"parent\">
                <div class=\"div1\"><p class=\"heading\">Edytuj profil</p>
                    <hr>
                    </div>

                <div class=\"div2\">
                    <img class=\"avatar\" src=\"{{ subuser.avatar }}\" alt=\"avatar\">
                </div>
                <div class=\"div3\">
                    <input class=\"name\" type=\"name\" placeholder=\"{{ subuser.name }}\"/>
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
                    <input type=\"checkbox\">Automatycznie odtwarzaj podglądy podczas przeglądania na wszystkich urządzeniach.
                </div>
                <div class=\"div6\">
                    <hr>
                    <a class=\"profileButton\">Zapisz</a>
                    <a href=\"/manageUser\" class=\"profileButton\">Anuluj</a>
                </div>
            </div>

        {% else %}
        <p> {{ error }}</p>
        {% endif %}
{#    </div>#}
</body>
{% endblock %}

{% block stylesheets %}
    <style>
        .selectMedium{
            margin-right: 0;
        }
        select {
            font-family: \"Netflix Sans Black\", serif;
            text-align-last:left;
            align-content: center;
            margin-top: 15px;
            padding: 5px 30px 5px ;
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
        body{
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
        ul{
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
            color:#000;
            box-shadow: 0px 0px 0px 4px white;
            background-color:#FFF;
            background-image:none;
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
            background-image: linear-gradient(to bottom,rgba(0,0,0,.7) 10%,rgba(0,0,0,0));
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
            width:  60%;
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
            width: 100%;
            /*padding: 30px;*/
            text-align: left;
            grid-area: 5 / 1 / 6 / 6;
        }
        .heading{
            font-size: 50px;
        }
        .name {
            color: white;
            background-color: #666;
            width: 40%;
        }
        .name::placeholder {
            color: white;
        }
        .avatar{
            border-radius: 10px;
            height: 100px;
            width: 100px;
        }
    </style>
{% endblock %}

", "user/edit.html.twig", "/var/www/symfony_docker/templates/user/edit.html.twig");
    }
}
