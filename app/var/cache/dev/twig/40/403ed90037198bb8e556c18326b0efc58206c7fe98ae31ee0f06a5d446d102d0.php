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
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "movies/index.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 128
        echo "
";
        // line 129
        $this->displayBlock('navigation', $context, $blocks);
        // line 175
        echo "
";
        // line 176
        $this->displayBlock('body', $context, $blocks);
        
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
        echo "<head>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
</head>
";
        
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
        echo "<style>
    body {
        font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        background-color: black;
        color: white;
    }
    h5 {
        font-size: 20px;
    }
    #main {
        display: flex;
    }
    a.active {
        font-weight: 900;

    }
    .navbar {
        padding-top: 0px;
        overflow: hidden;
        width: 96%;
        margin-left: 40px;
        gap: 25px;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        flex-wrap: nowrap;
    }
    .navbar a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        /*padding: 14px 16px;*/
        text-decoration: none;
        font-size: 14px;
    }
    .navbar_end {
        gap: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }
    .navbar a:hover {
        opacity: 0.8;
    }
    .logo {
        /*margin-top: -3px;*/
    }
    #search {
        display: flex;
        float: right;
    }
    a.right {
        float: right;
        padding: 13px 0;
        align-items: center;
    }
    .box {
        margin: 20px;
        display: flex;
        flex-wrap: wrap;
        grid-gap: 25px;
        /*grid-template-columns: repeat(6, calc(1% - 40px));*/
        grid-template-columns:
                repeat(6, minmax(270px, 1fr));
        /*grid-template-rows: minmax(150px, 1fr);*/
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
        margin-left: 30px;
    }
    .searchInput{
        font-family: var(--bs-body-font-family), bootstrap-icons;
    }
    i{
        font-size: 23px;
        margin-top: 8px;
        margin-right: 8px;
    }
    .logo{
         height:31px;
        margin-right: 15px;
    }
    .brandLogoWrapper{
        width: 113px;
        justify-content: center;
    }
    .userAvatar {
        width:30px;
        border-radius: 4px;
    }

</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 129
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 130
        echo "    <div class=\"navbar\">
        <div class=\"brandLogoWrapper\">
            <a class=\"logo\" href=\"/\" target=\"_parent\">
                <img class=\"logo\" src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/netflixLogoSmall.svg.png"), "html", null, true);
        echo "\" alt=\"av1\"/>
            </a>
        </div>
        <a ";
        // line 136
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "request", [], "any", false, false, false, 136), "attributes", [], "any", false, false, false, 136), "get", [0 => "_route"], "method", false, false, false, 136), "browse")) {
            // line 137
            echo " class=\"active\" ";
        }
        // line 138
        echo "                href=\"/browse\">Strona główna</a>
        <a  ";
        // line 139
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 139, $this->source); })()), "request", [], "any", false, false, false, 139), "attributes", [], "any", false, false, false, 139), "get", [0 => "_route"], "method", false, false, false, 139), "shows")) {
            // line 140
            echo " class=\"active\" ";
        }
        // line 141
        echo "                href=\"/shows\">Seriale i programy</a>
        <a  ";
        // line 142
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "request", [], "any", false, false, false, 142), "attributes", [], "any", false, false, false, 142), "get", [0 => "_route"], "method", false, false, false, 142), "movies")) {
            // line 143
            echo " class=\"active\" ";
        }
        // line 144
        echo "                href=\"/movies\">Filmy</a>
        <a  ";
        // line 145
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "request", [], "any", false, false, false, 145), "attributes", [], "any", false, false, false, 145), "get", [0 => "_route"], "method", false, false, false, 145), "new")) {
            // line 146
            echo " class=\"active\" ";
        }
        // line 147
        echo "                href=\"/new\">Nowe i popularne</a>
        <a  ";
        // line 148
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "request", [], "any", false, false, false, 148), "attributes", [], "any", false, false, false, 148), "get", [0 => "_route"], "method", false, false, false, 148), "myList")) {
            // line 149
            echo " class=\"active\" ";
        }
        // line 150
        echo "                href=\"/myList\">Moja lista</a>
        <div class=\"navbar_end\">
            <div id=\"search\">
