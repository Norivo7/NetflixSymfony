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
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('navigation', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('body', $context, $blocks);
        // line 180
        echo "

";
        // line 182
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
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "attributes", [], "any", false, false, false, 3), "get", [0 => "_route"], "method", false, false, false, 3), "browse")) {
            // line 4
            echo "            <title>Strona główna - Netflix</title>
        ";
        }
        // line 6
        echo "        ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "attributes", [], "any", false, false, false, 6), "get", [0 => "_route"], "method", false, false, false, 6), "shows")) {
            // line 7
            echo "            <title>Seriale i programy - Netflix</title>
        ";
        }
        // line 9
        echo "        ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9), "get", [0 => "_route"], "method", false, false, false, 9), "movies")) {
            // line 10
            echo "            <title>Filmy - Netflix</title>
        ";
        }
        // line 12
        echo "        ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "attributes", [], "any", false, false, false, 12), "get", [0 => "_route"], "method", false, false, false, 12), "new")) {
            // line 13
            echo "            <title>Nowe i popularne - Netflix</title>
        ";
        }
        // line 15
        echo "        ";
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", [0 => "_route"], "method", false, false, false, 15), "myList")) {
            // line 16
            echo "            <title>Moja lista - Netflix</title>
        ";
        }
        // line 18
        echo "
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 35
        echo "    <div class=\"navbarWrapper\">
        <div class=\"navbar\">
            <div class=\"brandLogoWrapper\">
                <a class=\"logo\" href=\"/\" target=\"_parent\">
                    <img class=\"logo\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
                </a>
            </div>
            <a ";
        // line 42
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", [0 => "_route"], "method", false, false, false, 42), "browse")) {
            // line 43
            echo " class=\"active\" ";
        }
        // line 44
        echo "                    href=\"/browse\">Strona główna</a>
            <a ";
        // line 45
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "attributes", [], "any", false, false, false, 45), "get", [0 => "_route"], "method", false, false, false, 45), "shows")) {
            // line 46
            echo " class=\"active\" ";
        }
        // line 47
        echo "                    href=\"/shows\">Seriale i programy</a>
            <a ";
        // line 48
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "attributes", [], "any", false, false, false, 48), "get", [0 => "_route"], "method", false, false, false, 48), "movies")) {
            // line 49
            echo " class=\"active\" ";
        }
        // line 50
        echo "                    href=\"/movies\">Filmy</a>
            <a ";
        // line 51
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "request", [], "any", false, false, false, 51), "attributes", [], "any", false, false, false, 51), "get", [0 => "_route"], "method", false, false, false, 51), "new")) {
            // line 52
            echo " class=\"active\" ";
        }
        // line 53
        echo "                    href=\"/new\">Nowe i popularne</a>
            <a ";
        // line 54
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", [0 => "_route"], "method", false, false, false, 54), "myList")) {
            // line 55
            echo " class=\"active\" ";
        }
        // line 56
        echo "                    href=\"/myList\">Moja lista</a>
            ";
        // line 57
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 58
            echo "                <a href=\"/admin\" style=\"color: red\">Przejdź do panelu administratora</a>
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
                <a class=\"right\" href=\"/notif\">
                    <i style=\"padding: 1px;margin-left: 10px\" class=\"bi bi-bell-fill\"></i>
                </a>
            </div>

        </div>
        <div class=\"dropdown\">
            <a class=\"right dropbtn\" href=\"/profile\">
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
                            <div class=\"profile\">
                                <a>
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
                                    <a
                                            ";
            // line 106
            echo "                                            style=\"margin-left: 5px\">
                                        ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", [], "any", false, false, false, 107), "html", null, true);
            echo "
                                    </a>
                                </a>
                            </div>
                        </form>
                        ";
            // line 112
            $context["profile_id"] = ((isset($context["profile_id"]) || array_key_exists("profile_id", $context) ? $context["profile_id"] : (function () { throw new RuntimeError('Variable "profile_id" does not exist.', 112, $this->source); })()) + 1);
            // line 113
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                    <a href=\"/manageUser\">Zarządzaj profilami</a>
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

    // line 126
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 127
        echo "    <body>
    <section id=\"main-container\">
        <h5 id=\"serials\" class=\"title-home\">Filmy</h5>
        <div class=\"box\">
            ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 132
            echo "                <a onclick=\"document.getElementById('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 132), "html", null, true);
            echo "').style.display='block'\"
