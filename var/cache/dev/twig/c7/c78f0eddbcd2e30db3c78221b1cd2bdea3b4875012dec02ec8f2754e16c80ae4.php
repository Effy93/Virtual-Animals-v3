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

/* shop/shop.html.twig */
class __TwigTemplate_777ee2976a012538746307d01bb3063f9d082084d45bfb9f377bf07e85104344 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("shop/layout.html.twig", "shop/shop.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "shop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/shop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/shop.html.twig"));

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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
 
<!-- POP UP ACHAT -->
    ";
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "session", []), "flashBag", []), "get", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "        ";
            // line 11
            echo "        <div class=\"modal active modal-sm\" id=\"modal-id\">
            <div class=\"modal-container\">
                <div class=\"modal-header\">
                    <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\" class=\"btn btn-clear float-right\" aria-label=\"Close\"></a>
                    <div class=\"modal-title h5\"> Merci pour votre achat !</div>
                    <p> Cet article a bien été ajouté a votre bestiaire </p>
                </div>
            </div>
          </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    ";
        // line 22
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "session", []), "flashBag", []), "get", [0 => "fail"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            echo "        <div class=\"modal active modal-sm\" id=\"modal-id\">
            <div class=\"modal-container\">
                <div class=\"modal-header\">
                    <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\" class=\"btn btn-clear float-right\" aria-label=\"Close\"></a>
                    <div class=\"modal-title h5\"> Pas assez de thunes boloss !</div>
                </div>
            </div>
          </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
<!-- ACHAT JEUX -->
    <div class=\"container-bestiary\">
        <h2> Mini-jeux </h2>
        <section class=\"container-row-reverse\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jeux"]) || array_key_exists("jeux", $context) ? $context["jeux"] : (function () { throw new RuntimeError('Variable "jeux" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 38
            echo "                ";
            // line 39
            echo "                ";
            if (twig_in_filter($context["jeu"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", []), "jeux", []))) {
                // line 40
                echo "                    ";
                // line 41
                echo "                    ";
            } else {
                // line 42
                echo "                        <article class=\"game-shop\">
                            <h5> ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "nom", []), "html", null, true);
                echo " </h5> 
                                <div class=\"animate-box\">
                                    <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy_game", ["id" => twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [])]), "html", null, true);
                echo "\">  
                                        <div class=\"animate-box-hidden\">
                                            ";
                // line 47
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["jeu"], "tarif", []), "prix", []) == 0)) {
                    // line 48
                    echo "                                                <p class=\"glowing\">  GRATUIT  </p>
                                            ";
                } else {
                    // line 50
                    echo "                                                <p style=color:orange;>  ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["jeu"], "tarif", []), "prix", []), "html", null, true);
                    echo " ruby </p>
                                            ";
                }
                // line 52
                echo "                                            <button>
                                                <span>
                                                    <span>
                                                        <span  data-attr-span=\"J'achete !\">  Acheter
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                           
                        </article>
                    ";
            }
            // line 66
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "    
            </section>
    </div>

    

