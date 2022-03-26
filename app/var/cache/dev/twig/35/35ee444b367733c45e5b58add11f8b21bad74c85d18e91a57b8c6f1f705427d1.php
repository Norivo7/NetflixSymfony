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

/* user/edit.html.twig */
class __TwigTemplate_2300598c86d4470f7df27a53d295274ac605d777ebedd2549b7f7a11099bf7c4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "user/user.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("user/user.html.twig", "user/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "<head>
    ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/userEdit.css"), "html", null, true);
        echo "\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">


</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title> Edytuj profil - Netflix</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    <body>
    <form id=\"myForm\" method=\"post\">
        ";
        // line 23
        if (array_key_exists("subuser", $context)) {
            // line 24
            echo "            <div class=\"parent\">
                <div class=\"div1\"><p class=\"heading\">Edytuj profil</p>
                    <hr>
                </div>
                <div class=\"div2\">
                    <input id=\"text\"
                           type=\"hidden\"
                           name=\"avatar\"
                           value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subuser"]) || array_key_exists("subuser", $context) ? $context["subuser"] : (function () { throw new RuntimeError('Variable "subuser" does not exist.', 32, $this->source); })()), "avatar", [], "any", false, false, false, 32), "html", null, true);
            echo "\"/>

                    <img class=\"avatar\"
                         src=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subuser"]) || array_key_exists("subuser", $context) ? $context["subuser"] : (function () { throw new RuntimeError('Variable "subuser" does not exist.', 35, $this->source); })()), "avatar", [], "any", false, false, false, 35), "html", null, true);
            echo "\"
                         alt=\"avatar\">
                </div>
                <div class=\"div3\">
                    <input class=\"name\"
                           type=\"text\"
                           name=\"name\"
                           placeholder=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subuser"]) || array_key_exists("subuser", $context) ? $context["subuser"] : (function () { throw new RuntimeError('Variable "subuser" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
            echo "\"/>
                    ";
            // line 43
            if (array_key_exists("errorRegex", $context)) {
                // line 44
                echo "                        ";
                echo twig_escape_filter($this->env, (isset($context["errorRegex"]) || array_key_exists("errorRegex", $context) ? $context["errorRegex"] : (function () { throw new RuntimeError('Variable "errorRegex" does not exist.', 44, $this->source); })()), "html", null, true);
                echo "
                    ";
            }
            // line 46
            echo "                    <div class=\"selectMedium\">
                        <select>
                            <option value=\"0\">Polski</option>
                            <option value=\"1\">English</option>
                        </select>
                    </div>

                    <hr>
                </div>
                <div class=\"div4\">
                    Ustawienia grup wiekowych:<br>
                    <ul>
                        <li>
                            Wszystkie grupy wiekowe<br>
                        </li>
                    </ul>
                    Wyświetlaj w tym profilu tytuły z wszystkich kategorii wiekowych.<br><br>
                    <a class=\"profileButton\"> Edytuj </a>
                    <hr>
                </div>
                <div class=\"div5\">
                    Ustawienia automatycznego odtwarzania <br>
                    <input type=\"checkbox\">Automatycznie odtwarzaj kolejny odcinek na wszystkich urządzeniach.<br>
                    <input type=\"checkbox\">Automatycznie odtwarzaj podglądy podczas przeglądania na wszystkich
                    urządzeniach.
                </div>
                <div class=\"div6\">
                    <hr>
                    <div class=\"div7\">
                        <div>
                            <a class=\"profileButton\" onclick=\"document.getElementById('myForm').submit()\">Zapisz</a>
                        </div>
                        <div>
                            <a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manageUser");
            echo "\" class=\"profileButton\">
                                Anuluj
                            </a>
                        </div>
                        ";
            // line 83
            if (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 83, $this->source); })()) != 0)) {
                // line 84
                echo "                        <form method=\"post\">
                            <div class=\"deleteBtnContainer\">
                                <a class=\"deleteButton\" href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteSubuser", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 86, $this->source); })())]), "html", null, true);
                echo "\">
                                    Usuń
                                </a>
                            </div>
                        </form>
                        ";
            }
            // line 92
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 96
        echo "    </form>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 101
        echo "<style>
    body {
        background-color: #141414;
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 101,  250 => 100,  238 => 96,  232 => 92,  223 => 86,  219 => 84,  217 => 83,  210 => 79,  175 => 46,  169 => 44,  167 => 43,  163 => 42,  153 => 35,  147 => 32,  137 => 24,  135 => 23,  131 => 21,  121 => 20,  102 => 6,  87 => 14,  76 => 7,  74 => 6,  71 => 5,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'user/user.html.twig' %}


{% block head %}
<head>
    {% block title %}<title> Edytuj profil - Netflix</title>{% endblock %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/userEdit.css') }}\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.ico') }}\">


</head>
{% endblock %}

{% block body %}
    <body>
    <form id=\"myForm\" method=\"post\">
        {% if subuser is defined %}
            <div class=\"parent\">
                <div class=\"div1\"><p class=\"heading\">Edytuj profil</p>
                    <hr>
                </div>
                <div class=\"div2\">
                    <input id=\"text\"
                           type=\"hidden\"
                           name=\"avatar\"
                           value=\"{{ subuser.avatar }}\"/>

                    <img class=\"avatar\"
                         src=\"{{ subuser.avatar }}\"
                         alt=\"avatar\">
                </div>
                <div class=\"div3\">
                    <input class=\"name\"
                           type=\"text\"
                           name=\"name\"
                           placeholder=\"{{ subuser.name }}\"/>
                    {% if errorRegex is defined %}
                        {{ errorRegex }}
                    {% endif %}
                    <div class=\"selectMedium\">
                        <select>
                            <option value=\"0\">Polski</option>
                            <option value=\"1\">English</option>
                        </select>
                    </div>

                    <hr>
                </div>
                <div class=\"div4\">
                    Ustawienia grup wiekowych:<br>
                    <ul>
                        <li>
                            Wszystkie grupy wiekowe<br>
                        </li>
                    </ul>
                    Wyświetlaj w tym profilu tytuły z wszystkich kategorii wiekowych.<br><br>
                    <a class=\"profileButton\"> Edytuj </a>
                    <hr>
                </div>
                <div class=\"div5\">
                    Ustawienia automatycznego odtwarzania <br>
                    <input type=\"checkbox\">Automatycznie odtwarzaj kolejny odcinek na wszystkich urządzeniach.<br>
                    <input type=\"checkbox\">Automatycznie odtwarzaj podglądy podczas przeglądania na wszystkich
                    urządzeniach.
                </div>
                <div class=\"div6\">
                    <hr>
                    <div class=\"div7\">
                        <div>
                            <a class=\"profileButton\" onclick=\"document.getElementById('myForm').submit()\">Zapisz</a>
                        </div>
                        <div>
                            <a href=\"{{ path('manageUser') }}\" class=\"profileButton\">
                                Anuluj
                            </a>
                        </div>
                        {% if id != 0 %}
                        <form method=\"post\">
                            <div class=\"deleteBtnContainer\">
                                <a class=\"deleteButton\" href=\"{{ path('deleteSubuser', {'id': id}) }}\">
                                    Usuń
                                </a>
                            </div>
                        </form>
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endif %}
    </form>
    </body>
{% endblock %}

{% block stylesheets %}
<style>
    body {
        background-color: #141414;
    }
</style>
{% endblock %}

", "user/edit.html.twig", "/var/www/symfony_docker/templates/user/edit.html.twig");
    }
}
