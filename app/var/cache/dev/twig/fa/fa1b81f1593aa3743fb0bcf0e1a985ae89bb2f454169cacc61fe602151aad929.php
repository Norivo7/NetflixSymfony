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

/* movies/index.html.twig */
class __TwigTemplate_ff93b75198efdb255c8fe90b52793747cd0a8e9fed8b252489bfc12fa3b72d18 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('navigation', $context, $blocks);
        // line 313
        echo "
";
        // line 314
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "    <head>
        ";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\"
                integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
                integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>

        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Strona główna - Netflix</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    <style>
        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            background-color: black;
            color: white;
        }

        h5 {
            font-size: 20px;
        }

        #main {
            display: flex;
        }

        a.active {
            font-weight: 900;

        }

        .navbar {
            padding-top: 0px;
            overflow: hidden;
            width: 100%;
            gap: 25px;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            flex-wrap: nowrap;

        }

        .navbar a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            /*padding: 14px 16px;*/
            text-decoration: none;
            font-size: 14px;
        }

        .navbar_end {
            gap: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
        }

        .navbar a:hover {
            opacity: 0.8;
        }

        .logo {
            /*margin-top: -3px;*/
        }

        #search {
            display: flex;
            float: right;
        }

        a.right {
            float: right;
            padding: 13px 0;
            align-items: center;
        }

        .box {
            margin: 20px;
            display: flex;
            flex-wrap: wrap;
            grid-gap: 25px;
            /*grid-template-columns: repeat(6, calc(1% - 40px));*/
            grid-template-columns:
                repeat(6, minmax(270px, 1fr));
            /*grid-template-rows: minmax(150px, 1fr);*/
        }

        .box a {
            transition: transform 0.3s;
        }

        .box a:hover {
            transition: transform 0.3s;
            -ms-transform: scale(1.3);
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        .box img {
            border-radius: 2px;
            max-width: 270px;
            width: auto;
            height: auto;
        }

        #search {
            margin-top: 12px;
        }

        #main-container {
            margin-left: 30px;
        }

        .searchInput {
            font-family: var(--bs-body-font-family), bootstrap-icons;
        }

        i {
            font-size: 23px;
            margin-top: 8px;
            margin-right: 8px;
        }

        .logo {
            height: 31px;
            margin-right: 15px;
        }

        .brandLogoWrapper {
            margin-left: 30px;
            width: 113px;
            justify-content: center;
        }

        .userAvatar {
            width: 30px;
            border-radius: 4px;
            margin-right: 25px;
        }

        .dropdown {
            width: 6%;
            left:0;
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            left:0;
            margin-top: 55px;
            display: none;
            position: absolute;
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.6);
            border: 3px solid white;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        .dropdown-content a {
            margin-bottom: 10px;
            opacity: 100%;
            font-size: 13px;
            padding-bottom: 10px;
            color: white;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .dropdown-content a:hover {
            text-decoration: underline;
        }

        .dropdown:hover .dropdown-content {
            margin-right: 1200px;
            flex-direction: column;
            display: flex;
            min-height: 100px;
        }
        .navbarWrapper{
            display: flex;
            background: rgb(0,0,0);
            background: linear-gradient(360deg, rgba(0,0,0,1) 0%, rgba(22,15,15,1) 35%, rgba(45,48,50,1) 100%);
        }
        .form-control{

            width: 80%;
            border: none;
            border-radius: 5px;
            padding: 0;
            margin-left: 10px;
        }
        .profile {
            line-height: 40px;
            align-content: center;
            font-size:12px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-right: 10px;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 219
        echo "    <div class=\"navbarWrapper\">
    <div class=\"navbar\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
        </div>
        <a ";
        // line 226
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "request", [], "any", false, false, false, 226), "attributes", [], "any", false, false, false, 226), "get", [0 => "_route"], "method", false, false, false, 226), "browse")) {
            // line 227
            echo " class=\"active\" ";
        }
        // line 228
        echo "                href=\"/browse\">Strona główna</a>
        <a ";
        // line 229
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "request", [], "any", false, false, false, 229), "attributes", [], "any", false, false, false, 229), "get", [0 => "_route"], "method", false, false, false, 229), "shows")) {
            // line 230
            echo " class=\"active\" ";
        }
        // line 231
        echo "                href=\"/shows\">Seriale i programy</a>
        <a ";
        // line 232
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 232, $this->source); })()), "request", [], "any", false, false, false, 232), "attributes", [], "any", false, false, false, 232), "get", [0 => "_route"], "method", false, false, false, 232), "movies")) {
            // line 233
            echo " class=\"active\" ";
        }
        // line 234
        echo "                href=\"/movies\">Filmy</a>
        <a ";
        // line 235
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "request", [], "any", false, false, false, 235), "attributes", [], "any", false, false, false, 235), "get", [0 => "_route"], "method", false, false, false, 235), "new")) {
            // line 236
            echo " class=\"active\" ";
        }
        // line 237
        echo "                href=\"/new\">Nowe i popularne</a>
        <a ";
        // line 238
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "request", [], "any", false, false, false, 238), "attributes", [], "any", false, false, false, 238), "get", [0 => "_route"], "method", false, false, false, 238), "myList")) {
            // line 239
            echo " class=\"active\" ";
        }
        // line 240
        echo "                href=\"/myList\">Moja lista</a>
        ";
        // line 241
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 242
            echo "            <a href=\"/admin\" style=\"color: red\">Przejdź do panelu administratora</a>
        ";
        }
        // line 244
        echo "
        <div class=\"navbar_end\">
            <div id=\"search\">
                <form method=\"GET\" action=\"";
        // line 247
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">
                    <input
                            name=\"v\"
                            type=\"search\"
                            class=\"searchInput\"
                            placeholder=\"&#xF52A;  Wyszukaj..\"
                            aria-label=\"Search\"
                    >
                </form>
            </div>
            <a class=\"right\" href=\"/notif\">
                <i style=\"padding: 1px;margin-left: 10px\" class=\"bi bi-bell-fill\"></i>
            </a>
        </div>

    </div>
    <div class=\"dropdown\">
        <a class=\"right dropbtn\" href=\"/profile\">
            <img class=\"userAvatar\" src=\"";
        // line 265
        echo twig_escape_filter($this->env, (isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 265, $this->source); })()), "html", null, true);
        echo "\" alt=\"avatar\">
            <div class=\"dropdown-content\">
                ";
        // line 267
        $context["profile_id"] = 0;
        // line 268
        echo "
                    ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 269, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 270
            echo "                        <form method=\"POST\">
                            <div class=\"profile\">
                            <a>
                                <input
                                        class=\"form-control\"
                                        id=\"text\"
                                        type=\"hidden\"
                                        name=\"id\"
                                        value=\"";
            // line 278
            echo twig_escape_filter($this->env, (isset($context["profile_id"]) || array_key_exists("profile_id", $context) ? $context["profile_id"] : (function () { throw new RuntimeError('Variable "profile_id" does not exist.', 278, $this->source); })()), "html", null, true);
            echo "\"
                                >
