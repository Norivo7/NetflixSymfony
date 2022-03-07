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
        // line 156
        echo "
";
        // line 157
        $this->displayBlock('navigation', $context, $blocks);
        // line 203
        echo "
";
        // line 204
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
            background: rgb(0,0,0);
            background: linear-gradient(360deg, rgba(0,0,0,1) 0%, rgba(22,15,15,1) 35%, rgba(45,48,50,1) 100%);
            padding-top: 0px;
            overflow: hidden;
            width: 100%;
            /*margin-left: 40px;*/
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

        box a {
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

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 158
        echo "    <div class=\"navbar\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
        </div>
        <a ";
        // line 164
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "request", [], "any", false, false, false, 164), "attributes", [], "any", false, false, false, 164), "get", [0 => "_route"], "method", false, false, false, 164), "browse")) {
            // line 165
            echo " class=\"active\" ";
        }
        // line 166
        echo "                href=\"/browse\">Strona główna</a>
        <a ";
        // line 167
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "request", [], "any", false, false, false, 167), "attributes", [], "any", false, false, false, 167), "get", [0 => "_route"], "method", false, false, false, 167), "shows")) {
            // line 168
            echo " class=\"active\" ";
        }
        // line 169
        echo "                href=\"/shows\">Seriale i programy</a>
        <a ";
        // line 170
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "request", [], "any", false, false, false, 170), "attributes", [], "any", false, false, false, 170), "get", [0 => "_route"], "method", false, false, false, 170), "movies")) {
            // line 171
            echo " class=\"active\" ";
        }
        // line 172
        echo "                href=\"/movies\">Filmy</a>
        <a ";
        // line 173
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "request", [], "any", false, false, false, 173), "attributes", [], "any", false, false, false, 173), "get", [0 => "_route"], "method", false, false, false, 173), "new")) {
            // line 174
            echo " class=\"active\" ";
        }
        // line 175
        echo "                href=\"/new\">Nowe i popularne</a>
        <a ";
        // line 176
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 176, $this->source); })()), "request", [], "any", false, false, false, 176), "attributes", [], "any", false, false, false, 176), "get", [0 => "_route"], "method", false, false, false, 176), "myList")) {
            // line 177
            echo " class=\"active\" ";
        }
        // line 178
        echo "                href=\"/myList\">Moja lista</a>
        <div class=\"navbar_end\">
            <div id=\"search\">
                ";
        // line 182
        echo "                <form method=\"GET\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">

                    <input
                            name=\"v\"
                            type=\"search\"
                            class=\"form-control searchInput\"
                            placeholder=\"&#xF52A;  Wyszukaj..\"
                            aria-label=\"Search\"
                    >
                </form>
            </div>
            <a class=\"right\" href=\"/notif\">
                <i style=\"padding: 1px;margin-left: 10px\" class=\"bi bi-bell-fill\"></i>
            </a>
            <a class=\"right\" href=\"/profile\">
                <img class=\"userAvatar\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "\" alt=\"avatar\">
                ";
        // line 199
        echo "            </a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 204
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 205
        echo "<body>
";
        // line 218
        echo "
    <section id=\"main-container\">
        <h5 id=\"serials\" class=\"title-home\">Filmy</h5>
        <div class=\"box\">
            ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 222, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 223
            echo "                <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 223), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 223), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 223), "html", null, true);
            echo "\"></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "
        </div>
        <h5 id=\"serials\" class=\"title-home\">Seriale</h5>
        <div class=\"box\">
            ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shows"]) || array_key_exists("shows", $context) ? $context["shows"] : (function () { throw new RuntimeError('Variable "shows" does not exist.', 229, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 230
            echo "                <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 230), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 230), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 230), "html", null, true);
            echo "\"></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "        </div>

        <h5 id=\"movies\" class=\"title-home\">Tylko na Netflixie</h5>
        <div class=\"box\">
            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["originals"]) || array_key_exists("originals", $context) ? $context["originals"] : (function () { throw new RuntimeError('Variable "originals" does not exist.', 236, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 237
            echo "                <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 237), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 237), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 237), "html", null, true);
            echo "\"></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "        </div>

";
        // line 247
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
        return array (  470 => 247,  466 => 239,  453 => 237,  449 => 236,  443 => 232,  430 => 230,  426 => 229,  420 => 225,  407 => 223,  403 => 222,  397 => 218,  394 => 205,  384 => 204,  371 => 199,  367 => 197,  348 => 182,  343 => 178,  340 => 177,  338 => 176,  335 => 175,  332 => 174,  330 => 173,  327 => 172,  324 => 171,  322 => 170,  319 => 169,  316 => 168,  314 => 167,  311 => 166,  308 => 165,  306 => 164,  300 => 161,  295 => 158,  285 => 157,  140 => 20,  130 => 19,  111 => 3,  88 => 4,  86 => 3,  83 => 2,  73 => 1,  63 => 204,  60 => 203,  58 => 157,  55 => 156,  53 => 19,  50 => 18,  48 => 1,);
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
            background: rgb(0,0,0);
            background: linear-gradient(360deg, rgba(0,0,0,1) 0%, rgba(22,15,15,1) 35%, rgba(45,48,50,1) 100%);
            padding-top: 0px;
            overflow: hidden;
            width: 100%;
            /*margin-left: 40px;*/
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

        box a {
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

    </style>
{% endblock %}

{% block navigation %}
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
        <div class=\"navbar_end\">
            <div id=\"search\">
                {#                <i class=\"bi bi-search\"></i> #}
                <form method=\"GET\" action=\"{{ path('search') }}\">

                    <input
                            name=\"v\"
                            type=\"search\"
                            class=\"form-control searchInput\"
                            placeholder=\"&#xF52A;  Wyszukaj..\"
                            aria-label=\"Search\"
                    >
                </form>
            </div>
            <a class=\"right\" href=\"/notif\">
                <i style=\"padding: 1px;margin-left: 10px\" class=\"bi bi-bell-fill\"></i>
            </a>
            <a class=\"right\" href=\"/profile\">
                <img class=\"userAvatar\" src=\"{{ userAvatar }}\" alt=\"avatar\">
                {#                <i style=\"padding: 1px\" class=\"bi bi-person-circle\"></i> #}
            </a>
        </div>
    </div>
{% endblock %}

{% block body %}
<body>
{#<div class=\"btn-group\">#}
{#    <button type=\"button\" class=\"btn btn-danger dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">#}
{#        Action#}
{#    </button>#}
{#    <div class=\"dropdown-menu\">#}
{#        <a class=\"dropdown-item\" href=\"#\">Action</a>#}
{#        <a class=\"dropdown-item\" href=\"#\">Another action</a>#}
{#        <a class=\"dropdown-item\" href=\"#\">Something else here</a>#}
{#        <div class=\"dropdown-divider\"></div>#}
{#        <a class=\"dropdown-item\" href=\"#\">Separated link</a>#}
{#    </div>#}
{#</div>#}

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
