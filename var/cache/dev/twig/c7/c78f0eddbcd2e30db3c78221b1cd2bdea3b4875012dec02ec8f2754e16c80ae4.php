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
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "session", []), "flashBag", []), "get", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "        ";
            // line 10
            echo "        <div class=\"modal active modal-sm\" id=\"modal-id\">
            <div class=\"modal-container\">
                <div class=\"modal-header\">
                    <a href=\"";
            // line 13
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
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "session", []), "flashBag", []), "get", [0 => "fail"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "        <div class=\"modal active modal-sm\" id=\"modal-id\">
            <div class=\"modal-container\">
                <div class=\"modal-header\">
                    <a href=\"";
            // line 25
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
        // line 31
        echo "
<!-- ACHAT JEUX -->
    <div class=\"container-bestiary\">
        <h2> Mini-jeux </h2>
        <section class=\"container-row-reverse\">
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jeux"]) || array_key_exists("jeux", $context) ? $context["jeux"] : (function () { throw new RuntimeError('Variable "jeux" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 37
            echo "                ";
            // line 38
            echo "                ";
            if (twig_in_filter($context["jeu"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", []), "jeux", []))) {
                // line 39
                echo "                    ";
                // line 40
                echo "                    ";
            } else {
                // line 41
                echo "                        <article class=\"game-shop\">
                            <h5> ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "nom", []), "html", null, true);
                echo " </h5> 
                                <div class=\"animate-box\">
                                    <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy_game", ["id" => twig_get_attribute($this->env, $this->source, $context["jeu"], "id", [])]), "html", null, true);
                echo "\">  
                                        <div class=\"animate-box-hidden\">
                                            ";
                // line 46
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["jeu"], "tarif", []), "prix", []) == 0)) {
                    // line 47
                    echo "                                                <p class=\"glowing\">  GRATUIT  </p>
                                            ";
                } else {
                    // line 49
                    echo "                                                <p style=color:orange;>  ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["jeu"], "tarif", []), "prix", []), "html", null, true);
                    echo " ruby </p>
                                            ";
                }
                // line 51
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
            // line 65
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
        // line 72
        echo "    <section class=\"container-bestiary\">
        <h2> Élevage monstrueux </h2>
        <div class=\"container-row-reverse\">
            ";
        // line 76
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monstres"]) || array_key_exists("monstres", $context) ? $context["monstres"] : (function () { throw new RuntimeError('Variable "monstres" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["monstre"]) {
            // line 77
            echo "                ";
            // line 78
            echo "                ";
            if (twig_in_filter($context["monstre"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", []), "monstre", []))) {
                echo " 
                ";
            } else {
                // line 80
                echo "                    <article class=\"container-monster\">
                        <h5> ";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "nom", []), "html", null, true);
                echo "</h5> 
                        <p style=color:orange;> ";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "description", []), "html", null, true);
                echo " </p>
                        ";
                // line 84
                echo "                        <p> Classe : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "nom", []), "html", null, true);
                echo " <span> 
                                ";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "pv", []), "html", null, true);
                echo " PV </br>
                                ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "mp", []), "html", null, true);
                echo " MP </br> 
                            Force : ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "puissance", []), "html", null, true);
                echo " </br> 
                            Defense : ";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "defense", []), "html", null, true);
                echo "</br> 
                            Vitesse : ";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "vitesse", []), "html", null, true);
                echo "
                            </span>
                        </p>
                        <img src=";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "photo", []), "html", null, true);
                echo " class=\"glowing-img\" width=\"150px\" height=\"150px\" alt=\"image du monstre\"/>
                        ";
                // line 94
                echo "                        <div class=\"animate-box\">
                            <a href=\"";
                // line 95
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy_monster", ["id" => twig_get_attribute($this->env, $this->source, $context["monstre"], "id", [])]), "html", null, true);
                echo "\">  
                                <div class=\"animate-box-hidden\">
                                    <p style=color:orange;>  ";
                // line 97
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
                    </article>
                ";
            }
            // line 111
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monstre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "            </div>
        </section>



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
        return array (  307 => 112,  301 => 111,  284 => 97,  279 => 95,  276 => 94,  272 => 92,  266 => 89,  262 => 88,  258 => 87,  254 => 86,  250 => 85,  245 => 84,  241 => 82,  237 => 81,  234 => 80,  228 => 78,  226 => 77,  221 => 76,  216 => 72,  203 => 65,  187 => 51,  181 => 49,  177 => 47,  175 => 46,  170 => 44,  165 => 42,  162 => 41,  159 => 40,  157 => 39,  154 => 38,  152 => 37,  148 => 36,  141 => 31,  129 => 25,  124 => 22,  119 => 21,  117 => 20,  104 => 13,  99 => 10,  97 => 9,  92 => 8,  86 => 5,  77 => 4,  57 => 2,  27 => 1,);
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
                        <h5> {{ monstre.nom }}</h5> 
                        <p style=color:orange;> {{monstre.description}} </p>
                        {# Pop-up stats des monstres #}
                        <p> Classe : {{ monstre.classe.nom }} <span> 
                                {{ monstre.classe.pv }} PV </br>
                                {{ monstre.classe.mp }} MP </br> 
                            Force : {{ monstre.classe.puissance }} </br> 
                            Defense : {{ monstre.classe.defense }}</br> 
                            Vitesse : {{ monstre.classe.vitesse }}
                            </span>
                        </p>
                        <img src={{ monstre.photo }} class=\"glowing-img\" width=\"150px\" height=\"150px\" alt=\"image du monstre\"/>
                        {#  ACHAT  => ANIMATE BORDER BOX #}
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
                    </article>
                {% endif %}
            {% endfor %}
            </div>
        </section>



{% endblock %}", "shop/shop.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/shop/shop.html.twig");
    }
}