";
            // line 281
            echo "                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"image\"
                                            name=\"id\"
                                            value=\"";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "avatar", [], "any", false, false, false, 286), "html", null, true);
            echo "\"
                                            src=\"";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "avatar", [], "any", false, false, false, 287), "html", null, true);
            echo "\"
                                    >

";
            // line 291
            echo "
";
            // line 293
            echo "
                            </a>
                                <p style=\"margin-left: 5px;\">
                                ";
            // line 296
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", [], "any", false, false, false, 296), "html", null, true);
            echo "
                                </p>
                            </div>
                        </form>
                    ";
            // line 300
            $context["profile_id"] = ((isset($context["profile_id"]) || array_key_exists("profile_id", $context) ? $context["profile_id"] : (function () { throw new RuntimeError('Variable "profile_id" does not exist.', 300, $this->source); })()) + 1);
            // line 301
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "                <a href=\"/manageUser\">Zarządzaj profilami</a>
                <a href=\"/profile\">Konto</a>
                <a href=\"#\">Centrum Pomocy</a>
                <a href=\"/logout\">Wyloguj się</a>


            </div>
        </a>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 314
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 315
        echo "<body>
    <section id=\"main-container\">
        <h5 id=\"serials\" class=\"title-home\">Filmy</h5>
        <div class=\"box\">
            ";
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 319, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 320
            echo "                <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 320), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 320), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 320), "html", null, true);
            echo "\"></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 322
        echo "
        </div>
        <h5 id=\"serials\" class=\"title-home\">Seriale</h5>
        <div class=\"box\">
            ";
        // line 326
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shows"]) || array_key_exists("shows", $context) ? $context["shows"] : (function () { throw new RuntimeError('Variable "shows" does not exist.', 326, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 327
            echo "                <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 327), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 327), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 327), "html", null, true);
            echo "\"></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        echo "        </div>

        <h5 id=\"movies\" class=\"title-home\">Tylko na Netflixie</h5>
        <div class=\"box\">
            ";
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["originals"]) || array_key_exists("originals", $context) ? $context["originals"] : (function () { throw new RuntimeError('Variable "originals" does not exist.', 333, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 334
            echo "                <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 334), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 334), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 334), "html", null, true);
            echo "\"></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "        </div>

";
        // line 344
        echo "
    </section>

    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "movies/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  612 => 344,  608 => 336,  595 => 334,  591 => 333,  585 => 329,  572 => 327,  568 => 326,  562 => 322,  549 => 320,  545 => 319,  539 => 315,  529 => 314,  509 => 302,  503 => 301,  501 => 300,  494 => 296,  489 => 293,  486 => 291,  480 => 287,  476 => 286,  469 => 281,  464 => 278,  454 => 270,  450 => 269,  447 => 268,  445 => 267,  440 => 265,  419 => 247,  414 => 244,  410 => 242,  408 => 241,  405 => 240,  402 => 239,  400 => 238,  397 => 237,  394 => 236,  392 => 235,  389 => 234,  386 => 233,  384 => 232,  381 => 231,  378 => 230,  376 => 229,  373 => 228,  370 => 227,  368 => 226,  362 => 223,  356 => 219,  346 => 218,  140 => 20,  130 => 19,  111 => 3,  88 => 4,  86 => 3,  83 => 2,  73 => 1,  63 => 314,  60 => 313,  58 => 218,  55 => 217,  53 => 19,  50 => 18,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <head>
        {% block title %}<title>Strona główna - Netflix</title>{% endblock %}
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\"
                integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
                integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>

        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    </head>
{% endblock %}

{% block stylesheets %}
    <style>
        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            background-color: black;
            color: white;
        }

        h5 {
            font-size: 20px;
        }

        #main {
            display: flex;
        }

        a.active {
            font-weight: 900;

        }

        .navbar {
            padding-top: 0px;
            overflow: hidden;
            width: 100%;
            gap: 25px;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            flex-wrap: nowrap;

        }

        .navbar a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            /*padding: 14px 16px;*/
            text-decoration: none;
            font-size: 14px;
        }

        .navbar_end {
            gap: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
        }

        .navbar a:hover {
            opacity: 0.8;
        }

        .logo {
            /*margin-top: -3px;*/
        }

        #search {
            display: flex;
            float: right;
        }

        a.right {
            float: right;
            padding: 13px 0;
            align-items: center;
        }

        .box {
            margin: 20px;
            display: flex;
            flex-wrap: wrap;
            grid-gap: 25px;
            /*grid-template-columns: repeat(6, calc(1% - 40px));*/
            grid-template-columns:
                repeat(6, minmax(270px, 1fr));
            /*grid-template-rows: minmax(150px, 1fr);*/
        }

        .box a {
            transition: transform 0.3s;
        }

        .box a:hover {
            transition: transform 0.3s;
            -ms-transform: scale(1.3);
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        .box img {
            border-radius: 2px;
            max-width: 270px;
            width: auto;
            height: auto;
        }

        #search {
            margin-top: 12px;
        }

        #main-container {
            margin-left: 30px;
        }

        .searchInput {
            font-family: var(--bs-body-font-family), bootstrap-icons;
        }

        i {
            font-size: 23px;
            margin-top: 8px;
            margin-right: 8px;
        }

        .logo {
            height: 31px;
            margin-right: 15px;
        }

        .brandLogoWrapper {
            margin-left: 30px;
            width: 113px;
            justify-content: center;
        }

        .userAvatar {
            width: 30px;
            border-radius: 4px;
            margin-right: 25px;
        }

        .dropdown {
            width: 6%;
            left:0;
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            left:0;
            margin-top: 55px;
            display: none;
            position: absolute;
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.6);
            border: 3px solid white;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        }

        .dropdown-content a {
            margin-bottom: 10px;
            opacity: 100%;
            font-size: 13px;
            padding-bottom: 10px;
            color: white;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .dropdown-content a:hover {
            text-decoration: underline;
        }

        .dropdown:hover .dropdown-content {
            margin-right: 1200px;
            flex-direction: column;
            display: flex;
            min-height: 100px;
        }
        .navbarWrapper{
            display: flex;
            background: rgb(0,0,0);
            background: linear-gradient(360deg, rgba(0,0,0,1) 0%, rgba(22,15,15,1) 35%, rgba(45,48,50,1) 100%);
        }
        .form-control{

            width: 80%;
            border: none;
            border-radius: 5px;
            padding: 0;
            margin-left: 10px;
        }
        .profile {
            line-height: 40px;
            align-content: center;
            font-size:12px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-right: 10px;
        }

    </style>
{% endblock %}

{% block navigation %}
    <div class=\"navbarWrapper\">
    <div class=\"navbar\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogoSmall.svg.png') }}\" alt=\"av1\"/>
            </a>
        </div>
        <a {% if app.request.attributes.get('_route') in
            'browse' %} class=\"active\" {% endif %}
                href=\"/browse\">Strona główna</a>
        <a {% if app.request.attributes.get('_route') in
            'shows' %} class=\"active\" {% endif %}
                href=\"/shows\">Seriale i programy</a>
        <a {% if app.request.attributes.get('_route') in
            'movies' %} class=\"active\" {% endif %}
                href=\"/movies\">Filmy</a>
        <a {% if app.request.attributes.get('_route') in
            'new' %} class=\"active\" {% endif %}
                href=\"/new\">Nowe i popularne</a>
        <a {% if app.request.attributes.get('_route') in
            'myList' %} class=\"active\" {% endif %}
                href=\"/myList\">Moja lista</a>
        {% if is_granted('ROLE_ADMIN') %}
            <a href=\"/admin\" style=\"color: red\">Przejdź do panelu administratora</a>
        {% endif %}

        <div class=\"navbar_end\">
            <div id=\"search\">
                <form method=\"GET\" action=\"{{ path('search') }}\">
                    <input
                            name=\"v\"
                            type=\"search\"
                            class=\"searchInput\"
                            placeholder=\"&#xF52A;  Wyszukaj..\"
                            aria-label=\"Search\"
                    >
                </form>
            </div>
            <a class=\"right\" href=\"/notif\">
                <i style=\"padding: 1px;margin-left: 10px\" class=\"bi bi-bell-fill\"></i>
            </a>
        </div>

    </div>
    <div class=\"dropdown\">
        <a class=\"right dropbtn\" href=\"/profile\">
            <img class=\"userAvatar\" src=\"{{ userAvatar }}\" alt=\"avatar\">
            <div class=\"dropdown-content\">
                {% set profile_id = 0 %}

                    {% for profile in profiles %}
                        <form method=\"POST\">
                            <div class=\"profile\">
                            <a>
                                <input
                                        class=\"form-control\"
                                        id=\"text\"
                                        type=\"hidden\"
                                        name=\"id\"
                                        value=\"{{ profile_id }}\"
                                >
{#                                <li style=\"  list-style-type: none;\">#}
                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"image\"
                                            name=\"id\"
                                            value=\"{{ profile.avatar }}\"
                                            src=\"{{ profile.avatar }}\"
                                    >

{#                                    <img style=\"width: 40px\" src=\"{{ profile.avatar }}\" alt=\"profile\">#}

{#                                </li>#}

                            </a>
                                <p style=\"margin-left: 5px;\">
                                {{ profile.name }}
                                </p>
                            </div>
                        </form>
                    {% set profile_id = profile_id + 1 %}
                    {% endfor %}
                <a href=\"/manageUser\">Zarządzaj profilami</a>
                <a href=\"/profile\">Konto</a>
                <a href=\"#\">Centrum Pomocy</a>
                <a href=\"/logout\">Wyloguj się</a>


            </div>
        </a>
    </div>
    </div>
{% endblock %}

{% block body %}
<body>
    <section id=\"main-container\">
        <h5 id=\"serials\" class=\"title-home\">Filmy</h5>
        <div class=\"box\">
            {% for movie in movies %}
                <a href=\"/show/{{ movie.id }}\"><img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\"></a>
            {% endfor %}

        </div>
        <h5 id=\"serials\" class=\"title-home\">Seriale</h5>
        <div class=\"box\">
            {% for movie in shows %}
                <a href=\"/show/{{ movie.id }}\"><img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\"></a>
            {% endfor %}
        </div>

        <h5 id=\"movies\" class=\"title-home\">Tylko na Netflixie</h5>
        <div class=\"box\">
            {% for movie in originals %}
                <a href=\"/show/{{ movie.id }}\"><img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\"></a>
            {% endfor %}
        </div>

{#        <h5 id=\"popular\" class=\"title-home\">Popularne</h5>#}
{#        <div class=\"box\">#}
{#            {% for movie in popular %}#}
{#                <a href=\"/show/{{ movie.id }}\"><img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\"></a>#}
{#            {% endfor %}#}
{#        </div>#}

    </section>

    </body>

{% endblock %}
", "movies/index.html.twig", "/var/www/symfony_docker/templates/movies/index.html.twig");
    }
}
