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

/* admin/base.html.twig */
class __TwigTemplate_0dc16f44026ad8e04d897b0c8b3725d6f544cac813bce0e1d360f39d05355394 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'navigation' => [$this, 'block_navigation'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        echo "<head>
    <script src=\"https://unpkg.com/@popperjs/core@2/dist/umd/popper.js\"></script>
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 186
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panel administratora - Netflix";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <style>

        ";
        // line 17
        echo "
        body {
            color: white;
            background-color: #141414;
        }

        h1 {
            color: white;
            text-align: center;
        }

        ul {
            list-style-type: none;
        }

        li {
            padding: 20px;
        }

        h1 {
            font-weight: 10;
            width: 100%;
            justify-content: center;
            vertical-align: center;
            position: absolute;
            top: 0;
        }

        h2 {
            color: white;
        }

        ul {
            padding: 0;
        }
        a {
            text-decoration: none;
            text-align: center;
        }
        ";
        // line 59
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
        // line 85
        echo "
        .profileButton {
            color: gray;
            padding: .5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid grey;
            text-decoration: none;
        }

        #buttonDiv {
            align-items: center;
            text-align: center;
            width: 100%;
            margin-top: 20px;
        }

        .adminOption {
            display: flex;
            flex-direction: column;
            width: 430px;
            color: gray;
            padding: 5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            border-radius: 20px;
            border: 1px solid grey;
            text-decoration: none;
            position: relative;
            background-color: #7f5a83;
            background-image: linear-gradient(315deg, black 0%, #141414 74%);

        }

        .adminOption:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.4);
            -webkit-transition: none;
            -moz-transition: none;
            transition: none;
            border-radius: 19px;
        }

        .adminOption:hover:after {
            width: 100%;
            background-color: rgba(255, 255, 255, 0);
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
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
        ";
        // line 154
        echo "
        .main {
            margin-top: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
            gap: 30px;
        }

        .table {
            width: 1000px;
            color: white;
            flex-direction: column;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 130px;
            gap: 70px;
        }

        .optionImage {
            font-size: 42px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 186
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 187
        echo "    <body>
    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"";
        // line 190
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogo.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
        </div>
        <h1>Panel Administratora</h1>
    </div>
    ";
        // line 196
        $this->displayBlock('navigation', $context, $blocks);
        // line 218
        echo "    <div class=\"main\">
        ";
        // line 219
        $this->displayBlock('content', $context, $blocks);
        // line 222
        echo "    </div>

    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 196
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 197
        echo "
        <div class=\"wrapper\">
            <a href=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subuser_crud_index");
        echo "\">
                <div class=\"adminOption\"><i class=\"optionImage bi bi-person-lines-fill\"></i>Profile Użytkowników</div>
            </a>
            <a href=\"";
        // line 202
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_movie_crud_index");
        echo "\">
                <div class=\"adminOption\"><i class=\"optionImage bi bi-film\"></i>Filmy</div>
            </a>
            <a href=\"";
        // line 205
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_crud_index");
        echo "\">
                <div class=\"adminOption\"><i class=\"optionImage bi bi-people-fill\"></i>Użytkownicy</div>
            </a>
            <a href=\"";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subuser_crud_index");
        echo "\">
                <div class=\"adminOption\"><i class=\"optionImage bi bi-gear-fill\"></i>Ustawienia</div>
            </a>

            <a href=\"";
        // line 212
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                <div class=\"adminOption\"><i class=\"optionImage bi bi-x-lg\"></i>Wróć</div>
            </a>
        </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 219
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 220
        echo "            ";
        // line 221
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  398 => 221,  396 => 220,  386 => 219,  370 => 212,  363 => 208,  357 => 205,  351 => 202,  345 => 199,  341 => 197,  331 => 196,  317 => 222,  315 => 219,  312 => 218,  310 => 196,  302 => 191,  298 => 190,  293 => 187,  283 => 186,  242 => 154,  174 => 85,  149 => 59,  108 => 17,  104 => 12,  94 => 11,  75 => 9,  65 => 186,  63 => 11,  58 => 9,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <script src=\"https://unpkg.com/@popperjs/core@2/dist/umd/popper.js\"></script>
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <title>{% block title %}Panel administratora - Netflix{% endblock %}</title>
</head>
{% block stylesheets %}
    <style>

        {#======================
                 Global
        ======================#}

        body {
            color: white;
            background-color: #141414;
        }

        h1 {
            color: white;
            text-align: center;
        }

        ul {
            list-style-type: none;
        }

        li {
            padding: 20px;
        }

        h1 {
            font-weight: 10;
            width: 100%;
            justify-content: center;
            vertical-align: center;
            position: absolute;
            top: 0;
        }

        h2 {
            color: white;
        }

        ul {
            padding: 0;
        }
        a {
            text-decoration: none;
            text-align: center;
        }
        {#======================
                Navigation
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
                Buttons
        ======================#}

        .profileButton {
            color: gray;
            padding: .5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid grey;
            text-decoration: none;
        }

        #buttonDiv {
            align-items: center;
            text-align: center;
            width: 100%;
            margin-top: 20px;
        }

        .adminOption {
            display: flex;
            flex-direction: column;
            width: 430px;
            color: gray;
            padding: 5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            border-radius: 20px;
            border: 1px solid grey;
            text-decoration: none;
            position: relative;
            background-color: #7f5a83;
            background-image: linear-gradient(315deg, black 0%, #141414 74%);

        }

        .adminOption:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.4);
            -webkit-transition: none;
            -moz-transition: none;
            transition: none;
            border-radius: 19px;
        }

        .adminOption:hover:after {
            width: 100%;
            background-color: rgba(255, 255, 255, 0);
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
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
        {#======================
                Content
        ======================#}

        .main {
            margin-top: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
            gap: 30px;
        }

        .table {
            width: 1000px;
            color: white;
            flex-direction: column;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 130px;
            gap: 70px;
        }

        .optionImage {
            font-size: 42px;
        }
    </style>
{% endblock %}
{% block body %}
    <body>
    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"{{ path('home') }}\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogo.svg.png') }}\" alt=\"av1\"/>
            </a>
        </div>
        <h1>Panel Administratora</h1>
    </div>
    {% block navigation %}

        <div class=\"wrapper\">
            <a href=\"{{ path('subuser_crud_index') }}\">
                <div class=\"adminOption\"><i class=\"optionImage bi bi-person-lines-fill\"></i>Profile Użytkowników</div>
            </a>
            <a href=\"{{ path('app_movie_crud_index') }}\">
                <div class=\"adminOption\"><i class=\"optionImage bi bi-film\"></i>Filmy</div>
            </a>
            <a href=\"{{ path('app_user_crud_index') }}\">
                <div class=\"adminOption\"><i class=\"optionImage bi bi-people-fill\"></i>Użytkownicy</div>
            </a>
            <a href=\"{{ path('subuser_crud_index') }}\">
                <div class=\"adminOption\"><i class=\"optionImage bi bi-gear-fill\"></i>Ustawienia</div>
            </a>

            <a href=\"{{ path('home') }}\">
                <div class=\"adminOption\"><i class=\"optionImage bi bi-x-lg\"></i>Wróć</div>
            </a>
        </div>

    {% endblock %}
    <div class=\"main\">
        {% block content %}
            {#  render innych templatek #}
        {% endblock %}
    </div>

    </body>

{% endblock %}
", "admin/base.html.twig", "/var/www/symfony_docker/templates/admin/base.html.twig");
    }
}
