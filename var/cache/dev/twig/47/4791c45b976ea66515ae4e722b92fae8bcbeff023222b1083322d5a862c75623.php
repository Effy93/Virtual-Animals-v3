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

/* admin/home_admin.html.twig */
class __TwigTemplate_cae26d34be9f119b58166a2baa11a2d4e6b642eae5f43bf35bb8ec810797174a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/home_admin.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home_admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/home_admin.html.twig"));

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
<header>
    <h1> Administration </h1>
</header>

<main>
    <div>
        <h3> [tasks] </h3>
        <ul>
            <li> TTT : cheat a corriger </li>
            <li> Edition d'un monstre : controller a faire </li>
            <li> Modification / Suppression des news </li>
            <li> Système de gestion des rôles </li>
        </ul>
        
    </div> 
  
        ";
        // line 24
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method") == "add_news")) {
            // line 25
            echo "            <div class=\"container-task\">
                <h5> Publier un nouvel évènement  </h5>
                <a href='";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
            echo "'> <button class=\"btn btn-error\">  Retour </button> </a>
                <div class=\"container-row\">
                    <div class=\"container-form\"> 
                    
                ";
            // line 32
            echo "
        ";
            // line 34
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method") == "edit_monster")) {
            // line 35
            echo "            <div class=\"container-task\">
                <h5> Proposer un nouveau monstre </h5> 
                ";
            // line 38
            echo "                <a href='";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
            echo "'> <button class=\"btn btn-error\">  Retour </button> </a> 
                ";
            // line 40
            echo "                <div class=\"container-row\">   
                    <div class=\"container-form\">
                        
                ";
            // line 44
            echo "
        ";
        } else {
            // line 46
            echo "            ";
            // line 47
            echo "            <div class=\"container-admin\">
                <div class=\"container-row\">
                    <div class=\"container-task\">
                        <h5>  Mes news </h5>
                        <a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_news");
            echo "\"> <button class=\"btn btn-primary\"> News </button> </a>
                        <p> [ liste déroulante de mes événements ]</p>
                    </div> 
                    <div class=\"container-task\">
                        <h5> Mes monstres </h5>
                        <a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_monster");
            echo "\"> <button class=\"btn btn-success\"> Edit </button> </a> 
                        <p> [ liste d'affichage des monstres ]</p>
                        ";
            // line 60
            echo "                    </div> 
                    <div class=\"container-task\">
                        <h5> Gestion des rôles  </h5>
                        <p> [ Bientot ]</p>
                        <p> [ formulaire ]</p>
                        <p> [ liste déroulante ]</p>
                    </div>
                
        ";
        }
        // line 69
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/home_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 69,  167 => 60,  162 => 56,  154 => 51,  148 => 47,  146 => 46,  142 => 44,  137 => 40,  132 => 38,  128 => 35,  125 => 34,  122 => 32,  115 => 27,  111 => 25,  108 => 24,  88 => 6,  77 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %} {{parent()}} {% endblock %}

{% block body %} 
{{parent()}}
<header>
    <h1> Administration </h1>
</header>

<main>
    <div>
        <h3> [tasks] </h3>
        <ul>
            <li> TTT : cheat a corriger </li>
            <li> Edition d'un monstre : controller a faire </li>
            <li> Modification / Suppression des news </li>
            <li> Système de gestion des rôles </li>
        </ul>
        
    </div> 
  
        {# add_news #}
        {% if app.request.attributes.get('_route') == 'add_news' %}
            <div class=\"container-task\">
                <h5> Publier un nouvel évènement  </h5>
                <a href='{{ path('home_admin') }}'> <button class=\"btn btn-error\">  Retour </button> </a>
                <div class=\"container-row\">
                    <div class=\"container-form\"> 
                    
                {# </div>  #}

        {# edit_monster #}
        {% elseif app.request.attributes.get('_route') == 'edit_monster' %}
            <div class=\"container-task\">
                <h5> Proposer un nouveau monstre </h5> 
                {# <div class=\"container-row-reverse\"> #}
                <a href='{{ path('home_admin') }}'> <button class=\"btn btn-error\">  Retour </button> </a> 
                {# </div>    #}
                <div class=\"container-row\">   
                    <div class=\"container-form\">
                        
                {# </div>  #}

        {% else %}
            {# général #}
            <div class=\"container-admin\">
                <div class=\"container-row\">
                    <div class=\"container-task\">
                        <h5>  Mes news </h5>
                        <a href=\"{{ path('add_news') }}\"> <button class=\"btn btn-primary\"> News </button> </a>
                        <p> [ liste déroulante de mes événements ]</p>
                    </div> 
                    <div class=\"container-task\">
                        <h5> Mes monstres </h5>
                        <a href=\"{{ path('edit_monster') }}\"> <button class=\"btn btn-success\"> Edit </button> </a> 
                        <p> [ liste d'affichage des monstres ]</p>
                        {# <a href=\"{{ path('edit_monster') }}\"> <button class=\"btn btn-primary\"> Edit </button> </a> 
                        <a href=\"{{ path('edit_monster') }}\"> <button class=\"btn btn-error\"> Supprimer </button> </a>  #}
                    </div> 
                    <div class=\"container-task\">
                        <h5> Gestion des rôles  </h5>
                        <p> [ Bientot ]</p>
                        <p> [ formulaire ]</p>
                        <p> [ liste déroulante ]</p>
                    </div>
                
        {% endif %}



{% endblock %}", "admin/home_admin.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/admin/home_admin.html.twig");
    }
}