<!-- ACHAT MONSTRES -->
    ";
        // line 74
        echo "    <section class=\"container-bestiary\">
        <h2> Élevage monstrueux </h2>
        <div class=\"container-row-reverse\">
            ";
        // line 78
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monstres"]) || array_key_exists("monstres", $context) ? $context["monstres"] : (function () { throw new RuntimeError('Variable "monstres" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["monstre"]) {
            // line 79
            echo "                ";
            // line 80
            echo "                ";
            if (twig_in_filter($context["monstre"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", []), "monstre", []))) {
                echo " 
                ";
            } else {
                // line 82
                echo "    
    
                <article class=\"container-monster\">
                    ";
                // line 85
                if ((twig_get_attribute($this->env, $this->source, $context["monstre"], "id", []) == 14)) {
                    // line 86
                    echo "                        <h5> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "nom", []), "html", null, true);
                    echo " ❤ </h5>     
                    ";
                } else {
                    // line 88
                    echo "                        <h5> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "nom", []), "html", null, true);
                    echo "</h5> 
                    ";
                }
                // line 90
                echo "                     ";
                // line 91
                echo "                    <div class=\"container-column\" width=\"100%\">
                        <div class=\"popover popover-bottom\">
                            <button class=\"btn-hover\">  ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "race", []), "nom", []), "html", null, true);
                echo " </button>
                            ";
                // line 95
                echo "                            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "description", []), "html", null, true);
                echo "
                            <div class=\"popover-container\">
                                <div class=\"card container-pop-up\">
                                    <div class=\"card-header\"></div>
                                    <div class=\"card-body\">
                                        <h2> ";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "nom", []), "html", null, true);
                echo "  </h2>
                                        <ul>
                                            <li> PV :  ";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "pv", []), "html", null, true);
                echo " </li>
                                            <li> MP : ";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "mp", []), "html", null, true);
                echo "  </li>
                                            <li> Force : ";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "puissance", []), "html", null, true);
                echo " </li>
                                            <li>  </li>
                                            <li> Defense : ";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "defense", []), "html", null, true);
                echo " </li>
                                            <li>  Vitesse : ";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "vitesse", []), "html", null, true);
                echo " </li>
                                            <li>  </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"\">
                            <img src=";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "photo", []), "html", null, true);
                echo " class=\"glowing-img\" width=\"200px\" height=\"200px\" alt=\"image du monstre\"/>
                        </div> 
                        <div class=\"container-row\">
                            ";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["monstre"], "element", []));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 120
                    echo "                                <img src=";
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
                // line 122
                echo "                        </div> 
                            <div>
                                <div class=\"animate-box\">
                                    <a href=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy_monster", ["id" => twig_get_attribute($this->env, $this->source, $context["monstre"], "id", [])]), "html", null, true);
                echo "\">  
                                        <div class=\"animate-box-hidden\">
                                            <p style=color:orange;>  ";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "tarif", []), "prix", []), "html", null, true);
                echo " ruby </p>
                                            <button>
                                                <span>
                                                    <span>
                                                        <span  data-attr-span=\"J'achete !\">  Acheter
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        
                           
                       
                       
                    </div>
            </article>
                ";
            }
            // line 147
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monstre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "            </div>
        </section>

    </main>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shop/shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 148,  364 => 147,  341 => 127,  336 => 125,  331 => 122,  318 => 120,  314 => 119,  308 => 116,  296 => 107,  292 => 106,  287 => 104,  283 => 103,  279 => 102,  274 => 100,  265 => 95,  261 => 93,  257 => 91,  255 => 90,  249 => 88,  243 => 86,  241 => 85,  236 => 82,  230 => 80,  228 => 79,  223 => 78,  218 => 74,  204 => 66,  188 => 52,  182 => 50,  178 => 48,  176 => 47,  171 => 45,  166 => 43,  163 => 42,  160 => 41,  158 => 40,  155 => 39,  153 => 38,  149 => 37,  142 => 32,  130 => 26,  125 => 23,  120 => 22,  118 => 21,  105 => 14,  100 => 11,  98 => 10,  93 => 9,  86 => 5,  77 => 4,  57 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'shop/layout.html.twig' %}
{% block title %} {{parent()}} {% endblock %}

{% block body %}
    {{parent()}}
 
<!-- POP UP ACHAT -->
    {# Messages flash #}
    {% for message in app.session.flashBag.get('success') %}
        {# Modal pop-up confirmation d'achat #}
        <div class=\"modal active modal-sm\" id=\"modal-id\">
            <div class=\"modal-container\">
                <div class=\"modal-header\">
                    <a href=\"{{path('shop')}}\" class=\"btn btn-clear float-right\" aria-label=\"Close\"></a>
                    <div class=\"modal-title h5\"> Merci pour votre achat !</div>
                    <p> Cet article a bien été ajouté a votre bestiaire </p>
                </div>
            </div>
          </div>
    {% endfor %}
    {# FAIL #}
    {% for message in app.session.flashBag.get('fail') %}
        <div class=\"modal active modal-sm\" id=\"modal-id\">
            <div class=\"modal-container\">
                <div class=\"modal-header\">
                    <a href=\"{{path('shop')}}\" class=\"btn btn-clear float-right\" aria-label=\"Close\"></a>
                    <div class=\"modal-title h5\"> Pas assez de thunes boloss !</div>
                </div>
            </div>
          </div>
    {% endfor %}

<!-- ACHAT JEUX -->
    <div class=\"container-bestiary\">
        <h2> Mini-jeux </h2>
        <section class=\"container-row-reverse\">
            {% for jeu in jeux %}
                {# Si l'utilisateur possede deja le jeu rien ne s'affiche, sinon#}
                {% if jeu in app.user.jeux %}
                    {# <p> Plus aucun jeux en réserve !</p>  #}
                    {% else %}
                        <article class=\"game-shop\">
                            <h5> {{ jeu.nom }} </h5> 
                                <div class=\"animate-box\">
                                    <a href=\"{{ path('buy_game', {'id':jeu.id}) }}\">  
                                        <div class=\"animate-box-hidden\">
                                            {% if jeu.tarif.prix == 0 %}
                                                <p class=\"glowing\">  GRATUIT  </p>
                                            {% else %}
                                                <p style=color:orange;>  {{ jeu.tarif.prix }} ruby </p>
                                            {% endif %}
                                            <button>
                                                <span>
                                                    <span>
                                                        <span  data-attr-span=\"J'achete !\">  Acheter
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                           
                        </article>
                    {% endif %}
                {% endfor %}    
            </section>
    </div>

    

<!-- ACHAT MONSTRES -->
    {# Ouverture container #}
    <section class=\"container-bestiary\">
        <h2> Élevage monstrueux </h2>
        <div class=\"container-row-reverse\">
            {# Pour chaque monstre de l'entité Monstre, affiche #}
            {% for monstre in monstres %}
                {# Si l'utilisateur possede deja le monstre rien ne s'affiche, sinon #}
                {% if monstre in app.user.monstre %} 
                {% else %}
    
    
                <article class=\"container-monster\">
                    {% if (monstre.id == 14) %}
                        <h5> {{ monstre.nom }} ❤ </h5>     
                    {% else %}
                        <h5> {{ monstre.nom }}</h5> 
                    {% endif %}
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
                                            <li> PV :  {{ monstre.classe.pv }} </li>
                                            <li> MP : {{ monstre.classe.mp }}  </li>
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
                        
                        <div class=\"\">
                            <img src={{ monstre.photo }} class=\"glowing-img\" width=\"200px\" height=\"200px\" alt=\"image du monstre\"/>
                        </div> 
                        <div class=\"container-row\">
                            {% for element in monstre.element %}
                                <img src={{ element.image }} class=\"glowing-img\" width=\"40px\" height=\"40px\" title=\"{{ element.nom }}\" alt=\"image de l'element {{ element.nom }}\"/>
                            {% endfor %}
                        </div> 
                            <div>
                                <div class=\"animate-box\">
                                    <a href=\"{{ path('buy_monster', {'id':monstre.id}) }}\">  
                                        <div class=\"animate-box-hidden\">
                                            <p style=color:orange;>  {{ monstre.tarif.prix }} ruby </p>
                                            <button>
                                                <span>
                                                    <span>
                                                        <span  data-attr-span=\"J'achete !\">  Acheter
                                                        </span>
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        
                           
                       
                       
                    </div>
            </article>
                {% endif %}
            {% endfor %}
            </div>
        </section>

    </main>

{% endblock %}", "shop/shop.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/shop/shop.html.twig");
    }
}
