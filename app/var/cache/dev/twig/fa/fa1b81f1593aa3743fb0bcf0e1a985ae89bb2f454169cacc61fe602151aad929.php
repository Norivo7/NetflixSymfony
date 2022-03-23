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
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('navigation', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 217
        echo "
";
        // line 218
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

    // line 35
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 36
        echo "    <div class=\"navbar_wrapper\">
        <div class=\"navbar\">
            <a href=\"/\" target=\"_parent\">
                <img class=\"navbar_logo\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"netflix_logo\"/>
            </a>
            <a ";
        // line 41
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "attributes", [], "any", false, false, false, 41), "get", [0 => "_route"], "method", false, false, false, 41), "browse")) {
            // line 42
            echo " class=\"active\" ";
        }
        // line 43
        echo "                    href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("browse");
        echo "\">Strona główna</a>
            <a ";
        // line 44
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "attributes", [], "any", false, false, false, 44), "get", [0 => "_route"], "method", false, false, false, 44), "shows")) {
            // line 45
            echo " class=\"active\" ";
        }
        // line 46
        echo "                    href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shows");
        echo "\">Seriale i programy</a>
            <a ";
        // line 47
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", [0 => "_route"], "method", false, false, false, 47), "movies")) {
            // line 48
            echo " class=\"active\" ";
        }
        // line 49
        echo "                    href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("movies");
        echo "\">Filmy</a>
            <a ";
        // line 50
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "attributes", [], "any", false, false, false, 50), "get", [0 => "_route"], "method", false, false, false, 50), "new")) {
            // line 51
            echo " class=\"active\" ";
        }
        // line 52
        echo "                    href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new");
        echo "\">Nowe i popularne</a>
            <a ";
        // line 53
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "attributes", [], "any", false, false, false, 53), "get", [0 => "_route"], "method", false, false, false, 53), "myList")) {
            // line 54
            echo " class=\"active\" ";
        }
        // line 55
        echo "                    href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("myList");
        echo "\">Moja lista</a>
            ";
        // line 56
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 57
            echo "                <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_panel");
            echo "\" style=\"color: red\">Przejdź do panelu administratora</a>
            ";
        }
        // line 59
        echo "
            <div class=\"navbar_end\">
                <div id=\"search\">
                    <form method=\"GET\" action=\"";
        // line 62
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
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("notif");
        echo "\">
                    <i style=\"padding: 1px;margin-left: 10px\" class=\"bi bi-bell-fill\"></i>
                </a>
            </div>

        </div>
        <div class=\"dropdown\">
            <a class=\"right dropbtn\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">
                <img class=\"userAvatar\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "\" alt=\"avatar\">
                <div class=\"dropdown-content\">
                    ";
        // line 82
        $context["profile_id"] = 0;
        // line 83
        echo "
                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["profiles"]) || array_key_exists("profiles", $context) ? $context["profiles"] : (function () { throw new RuntimeError('Variable "profiles" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 85
            echo "                        <form id=\"changeProfile\" method=\"POST\">
                            <div class=\"dropdown-profile\">
                                <a class=\"profile_wrapper\">
                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"hidden\"
                                            name=\"id\"
                                            value=\"";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["profile_id"]) || array_key_exists("profile_id", $context) ? $context["profile_id"] : (function () { throw new RuntimeError('Variable "profile_id" does not exist.', 93, $this->source); })()), "html", null, true);
            echo "\"
                                    >
                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"image\"
                                            name=\"id\"
                                            value=\"";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "avatar", [], "any", false, false, false, 100), "html", null, true);
            echo "\"
                                            src=\"";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "avatar", [], "any", false, false, false, 101), "html", null, true);
            echo "\"
                                    >
                                    <button class=\"dropdown_submit\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo "</button>
                                </a>
                            </div>
                        </form>
                        ";
            // line 107
            $context["profile_id"] = ((isset($context["profile_id"]) || array_key_exists("profile_id", $context) ? $context["profile_id"] : (function () { throw new RuntimeError('Variable "profile_id" does not exist.', 107, $this->source); })()) + 1);
            // line 108
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manageUser");
        echo "\"> &#xF4CB; Zarządzaj profilami</a>
                    <hr>
                    <a style=\"margin-bottom: 15px\" href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\">Konto</a>
                    <a href=\"#\">Centrum Pomocy</a>
                    <hr>
                    <a style=\"margin-bottom: 15px\" href=\"";
        // line 114
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

    // line 122
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 123
        echo "    <body>
    <section class=\"movie_container\">
        <h1 id=\"movies\" class=\"category_label\">Filmy - Test Modalu</h1>

        <div class=\"movie\">
            ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 128, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 129
            echo "                <a class=\"movie-hero\" onclick=\"document.getElementById('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 129), "html", null, true);
            echo "').style.display='block';
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
            echo "\" class=\"modal\">
                    <div class=\"modal-background\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\"
