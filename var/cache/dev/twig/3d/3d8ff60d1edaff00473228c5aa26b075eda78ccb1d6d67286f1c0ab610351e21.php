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

/* private-space/games/ppc/home_ppc.html.twig */
class __TwigTemplate_fb05c8d15b7eb1a21b04831e02ee17b3054e2a67b96dc2cc4c26d866157849d4 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("private-space/games/layout.html.twig", "private-space/games/ppc/home_ppc.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/games/ppc/home_ppc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/games/ppc/home_ppc.html.twig"));

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

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
\t\t";
        // line 10
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 15
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", []), "jeux", []));
        foreach ($context['_seq'] as $context["_key"] => $context["jeux"]) {
            // line 16
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, $context["jeux"], "id", []) == "1")) {
                // line 17
                echo "        <h5> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeux"], "nom", []), "html", null, true);
                echo " </h5>
        <p> ";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeux"], "description", []), "html", null, true);
                echo " </p>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeux'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    <div class=\"animate-box\">
\t\t\t\t";
        // line 23
        echo "\t\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ppc");
        echo "\">
\t\t\t\t<div class=\"animate-box-hidden\">
\t\t\t\t\t";
        // line 28
        echo "\t\t\t\t\t<p> <span style=color:orange;> <img class=\"glowing-img\" src=\"/images/logos/logo-red-panda.png\" width=\"100px\" height=\"100px\"/> </span>  </p>
\t\t\t\t\t<button>
\t\t\t\t\t<span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t<span data-attr-span=\"Jouer\"> PPC
\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t</a>
      </div>
      
    ";
        // line 42
        echo "    <button class=\"btn btn-error\"> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home-private");
        echo "\"> Retour </a> </button>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "private-space/games/ppc/home_ppc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  128 => 28,  122 => 23,  119 => 21,  110 => 18,  105 => 17,  102 => 16,  97 => 15,  92 => 10,  89 => 9,  80 => 8,  68 => 4,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'private-space/games/layout.html.twig' %}

{% block title %} 
  {{parent()}} 
{% endblock %}


{% block body %}

\t\t{{parent()}}

    {# <h5> Pierre feuille ciseaux </h5>
    <p> Les ciseaux battent la pierre, la pierre bat la feuille et la feuille bat la pierre, fait le bon choix et gagne 1 ruby ! </p>
\t\t #}
\t\t{% for jeux in app.user.jeux %}
\t{% if (jeux.id == '1') %}
        <h5> {{ jeux.nom }} </h5>
        <p> {{ jeux.description }} </p>
    {% endif %}
{% endfor %}
    <div class=\"animate-box\">
\t\t\t\t{# ANIMATE BORDER BOX => display Bestiary button #}
\t\t\t\t<a href=\"{{path('ppc')}}\">
\t\t\t\t<div class=\"animate-box-hidden\">
\t\t\t\t\t{# {% for nb in nbMonstre %}
\t\t\t\t\t\t<p> <span style=color:orange;> {{ nb.monstre }} </span> monstres </p>
\t\t\t\t\t\t{% endfor %} #}
\t\t\t\t\t<p> <span style=color:orange;> <img class=\"glowing-img\" src=\"/images/logos/logo-red-panda.png\" width=\"100px\" height=\"100px\"/> </span>  </p>
\t\t\t\t\t<button>
\t\t\t\t\t<span>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t<span data-attr-span=\"Jouer\"> PPC
\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t</a>
      </div>
      
    {# <button class=\"btn btn-success\"> <a href=\"{{ path('ppc') }}\"> Jouer </a> </button> #}
    <button class=\"btn btn-error\"> <a href=\"{{ path('home-private') }}\"> Retour </a> </button>


{% endblock %}", "private-space/games/ppc/home_ppc.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/private-space/games/ppc/home_ppc.html.twig");
    }
}
