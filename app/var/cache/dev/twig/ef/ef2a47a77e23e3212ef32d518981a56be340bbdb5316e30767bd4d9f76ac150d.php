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

/* base.html.twig */
class __TwigTemplate_bb604402bda6d5029ed8fce4fefbc5ac57058c831e0381c00262c5f2c09f1094 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"assets/style.css\">
    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 42
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "</head>

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
                        <option value=\"0\">Polski</option>
                        <option value=\"1\">English</option>
                    </select>
                </div>

                ";
        // line 84
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 85
            echo "                    <a href=\"/admin\">
                        <button type=\"button\" class=\"buttonLogin\">
                            <i class=\"bi bi-wrench-adjustable-circle\"></i>
                            Panel Administratora
                        </button>
                    </a>
                ";
        }
        // line 92
        echo "
                <a href=\"/login\">
                    ";
        // line 94
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 95
            echo "                        <button type=\"button\" class=\"buttonLogin\">
                            Przejdź dalej
                        </button>
                    ";
        } else {
            // line 99
            echo "                        <button type=\"button\" class=\"buttonLogin\">
                            Zaloguj się
                        </button>
                    ";
        }
        // line 103
        echo "                </a>
            </div>
        </nav>

    <div class=\"blockColumn\">
        <div class=\"blockIntro\">
            ";
        // line 109
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 110
            echo "                    <p>Debug: zalogowany użytkownik: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110), "email", [], "any", false, false, false, 110), "html", null, true);
            echo "</p>
                ";
        } else {
            // line 112
            echo "                    <p>Debug: nie jesteś zalogowany.</p>
            ";
        }
        // line 114
        echo "            <h1> Nieograniczona oferta filmów, seriali, programów <br> i nie tylko. </h1>
            <h2> Oglądaj wszędzie. Anuluj w każdej chwili. </h2>
            <h3> </h3>

            <form action=\"/register.php\">
                <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić konto. </label>
                <input class=\"emailInput\" type=\"text\" id=\"email\" name=\"email\">
                <button type=\"button\" class=\"buttonSubmit\"> <a class=\"button\" href=\"/register\">Rozpocznij</a></button>
            </form>
        </div>
    </div>
</div>
    ";
        // line 126
        $this->displayBlock('body', $context, $blocks);
        // line 127
        echo "
<div class=\"blockWrapper\">
";
        // line 141
        echo "    <hr>
    <div class=\"block\">
        <div class=\"blockRow\">
            <div class=\"blockColumn\">
                <h1> Oglądaj na telewizorze. </h1>
                <h2> Oglądaj na telewizorach Smart TV, konsolach PlayStation i Xbox, odtwarzaczach Chromecast, Apple TV oraz Blu-ray
                    i nie tylko. </h2>
            </div>
        <img style=\"float:right\" src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png\" alt=\"none\">
    </div>

    </div>
    <hr>
    <div class=\"block\">
        <div class=\"blockRow\">
        <img style=\"float:left\" src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile-0819.jpg\" alt=\"none\">
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
            <h2> Oglądaj filmy, seriale i programy bez ograniczeń na telefonie, tablecie, laptopie, telewizorze... Bez
                dodatkowych opłat. </h2>
            </div>
        <img style=\"float:right\" src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/device-pile.png\" alt=\"none\">
        </div>
    </div>
    <hr>
    <div class=\"block\">
        <div class=\"blockRow\">
            <img style=\"float:left\" src=\"https://occ-0-1432-1433.1.nflxso.net/dnm/api/v6/19OhWN2dO19C9txTON9tvTFtefw/AAAABV0jxy5YQLZOJQiLeketUA72UonCi7ikrao3PtSMF_M2mYyBUp8FK--aHN-cL3iuXP5MqpYBcJZP4dNkLrHxa0oAY5uD.png?r=107\" alt=\"none\">
            <div class=\"blockColumn\">
                <h1> Utwórz profile dla dzieci. </h1>
                <h2> Pozwól dzieciom przeżywać przygody w towarzystwie uwielbianych bohaterów — w specjalnej sekcji serwisu
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
                <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić konto. </label>
                <input class=\"emailInput\" type=\"text\" id=\"fname\" name=\"fname\">
                <button type=\"button\" class=\"buttonSubmit\">Rozpocznij</button>
            </form>
        </div>
    </div>
    <hr>
