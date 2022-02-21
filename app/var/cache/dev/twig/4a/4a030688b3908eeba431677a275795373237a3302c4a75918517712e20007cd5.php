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
class __TwigTemplate_d62dc07ea5a33bc45351a94434900923b17add41b13be0a7d753697f4419b74c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 2
        echo "
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"
      rel=\"stylesheet\"
      integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"
      crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"assets/footer.css\">
";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "

<div class=\"footerWrap\">
    <hr>
 ";
        // line 78
        $this->loadTemplate("registration/register.html.twig", "registration/register.html.twig", 78, "1619744640")->display($context);
        // line 79
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "    <style>
        .brandLogoWrapper{
            margin: 30px;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
        }
        .login {
            float: right;
            margin-right: 10px;

        }
        a, a:visited, a:active {
            color: #757575;
            text-decoration: none;
        }
        a:hover {
            color: #757575;
            text-decoration: underline;
        }
        .footerWrap {
            background-color: #f3f3f3;
            height: 400px;
        }
        .main {
            display: flex;git gi
            flex-direction: column;
            text-align: center;
            margin: auto;
            height: 600px;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "<nav>
    <div class=\"brandLogoWrapper\">
        <a class=\"logo\" href=\"/\" target=\"_parent\">
            <img class=\"logo\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
        </a>
        <a class=\"login\" href=\"/login\">Zaloguj się</a>
    </div>
</nav>
<hr>
    <div class=\"main\">


    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 56
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
    <h1>Rejestracja</h1>

    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), 'form_start');
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), 'row');
        echo "
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "plainPassword", [], "any", false, false, false, 63), 'row', ["label" => "Hasło"]);
        // line 65
        echo "
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "agreeTerms", [], "any", false, false, false, 66), 'row', ["label" => "Akceptuje warunki"]);
        // line 68
        echo "

        <button type=\"submit\" class=\"btn\">Zarejestruj</button>
    ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  193 => 71,  188 => 68,  186 => 66,  183 => 65,  181 => 63,  177 => 62,  173 => 61,  168 => 58,  159 => 56,  155 => 55,  143 => 46,  138 => 43,  128 => 42,  86 => 9,  76 => 8,  65 => 79,  63 => 78,  57 => 74,  55 => 42,  53 => 8,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'base.html.twig' %}#}

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"
      rel=\"stylesheet\"
      integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"
      crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"assets/footer.css\">
{% block stylesheets %}
    <style>
        .brandLogoWrapper{
            margin: 30px;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
        }
        .login {
            float: right;
            margin-right: 10px;

        }
        a, a:visited, a:active {
            color: #757575;
            text-decoration: none;
        }
        a:hover {
            color: #757575;
            text-decoration: underline;
        }
        .footerWrap {
            background-color: #f3f3f3;
            height: 400px;
        }
        .main {
            display: flex;git gi
            flex-direction: column;
            text-align: center;
            margin: auto;
            height: 600px;
        }
    </style>
{% endblock %}
{% block body %}
<nav>
    <div class=\"brandLogoWrapper\">
        <a class=\"logo\" href=\"/\" target=\"_parent\">
            <img class=\"logo\" src=\"{{ asset('images/netflixLogoSmall.svg.png') }}\" alt=\"av1\"/>
        </a>
        <a class=\"login\" href=\"/login\">Zaloguj się</a>
    </div>
</nav>
<hr>
    <div class=\"main\">


    {% for flashError in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}

    <h1>Rejestracja</h1>

    {{ form_start(registrationForm) }}
        {{ form_row(registrationForm.email) }}
        {{ form_row(registrationForm.plainPassword, {
            label: 'Hasło'
        }) }}
        {{ form_row(registrationForm.agreeTerms, {
            label: 'Akceptuje warunki'
        }) }}

        <button type=\"submit\" class=\"btn\">Zarejestruj</button>
    {{ form_end(registrationForm) }}
    </div>
{% endblock %}


<div class=\"footerWrap\">
    <hr>
 {% embed 'reusable/footer.html.twig' %} {% endembed %}
</div>
{#{% embed \"base.html.twig\" %}#}
{#    {% block footer %}#}
{#     {{ parent() }}#}
{#    {% endblock %}#}
{#{% endembed %}#}", "registration/register.html.twig", "/var/www/symfony_docker/templates/registration/register.html.twig");
    }
}


/* registration/register.html.twig */
class __TwigTemplate_d62dc07ea5a33bc45351a94434900923b17add41b13be0a7d753697f4419b74c___1619744640 extends Template
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
        // line 78
        return "reusable/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("reusable/footer.html.twig", "registration/register.html.twig", 78);
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
        return array (  329 => 78,  193 => 71,  188 => 68,  186 => 66,  183 => 65,  181 => 63,  177 => 62,  173 => 61,  168 => 58,  159 => 56,  155 => 55,  143 => 46,  138 => 43,  128 => 42,  86 => 9,  76 => 8,  65 => 79,  63 => 78,  57 => 74,  55 => 42,  53 => 8,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'base.html.twig' %}#}

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"
      rel=\"stylesheet\"
      integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"
      crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"assets/footer.css\">
{% block stylesheets %}
    <style>
        .brandLogoWrapper{
            margin: 30px;
            align-items: center;
            justify-content: center;
            vertical-align: middle;
        }
        .login {
            float: right;
            margin-right: 10px;

        }
        a, a:visited, a:active {
            color: #757575;
            text-decoration: none;
        }
        a:hover {
            color: #757575;
            text-decoration: underline;
        }
        .footerWrap {
            background-color: #f3f3f3;
            height: 400px;
        }
        .main {
            display: flex;git gi
            flex-direction: column;
            text-align: center;
            margin: auto;
            height: 600px;
        }
    </style>
{% endblock %}
{% block body %}
<nav>
    <div class=\"brandLogoWrapper\">
        <a class=\"logo\" href=\"/\" target=\"_parent\">
            <img class=\"logo\" src=\"{{ asset('images/netflixLogoSmall.svg.png') }}\" alt=\"av1\"/>
        </a>
        <a class=\"login\" href=\"/login\">Zaloguj się</a>
    </div>
</nav>
<hr>
    <div class=\"main\">


    {% for flashError in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}

    <h1>Rejestracja</h1>

    {{ form_start(registrationForm) }}
        {{ form_row(registrationForm.email) }}
        {{ form_row(registrationForm.plainPassword, {
            label: 'Hasło'
        }) }}
        {{ form_row(registrationForm.agreeTerms, {
            label: 'Akceptuje warunki'
        }) }}

        <button type=\"submit\" class=\"btn\">Zarejestruj</button>
    {{ form_end(registrationForm) }}
    </div>
{% endblock %}


<div class=\"footerWrap\">
    <hr>
 {% embed 'reusable/footer.html.twig' %} {% endembed %}
</div>
{#{% embed \"base.html.twig\" %}#}
{#    {% block footer %}#}
{#     {{ parent() }}#}
{#    {% endblock %}#}
{#{% endembed %}#}", "registration/register.html.twig", "/var/www/symfony_docker/templates/registration/register.html.twig");
    }
}
