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

/* private-space/bestiary.html.twig */
class __TwigTemplate_fca9bd0e9b1587c32966d3722ab0dca9594f46d57d630af4067b7a7e41015046 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("private-space/layout.html.twig", "private-space/bestiary.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/bestiary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/bestiary.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
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

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<header class=\"container-column container-row-left\">
        <h1> Virtual Animals </h1>
   
    <div class=\"container-column container-row-left subtitle\">
        <h1> Bestiaire - ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo " </h1>
    </div>
</header>
    <section class=\"container-bestiary\">
    <h2> Bestiaire </h2>
    <div class=\"container-row-reverse\">
";
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", []), "monstre", []));
        foreach ($context['_seq'] as $context["_key"] => $context["monstre"]) {
            // line 17
            echo "        ";
            // line 18
            echo "        <article class=\"container-monster\">
            ";
            // line 20
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["monstre"], "id", []) == 14)) {
                // line 21
                echo "                <h5> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "nom", []), "html", null, true);
                echo " ❤ </h5>     
            ";
            } else {
                // line 23
                echo "                <h5> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "nom", []), "html", null, true);
                echo "</h5> 
            ";
            }
            // line 25
            echo "            ";
            // line 26
            echo "            <div class=\"container-column\" width=\"100%\">
                ";
            // line 28
            echo "                <div class=\"popover popover-bottom\">
                    <button class=\"btn-hover\">  ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "race", []), "nom", []), "html", null, true);
            echo " </button>
                    ";
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "description", []), "html", null, true);
            echo "
                    <div class=\"popover-container\">
                        <div class=\"card container-pop-up\">
                            <div class=\"card-header\"></div>
                            <div class=\"card-body\">
                                <h2> ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "nom", []), "html", null, true);
            echo "  </h2>
                                <ul>
                                    <li> PV : ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "pv", []), "html", null, true);
            echo " </li>
                                    <li> MP : ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "mp", []), "html", null, true);
            echo " </li>
                                    <li> Force : ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "puissance", []), "html", null, true);
            echo " </li>
                                    <li>  </li>
                                    <li> Defense : ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "defense", []), "html", null, true);
            echo " </li>
                                    <li>  Vitesse : ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "vitesse", []), "html", null, true);
            echo " </li>
                                    <li>  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                ";
            // line 51
            echo "                <div class=\"\">
                    <img src=";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "photo", []), "html", null, true);
            echo " class=\"glowing-img\" width=\"200px\" height=\"200px\" alt=\"image du monstre\"/>
                </div> 
";
            // line 55
            echo "                ";
            // line 56
            echo "                <div class=\"container-row\">
                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["monstre"], "element", []));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 58
                echo "                        <img src=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "image", []), "html", null, true);
                echo " class=\"glowing-img\" width=\"40px\" height=\"40px\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "nom", []), "html", null, true);
                echo "\" alt=\"image de l'element ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "nom", []), "html", null, true);
                echo "\"/>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                </div> 
               
            ";
            // line 63
            echo "            </div>

             ";
            // line 73
            echo "        </article>  
    ";
            // line 75
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monstre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "private-space/bestiary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 76,  222 => 75,  219 => 73,  215 => 63,  211 => 60,  198 => 58,  194 => 57,  191 => 56,  189 => 55,  184 => 52,  181 => 51,  171 => 43,  167 => 42,  162 => 40,  158 => 39,  154 => 38,  149 => 36,  140 => 31,  136 => 29,  133 => 28,  130 => 26,  128 => 25,  122 => 23,  116 => 21,  113 => 20,  110 => 18,  108 => 17,  103 => 16,  94 => 9,  86 => 4,  77 => 3,  57 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'private-space/layout.html.twig' %}
{% block title %} {{parent()}} {% endblock %}
{% block body %}
{{parent()}}
<header class=\"container-column container-row-left\">
        <h1> Virtual Animals </h1>
   
    <div class=\"container-column container-row-left subtitle\">
        <h1> Bestiaire - {{ app.user.nom}} </h1>
    </div>
</header>
    <section class=\"container-bestiary\">
    <h2> Bestiaire </h2>
    <div class=\"container-row-reverse\">
{# Monsters data #}
    {% for monstre in app.user.monstre %}
        {# 1 monster = un article container-monster #}
        <article class=\"container-monster\">
            {# Spécificité de monstre : si Shiva affiche le coeur sur son nom #}
            {% if (monstre.id == 14) %}
                <h5> {{ monstre.nom }} ❤ </h5>     
            {% else %}
                <h5> {{ monstre.nom }}</h5> 
            {% endif %}
            {# column pour agencement (centrage de tous les block infos) #}
            <div class=\"container-column\" width=\"100%\">
                {# STATS DES MONSTRES dans le pop-up #}
                <div class=\"popover popover-bottom\">
                    <button class=\"btn-hover\">  {{ monstre.race.nom}} </button>
                    {# PAS de <p> bug de pop up #}
                    {{ monstre.description }}
                    <div class=\"popover-container\">
                        <div class=\"card container-pop-up\">
                            <div class=\"card-header\"></div>
                            <div class=\"card-body\">
                                <h2> {{ monstre.classe.nom }}  </h2>
                                <ul>
                                    <li> PV : {{ monstre.classe.pv }} </li>
                                    <li> MP : {{ monstre.classe.mp }} </li>
                                    <li> Force : {{ monstre.classe.puissance }} </li>
                                    <li>  </li>
                                    <li> Defense : {{ monstre.classe.defense }} </li>
                                    <li>  Vitesse : {{ monstre.classe.vitesse }} </li>
                                    <li>  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {# Image monstre #}
                <div class=\"\">
                    <img src={{ monstre.photo }} class=\"glowing-img\" width=\"200px\" height=\"200px\" alt=\"image du monstre\"/>
                </div> 
{# ELEMENTS #}
                {# <hr width=\"100%\"> #}
                <div class=\"container-row\">
                    {% for element in monstre.element %}
                        <img src={{ element.image }} class=\"glowing-img\" width=\"40px\" height=\"40px\" title=\"{{ element.nom }}\" alt=\"image de l'element {{ element.nom }}\"/>
                    {% endfor %}
                </div> 
               
            {# CLOSE container-column #}
            </div>

             {# <p> Classe : {{ monstre.classe.nom }} <span> 
                    {{ monstre.classe.pv }} PV </br>
                    {{ monstre.classe.mp }} MP </br> 
                Force : {{ monstre.classe.puissance }} </br> 
                Defense : {{ monstre.classe.defense }}</br> 
                Vitesse : {{ monstre.classe.vitesse }}
                </span></p>
            <img src={{ monstre.photo }} class=\"glowing-img\" width=\"150px\" height=\"150px\" alt=\"image du monstre\"/> #}
        </article>  
    {# </main>   #}
    {% endfor %}

    </div>
</section>
{% endblock %}


       


", "private-space/bestiary.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/private-space/bestiary.html.twig");
    }
}
