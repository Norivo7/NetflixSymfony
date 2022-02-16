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
class __TwigTemplate_fbdfc9593549e99b119dfdaaadd8f081dcd53085c40da17ed64db95bb245019f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'logo' => [$this, 'block_logo'],
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/index.html.twig"));

        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<style>
    body {
        background-color: black;
        color: white;
    }
    #main {
        display: flex;
    }
    .navbar {
        margin-top: 9px;
        width: 100%;
        overflow: hidden;
    }
    a.active {
        font-weight: 900;
    }
    .navbar a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .navbar a:hover {
        opacity: 0.8;
    }
    .logo {
        margin-top: -3px;
    }
    .search {
        width: 20%;
        float: right;
    }
    a.right {
        float: right;
    }
    .notif {
        float: left;
        width: 32%;
    }
    .box {
        margin-left: 20px;
        display: grid;
        grid-gap: 25px;
        grid-template-columns: repeat(6, minmax(100px, 1fr));
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
        max-width:270px;
        width: auto;
        height: auto;
    }
    #search {
        margin-top: 12px;
    }
    .main-container{
        margin-left: 30px;
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "
    ";
        // line 78
        $this->displayBlock('logo', $context, $blocks);
        // line 81
        echo "    ";
        $this->displayBlock('navigation', $context, $blocks);
        // line 122
        echo "    </div>
<section class=\"main-container\">

    <h1 id=\"serials\" class=\"title-home\">Filmy</h1>
    <div class=\"box\">
        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 128
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 128), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 128), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 128), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "    </div>

    <h1 id=\"serials\" class=\"title-home\">Seriale</h1>
    <div class=\"box\">
        ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serials"]) || array_key_exists("serials", $context) ? $context["serials"] : (function () { throw new RuntimeError('Variable "serials" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 135
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 135), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 135), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 135), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "    </div>

    <h1 id=\"movies\" class=\"title-home\">Tylko na Netflxie</h1>
    <div class=\"box\">
        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["originals"]) || array_key_exists("originals", $context) ? $context["originals"] : (function () { throw new RuntimeError('Variable "originals" does not exist.', 141, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 142
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 142), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 142), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 142), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "    </div>

    <h1 id=\"movies\" class=\"title-home\">Popularne</h1>
    <div class=\"box\">
        ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popular"]) || array_key_exists("popular", $context) ? $context["popular"] : (function () { throw new RuntimeError('Variable "popular" does not exist.', 148, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 149
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 149), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 149), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 149), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "    </div>

</section>

    <body></body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        // line 79
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 82
        echo "        <div class=\"navbar\">
            <div class=\"brandLogoWrapper\">
                <a class=\"logo\" href=\"/\" target=\"_parent\">
                    <img class=\"logo\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
                </a>
            </div>
            <a ";
        // line 88
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "attributes", [], "any", false, false, false, 88), "get", [0 => "_route"], "method", false, false, false, 88), "browse")) {
            // line 89
            echo " class=\"active\" ";
        }
        // line 90
        echo "                    href=\"/browse\">Strona główna</a>
            <a  ";
        // line 91
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "request", [], "any", false, false, false, 91), "attributes", [], "any", false, false, false, 91), "get", [0 => "_route"], "method", false, false, false, 91), "serials")) {
            // line 92
            echo " class=\"active\" ";
        }
        // line 93
        echo "                    href=\"/serials\">Seriale i programy</a>
            <a  ";
        // line 94
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "request", [], "any", false, false, false, 94), "attributes", [], "any", false, false, false, 94), "get", [0 => "_route"], "method", false, false, false, 94), "movies")) {
            // line 95
            echo " class=\"active\" ";
        }
        // line 96
        echo "                    href=\"/movies\">Filmy</a>
            <a  ";
        // line 97
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "attributes", [], "any", false, false, false, 97), "get", [0 => "_route"], "method", false, false, false, 97), "new")) {
            // line 98
            echo " class=\"active\" ";
        }
        // line 99
        echo "                    href=\"/new\">Nowe i popularne</a>
            <a  ";
        // line 100
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "request", [], "any", false, false, false, 100), "attributes", [], "any", false, false, false, 100), "get", [0 => "_route"], "method", false, false, false, 100), "myList")) {
            // line 101
            echo " class=\"active\" ";
        }
        // line 102
        echo "                    href=\"/like\">Moja lista</a>
                <a class=\"right\" href=\"/notif\">
                    <img class=\"notif\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/notif.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
                </a>
            <div id=\"search\">
                    <form method=\"GET\" action=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" >
                        <input
                            name=\"v\"
                            type=\"search\"
                            class=\"form-control\"
                            placeholder=\"Wyszukaj..\"
                            aria-label=\"Search\"
                        >
                    </form>
            </div>
