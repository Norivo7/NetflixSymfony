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
</head>

 ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
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

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 16
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
        // line 27
        $context["subuser_id"] = 0;
        // line 28
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subUsers"]) || array_key_exists("subUsers", $context) ? $context["subUsers"] : (function () { throw new RuntimeError('Variable "subUsers" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subuser"]) {
            // line 29
            echo "                        ";
            // line 30
            echo "                        ";
            // line 31
            echo "
                        <li class=\"profile\">
                            ";
            // line 34
            echo "                            ";
            // line 35
            echo "                            ";
            // line 36
            echo "                            ";
            // line 37
            echo "                            ";
            // line 38
            echo "                            ";
            // line 39
            echo "                            ";
            // line 40
            echo "                            ";
            // line 41
            echo "                            ";
            // line 42
            echo "                            ";
            // line 43
            echo "                            <form method=\"POST\">
                                <div class=\"subuser\">
                                    <div class=\"content-overlay\"></div>
                                    ";
            // line 47
            echo "                                    ";
            // line 48
            echo "                                    ";
            // line 49
            echo "                                    ";
            // line 50
            echo "                                    ";
            // line 51
            echo "                                    ";
            // line 52
            echo "                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"hidden\"
                                            name=\"id\"
                                            value=\"";
            // line 57
            echo twig_escape_filter($this->env, (isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 57, $this->source); })()), "html", null, true);
            echo "\"
                                    >
                                    <input
                                            class=\"form-control content-image imageContainer\"
                                            class=\"subuser__input\"
                                            id=\"round\"
                                            type=\"image\"
                                            name=\"avatar\"
                                            value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 65), "html", null, true);
            echo " \"
                                            src=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 66), "html", null, true);
            echo "\"
                                    >
                                    <span class=\"profileName\">
                                        <input
                                                class=\"form-control\"
                                                class=\"subuser__input\"
                                                type=\"hidden\"
                                                name=\"subuser_name\"
                                                value=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 74), "html", null, true);
            echo "\">

                                    </span>
                                    <div class=\"content-details fadeIn-top fadeIn-right\">
                                        <h3><i class=\"bi bi-pencil-square\"
                                               style=\"font-size: 60px;padding:20px;color: white\">

                                            </i></h3>
                                        ";
            // line 83
            echo "                                    </div>
                                    ";
            // line 85
            echo "                                    ";
            // line 86
            echo "                                </div>
                                <span class=\"profileName\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 87), "html", null, true);
            echo "</span>
                            </form>
                            ";
            // line 89
            $context["subuser_id"] = ((isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 89, $this->source); })()) + 1);
            // line 90
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subuser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                            ";
        if (((isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 91, $this->source); })()) < 5)) {
            // line 92
            echo "                        </li>

                    <li class=\"profile\">
                         <div class=\"add\"><a href=\"manageUser/add\" class=\"plus\">
                                <i class=\"bi bi-plus-square\" style=\"font-size: 180px;\"></i></a>
                        </div>
                    </li>
                    ";
        }
        // line 100
        echo "                </ul>
                ";
        // line 102
        echo "                ";
        // line 104
        echo "                ";
        // line 105
        echo "                ";
        // line 106
        echo "                ";
        // line 107
        echo "                ";
        // line 108
        echo "                ";
        // line 109
        echo "            </div>
            <div id=\"buttonDiv\">
                <a>
                    <a class=\"profileButton\" href=\"/chooseUser\">Gotowe</a>
                </a>
            </div>
        </div>


    </div>


    ";
        // line 122
        echo "    ";
        // line 123
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 127
        echo "    <link rel=\"stylesheet\" href=\"assets/user.css\">
    <style>
        *, *:before, *:after {
            /*margin: 0;*/
            padding: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .main {
            height: 90%;
        }

        ul {
            padding: 0;
        }

        .form-control {
            padding: 0;
        }

        input#round {
            /*outline-offset: -4px;*/
            border: 0px solid;
            border-radius: 10px;
        }

        input#round:hover {
            /*color:#000;*/
            /*box-shadow: 0px 0px 0px 4px white;*/
            /*background-color:#FFF;*/
            /*background-image:none;*/
        }

        #buttonDiv {
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
            margin-bottom: 40px;
            font-size: 200px;
        }

        a.plus {
            opacity: 60%;
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

        .content-image {
            width: 100%;
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

    public function getDebugInfo()
    {
        return array (  302 => 127,  292 => 126,  282 => 123,  280 => 122,  266 => 109,  264 => 108,  262 => 107,  260 => 106,  258 => 105,  256 => 104,  254 => 102,  251 => 100,  241 => 92,  238 => 91,  232 => 90,  230 => 89,  225 => 87,  222 => 86,  220 => 85,  217 => 83,  206 => 74,  195 => 66,  191 => 65,  180 => 57,  173 => 52,  171 => 51,  169 => 50,  167 => 49,  165 => 48,  163 => 47,  158 => 43,  156 => 42,  154 => 41,  152 => 40,  150 => 39,  148 => 38,  146 => 37,  144 => 36,  142 => 35,  140 => 34,  136 => 31,  134 => 30,  132 => 29,  127 => 28,  125 => 27,  111 => 16,  106 => 13,  96 => 12,  77 => 10,  67 => 126,  64 => 125,  62 => 12,  59 => 11,  57 => 10,  46 => 1,);
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
                        {#                        {{ app.session.set('subuser_name', subuser.name ) }} #}
                        {#                        {{ dump(app.session.get('subuser_name')) }} #}

                        <li class=\"profile\">
                            {#                            <form action=\"{{ path('switchSubuser')}}\" method=\"POST\"> #}
                            {#                            <form method=\"POST\"> #}
                            {#                                <input class=\"form-control\" #}
                            {#                                       id=\"text\" #}
                            {#                                       type=\"hidden\" #}
                            {#                                       name=\"id\" #}
                            {#                                       value=\"{{ subuser_id }}\" #}
                            {#                                > #}
                            {#                                <a href=\"/manageUser/edit\">edytuj 2</a> #}
                            {#                            </form> #}
                            <form method=\"POST\">
                                <div class=\"subuser\">
                                    <div class=\"content-overlay\"></div>
                                    {#                                    <a class=\"profileLink\" href=\"/manageUser/delete/{{ subuser_id }}\"> #}
                                    {#                                    Usuń #}
                                    {#                                    </a> #}
                                    {#                                    <a class=\"profileLink\" href=\"/manageUser/update/{{ subuser_id }}\"> #}
                                    {#                                        edytuj #}
                                    {#                                    </a> #}
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
                                        <h3><i class=\"bi bi-pencil-square\"
                                               style=\"font-size: 60px;padding:20px;color: white\">

                                            </i></h3>
                                        {#                                        <p>This is a short description</p> #}
                                    </div>
                                    {#                                <input type=\"hidden\" name=\"submit\" value=\"Submit\"> #}
                                    {#                                <button class=\"subuser__sign-in\" type=\"submit\">Zaloguj się</button> #}
                                </div>
                                <span class=\"profileName\">{{ subuser.name }}</span>
                            </form>
                            {% set subuser_id = subuser_id + 1 %}
                            {% endfor %}
                            {% if subuser_id < 5 %}
                        </li>

                    <li class=\"profile\">
                         <div class=\"add\"><a href=\"manageUser/add\" class=\"plus\">
                                <i class=\"bi bi-plus-square\" style=\"font-size: 180px;\"></i></a>
                        </div>
                    </li>
                    {% endif %}
                </ul>
                {#            <a class=\"navbar-brand\" href=\"/\"> #}
                {#                <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/1280px-Netflix_2015_logo.svg.png\"
{#                     width=\"167\" height=\"45\" style=\"vertical-align:middle;margin:20px 50px\" alt=\"netflixLogo\"/> #}
                {#            </a> #}
                {#            <a class=\"navbar-brand\" href=\"/\"> #}
                {#                <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/1280px-Netflix_2015_logo.svg.png\" #}
                {#                     width=\"167\" height=\"45\" style=\"vertical-align:middle;margin:20px 50px\" alt=\"netflixLogo\"/> #}
                {#            </a> #}
            </div>
            <div id=\"buttonDiv\">
                <a>
                    <a class=\"profileButton\" href=\"/chooseUser\">Gotowe</a>
                </a>
            </div>
        </div>


    </div>


    {#    <a href=\"/browse\"> #}
    {#        <button type=\"button\" class=\"buttonNext\">Dalej</button> #}
    {#    </a> #}
{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"assets/user.css\">
    <style>
        *, *:before, *:after {
            /*margin: 0;*/
            padding: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .main {
            height: 90%;
        }

        ul {
            padding: 0;
        }

        .form-control {
            padding: 0;
        }

        input#round {
            /*outline-offset: -4px;*/
            border: 0px solid;
            border-radius: 10px;
        }

        input#round:hover {
            /*color:#000;*/
            /*box-shadow: 0px 0px 0px 4px white;*/
            /*background-color:#FFF;*/
            /*background-image:none;*/
        }

        #buttonDiv {
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
            margin-bottom: 40px;
            font-size: 200px;
        }

        a.plus {
            opacity: 60%;
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

        .content-image {
            width: 100%;
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
