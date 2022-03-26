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

/* registration/register.html.twig */
class __TwigTemplate_e858d50835e10fd9855101bbedb5294833b853c7e89d614c6254e4e24db93298 extends Template
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
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('navigation', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "
";
        // line 57
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
        echo "
    <head>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"
              crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\">
    </head>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 15
        echo "
    <nav>
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
            <a class=\"login\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Zaloguj się</a>
        </div>
    </nav>
    <hr>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "    <body>
    <div class=\"main\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 32
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        <h1>Rejestracja</h1>
        ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), 'form_start');
        echo "
        <div class=\"input\">Email: ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'widget', ["attr" => ["value" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 36, $this->source); })())]]);
        echo "</div>
        <div class=\"error\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'errors');
        echo "</div>
        <div class=\"input\">Hasło: ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "plainPassword", [], "any", false, false, false, 38), 'widget');
        echo "</div>
        <div class=\"error\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "plainPassword", [], "any", false, false, false, 39), 'errors');
        echo "</div>
        <div class=\"input\">Akceptuje warunki: ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "agreeTerms", [], "any", false, false, false, 40), 'widget');
        echo "</div>
        <div class=\"error\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "agreeTerms", [], "any", false, false, false, 41), 'errors');
        echo "</div>
        <button type=\"submit\" class=\"btn\">Zarejestruj</button>
        ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
    </div>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 49
        echo "
<div class=\"footerWrap\">
    <hr>
    ";
        // line 52
        $this->loadTemplate("registration/register.html.twig", "registration/register.html.twig", 52, "2037922672")->display($context);
        // line 53
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 58
        echo "    <style>

        ";
        // line 63
        echo "
        a, a:visited, a:active {
            color: #757575;
            text-decoration: none;
        }

        a:hover {
            color: #757575;
            text-decoration: underline;
        }


        ";
        // line 78
        echo "
        .brandLogoWrapper {
            margin: 30px;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
        }

        .login {
            float: right;
            margin-right: 10px;

        }

        .main {
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            margin: auto;
            height: 600px;
            width: 340px;
            gap: 20px;
        }

        .input {
            text-align: left;
            margin: 10px;
        }

        .footerWrap {
            background-color: #f3f3f3;
            height: 400px;
        }

        .btn {
            color: red;
        }

        .error {
            display: flex;
            justify-content: center;
            color: red;
        }
    </style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  283 => 78,  269 => 63,  265 => 58,  255 => 57,  243 => 53,  241 => 52,  236 => 49,  226 => 48,  212 => 43,  207 => 41,  203 => 40,  199 => 39,  195 => 38,  191 => 37,  187 => 36,  183 => 35,  180 => 34,  171 => 32,  167 => 31,  163 => 29,  153 => 28,  137 => 21,  132 => 19,  128 => 18,  123 => 15,  113 => 14,  99 => 9,  91 => 3,  81 => 2,  71 => 57,  68 => 56,  66 => 48,  63 => 47,  61 => 28,  58 => 27,  56 => 14,  53 => 13,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block head %}

    <head>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"
              crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.ico') }}\">
    </head>

{% endblock %}

{% block navigation %}

    <nav>
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"{{ path('home') }}\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogoSmall.svg.png') }}\" alt=\"av1\"/>
            </a>
            <a class=\"login\" href=\"{{ path('app_login') }}\">Zaloguj się</a>
        </div>
    </nav>
    <hr>

{% endblock %}

