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

/* private-space/home_private.html.twig */
class __TwigTemplate_3dcf798500ae3812a7b89f3c7d3f4b70dda0e4e6ad437d7bf723f1faf0694a0f extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("private-space/layout.html.twig", "private-space/home_private.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/home_private.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/home_private.html.twig"));

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

        echo " 
";
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<main class=\"container-main\">

    ";
        // line 12
        echo "       <div class=\"container-row-reverse\">
        ";
        // line 14
        echo "            <section class=\"container-user-infos\">
              <h1> Bienvenue ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo " </h1>
              <img class=\"glowing-img\" src=\"/images/panda-feroce2.png\" width=\"100px\" heigth=\"100px\" alt=\"avatar utilisateur\" />
              <p> <span style=color:red;> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", []), "argent", []), "html", null, true);
        echo " </span> Ruby </p>
              ";
        // line 19
        echo "              ";
        // line 20
        echo "              <div class=\"animate-box\">
              ";
        // line 22
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bestiary");
        echo "\" >
                  <div class=\"animate-box-hidden\">
                  <p> <span style=color:orange;> [nb] </span> monstres </p>
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
        // line 37
        echo "                <div class=\"animate-box\">
                  <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventory");
        echo "\" >
                    <div class=\"animate-box-hidden\">
                      <p> <span style=color:orange;> [nb] </span> accessoires </p>
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
            ";
        // line 53
        echo "            </section>

            ";
        // line 56
        echo "            <section class=\"container-games\">
    
            ";
        // line 59
        echo "            <h1 id=\"'.self::TO_CLICK.'\"> Jouer à Pierre-Papier-Ciseaux ?</h1>
            <section class=\"container-head-PPC\">
            ";
        // line 62
        echo "            ";
        // line 63
        echo "            <article id=\"'.self::TO_HIDDEN.'\">
            <div id=\"'.self::TO_RESTORE.'\" class=\"head-PPC\">
            <h2>Les règles sont simple, choisissez entre Pierre Papier et Ciseaux.</h2>
            <h4>Pour chaque partie gagnée, vous obtenez un ruby!</h4>
            <p><b>Bonne chance :D</b></p>
            </div>
            ";
        // line 70
        echo "            <form method=\"post\" action=\"\">
            <div class=\"container-body-PPC\">
            ";
        // line 73
        echo "            <div>
            <label id=\"choixUser\" for=\"pierre\"><img src=\"/images/pierre.png\" alt=\"représente le signe de la pierre\" width=\"100px\" height=\"100px\" /></label>
            <input type=\"radio\" name=\"choix\" id=\"pierre\" value=\"1\" required />
            </div>
            ";
        // line 78
        echo "            <div>
            <label id=\"choixUser\" for=\"papier\"><img src=\"/images/papier.png\" alt=\"représente le signe de la feuille\" width=\"100px\" height=\"100px\" /></label>
            <input type=\"radio\" name=\"choix\" id=\"papier\" value=\"2\" required />
            </div>
            ";
        // line 83
        echo "            <div>
            <label id=\"choixUser\" for=\"ciseaux\"><img src=\"/images/ciseaux.png\" alt=\"représente le signe ciseaux\" width=\"100px\" height=\"100px\" /></label>
            <input type=\"radio\" name=\"choix\" id=\"ciseaux\" value=\"3\" required />
            </div>
            ";
        // line 88
        echo "            </div>
            ";
        // line 90
        echo "            <input type=\"submit\" name=\"submit_choix\" value=\"Valider le Choix\" />
            ";
        // line 92
        echo "            </form>
            </article>
            </section>
    
            ";
        // line 97
        echo "          </section>
            ";
        // line 99
        echo "            </div>
    
     

        </main>