";
        // line 118
        echo "                </a>

        </div>
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
        return array (  382 => 118,  369 => 107,  363 => 104,  359 => 102,  356 => 101,  354 => 100,  351 => 99,  348 => 98,  346 => 97,  343 => 96,  340 => 95,  338 => 94,  335 => 93,  332 => 92,  330 => 91,  327 => 90,  324 => 89,  322 => 88,  316 => 85,  311 => 82,  301 => 81,  290 => 79,  280 => 78,  264 => 151,  251 => 149,  247 => 148,  241 => 144,  228 => 142,  224 => 141,  218 => 137,  205 => 135,  201 => 134,  195 => 130,  182 => 128,  178 => 127,  171 => 122,  168 => 81,  166 => 78,  163 => 77,  153 => 76,  72 => 3,  62 => 2,  52 => 76,  49 => 75,  47 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'base.html.twig' %}#}
{% block stylesheets %}
<style>
    body {
        background-color: black;
        color: white;
    }
    #main {
        display: flex;
    }
    .navbar {
        margin-top: 9px;
        width: 100%;
        overflow: hidden;
    }
    a.active {
        font-weight: 900;
    }
    .navbar a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .navbar a:hover {
        opacity: 0.8;
    }
    .logo {
        margin-top: -3px;
    }
    .search {
        width: 20%;
        float: right;
    }
    a.right {
        float: right;
    }
    .notif {
        float: left;
        width: 32%;
    }
    .box {
        margin-left: 20px;
        display: grid;
        grid-gap: 25px;
        grid-template-columns: repeat(6, minmax(100px, 1fr));
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
        max-width:270px;
        width: auto;
        height: auto;
    }
    #search {
        margin-top: 12px;
    }
    .main-container{
        margin-left: 30px;
    }
</style>
{% endblock %}

{% block body %}

    {% block logo %}

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
            <a  {% if app.request.attributes.get('_route') in
                'serials' %} class=\"active\" {% endif %}
                    href=\"/serials\">Seriale i programy</a>
            <a  {% if app.request.attributes.get('_route') in
                'movies' %} class=\"active\" {% endif %}
                    href=\"/movies\">Filmy</a>
            <a  {% if app.request.attributes.get('_route') in
                'new' %} class=\"active\" {% endif %}
                    href=\"/new\">Nowe i popularne</a>
            <a  {% if app.request.attributes.get('_route') in
                'myList' %} class=\"active\" {% endif %}
                    href=\"/like\">Moja lista</a>
                <a class=\"right\" href=\"/notif\">
                    <img class=\"notif\" src=\"{{ asset('images/notif.png') }}\" alt=\"av1\"/>
                </a>
            <div id=\"search\">
                    <form method=\"GET\" action=\"{{ path('search') }}\" >
                        <input
                            name=\"v\"
                            type=\"search\"
                            class=\"form-control\"
                            placeholder=\"Wyszukaj..\"
                            aria-label=\"Search\"
                        >
                    </form>
            </div>
{#                    <img class=\"search\" src=\"{{ asset('images/search.png') }}\" alt=\"av1\"/>#}
                </a>

        </div>
    {% endblock %}
    </div>
<section class=\"main-container\">

    <h1 id=\"serials\" class=\"title-home\">Filmy</h1>
    <div class=\"box\">
        {% for movie in movies %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{movie.img}}\" alt=\"{{movie.title}}\"></a>
        {% endfor %}
    </div>

    <h1 id=\"serials\" class=\"title-home\">Seriale</h1>
    <div class=\"box\">
        {% for movie in serials %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{movie.img}}\" alt=\"{{movie.title}}\"></a>
        {% endfor %}
    </div>

    <h1 id=\"movies\" class=\"title-home\">Tylko na Netflxie</h1>
    <div class=\"box\">
        {% for movie in originals %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\"></a>
        {% endfor %}
    </div>

    <h1 id=\"movies\" class=\"title-home\">Popularne</h1>
    <div class=\"box\">
        {% for movie in popular %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\"></a>
        {% endfor %}
    </div>

</section>

    <body></body>

{% endblock %}
", "movies/index.html.twig", "/var/www/symfony_docker/templates/movies/index.html.twig");
    }
}
