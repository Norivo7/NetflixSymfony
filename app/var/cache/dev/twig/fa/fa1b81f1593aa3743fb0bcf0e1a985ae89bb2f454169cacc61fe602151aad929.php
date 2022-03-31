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
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('navigation', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('body', $context, $blocks);
        // line 459
        echo "
";
        // line 460
        $this->displayBlock('javascript', $context, $blocks);
        // line 474
        echo "

";
        // line 476
        $this->displayBlock('stylesheets', $context, $blocks);
        
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
        // line 20
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\"
                integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
                integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
                crossorigin=\"anonymous\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
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

        // line 4
        echo "            ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "attributes", [], "any", false, false, false, 4), "get", [0 => "_route"], "method", false, false, false, 4), "browse")) {
            // line 5
            echo "                <title>Strona główna - Netflix</title>
            ";
        }
        // line 7
        echo "            ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "attributes", [], "any", false, false, false, 7), "get", [0 => "_route"], "method", false, false, false, 7), "shows")) {
            // line 8
            echo "                <title>Seriale i programy - Netflix</title>
            ";
        }
        // line 10
        echo "            ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "attributes", [], "any", false, false, false, 10), "get", [0 => "_route"], "method", false, false, false, 10), "movies")) {
            // line 11
            echo "                <title>Filmy - Netflix</title>
            ";
        }
        // line 13
        echo "            ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "attributes", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13), "new")) {
            // line 14
            echo "                <title>Nowe i popularne - Netflix</title>
            ";
        }
        // line 16
        echo "            ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", [0 => "_route"], "method", false, false, false, 16), "myList")) {
            // line 17
            echo "                <title>Moja lista - Netflix</title>
            ";
        }
        // line 19
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 37
        echo "    <div class=\"navbar_wrapper\">
        <div class=\"navbar\">
            <a href=\"/\" target=\"_parent\">
                <img class=\"navbar_logo\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"netflix_logo\"/>
            </a>
            <a ";
        // line 42
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", [0 => "_route"], "method", false, false, false, 42), "browse")) {
            // line 43
            echo " class=\"active\" ";
        }
        // line 44
        echo "                    href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("browse");
        echo "\">Strona główna</a>
            <a ";
        // line 45
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45), "shows")) {
            // line 46
            echo " class=\"active\" ";
        }
        // line 47
        echo "                    href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shows");
        echo "\">Seriale i programy</a>
            <a ";
        // line 48
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "attributes", [], "any", false, false, false, 48), "get", [0 => "_route"], "method", false, false, false, 48), "movies")) {
            // line 49
            echo " class=\"active\" ";
        }
        // line 50
        echo "                    href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movies");
        echo "\">Filmy</a>
            <a ";
        // line 51
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "attributes", [], "any", false, false, false, 51), "get", [0 => "_route"], "method", false, false, false, 51), "new")) {
            // line 52
            echo " class=\"active\" ";
        }
        // line 53
        echo "                    href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new");
        echo "\">Nowe i popularne</a>
            <a ";
        // line 54
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", [0 => "_route"], "method", false, false, false, 54), "myList")) {
            // line 55
            echo " class=\"active\" ";
        }
        // line 56
        echo "                    href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myList");
        echo "\">Moja lista</a>
            ";
        // line 57
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_panel");
            echo "\" style=\"color: red\">Przejdź do panelu administratora</a>
            ";
        }
        // line 60
        echo "
            <div class=\"navbar_end\">
                <div id=\"search\">
                    <form method=\"GET\" action=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">
                        <input
                                name=\"v\"
                                type=\"search\"
                                class=\"searchInput\"
                                placeholder=\"&nbsp; &nbsp; &#xF52A; &nbsp;Wyszukaj..\"
                                aria-label=\"Search\"
                        >
                    </form>
                </div>
                <a class=\"right\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notif");
        echo "\">
                    <i style=\"padding: 1px;margin-left: 10px\" class=\"bi bi-bell-fill\"></i>
                </a>
            </div>

        </div>
        <div class=\"dropdown\">
            <a class=\"right dropbtn\" href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">
                <img class=\"userAvatar\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "\" alt=\"avatar\">
                <div class=\"dropdown-content\">
                    ";
        // line 83
        $context["profile_id"] = 0;
        // line 84
        echo "
                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 86
            echo "                        <form id=\"changeProfile\" method=\"POST\">
                            <div class=\"dropdown-profile\">
                                <a class=\"profile_wrapper\">
                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"hidden\"
                                            name=\"id\"
                                            value=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["profile_id"]) || array_key_exists("profile_id", $context) ? $context["profile_id"] : (function () { throw new RuntimeError('Variable "profile_id" does not exist.', 94, $this->source); })()), "html", null, true);
            echo "\"
                                    >
                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"image\"
                                            name=\"id\"
                                            value=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "avatar", [], "any", false, false, false, 101), "html", null, true);
            echo "\"
                                            src=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "avatar", [], "any", false, false, false, 102), "html", null, true);
            echo "\"
                                    >
                                    <button class=\"dropdown_submit\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", [], "any", false, false, false, 104), "html", null, true);
            echo "</button>
                                </a>
                            </div>
                        </form>
                        ";
            // line 108
            $context["profile_id"] = ((isset($context["profile_id"]) || array_key_exists("profile_id", $context) ? $context["profile_id"] : (function () { throw new RuntimeError('Variable "profile_id" does not exist.', 108, $this->source); })()) + 1);
            // line 109
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manageUser");
        echo "\"> &#xF4CB; Zarządzaj profilami</a>
                    <hr>
                    <a style=\"margin-bottom: 15px\" href=\"";
        // line 112
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">Konto</a>
                    <a href=\"#\">Centrum Pomocy</a>
                    <hr>
                    <a style=\"margin-bottom: 15px\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Wyloguj się</a>

                </div>
            </a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 124
        echo "    <body>
    <section class=\"movie_container\">
        <h1 id=\"movies\" class=\"category_label\">Filmy</h1>
        <div class=\"movie\">
            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 128, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 129
            echo "                <a class=\"movie-hero\" onclick=\"showModal(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 129), "html", null, true);
            echo ")
                        // document.getElementById('navbar').style.background='rgba(0, 0, 0, .7)'
                        \">
                    <img class=\"movie-hero-image\" src=\"";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 132), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 132), "html", null, true);
            echo "\">
                </a>
                ";
            // line 134
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 135
                echo "                    <a class=\"hide-button-wrapper\"
                       href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hide", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 136)]), "html", null, true);
                echo "\">
                        <div class=\"hide-button\">
                            <i class=\"bi bi-arrow-bar-left\"></i>
                        </div>
                    </a>
                ";
            }
            // line 142
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 142), "html", null, true);
            echo "\" class=\"modal\"
