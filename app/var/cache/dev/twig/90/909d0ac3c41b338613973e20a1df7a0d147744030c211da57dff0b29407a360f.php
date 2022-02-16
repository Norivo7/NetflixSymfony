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

/* security/login.html.twig */
class __TwigTemplate_e649a0fb96b87f9b6f70d46341486fee309ba06b8acc51879b2ae9dfeaf738ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 3
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 138
        echo "
";
        // line 139
        $this->displayBlock('body', $context, $blocks);
        // line 191
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "
    <style>
        body {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 100vh;
            background-image: url(https://assets.nflxext.com/ffe/siteui/vlv3/9c5457b8-9ab0-4a04-9fc1-e608d5670f1a/3d5ac1a1-58d2-4f40-9a5c-cf67b6dcfe47/DE-de-20210719-popsignuptwoweeks-perspective_alpha_website_large.jpg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            background-color: #b3b3b3;
            background-blend-mode: multiply;
        }

        body .logo {
            position: absolute;
            align-self: flex-start;
            left: 10px;
        }

        body .logo img {
            height: 75px;
            width: auto;
        }

        body .login {
            display: flex;
            flex-direction: column;
            background: rgba(0, 0, 0, 0.75);
            border-radius: 4px;
            width: 300px;
            height: 400px;
            padding: 60px 68px 40px;
        }

        body .login__title {
            margin-bottom: 20px;
            font-size: 2.2rem;
            font-weight: 600;
            color: #fff;
        }

        body .login__group {
            position: relative;
            z-index: 10;
            display: flex;
        }

        body .login__group__label {
            position: absolute;
            z-index: 150;
            color: #b3b3b3;
            font-size: 0.9rem;
            top: 30px;
            left: 18px;
            transition: all 300ms ease-in;
        }

        body .login__group__input {
            width: 100%;
            position: relative;
            z-index: 100;
            background: #333;
            margin-bottom: 20px;
            border-radius: 4px;
            border: none;
            opacity: 1;
            font-size: 1rem;
            color: #fff;
            line-height: 50px;
            padding: 12px 18px 0;
        }

        body .login__group__input:focus + .login__group__label {
            top: 15px;
            font-size: 0.7rem;
        }

        body .login__sign-in {
            margin: 24px 0 12px;
            padding: 16px;
            color: #fff;
            background: #e50914;
            font-size: 0.9rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        body .login__secondary-cta {
            position: relative;
            z-index: 100;
            display: flex;
            justify-content: space-between;
        }

        body .login__secondary-cta__text {
            opacity: 1;
            font-size: 0.9rem;
            color: #b3b3b3;
            text-decoration: none;
        }

        body .login__secondary-cta__text--need-help {
            transition: all 0.3s ease-in;
        }

        body .login__secondary-cta__text--need-help:hover {
            text-decoration: underline;
        }

        ::placeholder {
            font-size: 0.7rem;
        }
        .misc {
            color: #b3b3b3;
            margin-top: 11px;
            display: flex;
            flex-direction: column;
            font-size: 13px;
        }
        .footer{
            width: 1000px;
            padding-top: 175px;
            margin: auto;
            display: block;
            flex-direction: column;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 140
        echo "    <a class=\"logo\" href=\"/\" target=\"_parent\">
        <img
                src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/1280px-Netflix_2015_logo.svg.png\"
                width=\"167\"
                height=\"45\"
                style=\"vertical-align:middle;margin:20px 50px;\" alt=\"netflixLogo\">
    </a>

    <form method=\"post\">


        ";
        // line 151
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151)) {
            // line 152
            echo "            <div class=\"mb-3\">
                You are logged in as ";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153), "username", [], "any", false, false, false, 153), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
        ";
        }
        // line 156
        echo "        <div class=\"login\">
            <h1 class=\"login__title\">Zaloguj się</h1>
            ";
        // line 158
        if (array_key_exists("error", $context)) {
            // line 159
            echo "                ";
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 159, $this->source); })())) {
                // line 160
                echo "                    <div class=\"login__group\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 160, $this->source); })()), "messageKey", [], "any", false, false, false, 160), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 160, $this->source); })()), "messageData", [], "any", false, false, false, 160), "security"), "html", null, true);
                echo "</div>
                ";
            }
            // line 162
            echo "            ";
        }
        // line 163
        echo "            <div class=\"login__group\">
                <input class=\"login__group__input\" type=\"email\" class=\"form-control\" id=\"inputEmail\"
                       name=\"email\" required>
                <label class=\"login__group__label\" for=\"inputEmail\"></label>
            </div>
            <div class=\"login__group\">
                <input class=\"login__group__input\" type=\"password\" name=\"password\" id=\"inputPassword\"
                       class=\"form-control\" required>
                <label class=\"login__group__label\" for=\"inputPassword\"></label>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
            <button class=\"login__sign-in\" type=\"submit\">Zaloguj się</button>
            <div class=\"login__secondary-cta\">
                <a class=\"login__secondary-cta__text\" href=\"/register\">Zarejestruj się</a>
                <a class=\"login__secondary-cta__text login__secondary-cta__text--need-help\" href=\"#\">Potrzebujesz pomocy?</a>
            </div>
            <div class=\"misc\">
                Ta strona korzysta z zabezpieczenia Google reCAPTCHA, by upewnić się, że nie jesteś botem. Dowiedz się więcej.
            </div>

        </div>

        <hr>

    </form>

