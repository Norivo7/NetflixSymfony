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
                                     <div class=\"modal-content\">
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
                                                 <a class=\"profile_button\" href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show-one", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                echo "\"> Oglądaj
                                                     teraz </a>
                                                 <div class=\"modal-movie-info-secondary-categories\">
                                                     ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["movie"], "categories", [], "any", false, false, false, 57));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 58
                    echo "                                                         <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 58), "html", null, true);
                    echo "</li>
                                                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                                                 </div>
                                             </div>
                                         </div>

                                         ";
                // line 64
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 65
                    echo "                                             <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hide", ["id" => twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                    echo "\">Ukryj film</a>
                                         ";
                }
                // line 67
                echo "                                         <div style=\"margin-top: 20px\">
                                             ";
                // line 68
                if (array_key_exists("liked", $context)) {
                    // line 69
                    echo "                                                 <form id=\"dislike\" method=\"POST\" action=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislike");
                    echo "\">
                                                     <input type=\"text\" name=\"id\" value=\"";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 70), "html", null, true);
                    echo "\" style=\"display: none\">
                                                     <a class=\"my-list-button\"
                                                        onclick=\"document.getElementById('dislike').submit()\">Usuń z mojej listy</a>
                                                 </form>
                                             ";
                } else {
                    // line 75
                    echo "                                                 <form id=\"like\" method=\"POST\" action=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("like");
                    echo "\">
                                                     <input type=\"text\" name=\"id\" value=\"";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 76), "html", null, true);
                    echo "\" style=\"display: none\">
                                                     <a class=\"my-list-button\"
                                                        onclick=\"document.getElementById('like').submit()\">Dodaj do mojej listy</a>
                                                 </form>
                                             ";
                }
                // line 81
                echo "                                         </div>
                                     </div>
                                 </div>

                             </div>
                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                     </div>

                 ";
        } else {
            // line 90
            echo "                     Nie znaleziono filmów dla tej kategorii.
                 ";
        }
        // line 92
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
        return array (  252 => 92,  248 => 90,  243 => 87,  232 => 81,  224 => 76,  219 => 75,  211 => 70,  206 => 69,  204 => 68,  201 => 67,  195 => 65,  193 => 64,  187 => 60,  178 => 58,  174 => 57,  168 => 54,  162 => 51,  158 => 50,  149 => 44,  142 => 40,  137 => 38,  134 => 37,  122 => 30,  113 => 24,  110 => 23,  108 => 22,  101 => 20,  94 => 17,  90 => 16,  86 => 14,  82 => 12,  80 => 11,  77 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
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
                                     <div class=\"modal-content\">
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
                                                 <a class=\"profile_button\" href=\"{{ path('show-one', {'id': movie.id}) }}\"> Oglądaj
                                                     teraz </a>
                                                 <div class=\"modal-movie-info-secondary-categories\">
                                                     {% for category in movie.categories %}
                                                         <li>{{ category.name }}</li>
                                                     {% endfor %}
                                                 </div>
                                             </div>
                                         </div>

                                         {% if is_granted('ROLE_ADMIN') %}
                                             <a href=\"{{ path('hide', {'id': movie.id}) }}\">Ukryj film</a>
                                         {% endif %}
                                         <div style=\"margin-top: 20px\">
                                             {% if liked is defined %}
                                                 <form id=\"dislike\" method=\"POST\" action=\"{{ path('dislike') }}\">
                                                     <input type=\"text\" name=\"id\" value=\"{{ movie.id }}\" style=\"display: none\">
                                                     <a class=\"my-list-button\"
                                                        onclick=\"document.getElementById('dislike').submit()\">Usuń z mojej listy</a>
                                                 </form>
                                             {% else %}
                                                 <form id=\"like\" method=\"POST\" action=\"{{ path('like') }}\">
                                                     <input type=\"text\" name=\"id\" value=\"{{ movie.id }}\" style=\"display: none\">
                                                     <a class=\"my-list-button\"
                                                        onclick=\"document.getElementById('like').submit()\">Dodaj do mojej listy</a>
                                                 </form>
                                             {% endif %}
                                         </div>
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
