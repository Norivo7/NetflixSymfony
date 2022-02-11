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
        // line 101
        echo "<div id=\"headerContainer\">
    <div class=\"brandLogoWrapper\">
        <a class=\"logo\" href=\"/\" target=\"_parent\">
            <img class=\"logo\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogo.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
        </a>
    </div>
</div>
";
        // line 108
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
        echo "
<style>

    html {
        margin-left: -8px;
    }
    body{

        background-color: #141414;
    }
    .main {
        margin: 0 auto;
        display: flex;
        height: 80%;
        align-items: center;
        /*vertical-align: center;*/
        justify-content: space-evenly;
        /*width: 100%;*/
    }
    h1 {
        color: white;
        text-align: center;
    }
    /*.profile:hover {*/
    /*    color:#000;*/
    /*    background-color:#FFF;*/
    /*    background-image:none;*/

    /*}*/
    .profilesContainer{
        color: gray;
        text-align: center;
    }
    .chooseProfile{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        flex: 1;
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
    ul{
        list-style-type: none;
    }
    li {
        padding: 20px;

    }
    img.round {
        outline-offset: -4px;
        border: 0px solid;
        border-radius: 10px;
    }
    img.round:hover {
        color:#000;
        box-shadow: 0px 0px 0px 4px white;
        background-color:#FFF;
        background-image:none;
    }
    .brandLogoWrapper {

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
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 109
        echo "
    <body></body>
    <div class=\"main\">



        <div class=\"profilesContainer\">
            <div class=\"profilesList\">

                <h1 class=\"profilesLabel\"> Kto ogląda?</h1>
                <ul class=\"chooseProfile\">

                    <li class=\"profile\">
                        <div id=\"choice\">
                            <a class=\"profileLink\" href=\"/movieList\">
                                <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/av1.png"), "html", null, true);
        echo "\" class=\"round\"  alt=\"av1\"/>
                            </a>
                        </div>
                        <span class=\"profileName\">Kamil</span>
                    </li>
                    <li class=\"profile\">
                        <div>
                            <a class=\"profileLink\">
                                <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/av2.png"), "html", null, true);
        echo "\" class=\"round\" alt=\"av2\"/>
                            </a>
                        </div>
                        <span class=\"profileName\">Marek</span>
                    </li>
                    <li class=\"profile\">
                        <div>
                            <a class=\"profileLink\">
                                <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/av3.png"), "html", null, true);
        echo "\" class=\"round\" alt=\"av3\"/>
                            </a>
                        </div>
                        <span class=\"profileName\">Konrad</span>
                    </li>
                    <li class=\"profile\">
                        <div>
                            <a class=\"profileLink\">
                                <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/av4.png"), "html", null, true);
        echo "\" class=\"round\" alt=\"av4\"/>
                            </a>
                        </div>
                        <span class=\"profileName\">Maria</span>
                    </li>

                </ul>
";
        // line 163
        echo "            </div>
            <div id=\"buttonDiv\">
                <a>
                    <a class=\"profileButton\" href=\"/ManageProfiles\">Zarządzaj profilami</a>
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 163,  247 => 148,  236 => 140,  225 => 132,  214 => 124,  197 => 109,  187 => 108,  79 => 2,  69 => 1,  59 => 108,  52 => 104,  47 => 101,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}

<style>

    html {
        margin-left: -8px;
    }
    body{

        background-color: #141414;
    }
    .main {
        margin: 0 auto;
        display: flex;
        height: 80%;
        align-items: center;
        /*vertical-align: center;*/
        justify-content: space-evenly;
        /*width: 100%;*/
    }
    h1 {
        color: white;
        text-align: center;
    }
    /*.profile:hover {*/
    /*    color:#000;*/
    /*    background-color:#FFF;*/
    /*    background-image:none;*/

    /*}*/
    .profilesContainer{
        color: gray;
        text-align: center;
    }
    .chooseProfile{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        flex: 1;
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
    ul{
        list-style-type: none;
    }
    li {
        padding: 20px;

    }
    img.round {
        outline-offset: -4px;
        border: 0px solid;
        border-radius: 10px;
    }
    img.round:hover {
        color:#000;
        box-shadow: 0px 0px 0px 4px white;
        background-color:#FFF;
        background-image:none;
    }
    .brandLogoWrapper {

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
    </style>

{% endblock %}
<div id=\"headerContainer\">
    <div class=\"brandLogoWrapper\">
        <a class=\"logo\" href=\"/\" target=\"_parent\">
            <img class=\"logo\" src=\"{{ asset('images/netflixLogo.svg.png') }}\" alt=\"av1\"/>
        </a>
    </div>
</div>
{% block body %}

    <body></body>
    <div class=\"main\">



        <div class=\"profilesContainer\">
            <div class=\"profilesList\">

                <h1 class=\"profilesLabel\"> Kto ogląda?</h1>
                <ul class=\"chooseProfile\">

                    <li class=\"profile\">
                        <div id=\"choice\">
                            <a class=\"profileLink\" href=\"/movieList\">
                                <img src=\"{{ asset('images/av1.png') }}\" class=\"round\"  alt=\"av1\"/>
                            </a>
                        </div>
                        <span class=\"profileName\">Kamil</span>
                    </li>
                    <li class=\"profile\">
                        <div>
                            <a class=\"profileLink\">
                                <img src=\"{{ asset('images/av2.png') }}\" class=\"round\" alt=\"av2\"/>
                            </a>
                        </div>
                        <span class=\"profileName\">Marek</span>
                    </li>
                    <li class=\"profile\">
                        <div>
                            <a class=\"profileLink\">
                                <img src=\"{{ asset('images/av3.png') }}\" class=\"round\" alt=\"av3\"/>
                            </a>
                        </div>
                        <span class=\"profileName\">Konrad</span>
                    </li>
                    <li class=\"profile\">
                        <div>
                            <a class=\"profileLink\">
                                <img src=\"{{ asset('images/av4.png') }}\" class=\"round\" alt=\"av4\"/>
                            </a>
                        </div>
                        <span class=\"profileName\">Maria</span>
                    </li>

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
                    <a class=\"profileButton\" href=\"/ManageProfiles\">Zarządzaj profilami</a>
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
