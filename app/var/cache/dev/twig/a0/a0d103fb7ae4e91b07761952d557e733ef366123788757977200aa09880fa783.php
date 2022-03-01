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

/* subuser_crud/index.html.twig */
class __TwigTemplate_55b5e6847228e95059182e0c2f45649623b9761564f9807e77dabb653da40d51 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subuser_crud/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subuser_crud/index.html.twig"));

        // line 1
        echo "<head>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Wybierz profil - Netflix";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
<style>
    body{
        background-color: #141414;
    }
    .main {
        margin-top: 150px;
        display: flex;
        flex-direction: column;
        align-items: center;
        align-content: center;
        justify-content: center;
        gap: 30px;
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
    .table{
        /*margin-top: 100px;*/
        width: 1000px;
        color: white;
        flex-direction: column;
    }
    .tbody{
        /*display: flex;*/
    }
    h1 {
        color: white;
        text-align: center;
    }
    ul{
        list-style-type: none;
    }
    li {
        padding: 20px;
    }
    .logo {
        margin-left: 25px;
        margin-top: 10px;
        align-items: center;
        vertical-align: middle;
        display: inline-block;
        height: 60%;
        justify-content: center;

    }
    #buttonDiv {
        align-items: center;
        text-align: center;
        width: 100%;
        margin-top: 20px;
    }
    .brandLogoWrapper {
        height: 68px;
        background-image: linear-gradient(to bottom,rgba(0,0,0,.7) 10%,rgba(0,0,0,0));
    }
    #headerContainer {
        vertical-align: top;
        margin: -0.4em auto 2em auto;
        width: 100vw;
        height: 5vh;
    }
    h1{
        font-weight: 10;
        width: 100%;
        justify-content: center;
        vertical-align: center;
        position: absolute;
        top: 0;
    }
    h2{
        color: white;
    }
    ul{
        padding: 0;
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 96
        echo "<body>
    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogo.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
        </div>
        <h1>Panel Administratora</h1>
    </div>

";
        // line 111
        echo "
";
        // line 122
        echo "
";
        // line 124
        echo "

<div class=\"main\">
    <h2>Profile użytkowników</h2>
    <table class=\"table\">

        <thead>

        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Avatar</th>
            <th>Użytkownik</th>
            <th>Akcje</th>
        </tr>

        </thead>

        <tbody class=\"tbody\">
        ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subusers"]) || array_key_exists("subusers", $context) ? $context["subusers"] : (function () { throw new RuntimeError('Variable "subusers" does not exist.', 143, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subuser"]) {
            // line 144
            echo "            <tr>
                <td>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "id", [], "any", false, false, false, 145), "html", null, true);
            echo "</td>
                <td>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "name", [], "any", false, false, false, 146), "html", null, true);
            echo "</td>
                <td>";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "avatar", [], "any", false, false, false, 147), "html", null, true);
            echo "</td>
                <td>";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subuser"], "subaccountOf", [], "any", false, false, false, 148), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subuser_crud_show", ["id" => twig_get_attribute($this->env, $this->source, $context["subuser"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subuser_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["subuser"], "id", [], "any", false, false, false, 151)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 155
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subuser'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "        </tbody>
    </table>

    <a class=\"profileButton\" href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subuser_crud_new");
        echo "\">Stwórz</a>
</div>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "subuser_crud/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  300 => 162,  295 => 159,  286 => 155,  277 => 151,  273 => 150,  268 => 148,  264 => 147,  260 => 146,  256 => 145,  253 => 144,  248 => 143,  227 => 124,  224 => 122,  221 => 111,  212 => 100,  206 => 96,  196 => 95,  102 => 9,  92 => 8,  73 => 6,  63 => 95,  60 => 94,  58 => 8,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <title>{% block title %}Wybierz profil - Netflix{% endblock %}</title>
</head>
{% block stylesheets %}

<style>
    body{
        background-color: #141414;
    }
    .main {
        margin-top: 150px;
        display: flex;
        flex-direction: column;
        align-items: center;
        align-content: center;
        justify-content: center;
        gap: 30px;
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
    .table{
        /*margin-top: 100px;*/
        width: 1000px;
        color: white;
        flex-direction: column;
    }
    .tbody{
        /*display: flex;*/
    }
    h1 {
        color: white;
        text-align: center;
    }
    ul{
        list-style-type: none;
    }
    li {
        padding: 20px;
    }
    .logo {
        margin-left: 25px;
        margin-top: 10px;
        align-items: center;
        vertical-align: middle;
        display: inline-block;
        height: 60%;
        justify-content: center;

    }
    #buttonDiv {
        align-items: center;
        text-align: center;
        width: 100%;
        margin-top: 20px;
    }
    .brandLogoWrapper {
        height: 68px;
        background-image: linear-gradient(to bottom,rgba(0,0,0,.7) 10%,rgba(0,0,0,0));
    }
    #headerContainer {
        vertical-align: top;
        margin: -0.4em auto 2em auto;
        width: 100vw;
        height: 5vh;
    }
    h1{
        font-weight: 10;
        width: 100%;
        justify-content: center;
        vertical-align: center;
        position: absolute;
        top: 0;
    }
    h2{
        color: white;
    }
    ul{
        padding: 0;
    }
</style>
{% endblock %}

{% block body %}
<body>
    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogo.svg.png') }}\" alt=\"av1\"/>
            </a>
        </div>
        <h1>Panel Administratora</h1>
    </div>

{#<div class=\"main\">#}
{#    <div class=\"profilesContainer\">#}
{#        <div class=\"profilesList\">#}
{#            <h1 class=\"profilesLabel\"> Kto ogląda?</h1>#}
{#            <ul class=\"chooseProfile\">#}

{#                {% for subuser in subusers %}#}
{#                    <li class=\"profile\">#}
{#                        <div>#}
{#                            <a class=\"profileLink\" href=\"/browse\">#}
{#                                <img src=\"{{subuser.avatar}}\" class=\"round\" alt=\"av1\"/>#}
{#                            </a>#}
{#                        </div>#}
{#                        <span class=\"profileName\">{{ subuser.name }}</span>#}
{#                    </li>#}
{#                {% endfor %}#}

{#            </ul>#}


<div class=\"main\">
    <h2>Profile użytkowników</h2>
    <table class=\"table\">

        <thead>

        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Avatar</th>
            <th>Użytkownik</th>
            <th>Akcje</th>
        </tr>

        </thead>

        <tbody class=\"tbody\">
        {% for subuser in subusers %}
            <tr>
                <td>{{ subuser.id }}</td>
                <td>{{ subuser.name }}</td>
                <td>{{ subuser.avatar }}</td>
                <td>{{ subuser.subaccountOf }}</td>
                <td>
                    <a href=\"{{ path('subuser_crud_show', {'id': subuser.id}) }}\">show</a>
                    <a href=\"{{ path('subuser_crud_edit', {'id': subuser.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a class=\"profileButton\" href=\"{{ path('subuser_crud_new') }}\">Stwórz</a>
</div>
</body>
{% endblock %}
", "subuser_crud/index.html.twig", "/var/www/symfony_docker/templates/subuser_crud/index.html.twig");
    }
}
