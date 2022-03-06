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

/* root.html.twig */
class __TwigTemplate_55afb03bcebf7eb421e22d41f0b2c8e2952a40745c70e2a041b4fe7a4b722b0d extends Template
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
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "

";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 209
        echo "
";
        // line 210
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->loadTemplate("root.html.twig", "root.html.twig", 268, "1090010883")->display($context);
        // line 269
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"assets/style.css\">
</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Netflix - Symfony</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    <body>
    <div class=\"concord-img-wrapper\">
        <nav class=\"navbar\">
            <div class=\"brandLogoWrapper\">
                <a class=\"navbar-brand\" href=\"/\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/1280px-Netflix_2015_logo.svg.png\"
                         width=\"167\" height=\"45\" style=\"vertical-align:middle;margin:20px 50px\" alt=\"netflixLogo\"/>
                </a>
            </div>
            <div class=\"buttonsWrapper\">
                <div class=\"selectMedium\">
                    <select>
                        <option value=\"0\">&#xF3EE; Polski</option>
                        <option value=\"1\">&#xF3EE; English</option>
                    </select>
                </div>

                ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 41
            echo "                    <a href=\"/admin\">
                        <button type=\"button\" class=\"buttonLogin\">
                            <i class=\"bi bi-wrench-adjustable-circle\"></i>
                            Panel Administratora
                        </button>
                    </a>
                ";
        }
        // line 48
        echo "
                <a href=\"/login\">
                    ";
        // line 50
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 51
            echo "                        <button type=\"button\" class=\"buttonLogin\">
                            Przejdź dalej
                        </button>
                    ";
        } else {
            // line 55
            echo "                        <button type=\"button\" class=\"buttonLogin\">
                            Zaloguj się
                        </button>
                    ";
        }
        // line 59
        echo "                </a>
            </div>
        </nav>

        <div class=\"blockColumn\">
            <div class=\"blockIntro\">
                ";
        // line 65
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 66
            echo "                    <p>Debug: zalogowany użytkownik: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "email", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>
                ";
        } else {
            // line 68
            echo "                    <p>Debug: nie jesteś zalogowany.</p>
                ";
        }
        // line 70
        echo "                <h1> Nieograniczona oferta filmów, seriali, programów <br> i nie tylko. </h1>
                <h2> Oglądaj wszędzie. Anuluj w każdej chwili. </h2>
                <h3></h3>

                <form action=\"/register.php\">
                    <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić
                        konto. </label>
                    <input class=\"emailInput\" type=\"text\" id=\"email\" name=\"email\">
                    <button type=\"button\" class=\"buttonSubmit\"><a class=\"button\" href=\"/register\">Rozpocznij</a>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class=\"blockWrapper\">
        <hr>
        <div class=\"block\">
            <div class=\"blockRow\">
                <div class=\"blockColumn\">
                    <h1> Oglądaj na telewizorze. </h1>
                    <h2> Oglądaj na telewizorach Smart TV, konsolach PlayStation i Xbox, odtwarzaczach Chromecast, Apple
                        TV oraz Blu-ray
                        i nie tylko. </h2>
                </div>
                <img style=\"float:right\"
                     src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png\" alt=\"none\">
            </div>

        </div>
        <hr>
        <div class=\"block\">
            <div class=\"blockRow\">
                <img style=\"float:left\"
                     src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile-0819.jpg\"
                     alt=\"none\">
                <div class=\"blockColumn\">
                    <h1> Pobierz ulubione tytuły i oglądaj offline. </h1>
                    <h2> Zapisz ulubione tytuły, aby zawsze mieć coś do obejrzenia. </h2>
                </div>
            </div>
        </div>
        <hr>
        <div class=\"block\">
            <div class=\"blockRow\">
                <div class=\"blockColumn\">
                    <h1> Oglądaj wszędzie. </h1>
                    <h2> Oglądaj filmy, seriale i programy bez ograniczeń na telefonie, tablecie, laptopie,
                        telewizorze... Bez
                        dodatkowych opłat. </h2>
                </div>
                <img style=\"float:right\"
                     src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/device-pile.png\"
                     alt=\"none\">
            </div>
        </div>
        <hr>
        <div class=\"block\">
            <div class=\"blockRow\">
                <img style=\"float:left\"
                     src=\"https://occ-0-1432-1433.1.nflxso.net/dnm/api/v6/19OhWN2dO19C9txTON9tvTFtefw/AAAABV0jxy5YQLZOJQiLeketUA72UonCi7ikrao3PtSMF_M2mYyBUp8FK--aHN-cL3iuXP5MqpYBcJZP4dNkLrHxa0oAY5uD.png?r=107\"
                     alt=\"none\">
                <div class=\"blockColumn\">
                    <h1> Utwórz profile dla dzieci. </h1>
                    <h2> Pozwól dzieciom przeżywać przygody w towarzystwie uwielbianych bohaterów — w specjalnej sekcji
                        serwisu
                        oferowanej bezpłatnie w ramach członkostwa. </h2>
                </div>
            </div>
        </div>
        <hr>
        <div class=\"block\">
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Czym jest Netflix?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
            </div>
            <br>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Ile kosztuje korzystanie z serwisu Netflix?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
            </div>
            <br>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Gdzie mogę oglądać?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
            </div>
            <br>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Jak zrezygnować z członkostwa?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
                <br>
            </div>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Jakie materiały mogę oglądać w serwisie Netflix?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
                <br>
            </div>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Czy Netflix jest odpowiedni dla dzieci?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
                <br>
            </div>
            <div class=\"block\">
                <form action=\"/action_page.php\">
                    <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić
                        konto. </label>
                    <input class=\"emailInput\" type=\"text\" id=\"fname\" name=\"fname\">
                    <button type=\"button\" class=\"buttonSubmit\">Rozpocznij</button>
                </form>
            </div>
        </div>
        <hr>
    </div>
    </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 210
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 211
        echo "    <style>
        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        html {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            font-weight: normal;
        }

        h1 {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        h2 {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        a.button, a.button:hover, a.button:visited, a.button:active {
            color: inherit;
            text-decoration: none;
        }

        a, a:visited, a:active {
            color: #757575;
            text-decoration: none;
        }

        a:hover {
            color: #757575;
            text-decoration: underline;
        }

        .buttonsWrapper {
            gap: 20px;
        }

        .selectMedium {
            margin-right: 0;
        }

        select {
            font-family: \"Netflix Sans Black\", bootstrap-icons, serif;
            padding: 10px 10px 10px;

        }

        i {
            vertical-align: -1px;
        }

        .concord-img-wrapper {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 211,  382 => 210,  234 => 70,  230 => 68,  224 => 66,  222 => 65,  214 => 59,  208 => 55,  202 => 51,  200 => 50,  196 => 48,  187 => 41,  185 => 40,  166 => 23,  156 => 22,  138 => 19,  119 => 7,  101 => 8,  99 => 7,  92 => 2,  82 => 1,  71 => 269,  69 => 268,  66 => 267,  64 => 210,  61 => 209,  59 => 22,  56 => 21,  54 => 19,  50 => 17,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block title %}<title>Netflix - Symfony</title>{% endblock %}
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"assets/style.css\">
</head>
{% endblock %}


{% block javascripts %}
{% endblock %}

{% block body %}
    <body>
    <div class=\"concord-img-wrapper\">
        <nav class=\"navbar\">
            <div class=\"brandLogoWrapper\">
                <a class=\"navbar-brand\" href=\"/\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/1280px-Netflix_2015_logo.svg.png\"
                         width=\"167\" height=\"45\" style=\"vertical-align:middle;margin:20px 50px\" alt=\"netflixLogo\"/>
                </a>
            </div>
            <div class=\"buttonsWrapper\">
                <div class=\"selectMedium\">
                    <select>
                        <option value=\"0\">&#xF3EE; Polski</option>
                        <option value=\"1\">&#xF3EE; English</option>
                    </select>
                </div>

                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"/admin\">
                        <button type=\"button\" class=\"buttonLogin\">
                            <i class=\"bi bi-wrench-adjustable-circle\"></i>
                            Panel Administratora
                        </button>
                    </a>
                {% endif %}

                <a href=\"/login\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <button type=\"button\" class=\"buttonLogin\">
                            Przejdź dalej
                        </button>
                    {% else %}
                        <button type=\"button\" class=\"buttonLogin\">
                            Zaloguj się
                        </button>
                    {% endif %}
                </a>
            </div>
        </nav>

        <div class=\"blockColumn\">
            <div class=\"blockIntro\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <p>Debug: zalogowany użytkownik: {{ app.user.email }}</p>
                {% else %}
                    <p>Debug: nie jesteś zalogowany.</p>
                {% endif %}
                <h1> Nieograniczona oferta filmów, seriali, programów <br> i nie tylko. </h1>
                <h2> Oglądaj wszędzie. Anuluj w każdej chwili. </h2>
                <h3></h3>

                <form action=\"/register.php\">
                    <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić
                        konto. </label>
                    <input class=\"emailInput\" type=\"text\" id=\"email\" name=\"email\">
                    <button type=\"button\" class=\"buttonSubmit\"><a class=\"button\" href=\"/register\">Rozpocznij</a>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class=\"blockWrapper\">
        <hr>
        <div class=\"block\">
            <div class=\"blockRow\">
                <div class=\"blockColumn\">
                    <h1> Oglądaj na telewizorze. </h1>
                    <h2> Oglądaj na telewizorach Smart TV, konsolach PlayStation i Xbox, odtwarzaczach Chromecast, Apple
                        TV oraz Blu-ray
                        i nie tylko. </h2>
                </div>
                <img style=\"float:right\"
                     src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png\" alt=\"none\">
            </div>

        </div>
        <hr>
        <div class=\"block\">
            <div class=\"blockRow\">
                <img style=\"float:left\"
                     src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile-0819.jpg\"
                     alt=\"none\">
                <div class=\"blockColumn\">
                    <h1> Pobierz ulubione tytuły i oglądaj offline. </h1>
                    <h2> Zapisz ulubione tytuły, aby zawsze mieć coś do obejrzenia. </h2>
                </div>
            </div>
        </div>
        <hr>
        <div class=\"block\">
            <div class=\"blockRow\">
                <div class=\"blockColumn\">
                    <h1> Oglądaj wszędzie. </h1>
                    <h2> Oglądaj filmy, seriale i programy bez ograniczeń na telefonie, tablecie, laptopie,
                        telewizorze... Bez
                        dodatkowych opłat. </h2>
                </div>
                <img style=\"float:right\"
                     src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/device-pile.png\"
                     alt=\"none\">
            </div>
        </div>
        <hr>
        <div class=\"block\">
            <div class=\"blockRow\">
                <img style=\"float:left\"
                     src=\"https://occ-0-1432-1433.1.nflxso.net/dnm/api/v6/19OhWN2dO19C9txTON9tvTFtefw/AAAABV0jxy5YQLZOJQiLeketUA72UonCi7ikrao3PtSMF_M2mYyBUp8FK--aHN-cL3iuXP5MqpYBcJZP4dNkLrHxa0oAY5uD.png?r=107\"
                     alt=\"none\">
                <div class=\"blockColumn\">
                    <h1> Utwórz profile dla dzieci. </h1>
                    <h2> Pozwól dzieciom przeżywać przygody w towarzystwie uwielbianych bohaterów — w specjalnej sekcji
                        serwisu
                        oferowanej bezpłatnie w ramach członkostwa. </h2>
                </div>
            </div>
        </div>
        <hr>
        <div class=\"block\">
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Czym jest Netflix?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
            </div>
            <br>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Ile kosztuje korzystanie z serwisu Netflix?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
            </div>
            <br>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Gdzie mogę oglądać?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
            </div>
            <br>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Jak zrezygnować z członkostwa?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
                <br>
            </div>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Jakie materiały mogę oglądać w serwisie Netflix?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
                <br>
            </div>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Czy Netflix jest odpowiedni dla dzieci?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
                <br>
            </div>
            <div class=\"block\">
                <form action=\"/action_page.php\">
                    <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić
                        konto. </label>
                    <input class=\"emailInput\" type=\"text\" id=\"fname\" name=\"fname\">
                    <button type=\"button\" class=\"buttonSubmit\">Rozpocznij</button>
                </form>
            </div>
        </div>
        <hr>
    </div>
    </body>
{% endblock %}

{% block stylesheets %}
    <style>
        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        html {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            font-weight: normal;
        }

        h1 {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        h2 {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        a.button, a.button:hover, a.button:visited, a.button:active {
            color: inherit;
            text-decoration: none;
        }

        a, a:visited, a:active {
            color: #757575;
            text-decoration: none;
        }

        a:hover {
            color: #757575;
            text-decoration: underline;
        }

        .buttonsWrapper {
            gap: 20px;
        }

        .selectMedium {
            margin-right: 0;
        }

        select {
            font-family: \"Netflix Sans Black\", bootstrap-icons, serif;
            padding: 10px 10px 10px;

        }

        i {
            vertical-align: -1px;
        }

        .concord-img-wrapper {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }
    </style>
{% endblock %}

{% embed 'reusable/footer.html.twig' %}{% endembed %}
</html>
", "root.html.twig", "/var/www/symfony_docker/templates/root.html.twig");
    }
}


/* root.html.twig */
class __TwigTemplate_55afb03bcebf7eb421e22d41f0b2c8e2952a40745c70e2a041b4fe7a4b722b0d___1090010883 extends Template
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
        // line 268
        return "reusable/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "root.html.twig"));

        $this->parent = $this->loadTemplate("reusable/footer.html.twig", "root.html.twig", 268);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "root.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  766 => 268,  392 => 211,  382 => 210,  234 => 70,  230 => 68,  224 => 66,  222 => 65,  214 => 59,  208 => 55,  202 => 51,  200 => 50,  196 => 48,  187 => 41,  185 => 40,  166 => 23,  156 => 22,  138 => 19,  119 => 7,  101 => 8,  99 => 7,  92 => 2,  82 => 1,  71 => 269,  69 => 268,  66 => 267,  64 => 210,  61 => 209,  59 => 22,  56 => 21,  54 => 19,  50 => 17,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block title %}<title>Netflix - Symfony</title>{% endblock %}
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"assets/style.css\">
</head>
{% endblock %}


{% block javascripts %}
{% endblock %}

{% block body %}
    <body>
    <div class=\"concord-img-wrapper\">
        <nav class=\"navbar\">
            <div class=\"brandLogoWrapper\">
                <a class=\"navbar-brand\" href=\"/\">
                    <img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Netflix_2015_logo.svg/1280px-Netflix_2015_logo.svg.png\"
                         width=\"167\" height=\"45\" style=\"vertical-align:middle;margin:20px 50px\" alt=\"netflixLogo\"/>
                </a>
            </div>
            <div class=\"buttonsWrapper\">
                <div class=\"selectMedium\">
                    <select>
                        <option value=\"0\">&#xF3EE; Polski</option>
                        <option value=\"1\">&#xF3EE; English</option>
                    </select>
                </div>

                {% if is_granted('ROLE_ADMIN') %}
                    <a href=\"/admin\">
                        <button type=\"button\" class=\"buttonLogin\">
                            <i class=\"bi bi-wrench-adjustable-circle\"></i>
                            Panel Administratora
                        </button>
                    </a>
                {% endif %}

                <a href=\"/login\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <button type=\"button\" class=\"buttonLogin\">
                            Przejdź dalej
                        </button>
                    {% else %}
                        <button type=\"button\" class=\"buttonLogin\">
                            Zaloguj się
                        </button>
                    {% endif %}
                </a>
            </div>
        </nav>

        <div class=\"blockColumn\">
            <div class=\"blockIntro\">
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                    <p>Debug: zalogowany użytkownik: {{ app.user.email }}</p>
                {% else %}
                    <p>Debug: nie jesteś zalogowany.</p>
                {% endif %}
                <h1> Nieograniczona oferta filmów, seriali, programów <br> i nie tylko. </h1>
                <h2> Oglądaj wszędzie. Anuluj w każdej chwili. </h2>
                <h3></h3>

                <form action=\"/register.php\">
                    <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić
                        konto. </label>
                    <input class=\"emailInput\" type=\"text\" id=\"email\" name=\"email\">
                    <button type=\"button\" class=\"buttonSubmit\"><a class=\"button\" href=\"/register\">Rozpocznij</a>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class=\"blockWrapper\">
        <hr>
        <div class=\"block\">
            <div class=\"blockRow\">
                <div class=\"blockColumn\">
                    <h1> Oglądaj na telewizorze. </h1>
                    <h2> Oglądaj na telewizorach Smart TV, konsolach PlayStation i Xbox, odtwarzaczach Chromecast, Apple
                        TV oraz Blu-ray
                        i nie tylko. </h2>
                </div>
                <img style=\"float:right\"
                     src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png\" alt=\"none\">
            </div>

        </div>
        <hr>
        <div class=\"block\">
            <div class=\"blockRow\">
                <img style=\"float:left\"
                     src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile-0819.jpg\"
                     alt=\"none\">
                <div class=\"blockColumn\">
                    <h1> Pobierz ulubione tytuły i oglądaj offline. </h1>
                    <h2> Zapisz ulubione tytuły, aby zawsze mieć coś do obejrzenia. </h2>
                </div>
            </div>
        </div>
        <hr>
        <div class=\"block\">
            <div class=\"blockRow\">
                <div class=\"blockColumn\">
                    <h1> Oglądaj wszędzie. </h1>
                    <h2> Oglądaj filmy, seriale i programy bez ograniczeń na telefonie, tablecie, laptopie,
                        telewizorze... Bez
                        dodatkowych opłat. </h2>
                </div>
                <img style=\"float:right\"
                     src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/device-pile.png\"
                     alt=\"none\">
            </div>
        </div>
        <hr>
        <div class=\"block\">
            <div class=\"blockRow\">
                <img style=\"float:left\"
                     src=\"https://occ-0-1432-1433.1.nflxso.net/dnm/api/v6/19OhWN2dO19C9txTON9tvTFtefw/AAAABV0jxy5YQLZOJQiLeketUA72UonCi7ikrao3PtSMF_M2mYyBUp8FK--aHN-cL3iuXP5MqpYBcJZP4dNkLrHxa0oAY5uD.png?r=107\"
                     alt=\"none\">
                <div class=\"blockColumn\">
                    <h1> Utwórz profile dla dzieci. </h1>
                    <h2> Pozwól dzieciom przeżywać przygody w towarzystwie uwielbianych bohaterów — w specjalnej sekcji
                        serwisu
                        oferowanej bezpłatnie w ramach członkostwa. </h2>
                </div>
            </div>
        </div>
        <hr>
        <div class=\"block\">
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Czym jest Netflix?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
            </div>
            <br>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Ile kosztuje korzystanie z serwisu Netflix?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
            </div>
            <br>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Gdzie mogę oglądać?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
            </div>
            <br>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Jak zrezygnować z członkostwa?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
                <br>
            </div>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Jakie materiały mogę oglądać w serwisie Netflix?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
                <br>
            </div>
            <div class=\"dropdown\">
                <button onclick=\"myFunction()\" class=\"dropbtn\">Czy Netflix jest odpowiedni dla dzieci?</button>
                <div id=\"myDropdown\" class=\"dropdown-content\">
                    <a href=\"#\">Link 1</a>
                    <a href=\"#\">Link 2</a>
                    <a href=\"#\">Link 3</a>
                </div>
                <br>
            </div>
            <div class=\"block\">
                <form action=\"/action_page.php\">
                    <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić
                        konto. </label>
                    <input class=\"emailInput\" type=\"text\" id=\"fname\" name=\"fname\">
                    <button type=\"button\" class=\"buttonSubmit\">Rozpocznij</button>
                </form>
            </div>
        </div>
        <hr>
    </div>
    </body>
{% endblock %}

{% block stylesheets %}
    <style>
        body {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        html {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
            font-weight: normal;
        }

        h1 {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        h2 {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }

        a.button, a.button:hover, a.button:visited, a.button:active {
            color: inherit;
            text-decoration: none;
        }

        a, a:visited, a:active {
            color: #757575;
            text-decoration: none;
        }

        a:hover {
            color: #757575;
            text-decoration: underline;
        }

        .buttonsWrapper {
            gap: 20px;
        }

        .selectMedium {
            margin-right: 0;
        }

        select {
            font-family: \"Netflix Sans Black\", bootstrap-icons, serif;
            padding: 10px 10px 10px;

        }

        i {
            vertical-align: -1px;
        }

        .concord-img-wrapper {
            font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        }
    </style>
{% endblock %}

{% embed 'reusable/footer.html.twig' %}{% endembed %}
</html>
", "root.html.twig", "/var/www/symfony_docker/templates/root.html.twig");
    }
}
