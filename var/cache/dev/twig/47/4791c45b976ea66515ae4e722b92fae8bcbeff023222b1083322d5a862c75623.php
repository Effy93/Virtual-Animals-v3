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
    <h1> HOME ADMIN BOARD </h1>
    <div class=\"container-column\">
        <h5> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo " </h5>
    </div>
</header>

<main>
<!-- Home : current route add_news --> 
    ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method") == "add_news")) {
            // line 17
            echo "        <div class=\"container-admin\">
            <h5> Publier un nouvel évènement  </h5>
            <a href='";
            // line 19
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
            echo "'> 
                <button class=\"btn btn-error\">  Retour </button> 
            </a>
            <div class=\"container-row\">
                <div class=\"container-form\">  
            ";
            // line 25
            echo "<!-- Home : current route => edit_monster-->  
    ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", []), "attributes", []), "get", [0 => "_route"], "method") == "edit_monster")) {
            // line 27
            echo "        <div class=\"container-admin\">
            <h5> Proposer un nouveau monstre </h5> 
            <a href='";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
            echo "'> 
                <button class=\"btn btn-error\"> Retour </button> 
            </a> 
            ";
            // line 33
            echo "            <div class=\"container-row\">   
                <div class=\"container-form\">
            ";
            // line 36
            echo "<!--  HOME ADMIN BOARD : current route => home -->
    ";
        } else {
            // line 38
            echo "    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 39
                echo "        <section class=\"container-row-space\">
            ";
                // line 41
                echo "            <article class=\"\"> 
                <div class=\"popover popover-bottom\">
                    <h3 class=\"task-item\"> 
                        <button class=\"btn btn-primary\"> TASK </button> 
                    </h3>
                    <div class=\"popover-container container-task\">
                        <div class=\"card container-pop-up task-item\">
                            ";
                // line 49
                echo "                            <div class=\"card-body container-task\">
                                <ul class=\"container-admin task-item\">
                                    <h5> Games </h5>
                                    <li>
                                        <strike style=\"color:black;\"> Insertion gain ruby </strike>  
                                    </li>
                                    <li> TTT : cheat a corriger </li>
                                </ul>
                                <ul class=\"container-admin task-item\">
                                    <h5> Admin : new monstre </h5>
                                    <li> Edition d'un monstre : controller a faire </li>
                                </ul>
                                <ul class=\"container-admin task-item\">
                                    <h5> Admin : Article news </h5>
                                    <li><strike style=\"color:black;\"> Suppression des news </strike>  </li>
                                    <li> Insérer id user lors de création article </li>
                                    <li>
                                        <strike style=\"color:black;\"> Relier auteur a user pour affichage news </strike>  
                                    </li>
                                </ul>
                                <ul class=\"container-admin task-item\">
                                    <h5> Admin : attribution des rôles </h5>
                                    <li> Système de gestion des rôles </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            ";
                // line 79
                echo "            ";
                // line 80
                echo "            <article>
                <div class=\"container-task\">
                    <h5> Gestion des utilisateurs  </h5>
                    <div class=\"task-item\">
                        <p> [ Bientot ]</p>
                        <p> [ formulaire ]</p>
                        <p> [ liste déroulante ]</p>
                    </div>
                </div>
            </article>
        </section>
        ";
            }
            // line 92
            echo "        ";
            // line 93
            echo "        <section class=\"container-add-news\">
            <div class=\"container-admin\"> 
                <h5>  Mes news </h5>
                <td class=>  
                    <a href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_news");
            echo "\">
                        <button class=\"btn btn-primary\"> 
                            <i class=\"icon icon-plus\"></i> 
                        </button> 
                    </a> 
                </td>
                <div class=\"container-add-news\">
                    ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "user", []), "articles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
                // line 105
                echo "                    <table class=\"container-admin\">
                        <thead>
                            <tr>
                                <th>  
                                    <div class=\"popover popover-bottom\">
                                    <button class=\"btn-hover btn btn-primary\">  ";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "nom", []), "html", null, true);
                echo " </button>
                                    <div class=\"popover-container container-admin\">
                                        <div class=\"card container-pop-up task-item\">
                                            ";
                // line 114
                echo "                                            <div class=\"card-body container-task\">
                                                <p class=\"\">";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "contenu", []), "html", null, true);
                echo "  </p>
                                                ";
                // line 125
                echo "                                            </div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class=\"container-task\">
                            <tr class=\"task-item\">
                                <td> 
                                    ";
                // line 135
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_news", ["id" => twig_get_attribute($this->env, $this->source, $context["news"], "id", [])]), "html", null, true);
                echo "\"> 
                                        <button class=\"btn btn-success\"> 
                                            <i class=\"icon icon-edit\"></i>
                                        </button> 
                                    </a> 
                                    ";
                // line 141
                echo "                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_news", ["id" => twig_get_attribute($this->env, $this->source, $context["news"], "id", [])]), "html", null, true);
                echo "\"> 
                                        <button class=\"btn btn-error\">
                                            <i class=\"icon icon-delete\"></i> 
                                        </button> 
                                    </a> 
                                </td>
                            </tr> 
                        </tbody>
                        <tr class=\"container-task\">
                            <td class=\"task-item\"> <p> Publié le : <i> ";
                // line 150
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["news"], "date", []), "d-m-Y"), "html", null, true);
                echo " </i></p> </td>
                        </tr>
                    </table>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                </div>
            </div>
        </section>        
        ";
            // line 158
            echo "        <section>
            <div class=\"container-task\">
                <h5> Mes monstres </h5>
                <div class=\"task-item\">
                    ";
            // line 163
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_monster");
            echo "\"> 
                            <button class=\"btn btn-success\" width=\"100%\"> 
                                <i class=\"icon icon-edit\"></i> 
                            </button> 
                        </a> 
                        <p> [ liste d'affichage des monstres ]</p>
                        ";
            // line 171
            echo "                </div> 
            </div>
        </section> 
";
            // line 175
            echo "    ";
        }
        // line 176
        echo "    ";
        
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
        return array (  317 => 176,  314 => 175,  309 => 171,  299 => 163,  293 => 158,  288 => 154,  278 => 150,  265 => 141,  256 => 135,  245 => 125,  241 => 115,  238 => 114,  232 => 110,  225 => 105,  221 => 104,  211 => 97,  205 => 93,  203 => 92,  189 => 80,  187 => 79,  156 => 49,  147 => 41,  144 => 39,  141 => 38,  137 => 36,  133 => 33,  127 => 29,  123 => 27,  121 => 26,  118 => 25,  110 => 19,  106 => 17,  104 => 16,  95 => 10,  88 => 6,  77 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %} {{parent()}} {% endblock %}

