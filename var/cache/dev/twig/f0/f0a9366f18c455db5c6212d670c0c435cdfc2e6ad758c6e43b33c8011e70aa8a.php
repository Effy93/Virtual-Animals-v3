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

/* private-space/games/layout.html.twig */
class __TwigTemplate_6485b42954fd30079815851245e7e76d140405f5326ad367410c884ce11b3f10 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("private-space/layout.html.twig", "private-space/games/layout.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "private-space/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/games/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/games/layout.html.twig"));

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
    <header class=\"container-column container-row-left\">
            <h1> Virtual Animals </h1>
       
        <div class=\"container-column container-row-left subtitle\">
            <h1> Jeux - ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo "</h1>
        </div>
    </header>
    <main class=\"container-main\">
        ";
        // line 18
        echo "        <div class=\"container-row-reverse\">
          ";
        // line 20
        echo "            <section class=\"container-user-infos\">
                <h5> Mon compte </h5>
                <img class=\"glowing-img\" src=\"/images/logos/panda-feroce2.png\" width=\"100px\" heigth=\"100px\" alt=\"avatar utilisateur\" />
                <h4> ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo " </h4>
                <p> Inscrit depuis le : <span style=color:orange;> ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", []), "date", []), "d-m-Y"), "html", null, true);
        echo " </span></p>
                <p> <span style=color:red;> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", []), "argent", []), "html", null, true);
        echo " </span> Ruby </p>
                
                <div class=\"container-row\">
                    ";
        // line 29
        echo "                    <div class=\"animate-box\">
                        ";
        // line 31
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bestiary");
        echo "\">
                            <div class=\"animate-box-hidden\">
                                ";
        // line 36
        echo "                                <p> <span style=color:orange;> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", []), "monstre", []), "count", []), "html", null, true);
        echo " </span> monstres </p>
                                <button>
                                <span>
                                    <span>
                                        <span data-attr-span=\"Bestiaire\"> Bestiaire
                                        </span>
                                    </span>
                                </span>
                                </button>
                            </div>
                        </a>
                    </div>
                  
                  ";
        // line 50
        echo "                    <div class=\"animate-box\">
                        <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventory");
        echo "\">
                            <div class=\"animate-box-hidden\">
                                <p> <span style=color:orange;> ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", []), "accessoire", []), "count", []), "html", null, true);
        echo " </span> accessoires </p>
                                <button>
                                    <span>
                                        <span>
                                            <span data-attr-span=\"Inventaire\"> Inventaire
                                            </span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
              
            ";
        // line 68
        echo "            </section>
      
            ";
        // line 71
        echo "            <section class=\"container-games\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "private-space/games/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 71,  178 => 68,  161 => 53,  156 => 51,  153 => 50,  136 => 36,  130 => 31,  127 => 29,  121 => 25,  117 => 24,  113 => 23,  108 => 20,  105 => 18,  98 => 13,  89 => 8,  80 => 7,  68 => 4,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'private-space/layout.html.twig' %}

{% block title %} 
    {{parent()}} 
{% endblock %}

{% block body %}
    {{parent()}}
    <header class=\"container-column container-row-left\">
            <h1> Virtual Animals </h1>
       
        <div class=\"container-column container-row-left subtitle\">
            <h1> Jeux - {{ app.user.nom }}</h1>
        </div>
    </header>
    <main class=\"container-main\">
        {# Container flex pour les infos et les jeux #}
        <div class=\"container-row-reverse\">
          {# OPEN user info section #}
            <section class=\"container-user-infos\">
                <h5> Mon compte </h5>
                <img class=\"glowing-img\" src=\"/images/logos/panda-feroce2.png\" width=\"100px\" heigth=\"100px\" alt=\"avatar utilisateur\" />
                <h4> {{ app.user.nom }} </h4>
                <p> Inscrit depuis le : <span style=color:orange;> {{ app.user.date|date('d-m-Y') }} </span></p>
                <p> <span style=color:red;> {{ app.user.argent}} </span> Ruby </p>
                
                <div class=\"container-row\">
                    {# ANIMATE BORDER BOX CONTAINER #}
                    <div class=\"animate-box\">
                        {# ANIMATE BORDER BOX => display Bestiary button #}
                        <a href=\"{{path('bestiary')}}\">
                            <div class=\"animate-box-hidden\">
                                {# {% for nb in nbMonstre %}
                                    <p> <span style=color:orange;> {{ nb.monstre }} </span> monstres </p>
                                {% endfor %} #}
                                <p> <span style=color:orange;> {{ app.user.monstre.count }} </span> monstres </p>
                                <button>
                                <span>
                                    <span>
                                        <span data-attr-span=\"Bestiaire\"> Bestiaire
                                        </span>
                                    </span>
                                </span>
                                </button>
                            </div>
                        </a>
                    </div>
                  
                  {# ANIMATE BORDER BOX => display Inventory button #}
                    <div class=\"animate-box\">
                        <a href=\"{{path('inventory')}}\">
                            <div class=\"animate-box-hidden\">
                                <p> <span style=color:orange;> {{ app.user.accessoire.count }} </span> accessoires </p>
                                <button>
                                    <span>
                                        <span>
                                            <span data-attr-span=\"Inventaire\"> Inventaire
                                            </span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </a>
                    </div>
                </div>
              
            {# CLOSE user info section #}
            </section>
      
            {# OUVERTURE CONTAINER DES JEUX #}
            <section class=\"container-games\">

{% endblock %}", "private-space/games/layout.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/private-space/games/layout.html.twig");
    }
}
