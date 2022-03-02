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

/* user/user.html.twig */
class __TwigTemplate_87682afbaf815a906ec779de8e65f084085f636cc7c1f5b6e0e8ebad9745d142 extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "

    ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
";
        // line 56
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
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
    </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Ustawienia konta - Netflix</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    <link rel=\"stylesheet\" href=\"assets/user.css\">
    <style>
    body {
        font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
    }

    .main {
        height: 90%;
    }
    ul{
        padding: 0;
    }
    .form-control {
        padding: 0;
    }
    input#round {
        outline-offset: -4px;
        border: 0px solid;
        border-radius: 10px;
    }
    input#round:hover {
        color:#000;
        box-shadow: 0px 0px 0px 4px white;
        background-color:#FFF;
        background-image:none;
    }
    #buttonDiv{
        margin-top: 20px;
    }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogo.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>

        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "    <body>
    <div class=\"main\">
        <div class=\"profilesContainer\">
            <div class=\"profilesList\">
                <h1 class=\"profilesLabel\"> Kto ogląda?</h1>
                <ul class=\"chooseProfile\">
                    ";
        // line 63
        $context["subuser_id"] = 0;
        // line 64
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subUsers"]) || array_key_exists("subUsers", $context) ? $context["subUsers"] : (function () { throw new RuntimeError('Variable "subUsers" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subuser"]) {
            // line 67
            echo "
                        <li class=\"profile\">
";
            // line 70
            echo "                            <form method=\"POST\">
";
            // line 72
            echo "                                <div class=\"subuser\">
                                    <a class=\"profileLink\" href=\"/success\">
";
            // line 75
            echo "                                    </a>
                                    <span class=\"profileName\">
                                    </span>
                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"hidden\"
                                            name=\"id\"
                                            value=\"";
            // line 83
            echo twig_escape_filter($this->env, (isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 83, $this->source); })()), "html", null, true);
            echo "\"
                                    >
                                    <input
                                        class=\"form-control\"
                                        class=\"subuser__input\"
                                        id=\"round\"
                                        type=\"image\"
                                        name=\"avatar\"
                                        value=\"";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 91), "html", null, true);
            echo " \"
                                        src=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 92), "html", null, true);
            echo "\"
                                    >
                                    <span class=\"profileName\">
                                        <input
                                            class=\"form-control\"
                                            class=\"subuser__input\"
                                            type=\"hidden\"
                                            name=\"subuser_name\"
                                            value=\"";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 100), "html", null, true);
            echo "\">

                                    </span>
                                    <span class=\"profileName\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 103), "html", null, true);
            echo "</span>
";
            // line 106
            echo "                                </div>
                            </form>
                        </li>

                        ";
            // line 110
            $context["subuser_id"] = ((isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 110, $this->source); })()) + 1);
            // line 111
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subuser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "


                </ul>
";
        // line 134
        echo "            </div>
            <div id=\"buttonDiv\">
                <a>
                    <a class=\"profileButton\" href=\"/manageUser\">Zarządzaj profilami</a>
                </a>
            </div>
            <div id=\"buttonDiv\">
                <a>
                    <a class=\"profileButton\" href=\"/\">Wróć</a>
                </a>
            </div>
        </div>


    </div>
    </body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/user.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  304 => 134,  298 => 122,  292 => 111,  290 => 110,  284 => 106,  280 => 103,  274 => 100,  263 => 92,  259 => 91,  248 => 83,  238 => 75,  234 => 72,  231 => 70,  227 => 67,  222 => 64,  220 => 63,  212 => 57,  202 => 56,  186 => 49,  181 => 46,  171 => 45,  131 => 12,  121 => 11,  102 => 9,  86 => 2,  76 => 1,  66 => 56,  63 => 55,  61 => 45,  57 => 43,  55 => 11,  52 => 10,  50 => 9,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
    <head>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
    </head>
{% endblock %}
{% block title %}<title>Ustawienia konta - Netflix</title>{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"assets/user.css\">
    <style>
    body {
        font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
    }

    .main {
        height: 90%;
    }
    ul{
        padding: 0;
    }
    .form-control {
        padding: 0;
    }
    input#round {
        outline-offset: -4px;
        border: 0px solid;
        border-radius: 10px;
    }
    input#round:hover {
        color:#000;
        box-shadow: 0px 0px 0px 4px white;
        background-color:#FFF;
        background-image:none;
    }
    #buttonDiv{
        margin-top: 20px;
    }
    </style>
{% endblock %}


    {% block header %}
    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogo.svg.png') }}\" alt=\"av1\"/>
            </a>

        </div>
    </div>
    {% endblock %}