{% block body %} 
{{parent()}}
<header>
    <h1> HOME ADMIN BOARD </h1>
    <div class=\"container-column\">
        <h5> {{ app.user.nom }} </h5>
    </div>
</header>

<main>
<!-- Home : current route add_news --> 
    {% if app.request.attributes.get('_route') == 'add_news' %}
        <div class=\"container-admin\">
            <h5> Publier un nouvel évènement  </h5>
            <a href='{{ path('home_admin') }}'> 
                <button class=\"btn btn-error\">  Retour </button> 
            </a>
            <div class=\"container-row\">
                <div class=\"container-form\">  
            {# </div>  #}
<!-- Home : current route => edit_monster-->  
    {% elseif app.request.attributes.get('_route') == 'edit_monster' %}
        <div class=\"container-admin\">
            <h5> Proposer un nouveau monstre </h5> 
            <a href='{{ path('home_admin') }}'> 
                <button class=\"btn btn-error\"> Retour </button> 
            </a> 
            {# </div>    #}
            <div class=\"container-row\">   
                <div class=\"container-form\">
            {# </div>  #}
<!--  HOME ADMIN BOARD : current route => home -->
    {% else %}
    {% if (is_granted('ROLE_ADMIN')) %}
        <section class=\"container-row-space\">
            {# <!--  DEV TASK BUTTON - POP UP  --> #}
            <article class=\"\"> 
                <div class=\"popover popover-bottom\">
                    <h3 class=\"task-item\"> 
                        <button class=\"btn btn-primary\"> TASK </button> 
                    </h3>
                    <div class=\"popover-container container-task\">
                        <div class=\"card container-pop-up task-item\">
                            {# <div class=\"card-header\"></div> #}
                            <div class=\"card-body container-task\">
                                <ul class=\"container-admin task-item\">
                                    <h5> Games </h5>
                                    <li>
                                        <strike style=\"color:black;\"> Insertion gain ruby </strike>  
                                    </li>
                                    <li> TTT : cheat a corriger </li>
                                </ul>
                                <ul class=\"container-admin task-item\">
                                    <h5> Admin : new monstre </h5>
                                    <li> Edition d'un monstre : controller a faire </li>
                                </ul>
                                <ul class=\"container-admin task-item\">
                                    <h5> Admin : Article news </h5>
                                    <li><strike style=\"color:black;\"> Suppression des news </strike>  </li>
                                    <li> Insérer id user lors de création article </li>
                                    <li>
                                        <strike style=\"color:black;\"> Relier auteur a user pour affichage news </strike>  
                                    </li>
                                </ul>
                                <ul class=\"container-admin task-item\">
                                    <h5> Admin : attribution des rôles </h5>
                                    <li> Système de gestion des rôles </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            {# </div>  #}
            {# <!-- GESTION ROLES --> #}
            <article>
                <div class=\"container-task\">
                    <h5> Gestion des utilisateurs  </h5>
                    <div class=\"task-item\">
                        <p> [ Bientot ]</p>
                        <p> [ formulaire ]</p>
                        <p> [ liste déroulante ]</p>
                    </div>
                </div>
            </article>
        </section>
        {% endif %}
        {# <!-- GESTION DES ARTICLES --> #}
        <section class=\"container-add-news\">
            <div class=\"container-admin\"> 
                <h5>  Mes news </h5>
                <td class=>  
                    <a href=\"{{ path('add_news') }}\">
                        <button class=\"btn btn-primary\"> 
                            <i class=\"icon icon-plus\"></i> 
                        </button> 
                    </a> 
                </td>
                <div class=\"container-add-news\">
                    {% for news in app.user.articles %}
                    <table class=\"container-admin\">
                        <thead>
                            <tr>
                                <th>  
                                    <div class=\"popover popover-bottom\">
                                    <button class=\"btn-hover btn btn-primary\">  {{ news.nom }} </button>
                                    <div class=\"popover-container container-admin\">
                                        <div class=\"card container-pop-up task-item\">
                                            {# <div class=\"card-header\"></div> #}
                                            <div class=\"card-body container-task\">
                                                <p class=\"\">{{ news.contenu }}  </p>
                                                {# <ul>
                                                    <li> PV : {{ monstre.classe.pv }} </li>
                                                    <li> MP : {{ monstre.classe.mp }} </li>
                                                    <li> Force : {{ monstre.classe.puissance }} </li>
                                                    <li>  </li>
                                                    <li> Defense : {{ monstre.classe.defense }} </li>
                                                    <li>  Vitesse : {{ monstre.classe.vitesse }} </li>
                                                    <li>  </li>
                                                </ul> #}
                                            </div>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class=\"container-task\">
                            <tr class=\"task-item\">
                                <td> 
                                    {# <!-- bouton édition news --> #}
                                    <a href=\"{{path('edit_news', {'id':news.id} ) }}\"> 
                                        <button class=\"btn btn-success\"> 
                                            <i class=\"icon icon-edit\"></i>
                                        </button> 
                                    </a> 
                                    {# <!-- bouton suppression news --> #}
                                    <a href=\"{{ path('delete_news', {'id':news.id} ) }}\"> 
                                        <button class=\"btn btn-error\">
                                            <i class=\"icon icon-delete\"></i> 
                                        </button> 
                                    </a> 
                                </td>
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
        {# <!-- GESTION DES MONSTRES --> #}
        <section>
            <div class=\"container-task\">
                <h5> Mes monstres </h5>
                <div class=\"task-item\">
                    {# <!-- bouton edition monstre --> #}
                        <a href=\"{{ path('edit_monster') }}\"> 
                            <button class=\"btn btn-success\" width=\"100%\"> 
                                <i class=\"icon icon-edit\"></i> 
                            </button> 
                        </a> 
                        <p> [ liste d'affichage des monstres ]</p>
                        {# <a href=\"{{ path('edit_monster') }}\"> <button class=\"btn btn-primary\"> Edit </button> </a> 
                        <a href=\"{{ path('edit_monster') }}\"> <button class=\"btn btn-error\"> Supprimer </button> </a>  #}
                </div> 
            </div>
        </section> 
{# <!-- CLOSE HOME BOARD --> #}
    {% endif %}
    {# </section> #}
{% endblock %}", "admin/home_admin.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/admin/home_admin.html.twig");
    }
}
