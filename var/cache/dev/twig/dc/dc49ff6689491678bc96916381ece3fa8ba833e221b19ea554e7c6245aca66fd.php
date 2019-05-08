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
class __TwigTemplate_a2cfa8add0d44493adde46b3a6e8c95848521bdf7449453b8fe0abd0939d1e25 extends \Twig\Template
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
        <h1> Home - ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo " </h1>
    </div>
</header>
";
        // line 15
        echo "    <main class=\"container-main\">
        <div class=\"container-row-reverse\">
    <!-- INFOS USER -->
            ";
        // line 19
        echo "            <section class=\"container-user-infos\">
                <h5> Mon compte </h5>
                ";
        // line 25
        echo "                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "                    <div class=\"container-absolute\">
                        <div class=\"popover popover-right\">
                            <button class=\"btn-admin\"> Admin </button>
                            <div class=\"popover-container\">
                                <div class=\"card container-task\">
                                    <div class=\"card-header\"> </div>
                                    <div class=\"card-body\">
                                        ";
            // line 34
            echo "                                        <div class=\"container-task\">
                                            <h5> <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
            echo "\"> Évènement </a></h5>
                                            <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_news");
            echo "\">
                                                <button class=\"btn btn-success\"> Add news </button> 
                                            </a>
                                        </div> 
                                        <div class=\"container-task\">
                                            <h5> <a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
            echo "\"> Proposer un nouveau monstre </a></h5>
                                            <a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_monster");
            echo "\"> 
                                                <button class=\"btn btn-success\"> Edit </button> 
                                            </a> 
                                        </div> 
                                        <div class=\"container-task\">
                                            <h5> Gestion des rôles  </h5>
                                        </div>
                                    </div>
                                ";
            // line 51
            echo "                                </div>
                                <div class=\"card-footer\"> </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 57
        echo "
                <img class=\"glowing-img shake\" src=\"/images/logos/panda-feroce2.png\" width=\"100px\" heigth=\"100px\" alt=\"avatar utilisateur\" />
                <h4> ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo " </h4>
                <p> Inscrit depuis le : <span style=color:orange;> ";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", []), "date", []), "d-m-Y"), "html", null, true);
        echo " </span></p>
                <p> <span style=color:red;> ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", []), "argent", []), "html", null, true);
        echo " </span> Ruby </p>
";
        // line 65
        echo "                <div class=\"container-row\">
                    ";
        // line 67
        echo "                    <div class=\"animate-box\">
                        ";
        // line 69
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bestiary");
        echo "\">
                            <div class=\"animate-box-hidden\">
                                ";
        // line 74
        echo "                                <p> 
                                    <span style=color:orange;> ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", []), "monstre", []), "count", []), "html", null, true);
        echo " </span> monstres 
                                </p>
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
        // line 91
        echo "                    ";
        // line 92
        echo "                    <div class=\"animate-box\">
                        <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventory");
        echo "\">
                        <div class=\"animate-box-hidden\">
                            <p> <span style=color:orange;> ";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", []), "accessoire", []), "count", []), "html", null, true);
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
        // line 109
        echo "            </section>
";
        // line 113
        echo "    <!-- OUVERTURE CONTAINER DES JEUX  -->
        <section class=\"container-games\">
            ";
        // line 116
        echo "            <h5> Mes Jeux </h5>
            ";
        // line 117
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", []), "jeux", []), "count", []) == "0")) {
            // line 118
            echo "                <p> Aucun jeux disponibles </p>
                <div class=\"animate-box\">
                    <a href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\">  
                        <div class=\"animate-box-hidden\">
                            <p> <span style=color:orange;> <img class=\"glowing-img\" src=\"/images/logos/red-panda-sad.png\" width=\"100px\" height=\"100px\" alt=\"photo d'un panda triste, car aucun jeux n'est disponible !\"/> </span>  </p>
                            <button >
                                <span>
                                    <span>
                                        <span data-attr-span=\"Go boutique\"> Acheter des jeux    
                                        </span>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </a>
                </div>
            ";
        }
        // line 135
        echo "    <!-- LISTE DES JEUX -->
        <div class=\"games-list\">
                <ul>
                    ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", []), "jeux", []));
        foreach ($context['_seq'] as $context["_key"] => $context["jeux"]) {
            // line 139
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["jeux"], "id", []) == "1")) {
                // line 140
                echo "                            <li> <button class=\"btn btn-primary btn-lg\"> <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_ppc");
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeux"], "nom", []), "html", null, true);
                echo "</a> </button> </li>
                        ";
            }
            // line 142
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["jeux"], "id", []) == "2")) {
                // line 143
                echo "                            <li> <button class=\"btn btn-primary btn-lg\"> <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_ttt");
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeux"], "nom", []), "html", null, true);
                echo "</a> </button>  
                            </br>[Bug a gerer]</li>
                        ";
            }
            // line 146
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["jeux"], "id", []) == "3")) {
                // line 147
                echo "                            <li> <button class=\"btn btn-primary btn-lg\"> <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_bb");
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeux"], "nom", []), "html", null, true);
                echo "</a> </button> 
                        ";
            }
            // line 149
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeux'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "                        
                </ul>
        </div>

        ";
        // line 155
        echo "                ";
        // line 156
        echo "\t\t\t
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
        return array (  323 => 156,  321 => 155,  315 => 150,  309 => 149,  301 => 147,  298 => 146,  289 => 143,  286 => 142,  278 => 140,  275 => 139,  271 => 138,  266 => 135,  248 => 120,  244 => 118,  242 => 117,  239 => 116,  235 => 113,  232 => 109,  216 => 95,  211 => 93,  208 => 92,  206 => 91,  190 => 75,  187 => 74,  181 => 69,  178 => 67,  175 => 65,  171 => 61,  167 => 60,  163 => 59,  159 => 57,  151 => 51,  140 => 42,  136 => 41,  128 => 36,  124 => 35,  121 => 34,  112 => 26,  109 => 25,  105 => 19,  100 => 15,  94 => 9,  86 => 4,  77 => 3,  57 => 2,  27 => 1,);
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
        <h1> Home - {{ app.user.nom}} </h1>
    </div>
