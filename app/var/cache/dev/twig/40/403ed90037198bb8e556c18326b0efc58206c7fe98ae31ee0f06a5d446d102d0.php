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

/* movies/index.html.twig */
class __TwigTemplate_fbdfc9593549e99b119dfdaaadd8f081dcd53085c40da17ed64db95bb245019f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascript' => [$this, 'block_javascript'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'logo' => [$this, 'block_logo'],
            'navigation' => [$this, 'block_navigation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/index.html.twig"));

        // line 2
        echo "<head>
";
        // line 10
        echo "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
</head>

";
        // line 13
        $this->displayBlock('javascript', $context, $blocks);
        // line 27
        echo "

";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 14
        echo "



<script>
    function scrollLeft() {
    var element = document.getElementsByClassName('box');
    console.log(element);
    element.scrollLeft += 20;
}
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "<style>
    body {
        background-color: black;
        color: white;
    }
    #main {
        display: flex;
    }
    .navbar {
        margin-top: 9px;
        width: 100%;
        overflow: hidden;
    }
    a.active {
        font-weight: 900;
    }
    .navbar a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .navbar a:hover {
        opacity: 0.8;
    }
    .logo {
        margin-top: -3px;
    }
    .search {
        width: 20%;
        float: right;
    }
    a.right {
        float: right;
    }
    .notif {
        float: left;
        width: 32%;
    }
    .box {
        margin-left: 20px;
        display: flex;
        grid-gap: 25px;

        /*grid-template-columns: repeat(6, minmax(100px, 1fr));*/
    }
    box a {
        transition: transform 0.3s;
    }

    .box a:hover {
        transition: transform 0.3s;
        -ms-transform: scale(1.3);
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
    }

    .box img {
        border-radius: 2px;
        max-width:270px;
        width: auto;
        height: auto;
    }
    #search {
        margin-top: 12px;
    }
    #main-container{
        overflow-x: scroll;
        margin-left: 30px;
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 106
        echo "
    ";
        // line 107
        $this->displayBlock('logo', $context, $blocks);
        // line 110
        echo "    ";
        $this->displayBlock('navigation', $context, $blocks);
        // line 151
        echo "    </div>
<section id=\"main-container\">

    <h1 id=\"serials\" class=\"title-home\">Filmy</h1>
    <div class=\"box\">
        ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 156, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 157
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 157), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 157), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 157), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "    </div>
    <button id=\"slide\" onclick=\"scrollLeft()\"  type=\"button\">Slide right</button>

    <h1 id=\"serials\" class=\"title-home\">Seriale</h1>
    <div class=\"box\">
        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serials"]) || array_key_exists("serials", $context) ? $context["serials"] : (function () { throw new RuntimeError('Variable "serials" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 165
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 165), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 165), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 165), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "    </div>
    <button id=\"slide\" type=\"button\">Slide right</button>

    <h1 id=\"movies\" class=\"title-home\">Tylko na Netflxie</h1>
    <div class=\"box\">
        ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["originals"]) || array_key_exists("originals", $context) ? $context["originals"] : (function () { throw new RuntimeError('Variable "originals" does not exist.', 172, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 173
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 173), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 173), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 173), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "    </div>

    <h1 id=\"movies\" class=\"title-home\">Popularne</h1>
    <div class=\"box\">
        ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popular"]) || array_key_exists("popular", $context) ? $context["popular"] : (function () { throw new RuntimeError('Variable "popular" does not exist.', 179, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 180
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 180), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 180), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 180), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "    </div>

</section>

    <body></body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        // line 108
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 111
        echo "        <div class=\"navbar\">
            <div class=\"brandLogoWrapper\">
                <a class=\"logo\" href=\"/\" target=\"_parent\">
                    <img class=\"logo\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
                </a>
            </div>
            <a ";
        // line 117
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "request", [], "any", false, false, false, 117), "attributes", [], "any", false, false, false, 117), "get", [0 => "_route"], "method", false, false, false, 117), "browse")) {
            // line 118
            echo " class=\"active\" ";
        }
        // line 119
        echo "                    href=\"/browse\">Strona główna</a>
            <a  ";
        // line 120
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "request", [], "any", false, false, false, 120), "attributes", [], "any", false, false, false, 120), "get", [0 => "_route"], "method", false, false, false, 120), "serials")) {
            // line 121
            echo " class=\"active\" ";
        }
        // line 122
        echo "                    href=\"/serials\">Seriale i programy</a>
            <a  ";
        // line 123
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "request", [], "any", false, false, false, 123), "attributes", [], "any", false, false, false, 123), "get", [0 => "_route"], "method", false, false, false, 123), "movies")) {
            // line 124
            echo " class=\"active\" ";
        }
        // line 125
        echo "                    href=\"/movies\">Filmy</a>
            <a  ";
        // line 126
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "attributes", [], "any", false, false, false, 126), "get", [0 => "_route"], "method", false, false, false, 126), "new")) {
            // line 127
            echo " class=\"active\" ";
        }
        // line 128
        echo "                    href=\"/new\">Nowe i popularne</a>
            <a  ";
        // line 129
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "request", [], "any", false, false, false, 129), "attributes", [], "any", false, false, false, 129), "get", [0 => "_route"], "method", false, false, false, 129), "myList")) {
            // line 130
            echo " class=\"active\" ";
        }
        // line 131
        echo "                    href=\"/like\">Moja lista</a>
                <a class=\"right\" href=\"/notif\">
                    <img class=\"notif\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/notif.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
                </a>
            <div id=\"search\">
                    <form method=\"GET\" action=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" >
                        <input
                            name=\"v\"
                            type=\"search\"
                            class=\"form-control\"
                            placeholder=\"Wyszukaj..\"
                            aria-label=\"Search\"
                        >
                    </form>
            </div>
