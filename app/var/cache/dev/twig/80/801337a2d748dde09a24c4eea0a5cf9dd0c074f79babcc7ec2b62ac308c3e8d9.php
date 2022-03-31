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

/* movies/list.html.twig */
class __TwigTemplate_7054c61692d20a322ddc13f19705773293abcc6b4d845a2be19c089e33e517e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/list.html.twig"));

        $this->parent = $this->loadTemplate("movies/index.html.twig", "movies/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 <body>
     <section class=\"movie_container\">
             <div class=\"movie\">

                 ";
        // line 9
        if (array_key_exists("movies", $context)) {
            // line 10
            echo "
                     ";
            // line 11
            if (twig_test_empty((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 11, $this->source); })()))) {
                // line 12
                echo "                         Nie znaleziono wyniku wyszukiwania.
                     ";
            }
            // line 14
            echo "
                     <div class=\"movie\">
                         ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                // line 17
                echo "                             <a class=\"movie-hero\" onclick=\"showModal(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo ")
                                     // document.getElementById('navbar').style.background='rgba(0, 0, 0, .7)'
                                     \">
                                 <img class=\"movie-hero-image\" src=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 20), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 20), "html", null, true);
                echo "\">
                             </a>
                             ";
                // line 22
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 23
                    echo "                                 <a class=\"hide-button-wrapper\"
                                    href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hide", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 24)]), "html", null, true);
                    echo "\">
                                     <div class=\"hide-button\">
                                         <i class=\"bi bi-arrow-bar-left\"></i>
                                     </div>
                                 </a>
                             ";
                }
                // line 30
                echo "                             <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\" class=\"modal\" onclick=\"hideModal(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo ")\">
                                 <div class=\"modal-background\">
                                 </div>
                                 <div class=\"modal-sizing\">
                                     <div class=\"modal-content\" id=\"modal-content\">
                                         <div class=\"modal-header\"
                                                 ";
                // line 37
                echo "                                         >
                                             <a class=\"modal-image\" href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-one", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\"
                                                style=\"text-decoration: none\">
                                                 <img class=\"modal-image\" src=\"";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 40), "html", null, true);
                echo "\" alt=\"movie_image\">
                                             </a>

                                             <div class=\"exit-button\">
                                    <span onclick=\"hideModal(";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo ")\"
                                          class=\"bi bi-x-circle-fill modal-exit\"></span>
                                             </div>
                                         </div>
                                         <div class=\"modal-desc\">
                                             <div class=\"modal-movie-info-primary\">
                                                 <h2 class=\"modal-title\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 50), "html", null, true);
                echo "</h2>
                                                 <p class=\"modal-movie-description\">";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "description", [], "any", false, false, false, 51), "html", null, true);
                echo "</p>
                                             </div>
                                             <div class=\"modal-movie-info-secondary\">
                                                 ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", [], "any", false, false, false, 54), "html", null, true);
                echo "
                                                 ";
                // line 56
                echo "                                                 <div class=\"modal-movie-info-secondary-categories\">
                                                     <p style=\"color: gray;display: inline-block\">Kategorie:</p>
                                                     ";
                // line 58
                $context["categoryArray"] = [];
                echo "  ";
                // line 59
                echo "                                                     ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "categories", [], "any", false, false, false, 59));
                foreach ($context['_seq'] as $context["key"] => $context["category"]) {
                    // line 60
                    echo "                                                         ";
                    $context["categoryArray"] = twig_array_merge((isset($context["categoryArray"]) || array_key_exists("categoryArray", $context) ? $context["categoryArray"] : (function () { throw new RuntimeError('Variable "categoryArray" does not exist.', 60, $this->source); })()), [($context["key"] . "_") => twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 60)]);
                    echo " ";
                    // line 61
                    echo "                                                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                                                     ";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["categoryArray"]) || array_key_exists("categoryArray", $context) ? $context["categoryArray"] : (function () { throw new RuntimeError('Variable "categoryArray" does not exist.', 62, $this->source); })()), ", "), "html", null, true);
                echo "  ";
                // line 63
                echo "                                                 </div>
                                             </div>
                                         </div>
                                         <div>
                                             ";
                // line 67
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 68
                    echo "                                                 <a class=\"my-list-button\" style=\"color:red;border: 1px solid red\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hide", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                    echo "\">Ukryj film</a>
                                             ";
                }
                // line 70
                echo "                                         </div>
                                         <div style=\"margin-top: 20px\">
                                             ";
                // line 72
                if ((twig_get_attribute($this->env, $this->source, $context["movie"], "isLiked", [], "any", false, false, false, 72) == true)) {
                    // line 73
                    echo "                                                 <a class=\"my-list-button\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                    echo "\"> Usuń z mojej listy</a>
                                             ";
                } else {
                    // line 75
                    echo "                                                 <a class=\"my-list-button\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                    echo "\"> Dodaj do mojej listy</a>
                                             ";
                }
                // line 77
                echo "                                         </div>
                                         ";
                // line 78
                if ((twig_get_attribute($this->env, $this->source, $context["movie"], "episodes", [], "any", false, false, false, 78) != null)) {
                    // line 79
                    echo "                                             <div class=\"modal-movie-episodes\">
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
                    // line 90
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "episodes", [], "any", false, false, false, 90));
                    foreach ($context['_seq'] as $context["key"] => $context["episode"]) {
                        // line 91
                        echo "                                                         <div class=\"season";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "season", [], "any", false, false, false, 91), "html", null, true);
                        echo "\">
                                                             <a href=\"";
                        // line 92
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("watch-one", ["id" => twig_get_attribute($this->env, $this->source, $context["episode"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                        echo "\">
                                                                 <div class=\"episode\">
                                                                     <div class=\"episode-image\">
                                                                         <div class=\"episode-number-wrapper\">
                                                                             <div class=\"episode-number\">";
                        // line 96
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "</div>
                                                                         </div>
                                                                         <img style=\"height: 100px;margin-right: 20px;border-radius: 4px\"
                                                                              src=\"";
                        // line 99
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/episode.jpg"), "html", null, true);
                        echo "\"
                                                                              alt=\"episode_image\"/>
                                                                     </div>
                                                                     <div class=\"episode-content\">
                                                                         <div class=\"episode-title\">
                                                                             ";
                        // line 104
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "name", [], "any", false, false, false, 104), "html", null, true);
                        echo "
                                                                         </div>
                                                                         <div class=\"episode-description\">
                                                                             ";
                        // line 107
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["episode"], "description", [], "any", false, false, false, 107), "html", null, true);
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
                    // line 114
                    echo "                                                 </div>
                                             </div>
                                         ";
                }
                // line 117
                echo "                                     </div>
                                 </div>
                             </div>
                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "                     </div>

                 ";
        } else {
            // line 124
            echo "                     Nie znaleziono filmów dla tej kategorii.
                 ";
        }
        // line 126
        echo "
             </div>
     </section>
 </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "movies/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 126,  316 => 124,  311 => 121,  302 => 117,  297 => 114,  284 => 107,  278 => 104,  270 => 99,  264 => 96,  257 => 92,  252 => 91,  248 => 90,  235 => 79,  233 => 78,  230 => 77,  224 => 75,  218 => 73,  216 => 72,  212 => 70,  206 => 68,  204 => 67,  198 => 63,  194 => 62,  188 => 61,  184 => 60,  179 => 59,  176 => 58,  172 => 56,  168 => 54,  162 => 51,  158 => 50,  149 => 44,  142 => 40,  137 => 38,  134 => 37,  122 => 30,  113 => 24,  110 => 23,  108 => 22,  101 => 20,  94 => 17,  90 => 16,  86 => 14,  82 => 12,  80 => 11,  77 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'movies/index.html.twig' %}

{% block body %}

 <body>
     <section class=\"movie_container\">
             <div class=\"movie\">

                 {% if movies is defined %}

                     {% if movies is empty %}
                         Nie znaleziono wyniku wyszukiwania.
                     {% endif %}

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

                 {% else %}
                     Nie znaleziono filmów dla tej kategorii.
                 {% endif %}

             </div>
     </section>
 </body>

{% endblock %}
", "movies/list.html.twig", "/var/www/symfony_docker/templates/movies/list.html.twig");
    }
}
