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
            'footer' => [$this, 'block_footer'],
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
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link
            href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"
            rel=\"stylesheet\"
            integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"
            crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"assets/style.css\">
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
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
                <a href=\"/login\">
                    <button type=\"button\" class=\"buttonLogin\">Zaloguj się</button>
                </a>
            </div>
        </nav>

    <div class=\"blockColumn\">
        <div class=\"blockIntro\">
            // press insert for fucking stupid character replace my man
            ";
        // line 64
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 65
            echo "                <p>Debug, zalogowany użytkownik: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "email", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
            ";
        }
        // line 67
        echo "            <h1> Nieograniczona oferta filmów, seriali, programów <br> i nie tylko. </h1>
            <h2> Oglądaj wszędzie. Anuluj w każdej chwili. </h2>
            <h3> </h3>

            <form action=\"/action_page.php\">
                <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić konto. </label>
                <input class=\"emailInput\" type=\"text\" id=\"fname\" name=\"fname\">
                <button type=\"button\" class=\"buttonSubmit\">Rozpocznij</button>
            </form>
        </div>
    </div>
</div>
    ";
        // line 79
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "
<div class=\"blockWrapper\">
";
        // line 94
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
        // line 204
        $this->displayBlock('footer', $context, $blocks);
        // line 265
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

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
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

    // line 79
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

    // line 204
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 205
        echo "                <footer class=\"footer\">

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
        return array (  366 => 205,  356 => 204,  338 => 79,  307 => 15,  297 => 14,  279 => 13,  260 => 6,  241 => 265,  239 => 204,  127 => 94,  123 => 80,  121 => 79,  107 => 67,  101 => 65,  99 => 64,  70 => 37,  67 => 14,  65 => 13,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link
            href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"
            rel=\"stylesheet\"
            integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"
            crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"assets/style.css\">
    {% block stylesheets %}{% endblock %}
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
                <a href=\"/login\">
                    <button type=\"button\" class=\"buttonLogin\">Zaloguj się</button>
                </a>
            </div>
        </nav>

    <div class=\"blockColumn\">
        <div class=\"blockIntro\">
            // press insert for fucking stupid character replace my man
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <p>Debug, zalogowany użytkownik: {{ app.user.email }}</p>
            {% endif %}
            <h1> Nieograniczona oferta filmów, seriali, programów <br> i nie tylko. </h1>
            <h2> Oglądaj wszędzie. Anuluj w każdej chwili. </h2>
            <h3> </h3>

            <form action=\"/action_page.php\">
                <label for=\"fname\">Zaczynamy oglądać? Wprowadź adres e‑mail, aby utworzyć lub odnowić konto. </label>
                <input class=\"emailInput\" type=\"text\" id=\"fname\" name=\"fname\">
                <button type=\"button\" class=\"buttonSubmit\">Rozpocznij</button>
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
    {% block footer %}
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

    {% endblock %}
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