{% block body %}
    <body>
    <div class=\"main\">
        <div class=\"profilesContainer\">
            <div class=\"profilesList\">
                <h1 class=\"profilesLabel\"> Kto ogląda?</h1>
                <ul class=\"chooseProfile\">
                    {% set subuser_id = 0 %}
                    {% for subuser in subUsers %}
{#                        {{ app.session.set('subuser_name', subuser.name ) }}#}
{#                        {{ dump(app.session.get('subuser_name')) }}#}

                        <li class=\"profile\">
{#                            <form action=\"{{ path('switchSubuser')}}\" method=\"POST\">#}
                            <form method=\"POST\">
{#                                    <img src=\"{{ subuser.avatar }}\" class=\"round\">#}
                                <div class=\"subuser\">
                                    <a class=\"profileLink\" href=\"/success\">
{#                                        <img src=\"{{subuser.avatar}}\" class=\"round\" alt=\"av1\"/>#}
                                    </a>
                                    <span class=\"profileName\">
                                    </span>
                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"hidden\"
                                            name=\"id\"
                                            value=\"{{subuser_id}}\"
                                    >
                                    <input
                                        class=\"form-control\"
                                        class=\"subuser__input\"
                                        id=\"round\"
                                        type=\"image\"
                                        name=\"avatar\"
                                        value=\"{{ subuser.avatar }} \"
                                        src=\"{{ subuser.avatar }}\"
                                    >
                                    <span class=\"profileName\">
                                        <input
                                            class=\"form-control\"
                                            class=\"subuser__input\"
                                            type=\"hidden\"
                                            name=\"subuser_name\"
                                            value=\"{{ subuser.name }}\">

                                    </span>
                                    <span class=\"profileName\">{{ subuser.name }}</span>
{#                                <input type=\"hidden\" name=\"submit\" value=\"Submit\">#}
{#                                <button class=\"subuser__sign-in\" type=\"submit\">Zaloguj się</button>#}
                                </div>
                            </form>
                        </li>

                        {% set subuser_id = subuser_id + 1 %}
                    {% endfor %}
{#                    {% for subuser in subUsers %}#}
{#                        <li class=\"profile\">#}
{#                            <div>#}
{#                                <a class=\"profileLink\" href=\"/browse\">#}
{#                                    <img src=\"{{subuser.avatar}}\" class=\"round\" alt=\"av1\"/>#}
{#                                </a>#}
{#                            </div>#}
{#                            <span class=\"profileName\">{{ subuser.name }}</span>#}
{#                        </li>#}
{#                    {% endfor %}#}



                </ul>
{#            <a class=\"navbar-brand\" href=\"/\">#}
{#                <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/1280px-Netflix_2015_logo.svg.png\"
{#                     width=\"167\" height=\"45\" style=\"vertical-align:middle;margin:20px 50px\" alt=\"netflixLogo\"/>#}
{#            </a>#}
{#            <a class=\"navbar-brand\" href=\"/\">#}
{#                <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/1280px-Netflix_2015_logo.svg.png\"#}
{#                     width=\"167\" height=\"45\" style=\"vertical-align:middle;margin:20px 50px\" alt=\"netflixLogo\"/>#}
{#            </a>#}
            </div>
            <div id=\"buttonDiv\">
                <a>
                    <a class=\"profileButton\" href=\"/manageUser\">Zarządzaj profilami</a>
                </a>
            </div>
            <div id=\"buttonDiv\">
                <a>
                    <a class=\"profileButton\" href=\"/\">Wróć</a>
                </a>
            </div>
        </div>


    </div>
    </body>

{#    <a href=\"/browse\">#}
{#        <button type=\"button\" class=\"buttonNext\">Dalej</button>#}
{#    </a>#}
{% endblock %}", "user/user.html.twig", "/var/www/symfony_docker/templates/user/user.html.twig");
    }
}
