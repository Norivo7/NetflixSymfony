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

/* movies/show.html.twig */
class __TwigTemplate_4c3429a81403940e7c5f59dc027eec62a8d487e507414cb9fc663d20c82286fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "movies/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/show.html.twig"));

        $this->parent = $this->loadTemplate("movies/index.html.twig", "movies/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        html {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            font-weight: normal;
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
        .navbar a:hover {
              opacity: 0.8;
          }
        .navbar {
            overflow: hidden;
            width: 100%;
        }
        .brandLogoWrapper{
            margin-left: 30px;
            margin-top: 18px;
        }
        .logo {
            height: 31px;
            margin-right: 15px;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 38
        echo "<div class=\"navbar\">
    <div class=\"brandLogoWrapper\">
        <a class=\"logo\" href=\"/browse\" target=\"_parent\">
            <img class=\"logo\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
        </a>
    </div>
</div>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "    <body>
    <div class=\"container my-5\">
        <div class=\"row\">
            <div class=\"col-2 col-sm-12\"></div>
            <div class=\"col-8 col-sm-12 text-center\">
                <div class=\"jumbotron jumbotron-dark bg-darkness\">

                    <iframe width=\"640\" height=\"480\" src=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 55, $this->source); })()), "link", [], "any", false, false, false, 55), "html", null, true);
        echo "\" frameborder=\"0\"
                            allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                            allowfullscreen></iframe>
                    <div class=\"mt-3\">
                        <small>
                            <h3 class=\"title my-3\" href='#'>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 60, $this->source); })()), "title", [], "any", false, false, false, 60), "html", null, true);
        echo "</h3>
                            <p>Opis : <br>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 61, $this->source); })()), "description", [], "any", false, false, false, 61), "html", null, true);
        echo "</p>
                            <p>Rok : ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 62, $this->source); })()), "year", [], "any", false, false, false, 62), "html", null, true);
        echo " <br>
                                Kategorie :

                                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 66
            echo "                            <li> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                            </p>
                        </small>
                        ";
        // line 70
        if (array_key_exists("liked", $context)) {
            // line 71
            echo "                            <form id=\"dislike\" method=\"POST\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike");
            echo "\">
                                <input type=\"text\" name=\"id\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\" style=\"display: none\">
                                <a class=\"profileButton\"
                                   href=\"#\"
                                   onclick=\"document.getElementById('dislike').submit()\">Usuń z mojej listy</a>
                            </form>
                        ";
        } else {
            // line 78
            echo "
                            <form id=\"like\" method=\"POST\" action=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like");
            echo "\">
                                <input type=\"text\" name=\"id\" value=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["movie"]) || array_key_exists("movie", $context) ? $context["movie"] : (function () { throw new RuntimeError('Variable "movie" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80), "html", null, true);
            echo "\" style=\"display: none\">
                                <a class=\"profileButton\"
                                   href=\"#\"
                                   onclick=\"document.getElementById('like').submit()\">Dodaj do mojej listy</a>

                            </form>

                        ";
        }
        // line 88
        echo "                    </div>
                </div>
            </div>
            <div class=\"col-2 col-sm-12\"></div>
        </div>
    </div>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "movies/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 88,  225 => 80,  221 => 79,  218 => 78,  209 => 72,  204 => 71,  202 => 70,  198 => 68,  189 => 66,  185 => 65,  179 => 62,  175 => 61,  171 => 60,  163 => 55,  154 => 48,  144 => 47,  129 => 41,  124 => 38,  114 => 37,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'movies/index.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <style>
        html {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            font-weight: normal;
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
        .navbar a:hover {
              opacity: 0.8;
          }
        .navbar {
            overflow: hidden;
            width: 100%;
        }
        .brandLogoWrapper{
            margin-left: 30px;
            margin-top: 18px;
        }
        .logo {
            height: 31px;
            margin-right: 15px;
        }
    </style>

{% endblock %}

 {% block navigation %}
<div class=\"navbar\">
    <div class=\"brandLogoWrapper\">
        <a class=\"logo\" href=\"/browse\" target=\"_parent\">
            <img class=\"logo\" src=\"{{ asset('images/netflixLogoSmall.svg.png') }}\" alt=\"av1\"/>
        </a>
    </div>
</div>
 {% endblock %}

{% block body %}
    <body>
    <div class=\"container my-5\">
        <div class=\"row\">
            <div class=\"col-2 col-sm-12\"></div>
            <div class=\"col-8 col-sm-12 text-center\">
                <div class=\"jumbotron jumbotron-dark bg-darkness\">

                    <iframe width=\"640\" height=\"480\" src=\"{{ movie.link }}\" frameborder=\"0\"
                            allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\"
                            allowfullscreen></iframe>
                    <div class=\"mt-3\">
                        <small>
                            <h3 class=\"title my-3\" href='#'>{{ movie.title }}</h3>
                            <p>Opis : <br>{{ movie.description }}</p>
                            <p>Rok : {{ movie.year }} <br>
                                Kategorie :

                                {% for category in categories %}
                            <li> {{ category.name }}</li>
                            {% endfor %}
                            </p>
                        </small>
                        {% if liked is defined %}
                            <form id=\"dislike\" method=\"POST\" action=\"{{ path('dislike') }}\">
                                <input type=\"text\" name=\"id\" value=\"{{ movie.id }}\" style=\"display: none\">
                                <a class=\"profileButton\"
                                   href=\"#\"
                                   onclick=\"document.getElementById('dislike').submit()\">Usuń z mojej listy</a>
                            </form>
                        {% else %}

                            <form id=\"like\" method=\"POST\" action=\"{{ path('like') }}\">
                                <input type=\"text\" name=\"id\" value=\"{{ movie.id }}\" style=\"display: none\">
                                <a class=\"profileButton\"
                                   href=\"#\"
                                   onclick=\"document.getElementById('like').submit()\">Dodaj do mojej listy</a>

                            </form>

                        {% endif %}
                    </div>
                </div>
            </div>
            <div class=\"col-2 col-sm-12\"></div>
        </div>
    </div>
    </body>
{% endblock %}
", "movies/show.html.twig", "/var/www/symfony_docker/templates/movies/show.html.twig");
    }
}