";
        // line 154
        echo "                <form method=\"GET\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" >

                    <input
                            name=\"v\"
                            type=\"search\"
                            class=\"form-control searchInput\"
                            placeholder=\"&#xF52A;  Wyszukaj..\"
                            aria-label=\"Search\"
                    >
                </form>
            </div>
            <a class=\"right\" href=\"/notif\">
                <i style=\"padding: 1px;margin-left: 10px\" class=\"bi bi-bell-fill\"></i>
            </a>
            <a class=\"right\" href=\"/profile\">
                <img class=\"userAvatar\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 169, $this->source); })()), "html", null, true);
        echo "\" alt=\"avatar\">
";
        // line 171
        echo "            </a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 176
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 177
        echo "


<section id=\"main-container\">
    <h5 id=\"serials\" class=\"title-home\">Filmy</h5>
    <div class=\"box\">
        ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["movies"]) || array_key_exists("movies", $context) ? $context["movies"] : (function () { throw new RuntimeError('Variable "movies" does not exist.', 183, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 184
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 184), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 184), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 184), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "
    </div>
    <h5 id=\"serials\" class=\"title-home\">Seriale</h5>
    <div class=\"box\">
        ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["shows"]) || array_key_exists("shows", $context) ? $context["shows"] : (function () { throw new RuntimeError('Variable "shows" does not exist.', 190, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 191
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 191), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 191), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 191), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "    </div>

    <h5 id=\"movies\" class=\"title-home\">Tylko na Netflixie</h5>
    <div class=\"box\">
        ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["originals"]) || array_key_exists("originals", $context) ? $context["originals"] : (function () { throw new RuntimeError('Variable "originals" does not exist.', 197, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 198
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 198), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 198), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 198), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "    </div>

    <h5 id=\"popular\" class=\"title-home\">Popularne</h5>
    <div class=\"box\">
        ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popular"]) || array_key_exists("popular", $context) ? $context["popular"] : (function () { throw new RuntimeError('Variable "popular" does not exist.', 204, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 205
            echo "            <a href=\"/show/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "id", [], "any", false, false, false, 205), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "img", [], "any", false, false, false, 205), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, false, 205), "html", null, true);
            echo "\"></a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "    </div>