{% block body %}
    <body>
    <div class=\"main\">
        {% for flashError in app.flashes('verify_email_error') %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
        {% endfor %}
        <h1>Rejestracja</h1>
        {{ form_start(registrationForm) }}
        <div class=\"input\">Email: {{ form_widget(registrationForm.email, {attr: {value : email}}) }}</div>
        <div class=\"error\">{{ form_errors(registrationForm.email) }}</div>
        <div class=\"input\">Hasło: {{ form_widget(registrationForm.plainPassword) }}</div>
        <div class=\"error\">{{ form_errors(registrationForm.plainPassword) }}</div>
        <div class=\"input\">Akceptuje warunki: {{ form_widget(registrationForm.agreeTerms) }}</div>
        <div class=\"error\">{{ form_errors(registrationForm.agreeTerms) }}</div>
        <button type=\"submit\" class=\"btn\">Zarejestruj</button>
        {{ form_end(registrationForm) }}
    </div>
    </body>
{% endblock %}

{% block footer %}

<div class=\"footerWrap\">
    <hr>
    {% embed 'reusable/footer.html.twig' %} {% endembed %}
</div>

{% endblock %}

{% block stylesheets %}
    <style>

        {#======================
                Global
        ======================#}

        a, a:visited, a:active {
            color: #757575;
            text-decoration: none;
        }

        a:hover {
            color: #757575;
            text-decoration: underline;
        }


        {#======================
                Content
        ======================#}

        .brandLogoWrapper {
            margin: 30px;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
        }

        .login {
            float: right;
            margin-right: 10px;

        }

        .main {
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            margin: auto;
            height: 600px;
            width: 340px;
            gap: 20px;
        }

        .input {
            text-align: left;
            margin: 10px;
        }

        .footerWrap {
            background-color: #f3f3f3;
            height: 400px;
        }

        .btn {
            color: red;
        }

        .error {
            display: flex;
            justify-content: center;
            color: red;
        }
    </style>

{% endblock %}", "registration/register.html.twig", "/var/www/symfony_docker/templates/registration/register.html.twig");
    }
}


/* registration/register.html.twig */
class __TwigTemplate_e858d50835e10fd9855101bbedb5294833b853c7e89d614c6254e4e24db93298___2037922672 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 52
        return "reusable/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("reusable/footer.html.twig", "registration/register.html.twig", 52);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 52,  283 => 78,  269 => 63,  265 => 58,  255 => 57,  243 => 53,  241 => 52,  236 => 49,  226 => 48,  212 => 43,  207 => 41,  203 => 40,  199 => 39,  195 => 38,  191 => 37,  187 => 36,  183 => 35,  180 => 34,  171 => 32,  167 => 31,  163 => 29,  153 => 28,  137 => 21,  132 => 19,  128 => 18,  123 => 15,  113 => 14,  99 => 9,  91 => 3,  81 => 2,  71 => 57,  68 => 56,  66 => 48,  63 => 47,  61 => 28,  58 => 27,  56 => 14,  53 => 13,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% block head %}

    <head>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"
              rel=\"stylesheet\"
              integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"
              crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.ico') }}\">
    </head>

{% endblock %}

{% block navigation %}

    <nav>
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"{{ path('home') }}\" target=\"_parent\">
                <img class=\"logo\" src=\"{{ asset('images/netflixLogoSmall.svg.png') }}\" alt=\"av1\"/>
            </a>
            <a class=\"login\" href=\"{{ path('app_login') }}\">Zaloguj się</a>
        </div>
    </nav>
    <hr>

{% endblock %}

{% block body %}
    <body>
    <div class=\"main\">
        {% for flashError in app.flashes('verify_email_error') %}
            <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
        {% endfor %}
        <h1>Rejestracja</h1>
        {{ form_start(registrationForm) }}
        <div class=\"input\">Email: {{ form_widget(registrationForm.email, {attr: {value : email}}) }}</div>
        <div class=\"error\">{{ form_errors(registrationForm.email) }}</div>
        <div class=\"input\">Hasło: {{ form_widget(registrationForm.plainPassword) }}</div>
        <div class=\"error\">{{ form_errors(registrationForm.plainPassword) }}</div>
        <div class=\"input\">Akceptuje warunki: {{ form_widget(registrationForm.agreeTerms) }}</div>
        <div class=\"error\">{{ form_errors(registrationForm.agreeTerms) }}</div>
        <button type=\"submit\" class=\"btn\">Zarejestruj</button>
        {{ form_end(registrationForm) }}
    </div>
    </body>
{% endblock %}

{% block footer %}

<div class=\"footerWrap\">
    <hr>
    {% embed 'reusable/footer.html.twig' %} {% endembed %}
</div>

{% endblock %}

{% block stylesheets %}
    <style>

        {#======================
                Global
        ======================#}

        a, a:visited, a:active {
            color: #757575;
            text-decoration: none;
        }

        a:hover {
            color: #757575;
            text-decoration: underline;
        }


        {#======================
                Content
        ======================#}

        .brandLogoWrapper {
            margin: 30px;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
        }

        .login {
            float: right;
            margin-right: 10px;

        }

        .main {
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            margin: auto;
            height: 600px;
            width: 340px;
            gap: 20px;
        }

        .input {
            text-align: left;
            margin: 10px;
        }

        .footerWrap {
            background-color: #f3f3f3;
            height: 400px;
        }

        .btn {
            color: red;
        }

        .error {
            display: flex;
            justify-content: center;
            color: red;
        }
    </style>

{% endblock %}", "registration/register.html.twig", "/var/www/symfony_docker/templates/registration/register.html.twig");
    }
}