<body></body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  282 => 173,  270 => 163,  267 => 162,  261 => 160,  258 => 159,  256 => 158,  252 => 156,  244 => 153,  241 => 152,  239 => 151,  226 => 140,  216 => 139,  73 => 4,  63 => 3,  52 => 191,  50 => 139,  47 => 138,  45 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %} #}
{#<link rel=\"stylesheet\" href=\"assets/style.css\">#}
{% block stylesheet %}

    <style>
        body {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 100vh;
            background-image: url(https://assets.nflxext.com/ffe/siteui/vlv3/9c5457b8-9ab0-4a04-9fc1-e608d5670f1a/3d5ac1a1-58d2-4f40-9a5c-cf67b6dcfe47/DE-de-20210719-popsignuptwoweeks-perspective_alpha_website_large.jpg);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
            background-color: #b3b3b3;
            background-blend-mode: multiply;
        }

        body .logo {
            position: absolute;
            align-self: flex-start;
            left: 10px;
        }

        body .logo img {
            height: 75px;
            width: auto;
        }

        body .login {
            display: flex;
            flex-direction: column;
            background: rgba(0, 0, 0, 0.75);
            border-radius: 4px;
            width: 300px;
            height: 400px;
            padding: 60px 68px 40px;
        }

        body .login__title {
            margin-bottom: 20px;
            font-size: 2.2rem;
            font-weight: 600;
            color: #fff;
        }

        body .login__group {
            position: relative;
            z-index: 10;
            display: flex;
        }

        body .login__group__label {
            position: absolute;
            z-index: 150;
            color: #b3b3b3;
            font-size: 0.9rem;
            top: 30px;
            left: 18px;
            transition: all 300ms ease-in;
        }

        body .login__group__input {
            width: 100%;
            position: relative;
            z-index: 100;
            background: #333;
            margin-bottom: 20px;
            border-radius: 4px;
            border: none;
            opacity: 1;
            font-size: 1rem;
            color: #fff;
            line-height: 50px;
            padding: 12px 18px 0;
        }

        body .login__group__input:focus + .login__group__label {
            top: 15px;
            font-size: 0.7rem;
        }

        body .login__sign-in {
            margin: 24px 0 12px;
            padding: 16px;
            color: #fff;
            background: #e50914;
            font-size: 0.9rem;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        body .login__secondary-cta {
            position: relative;
            z-index: 100;
            display: flex;
            justify-content: space-between;
        }

        body .login__secondary-cta__text {
            opacity: 1;
            font-size: 0.9rem;
            color: #b3b3b3;
            text-decoration: none;
        }

        body .login__secondary-cta__text--need-help {
            transition: all 0.3s ease-in;
        }

        body .login__secondary-cta__text--need-help:hover {
            text-decoration: underline;
        }

        ::placeholder {
            font-size: 0.7rem;
        }
        .misc {
            color: #b3b3b3;
            margin-top: 11px;
            display: flex;
            flex-direction: column;
            font-size: 13px;
        }
        .footer{
            width: 1000px;
            padding-top: 175px;
            margin: auto;
            display: block;
            flex-direction: column;
        }
    </style>
{% endblock %}

{% block body %}
    <a class=\"logo\" href=\"/\" target=\"_parent\">
        <img
                src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/1280px-Netflix_2015_logo.svg.png\"
                width=\"167\"
                height=\"45\"
                style=\"vertical-align:middle;margin:20px 50px;\" alt=\"netflixLogo\">
    </a>

    <form method=\"post\">


        {% if app.user %}
            <div class=\"mb-3\">
                You are logged in as {{ app.user.username }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
            </div>
        {% endif %}
        <div class=\"login\">
            <h1 class=\"login__title\">Zaloguj się</h1>
            {% if error is defined %}
                {% if error %}
                    <div class=\"login__group\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
            {% endif %}
            <div class=\"login__group\">
                <input class=\"login__group__input\" type=\"email\" class=\"form-control\" id=\"inputEmail\"
                       name=\"email\" required>
                <label class=\"login__group__label\" for=\"inputEmail\"></label>
            </div>
            <div class=\"login__group\">
                <input class=\"login__group__input\" type=\"password\" name=\"password\" id=\"inputPassword\"
                       class=\"form-control\" required>
                <label class=\"login__group__label\" for=\"inputPassword\"></label>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <button class=\"login__sign-in\" type=\"submit\">Zaloguj się</button>
            <div class=\"login__secondary-cta\">
                <a class=\"login__secondary-cta__text\" href=\"/register\">Zarejestruj się</a>
                <a class=\"login__secondary-cta__text login__secondary-cta__text--need-help\" href=\"#\">Potrzebujesz pomocy?</a>
            </div>
            <div class=\"misc\">
                Ta strona korzysta z zabezpieczenia Google reCAPTCHA, by upewnić się, że nie jesteś botem. Dowiedz się więcej.
            </div>

        </div>

        <hr>

    </form>

<body></body>
{% endblock %}

", "security/login.html.twig", "/var/www/symfony_docker/templates/security/login.html.twig");
    }
}