";
            // line 144
            echo "                >
                    <div class=\"modal-background\">
                    </div>
                    <div class=\"modal-sizing\">
                        <div class=\"modal-content\" id=\"modal-content\">
                            <div class=\"modal-header\"
                                    ";
            // line 151
            echo "                            >
                                <a class=\"modal-image\" href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-one", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 152)]), "html", null, true);
            echo "\"
                                   style=\"text-decoration: none\">
                                    <img class=\"modal-image\" src=\"";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 154), "html", null, true);
            echo "\" alt=\"movie_image\">
                                </a>

                                <div class=\"exit-button\">
                                    <span onclick=\"hideModal(";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 158), "html", null, true);
            echo ")\"
                                          class=\"bi bi-x-circle-fill modal-exit\"></span>
                                </div>
                            </div>
                            <div class=\"modal-desc\">
                                <div class=\"modal-movie-info-primary\">
                                    <h2 class=\"modal-title\">";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 164), "html", null, true);
            echo "</h2>
                                    <p class=\"modal-movie-description\">";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "description", [], "any", false, false, false, 165), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"modal-movie-info-secondary\">
                                    ";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", [], "any", false, false, false, 168), "html", null, true);
            echo "
                                    ";
            // line 170
            echo "                                    <div class=\"modal-movie-info-secondary-categories\">
                                        <p style=\"color: gray;display: inline-block\">Kategorie:</p>
                                        ";
            // line 172
            $context["categoryArray"] = [];
            echo "  ";
            // line 173
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "categories", [], "any", false, false, false, 173));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 174
                echo "                                            ";
                $context["categoryArray"] = twig_array_merge((isset($context["categoryArray"]) || array_key_exists("categoryArray", $context) ? $context["categoryArray"] : (function () { throw new RuntimeError('Variable "categoryArray" does not exist.', 174, $this->source); })()), [($context["key"] . "_") => twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 174)]);
                echo " ";
                // line 175
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["categoryArray"]) || array_key_exists("categoryArray", $context) ? $context["categoryArray"] : (function () { throw new RuntimeError('Variable "categoryArray" does not exist.', 176, $this->source); })()), ", "), "html", null, true);
            echo "  ";
            // line 177
            echo "                                    </div>
                                </div>
                            </div>
                            <div>
                                ";
            // line 181
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 182
                echo "                                    <a class=\"my-list-button\" style=\"color:red;border: 1px solid red\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hide", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 182)]), "html", null, true);
                echo "\">Ukryj film</a>
                                ";
            }
            // line 184
            echo "                            </div>
                            <div style=\"margin-top: 20px\">
                                ";
            // line 186
            if ((twig_get_attribute($this->env, $this->source, $context["movie"], "isLiked", [], "any", false, false, false, 186) == true)) {
                // line 187
                echo "                                    <a class=\"my-list-button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 187)]), "html", null, true);
                echo "\"> Usuń z mojej listy</a>
                                ";
            } else {
                // line 189
                echo "                                    <a class=\"my-list-button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 189)]), "html", null, true);
                echo "\"> Dodaj do mojej listy</a>
                                ";
            }
            // line 191
            echo "                            </div>
                            ";
            // line 192
            if ((twig_get_attribute($this->env, $this->source, $context["movie"], "episodes", [], "any", false, false, false, 192) != null)) {
                // line 193
                echo "                                <div class=\"modal-movie-episodes\">
                                    <div class=\"modal-movie-episodes-header\">
                                        <p>Odcinki</p>
                                        <label>
                                            <select>
                                                <option>Sezon 1</option>
                                                <option>Sezon 2</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class=\"episode-wrapper\">
                                        ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "episodes", [], "any", false, false, false, 204));
                foreach ($context['_seq'] as $context["key"] => $context["episode"]) {
                    // line 205
                    echo "                                            <div class=\"season";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "season", [], "any", false, false, false, 205), "html", null, true);
                    echo "\">
                                                <a href=\"";
                    // line 206
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("watch-one", ["id" => twig_get_attribute($this->env, $this->source, $context["episode"], "id", [], "any", false, false, false, 206)]), "html", null, true);
                    echo "\">
                                                    <div class=\"episode\">
                                                        <div class=\"episode-image\">
                                                            <div class=\"episode-number-wrapper\">
                                                                <div class=\"episode-number\">";
                    // line 210
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</div>
                                                            </div>
                                                            <img style=\"height: 100px;margin-right: 20px;border-radius: 4px\"
                                                                 src=\"";
                    // line 213
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/episode.jpg"), "html", null, true);
                    echo "\"
                                                                 alt=\"episode_image\"/>
                                                        </div>
                                                        <div class=\"episode-content\">
                                                            <div class=\"episode-title\">
                                                                ";
                    // line 218
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "name", [], "any", false, false, false, 218), "html", null, true);
                    echo "
                                                            </div>
                                                            <div class=\"episode-description\">
                                                                ";
                    // line 221
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "description", [], "any", false, false, false, 221), "html", null, true);
                    echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['episode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 228
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 231
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "        </div>

        <h1 id=\"shows\" class=\"category_label\">Seriale</h1>
        <div class=\"movie\">
            ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shows"]) || array_key_exists("shows", $context) ? $context["shows"] : (function () { throw new RuntimeError('Variable "shows" does not exist.', 239, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 240
            echo "                <a class=\"movie-hero\" onclick=\"showModal(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 240), "html", null, true);
            echo ")
                        // document.getElementById('navbar').style.background='rgba(0, 0, 0, .7)'
                        \">
                    <img class=\"movie-hero-image\" src=\"";
            // line 243
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 243), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 243), "html", null, true);
            echo "\">
                </a>
                ";
            // line 245
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 246
                echo "                    <a class=\"hide-button-wrapper\"
                       href=\"";
                // line 247
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hide", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 247)]), "html", null, true);
                echo "\">
                        <div class=\"hide-button\">
                            <i class=\"bi bi-arrow-bar-left\"></i>
                        </div>
                    </a>
                ";
            }
            // line 253
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 253), "html", null, true);
            echo "\" class=\"modal\" onclick=\"hideModal(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 253), "html", null, true);
            echo ")\">
                    <div class=\"modal-background\">
                    </div>
                    <div class=\"modal-sizing\">
                        <div class=\"modal-content\" id=\"modal-content\">
                            <div class=\"modal-header\"
                                    ";
            // line 260
            echo "                            >
                                <a class=\"modal-image\" href=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-one", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 261)]), "html", null, true);
            echo "\"
                                   style=\"text-decoration: none\">
                                    <img class=\"modal-image\" src=\"";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 263), "html", null, true);
            echo "\" alt=\"movie_image\">
                                </a>

                                <div class=\"exit-button\">
                                    <span onclick=\"hideModal(";
            // line 267
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 267), "html", null, true);
            echo ")\"
                                          class=\"bi bi-x-circle-fill modal-exit\"></span>
                                </div>
                            </div>
                            <div class=\"modal-desc\">
                                <div class=\"modal-movie-info-primary\">
                                    <h2 class=\"modal-title\">";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 273), "html", null, true);
            echo "</h2>
                                    <p class=\"modal-movie-description\">";
            // line 274
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "description", [], "any", false, false, false, 274), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"modal-movie-info-secondary\">
                                    ";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", [], "any", false, false, false, 277), "html", null, true);
            echo "
