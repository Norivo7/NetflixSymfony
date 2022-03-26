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

/* user/manage.html.twig */
class __TwigTemplate_3c6d76b427e1983ca08d9f501245772efa7823755347a0b63c98b6317676e744 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/manage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/manage.html.twig"));

        // line 1
        echo "<head>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
</head>

";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Zarządzaj profilami - Netflix</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogo.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
        </div>
    </div>
    <body></body>

    <div class=\"main\">
        <div class=\"profilesContainer\">
            <div class=\"profilesList\">
                <h1 class=\"profilesLabel\"> Zarządzaj użytkownikami</h1>
                <ul class=\"chooseProfile\">
                    ";
        // line 28
        $context["subuser_id"] = 0;
        // line 29
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subUsers"]) || array_key_exists("subUsers", $context) ? $context["subUsers"] : (function () { throw new RuntimeError('Variable "subUsers" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subuser"]) {
            // line 30
            echo "                    <li class=\"profile\">
                        <form method=\"POST\">
                            <div class=\"subuser\">
                                <div class=\"content-overlay\"></div>
                                <input
                                        class=\"form-control\"
                                        id=\"text\"
                                        type=\"hidden\"
                                        name=\"id\"
                                        value=\"";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 39, $this->source); })()), "html", null, true);
            echo "\"
                                >
                                <input
                                        class=\"form-control content-image imageContainer\"
                                        class=\"subuser__input\"
                                        id=\"round\"
                                        type=\"image\"
                                        name=\"avatar\"
                                        value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 47), "html", null, true);
            echo " \"
                                        src=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 48), "html", null, true);
            echo "\"
                                >
                                <span class=\"profileName\">
                                        <input
                                                class=\"form-control\"
                                                class=\"subuser__input\"
                                                type=\"hidden\"
                                                name=\"subuser_name\"
                                                value=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "\">

                                    </span>
                                <div class=\"content-details fadeIn-top fadeIn-right\">
                                    <h3>
                                        <i class=\"bi bi-pencil-square\"
                                           style=\"font-size: 60px;padding:20px;color: white\">
                                        </i>
                                    </h3>
                                </div>
                            </div>
                            <span class=\"profileName\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "</span>
                        </form>
                        ";
            // line 69
            $context["subuser_id"] = ((isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 69, $this->source); })()) + 1);
            // line 70
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subuser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        ";
        if (((isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 71, $this->source); })()) < 5)) {
            // line 72
            echo "                    </li>

                    <li class=\"profile\">
                        <div class=\"add\"><a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_subuser");
            echo "\" class=\"plus\">
                                <i class=\"bi bi-plus-square\" style=\"font-size: 180px;\"></i></a>
                        </div>
                    </li>
                    ";
        }
        // line 80
        echo "                </ul>
            </div>
            <div id=\"buttonDiv\">
                <a>
                    <a class=\"profileButton\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chooseUser");
        echo "\">Gotowe</a>
                </a>
            </div>
        </div>


    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 95
        echo "    <link rel=\"stylesheet\" href=\"assets/user.css\">
    <style>

        ";
        // line 101
        echo "
        *, *:before, *:after {
            padding: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        ul {
            padding: 0;
        }

        input#round {
            border: 0px solid;
            border-radius: 10px;
        }

        a:link {
            color: gray;
        }

        a:visited {
            color: gray;
        }

        a:hover {
            color: white;
        }

        a:active {
            color: red;
        }

        a.plus {
            opacity: 60%;
        }

        ";
        // line 141
        echo "
        #buttonDiv {
            margin-top: 20px;
        }

        .add {
            text-decoration: none;
            margin-bottom: 40px;
            font-size: 200px;
        }

        .form-control {
            padding: 0;
        }

        ";
        // line 159
        echo "
        .main {
            height: 90%;
        }

        .subuser {
            position: relative;
            width: 90%;
            max-width: 400px;
            margin: auto;
            overflow: hidden;
        }

        .subuser .content-overlay {

            border-radius: 8px;
            pointer-events: none;
            background: rgba(0, 0, 0, 0.7);
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            -webkit-transition: all 0.4s ease-in-out 0s;
            -moz-transition: all 0.4s ease-in-out 0s;
            transition: all 0.4s ease-in-out 0s;
        }

        .subuser:hover .content-overlay {
            opacity: 1;
        }

        .content-details {
            position: absolute;
            text-align: center;
            padding-left: 1em;
            padding-right: 1em;
            width: 100%;
            top: 50%;
            left: 50%;
            opacity: 0;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }

        .subuser:hover .content-details {
            pointer-events: none;
            top: 53%;
            left: 50%;
            opacity: 1;
        }

        .content-details h3 {
            color: #fff;
            font-weight: 500;
            letter-spacing: 0.15em;
            margin-bottom: 0.5em;
            text-transform: uppercase;
        }

        .content-details p {
            color: #fff;
            font-size: 0.8em;
        }

        .fadeIn-top {
            top: 20%;
        }

        .fadeIn-right {
            left: 80%;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 159,  298 => 141,  259 => 101,  254 => 95,  244 => 94,  225 => 84,  219 => 80,  211 => 75,  206 => 72,  203 => 71,  197 => 70,  195 => 69,  190 => 67,  176 => 56,  165 => 48,  161 => 47,  150 => 39,  139 => 30,  134 => 29,  132 => 28,  118 => 17,  114 => 16,  110 => 14,  100 => 13,  81 => 11,  71 => 94,  68 => 93,  66 => 13,  63 => 12,  61 => 11,  55 => 8,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.ico') }}\">
</head>

{% block title %}<title>Zarządzaj profilami - Netflix</title>{% endblock %}

{% block body %}
    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"{{ path('home') }}\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogo.svg.png') }}\" alt=\"av1\"/>
            </a>
        </div>
    </div>
    <body></body>

    <div class=\"main\">
        <div class=\"profilesContainer\">
            <div class=\"profilesList\">
                <h1 class=\"profilesLabel\"> Zarządzaj użytkownikami</h1>
                <ul class=\"chooseProfile\">
                    {% set subuser_id = 0 %}
                    {% for subuser in subUsers %}
                    <li class=\"profile\">
                        <form method=\"POST\">
                            <div class=\"subuser\">
                                <div class=\"content-overlay\"></div>
                                <input
                                        class=\"form-control\"
                                        id=\"text\"
                                        type=\"hidden\"
                                        name=\"id\"
                                        value=\"{{ subuser_id }}\"
                                >
                                <input
                                        class=\"form-control content-image imageContainer\"
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
                                <div class=\"content-details fadeIn-top fadeIn-right\">
                                    <h3>
                                        <i class=\"bi bi-pencil-square\"
                                           style=\"font-size: 60px;padding:20px;color: white\">
                                        </i>
                                    </h3>
                                </div>
                            </div>
                            <span class=\"profileName\">{{ subuser.name }}</span>
                        </form>
                        {% set subuser_id = subuser_id + 1 %}
                        {% endfor %}
                        {% if subuser_id < 5 %}
                    </li>

                    <li class=\"profile\">
                        <div class=\"add\"><a href=\"{{ path('add_subuser') }}\" class=\"plus\">
                                <i class=\"bi bi-plus-square\" style=\"font-size: 180px;\"></i></a>
                        </div>
                    </li>
                    {% endif %}
                </ul>
            </div>
            <div id=\"buttonDiv\">
                <a>
                    <a class=\"profileButton\" href=\"{{ path('chooseUser') }}\">Gotowe</a>
                </a>
            </div>
        </div>


    </div>

{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"assets/user.css\">
    <style>

        {#======================
                Global
        ======================#}

        *, *:before, *:after {
            padding: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        ul {
            padding: 0;
        }

        input#round {
            border: 0px solid;
            border-radius: 10px;
        }

        a:link {
            color: gray;
        }

        a:visited {
            color: gray;
        }

        a:hover {
            color: white;
        }

        a:active {
            color: red;
        }

        a.plus {
            opacity: 60%;
        }

        {#======================
                Buttons
        ======================#}

        #buttonDiv {
            margin-top: 20px;
        }

        .add {
            text-decoration: none;
            margin-bottom: 40px;
            font-size: 200px;
        }

        .form-control {
            padding: 0;
        }

        {#======================
                Content
        ======================#}

        .main {
            height: 90%;
        }

        .subuser {
            position: relative;
            width: 90%;
            max-width: 400px;
            margin: auto;
            overflow: hidden;
        }

        .subuser .content-overlay {

            border-radius: 8px;
            pointer-events: none;
            background: rgba(0, 0, 0, 0.7);
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            -webkit-transition: all 0.4s ease-in-out 0s;
            -moz-transition: all 0.4s ease-in-out 0s;
            transition: all 0.4s ease-in-out 0s;
        }

        .subuser:hover .content-overlay {
            opacity: 1;
        }

        .content-details {
            position: absolute;
            text-align: center;
            padding-left: 1em;
            padding-right: 1em;
            width: 100%;
            top: 50%;
            left: 50%;
            opacity: 0;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s;
        }

        .subuser:hover .content-details {
            pointer-events: none;
            top: 53%;
            left: 50%;
            opacity: 1;
        }

        .content-details h3 {
            color: #fff;
            font-weight: 500;
            letter-spacing: 0.15em;
            margin-bottom: 0.5em;
            text-transform: uppercase;
        }

        .content-details p {
            color: #fff;
            font-size: 0.8em;
        }

        .fadeIn-top {
            top: 20%;
        }

        .fadeIn-right {
            left: 80%;
        }
    </style>
{% endblock %}", "user/manage.html.twig", "/var/www/symfony_docker/templates/user/manage.html.twig");
    }
}
