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

/* private-space/games/bb/home_bb.html.twig */
class __TwigTemplate_006deb6d86f656e14785bfa9e15134eab0bd8357c0042c413a7e31dd1d8359b7 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("private-space/games/layout.html.twig", "private-space/games/bb/home_bb.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/games/bb/home_bb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/games/bb/home_bb.html.twig"));

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
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", []), "jeux", []));
        foreach ($context['_seq'] as $context["_key"] => $context["jeux"]) {
            // line 10
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["jeux"], "id", []) == "3")) {
                // line 11
                echo "            <h5> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeux"], "nom", []), "html", null, true);
                echo " </h5>
            <p> ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeux"], "description", []), "html", null, true);
                echo " </p>
        ";
            }
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeux'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    <div class=\"animate-box\">
        ";
        // line 18
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bb");
        echo "\">
            <div class=\"animate-box-hidden\">
            ";
        // line 23
        echo "                <p> <span style=color:orange;> <img class=\"glowing-img\" src=\"/images/logos/logo-red-panda.png\" width=\"100px\" height=\"100px\"/> </span>  </p>
                <button>
                    <span>
                        <span>
                            <span data-attr-span=\"Jouer\"> Broken Brick
                            </span>
                        </span>
                    </span>
                </button>
            </div>
        </a>
    </div>

    <div>
        <button class=\"btn btn-error\"> <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home-private");
        echo "\"> Retour </a> </button>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "private-space/games/bb/home_bb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 37,  127 => 23,  121 => 18,  117 => 15,  111 => 14,  106 => 12,  101 => 11,  98 => 10,  94 => 9,  89 => 8,  80 => 7,  68 => 4,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'private-space/games/layout.html.twig' %}

{% block title %} 
    {{parent()}} 
{% endblock %}

{% block body %}
    {{parent()}}
    {% for jeux in app.user.jeux %}
        {% if (jeux.id == '3') %}
            <h5> {{ jeux.nom }} </h5>
            <p> {{ jeux.description }} </p>
        {% endif %}
    {% endfor %}

    <div class=\"animate-box\">
        {# ANIMATE BORDER BOX => display Bestiary button #}
        <a href=\"{{path('bb')}}\">
            <div class=\"animate-box-hidden\">
            {# {% for nb in nbMonstre %}
                <p> <span style=color:orange;> {{ nb.monstre }} </span> monstres </p>
            {% endfor %} #}
                <p> <span style=color:orange;> <img class=\"glowing-img\" src=\"/images/logos/logo-red-panda.png\" width=\"100px\" height=\"100px\"/> </span>  </p>
                <button>
                    <span>
                        <span>
                            <span data-attr-span=\"Jouer\"> Broken Brick
                            </span>
                        </span>
                    </span>
                </button>
            </div>
        </a>
    </div>

    <div>
        <button class=\"btn btn-error\"> <a href=\"{{ path('home-private') }}\"> Retour </a> </button>
    </div>

{% endblock %}", "private-space/games/bb/home_bb.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/private-space/games/bb/home_bb.html.twig");
    }
}
