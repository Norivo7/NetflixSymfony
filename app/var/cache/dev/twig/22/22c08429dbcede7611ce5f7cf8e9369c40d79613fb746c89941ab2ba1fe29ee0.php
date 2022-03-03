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
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
</head>
";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 59
        echo " ";
        $this->displayBlock('title', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
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
        .add {
            text-decoration: none;
            margin-bottom: 13px;
            padding: 10px;
            font-size: 200px;
        }
        a.plus{
            opacity:60%;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
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

    // line 61
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 65
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
        // line 76
        $context["subuser_id"] = 0;
        // line 77
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subUsers"]) || array_key_exists("subUsers", $context) ? $context["subUsers"] : (function () { throw new RuntimeError('Variable "subUsers" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subuser"]) {
            // line 78
            echo "                        ";
            // line 79
            echo "                        ";
            // line 80
            echo "
                        <li class=\"profile\">
                            ";
            // line 92
            echo "                            <form method=\"POST\">
                                <div class=\"subuser\">
                                    <a class=\"profileLink\" href=\"/manageUser/delete/";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 94, $this->source); })()), "html", null, true);
            echo "\">
                                    Usuń
                                    </a>
                                    <a class=\"profileLink\" href=\"/manageUser/update/";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 97, $this->source); })()), "html", null, true);
            echo "\">
                                        edytuj
                                    </a>

                                    <span class=\"profileName\">
                                    </span>
                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"hidden\"
                                            name=\"id\"
                                            value=\"";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 108, $this->source); })()), "html", null, true);
            echo "\"
                                    >
                                    <input
                                            class=\"form-control\"
                                            class=\"subuser__input\"
                                            id=\"round\"
                                            type=\"image\"
                                            name=\"avatar\"
                                            value=\"";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 116), "html", null, true);
            echo " \"
                                            src=\"";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 117), "html", null, true);
            echo "\"
                                    >
                                    <span class=\"profileName\">
                                        <input
                                                class=\"form-control\"
                                                class=\"subuser__input\"
                                                type=\"hidden\"
                                                name=\"subuser_name\"
                                                value=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 125), "html", null, true);
            echo "\">

                                    </span>
                                    <span class=\"profileName\">";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 128), "html", null, true);
            echo "</span>
                                    ";
            // line 130
            echo "                                    ";
            // line 131
            echo "                                </div>
                            </form>
                        </li>

                        ";
            // line 135
            $context["subuser_id"] = ((isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 135, $this->source); })()) + 1);
            // line 136
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subuser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                    ";
        if (((isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 137, $this->source); })()) < 5)) {
            // line 138
            echo "                    <div class=\"add\"><a href=\"manageUser/add\" class=\"plus\">
                        <i class=\"bi bi-plus-square\"></i></a>
                    </div>
                    ";
        }
        // line 142
        echo "                </ul>
                ";
        // line 144
        echo "                ";
        // line 146
        echo "                ";
        // line 147
        echo "                ";
        // line 148
        echo "                ";
        // line 149
        echo "                ";
        // line 150
        echo "                ";
        // line 151
        echo "            </div>
            <div id=\"buttonDiv\">
                <a>
                    <a class=\"profileButton\" href=\"/chooseUser\">Gotowe</a>
                </a>
            </div>
        </div>


    </div>


    ";
        // line 164
        echo "    ";
        // line 165
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
        return array (  321 => 165,  319 => 164,  305 => 151,  303 => 150,  301 => 149,  299 => 148,  297 => 147,  295 => 146,  293 => 144,  290 => 142,  284 => 138,  281 => 137,  275 => 136,  273 => 135,  267 => 131,  265 => 130,  261 => 128,  255 => 125,  244 => 117,  240 => 116,  229 => 108,  215 => 97,  209 => 94,  205 => 92,  201 => 80,  199 => 79,  197 => 78,  192 => 77,  190 => 76,  176 => 65,  171 => 62,  161 => 61,  142 => 59,  84 => 10,  74 => 9,  64 => 61,  61 => 60,  58 => 59,  56 => 9,  46 => 1,);
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
        .add {
            text-decoration: none;
            margin-bottom: 13px;
            padding: 10px;
            font-size: 200px;
        }
        a.plus{
            opacity:60%;
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
                <h1 class=\"profilesLabel\"> Zarządzaj użytkownikami</h1>
                <ul class=\"chooseProfile\">
                    {% set subuser_id = 0 %}
                    {% for subuser in subUsers %}
                        {#                        {{ app.session.set('subuser_name', subuser.name ) }}#}
                        {#                        {{ dump(app.session.get('subuser_name')) }}#}

                        <li class=\"profile\">
                            {#                            <form action=\"{{ path('switchSubuser')}}\" method=\"POST\">#}
{#                            <form method=\"POST\">#}
{#                                <input class=\"form-control\"#}
{#                                       id=\"text\"#}
{#                                       type=\"hidden\"#}
{#                                       name=\"id\"#}
{#                                       value=\"{{ subuser_id }}\"#}
{#                                >#}
{#                                <a href=\"/manageUser/edit\">edytuj 2</a>#}
{#                            </form>#}
                            <form method=\"POST\">
                                <div class=\"subuser\">
                                    <a class=\"profileLink\" href=\"/manageUser/delete/{{ subuser_id }}\">
                                    Usuń
                                    </a>
                                    <a class=\"profileLink\" href=\"/manageUser/update/{{ subuser_id }}\">
                                        edytuj
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
                    {% if subuser_id < 5 %}
                    <div class=\"add\"><a href=\"manageUser/add\" class=\"plus\">
                        <i class=\"bi bi-plus-square\"></i></a>
                    </div>
                    {% endif %}
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
