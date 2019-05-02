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

/* private-space/games/ttt/ttt.html.twig */
class __TwigTemplate_54c37b6cf6f7f6dd268df9e9e82564428cfa65747f9952f694cb9312a6b9b5b4 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("private-space/games/layout.html.twig", "private-space/games/ttt/ttt.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "private-space/games/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/games/ttt/ttt.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/games/ttt/ttt.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " 
    ";
        // line 4
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <script src=\"/assets/js/ttt.js\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h5> Tic Tac Toe </h5>
    <div class=\"container-fluid\" id=\"content\">
        <div id=\"parent\" class=\"\">
            ";
        // line 18
        echo "            <h1 id=\"input\" class=\"\"></h1>
            <div id = \"bt\">
            <div id=\"selector\" class=\"\">choose your game
                <button id=\"p1\" class=\"first\">1 player</button>
                <button id=\"p2\" class=\"first\">2 players</button>
            </div>
            <div id = \"start\" class=\"\"> choisi ton camp
                <button id=\"x\" class=\"first\">X</button>
                <button id=\"o\" class=\"first\">O</button>
            </div>
            </div>
            <div class=\"game\">
            <div class=\"row text-center\">
                <button id=\"1\" class=\"img\"></button>
                <button id=\"2\" class=\"img\"></button>
                <button id=\"3\" class=\"img\"></button>
            </div>
            <div class=\"row text-center\">
                <button id=\"4\" class=\"img\"></button>
                <button id=\"5\" class=\"img\"></button>
                <button id=\"6\" class=\"img\"></button>
            </div>
            <div class=\"row text-center\">
                <button id=\"7\" class=\"img\"></button>
                <button id=\"8\" class=\"img\"></button>
                <button id=\"9\" class=\"img\"></button>
            </div>
            </div>
        </div>
    </div>
    <hr class=\"hr\">

    <div>
        <button class=\"btn btn-error\"> <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home-private");
        echo "\"> Retour </a> </button>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "private-space/games/ttt/ttt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 51,  119 => 18,  111 => 13,  102 => 12,  90 => 8,  81 => 7,  69 => 4,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'private-space/games/layout.html.twig' %}

{% block title %} 
    {{parent()}} 
{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
    <script src=\"/assets/js/ttt.js\" />
{% endblock %}

{% block body %}
    {{parent()}}
    <h5> Tic Tac Toe </h5>
    <div class=\"container-fluid\" id=\"content\">
        <div id=\"parent\" class=\"\">
            {# <h1 class=\"text-primary text-center\">Tic Tac Toe</h1> #}
            <h1 id=\"input\" class=\"\"></h1>
            <div id = \"bt\">
            <div id=\"selector\" class=\"\">choose your game
                <button id=\"p1\" class=\"first\">1 player</button>
                <button id=\"p2\" class=\"first\">2 players</button>
            </div>
            <div id = \"start\" class=\"\"> choisi ton camp
                <button id=\"x\" class=\"first\">X</button>
                <button id=\"o\" class=\"first\">O</button>
            </div>
            </div>
            <div class=\"game\">
            <div class=\"row text-center\">
                <button id=\"1\" class=\"img\"></button>
                <button id=\"2\" class=\"img\"></button>
                <button id=\"3\" class=\"img\"></button>
            </div>
            <div class=\"row text-center\">
                <button id=\"4\" class=\"img\"></button>
                <button id=\"5\" class=\"img\"></button>
                <button id=\"6\" class=\"img\"></button>
            </div>
            <div class=\"row text-center\">
                <button id=\"7\" class=\"img\"></button>
                <button id=\"8\" class=\"img\"></button>
                <button id=\"9\" class=\"img\"></button>
            </div>
            </div>
        </div>
    </div>
    <hr class=\"hr\">

    <div>
        <button class=\"btn btn-error\"> <a href=\"{{ path('home-private') }}\"> Retour </a> </button>
    </div>
{% endblock %}", "private-space/games/ttt/ttt.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/private-space/games/ttt/ttt.html.twig");
    }
}
