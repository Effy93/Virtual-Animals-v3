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

/* private-space/home-private.html.twig */
class __TwigTemplate_f97c3c66461b53b58d79582db8c18cdd4a40fe4692faf444ef8b4f6868c6866b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("private-space/layout.html.twig", "private-space/home-private.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/home-private.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/home-private.html.twig"));

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

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 
";
        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "


        ";
        // line 10
        echo "       <div class=\"container-row-reverse\">
        ";
        // line 12
        echo "        <section class=\"container-user-infos\">
          ";
        // line 14
        echo "       <img class=\"glowing-img\" src=\"/images/panda-feroce2.png\" width=\"100px\" heigth=\"100px\" alt=\"avatar utilisateur\" />
        ";
        // line 16
        echo "      <p> <span style=color:red;> [id] </span> Ruby </p>
      ";
        // line 18
        echo "      ";
        // line 19
        echo "        
        ";
        // line 21
        echo "     <div class=\"animate-box\">
        ";
        // line 23
        echo "        <a href=\"./page_private_bestiary.php\" >
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
        // line 39
        echo "        <div class=\"animate-box\">
        <a href=\"./page_private_inventory.php\" >
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
        // line 58
        echo "      </div>
        ";
        // line 60
        echo "        </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "private-space/home-private.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 60,  151 => 58,  131 => 39,  114 => 23,  111 => 21,  108 => 19,  106 => 18,  103 => 16,  100 => 14,  97 => 12,  94 => 10,  88 => 6,  77 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'private-space/layout.html.twig' %}

{% block title %} {{parent()}} {% endblock %}

{% block body %} 
{{parent()}}


        {# Container flex pour les infos et les jeux #}
       <div class=\"container-row-reverse\">
        {# OPEN user info section #}
        <section class=\"container-user-infos\">
          {# <h1> Bienvenue {{ user.nom }}</h1> #}
       <img class=\"glowing-img\" src=\"/images/panda-feroce2.png\" width=\"100px\" heigth=\"100px\" alt=\"avatar utilisateur\" />
        {# DISPLAY user ruby #}
      <p> <span style=color:red;> [id] </span> Ruby </p>
      {# <p> <span style=color:red;> {{ user.argent}} </span> Ruby </p> #}
      {# <a href=\"{{path('delete_comment', {'id_article':article.id,'id_comment':comment.id} ) }}\"></a> #}
        
        {# ANIMATE BORDER BOX CONTAINER #}
     <div class=\"animate-box\">
        {# ANIMATE BORDER BOX => display Bestiary button #}
        <a href=\"./page_private_bestiary.php\" >
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
        <a href=\"./page_private_inventory.php\" >
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

        {# CLOSE ANIMATE BORDER BOX #}
      </div>
        {# CLOSE user info section #}
        </section>

{% endblock %}", "private-space/home-private.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/Virtual-Animals/templates/private-space/home-private.html.twig");
    }
}
