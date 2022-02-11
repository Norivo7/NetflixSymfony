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
        echo "

";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 78
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<style>
    body {
        background-color: black;
        color: white;
    }
    #main{
        display: flex;
    }
    .navbar {
        margin-top: 9px;
        width: 100%;
        overflow: hidden;

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
    .navbar a.first {
        font-weight: 900;

    }
    .logo {
        margin: 15px;

    }
    .search {
        width: 20%;
        float: right;
    }
    a.right {
        float: right;
    }
    .notif{
        float: left;
        width: 32%;
    }

    .box{
        display: grid;
        grid-gap: 20px;
        grid-template-columns: repeat(6, minmax(100px, 1fr));
    }
    box a {
        transition: transform 0.3s;
    }

    .box a:hover {
        transition: transform 0.3s;
        -ms-transform: scale(1.4);
        -webkit-transform: scale(1.4);
        transform: scale(1.4);
    }

    .box img {
        border-radius: 2px;
        max-width:200px;
        max-height:150px;
        width: auto;
        height: auto;
    }

</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 79
        echo "    <body></body>
    ";
        // line 80
        $this->displayBlock('navigation', $context, $blocks);
        // line 132
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 81
        echo "    <div id=\"main\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
        </div>

        <div class=\"navbar\">
                <a class=\"first\" href=\"/movieList\">Strona główna</a>
                <a class=\"second\" href=\"/serials\">Seriale i programy</a>
                <a class=\"third\" href=\"/movies\">Filmy</a>
                <a class=\"fourth\" href=\"/new\">Nowe i popularne</a>
                <a class=\"fifth\" href=\"/like\">Moja lista</a>
                <a class=\"right\" href=\"/notif\">
                    <img class=\"notif\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/notif.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
                </a>
                <a class=\"right\" href=\"/search\">
                    <img class=\"search\" src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/search.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
                </a>

        </div>
    </div>
<section class=\"main-container\">
        <div class=\"location\" id=\"home\">
            <h1 id=\"home\" class=\"title-home\">Popularne w serwisie Netflix</h1>
            <div class=\"box\">
                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popular"]) || array_key_exists("popular", $context) ? $context["popular"] : (function () { throw new RuntimeError('Variable "popular" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 108
            echo "                    <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 108), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 108), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 108), "html", null, true);
            echo "\"></a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "            </div>
        </div>
    <h1 id=\"serials\" class=\"title-home\">Seriale</h1>
    <div class=\"box\">
        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serials"]) || array_key_exists("serials", $context) ? $context["serials"] : (function () { throw new RuntimeError('Variable "serials" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 115
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 115), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 115), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 115), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "    </div>
    <h1 id=\"movies\" class=\"title-home\">Filmy</h1>
    <div class=\"box\">
        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 121
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 121), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 121), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 121), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "    </div>
    <h1 id=\"originals\" class=\"title-home\">Tylko na Netflix</h1>
    <div class=\"box\">
        ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exclusive"]) || array_key_exists("exclusive", $context) ? $context["exclusive"] : (function () { throw new RuntimeError('Variable "exclusive" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 127
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 127), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 127), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 127), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "    </div>
</section>
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
        return array (  312 => 129,  299 => 127,  295 => 126,  290 => 123,  277 => 121,  273 => 120,  268 => 117,  255 => 115,  251 => 114,  245 => 110,  232 => 108,  228 => 107,  216 => 98,  210 => 95,  196 => 84,  191 => 81,  181 => 80,  169 => 132,  167 => 80,  164 => 79,  154 => 78,  72 => 5,  62 => 4,  52 => 78,  50 => 4,  46 => 2,);
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
    #main{
        display: flex;
    }
    .navbar {
        margin-top: 9px;
        width: 100%;
        overflow: hidden;

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
    .navbar a.first {
        font-weight: 900;

    }
    .logo {
        margin: 15px;

    }
    .search {
        width: 20%;
        float: right;
    }
    a.right {
        float: right;
    }
    .notif{
        float: left;
        width: 32%;
    }

    .box{
        display: grid;
        grid-gap: 20px;
        grid-template-columns: repeat(6, minmax(100px, 1fr));
    }
    box a {
        transition: transform 0.3s;
    }

    .box a:hover {
        transition: transform 0.3s;
        -ms-transform: scale(1.4);
        -webkit-transform: scale(1.4);
        transform: scale(1.4);
    }

    .box img {
        border-radius: 2px;
        max-width:200px;
        max-height:150px;
        width: auto;
        height: auto;
    }

</style>
{% endblock %}
{% block body %}
    <body></body>
    {% block navigation %}
    <div id=\"main\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogoSmall.svg.png') }}\" alt=\"av1\"/>
            </a>
        </div>

        <div class=\"navbar\">
                <a class=\"first\" href=\"/movieList\">Strona główna</a>
                <a class=\"second\" href=\"/serials\">Seriale i programy</a>
                <a class=\"third\" href=\"/movies\">Filmy</a>
                <a class=\"fourth\" href=\"/new\">Nowe i popularne</a>
                <a class=\"fifth\" href=\"/like\">Moja lista</a>
                <a class=\"right\" href=\"/notif\">
                    <img class=\"notif\" src=\"{{ asset('images/notif.png') }}\" alt=\"av1\"/>
                </a>
                <a class=\"right\" href=\"/search\">
                    <img class=\"search\" src=\"{{ asset('images/search.png') }}\" alt=\"av1\"/>
                </a>

        </div>
    </div>
<section class=\"main-container\">
        <div class=\"location\" id=\"home\">
            <h1 id=\"home\" class=\"title-home\">Popularne w serwisie Netflix</h1>
            <div class=\"box\">
                {% for movie in popular %}
                    <a href=\"/show/{{movie.id}}\"><img src=\"{{movie.img}}\" alt=\"{{movie.title}}\"></a>
                {% endfor %}
            </div>
        </div>
    <h1 id=\"serials\" class=\"title-home\">Seriale</h1>
    <div class=\"box\">
        {% for movie in serials %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{movie.img}}\" alt=\"{{movie.title}}\"></a>
        {% endfor %}
    </div>
    <h1 id=\"movies\" class=\"title-home\">Filmy</h1>
    <div class=\"box\">
        {% for movie in movies %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\"></a>
        {% endfor %}
    </div>
    <h1 id=\"originals\" class=\"title-home\">Tylko na Netflix</h1>
    <div class=\"box\">
        {% for movie in exclusive %}
            <a href=\"/show/{{ movie.id }}\"><img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\"></a>
        {% endfor %}
    </div>
</section>
    {% endblock %}


{% endblock %}
", "movies/index.html.twig", "/var/www/symfony_docker/templates/movies/index.html.twig");
    }
}