</section>

    <body></body>

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
        return array (  437 => 207,  424 => 205,  420 => 204,  414 => 200,  401 => 198,  397 => 197,  391 => 193,  378 => 191,  374 => 190,  368 => 186,  355 => 184,  351 => 183,  343 => 177,  333 => 176,  320 => 171,  316 => 169,  297 => 154,  292 => 150,  289 => 149,  287 => 148,  284 => 147,  281 => 146,  279 => 145,  276 => 144,  273 => 143,  271 => 142,  268 => 141,  265 => 140,  263 => 139,  260 => 138,  257 => 137,  255 => 136,  249 => 133,  244 => 130,  234 => 129,  112 => 15,  102 => 14,  82 => 2,  72 => 1,  62 => 176,  59 => 175,  57 => 129,  54 => 128,  52 => 14,  49 => 13,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
<head>

    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\"
          rel=\"stylesheet\"
          integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\"
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\"
          href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css\">
</head>
{% endblock %}

{% block stylesheets %}
<style>
    body {
        font-family: 'Netflix Sans Regular', \"Helvetica Neue\", \"Helvetica\", Arial, sans-serif;
        background-color: black;
        color: white;
    }
    h5 {
        font-size: 20px;
    }
    #main {
        display: flex;
    }
    a.active {
        font-weight: 900;

    }
    .navbar {
        padding-top: 0px;
        overflow: hidden;
        width: 96%;
        margin-left: 40px;
        gap: 25px;
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        flex-wrap: nowrap;
    }
    .navbar a {
        float: left;
        color: #f2f2f2;
        text-align: center;
        /*padding: 14px 16px;*/
        text-decoration: none;
        font-size: 14px;
    }
    .navbar_end {
        gap: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }
    .navbar a:hover {
        opacity: 0.8;
    }
    .logo {
        /*margin-top: -3px;*/
    }
    #search {
        display: flex;
        float: right;
    }
    a.right {
        float: right;
        padding: 13px 0;
        align-items: center;
    }
    .box {
        margin: 20px;
        display: flex;
        flex-wrap: wrap;
        grid-gap: 25px;
        /*grid-template-columns: repeat(6, calc(1% - 40px));*/
        grid-template-columns:
                repeat(6, minmax(270px, 1fr));
        /*grid-template-rows: minmax(150px, 1fr);*/
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
        margin-left: 30px;
    }
    .searchInput{
        font-family: var(--bs-body-font-family), bootstrap-icons;
    }
    i{
        font-size: 23px;
        margin-top: 8px;
        margin-right: 8px;
    }
    .logo{
         height:31px;
        margin-right: 15px;
    }
    .brandLogoWrapper{
        width: 113px;
        justify-content: center;
    }
    .userAvatar {
        width:30px;
        border-radius: 4px;
    }

</style>
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
            'shows' %} class=\"active\" {% endif %}
                href=\"/shows\">Seriale i programy</a>
        <a  {% if app.request.attributes.get('_route') in
            'movies' %} class=\"active\" {% endif %}
                href=\"/movies\">Filmy</a>
        <a  {% if app.request.attributes.get('_route') in
            'new' %} class=\"active\" {% endif %}
                href=\"/new\">Nowe i popularne</a>
        <a  {% if app.request.attributes.get('_route') in
            'myList' %} class=\"active\" {% endif %}
                href=\"/myList\">Moja lista</a>
        <div class=\"navbar_end\">
            <div id=\"search\">
{#                <i class=\"bi bi-search\"></i>#}
                <form method=\"GET\" action=\"{{ path('search') }}\" >

                    <input
                            name=\"v\"
                            type=\"search\"
                            class=\"form-control searchInput\"
                            placeholder=\"&#xF52A;  Wyszukaj..\"
                            aria-label=\"Search\"
                    >
                </form>
            </div>
            <a class=\"right\" href=\"/notif\">
                <i style=\"padding: 1px;margin-left: 10px\" class=\"bi bi-bell-fill\"></i>
            </a>
            <a class=\"right\" href=\"/profile\">
                <img class=\"userAvatar\" src=\"{{ userAvatar }}\" alt=\"avatar\">
{#                <i style=\"padding: 1px\" class=\"bi bi-person-circle\"></i>#}
            </a>
        </div>
    </div>
{% endblock %}

{% block body %}



<section id=\"main-container\">
    <h5 id=\"serials\" class=\"title-home\">Filmy</h5>
    <div class=\"box\">
        {% for movie in movies %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{movie.img}}\" alt=\"{{movie.title}}\"></a>
        {% endfor %}

    </div>
    <h5 id=\"serials\" class=\"title-home\">Seriale</h5>
    <div class=\"box\">
        {% for movie in shows %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{movie.img}}\" alt=\"{{movie.title}}\"></a>
        {% endfor %}
    </div>

    <h5 id=\"movies\" class=\"title-home\">Tylko na Netflixie</h5>
    <div class=\"box\">
        {% for movie in originals %}
            <a href=\"/show/{{movie.id}}\"><img src=\"{{ movie.img }}\" alt=\"{{ movie.title }}\"></a>
        {% endfor %}
    </div>

    <h5 id=\"popular\" class=\"title-home\">Popularne</h5>
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