";
            // line 134
            echo "                >
                    <img src=\"";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 135), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 135), "html", null, true);
            echo "\">
                </a>

                <div id=\"";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 138), "html", null, true);
            echo "\" class=\"modal\">
                    <div class=\"modal-content\">
                        <div class=\"modal-desc\">
                            <a href=\"/show/";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 141), "html", null, true);
            echo "\" style=\"text-decoration: none\">
                                <img style=\"width: 100%\" src=\"";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 142), "html", null, true);
            echo "\">
                            </a>
                            <span onclick=\"document.getElementById('";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 144), "html", null, true);
            echo "').style.display='none'\" class=\"bi bi-x-circle-fill modal-exit\"></span>
                            <h1 class=\"modal-title\">";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 145), "html", null, true);
            echo "</h1>
                            <p>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "description", [], "any", false, false, false, 146), "html", null, true);
            echo "</p>
                            <a class=\"profileButton\" href=\"/show/";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 147), "html", null, true);
            echo "\"> Oglądaj teraz</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "
        </div>
        <h5 id=\"serials\" class=\"title-home\">Seriale</h5>
        <div class=\"box\">
            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shows"]) || array_key_exists("shows", $context) ? $context["shows"] : (function () { throw new RuntimeError('Variable "shows" does not exist.', 156, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 157
            echo "                <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 157), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 157), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 157), "html", null, true);
            echo "\"></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "        </div>

        <h5 id=\"movies\" class=\"title-home\">Tylko na Netflixie</h5>
        <div class=\"box\">
            ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["originals"]) || array_key_exists("originals", $context) ? $context["originals"] : (function () { throw new RuntimeError('Variable "originals" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 164
            echo "                <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 164), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 164), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 164), "html", null, true);
            echo "\"></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "        </div>

        ";
        // line 169
        echo "        ";
        // line 170
        echo "        ";
        // line 171
        echo "        ";
        // line 172
        echo "        ";
        // line 173
        echo "        ";
        // line 174
        echo "
    </section>

    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 182
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 183
        echo "    <style>

        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            background-color: black;
            color: white;
        }

        .modal {
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
        .modal-desc {
            width: 100%;
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
            position: relative;
            /*bottom: 72%;*/
            /*left: 45%;*/
            bottom: 50vh;
            left: 20vw;
            color: black;
            /*position: -webkit-sticky;*/
            /*position: sticky;*/
            /*top: -2000px;*/
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
            width: 270px;
            /*width: auto;*/
            height: auto;
        }

        #search {
            margin-top: 12px;
        }

        #main-container {
            margin-left: 30px;
        }

        .searchInput {
            font-size: 15px;
            font-family: var(--bs-body-font-family), bootstrap-icons;
            height: 35px;
            width: 300px;
            border: 1px solid gray;
            border-radius: 7px;
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
            transition: all 1s ease;
            width: 8%;
            left: 0;
            position: relative;
            display: inline-block;
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

        .dropdown-content {
            transform-origin: top center;
            animation: growDown 200ms ease-in-out forwards;
            left: 0;
            margin-top: 55px;
            display: none;
            position: absolute;
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.6);
            border: 3px solid white;
            min-width: 135px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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
            margin-right: 10px;
            flex-direction: column;
            display: flex;
            min-height: 100px;
        }

        .navbarWrapper {
            display: flex;
            background: rgb(0, 0, 0);
            background: linear-gradient(360deg, rgba(0, 0, 0, 1) 0%, rgba(22, 15, 15, 1) 35%, rgba(45, 48, 50, 1) 100%);
        }

        .form-control {

            width: 80%;
            border: none;
            border-radius: 5px;
            padding: 0;
            margin-left: 10px;
        }

        .profile {
            line-height: 60px;
            align-content: center;
            font-size: 12px;
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

    public function getTemplateName()
    {
        return "movies/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  480 => 183,  470 => 182,  455 => 174,  453 => 173,  451 => 172,  449 => 171,  447 => 170,  445 => 169,  441 => 166,  428 => 164,  424 => 163,  418 => 159,  405 => 157,  401 => 156,  395 => 152,  384 => 147,  380 => 146,  376 => 145,  372 => 144,  367 => 142,  363 => 141,  357 => 138,  349 => 135,  346 => 134,  341 => 132,  337 => 131,  331 => 127,  321 => 126,  301 => 114,  295 => 113,  293 => 112,  285 => 107,  282 => 106,  276 => 102,  272 => 101,  262 => 94,  252 => 86,  248 => 85,  245 => 84,  243 => 83,  238 => 81,  217 => 63,  212 => 60,  208 => 58,  206 => 57,  203 => 56,  200 => 55,  198 => 54,  195 => 53,  192 => 52,  190 => 51,  187 => 50,  184 => 49,  182 => 48,  179 => 47,  176 => 46,  174 => 45,  171 => 44,  168 => 43,  166 => 42,  160 => 39,  154 => 35,  144 => 34,  120 => 18,  116 => 16,  113 => 15,  109 => 13,  106 => 12,  102 => 10,  99 => 9,  95 => 7,  92 => 6,  88 => 4,  86 => 3,  83 => 2,  73 => 1,  63 => 182,  59 => 180,  57 => 126,  54 => 125,  52 => 34,  49 => 33,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <head>
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
                                placeholder=\"&nbsp; &nbsp; &#xF52A; &nbsp;Wyszukaj..\"
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
                        <form id=\"changeProfile\" method=\"POST\">
                            <div class=\"profile\">
                                <a>
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
                                    <a
                                            {#                                      onclick=\"document.getElementById('changeProfile').submit()\" #}
                                            style=\"margin-left: 5px\">
                                        {{ profile.name }}
                                    </a>
                                </a>
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
                <a onclick=\"document.getElementById('{{ movie.id }}').style.display='block'\"
{#                   href=\"/show/{{ movie.id }}\"#}
                >
                    <img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\">
                </a>

                <div id=\"{{ movie.id }}\" class=\"modal\">
                    <div class=\"modal-content\">
                        <div class=\"modal-desc\">
                            <a href=\"/show/{{ movie.id }}\" style=\"text-decoration: none\">
                                <img style=\"width: 100%\" src=\"{{ movie.img }}\">
                            </a>
                            <span onclick=\"document.getElementById('{{ movie.id }}').style.display='none'\" class=\"bi bi-x-circle-fill modal-exit\"></span>
                            <h1 class=\"modal-title\">{{ movie.title }}</h1>
                            <p>{{ movie.description }}</p>
                            <a class=\"profileButton\" href=\"/show/{{ movie.id }}\"> Oglądaj teraz</a>
                        </div>
                    </div>
                </div>
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

        {#        <h5 id=\"popular\" class=\"title-home\">Popularne</h5> #}
        {#        <div class=\"box\"> #}
        {#            {% for movie in popular %} #}
        {#                <a href=\"/show/{{ movie.id }}\"><img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\"></a> #}
        {#            {% endfor %} #}
        {#        </div> #}

    </section>

    </body>

{% endblock %}


{% block stylesheets %}
    <style>

        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            background-color: black;
            color: white;
        }

        .modal {
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
        .modal-desc {
            width: 100%;
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
            position: relative;
            /*bottom: 72%;*/
            /*left: 45%;*/
            bottom: 50vh;
            left: 20vw;
            color: black;
            /*position: -webkit-sticky;*/
            /*position: sticky;*/
            /*top: -2000px;*/
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
            width: 270px;
            /*width: auto;*/
            height: auto;
        }

        #search {
            margin-top: 12px;
        }

        #main-container {
            margin-left: 30px;
        }

        .searchInput {
            font-size: 15px;
            font-family: var(--bs-body-font-family), bootstrap-icons;
            height: 35px;
            width: 300px;
            border: 1px solid gray;
            border-radius: 7px;
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
            transition: all 1s ease;
            width: 8%;
            left: 0;
            position: relative;
            display: inline-block;
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

        .dropdown-content {
            transform-origin: top center;
            animation: growDown 200ms ease-in-out forwards;
            left: 0;
            margin-top: 55px;
            display: none;
            position: absolute;
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.6);
            border: 3px solid white;
            min-width: 135px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
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
            margin-right: 10px;
            flex-direction: column;
            display: flex;
            min-height: 100px;
        }

        .navbarWrapper {
            display: flex;
            background: rgb(0, 0, 0);
            background: linear-gradient(360deg, rgba(0, 0, 0, 1) 0%, rgba(22, 15, 15, 1) 35%, rgba(45, 48, 50, 1) 100%);
        }

        .form-control {

            width: 80%;
            border: none;
            border-radius: 5px;
            padding: 0;
            margin-left: 10px;
        }

        .profile {
            line-height: 60px;
            align-content: center;
            font-size: 12px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-right: 10px;
        }

    </style>
{% endblock %}
", "movies/index.html.twig", "/var/www/symfony_docker/templates/movies/index.html.twig");
    }
}
