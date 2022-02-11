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

/* movies/movieList.html.twig */
class __TwigTemplate_f57cc223410f179a542404cbceebbe47e88681515f9697ed4ff6b79d43430b9d extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/movieList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/movieList.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 167
        $this->displayBlock('title', $context, $blocks);
        // line 168
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "
<style>
    body {
    background-color: #141414;
    color: #fff;
    }

    .bg-darkness {
    background-color: #141414;
    }

    .red {
    color: #e50914;
    }

    img {
    max-width: 100%;
    }

    ul {
    list-style: none;
    }

    ul li {
    margin: 15px 0;
    }

    a {
    text-decoration: none;
    color: rgba(255,255,255,.5);
    }

    .title-home {
    padding-top: 60px;
    }

    /* HEADER */
    #logo {
    color: #e50914;
    margin: 0;
    padding: 0;
    }

    /* MAIN CONTAINER */
    .main-container {
    padding: 50px;
    }

    .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(6, minmax(100px, 1fr));
    }

    .box a {
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
    }

    .logos a {
    padding: 10px;
    }

    .logo {
    color: #686868;
    }

    /* FOOTER */
    footer {
    text-align: center;
    color: #686868;
    margin-top: 50px;
    }

    /* MEDIA QUERIES */
    @media (max-width: 900px) {
    header {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
    grid-template-areas:
    \"nt nt nt  .  .  . sb . . . \"
    \"mn mn mn mn mn mn  mn mn mn mn\";
    }

    .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(4, minmax(100px, 1fr));
    }
    }

    @media (max-width: 700px) {
    header {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
    grid-template-areas:
    \"nt nt nt  .  .  . sb . . . \"
    \"mn mn mn mn mn mn  mn mn mn mn\";
    }

    .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(3, minmax(100px, 1fr));
    }
    }

    @media (max-width: 500px) {
    header {
    margin: 0;
    padding: 20px 0 0 0;
    position: static;
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(1, 1fr);
    grid-template-areas:
    \"nt\"
    \"mn\"
    \"sb\";
    text-align: center;
    }

    .netflixLogo {
    max-width: 100%;
    margin: auto;
    padding-right: 20px;
    }

    .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(1, 1fr);
    text-align: center;
    }

    .box a:hover {
    transition: transform 0.3s;
    -ms-transform: scale(1);
    -webkit-transform: scale(1);
    transform: scale(1.2);
    }

    .logos {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
    text-align: center;
    }
    }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 167
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Netflix - List";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 168
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 169
        echo "
    <body></body>
    <section class=\"main-container\">
        <div class=\"location\" id=\"home\">
            <h1 id=\"home\" class=\"title-home\">Popular on Netflix</h1>
            <div class=\"box\">
                ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popular"]) || array_key_exists("popular", $context) ? $context["popular"] : (function () { throw new RuntimeError('Variable "popular" does not exist.', 175, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 176
            echo "                    <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 176), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 176), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 176), "html", null, true);
            echo "\"></a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "            </div>
        </div>
        <h1 id=\"tvShows\" class=\"title-home\">TV Shows</h1>
        <div class=\"box\">
            ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tvShows"]) || array_key_exists("tvShows", $context) ? $context["tvShows"] : (function () { throw new RuntimeError('Variable "tvShows" does not exist.', 182, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 183
            echo "                <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 183), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 183), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 183), "html", null, true);
            echo "\"></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "        </div>
        <h1 id=\"movies\" class=\"title-home\">Movies</h1>
        <div class=\"box\">
            ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 188, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 189
            echo "                <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 189), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 189), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 189), "html", null, true);
            echo "\"></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "        </div>
        <h1 id=\"originals\" class=\"title-home\">Netflix Originals</h1>
        <div class=\"box\">
            ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["originals"]) || array_key_exists("originals", $context) ? $context["originals"] : (function () { throw new RuntimeError('Variable "originals" does not exist.', 194, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 195
            echo "                <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 195), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 195), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 195), "html", null, true);
            echo "\"></a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "        </div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "movies/movieList.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  366 => 197,  353 => 195,  349 => 194,  344 => 191,  331 => 189,  327 => 188,  322 => 185,  309 => 183,  305 => 182,  299 => 178,  286 => 176,  282 => 175,  274 => 169,  264 => 168,  245 => 167,  73 => 4,  63 => 3,  53 => 168,  51 => 167,  49 => 3,  46 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'movies/index.html.twig' %}#}

{% block stylesheets %}

<style>
    body {
    background-color: #141414;
    color: #fff;
    }

    .bg-darkness {
    background-color: #141414;
    }

    .red {
    color: #e50914;
    }

    img {
    max-width: 100%;
    }

    ul {
    list-style: none;
    }

    ul li {
    margin: 15px 0;
    }

    a {
    text-decoration: none;
    color: rgba(255,255,255,.5);
    }

    .title-home {
    padding-top: 60px;
    }

    /* HEADER */
    #logo {
    color: #e50914;
    margin: 0;
    padding: 0;
    }

    /* MAIN CONTAINER */
    .main-container {
    padding: 50px;
    }

    .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(6, minmax(100px, 1fr));
    }

    .box a {
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
    }

    .logos a {
    padding: 10px;
    }

    .logo {
    color: #686868;
    }

    /* FOOTER */
    footer {
    text-align: center;
    color: #686868;
    margin-top: 50px;
    }

    /* MEDIA QUERIES */
    @media (max-width: 900px) {
    header {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
    grid-template-areas:
    \"nt nt nt  .  .  . sb . . . \"
    \"mn mn mn mn mn mn  mn mn mn mn\";
    }

    .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(4, minmax(100px, 1fr));
    }
    }

    @media (max-width: 700px) {
    header {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
    grid-template-areas:
    \"nt nt nt  .  .  . sb . . . \"
    \"mn mn mn mn mn mn  mn mn mn mn\";
    }

    .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(3, minmax(100px, 1fr));
    }
    }

    @media (max-width: 500px) {
    header {
    margin: 0;
    padding: 20px 0 0 0;
    position: static;
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(1, 1fr);
    grid-template-areas:
    \"nt\"
    \"mn\"
    \"sb\";
    text-align: center;
    }

    .netflixLogo {
    max-width: 100%;
    margin: auto;
    padding-right: 20px;
    }

    .box {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(1, 1fr);
    text-align: center;
    }

    .box a:hover {
    transition: transform 0.3s;
    -ms-transform: scale(1);
    -webkit-transform: scale(1);
    transform: scale(1.2);
    }

    .logos {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: repeat(2, 1fr);
    text-align: center;
    }
    }
    </style>
{% endblock %}
{% block title %}Netflix - List{% endblock %}
{% block body %}

    <body></body>
    <section class=\"main-container\">
        <div class=\"location\" id=\"home\">
            <h1 id=\"home\" class=\"title-home\">Popular on Netflix</h1>
            <div class=\"box\">
                {% for movie in popular %}
                    <a href=\"/show/{{movie.id}}\"><img src=\"{{movie.img}}\" alt=\"{{movie.title}}\"></a>
                {% endfor %}
            </div>
        </div>
        <h1 id=\"tvShows\" class=\"title-home\">TV Shows</h1>
        <div class=\"box\">
            {% for movie in tvShows %}
                <a href=\"/show/{{movie.id}}\"><img src=\"{{movie.img}}\" alt=\"{{movie.title}}\"></a>
            {% endfor %}
        </div>
        <h1 id=\"movies\" class=\"title-home\">Movies</h1>
        <div class=\"box\">
            {% for movie in movies %}
                <a href=\"/show/{{movie.id}}\"><img src=\"{{movie.img}}\" alt=\"{{movie.title}}\"></a>
            {% endfor %}
        </div>
        <h1 id=\"originals\" class=\"title-home\">Netflix Originals</h1>
        <div class=\"box\">
            {% for movie in originals %}
                <a href=\"/show/{{movie.id}}\"><img src=\"{{movie.img}}\" alt=\"{{movie.title}}\"></a>
            {% endfor %}
        </div>
    </section>

{% endblock %}", "movies/movieList.html.twig", "/var/www/symfony_docker/templates/movies/movieList.html.twig");
    }
}