</div>
    ";
        // line 251
        $this->loadTemplate("base.html.twig", "base.html.twig", 251, "2136721589")->display($context);
        // line 254
        echo "
";
        // line 256
        echo "
";
        // line 313
        echo "
";
        // line 315
        echo "            <script
                        src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\"
                        integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\"
                        crossorigin=\"anonymous\">
                </script>

</body>

</html>
";
        
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

        echo "<title>Netflix - Symfony</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "    <style>
        a.button, a.button:hover,a.button:visited, a.button:active {
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
        .buttonsWrapper{
            gap:20px;
        }
        .selectMedium{
            margin-right: 0;
        }
        select{
            padding: 10px 10px 10px
        }
        i{
            vertical-align: -1px;
        }
    </style>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 43
        echo "        <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
        document.getElementById(\"myDropdown\").classList.toggle(\"show\");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName(\"dropdown-content\");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
        }
        }
        }
        }
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 126,  377 => 43,  367 => 42,  331 => 15,  321 => 14,  302 => 6,  283 => 315,  280 => 313,  277 => 256,  274 => 254,  272 => 251,  160 => 141,  156 => 127,  154 => 126,  140 => 114,  136 => 112,  130 => 110,  128 => 109,  120 => 103,  114 => 99,  108 => 95,  106 => 94,  102 => 92,  93 => 85,  91 => 84,  70 => 65,  67 => 42,  65 => 14,  56 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
    {% block stylesheets %}
    <style>
        a.button, a.button:hover,a.button:visited, a.button:active {
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
        .buttonsWrapper{
            gap:20px;
        }
        .selectMedium{
            margin-right: 0;
        }
        select{
            padding: 10px 10px 10px
        }
        i{
            vertical-align: -1px;
        }
    </style>
    {% endblock %}
    {% block javascripts %}
        <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
        document.getElementById(\"myDropdown\").classList.toggle(\"show\");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName(\"dropdown-content\");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
        }
        }
        }
        }
        </script>
    {% endblock %}
</head>

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
                        <option value=\"0\">Polski</option>
                        <option value=\"1\">English</option>
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
            <h3> </h3>

            <form action=\"/register.php\">
                <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić konto. </label>
                <input class=\"emailInput\" type=\"text\" id=\"email\" name=\"email\">
                <button type=\"button\" class=\"buttonSubmit\"> <a class=\"button\" href=\"/register\">Rozpocznij</a></button>
            </form>
        </div>
    </div>
</div>
    {% block body %}{% endblock %}

