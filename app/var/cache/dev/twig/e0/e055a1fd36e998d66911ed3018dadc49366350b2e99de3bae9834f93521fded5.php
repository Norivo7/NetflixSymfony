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
class __TwigTemplate_f657db6e792ceb00f6f35e67c601ae8221a6d1b027c3612c6aa063b89788a6b5 extends Template
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
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 134
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panel Administratora - Netflix";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <style>
        body{
            color: white;
            background-color: #141414;
        }
        .main {
            margin-top: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
            gap: 30px;
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
        .table{
            /*margin-top: 100px;*/
            width: 1000px;
            color: white;
            flex-direction: column;
        }
        .tbody{
            /*display: flex;*/
        }
        h1 {
            color: white;
            text-align: center;
        }
        ul{
            list-style-type: none;
        }
        li {
            padding: 20px;
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
            margin-top: 20px;
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
        h1{
            font-weight: 10;
            width: 100%;
            justify-content: center;
            vertical-align: center;
            position: absolute;
            top: 0;
            /*left:50%;*/
        }
        h2{
            color: white;
        }
        ul{
            padding: 0;
        }
        .wrapper {
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 130px;
            gap: 70px;
        }
        .adminOption {
            display: flex;
            flex-direction: column;
            width: 430px;
            color: gray;
            padding: 5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border-radius: 20px;
            border: 1px solid grey;
            text-decoration: none;
        }
        a {
            text-decoration: none;
            text-align: center;
        }
        .optionImage {
            font-size: 42px;
        }
        .deleteButton{
            color: red;
            padding: .5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid red;
            text-decoration: none;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 135
        echo "    <body>
        <div id=\"headerContainer\">
            <div class=\"brandLogoWrapper\">
                <a class=\"logo\" href=\"/\" target=\"_parent\">
                    <img class=\"logo\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogo.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
                </a>
            </div>
            <h1>Panel Administratora</h1>
        </div>
       ";
        // line 144
        $this->displayBlock('navigation', $context, $blocks);
        // line 166
        echo "            <div class=\"main\">
                ";
        // line 167
        $this->displayBlock('content', $context, $blocks);
        // line 170
        echo "            </div>

    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 144
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 145
        echo "
           <div class=\"wrapper\">
               <a href=\"admin/subuser\">
                   <div class=\"adminOption\"><i class=\"optionImage bi bi-person-lines-fill\"></i>Profile Użytkowników</div>
               </a>
               <a href=\"admin/subuser\">
                   <div class=\"adminOption\"><i class=\"optionImage bi bi-film\"></i>Filmy</div>
               </a>
               <a href=\"admin/subuser\">
                   <div class=\"adminOption\"><i class=\"optionImage bi bi-people-fill\"></i>Użytkownicy</div>
               </a>
               <a href=\"admin/subuser\">
                   <div class=\"adminOption\"><i class=\"optionImage bi bi-gear-fill\"></i>Ustawienia</div>
               </a>

               <a href=\"/\">
                   <div class=\"adminOption\"><i class=\"optionImage bi bi-x-lg\"></i>Wróć</div>
               </a>
           </div>

       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 168
        echo "                    ";
        // line 169
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  332 => 169,  330 => 168,  320 => 167,  290 => 145,  280 => 144,  266 => 170,  264 => 167,  261 => 166,  259 => 144,  251 => 139,  245 => 135,  235 => 134,  103 => 11,  93 => 10,  74 => 8,  64 => 134,  62 => 10,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <title>{% block title %}Panel Administratora - Netflix{% endblock %}</title>
</head>
{% block stylesheets %}
    <style>
        body{
            color: white;
            background-color: #141414;
        }
        .main {
            margin-top: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            align-content: center;
            justify-content: center;
            gap: 30px;
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
        .table{
            /*margin-top: 100px;*/
            width: 1000px;
            color: white;
            flex-direction: column;
        }
        .tbody{
            /*display: flex;*/
        }
        h1 {
            color: white;
            text-align: center;
        }
        ul{
            list-style-type: none;
        }
        li {
            padding: 20px;
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
            margin-top: 20px;
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
        h1{
            font-weight: 10;
            width: 100%;
            justify-content: center;
            vertical-align: center;
            position: absolute;
            top: 0;
            /*left:50%;*/
        }
        h2{
            color: white;
        }
        ul{
            padding: 0;
        }
        .wrapper {
            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 130px;
            gap: 70px;
        }
        .adminOption {
            display: flex;
            flex-direction: column;
            width: 430px;
            color: gray;
            padding: 5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border-radius: 20px;
            border: 1px solid grey;
            text-decoration: none;
        }
        a {
            text-decoration: none;
            text-align: center;
        }
        .optionImage {
            font-size: 42px;
        }
        .deleteButton{
            color: red;
            padding: .5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid red;
            text-decoration: none;
        }
    </style>
{% endblock %}
{% block body %}
    <body>
        <div id=\"headerContainer\">
            <div class=\"brandLogoWrapper\">
                <a class=\"logo\" href=\"/\" target=\"_parent\">
                    <img class=\"logo\" src=\"{{ asset('images/netflixLogo.svg.png') }}\" alt=\"av1\"/>
                </a>
            </div>
            <h1>Panel Administratora</h1>
        </div>
       {% block navigation %}

           <div class=\"wrapper\">
               <a href=\"admin/subuser\">
                   <div class=\"adminOption\"><i class=\"optionImage bi bi-person-lines-fill\"></i>Profile Użytkowników</div>
               </a>
               <a href=\"admin/subuser\">
                   <div class=\"adminOption\"><i class=\"optionImage bi bi-film\"></i>Filmy</div>
               </a>
               <a href=\"admin/subuser\">
                   <div class=\"adminOption\"><i class=\"optionImage bi bi-people-fill\"></i>Użytkownicy</div>
               </a>
               <a href=\"admin/subuser\">
                   <div class=\"adminOption\"><i class=\"optionImage bi bi-gear-fill\"></i>Ustawienia</div>
               </a>

               <a href=\"/\">
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
