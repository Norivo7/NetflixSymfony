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

/* user/profile.html.twig */
class __TwigTemplate_f4a2ab3fa7e7006af5eba86775638d484c6232a07b04995821f51e1ccbcc4ba9 extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/profile.html.twig"));

        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <head>
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
    </head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogo.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
        </div>
            <a class=\"avatar\" href=\"/browse\">
                <img class=\"userAvatar\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\" alt=\"avatar\"></a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
    <div class=\"mainWrapper\">




    <section class=\"layout1\">
        <div>1</div>
        <div>2</div>
    </section>
        <section class=\"layout2\">
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>5</div>
            <div>6</div>
        </section>

";
        // line 92
        echo "
";
        // line 98
        echo "
";
        // line 100
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 104
        echo "    ";
        // line 105
        echo "    ";
        // line 106
        echo "
    <style>
        .layout1 {
            width: 1920px;
            height: 100px;
            display: grid;
            grid-template-rows: repeat(auto-fit, 1fr);
            grid-template-columns: 25% 30% 25%;
            gap: 8px;
            justify-content: center;
            justify-items: start;
        }
        .layout2 {
            width: 1920px;
            height: 6 80px;
            display: grid;
            grid-template-rows: repeat(auto-fit, 1fr);
            grid-template-columns: 25% 30% 25%;
            gap: 8px;
            justify-content: center;
            justify-items: start;
        }
        li{
            color: black;
        }
        #headerContainer{
            display: flex;
            flex-direction: row;
            height: 70px;
            justify-content: space-between;
            flex-wrap: nowrap;
        }
        .brandLogoWrapper{
            height: 100%;
            justify-content: center;
            padding: 17px 30px;
        }
        .logo {
            height: 100%;
        }
        .avatar{
            height: 20px;
            padding: 17px;
            color: white;
            align-items: center;
            justify-content: center;
        }
        a:hover {
            opacity: 0.8;
        }

        body {
            background-color: black;
            color: black;
        }
        .mainWrapper{
            width: 100%;
            height: 2000px;
            background-color: #f3f3f3;
        /*    text-align: center;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        }

        hr {
            border-bottom: 8px solid rgb(118, 118, 118);
        }

        h1 {

        }
        h2 {
            font-weight: 400;
            color: black;
            width: 10px;
        }
        hr {
            border-bottom: 8px solid rgb(118, 118, 118);
        }
        h3 {
            padding-bottom: 20px;
            font-size: 1.2rem;
            color: #FFFFFF;
        }
        .userAvatar{
            width:35px;
            border-radius: 4px;
        }

        /*.third {*/
        /*    width: 33%;*/
        /*}*/
        /*.full-width{*/
        /*    width: 80%;*/
        /*}*/
        /*.full-height{*/
        /*    height: 100%;*/
        /*}*/
        /*.left {*/
        /*    text-align: left;*/
        /*    float: left;*/
        /*}*/
        /*.right{*/
        /*    color: black;*/
        /*    float: right;*/
        /*    text-align: right;*/
        /*}*/

        /*.half{*/
        /*    width: 50%;*/
        /*}*/
        /*.fill {*/
        /*    height: 350px;*/
        /*    margin: auto 0;*/
        /*}*/
        /*.credentials{*/
        /*    width: 750px;*/
        /*    height: 350px;*/
        /*}*/
        /*.deny {*/
        /*    height: 350px;*/
        /*    width: 250px;*/
        /*}*/
        /*.first {*/
        /*    display: inline-block;*/
        /*    text-align: center;*/
        /*    font-size: 2rem;*/
        /*    color: black;*/
        /*    !*line-height: 1.1;*!*/
        /*    !*font-weight: bold;*!*/
        /*}*/
        /*.accountContainer{*/
        /*    !*flex-direction: column;*!border: 2px solid green;*/
        /*    width:100%;*/
        /*    display: flex;*/
        /*    align-content: center;*/
        /*    justify-content: center;*/
        /*}*/
        /*.row {*/
        /*    flex-direction: row;*/
        /*    border: 2px solid black;*/
        /*}*/
        /*.inlineblock{*/
        /*    display: inline-block;*/
        /*}*/

        /*.column {*/
        /*    flex-direction: column;*/
        /*    border: 2px solid red;*/
        /*}*/


    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/profile.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 106,  195 => 105,  193 => 104,  183 => 103,  172 => 100,  169 => 98,  166 => 92,  145 => 26,  135 => 25,  122 => 21,  115 => 17,  110 => 14,  100 => 13,  82 => 3,  72 => 2,  62 => 103,  59 => 102,  57 => 25,  54 => 24,  52 => 13,  49 => 12,  47 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'user/user.html.twig' %}#}
{% block head %}
    <head>
        <link rel=\"stylesheet\"
              href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
              crossorigin=\"anonymous\">
    </head>
{% endblock %}