";
            // line 147
            echo "                            >
                                <a class=\"modal-image\" href=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-one", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 148)]), "html", null, true);
            echo "\" style=\"text-decoration: none\">
                                    <img class=\"modal-image\" src=\"";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 149), "html", null, true);
            echo "\" alt=\"movie_image\">
                                </a>
                                <div class=\"exit-button\">
                                    <span onclick=\"document.getElementById('";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 152), "html", null, true);
            echo "').style.display='none'\"
                                          class=\"bi bi-x-circle-fill modal-exit\"></span>
                                </div>
                            </div>
                            <div class=\"modal-desc\">
                                <div class=\"modal-movie-info-primary\">
                                    <h2 class=\"modal-title\">";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 158), "html", null, true);
            echo "</h2>
                                    <p class=\"modal-movie-description\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "description", [], "any", false, false, false, 159), "html", null, true);
            echo "</p>
                                </div>
                                <div class=\"modal-movie-info-secondary\">
                                    <a class=\"profile_button\" href=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-one", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 162)]), "html", null, true);
            echo "\"> Oglądaj teraz </a>
                                        <div class=\"modal-movie-info-secondary-categories\">
                                            ";
            // line 164
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "categories", [], "any", false, false, false, 164));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 165
                echo "                                                ";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                                        </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "        </div>

        <h1 id=\"shows\" class=\"category_label\">Seriale</h1>
        <div class=\"movie\">
            ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shows"]) || array_key_exists("shows", $context) ? $context["shows"] : (function () { throw new RuntimeError('Variable "shows" does not exist.', 180, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 181
            echo "                <a class=\"movie-hero\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-one", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 181)]), "html", null, true);
            echo "\">
                    <img class=\"movie-hero-image\" src=\"";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 182), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 182), "html", null, true);
            echo "\">
                </a>
                ";
            // line 184
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 185
                echo "                    <a class=\"hide-button-wrapper\"
                       href=\"";
                // line 186
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hide", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 186)]), "html", null, true);
                echo "\">
                        <div class=\"hide-button\">
                            <i class=\"bi bi-arrow-bar-left\"></i>
                        </div>
                    </a>
                ";
            }
            // line 192
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "        </div>

        <h1 id=\"movies\" class=\"category_label\">Tylko na Netflixie</h1>
        <div class=\"movie\">
            ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["originals"]) || array_key_exists("originals", $context) ? $context["originals"] : (function () { throw new RuntimeError('Variable "originals" does not exist.', 197, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 198
            echo "                <a class=\"movie-hero\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-one", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 198)]), "html", null, true);
            echo "\">
                    <img class=\"movie-hero-image\" src=\"";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 199), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 199), "html", null, true);
            echo "\">
                </a>
                ";
            // line 201
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 202
                echo "                    <a class=\"hide-button-wrapper\"
                       href=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hide", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 203)]), "html", null, true);
                echo "\">
                        <div class=\"hide-button\">
                            <i class=\"bi bi-arrow-bar-left\"></i>
                        </div>
                    </a>
                ";
            }
            // line 209
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "        </div>

    </section>

    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 219
        echo "
    <style>

        ";
        // line 225
        echo "
        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            background-color: black;
            color: white;
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
        // line 260
        echo "
        .modal-background {
            background: rgba(0, 0, 0, .7);
        }

        .modal {
            animation: blowUpModal .3s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
            top: 2%;
            left: 30%;
            text-align: center;
            height: 120%;
            width: 45%;
            justify-content: center;
            align-self: center;
            margin: 0 auto;
            align-content: center;
        }

        .modal-header {
            position: relative;
            /*top: 10px;*/
            /*left: 0;*/
            /*height: 100%;*/
            height: 470px;
            /*width: 100%;*/
            overflow: hidden;
            padding: 0;
            border-bottom: 1px solid gray;
            background-size: cover;
        }

        .modal-desc {
            width: 100%;
            display:flex;
            flex-direction:row ;
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
            bottom: 400px;
            right: 25px;
        }
        
        ";
        // line 359
        echo "
        .profile_button {
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

        .hide-button-wrapper
        {
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
        // line 406
        echo "
        .navbar_wrapper {
            display: flex;
            background: rgb(0, 0, 0);
            background: linear-gradient(360deg, rgba(0, 0, 0, 1) 0%, rgba(22, 15, 15, 1) 35%, rgba(45, 48, 50, 1) 100%);
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
        // line 474
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
        // line 510
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
                transform:scale(0);
            }
            100% {
                transform:scale(1);
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
        return array (  879 => 510,  844 => 474,  777 => 406,  731 => 359,  633 => 260,  599 => 225,  594 => 219,  584 => 218,  568 => 210,  562 => 209,  553 => 203,  550 => 202,  548 => 201,  541 => 199,  536 => 198,  532 => 197,  526 => 193,  520 => 192,  511 => 186,  508 => 185,  506 => 184,  499 => 182,  494 => 181,  490 => 180,  484 => 176,  470 => 167,  461 => 165,  457 => 164,  452 => 162,  446 => 159,  442 => 158,  433 => 152,  427 => 149,  423 => 148,  420 => 147,  412 => 142,  403 => 136,  400 => 135,  398 => 134,  391 => 132,  384 => 129,  380 => 128,  373 => 123,  363 => 122,  346 => 114,  340 => 111,  334 => 109,  328 => 108,  326 => 107,  319 => 103,  314 => 101,  310 => 100,  300 => 93,  290 => 85,  286 => 84,  283 => 83,  281 => 82,  276 => 80,  272 => 79,  262 => 72,  249 => 62,  244 => 59,  238 => 57,  236 => 56,  231 => 55,  228 => 54,  226 => 53,  221 => 52,  218 => 51,  216 => 50,  211 => 49,  208 => 48,  206 => 47,  201 => 46,  198 => 45,  196 => 44,  191 => 43,  188 => 42,  186 => 41,  181 => 39,  176 => 36,  166 => 35,  156 => 19,  152 => 17,  149 => 16,  145 => 14,  142 => 13,  138 => 11,  135 => 10,  131 => 8,  128 => 7,  124 => 5,  121 => 4,  111 => 3,  88 => 20,  86 => 3,  83 => 2,  73 => 1,  63 => 218,  60 => 217,  58 => 122,  55 => 121,  53 => 35,  50 => 34,  48 => 1,);
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
        <h1 id=\"movies\" class=\"category_label\">Filmy - Test Modalu</h1>

        <div class=\"movie\">
            {% for movie in movies %}
                <a class=\"movie-hero\" onclick=\"document.getElementById('{{ movie.id }}').style.display='block';
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
                <div id=\"{{ movie.id }}\" class=\"modal\">
                    <div class=\"modal-background\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\"
{#                                 style=\"background-image: url({{ movie.img }})\"#}
                            >
                                <a class=\"modal-image\" href=\"{{ path('show-one', {'id': movie.id}) }}\" style=\"text-decoration: none\">
                                    <img class=\"modal-image\" src=\"{{ movie.img }}\" alt=\"movie_image\">
                                </a>
                                <div class=\"exit-button\">
                                    <span onclick=\"document.getElementById('{{ movie.id }}').style.display='none'\"
                                          class=\"bi bi-x-circle-fill modal-exit\"></span>
                                </div>
                            </div>
                            <div class=\"modal-desc\">
                                <div class=\"modal-movie-info-primary\">
                                    <h2 class=\"modal-title\">{{ movie.title }}</h2>
                                    <p class=\"modal-movie-description\">{{ movie.description }}</p>
                                </div>
                                <div class=\"modal-movie-info-secondary\">
                                    <a class=\"profile_button\" href=\"{{ path('show-one', {'id': movie.id}) }}\"> Oglądaj teraz </a>
                                        <div class=\"modal-movie-info-secondary-categories\">
                                            {% for category in movie.categories %}
                                                {{ category }}
                                            {% endfor %}
                                        </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <h1 id=\"shows\" class=\"category_label\">Seriale</h1>
        <div class=\"movie\">
            {% for movie in shows %}
                <a class=\"movie-hero\" href=\"{{ path('show-one', {'id': movie.id}) }}\">
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
            {% endfor %}
        </div>

        <h1 id=\"movies\" class=\"category_label\">Tylko na Netflixie</h1>
        <div class=\"movie\">
            {% for movie in originals %}
                <a class=\"movie-hero\" href=\"{{ path('show-one', {'id': movie.id}) }}\">
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
            {% endfor %}
        </div>

    </section>

    </body>

{% endblock %}

{% block stylesheets %}

    <style>

        {#======================
                Global
        ======================#}

        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            background-color: black;
            color: white;
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

        .modal-background {
            background: rgba(0, 0, 0, .7);
        }

        .modal {
            animation: blowUpModal .3s cubic-bezier(0.165, 0.840, 0.440, 1.000) forwards;
            top: 2%;
            left: 30%;
            text-align: center;
            height: 120%;
            width: 45%;
            justify-content: center;
            align-self: center;
            margin: 0 auto;
            align-content: center;
        }

        .modal-header {
            position: relative;
            /*top: 10px;*/
            /*left: 0;*/
            /*height: 100%;*/
            height: 470px;
            /*width: 100%;*/
            overflow: hidden;
            padding: 0;
            border-bottom: 1px solid gray;
            background-size: cover;
        }

        .modal-desc {
            width: 100%;
            display:flex;
            flex-direction:row ;
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
            bottom: 400px;
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

        .hide-button-wrapper
        {
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
            background: rgb(0, 0, 0);
            background: linear-gradient(360deg, rgba(0, 0, 0, 1) 0%, rgba(22, 15, 15, 1) 35%, rgba(45, 48, 50, 1) 100%);
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
                transform:scale(0);
            }
            100% {
                transform:scale(1);
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
