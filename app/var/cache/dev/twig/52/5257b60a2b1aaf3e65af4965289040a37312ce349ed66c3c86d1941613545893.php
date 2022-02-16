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

/* security/oldlogin.html.twig */
class __TwigTemplate_6b425bb626a7f40b623e47a135f0df779ffd387ef77e56c9dd9eb0b948590939 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/oldlogin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/oldlogin.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 109
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 3
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
    body .login__group__input:focus+.login__group__label {
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
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 110
        echo "    <a class=\"logo\" href=\"/\" target=\"_parent\">
        <img
                src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/1280px-Netflix_2015_logo.svg.png\"
                width=\"167\"
                height=\"45\"
                style=\"vertical-align:middle;margin:20px 50px;\" alt=\"netflixLogo\">
    </a>
<form>

    <div class=\"login\">
        <h1 class=\"login__title\">Zaloguj się</h1>
        <a href=\"/user\">

            <button type=\"submit\" class=\"login__sign-in\">Zaloguj</button>
        </a>
    </div>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/oldlogin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 110,  185 => 109,  70 => 3,  60 => 2,  50 => 109,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
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
    body .login__group__input:focus+.login__group__label {
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
<form>

    <div class=\"login\">
        <h1 class=\"login__title\">Zaloguj się</h1>
        <a href=\"/user\">

            <button type=\"submit\" class=\"login__sign-in\">Zaloguj</button>
        </a>
    </div>
</form>
{% endblock %}", "security/oldlogin.html.twig", "/var/www/symfony_docker/templates/security/oldlogin.html.twig");
    }
}
