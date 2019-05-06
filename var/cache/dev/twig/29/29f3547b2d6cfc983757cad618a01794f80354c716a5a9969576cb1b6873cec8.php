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

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        $this->displayParentBlock("body", $context, $blocks);
        echo " 

<section class=\"container-bestiary\">
    <h2> Bestiaire </h2>
    <div class=\"container-row-reverse\">

         

            ";
        // line 23
        echo "

    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", []), "monstre", []));
        foreach ($context['_seq'] as $context["_key"] => $context["monstre"]) {
            // line 26
            echo "    
    
        <article class=\"container-monster\">
            <h5> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "nom", []), "html", null, true);
            echo "</h5> 
             ";
            // line 31
            echo "            <div class=\"container-column\" width=\"100%\">
                <div class=\"popover popover-bottom\">
                    <button class=\"btn-hover\">  ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "race", []), "nom", []), "html", null, true);
            echo " </button>
                    ";
            // line 35
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "description", []), "html", null, true);
            echo "
                    <div class=\"popover-container\">
                        <div class=\"card container-pop-up\">
                            <div class=\"card-header\"></div>
                            <div class=\"card-body\">
                                <h2> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "nom", []), "html", null, true);
            echo "  </h2>
                                <ul>
                                    <li>  ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "pv", []), "html", null, true);
            echo " PV </li>
                                    <li> ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "mp", []), "html", null, true);
            echo " MP  </li>
                                    <li> Force : ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "puissance", []), "html", null, true);
            echo " </li>
                                    <li>  </li>
                                    <li> Defense : ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "defense", []), "html", null, true);
            echo " </li>
                                    <li>  Vitesse : ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "vitesse", []), "html", null, true);
            echo " </li>
                                    <li>  </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <img src=";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "photo", []), "html", null, true);
            echo " class=\"glowing-img\" width=\"200px\" height=\"200px\" alt=\"image du monstre\"/>
                </div> 
                <div class=\"container-row\">
                    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["monstre"], "element", []));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 60
                echo "                        ";
                // line 61
                echo "                            ";
                // line 62
                echo "                            <img src=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "image", []), "html", null, true);
                echo " class=\"glowing-img\" width=\"40px\" height=\"40px\" alt=\"image de l'element\"/>
                        ";
                // line 64
                echo "                        
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </div> 
               
            </div>

             ";
            // line 78
            echo "        </article>  
    ";
            // line 80
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monstre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
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
        return array (  206 => 81,  200 => 80,  197 => 78,  191 => 66,  184 => 64,  179 => 62,  177 => 61,  175 => 60,  171 => 59,  165 => 56,  153 => 47,  149 => 46,  144 => 44,  140 => 43,  136 => 42,  131 => 40,  122 => 35,  118 => 33,  114 => 31,  110 => 29,  105 => 26,  101 => 25,  97 => 23,  86 => 14,  77 => 13,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'private-space/layout.html.twig' %}

{% block title %} {{parent()}} {% endblock %}

{# {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://unpkg.com/spectre.css/dist/spectre.min.css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/spectre.css/dist/spectre-exp.min.css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/spectre.css/dist/spectre-icons.min.css\">
    <link rel=\"stylesheet\" href=\"/style.css\">
    <link rel=\"icon\" type=\"image/png\" href=\"/images/panda-feroce2.png\"> 
{% endblock %} #}

{% block body %}
{{parent()}} 

<section class=\"container-bestiary\">
    <h2> Bestiaire </h2>
    <div class=\"container-row-reverse\">

         

            {# <div class=\"container-absolute\"> #}


    {% for monstre in app.user.monstre %}
    
    
        <article class=\"container-monster\">
            <h5> {{ monstre.nom }}</h5> 
             {# ECHO STATS DES MONSTRES dans le pop-up #}
            <div class=\"container-column\" width=\"100%\">
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
                                    <li>  {{ monstre.classe.pv }} PV </li>
                                    <li> {{ monstre.classe.mp }} MP  </li>
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
                
                <div>
                    <img src={{ monstre.photo }} class=\"glowing-img\" width=\"200px\" height=\"200px\" alt=\"image du monstre\"/>
                </div> 
                <div class=\"container-row\">
                    {% for element in monstre.element %}
                        {# <div class=\"\"> #}
                            {# <p> {{ element.nom }}</p> #}
                            <img src={{ element.image }} class=\"glowing-img\" width=\"40px\" height=\"40px\" alt=\"image de l'element\"/>
                        {# </div> #}
                        
                    {% endfor %}
                </div> 
               
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