";
        // line 147
        echo "                </a>

        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "movies/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  433 => 147,  420 => 136,  414 => 133,  410 => 131,  407 => 130,  405 => 129,  402 => 128,  399 => 127,  397 => 126,  394 => 125,  391 => 124,  389 => 123,  386 => 122,  383 => 121,  381 => 120,  378 => 119,  375 => 118,  373 => 117,  367 => 114,  362 => 111,  352 => 110,  341 => 108,  331 => 107,  315 => 182,  302 => 180,  298 => 179,  292 => 175,  279 => 173,  275 => 172,  268 => 167,  255 => 165,  251 => 164,  244 => 159,  231 => 157,  227 => 156,  220 => 151,  217 => 110,  215 => 107,  212 => 106,  202 => 105,  119 => 30,  109 => 29,  87 => 14,  77 => 13,  67 => 105,  64 => 104,  62 => 29,  58 => 27,  56 => 13,  51 => 10,  48 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'base.html.twig' %}#}
<head>
{#    <link#}
{#            href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css\"#}
{#            rel=\"stylesheet\"#}
{#            integrity=\"sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6\"#}
{#            crossorigin=\"anonymous\">#}
{#<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>#}
{#<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\"></script>#}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
</head>

{% block javascript %}




<script>
    function scrollLeft() {
    var element = document.getElementsByClassName('box');
    console.log(element);
    element.scrollLeft += 20;
}
</script>

{% endblock %}


{% block stylesheets %}
<style>
    body {
        background-color: black;
        color: white;
    }
    #main {
        display: flex;
    }
    .navbar {
        margin-top: 9px;
        width: 100%;
        overflow: hidden;
    }
    a.active {
        font-weight: 900;
    }
    .navbar a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .navbar a:hover {
        opacity: 0.8;
    }
    .logo {
        margin-top: -3px;
    }
    .search {
        width: 20%;
        float: right;
    }
    a.right {
        float: right;
    }
    .notif {
        float: left;
        width: 32%;
    }
    .box {
        margin-left: 20px;
        display: flex;
        grid-gap: 25px;

        /*grid-template-columns: repeat(6, minmax(100px, 1fr));*/
    }
    box a {
        transition: transform 0.3s;
    }

    .box a:hover {
        transition: transform 0.3s;
        -ms-transform: scale(1.3);
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
    }

    .box img {
        border-radius: 2px;
        max-width:270px;
        width: auto;
        height: auto;
    }
    #search {
        margin-top: 12px;
    }
    #main-container{
        overflow-x: scroll;
        margin-left: 30px;
    }
</style>
{% endblock %}

{% block body %}

    {% block logo %}

    {% endblock %}
    {% block navigation %}
        <div class=\"navbar\">
            <div class=\"brandLogoWrapper\">
                <a class=\"logo\" href=\"/\" target=\"_parent\">
                    <img class=\"logo\" src=\"{{ asset('images/netflixLogoSmall.svg.png') }}\" alt=\"av1\"/>
                </a>
            </div>
            <a {% if app.request.attributes.get('_route') in
                'browse' %} class=\"active\" {% endif %}
                    href=\"/browse\">Strona główna</a>
            <a  {% if app.request.attributes.get('_route') in
                'serials' %} class=\"active\" {% endif %}
                    href=\"/serials\">Seriale i programy</a>
            <a  {% if app.request.attributes.get('_route') in
                'movies' %} class=\"active\" {% endif %}
                    href=\"/movies\">Filmy</a>
            <a  {% if app.request.attributes.get('_route') in
                'new' %} class=\"active\" {% endif %}
                    href=\"/new\">Nowe i popularne</a>
            <a  {% if app.request.attributes.get('_route') in
                'myList' %} class=\"active\" {% endif %}
                    href=\"/like\">Moja lista</a>
                <a class=\"right\" href=\"/notif\">
                    <img class=\"notif\" src=\"{{ asset('images/notif.png') }}\" alt=\"av1\"/>
                </a>
            <div id=\"search\">
                    <form method=\"GET\" action=\"{{ path('search') }}\" >
                        <input
                            name=\"v\"
                            type=\"search\"
                            class=\"form-control\"
                            placeholder=\"Wyszukaj..\"
                            aria-label=\"Search\"
                        >
                    </form>
            </div>
{#                    <img class=\"search\" src=\"{{ asset('images/search.png') }}\" alt=\"av1\"/>#}
                </a>

        </div>
    {% endblock %}
    </div>
<section id=\"main-container\">

    <h1 id=\"serials\" class=\"title-home\">Filmy</h1>
    <div class=\"box\">
        {% for movie in movies %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{movie.img}}\" alt=\"{{movie.title}}\"></a>
        {% endfor %}
    </div>
    <button id=\"slide\" onclick=\"scrollLeft()\"  type=\"button\">Slide right</button>

    <h1 id=\"serials\" class=\"title-home\">Seriale</h1>
    <div class=\"box\">
        {% for movie in serials %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{movie.img}}\" alt=\"{{movie.title}}\"></a>
        {% endfor %}
    </div>
    <button id=\"slide\" type=\"button\">Slide right</button>

    <h1 id=\"movies\" class=\"title-home\">Tylko na Netflxie</h1>
    <div class=\"box\">
        {% for movie in originals %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\"></a>
        {% endfor %}
    </div>

    <h1 id=\"movies\" class=\"title-home\">Popularne</h1>
    <div class=\"box\">
        {% for movie in popular %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\"></a>
        {% endfor %}
    </div>

</section>

    <body></body>

{% endblock %}
", "movies/index.html.twig", "/var/www/symfony_docker/templates/movies/index.html.twig");
    }
}
