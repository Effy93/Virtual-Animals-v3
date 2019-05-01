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
class __TwigTemplate_b1313f6137743d4e85b50c60e19dd57ef6df6178987cac1534ec556e86bddeef extends \Twig\Template
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
        echo " 
";
        // line 9
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<main class=\"container-main\">

        ";
        // line 14
        echo "        <div class=\"container-row-reverse\">
          ";
        // line 16
        echo "          <section class=\"container-user-infos\">
              <h5> Mon compte </h5>
              <img class=\"glowing-img\" src=\"/images/logos/panda-feroce2.png\" width=\"100px\" heigth=\"100px\" alt=\"avatar utilisateur\" />
                <h4> ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo " </h4>
                <p> Inscrit depuis le : <span style=color:orange;> ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", []), "date", []), "d-m-Y"), "html", null, true);
        echo " </span></p>
              <p> <span style=color:red;> ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", []), "argent", []), "html", null, true);
        echo " </span> Ruby </p>
            
              <div class=\"container-row\">
                  ";
        // line 25
        echo "              <div class=\"animate-box\">
                      ";
        // line 27
        echo "                      <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bestiary");
        echo "\">
                      <div class=\"animate-box-hidden\">
                          ";
        // line 32
        echo "                          <p> <span style=color:orange;> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", []), "monstre", []), "count", []), "html", null, true);
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
        // line 45
        echo "                  <div class=\"animate-box\">
                      <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventory");
        echo "\">
                      <div class=\"animate-box-hidden\">
                          <p> <span style=color:orange;> ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", []), "accessoire", []), "count", []), "html", null, true);
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
        // line 63
        echo "          </section>
      
          ";
        // line 66
        echo "          <section class=\"container-games\">

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
        return array (  175 => 66,  171 => 63,  154 => 48,  149 => 46,  146 => 45,  130 => 32,  124 => 27,  121 => 25,  115 => 21,  111 => 20,  107 => 19,  102 => 16,  99 => 14,  92 => 9,  89 => 8,  80 => 7,  68 => 4,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'private-space/layout.html.twig' %}

{% block title %} 
  {{parent()}} 
{% endblock %}

{% block body %}
 
{{parent()}}

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