";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "private-space/home_private.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 99,  211 => 97,  205 => 92,  202 => 90,  199 => 88,  193 => 83,  187 => 78,  181 => 73,  177 => 70,  169 => 63,  167 => 62,  163 => 59,  159 => 56,  155 => 53,  138 => 38,  135 => 37,  117 => 22,  114 => 20,  112 => 19,  108 => 17,  103 => 15,  100 => 14,  97 => 12,  91 => 8,  80 => 7,  68 => 4,  57 => 3,  27 => 1,);
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
              <h1> Bienvenue {{ app.user.nom }} </h1>
              <img class=\"glowing-img\" src=\"/images/panda-feroce2.png\" width=\"100px\" heigth=\"100px\" alt=\"avatar utilisateur\" />
              <p> <span style=color:red;> {{ app.user.argent}} </span> Ruby </p>
              {# <a href=\"{{path('delete_comment', {'id_article':article.id,'id_comment':comment.id} ) }}\"></a> #}
              {# ANIMATE BORDER BOX CONTAINER #}
              <div class=\"animate-box\">
              {# ANIMATE BORDER BOX => display Bestiary button #}
                <a href=\"{{path('bestiary')}}\" >
                  <div class=\"animate-box-hidden\">
                  <p> <span style=color:orange;> [nb] </span> monstres </p>
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
                  <a href=\"{{path('inventory')}}\" >
                    <div class=\"animate-box-hidden\">
                      <p> <span style=color:orange;> [nb] </span> accessoires </p>
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
            {# CLOSE user info section #}
            </section>

            {# OUVERTURE CONTAINER DES JEUX #}
            <section class=\"container-games\">
    
            {# HEAD SECTION JS: cliquable pour afficher le 1er jeux  #}
            <h1 id=\"'.self::TO_CLICK.'\"> Jouer à Pierre-Papier-Ciseaux ?</h1>
            <section class=\"container-head-PPC\">
            {# ARTICLE hidden jeuPPC pour JS #}
            {# hidden a remettre si event click #}
            <article id=\"'.self::TO_HIDDEN.'\">
            <div id=\"'.self::TO_RESTORE.'\" class=\"head-PPC\">
            <h2>Les règles sont simple, choisissez entre Pierre Papier et Ciseaux.</h2>
            <h4>Pour chaque partie gagnée, vous obtenez un ruby!</h4>
            <p><b>Bonne chance :D</b></p>
            </div>
            {# FORMULAIRE : corp du jeux => choix  #}
            <form method=\"post\" action=\"\">
            <div class=\"container-body-PPC\">
            {# Div pour choix 1 #}
            <div>
            <label id=\"choixUser\" for=\"pierre\"><img src=\"/images/pierre.png\" alt=\"représente le signe de la pierre\" width=\"100px\" height=\"100px\" /></label>
            <input type=\"radio\" name=\"choix\" id=\"pierre\" value=\"1\" required />
            </div>
            {# Div pour choix 2 #}
            <div>
            <label id=\"choixUser\" for=\"papier\"><img src=\"/images/papier.png\" alt=\"représente le signe de la feuille\" width=\"100px\" height=\"100px\" /></label>
            <input type=\"radio\" name=\"choix\" id=\"papier\" value=\"2\" required />
            </div>
            {# Div pour choix 3 #}
            <div>
            <label id=\"choixUser\" for=\"ciseaux\"><img src=\"/images/ciseaux.png\" alt=\"représente le signe ciseaux\" width=\"100px\" height=\"100px\" /></label>
            <input type=\"radio\" name=\"choix\" id=\"ciseaux\" value=\"3\" required />
            </div>
            {# CLOSE container-body du jeux #}
            </div>
            {# submit choix #}
            <input type=\"submit\" name=\"submit_choix\" value=\"Valider le Choix\" />
            {# CLOSE formulaire / article caché (container-body du jeux) / section (header cliquable) #}
            </form>
            </article>
            </section>
    
            {# CLOSE CONTAINER DES JEUX  #}
          </section>
            {# CLOSE CONTAINER-ROW #}
            </div>
    
     

        </main>







{% endblock %}", "private-space/home_private.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/Virtual-Animals/templates/private-space/home_private.html.twig");
    }
}