{% block header %}
    <div id=\"headerContainer\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogo.svg.png') }}\" alt=\"av1\"/>
            </a>
        </div>
            <a class=\"avatar\" href=\"/browse\">
                <img class=\"userAvatar\" src=\"{{ userAvatar }}\" alt=\"avatar\"></a>
    </div>
{% endblock %}

{% block body %}

    <div class=\"mainWrapper\">




    <section class=\"layout1\">
        <div>1</div>
        <div>2</div>
    </section>
        <section class=\"layout2\">
            <div>1</div>
            <div>2</div>
            <div>3</div>
            <div>4</div>
            <div>5</div>
            <div>6</div>
        </section>

{#        <div>#}
{#            <div class=\"row inlineblock left\">#}
{#                <h1>Konto</h1>#}
{#            </div>#}
{#            <div class=\"row inlineblock left full-width\">#}
{#                <p>Użytkownik od</p>#}
{#            </div>#}
{#        </div>#}
{#        <div class=\"accountContainer\">#}
{#            <hr>#}
{#            <div class=\"row fill\">#}
{#                <div class=\"column left deny\">#}
{#                    Członkostwo i rozliczenia#}
{#                    <button>Anuluj członkostwo</button>#}
{#                </div>#}
{#                <div class=\"column credentials\">#}
{#                    <div class=\"row fill\">#}
{#                        <div class=\"left half\">#}
{#                            <li>email</li>#}
{#                            <li>hasło:</li>#}
{#                            <li>telefon:</li>#}
{#                        </div>#}
{#                         <div class=\"right half\">#}
{#                             <li><a>Zmień adres e-mail</a></li>#}
{#                             <li><a>Zmień hasło</a></li>#}
{#                             <li><a>Zweryfikuj numer telefon</a></li>#}
{#                             <li> <a>Zmień numer telefon</a></li>#}
{#                         </div>#}
{#                        <hr>#}
{#                        <div class=\"left half\">#}
{#                            <li>4124 1242 1242 12414</li>#}
{#                            <li>Twoja kolejna data rozliczenia to: </li>#}
{#                        </div>#}
{#                        <div class=\"right half\">#}
{#                            <li><a>Zarządzaj metodami płatności</a></li>#}
{#                            <li><a>Dodaj zapasową metodę płatności</a></li>#}
{#                            <li><a>Szczegóły rozliczenia</a></li>#}
{#                            <li><a>Zmień dzień rozliczenia</a></li>#}
{#                        </div>#}
{#                        <hr>#}
{#                        <div class=\"right full-width\">#}
{#                            <li><a>Zrealizuj kartę podarunkową lub kod promocyjny</a></li>#}
{#                            <li><a>Gdzie kupić karty podarunkowe</a></li>#}
{#                        </div>#}
{#                    </div>#}
{#                </div>#}
{#                <div class=\"accountContainer row credentials\" style=\"margin:0 auto;height: 70px;width: 750px;\">#}

{#                        <div class=\"left third\">Szczegóły planu</div>#}
{#                        <div class=\"third\"> Standard </div>#}
{#                        <div class=\"right third\"><a>Zmień plan</a></div>#}
{#                </div>#}
{#            </div>#}

{#        </div>#}
    </div>
{% endblock %}

{% block stylesheets %}
    {#    {{ parent() }}#}
    {#    <link rel=\"stylesheet\" href=\"assets/user.css\">#}

    <style>
        .layout1 {
            width: 1920px;
            height: 100px;
            display: grid;
            grid-template-rows: repeat(auto-fit, 1fr);
            grid-template-columns: 25% 30% 25%;
            gap: 8px;
            justify-content: center;
            justify-items: start;
        }
        .layout2 {
            width: 1920px;
            height: 6 80px;
            display: grid;
            grid-template-rows: repeat(auto-fit, 1fr);
            grid-template-columns: 25% 30% 25%;
            gap: 8px;
            justify-content: center;
            justify-items: start;
        }
        li{
            color: black;
        }
        #headerContainer{
            display: flex;
            flex-direction: row;
            height: 70px;
            justify-content: space-between;
            flex-wrap: nowrap;
        }
        .brandLogoWrapper{
            height: 100%;
            justify-content: center;
            padding: 17px 30px;
        }
        .logo {
            height: 100%;
        }
        .avatar{
            height: 20px;
            padding: 17px;
            color: white;
            align-items: center;
            justify-content: center;
        }
        a:hover {
            opacity: 0.8;
        }

        body {
            background-color: black;
            color: black;
        }
        .mainWrapper{
            width: 100%;
            height: 2000px;
            background-color: #f3f3f3;
        /*    text-align: center;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        }

        hr {
            border-bottom: 8px solid rgb(118, 118, 118);
        }

        h1 {

        }
        h2 {
            font-weight: 400;
            color: black;
            width: 10px;
        }
        hr {
            border-bottom: 8px solid rgb(118, 118, 118);
        }
        h3 {
            padding-bottom: 20px;
            font-size: 1.2rem;
            color: #FFFFFF;
        }
        .userAvatar{
            width:35px;
            border-radius: 4px;
        }

        /*.third {*/
        /*    width: 33%;*/
        /*}*/
        /*.full-width{*/
        /*    width: 80%;*/
        /*}*/
        /*.full-height{*/
        /*    height: 100%;*/
        /*}*/
        /*.left {*/
        /*    text-align: left;*/
        /*    float: left;*/
        /*}*/
        /*.right{*/
        /*    color: black;*/
        /*    float: right;*/
        /*    text-align: right;*/
        /*}*/

        /*.half{*/
        /*    width: 50%;*/
        /*}*/
        /*.fill {*/
        /*    height: 350px;*/
        /*    margin: auto 0;*/
        /*}*/
        /*.credentials{*/
        /*    width: 750px;*/
        /*    height: 350px;*/
        /*}*/
        /*.deny {*/
        /*    height: 350px;*/
        /*    width: 250px;*/
        /*}*/
        /*.first {*/
        /*    display: inline-block;*/
        /*    text-align: center;*/
        /*    font-size: 2rem;*/
        /*    color: black;*/
        /*    !*line-height: 1.1;*!*/
        /*    !*font-weight: bold;*!*/
        /*}*/
        /*.accountContainer{*/
        /*    !*flex-direction: column;*!border: 2px solid green;*/
        /*    width:100%;*/
        /*    display: flex;*/
        /*    align-content: center;*/
        /*    justify-content: center;*/
        /*}*/
        /*.row {*/
        /*    flex-direction: row;*/
        /*    border: 2px solid black;*/
        /*}*/
        /*.inlineblock{*/
        /*    display: inline-block;*/
        /*}*/

        /*.column {*/
        /*    flex-direction: column;*/
        /*    border: 2px solid red;*/
        /*}*/


    </style>
{% endblock %}", "user/profile.html.twig", "/var/www/symfony_docker/templates/user/profile.html.twig");
    }
}