</header>
{# ########################################################### #}
{#            PRIVATE-PAGE : HOME - INFOS-USER                 #}
{# ########################################################### #}
    <main class=\"container-main\">
        <div class=\"container-row-reverse\">
    <!-- INFOS USER -->
            {# OPEN user info section #}
            <section class=\"container-user-infos\">
                <h5> Mon compte </h5>
                {# bouton admin POP UP  #}
{# ############################################################## #}
{#                      DEV BUTTON - ROLE_ADMIN                   #}
{# ############################################################## #}
                {% if (is_granted('ROLE_ADMIN')) %}
                    <div class=\"container-absolute\">
                        <div class=\"popover popover-right\">
                            <button class=\"btn-admin\"> Admin </button>
                            <div class=\"popover-container\">
                                <div class=\"card container-task\">
                                    <div class=\"card-header\"> </div>
                                    <div class=\"card-body\">
                                        {# <div class=\"container-column\"> #}
                                        <div class=\"container-task\">
                                            <h5> <a href=\"{{ path('home_admin') }}\"> Évènement </a></h5>
                                            <a href=\"{{ path('add_news') }}\">
                                                <button class=\"btn btn-success\"> Add news </button> 
                                            </a>
                                        </div> 
                                        <div class=\"container-task\">
                                            <h5> <a href=\"{{ path('home_admin') }}\"> Proposer un nouveau monstre </a></h5>
                                            <a href=\"{{ path('edit_monster') }}\"> 
                                                <button class=\"btn btn-success\"> Edit </button> 
                                            </a> 
                                        </div> 
                                        <div class=\"container-task\">
                                            <h5> Gestion des rôles  </h5>
                                        </div>
                                    </div>
                                {# </div> #}
                                </div>
                                <div class=\"card-footer\"> </div>
                            </div>
                        </div>
                    </div>
                {% endif %}

                <img class=\"glowing-img shake\" src=\"/images/logos/panda-feroce2.png\" width=\"100px\" heigth=\"100px\" alt=\"avatar utilisateur\" />
                <h4> {{ app.user.nom }} </h4>
                <p> Inscrit depuis le : <span style=color:orange;> {{ app.user.date|date('d-m-Y') }} </span></p>
                <p> <span style=color:red;> {{ app.user.argent}} </span> Ruby </p>
{# ############################################################## #}
{#                      ANIMATE-BOX bestiaire                     #}
{# ############################################################## #}
                <div class=\"container-row\">
                    {# ANIMATE BORDER BOX CONTAINER #}
                    <div class=\"animate-box\">
                        {# ANIMATE BORDER BOX => display Bestiary button #}
                        <a href=\"{{path('bestiary')}}\">
                            <div class=\"animate-box-hidden\">
                                {# {% for nb in nbMonstre %}
                                    <p> <span style=color:orange;> {{ nb.monstre }} </span> monstres </p>
                                    {% endfor %} #}
                                <p> 
                                    <span style=color:orange;> {{ app.user.monstre.count }} </span> monstres 
                                </p>
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
{# ############################################################## #}
{#                      ANIMATE-BOX inventaire                    #}
{# ############################################################## #}
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
{# ############################################################## #}
{#                           ANIMATE-BOX games                    #}
{# ############################################################## #}
    <!-- OUVERTURE CONTAINER DES JEUX  -->
        <section class=\"container-games\">
            {# Si aucun jeu acheter #}
            <h5> Mes Jeux </h5>
            {% if (app.user.jeux.count == '0' ) %}
                <p> Aucun jeux disponibles </p>
                <div class=\"animate-box\">
                    <a href=\"{{ path('shop') }}\">  
                        <div class=\"animate-box-hidden\">
                            <p> <span style=color:orange;> <img class=\"glowing-img\" src=\"/images/logos/red-panda-sad.png\" width=\"100px\" height=\"100px\" alt=\"photo d'un panda triste, car aucun jeux n'est disponible !\"/> </span>  </p>
                            <button >
                                <span>
                                    <span>
                                        <span data-attr-span=\"Go boutique\"> Acheter des jeux    
                                        </span>
                                    </span>
                                </span>
                            </button>
                        </div>
                    </a>
                </div>
            {% endif %}
    <!-- LISTE DES JEUX -->
        <div class=\"games-list\">
                <ul>
                    {% for jeux in app.user.jeux %}
                        {% if (jeux.id == '1') %}
                            <li> <button class=\"btn btn-primary btn-lg\"> <a href=\"{{path('home_ppc')}}\"> {{ jeux.nom }}</a> </button> </li>
                        {% endif %}
                        {% if (jeux.id == '2') %}
                            <li> <button class=\"btn btn-primary btn-lg\"> <a href=\"{{path('home_ttt')}}\"> {{ jeux.nom }}</a> </button>  
                            </br>[Bug a gerer]</li>
                        {% endif %}
                        {% if (jeux.id == '3') %}
                            <li> <button class=\"btn btn-primary btn-lg\"> <a href=\"{{path('home_bb')}}\"> {{ jeux.nom }}</a> </button> 
                        {% endif %}
                    {% endfor %}
                        
                </ul>
        </div>

        {# Le main se ferme avec le footer #}
                {# </main> #}
\t\t\t
{% endblock %}", "private-space/home_private.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/private-space/home_private.html.twig");
    }
}
