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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link rel=\"stylesheet\" href=\"assets/user.css\">
    <style>
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
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 22
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
        // line 33
        $context["subuser_id"] = 0;
        // line 34
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subUsers"]) || array_key_exists("subUsers", $context) ? $context["subUsers"] : (function () { throw new RuntimeError('Variable "subUsers" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subuser"]) {
            // line 37
            echo "
                        <li class=\"profile\">
";
            // line 40
            echo "                            <form method=\"POST\">
";
            // line 42
            echo "                                <div class=\"subuser\">
                                    <a class=\"profileLink\" href=\"/browse\">
";
            // line 45
            echo "                                    </a>
                                    <span class=\"profileName\">
                                    </span>
                                    <input
                                            class=\"form-control\"
                                            id=\"text\"
                                            type=\"hidden\"
                                            name=\"id\"
                                            value=\"";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "\"
                                    >
                                    <input
                                        class=\"form-control\"
                                        class=\"subuser__input\"
                                        id=\"round\"
                                        type=\"image\"
                                        name=\"avatar\"
                                        value=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 61), "html", null, true);
            echo " \"
                                        src=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 62), "html", null, true);
            echo "\"
                                    >
                                    <span class=\"profileName\">
                                        <input
                                            class=\"form-control\"
                                            class=\"subuser__input\"
                                            type=\"hidden\"
                                            name=\"subuser_name\"
                                            value=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 70), "html", null, true);
            echo "\">

                                    </span>
                                    <span class=\"profileName\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 73), "html", null, true);
            echo "</span>
";
            // line 76
            echo "                                </div>
                            </form>
                        </li>

                        ";
            // line 80
            $context["subuser_id"] = ((isset($context["subuser_id"]) || array_key_exists("subuser_id", $context) ? $context["subuser_id"] : (function () { throw new RuntimeError('Variable "subuser_id" does not exist.', 80, $this->source); })()) + 1);
            // line 81
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subuser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "


                </ul>
";
        // line 104
        echo "            </div>
            <div id=\"buttonDiv\">
                <a>
                    <a class=\"profileButton\" href=\"/manageUser\">Zarządzaj profilami</a>
                </a>
            </div>
        </div>


    </div>


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
        return array (  207 => 104,  201 => 92,  195 => 81,  193 => 80,  187 => 76,  183 => 73,  177 => 70,  166 => 62,  162 => 61,  151 => 53,  141 => 45,  137 => 42,  134 => 40,  130 => 37,  125 => 34,  123 => 33,  109 => 22,  104 => 19,  94 => 18,  70 => 2,  60 => 1,  50 => 18,  47 => 17,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"assets/user.css\">
    <style>
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
    </style>
{% endblock %}

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
                    <a class=\"profileButton\" href=\"/manageUser\">Zarządzaj profilami</a>
                </a>
            </div>
        </div>


    </div>


{#    <a href=\"/browse\">#}
{#        <button type=\"button\" class=\"buttonNext\">Dalej</button>#}
{#    </a>#}
{% endblock %}", "user/user.html.twig", "/var/www/symfony_docker/templates/user/user.html.twig");
    }
}
