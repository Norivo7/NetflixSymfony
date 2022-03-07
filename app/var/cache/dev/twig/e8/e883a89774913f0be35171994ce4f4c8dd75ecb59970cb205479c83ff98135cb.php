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
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "

<div class=\"footerWrap\">
    <hr>
    ";
        // line 97
        $this->loadTemplate("registration/register.html.twig", "registration/register.html.twig", 97, "191663880")->display($context);
        // line 98
        echo "</div>";
        
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
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            margin: auto;
            height: 600px;
        }

        .input {
            /*margin: 30px;*/
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

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 63
        echo "    <nav>
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
            <a class=\"login\" href=\"/login\">Zaloguj się</a>
        </div>
    </nav>
    <hr>

    <div class=\"main\">

        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 75));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 76
            echo "            <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
        <h1>Rejestracja</h1>
        ";
        // line 80
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), 'form_start');
        echo "

        <div class=\"input\">Email: ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "email", [], "any", false, false, false, 82), 'widget');
        echo "</div>
        <div class=\"error\">";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), "email", [], "any", false, false, false, 83), 'errors');
        echo "</div>
        <div class=\"input\">Hasło: ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "plainPassword", [], "any", false, false, false, 84), 'widget');
        echo "</div>
        <div class=\"error\">";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), "plainPassword", [], "any", false, false, false, 85), 'errors');
        echo "</div>
        <div class=\"input\">Akceptuje warunki: ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "agreeTerms", [], "any", false, false, false, 86), 'widget');
        echo "</div>
        <div class=\"error\">";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "agreeTerms", [], "any", false, false, false, 87), 'errors');
        echo "</div>
        <button type=\"submit\" class=\"btn\">Zarejestruj</button>
        ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 89, $this->source); })()), 'form_end');
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
        return array (  221 => 89,  216 => 87,  212 => 86,  208 => 85,  204 => 84,  200 => 83,  196 => 82,  191 => 80,  187 => 78,  178 => 76,  174 => 75,  162 => 66,  157 => 63,  147 => 62,  85 => 9,  75 => 8,  65 => 98,  63 => 97,  57 => 93,  55 => 62,  53 => 8,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %} #}

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"
      rel=\"stylesheet\"
      integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"
      crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"assets/footer.css\">
{% block stylesheets %}
    <style>
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
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            margin: auto;
            height: 600px;
        }

        .input {
            /*margin: 30px;*/
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

        <div class=\"input\">Email: {{ form_widget(registrationForm.email) }}</div>
        <div class=\"error\">{{ form_errors(registrationForm.email) }}</div>
        <div class=\"input\">Hasło: {{ form_widget(registrationForm.plainPassword) }}</div>
        <div class=\"error\">{{ form_errors(registrationForm.plainPassword) }}</div>
        <div class=\"input\">Akceptuje warunki: {{ form_widget(registrationForm.agreeTerms) }}</div>
        <div class=\"error\">{{ form_errors(registrationForm.agreeTerms) }}</div>
        <button type=\"submit\" class=\"btn\">Zarejestruj</button>
        {{ form_end(registrationForm) }}

    </div>
{% endblock %}


<div class=\"footerWrap\">
    <hr>
    {% embed 'reusable/footer.html.twig' %} {% endembed %}
</div>", "registration/register.html.twig", "/var/www/symfony_docker/templates/registration/register.html.twig");
    }
}


/* registration/register.html.twig */
class __TwigTemplate_e858d50835e10fd9855101bbedb5294833b853c7e89d614c6254e4e24db93298___191663880 extends Template
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
        // line 97
        return "reusable/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("reusable/footer.html.twig", "registration/register.html.twig", 97);
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
        return array (  372 => 97,  221 => 89,  216 => 87,  212 => 86,  208 => 85,  204 => 84,  200 => 83,  196 => 82,  191 => 80,  187 => 78,  178 => 76,  174 => 75,  162 => 66,  157 => 63,  147 => 62,  85 => 9,  75 => 8,  65 => 98,  63 => 97,  57 => 93,  55 => 62,  53 => 8,  45 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %} #}

<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"
      rel=\"stylesheet\"
      integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"
      crossorigin=\"anonymous\">
<link rel=\"stylesheet\" href=\"assets/footer.css\">
{% block stylesheets %}
    <style>
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
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            margin: auto;
            height: 600px;
        }

        .input {
            /*margin: 30px;*/
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

        <div class=\"input\">Email: {{ form_widget(registrationForm.email) }}</div>
        <div class=\"error\">{{ form_errors(registrationForm.email) }}</div>
        <div class=\"input\">Hasło: {{ form_widget(registrationForm.plainPassword) }}</div>
        <div class=\"error\">{{ form_errors(registrationForm.plainPassword) }}</div>
        <div class=\"input\">Akceptuje warunki: {{ form_widget(registrationForm.agreeTerms) }}</div>
        <div class=\"error\">{{ form_errors(registrationForm.agreeTerms) }}</div>
        <button type=\"submit\" class=\"btn\">Zarejestruj</button>
        {{ form_end(registrationForm) }}

    </div>
{% endblock %}


<div class=\"footerWrap\">
    <hr>
    {% embed 'reusable/footer.html.twig' %} {% endembed %}
</div>", "registration/register.html.twig", "/var/www/symfony_docker/templates/registration/register.html.twig");
    }
}