";
            // line 279
            echo "                                    <div class=\"modal-movie-info-secondary-categories\">
                                        <p style=\"color: gray;display: inline-block\">Kategorie:</p>
                                        ";
            // line 281
            $context["categoryArray"] = [];
            echo "  ";
            // line 282
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "categories", [], "any", false, false, false, 282));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 283
                echo "                                            ";
                $context["categoryArray"] = twig_array_merge((isset($context["categoryArray"]) || array_key_exists("categoryArray", $context) ? $context["categoryArray"] : (function () { throw new RuntimeError('Variable "categoryArray" does not exist.', 283, $this->source); })()), [($context["key"] . "_") => twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 283)]);
                echo " ";
                // line 284
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["categoryArray"]) || array_key_exists("categoryArray", $context) ? $context["categoryArray"] : (function () { throw new RuntimeError('Variable "categoryArray" does not exist.', 285, $this->source); })()), ", "), "html", null, true);
            echo "  ";
            // line 286
            echo "                                    </div>
                                </div>
                            </div>
                            <div>
                            ";
            // line 290
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 291
                echo "                                <a class=\"my-list-button\" style=\"color:red;border: 1px solid red\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hide", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 291)]), "html", null, true);
                echo "\">Ukryj film</a>
                            ";
            }
            // line 293
            echo "                            </div>
                            <div style=\"margin-top: 20px\">
                            ";
            // line 295
            if ((twig_get_attribute($this->env, $this->source, $context["movie"], "isLiked", [], "any", false, false, false, 295) == true)) {
                // line 296
                echo "                                    <a class=\"my-list-button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 296)]), "html", null, true);
                echo "\"> Usuń z mojej listy</a>
                                ";
            } else {
                // line 298
                echo "                                    <a class=\"my-list-button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 298)]), "html", null, true);
                echo "\"> Dodaj do mojej listy</a>
                            ";
            }
            // line 300
            echo "                            </div>
                            ";
            // line 301
            if ((twig_get_attribute($this->env, $this->source, $context["movie"], "episodes", [], "any", false, false, false, 301) != null)) {
                // line 302
                echo "                                <div class=\"modal-movie-episodes\">
                                    <div class=\"modal-movie-episodes-header\">
                                        <p>Odcinki</p>
                                        <label>
                                            <select>
                                                <option>Sezon 1</option>
                                                <option>Sezon 2</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class=\"episode-wrapper\">
                                    ";
                // line 313
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "episodes", [], "any", false, false, false, 313));
                foreach ($context['_seq'] as $context["key"] => $context["episode"]) {
                    // line 314
                    echo "                                        <div class=\"season";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "season", [], "any", false, false, false, 314), "html", null, true);
                    echo "\">
                                            <a href=\"";
                    // line 315
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("watch-one", ["id" => twig_get_attribute($this->env, $this->source, $context["episode"], "id", [], "any", false, false, false, 315)]), "html", null, true);
                    echo "\">
                                            <div class=\"episode\">
                                                <div class=\"episode-image\">
                                                    <div class=\"episode-number-wrapper\">
                                                        <div class=\"episode-number\">";
                    // line 319
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</div>
                                                    </div>
                                                    <img style=\"height: 100px;margin-right: 20px;border-radius: 4px\"
                                                         src=\"";
                    // line 322
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/episode.jpg"), "html", null, true);
                    echo "\"
                                                         alt=\"episode_image\"/>
                                                </div>
                                                <div class=\"episode-content\">
                                                    <div class=\"episode-title\">
                                                        ";
                    // line 327
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "name", [], "any", false, false, false, 327), "html", null, true);
                    echo "
                                                    </div>
                                                    <div class=\"episode-description\">
                                                        ";
                    // line 330
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "description", [], "any", false, false, false, 330), "html", null, true);
                    echo "
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['episode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 337
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 340
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 344
        echo "        </div>
        <h1 id=\"movies\" class=\"category_label\">Tylko na Netflixie</h1>
        <div class=\"movie\">
            ";
        // line 347
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["originals"]) || array_key_exists("originals", $context) ? $context["originals"] : (function () { throw new RuntimeError('Variable "originals" does not exist.', 347, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 348
            echo "                <a class=\"movie-hero\" onclick=\"showModal(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 348), "html", null, true);
            echo ")
                        // document.getElementById('navbar').style.background='rgba(0, 0, 0, .7)'
                        \">
                    <img class=\"movie-hero-image\" src=\"";
            // line 351
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 351), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 351), "html", null, true);
            echo "\">
                </a>
                ";
            // line 353
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 354
                echo "                    <a class=\"hide-button-wrapper\"
                       href=\"";
                // line 355
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hide", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 355)]), "html", null, true);
                echo "\">
                        <div class=\"hide-button\">
                            <i class=\"bi bi-arrow-bar-left\"></i>
                        </div>
                    </a>
                ";
            }
            // line 361
            echo "                <div id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 361), "html", null, true);
            echo "\" class=\"modal\" onclick=\"hideModal(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 361), "html", null, true);
            echo ")\">
                    <div class=\"modal-background\">
                    </div>
                    <div class=\"modal-sizing\">
                        <div class=\"modal-content\" id=\"modal-content\">
                            <div class=\"modal-header\"
                                    ";
            // line 368
            echo "                            >
                                <a class=\"modal-image\" href=\"";
            // line 369
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-one", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 369)]), "html", null, true);
            echo "\"
                                   style=\"text-decoration: none\">
                                    <img class=\"modal-image\" src=\"";
            // line 371
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 371), "html", null, true);
            echo "\" alt=\"movie_image\">
                                </a>

                                <div class=\"exit-button\">
                                    <span onclick=\"hideModal(";
            // line 375
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 375), "html", null, true);
            echo ")\"
                                          class=\"bi bi-x-circle-fill modal-exit\"></span>
                                </div>
                            </div>
                            <div class=\"modal-desc\">
                                <div class=\"modal-movie-info-primary\">
                                    <h2 class=\"modal-title\">";
            // line 381
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 381), "html", null, true);
            echo "</h2>
                                    <p class=\"modal-movie-description\">";
            // line 382
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "description", [], "any", false, false, false, 382), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"modal-movie-info-secondary\">
                                    ";
            // line 385
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", [], "any", false, false, false, 385), "html", null, true);
            echo "
                                    ";
            // line 387
            echo "                                    <div class=\"modal-movie-info-secondary-categories\">
                                        <p style=\"color: gray;display: inline-block\">Kategorie:</p>
                                        ";
            // line 389
            $context["categoryArray"] = [];
            echo "  ";
            // line 390
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "categories", [], "any", false, false, false, 390));
            foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                // line 391
                echo "                                            ";
                $context["categoryArray"] = twig_array_merge((isset($context["categoryArray"]) || array_key_exists("categoryArray", $context) ? $context["categoryArray"] : (function () { throw new RuntimeError('Variable "categoryArray" does not exist.', 391, $this->source); })()), [($context["key"] . "_") => twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 391)]);
                echo " ";
                // line 392
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 393
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["categoryArray"]) || array_key_exists("categoryArray", $context) ? $context["categoryArray"] : (function () { throw new RuntimeError('Variable "categoryArray" does not exist.', 393, $this->source); })()), ", "), "html", null, true);
            echo "  ";
            // line 394
            echo "                                    </div>
                                </div>
                            </div>
                            <div>
                                ";
            // line 398
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 399
                echo "                                    <a class=\"my-list-button\" style=\"color:red;border: 1px solid red\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hide", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 399)]), "html", null, true);
                echo "\">Ukryj film</a>
                                ";
            }
            // line 401
            echo "                            </div>
                            <div style=\"margin-top: 20px\">
                                ";
            // line 403
            if ((twig_get_attribute($this->env, $this->source, $context["movie"], "isLiked", [], "any", false, false, false, 403) == true)) {
                // line 404
                echo "                                    <a class=\"my-list-button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 404)]), "html", null, true);
                echo "\"> Usuń z mojej listy</a>
                                ";
            } else {
                // line 406
                echo "                                    <a class=\"my-list-button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 406)]), "html", null, true);
                echo "\"> Dodaj do mojej listy</a>
                                ";
            }
            // line 408
            echo "                            </div>
                            ";
            // line 409
            if ((twig_get_attribute($this->env, $this->source, $context["movie"], "episodes", [], "any", false, false, false, 409) != null)) {
                // line 410
                echo "                                <div class=\"modal-movie-episodes\">
                                    <div class=\"modal-movie-episodes-header\">
                                        <p>Odcinki</p>
                                        <label>
                                            <select>
                                                <option>Sezon 1</option>
                                                <option>Sezon 2</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class=\"episode-wrapper\">
                                        ";
                // line 421
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "episodes", [], "any", false, false, false, 421));
                foreach ($context['_seq'] as $context["key"] => $context["episode"]) {
                    // line 422
                    echo "                                            <div class=\"season";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "season", [], "any", false, false, false, 422), "html", null, true);
                    echo "\">
                                                <a href=\"";
                    // line 423
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("watch-one", ["id" => twig_get_attribute($this->env, $this->source, $context["episode"], "id", [], "any", false, false, false, 423)]), "html", null, true);
                    echo "\">
                                                    <div class=\"episode\">
                                                        <div class=\"episode-image\">
                                                            <div class=\"episode-number-wrapper\">
                                                                <div class=\"episode-number\">";
                    // line 427
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</div>
                                                            </div>
                                                            <img style=\"height: 100px;margin-right: 20px;border-radius: 4px\"
                                                                 src=\"";
                    // line 430
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/episode.jpg"), "html", null, true);
                    echo "\"
                                                                 alt=\"episode_image\"/>
                                                        </div>
                                                        <div class=\"episode-content\">
                                                            <div class=\"episode-title\">
                                                                ";
                    // line 435
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "name", [], "any", false, false, false, 435), "html", null, true);
                    echo "
                                                            </div>
                                                            <div class=\"episode-description\">
                                                                ";
                    // line 438
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "description", [], "any", false, false, false, 438), "html", null, true);
                    echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['episode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 445
                echo "                                    </div>
                                </div>
                            ";
            }
            // line 448
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 452
        echo "        </div>

    </section>

    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 460
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 461
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
<script>

function hideModal(modalId) {
    document.getElementById(modalId).style.display = 'none'
}

