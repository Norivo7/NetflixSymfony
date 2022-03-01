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
class __TwigTemplate_9c1fe49f29f92a3f4fc1438e53f4b172cf154ff65d14494d95c112e3feaedb41 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/manage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/manage.html.twig"));

        // line 1
        echo "<head>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
</head>
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo " ";
        $this->displayBlock('title', $context, $blocks);
        // line 37
        echo "
";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <link rel=\"stylesheet\" href=\"assets/user.css\">
    <style>

        .main{
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

    // line 36
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Wybierz profil - Netflix</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogo.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
        </div>
    </div>
    <body></body>

    <div class=\"main\">
        <div class=\"profilesContainer\">
            <div class=\"profilesList\">
                <h1 class=\"profilesLabel\"> Kto ogląda?</h1>
                <ul class=\"chooseProfile\">
                    ";
        // line 53
        $context["subuser_id"] = 0;
        // line 54
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subUsers"]) || array_key_exists("subUsers", $context) ? $context["subUsers"] : (function () { throw new RuntimeError('Variable "subUsers" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subuser"]) {
            // line 55
            echo "                        ";
            // line 56
            echo "                        ";
            // line 57
            echo "
                        <li class=\"profile\">
                            ";
            // line 60
            echo "                            <form method=\"POST\">
                                ";
            // line 62
            echo "                                <div class=\"subuser\">
                                    <a class=\"profileLink\" href=\"/browse\">
                                        ";
            // line 65
            echo "                                    </a>
                                    <span class=\"profileName\">
                                    </span>
                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"hidden\"
                                            name=\"id\"
                                            value=\"";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 73, $this->source); })()), "html", null, true);
            echo "\"
                                    >
                                    <input
                                            class=\"form-control\"
                                            class=\"subuser__input\"
                                            id=\"round\"
                                            type=\"image\"
                                            name=\"avatar\"
                                            value=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 81), "html", null, true);
            echo " \"
                                            src=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 82), "html", null, true);
            echo "\"
                                    >
                                    <span class=\"profileName\">
                                        <input
                                                class=\"form-control\"
                                                class=\"subuser__input\"
                                                type=\"hidden\"
                                                name=\"subuser_name\"
                                                value=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 90), "html", null, true);
            echo "\">

                                    </span>
                                    <span class=\"profileName\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 93), "html", null, true);
            echo "</span>
                                    ";
            // line 95
            echo "                                    ";
            // line 96
            echo "                                </div>
                            </form>
                        </li>

                        ";
            // line 100
            $context["subuser_id"] = ((isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 100, $this->source); })()) + 1);
            // line 101
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subuser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                    ";
        // line 103
        echo "                    ";
        // line 104
        echo "                    ";
        // line 105
        echo "                    ";
        // line 106
        echo "                    ";
        // line 107
        echo "                    ";
        // line 108
        echo "                    ";
        // line 109
        echo "                    ";
        // line 110
        echo "                    ";
        // line 111
        echo "                    ";
        // line 112
        echo "


                </ul>
                ";
        // line 117
        echo "                ";
        // line 119
        echo "                ";
        // line 120
        echo "                ";
        // line 121
        echo "                ";
        // line 122
        echo "                ";
        // line 123
        echo "                ";
        // line 124
        echo "            </div>
            <div id=\"buttonDiv\">
                <a>
                    <a class=\"profileButton\" href=\"/chooseUser\">Gotowe</a>
                </a>
            </div>
        </div>


    </div>


    ";
        // line 137
        echo "    ";
        // line 138
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/manage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  305 => 138,  303 => 137,  289 => 124,  287 => 123,  285 => 122,  283 => 121,  281 => 120,  279 => 119,  277 => 117,  271 => 112,  269 => 111,  267 => 110,  265 => 109,  263 => 108,  261 => 107,  259 => 106,  257 => 105,  255 => 104,  253 => 103,  251 => 102,  245 => 101,  243 => 100,  237 => 96,  235 => 95,  231 => 93,  225 => 90,  214 => 82,  210 => 81,  199 => 73,  189 => 65,  185 => 62,  182 => 60,  178 => 57,  176 => 56,  174 => 55,  169 => 54,  167 => 53,  153 => 42,  148 => 39,  138 => 38,  119 => 36,  82 => 8,  72 => 7,  62 => 38,  59 => 37,  56 => 36,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
</head>
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"assets/user.css\">
    <style>

        .main{
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
 {% block title %}<title>Wybierz profil - Netflix</title>{% endblock %}

{% block body %}
    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogo.svg.png') }}\" alt=\"av1\"/>
            </a>
        </div>
    </div>
    <body></body>

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
                                    <a class=\"profileLink\" href=\"/browse\">
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
                    <a class=\"profileButton\" href=\"/chooseUser\">Gotowe</a>
                </a>
            </div>
        </div>


    </div>


    {#    <a href=\"/browse\">#}
    {#        <button type=\"button\" class=\"buttonNext\">Dalej</button>#}
    {#    </a>#}
{% endblock %}", "user/manage.html.twig", "/var/www/symfony_docker/templates/user/manage.html.twig");
    }
}