<div class=\"blockWrapper\">
{#    <div class=\"blockColumn\">#}
{#        <div class=\"blockIntro\">#}
{#            <h1> Nieograniczona oferta filmów, seriali, programów i nie tylko. </h1>#}
{#            <h2> Oglądaj wszędzie. Anuluj w każdej chwili. </h2>#}
{#            <h3> </h3>#}
{#            <form action=\"/action_page.php\">#}
{#                <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić konto. </label>#}
{#                <input type=\"text\" id=\"fname\" name=\"fname\">#}
{#                <button type=\"button\" class=\"buttonLanguage\">Rozpocznij</button>#}
{#            </form>#}
{#        </div>#}
{#    </div>#}
    <hr>
    <div class=\"block\">
        <div class=\"blockRow\">
            <div class=\"blockColumn\">
                <h1> Oglądaj na telewizorze. </h1>
                <h2> Oglądaj na telewizorach Smart TV, konsolach PlayStation i Xbox, odtwarzaczach Chromecast, Apple TV oraz Blu-ray
                    i nie tylko. </h2>
            </div>
        <img style=\"float:right\" src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png\" alt=\"none\">
    </div>

    </div>
    <hr>
    <div class=\"block\">
        <div class=\"blockRow\">
        <img style=\"float:left\" src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile-0819.jpg\" alt=\"none\">
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
            <h2> Oglądaj filmy, seriale i programy bez ograniczeń na telefonie, tablecie, laptopie, telewizorze... Bez
                dodatkowych opłat. </h2>
            </div>
        <img style=\"float:right\" src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/device-pile.png\" alt=\"none\">
        </div>
    </div>
    <hr>
    <div class=\"block\">
        <div class=\"blockRow\">
            <img style=\"float:left\" src=\"https://occ-0-1432-1433.1.nflxso.net/dnm/api/v6/19OhWN2dO19C9txTON9tvTFtefw/AAAABV0jxy5YQLZOJQiLeketUA72UonCi7ikrao3PtSMF_M2mYyBUp8FK--aHN-cL3iuXP5MqpYBcJZP4dNkLrHxa0oAY5uD.png?r=107\" alt=\"none\">
            <div class=\"blockColumn\">
                <h1> Utwórz profile dla dzieci. </h1>
                <h2> Pozwól dzieciom przeżywać przygody w towarzystwie uwielbianych bohaterów — w specjalnej sekcji serwisu
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
                <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić konto. </label>
                <input class=\"emailInput\" type=\"text\" id=\"fname\" name=\"fname\">
                <button type=\"button\" class=\"buttonSubmit\">Rozpocznij</button>
            </form>
        </div>
    </div>
    <hr>
</div>
    {% embed 'reusable/footer.html.twig' %}
    {% endembed %}
{#    {% block footer %}#}

{#                <footer class=\"footer\">#}

{#                    <div class=\"container-fluid mt-5\">#}
{#                        <p>Pytania? Zadzwoń pod numer <a href=\"#\">00 800 112 4392</a></p>#}
{#                        <div class=\"row text-center\">#}
{#                            <div class=\"col-sm-12 col-md-6 col-lg-3\">#}
{#                                <div class=\"sub-links\">#}
{#                                    <ul>#}
{#                                        <li><a href=\"#\">Często zadawane pytania</a></li>#}
{#                                        <li><a href=\"#\">Relacje z inwestorami</a></li>#}
{#                                        <li><a href=\"#\">Jak oglądać?</a></li>#}
{#                                        <li><a href=\"#\">Informacje o firmie</a></li>#}
{#                                        <li><a href=\"#\">Tylko na Netflix</a></li>#}
{#                                    </ul>#}
{#                                </div>#}
{#                            </div>#}
{#                            <div class=\"col-sm-12 col-md-6 col-lg-3\">#}
{#                                <div class=\"sub-links\">#}
{#                                    <ul>#}
{#                                        <li><a href=\"#\">Centrum pomocy</a></li>#}
{#                                        <li><a href=\"#\">Praca</a></li>#}
{#                                        <li><a href=\"#\">Warunki korzystania</a></li>#}
{#                                        <li><a href=\"#\">Skontaktuj się z nami</a></li>#}
{#                                    </ul>#}
{#                                </div>#}
{#                            </div>#}
{#                            <div class=\"col-sm-12 col-md-6 col-lg-3\">#}
{#                                <div class=\"sub-links\">#}
{#                                    <ul>#}
{#                                        <li><a href=\"#\">Konto</a></li>#}
{#                                        <li><a href=\"#\">Zrealizuj karty podarunkowe</a></li>#}
{#                                        <li><a href=\"#\">Prywatność</a></li>#}
{#                                        <li><a href=\"#\">Test prędkości połączenia</a></li>#}
{#                                    </ul>#}
{#                                </div>#}
{#                            </div>#}
{#                            <div class=\"col-sm-12 col-md-6 col-lg-3\">#}
{#                                <div class=\"sub-links\">#}
{#                                    <ul>#}
{#                                        <li><a href=\"#\">Media Center</a></li>#}
{#                                        <li><a href=\"#\">Kup karty podarunkowe</a></li>#}
{#                                        <li><a href=\"#\">Ustawienia plików cookie</a></li>#}
{#                                        <li><a href=\"#\"> Informacje prawne</a></li>#}
{#                                    </ul>#}
{#                                </div>#}
{#                            </div>#}
{#                        </div>#}
{#                    </div>#}
{#    <br>#}
{#                    <div class=\"custom-select\">#}
{#                        <select>#}
{#                            <option value=\"0\">Polski</option>#}
{#                            <option value=\"1\">English</option>#}
{#                        </select>#}
{#                    </div>#}
{#                    <p>&copy Netflix Polska</p>#}
{#                    <p>Made With Symfony Kamil Szymik</p>#}
{#                </footer>#}

{#    {% endblock %}#}
            <script
                        src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\"
                        integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\"
                        crossorigin=\"anonymous\">
                </script>

</body>

</html>
", "base.html.twig", "/var/www/symfony_docker/templates/base.html.twig");
    }
}


/* base.html.twig */
class __TwigTemplate_bb604402bda6d5029ed8fce4fefbc5ac57058c831e0381c00262c5f2c09f1094___2136721589 extends Template
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
        // line 251
        return "reusable/footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent = $this->loadTemplate("reusable/footer.html.twig", "base.html.twig", 251);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  789 => 251,  408 => 126,  377 => 43,  367 => 42,  331 => 15,  321 => 14,  302 => 6,  283 => 315,  280 => 313,  277 => 256,  274 => 254,  272 => 251,  160 => 141,  156 => 127,  154 => 126,  140 => 114,  136 => 112,  130 => 110,  128 => 109,  120 => 103,  114 => 99,  108 => 95,  106 => 94,  102 => 92,  93 => 85,  91 => 84,  70 => 65,  67 => 42,  65 => 14,  56 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
    {% block stylesheets %}
    <style>
        a.button, a.button:hover,a.button:visited, a.button:active {
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
        .buttonsWrapper{
            gap:20px;
        }
        .selectMedium{
            margin-right: 0;
        }
        select{
            padding: 10px 10px 10px
        }
        i{
            vertical-align: -1px;
        }
    </style>
    {% endblock %}
    {% block javascripts %}
        <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
        document.getElementById(\"myDropdown\").classList.toggle(\"show\");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName(\"dropdown-content\");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
        }
        }
        }
        }
        </script>
    {% endblock %}
</head>

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
                        <option value=\"0\">Polski</option>
                        <option value=\"1\">English</option>
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
            <h3> </h3>

            <form action=\"/register.php\">
                <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić konto. </label>
                <input class=\"emailInput\" type=\"text\" id=\"email\" name=\"email\">
                <button type=\"button\" class=\"buttonSubmit\"> <a class=\"button\" href=\"/register\">Rozpocznij</a></button>
            </form>
        </div>
    </div>
</div>
    {% block body %}{% endblock %}

<div class=\"blockWrapper\">
{#    <div class=\"blockColumn\">#}
{#        <div class=\"blockIntro\">#}
{#            <h1> Nieograniczona oferta filmów, seriali, programów i nie tylko. </h1>#}
{#            <h2> Oglądaj wszędzie. Anuluj w każdej chwili. </h2>#}
{#            <h3> </h3>#}
{#            <form action=\"/action_page.php\">#}
{#                <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić konto. </label>#}
{#                <input type=\"text\" id=\"fname\" name=\"fname\">#}
{#                <button type=\"button\" class=\"buttonLanguage\">Rozpocznij</button>#}
{#            </form>#}
{#        </div>#}
{#    </div>#}
    <hr>
    <div class=\"block\">
        <div class=\"blockRow\">
            <div class=\"blockColumn\">
                <h1> Oglądaj na telewizorze. </h1>
                <h2> Oglądaj na telewizorach Smart TV, konsolach PlayStation i Xbox, odtwarzaczach Chromecast, Apple TV oraz Blu-ray
                    i nie tylko. </h2>
            </div>
        <img style=\"float:right\" src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/tv.png\" alt=\"none\">
    </div>

    </div>
    <hr>
    <div class=\"block\">
        <div class=\"blockRow\">
        <img style=\"float:left\" src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/mobile-0819.jpg\" alt=\"none\">
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
            <h2> Oglądaj filmy, seriale i programy bez ograniczeń na telefonie, tablecie, laptopie, telewizorze... Bez
                dodatkowych opłat. </h2>
            </div>
        <img style=\"float:right\" src=\"https://assets.nflxext.com/ffe/siteui/acquisition/ourStory/fuji/desktop/device-pile.png\" alt=\"none\">
        </div>
    </div>
    <hr>
    <div class=\"block\">
        <div class=\"blockRow\">
            <img style=\"float:left\" src=\"https://occ-0-1432-1433.1.nflxso.net/dnm/api/v6/19OhWN2dO19C9txTON9tvTFtefw/AAAABV0jxy5YQLZOJQiLeketUA72UonCi7ikrao3PtSMF_M2mYyBUp8FK--aHN-cL3iuXP5MqpYBcJZP4dNkLrHxa0oAY5uD.png?r=107\" alt=\"none\">
            <div class=\"blockColumn\">
                <h1> Utwórz profile dla dzieci. </h1>
                <h2> Pozwól dzieciom przeżywać przygody w towarzystwie uwielbianych bohaterów — w specjalnej sekcji serwisu
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
                <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić konto. </label>
                <input class=\"emailInput\" type=\"text\" id=\"fname\" name=\"fname\">
                <button type=\"button\" class=\"buttonSubmit\">Rozpocznij</button>
            </form>
        </div>
    </div>
    <hr>
</div>
    {% embed 'reusable/footer.html.twig' %}
    {% endembed %}
{#    {% block footer %}#}

{#                <footer class=\"footer\">#}

{#                    <div class=\"container-fluid mt-5\">#}
{#                        <p>Pytania? Zadzwoń pod numer <a href=\"#\">00 800 112 4392</a></p>#}
{#                        <div class=\"row text-center\">#}
{#                            <div class=\"col-sm-12 col-md-6 col-lg-3\">#}
{#                                <div class=\"sub-links\">#}
{#                                    <ul>#}
{#                                        <li><a href=\"#\">Często zadawane pytania</a></li>#}
{#                                        <li><a href=\"#\">Relacje z inwestorami</a></li>#}
{#                                        <li><a href=\"#\">Jak oglądać?</a></li>#}
{#                                        <li><a href=\"#\">Informacje o firmie</a></li>#}
{#                                        <li><a href=\"#\">Tylko na Netflix</a></li>#}
{#                                    </ul>#}
{#                                </div>#}
{#                            </div>#}
{#                            <div class=\"col-sm-12 col-md-6 col-lg-3\">#}
{#                                <div class=\"sub-links\">#}
{#                                    <ul>#}
{#                                        <li><a href=\"#\">Centrum pomocy</a></li>#}
{#                                        <li><a href=\"#\">Praca</a></li>#}
{#                                        <li><a href=\"#\">Warunki korzystania</a></li>#}
{#                                        <li><a href=\"#\">Skontaktuj się z nami</a></li>#}
{#                                    </ul>#}
{#                                </div>#}
{#                            </div>#}
{#                            <div class=\"col-sm-12 col-md-6 col-lg-3\">#}
{#                                <div class=\"sub-links\">#}
{#                                    <ul>#}
{#                                        <li><a href=\"#\">Konto</a></li>#}
{#                                        <li><a href=\"#\">Zrealizuj karty podarunkowe</a></li>#}
{#                                        <li><a href=\"#\">Prywatność</a></li>#}
{#                                        <li><a href=\"#\">Test prędkości połączenia</a></li>#}
{#                                    </ul>#}
{#                                </div>#}
{#                            </div>#}
{#                            <div class=\"col-sm-12 col-md-6 col-lg-3\">#}
{#                                <div class=\"sub-links\">#}
{#                                    <ul>#}
{#                                        <li><a href=\"#\">Media Center</a></li>#}
{#                                        <li><a href=\"#\">Kup karty podarunkowe</a></li>#}
{#                                        <li><a href=\"#\">Ustawienia plików cookie</a></li>#}
{#                                        <li><a href=\"#\"> Informacje prawne</a></li>#}
{#                                    </ul>#}
{#                                </div>#}
{#                            </div>#}
{#                        </div>#}
{#                    </div>#}
{#    <br>#}
{#                    <div class=\"custom-select\">#}
{#                        <select>#}
{#                            <option value=\"0\">Polski</option>#}
{#                            <option value=\"1\">English</option>#}
{#                        </select>#}
{#                    </div>#}
{#                    <p>&copy Netflix Polska</p>#}
{#                    <p>Made With Symfony Kamil Szymik</p>#}
{#                </footer>#}

{#    {% endblock %}#}
            <script
                        src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\"
                        integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\"
                        crossorigin=\"anonymous\">
                </script>

</body>

</html>
", "base.html.twig", "/var/www/symfony_docker/templates/base.html.twig");
    }
}