function showModal(modalId) {
    document.getElementById(modalId).style.display = 'block'
}

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 476
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 477
        echo "
    <style>


        ";
        // line 484
        echo "
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            background-color: black;
            color: white;
        }

        select {
            background-color: #181818;
            color: white;
            border: 0 solid red ;
        }

        a {
            text-decoration: none;
        }

        a.right {
            float: right;
            padding: 13px 0;
            align-items: center;
        }

        a.active {
            font-weight: 900;

        }

        h5 {
            font-size: 20px;
        }

        i {
            font-size: 23px;
            margin-top: 8px;
            margin-right: 8px;
        }

        h1.category_label {
            font-size: 21px;
        }

        ";
        // line 533
        echo "
        .modal {
            overflow: hidden;
        }

        .modal-background {
            position: absolute;
            background: rgba(0, 0, 0, 0.55);
            /*background-color: red;*/
            width: 100%;
            height: 150vh;
            border-radius: .3rem;
        }

        .modal-sizing {
            position: relative;
            animation: blowUpModal .3s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
            top: 50px;
            /*left: 30%;*/
            text-align: center;
            height: 90%;
            width: 45%;
            justify-content: center;
            align-self: center;
            margin: 0 auto;
            align-content: center;
            /*border: 1px solid gray;*/
            pointer-events: none;
        }

        #modal-content::-webkit-scrollbar {
            width: 8px;
            background-color: rgba(33, 32, 32, 0.85);
        }

        #modal-content::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(91, 91, 91, 0.49);
        }

        #modal-content::-webkit-scrollbar-thumb {
            background-color: rgba(142, 15, 15, 0.85);
            outline: 1px solid slategrey;
        }


        .modal-header {
            position: relative;
            /*top: 10px;*/
            /*left: 0;*/
            /*height: 100%;*/
            /*height: 470px;*/
            /*width: 100%;*/
            overflow: hidden;
            padding: 0;
            border-bottom: 1px solid gray;
            background-size: cover;
        }

        .modal-desc {
            width: 100%;
            height: 200px;
            display: flex;
            flex-direction: row;
        }

        .modal-movie-info-primary {
            margin-top: 15px;
            margin-left: 30px;
            text-align: left;
            width: 65%;
        }

        .modal-movie-info-secondary {
            margin-left: 10px;
            margin-top: 25px;
            width: 35%;
            text-align: center;
        }

        .modal-movie-info-secondary-categories {
            margin-top: 20px;
        }

        .modal-image {
            width: 100%;
            transition: transform 1s;
        }

        .modal-image:hover {
            transition: transform 1s;
            -ms-transform: scale(1.03);
            -webkit-transform: scale(1.03);
            transform: scale(1.03);
        }

        .modal-content {
            max-height: calc(100vh + 2210px);
            overflow-y: auto;
            background-color: #181818;
            color: white;
            height: 100%;
            width: 100%;
            margin: 0 auto;
        }

        .modal-movie-episodes {
            display: flex;
            flex-direction: column;
            margin-bottom: 50px;
        }

        .modal-movie-episodes-header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            height: 50px;
            font-size: 24px;
            margin-left: 50px;
            margin-top: 80px;
            width: 85%;
        }

        .episode {
            cursor: pointer;
            margin-right: 50px;
            margin-left: 50px;
            align-items: center;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            height: 150px;
            border-bottom: 1px solid #404040;
            border-radius: 8px;
        }

        .episode:hover {
            background: linear-gradient(30deg, rgba(0, 0, 0, 1) 0%, rgba(22, 15, 15, 1) 35%, rgba(45, 48, 50, 1) 100%);
        }

        .episode-image {
            display: flex;
            flex-direction: row;
        }

        .episode-number-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .episode-number {
            height: 100%;
            width: 50px;
            font-size: 26px;
            color: gray;
        }

        .episode-title {
            color: white;
            text-align: left;
            width: 100%;
        }

        .episode-description {
            line-height: 19px;
            overflow: hidden;
            height: 76px;
            color: gray;
            font-size: 14px;
            text-align: left;
            margin-right: 30px;
        }

        .modal-exit {
            font-size: 40px;
            /*bottom: 72%;*/
            /*left: 45%;*/
            bottom: 50vh;
            left: 20vw;
            /*position: -webkit-sticky;*/
            /*position: sticky;*/
            /*top: -2000px;*/
            color: black;
        }

        .exit-button {
            position: absolute;
            bottom: 15em;
            right: 25px;
        }

        ";
        // line 728
        echo "
        .profile_button {
            color: gray;
            padding: .5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid grey;
            text-decoration: none;
            flex-wrap: nowrap;
        }

        .my-list-button {
            color: gray;
            padding: .5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid grey;
            text-decoration: none;
        }

        .dropdown_submit {
            font-size: 13px;
            display: flex;
            flex-direction: row;
            background: none !important;
            border: none;
            color: white;
            cursor: pointer;
            margin-left: 5px;
            line-height: 40px;
        }


        .dropdown_submit:hover {
            text-decoration: underline;
        }

        .hide-button-wrapper {
            margin-left: -25px;
            writing-mode: vertical-rl;
            text-orientation: upright;
            text-decoration: none;
            text-align: center;
        }

        .hide-button {
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px;
            color: gray;
            font-weight: bold;
            background: linear-gradient(30deg, rgba(0, 0, 0, 1) 0%, rgba(22, 15, 15, 1) 35%, rgba(45, 48, 50, 1) 100%);
            height: 150px;
        }

        ";
        // line 787
        echo "
        .navbar_wrapper {
            display: flex;
            /*background: rgb(0, 0, 0);*/
            background: linear-gradient(360deg, rgba(0, 0, 0, 1) 0%, rgba(1, 1, 1, 1) 35%, rgba(40, 40, 40, 1) 100%);
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
            text-decoration: none;
            font-size: 14px;
        }

        .navbar a:hover {
            opacity: 0.8;
        }

        .navbar_end {
            gap: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
        }

        .navbar_logo {
            margin-left: 30px;
            height: 31px;
            margin-right: 15px;
        }

        .userAvatar {
            width: 30px;
            border-radius: 4px;
            margin-right: 25px;
        }

        #search {
            display: flex;
            float: right;
            margin-top: 12px;
        }

        .searchInput {
            font-size: 15px;
            font-family: var(--bs-body-font-family), bootstrap-icons;
            height: 35px;
            width: 300px;
            border: 1px solid gray;
            border-radius: 7px;
        }

        ";
        // line 855
        echo "
        .movie_container {
            margin-left: 30px;
        }

        .movie {
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            grid-gap: 25px;
            grid-template-columns:
            repeat(6, minmax(270px, 1fr));
        }

        /*.movie > .hide-button-wrapper {*/
        /*    grid-gap: 25px;*/
        /*}*/

        .movie-hero {
            transition: transform 0.3s;
            cursor: pointer;

        }

        .movie-hero:hover {
            transition: transform 0.3s;
            -ms-transform: scale(1.3);
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        .movie-hero-image {
            border-radius: 2px;
            width: 270px;
            height: auto;
        }

        ";
        // line 895
        echo "
        .dropdown {
            width: 8%;
            left: 0;
        }

        .dropdown-content {
            transform-origin: top center;
            animation: growDown 200ms ease-in-out forwards;
            margin-top: 55px;
            display: none;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.6);
            border: 1px solid gray;
            border-radius: 3px;
            min-width: 135px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }

        .dropdown-content a {
            font-family: var(--bs-body-font-family), bootstrap-icons;
            font-size: 13px;
            color: white;
            text-decoration: none;
            text-align: center;
        }

        .dropdown-content a:hover {
            text-decoration: underline;
        }

        .dropdown:hover .dropdown-content {
            margin-right: 10px;
            flex-direction: column;
            display: flex;
            min-height: 100px;
        }

        @keyframes growDown {
            0% {
                transform: scaleY(0)
            }
            80% {
                transform: scaleY(1.1)
            }
            100% {
                transform: scaleY(1)
            }
        }

        @keyframes blowUpModal {
            0% {
                transform: scale(0);
            }
            100% {
                transform: scale(1);
            }
        }

        /*@keyframes blowUpContent {*/
        /*    0% {*/
        /*        transform:scale(1);*/
        /*        opacity:1;*/
        /*    }*/
        /*    99.9% {*/
        /*        transform:scale(2);*/
        /*        opacity:0;*/
        /*    }*/
        /*    100% {*/
        /*        transform:scale(0);*/
        /*    }*/
        /*}*/

        /*@keyframes blowUpContentTwo {*/
        /*    0% {*/
        /*        transform:scale(2);*/
        /*        opacity:0;*/
        /*    }*/
        /*    100% {*/
        /*        transform:scale(1);*/
        /*        opacity:1;*/
        /*    }*/
        /*}*/

        /*@keyframes blowUpModalTwo {*/
        /*    0% {*/
        /*        transform:scale(1);*/
        /*        opacity:1;*/
        /*    }*/
        /*    100% {*/
        /*        transform:scale(0);*/
        /*        opacity:0;*/
        /*    }*/
        /*}*/

        .dropdown-profile {
            align-content: center;
            font-size: 12px;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .profile_wrapper {
            display: flex;
            flex-direction: row;
        }

        .form-control {
            width: 30%;
            height: 100%;
            border: none;
            border-radius: 5px;
            padding: 0;
            margin-left: 10px;
        }

    </style>
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
        return array (  1536 => 895,  1497 => 855,  1430 => 787,  1372 => 728,  1178 => 533,  1130 => 484,  1124 => 477,  1114 => 476,  1091 => 461,  1081 => 460,  1065 => 452,  1056 => 448,  1051 => 445,  1038 => 438,  1032 => 435,  1024 => 430,  1018 => 427,  1011 => 423,  1006 => 422,  1002 => 421,  989 => 410,  987 => 409,  984 => 408,  978 => 406,  972 => 404,  970 => 403,  966 => 401,  960 => 399,  958 => 398,  952 => 394,  948 => 393,  942 => 392,  938 => 391,  933 => 390,  930 => 389,  926 => 387,  922 => 385,  916 => 382,  912 => 381,  903 => 375,  896 => 371,  891 => 369,  888 => 368,  876 => 361,  867 => 355,  864 => 354,  862 => 353,  855 => 351,  848 => 348,  844 => 347,  839 => 344,  830 => 340,  825 => 337,  812 => 330,  806 => 327,  798 => 322,  792 => 319,  785 => 315,  780 => 314,  776 => 313,  763 => 302,  761 => 301,  758 => 300,  752 => 298,  746 => 296,  744 => 295,  740 => 293,  734 => 291,  732 => 290,  726 => 286,  722 => 285,  716 => 284,  712 => 283,  707 => 282,  704 => 281,  700 => 279,  696 => 277,  690 => 274,  686 => 273,  677 => 267,  670 => 263,  665 => 261,  662 => 260,  650 => 253,  641 => 247,  638 => 246,  636 => 245,  629 => 243,  622 => 240,  618 => 239,  612 => 235,  603 => 231,  598 => 228,  585 => 221,  579 => 218,  571 => 213,  565 => 210,  558 => 206,  553 => 205,  549 => 204,  536 => 193,  534 => 192,  531 => 191,  525 => 189,  519 => 187,  517 => 186,  513 => 184,  507 => 182,  505 => 181,  499 => 177,  495 => 176,  489 => 175,  485 => 174,  480 => 173,  477 => 172,  473 => 170,  469 => 168,  463 => 165,  459 => 164,  450 => 158,  443 => 154,  438 => 152,  435 => 151,  427 => 144,  422 => 142,  413 => 136,  410 => 135,  408 => 134,  401 => 132,  394 => 129,  390 => 128,  384 => 124,  374 => 123,  357 => 115,  351 => 112,  345 => 110,  339 => 109,  337 => 108,  330 => 104,  325 => 102,  321 => 101,  311 => 94,  301 => 86,  297 => 85,  294 => 84,  292 => 83,  287 => 81,  283 => 80,  273 => 73,  260 => 63,  255 => 60,  249 => 58,  247 => 57,  242 => 56,  239 => 55,  237 => 54,  232 => 53,  229 => 52,  227 => 51,  222 => 50,  219 => 49,  217 => 48,  212 => 47,  209 => 46,  207 => 45,  202 => 44,  199 => 43,  197 => 42,  192 => 40,  187 => 37,  177 => 36,  167 => 19,  163 => 17,  160 => 16,  156 => 14,  153 => 13,  149 => 11,  146 => 10,  142 => 8,  139 => 7,  135 => 5,  132 => 4,  122 => 3,  109 => 32,  95 => 20,  93 => 3,  90 => 2,  80 => 1,  70 => 476,  66 => 474,  64 => 460,  61 => 459,  59 => 123,  56 => 122,  54 => 36,  51 => 35,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <head>
        {% block title %}
            {% if app.request.attributes.get('_route') in 'browse' %}
                <title>Strona główna - Netflix</title>
            {% endif %}
            {% if app.request.attributes.get('_route') in 'shows' %}
                <title>Seriale i programy - Netflix</title>
            {% endif %}
            {% if app.request.attributes.get('_route') in 'movies' %}
                <title>Filmy - Netflix</title>
            {% endif %}
            {% if app.request.attributes.get('_route') in 'new' %}
                <title>Nowe i popularne - Netflix</title>
            {% endif %}
            {% if app.request.attributes.get('_route') in 'myList' %}
                <title>Moja lista - Netflix</title>
            {% endif %}
        {% endblock %}
        <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js\"
                integrity=\"sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB\"
                crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
                integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
                crossorigin=\"anonymous\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.ico') }}\">
    </head>
{% endblock %}

{% block navigation %}
    <div class=\"navbar_wrapper\">
        <div class=\"navbar\">
            <a href=\"/\" target=\"_parent\">
                <img class=\"navbar_logo\" src=\"{{ asset('images/netflixLogoSmall.svg.png') }}\" alt=\"netflix_logo\"/>
            </a>
            <a {% if app.request.attributes.get('_route') in
                'browse' %} class=\"active\" {% endif %}
                    href=\"{{ path('browse') }}\">Strona główna</a>
            <a {% if app.request.attributes.get('_route') in
                'shows' %} class=\"active\" {% endif %}
                    href=\"{{ path('shows') }}\">Seriale i programy</a>
            <a {% if app.request.attributes.get('_route') in
                'movies' %} class=\"active\" {% endif %}
                    href=\"{{ path('movies') }}\">Filmy</a>
            <a {% if app.request.attributes.get('_route') in
                'new' %} class=\"active\" {% endif %}
                    href=\"{{ path('new') }}\">Nowe i popularne</a>
            <a {% if app.request.attributes.get('_route') in
                'myList' %} class=\"active\" {% endif %}
                    href=\"{{ path('myList') }}\">Moja lista</a>
            {% if is_granted('ROLE_ADMIN') %}
                <a href=\"{{ path('admin_panel') }}\" style=\"color: red\">Przejdź do panelu administratora</a>
            {% endif %}

            <div class=\"navbar_end\">
                <div id=\"search\">
                    <form method=\"GET\" action=\"{{ path('search') }}\">
                        <input
                                name=\"v\"
                                type=\"search\"
                                class=\"searchInput\"
                                placeholder=\"&nbsp; &nbsp; &#xF52A; &nbsp;Wyszukaj..\"
                                aria-label=\"Search\"
                        >
                    </form>
                </div>
                <a class=\"right\" href=\"{{ path('notif') }}\">
                    <i style=\"padding: 1px;margin-left: 10px\" class=\"bi bi-bell-fill\"></i>
                </a>
            </div>

        </div>
        <div class=\"dropdown\">
            <a class=\"right dropbtn\" href=\"{{ path('profile') }}\">
                <img class=\"userAvatar\" src=\"{{ userAvatar }}\" alt=\"avatar\">
                <div class=\"dropdown-content\">
                    {% set profile_id = 0 %}

                    {% for profile in profiles %}
                        <form id=\"changeProfile\" method=\"POST\">
                            <div class=\"dropdown-profile\">
                                <a class=\"profile_wrapper\">
                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"hidden\"
                                            name=\"id\"
                                            value=\"{{ profile_id }}\"
                                    >
                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"image\"
                                            name=\"id\"
                                            value=\"{{ profile.avatar }}\"
                                            src=\"{{ profile.avatar }}\"
                                    >
                                    <button class=\"dropdown_submit\">{{ profile.name }}</button>
                                </a>
                            </div>
                        </form>
                        {% set profile_id = profile_id + 1 %}
                    {% endfor %}
                    <a href=\"{{ path('manageUser') }}\"> &#xF4CB; Zarządzaj profilami</a>
                    <hr>
                    <a style=\"margin-bottom: 15px\" href=\"{{ path('profile') }}\">Konto</a>
                    <a href=\"#\">Centrum Pomocy</a>
                    <hr>
                    <a style=\"margin-bottom: 15px\" href=\"{{ path('app_logout') }}\">Wyloguj się</a>

                </div>
            </a>
        </div>
    </div>
{% endblock %}

{% block body %}
    <body>
    <section class=\"movie_container\">
        <h1 id=\"movies\" class=\"category_label\">Filmy</h1>
        <div class=\"movie\">
            {% for movie in movies %}
                <a class=\"movie-hero\" onclick=\"showModal({{ movie.id }})
                        // document.getElementById('navbar').style.background='rgba(0, 0, 0, .7)'
                        \">
                    <img class=\"movie-hero-image\" src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\">
                </a>
                {% if is_granted('ROLE_ADMIN') %}
                    <a class=\"hide-button-wrapper\"
                       href=\"{{ path('hide', {'id': movie.id}) }}\">
                        <div class=\"hide-button\">
                            <i class=\"bi bi-arrow-bar-left\"></i>
                        </div>
                    </a>
                {% endif %}
                <div id=\"{{ movie.id }}\" class=\"modal\"
{#                     onclick=\"hideModal({{ movie.id }})\"#}
                >
                    <div class=\"modal-background\">
                    </div>
                    <div class=\"modal-sizing\">
                        <div class=\"modal-content\" id=\"modal-content\">
                            <div class=\"modal-header\"
                                    {#                                 style=\"background-image: url({{ movie.img }})\" #}
                            >
                                <a class=\"modal-image\" href=\"{{ path('show-one', {'id': movie.id}) }}\"
                                   style=\"text-decoration: none\">
                                    <img class=\"modal-image\" src=\"{{ movie.img }}\" alt=\"movie_image\">
                                </a>

                                <div class=\"exit-button\">
                                    <span onclick=\"hideModal({{ movie.id }})\"
                                          class=\"bi bi-x-circle-fill modal-exit\"></span>
                                </div>
                            </div>
                            <div class=\"modal-desc\">
                                <div class=\"modal-movie-info-primary\">
                                    <h2 class=\"modal-title\">{{ movie.title }}</h2>
                                    <p class=\"modal-movie-description\">{{ movie.description }}</p>
                                </div>
                                <div class=\"modal-movie-info-secondary\">
                                    {{ movie.year }}
                                    {#                                    <a class=\"profile_button\" href=\"{{ path('show-one', {'id': movie.id}) }}\"> Oglądaj teraz </a>#}
                                    <div class=\"modal-movie-info-secondary-categories\">
                                        <p style=\"color: gray;display: inline-block\">Kategorie:</p>
                                        {% set categoryArray = { } %}  {# initialize category array #}
                                        {% for key, category in movie.categories %}
                                            {% set categoryArray = categoryArray|merge({(key~'_'): category.name}) %} {# merge to the array, convert key to string, int doesnt work #}
                                        {% endfor %}
                                        {{ categoryArray|join(', ') }}  {# implode array #}
                                    </div>
                                </div>
                            </div>
                            <div>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <a class=\"my-list-button\" style=\"color:red;border: 1px solid red\" href=\"{{ path('hide', {'id': movie.id}) }}\">Ukryj film</a>
                                {% endif %}
                            </div>
                            <div style=\"margin-top: 20px\">
                                {% if movie.isLiked == true %}
                                    <a class=\"my-list-button\" href=\"{{ path('dislike', {'id': movie.id}) }}\"> Usuń z mojej listy</a>
                                {% else %}
                                    <a class=\"my-list-button\" href=\"{{ path('like', {'id': movie.id}) }}\"> Dodaj do mojej listy</a>
                                {% endif %}
                            </div>
                            {% if movie.episodes != null %}
                                <div class=\"modal-movie-episodes\">
                                    <div class=\"modal-movie-episodes-header\">
                                        <p>Odcinki</p>
                                        <label>
                                            <select>
                                                <option>Sezon 1</option>
                                                <option>Sezon 2</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class=\"episode-wrapper\">
                                        {% for key, episode in movie.episodes %}
                                            <div class=\"season{{ episode.season }}\">
                                                <a href=\"{{ path('watch-one', {'id': episode.id}) }}\">
                                                    <div class=\"episode\">
                                                        <div class=\"episode-image\">
                                                            <div class=\"episode-number-wrapper\">
                                                                <div class=\"episode-number\">{{ key }}</div>
                                                            </div>
                                                            <img style=\"height: 100px;margin-right: 20px;border-radius: 4px\"
                                                                 src=\"{{ asset('images/episode.jpg') }}\"
                                                                 alt=\"episode_image\"/>
                                                        </div>
                                                        <div class=\"episode-content\">
                                                            <div class=\"episode-title\">
                                                                {{ episode.name }}
                                                            </div>
                                                            <div class=\"episode-description\">
                                                                {{ episode.description }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <h1 id=\"shows\" class=\"category_label\">Seriale</h1>
        <div class=\"movie\">
            {% for movie in shows %}
                <a class=\"movie-hero\" onclick=\"showModal({{ movie.id }})
                        // document.getElementById('navbar').style.background='rgba(0, 0, 0, .7)'
                        \">
                    <img class=\"movie-hero-image\" src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\">
                </a>
                {% if is_granted('ROLE_ADMIN') %}
                    <a class=\"hide-button-wrapper\"
                       href=\"{{ path('hide', {'id': movie.id}) }}\">
                        <div class=\"hide-button\">
                            <i class=\"bi bi-arrow-bar-left\"></i>
                        </div>
                    </a>
                {% endif %}
                <div id=\"{{ movie.id }}\" class=\"modal\" onclick=\"hideModal({{ movie.id }})\">
                    <div class=\"modal-background\">
                    </div>
                    <div class=\"modal-sizing\">
                        <div class=\"modal-content\" id=\"modal-content\">
                            <div class=\"modal-header\"
                                    {#                                 style=\"background-image: url({{ movie.img }})\" #}
                            >
                                <a class=\"modal-image\" href=\"{{ path('show-one', {'id': movie.id}) }}\"
                                   style=\"text-decoration: none\">
                                    <img class=\"modal-image\" src=\"{{ movie.img }}\" alt=\"movie_image\">
                                </a>

                                <div class=\"exit-button\">
                                    <span onclick=\"hideModal({{ movie.id }})\"
                                          class=\"bi bi-x-circle-fill modal-exit\"></span>
                                </div>
                            </div>
                            <div class=\"modal-desc\">
                                <div class=\"modal-movie-info-primary\">
                                    <h2 class=\"modal-title\">{{ movie.title }}</h2>
                                    <p class=\"modal-movie-description\">{{ movie.description }}</p>
                                </div>
                                <div class=\"modal-movie-info-secondary\">
                                    {{ movie.year }}
{#                                    <a class=\"profile_button\" href=\"{{ path('show-one', {'id': movie.id}) }}\"> Oglądaj teraz </a>#}
                                    <div class=\"modal-movie-info-secondary-categories\">
                                        <p style=\"color: gray;display: inline-block\">Kategorie:</p>
                                        {% set categoryArray = { } %}  {# initialize category array #}
                                        {% for key, category in movie.categories %}
                                            {% set categoryArray = categoryArray|merge({(key~'_'): category.name}) %} {# merge to the array, convert key to string, int doesnt work #}
                                        {% endfor %}
                                        {{ categoryArray|join(', ') }}  {# implode array #}
                                    </div>
                                </div>
                            </div>
                            <div>
                            {% if is_granted('ROLE_ADMIN') %}
                                <a class=\"my-list-button\" style=\"color:red;border: 1px solid red\" href=\"{{ path('hide', {'id': movie.id}) }}\">Ukryj film</a>
                            {% endif %}
                            </div>
                            <div style=\"margin-top: 20px\">
                            {% if movie.isLiked == true %}
                                    <a class=\"my-list-button\" href=\"{{ path('dislike', {'id': movie.id}) }}\"> Usuń z mojej listy</a>
                                {% else %}
                                    <a class=\"my-list-button\" href=\"{{ path('like', {'id': movie.id}) }}\"> Dodaj do mojej listy</a>
                            {% endif %}
                            </div>
                            {% if movie.episodes != null %}
                                <div class=\"modal-movie-episodes\">
                                    <div class=\"modal-movie-episodes-header\">
                                        <p>Odcinki</p>
                                        <label>
                                            <select>
                                                <option>Sezon 1</option>
                                                <option>Sezon 2</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class=\"episode-wrapper\">
                                    {% for key, episode in movie.episodes %}
                                        <div class=\"season{{ episode.season }}\">
                                            <a href=\"{{ path('watch-one', {'id': episode.id}) }}\">
                                            <div class=\"episode\">
                                                <div class=\"episode-image\">
                                                    <div class=\"episode-number-wrapper\">
                                                        <div class=\"episode-number\">{{ key }}</div>
                                                    </div>
                                                    <img style=\"height: 100px;margin-right: 20px;border-radius: 4px\"
                                                         src=\"{{ asset('images/episode.jpg') }}\"
                                                         alt=\"episode_image\"/>
                                                </div>
                                                <div class=\"episode-content\">
                                                    <div class=\"episode-title\">
                                                        {{ episode.name }}
                                                    </div>
                                                    <div class=\"episode-description\">
                                                        {{ episode.description }}
                                                    </div>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    {% endfor %}
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
        <h1 id=\"movies\" class=\"category_label\">Tylko na Netflixie</h1>
        <div class=\"movie\">
            {% for movie in originals %}
                <a class=\"movie-hero\" onclick=\"showModal({{ movie.id }})
                        // document.getElementById('navbar').style.background='rgba(0, 0, 0, .7)'
                        \">
                    <img class=\"movie-hero-image\" src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\">
                </a>
                {% if is_granted('ROLE_ADMIN') %}
                    <a class=\"hide-button-wrapper\"
                       href=\"{{ path('hide', {'id': movie.id}) }}\">
                        <div class=\"hide-button\">
                            <i class=\"bi bi-arrow-bar-left\"></i>
                        </div>
                    </a>
                {% endif %}
                <div id=\"{{ movie.id }}\" class=\"modal\" onclick=\"hideModal({{ movie.id }})\">
                    <div class=\"modal-background\">
                    </div>
                    <div class=\"modal-sizing\">
                        <div class=\"modal-content\" id=\"modal-content\">
                            <div class=\"modal-header\"
                                    {#                                 style=\"background-image: url({{ movie.img }})\" #}
                            >
                                <a class=\"modal-image\" href=\"{{ path('show-one', {'id': movie.id}) }}\"
                                   style=\"text-decoration: none\">
                                    <img class=\"modal-image\" src=\"{{ movie.img }}\" alt=\"movie_image\">
                                </a>

                                <div class=\"exit-button\">
                                    <span onclick=\"hideModal({{ movie.id }})\"
                                          class=\"bi bi-x-circle-fill modal-exit\"></span>
                                </div>
                            </div>
                            <div class=\"modal-desc\">
                                <div class=\"modal-movie-info-primary\">
                                    <h2 class=\"modal-title\">{{ movie.title }}</h2>
                                    <p class=\"modal-movie-description\">{{ movie.description }}</p>
                                </div>
                                <div class=\"modal-movie-info-secondary\">
                                    {{ movie.year }}
                                    {#                                    <a class=\"profile_button\" href=\"{{ path('show-one', {'id': movie.id}) }}\"> Oglądaj teraz </a>#}
                                    <div class=\"modal-movie-info-secondary-categories\">
                                        <p style=\"color: gray;display: inline-block\">Kategorie:</p>
                                        {% set categoryArray = { } %}  {# initialize category array #}
                                        {% for key, category in movie.categories %}
                                            {% set categoryArray = categoryArray|merge({(key~'_'): category.name}) %} {# merge to the array, convert key to string, int doesnt work #}
                                        {% endfor %}
                                        {{ categoryArray|join(', ') }}  {# implode array #}
                                    </div>
                                </div>
                            </div>
                            <div>
                                {% if is_granted('ROLE_ADMIN') %}
                                    <a class=\"my-list-button\" style=\"color:red;border: 1px solid red\" href=\"{{ path('hide', {'id': movie.id}) }}\">Ukryj film</a>
                                {% endif %}
                            </div>
                            <div style=\"margin-top: 20px\">
                                {% if movie.isLiked == true %}
                                    <a class=\"my-list-button\" href=\"{{ path('dislike', {'id': movie.id}) }}\"> Usuń z mojej listy</a>
                                {% else %}
                                    <a class=\"my-list-button\" href=\"{{ path('like', {'id': movie.id}) }}\"> Dodaj do mojej listy</a>
                                {% endif %}
                            </div>
                            {% if movie.episodes != null %}
                                <div class=\"modal-movie-episodes\">
                                    <div class=\"modal-movie-episodes-header\">
                                        <p>Odcinki</p>
                                        <label>
                                            <select>
                                                <option>Sezon 1</option>
                                                <option>Sezon 2</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class=\"episode-wrapper\">
                                        {% for key, episode in movie.episodes %}
                                            <div class=\"season{{ episode.season }}\">
                                                <a href=\"{{ path('watch-one', {'id': episode.id}) }}\">
                                                    <div class=\"episode\">
                                                        <div class=\"episode-image\">
                                                            <div class=\"episode-number-wrapper\">
                                                                <div class=\"episode-number\">{{ key }}</div>
                                                            </div>
                                                            <img style=\"height: 100px;margin-right: 20px;border-radius: 4px\"
                                                                 src=\"{{ asset('images/episode.jpg') }}\"
                                                                 alt=\"episode_image\"/>
                                                        </div>
                                                        <div class=\"episode-content\">
                                                            <div class=\"episode-title\">
                                                                {{ episode.name }}
                                                            </div>
                                                            <div class=\"episode-description\">
                                                                {{ episode.description }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

    </section>

    </body>

{% endblock %}

{% block javascript %}
{{ encore_entry_script_tags('app') }}
<script>

function hideModal(modalId) {
    document.getElementById(modalId).style.display = 'none'
}

function showModal(modalId) {
    document.getElementById(modalId).style.display = 'block'
}

</script>
{% endblock %}


{% block stylesheets %}

    <style>


        {#======================
                Global
        ======================#}

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            background-color: black;
            color: white;
        }

        select {
            background-color: #181818;
            color: white;
            border: 0 solid red ;
        }

        a {
            text-decoration: none;
        }

        a.right {
            float: right;
            padding: 13px 0;
            align-items: center;
        }

        a.active {
            font-weight: 900;

        }

        h5 {
            font-size: 20px;
        }

        i {
            font-size: 23px;
            margin-top: 8px;
            margin-right: 8px;
        }

        h1.category_label {
            font-size: 21px;
        }

        {#======================
           Modal - Movie Card
         ======================#}

        .modal {
            overflow: hidden;
        }

        .modal-background {
            position: absolute;
            background: rgba(0, 0, 0, 0.55);
            /*background-color: red;*/
            width: 100%;
            height: 150vh;
            border-radius: .3rem;
        }

        .modal-sizing {
            position: relative;
            animation: blowUpModal .3s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
            top: 50px;
            /*left: 30%;*/
            text-align: center;
            height: 90%;
            width: 45%;
            justify-content: center;
            align-self: center;
            margin: 0 auto;
            align-content: center;
            /*border: 1px solid gray;*/
            pointer-events: none;
        }

        #modal-content::-webkit-scrollbar {
            width: 8px;
            background-color: rgba(33, 32, 32, 0.85);
        }

        #modal-content::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(91, 91, 91, 0.49);
        }

        #modal-content::-webkit-scrollbar-thumb {
            background-color: rgba(142, 15, 15, 0.85);
            outline: 1px solid slategrey;
        }


        .modal-header {
            position: relative;
            /*top: 10px;*/
            /*left: 0;*/
            /*height: 100%;*/
            /*height: 470px;*/
            /*width: 100%;*/
            overflow: hidden;
            padding: 0;
            border-bottom: 1px solid gray;
            background-size: cover;
        }

        .modal-desc {
            width: 100%;
            height: 200px;
            display: flex;
            flex-direction: row;
        }

        .modal-movie-info-primary {
            margin-top: 15px;
            margin-left: 30px;
            text-align: left;
            width: 65%;
        }

        .modal-movie-info-secondary {
            margin-left: 10px;
            margin-top: 25px;
            width: 35%;
            text-align: center;
        }

        .modal-movie-info-secondary-categories {
            margin-top: 20px;
        }

        .modal-image {
            width: 100%;
            transition: transform 1s;
        }

        .modal-image:hover {
            transition: transform 1s;
            -ms-transform: scale(1.03);
            -webkit-transform: scale(1.03);
            transform: scale(1.03);
        }

        .modal-content {
            max-height: calc(100vh + 2210px);
            overflow-y: auto;
            background-color: #181818;
            color: white;
            height: 100%;
            width: 100%;
            margin: 0 auto;
        }

        .modal-movie-episodes {
            display: flex;
            flex-direction: column;
            margin-bottom: 50px;
        }

        .modal-movie-episodes-header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            height: 50px;
            font-size: 24px;
            margin-left: 50px;
            margin-top: 80px;
            width: 85%;
        }

        .episode {
            cursor: pointer;
            margin-right: 50px;
            margin-left: 50px;
            align-items: center;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            height: 150px;
            border-bottom: 1px solid #404040;
            border-radius: 8px;
        }

        .episode:hover {
            background: linear-gradient(30deg, rgba(0, 0, 0, 1) 0%, rgba(22, 15, 15, 1) 35%, rgba(45, 48, 50, 1) 100%);
        }

        .episode-image {
            display: flex;
            flex-direction: row;
        }

        .episode-number-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .episode-number {
            height: 100%;
            width: 50px;
            font-size: 26px;
            color: gray;
        }

        .episode-title {
            color: white;
            text-align: left;
            width: 100%;
        }

        .episode-description {
            line-height: 19px;
            overflow: hidden;
            height: 76px;
            color: gray;
            font-size: 14px;
            text-align: left;
            margin-right: 30px;
        }

        .modal-exit {
            font-size: 40px;
            /*bottom: 72%;*/
            /*left: 45%;*/
            bottom: 50vh;
            left: 20vw;
            /*position: -webkit-sticky;*/
            /*position: sticky;*/
            /*top: -2000px;*/
            color: black;
        }

        .exit-button {
            position: absolute;
            bottom: 15em;
            right: 25px;
        }

        {#======================
                Buttons
        ======================#}

        .profile_button {
            color: gray;
            padding: .5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid grey;
            text-decoration: none;
            flex-wrap: nowrap;
        }

        .my-list-button {
            color: gray;
            padding: .5em 1.5em;
            letter-spacing: 2px;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid grey;
            text-decoration: none;
        }

        .dropdown_submit {
            font-size: 13px;
            display: flex;
            flex-direction: row;
            background: none !important;
            border: none;
            color: white;
            cursor: pointer;
            margin-left: 5px;
            line-height: 40px;
        }


        .dropdown_submit:hover {
            text-decoration: underline;
        }

        .hide-button-wrapper {
            margin-left: -25px;
            writing-mode: vertical-rl;
            text-orientation: upright;
            text-decoration: none;
            text-align: center;
        }

        .hide-button {
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px;
            color: gray;
            font-weight: bold;
            background: linear-gradient(30deg, rgba(0, 0, 0, 1) 0%, rgba(22, 15, 15, 1) 35%, rgba(45, 48, 50, 1) 100%);
            height: 150px;
        }

        {#======================
                Navigation
         ======================#}

        .navbar_wrapper {
            display: flex;
            /*background: rgb(0, 0, 0);*/
            background: linear-gradient(360deg, rgba(0, 0, 0, 1) 0%, rgba(1, 1, 1, 1) 35%, rgba(40, 40, 40, 1) 100%);
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
            text-decoration: none;
            font-size: 14px;
        }

        .navbar a:hover {
            opacity: 0.8;
        }

        .navbar_end {
            gap: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
        }

        .navbar_logo {
            margin-left: 30px;
            height: 31px;
            margin-right: 15px;
        }

        .userAvatar {
            width: 30px;
            border-radius: 4px;
            margin-right: 25px;
        }

        #search {
            display: flex;
            float: right;
            margin-top: 12px;
        }

        .searchInput {
            font-size: 15px;
            font-family: var(--bs-body-font-family), bootstrap-icons;
            height: 35px;
            width: 300px;
            border: 1px solid gray;
            border-radius: 7px;
        }

        {#======================
                Content
        ======================#}

        .movie_container {
            margin-left: 30px;
        }

        .movie {
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            grid-gap: 25px;
            grid-template-columns:
            repeat(6, minmax(270px, 1fr));
        }

        /*.movie > .hide-button-wrapper {*/
        /*    grid-gap: 25px;*/
        /*}*/

        .movie-hero {
            transition: transform 0.3s;
            cursor: pointer;

        }

        .movie-hero:hover {
            transition: transform 0.3s;
            -ms-transform: scale(1.3);
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        .movie-hero-image {
            border-radius: 2px;
            width: 270px;
            height: auto;
        }

        {#======================
                 Dropdown
         ======================#}

        .dropdown {
            width: 8%;
            left: 0;
        }

        .dropdown-content {
            transform-origin: top center;
            animation: growDown 200ms ease-in-out forwards;
            margin-top: 55px;
            display: none;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.6);
            border: 1px solid gray;
            border-radius: 3px;
            min-width: 135px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        }

        .dropdown-content a {
            font-family: var(--bs-body-font-family), bootstrap-icons;
            font-size: 13px;
            color: white;
            text-decoration: none;
            text-align: center;
        }

        .dropdown-content a:hover {
            text-decoration: underline;
        }

        .dropdown:hover .dropdown-content {
            margin-right: 10px;
            flex-direction: column;
            display: flex;
            min-height: 100px;
        }

        @keyframes growDown {
            0% {
                transform: scaleY(0)
            }
            80% {
                transform: scaleY(1.1)
            }
            100% {
                transform: scaleY(1)
            }
        }

        @keyframes blowUpModal {
            0% {
                transform: scale(0);
            }
            100% {
                transform: scale(1);
            }
        }

        /*@keyframes blowUpContent {*/
        /*    0% {*/
        /*        transform:scale(1);*/
        /*        opacity:1;*/
        /*    }*/
        /*    99.9% {*/
        /*        transform:scale(2);*/
        /*        opacity:0;*/
        /*    }*/
        /*    100% {*/
        /*        transform:scale(0);*/
        /*    }*/
        /*}*/

        /*@keyframes blowUpContentTwo {*/
        /*    0% {*/
        /*        transform:scale(2);*/
        /*        opacity:0;*/
        /*    }*/
        /*    100% {*/
        /*        transform:scale(1);*/
        /*        opacity:1;*/
        /*    }*/
        /*}*/

        /*@keyframes blowUpModalTwo {*/
        /*    0% {*/
        /*        transform:scale(1);*/
        /*        opacity:1;*/
        /*    }*/
        /*    100% {*/
        /*        transform:scale(0);*/
        /*        opacity:0;*/
        /*    }*/
        /*}*/

        .dropdown-profile {
            align-content: center;
            font-size: 12px;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .profile_wrapper {
            display: flex;
            flex-direction: row;
        }

        .form-control {
            width: 30%;
            height: 100%;
            border: none;
            border-radius: 5px;
            padding: 0;
            margin-left: 10px;
        }

    </style>
{% endblock %}
", "movies/index.html.twig", "/var/www/symfony_docker/templates/movies/index.html.twig");
    }
}
