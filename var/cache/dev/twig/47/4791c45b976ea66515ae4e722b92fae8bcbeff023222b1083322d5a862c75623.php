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
   
  
        ";
        // line 15
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method") == "add_news")) {
            // line 16
            echo "            <div class=\"container-admin\">
                <h5> Publier un nouvel évènement  </h5>
                <a href='";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
            echo "'> <button class=\"btn btn-error\">  Retour </button> </a>
                <div class=\"container-row\">
                    <div class=\"container-form\"> 
                    
                ";
            // line 23
            echo "
        ";
            // line 25
            echo "        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method") == "edit_monster")) {
            // line 26
            echo "            <div class=\"container-admin\">
                <h5> Proposer un nouveau monstre </h5> 
                ";
            // line 29
            echo "                <a href='";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
            echo "'> <button class=\"btn btn-error\">  Retour </button> </a> 
                ";
            // line 31
            echo "                <div class=\"container-row\">   
                    <div class=\"container-form\">
                        
                ";
            // line 35
            echo "
        ";
        } else {
            // line 37
            echo "            ";
            // line 38
            echo "            <section class=\"container-add-news\">  
                <div class=\"container-task\">
                    <h3> [tasks] </h3>
                    <ul>
                        <li> TTT : cheat a corriger </li>
                        <li> Edition d'un monstre : controller a faire </li>
                        <li> Modification / Suppression des news </li>
                        <li>  Insérer id user lors de création article </li>
                        <li> Système de gestion des rôles </li>
                    </ul>
                </div>
                           
                <div class=\"container-task\">
                    <h5> Gestion des rôles  </h5>
                    <div class=\"task-item\">
                        <p> [ Bientot ]</p>
                        <p> [ formulaire ]</p>
                        <p> [ liste déroulante ]</p>
                    </div>
                </div>
        
            </section>
            
            <section class=\"container-add-news\">
                <div class=\"container-admin\"> 
                    <h5>  Mes news </h5>
                    <td class=>  <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_news");
            echo "\"> <button class=\"btn btn-primary \"> <i class=\"icon icon-plus\"></i> </button> </a> </td>
                    <div class=\"container-add-news\">
                        ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", []), "articles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 67
                echo "                        <table class=\"container-admin\">
                            <thead>
                                <tr>
                                    <th> <h5> ";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "nom", []), "html", null, true);
                echo " </h5> </th>
                                </tr>
                            </thead>
                            <tbody class=\"container-task\">
                                <tr class=\"task-item\">
                                        <td> <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_news", ["id" => twig_get_attribute($this->env, $this->source, $context["news"], "id", [])]), "html", null, true);
                echo "\"> <button class=\"btn btn-success\"> <i class=\"icon icon-edit\"></i></button> </a> 
                                    <a href=\"";
                // line 76
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_news");
                echo "\"> <button class=\"btn btn-error\"><i class=\"icon icon-stop\"></i> </button> </a> </td>
                                </tr> 
                            </tbody>
                            <tr class=\"container-task\">
                                <td class=\"task-item\"> <p> Publié le : <i> ";
                // line 80
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "date", []), "d-m-Y"), "html", null, true);
                echo " </i></p> </td>
                            </tr>
                        </table>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                    </div>
                 </div>
            </section>        

            <section>
                <div class=\"container-task\">
                    <h5> Mes monstres </h5>
                    <div class=\"task-item\">
                        ";
            // line 93
            echo "                            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_monster");
            echo "\"> <button class=\"btn btn-success\"> <i class=\"icon icon-edit\"></i> </button> </a> 
                            <p> [ liste d'affichage des monstres ]</p>
                            ";
            // line 97
            echo "                    </div> 
                </div>
            </section>         
        ";
        }
        // line 101
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
        return array (  232 => 101,  226 => 97,  220 => 93,  210 => 84,  200 => 80,  193 => 76,  189 => 75,  181 => 70,  176 => 67,  172 => 66,  167 => 64,  139 => 38,  137 => 37,  133 => 35,  128 => 31,  123 => 29,  119 => 26,  116 => 25,  113 => 23,  106 => 18,  102 => 16,  99 => 15,  88 => 6,  77 => 5,  57 => 3,  27 => 1,);
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
   
  
        {# add_news #}
        {% if app.request.attributes.get('_route') == 'add_news' %}
            <div class=\"container-admin\">
                <h5> Publier un nouvel évènement  </h5>
                <a href='{{ path('home_admin') }}'> <button class=\"btn btn-error\">  Retour </button> </a>
                <div class=\"container-row\">
                    <div class=\"container-form\"> 
                    
                {# </div>  #}

        {# edit_monster #}
        {% elseif app.request.attributes.get('_route') == 'edit_monster' %}
            <div class=\"container-admin\">
                <h5> Proposer un nouveau monstre </h5> 
                {# <div class=\"container-row-reverse\"> #}
                <a href='{{ path('home_admin') }}'> <button class=\"btn btn-error\">  Retour </button> </a> 
                {# </div>    #}
                <div class=\"container-row\">   
                    <div class=\"container-form\">
                        
                {# </div>  #}

        {% else %}
            {# général #}
            <section class=\"container-add-news\">  
                <div class=\"container-task\">
                    <h3> [tasks] </h3>
                    <ul>
                        <li> TTT : cheat a corriger </li>
                        <li> Edition d'un monstre : controller a faire </li>
                        <li> Modification / Suppression des news </li>
                        <li>  Insérer id user lors de création article </li>
                        <li> Système de gestion des rôles </li>
                    </ul>
                </div>
                           
                <div class=\"container-task\">
                    <h5> Gestion des rôles  </h5>
                    <div class=\"task-item\">
                        <p> [ Bientot ]</p>
                        <p> [ formulaire ]</p>
                        <p> [ liste déroulante ]</p>
                    </div>
                </div>
        
            </section>
            
            <section class=\"container-add-news\">
                <div class=\"container-admin\"> 
                    <h5>  Mes news </h5>
                    <td class=>  <a href=\"{{ path('add_news') }}\"> <button class=\"btn btn-primary \"> <i class=\"icon icon-plus\"></i> </button> </a> </td>
                    <div class=\"container-add-news\">
                        {% for news in app.user.articles %}
                        <table class=\"container-admin\">
                            <thead>
                                <tr>
                                    <th> <h5> {{ news.nom }} </h5> </th>
                                </tr>
                            </thead>
                            <tbody class=\"container-task\">
                                <tr class=\"task-item\">
                                        <td> <a href=\"{{path('edit_news', {'id':news.id} ) }}\"> <button class=\"btn btn-success\"> <i class=\"icon icon-edit\"></i></button> </a> 
                                    <a href=\"{{ path('add_news') }}\"> <button class=\"btn btn-error\"><i class=\"icon icon-stop\"></i> </button> </a> </td>
                                </tr> 
                            </tbody>
                            <tr class=\"container-task\">
                                <td class=\"task-item\"> <p> Publié le : <i> {{ news.date|date('d-m-Y') }} </i></p> </td>
                            </tr>
                        </table>
                        {% endfor %}
                    </div>
                 </div>
            </section>        

            <section>
                <div class=\"container-task\">
                    <h5> Mes monstres </h5>
                    <div class=\"task-item\">
                        {# bouton edition monstre #}
                            <a href=\"{{ path('edit_monster') }}\"> <button class=\"btn btn-success\"> <i class=\"icon icon-edit\"></i> </button> </a> 
                            <p> [ liste d'affichage des monstres ]</p>
                            {# <a href=\"{{ path('edit_monster') }}\"> <button class=\"btn btn-primary\"> Edit </button> </a> 
                            <a href=\"{{ path('edit_monster') }}\"> <button class=\"btn btn-error\"> Supprimer </button> </a>  #}
                    </div> 
                </div>
            </section>         
        {% endif %}
   
    {# </section> #}
{% endblock %}", "admin/home_admin.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/admin/home_admin.html.twig");
    }
}
