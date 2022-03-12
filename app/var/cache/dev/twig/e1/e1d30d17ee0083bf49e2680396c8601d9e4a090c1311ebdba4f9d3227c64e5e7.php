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

/* reusable/footer.html.twig */
class __TwigTemplate_e4ed2b732c73c4c0b50dde8b6711c43f3325b621ffd93a5b1c63c9b3042bc8ae extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reusable/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reusable/footer.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
<footer class=\"footer\">
    <div class=\"container-fluid mt-5\">
        <p>Pytania? Zadzwoń pod numer <a href=\"#\">00 800 112 4392</a></p>
        <div class=\"row text-center\">
            <div class=\"col-sm-12 col-md-6 col-lg-3\">
                <div class=\"sub-links\">
                    <ul>
                        <li><a href=\"#\">Często zadawane pytania</a></li>
                        <li><a href=\"#\">Relacje z inwestorami</a></li>
                        <li><a href=\"#\">Jak oglądać?</a></li>
                        <li><a href=\"#\">Informacje o firmie</a></li>
                        <li><a href=\"#\">Tylko na Netflix</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-6 col-lg-3\">
                <div class=\"sub-links\">
                    <ul>
                        <li><a href=\"#\">Centrum pomocy</a></li>
                        <li><a href=\"#\">Praca</a></li>
                        <li><a href=\"#\">Warunki korzystania</a></li>
                        <li><a href=\"#\">Skontaktuj się z nami</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-6 col-lg-3\">
                <div class=\"sub-links\">
                    <ul>
                        <li><a href=\"#\">Konto</a></li>
                        <li><a href=\"#\">Zrealizuj karty podarunkowe</a></li>
                        <li><a href=\"#\">Prywatność</a></li>
                        <li><a href=\"#\">Test prędkości połączenia</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-6 col-lg-3\">
                <div class=\"sub-links\">
                    <ul>
                        <li><a href=\"#\">Media Center</a></li>
                        <li><a href=\"#\">Kup karty podarunkowe</a></li>
                        <li><a href=\"#\">Ustawienia plików cookie</a></li>
                        <li><a href=\"#\"> Informacje prawne</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class=\"custom-select\">
        <select>
            <option value=\"0\">Polski</option>
            <option value=\"1\">English</option>
        </select>
    </div>
    <p>&copy Netflix Polska</p>
    <p>Made With Symfony Kamil Szymik</p>
</footer>
";
        
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
        echo "    <link rel=\"stylesheet\" href=\"assets/footer.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reusable/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 2,  114 => 1,  46 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"assets/footer.css\">
{% endblock %}

<footer class=\"footer\">
    <div class=\"container-fluid mt-5\">
        <p>Pytania? Zadzwoń pod numer <a href=\"#\">00 800 112 4392</a></p>
        <div class=\"row text-center\">
            <div class=\"col-sm-12 col-md-6 col-lg-3\">
                <div class=\"sub-links\">
                    <ul>
                        <li><a href=\"#\">Często zadawane pytania</a></li>
                        <li><a href=\"#\">Relacje z inwestorami</a></li>
                        <li><a href=\"#\">Jak oglądać?</a></li>
                        <li><a href=\"#\">Informacje o firmie</a></li>
                        <li><a href=\"#\">Tylko na Netflix</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-6 col-lg-3\">
                <div class=\"sub-links\">
                    <ul>
                        <li><a href=\"#\">Centrum pomocy</a></li>
                        <li><a href=\"#\">Praca</a></li>
                        <li><a href=\"#\">Warunki korzystania</a></li>
                        <li><a href=\"#\">Skontaktuj się z nami</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-6 col-lg-3\">
                <div class=\"sub-links\">
                    <ul>
                        <li><a href=\"#\">Konto</a></li>
                        <li><a href=\"#\">Zrealizuj karty podarunkowe</a></li>
                        <li><a href=\"#\">Prywatność</a></li>
                        <li><a href=\"#\">Test prędkości połączenia</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-12 col-md-6 col-lg-3\">
                <div class=\"sub-links\">
                    <ul>
                        <li><a href=\"#\">Media Center</a></li>
                        <li><a href=\"#\">Kup karty podarunkowe</a></li>
                        <li><a href=\"#\">Ustawienia plików cookie</a></li>
                        <li><a href=\"#\"> Informacje prawne</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class=\"custom-select\">
        <select>
            <option value=\"0\">Polski</option>
            <option value=\"1\">English</option>
        </select>
    </div>
    <p>&copy Netflix Polska</p>
    <p>Made With Symfony Kamil Szymik</p>
</footer>
", "reusable/footer.html.twig", "/var/www/symfony_docker/templates/reusable/footer.html.twig");
    }
}
