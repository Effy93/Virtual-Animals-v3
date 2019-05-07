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

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

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

        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<main class=\"container-main\">
\t<div class=\"container-row-reverse\">
<!-- INFOS USER -->
\t\t";
        // line 13
        echo "\t\t<section class=\"container-user-infos\">
\t\t\t<h5> Mon compte </h5>

";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "
<div class=\"container-absolute\">
\t\t<div class=\"popover popover-right\">
\t\t\t\t<button class=\"btn-admin\"> ⭐ </button>
\t\t\t\t<div class=\"popover-container\">
\t\t\t\t\t<div class=\"card container-task\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t";
            // line 29
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"container-task\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5> <a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
            echo "\"> Évènement </a>   </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_news");
            echo "\"> <button class=\"btn btn-success\"> Add news </button> </a>
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t<div class=\"container-task\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5> <a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
            echo "\"> Proposer un nouveau monstre </a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_monster");
            echo "\"> <button class=\"btn btn-success\"> Edit </button> </a> 
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t<div class=\"container-task\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5> Gestion des rôles  </h5>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 43
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
";
        }
        // line 52
        echo "






\t\t\t<img class=\"glowing-img shake\" src=\"/images/logos/panda-feroce2.png\" width=\"100px\" heigth=\"100px\" alt=\"avatar utilisateur\" />
\t\t\t<h4> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", []), "nom", []), "html", null, true);
        echo " </h4>
\t\t\t<p> Inscrit depuis le : <span style=color:orange;> ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", []), "date", []), "d-m-Y"), "html", null, true);
        echo " </span></p>
\t\t\t<p> <span style=color:red;> ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", []), "argent", []), "html", null, true);
        echo " </span> Ruby </p>

\t\t\t<div class=\"container-row\">
\t\t\t\t";
        // line 66
        echo "\t\t\t<div class=\"animate-box\">
\t\t\t\t\t";
        // line 68
        echo "\t\t\t\t\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bestiary");
        echo "\">
\t\t\t\t\t<div class=\"animate-box-hidden\">
\t\t\t\t\t\t";
        // line 73
        echo "\t\t\t\t\t\t<p> <span style=color:orange;> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", []), "monstre", []), "count", []), "html", null, true);
        echo " </span> monstres </p>
\t\t\t\t\t\t<button>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<span data-attr-span=\"Bestiaire\"> Bestiaire
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
        // line 86
        echo "\t\t\t\t<div class=\"animate-box\">
\t\t\t\t\t<a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventory");
        echo "\">
\t\t\t\t\t<div class=\"animate-box-hidden\">
\t\t\t\t\t\t<p> <span style=color:orange;> ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", []), "accessoire", []), "count", []), "html", null, true);
        echo " </span> accessoires </p>
\t\t\t\t\t\t<button>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<span data-attr-span=\"Inventaire\"> Inventaire
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        // line 103
        echo "\t\t</section>

<!-- OUVERTURE CONTAINER DES JEUX  -->
    <section class=\"container-games\">
\t\t";
        // line 108
        echo "\t\t<h5> Mes Jeux </h5>
\t\t";
        // line 109
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "user", []), "jeux", []), "count", []) == "0")) {
            // line 110
            echo "\t\t\t<p> Aucun jeux disponibles </p>
\t\t\t<div class=\"animate-box\">
\t\t\t\t<a href=\"";
            // line 112
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\">  
\t\t\t\t\t<div class=\"animate-box-hidden\">
\t\t\t\t\t\t<p> <span style=color:orange;> <img class=\"glowing-img\" src=\"/images/logos/red-panda-sad.png\" width=\"100px\" height=\"100px\" alt=\"photo d'un panda triste, car aucun jeux n'est disponible !\"/> </span>  </p>
\t\t\t\t\t\t<button >
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<span data-attr-span=\"Go boutique\"> Acheter des jeux 
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        // line 128
        echo "<!-- LISTE DES JEUX -->
\t  <div class=\"games-list\">
\t\t\t<ul>
\t\t\t\t";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "user", []), "jeux", []));
        foreach ($context['_seq'] as $context["_key"] => $context["jeux"]) {
            // line 132
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["jeux"], "id", []) == "1")) {
                // line 133
                echo "\t\t\t\t\t\t<li> <button class=\"btn btn-primary btn-lg\"> <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_ppc");
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeux"], "nom", []), "html", null, true);
                echo "</a> </button> </li>
\t\t\t\t\t";
            }
            // line 135
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["jeux"], "id", []) == "2")) {
                // line 136
                echo "\t\t\t\t\t\t<li> <button class=\"btn btn-primary btn-lg\"> <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_ttt");
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeux"], "nom", []), "html", null, true);
                echo "</a> </button>  
\t\t\t\t\t\t</br>[Bug a gerer]</li>
\t\t\t\t\t";
            }
            // line 139
            echo "\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["jeux"], "id", []) == "3")) {
                // line 140
                echo "\t\t\t\t\t\t<li> <button class=\"btn btn-primary btn-lg\"> <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_bb");
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeux"], "nom", []), "html", null, true);
                echo "</a> </button> 
\t\t\t\t\t";
            }
            // line 142
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeux'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "\t\t\t\t\t
\t\t\t</ul>
\t  </div>

\t  ";
        // line 148
        echo "\t\t\t";
        // line 149
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
        return array (  315 => 149,  313 => 148,  307 => 143,  301 => 142,  293 => 140,  290 => 139,  281 => 136,  278 => 135,  270 => 133,  267 => 132,  263 => 131,  258 => 128,  239 => 112,  235 => 110,  233 => 109,  230 => 108,  224 => 103,  208 => 89,  203 => 87,  200 => 86,  184 => 73,  178 => 68,  175 => 66,  169 => 62,  165 => 61,  161 => 60,  151 => 52,  140 => 43,  130 => 35,  126 => 34,  120 => 31,  116 => 30,  113 => 29,  101 => 18,  99 => 17,  94 => 13,  87 => 8,  78 => 7,  66 => 4,  57 => 3,  27 => 1,);
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
\t<div class=\"container-row-reverse\">
<!-- INFOS USER -->
\t\t{# OPEN user info section #}
\t\t<section class=\"container-user-infos\">
\t\t\t<h5> Mon compte </h5>

{# bouton admin POP UP  #}
{% if (is_granted('ROLE_ADMIN')) %}

<div class=\"container-absolute\">
\t\t<div class=\"popover popover-right\">
\t\t\t\t<button class=\"btn-admin\"> ⭐ </button>
\t\t\t\t<div class=\"popover-container\">
\t\t\t\t\t<div class=\"card container-task\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t{# <div class=\"container-column\"> #}
\t\t\t\t\t\t\t\t\t\t<div class=\"container-task\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5> <a href=\"{{ path('home_admin') }}\"> Évènement </a>   </h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('add_news') }}\"> <button class=\"btn btn-success\"> Add news </button> </a>
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t<div class=\"container-task\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5> <a href=\"{{ path('home_admin') }}\"> Proposer un nouveau monstre </a></h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('edit_monster') }}\"> <button class=\"btn btn-success\"> Edit </button> </a> 
\t\t\t\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t\t\t\t<div class=\"container-task\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5> Gestion des rôles  </h5>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{# </div> #}

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-footer\">
\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
{% endif %}







\t\t\t<img class=\"glowing-img shake\" src=\"/images/logos/panda-feroce2.png\" width=\"100px\" heigth=\"100px\" alt=\"avatar utilisateur\" />
\t\t\t<h4> {{ app.user.nom }} </h4>
\t\t\t<p> Inscrit depuis le : <span style=color:orange;> {{ app.user.date|date('d-m-Y') }} </span></p>
\t\t\t<p> <span style=color:red;> {{ app.user.argent}} </span> Ruby </p>

\t\t\t<div class=\"container-row\">
\t\t\t\t{# ANIMATE BORDER BOX CONTAINER #}
\t\t\t<div class=\"animate-box\">
\t\t\t\t\t{# ANIMATE BORDER BOX => display Bestiary button #}
\t\t\t\t\t<a href=\"{{path('bestiary')}}\">
\t\t\t\t\t<div class=\"animate-box-hidden\">
\t\t\t\t\t\t{# {% for nb in nbMonstre %}
\t\t\t\t\t\t\t<p> <span style=color:orange;> {{ nb.monstre }} </span> monstres </p>
\t\t\t\t\t\t\t{% endfor %} #}
\t\t\t\t\t\t<p> <span style=color:orange;> {{ app.user.monstre.count }} </span> monstres </p>
\t\t\t\t\t\t<button>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<span data-attr-span=\"Bestiaire\"> Bestiaire
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t{# ANIMATE BORDER BOX => display Inventory button #}
\t\t\t\t<div class=\"animate-box\">
\t\t\t\t\t<a href=\"{{path('inventory')}}\">
\t\t\t\t\t<div class=\"animate-box-hidden\">
\t\t\t\t\t\t<p> <span style=color:orange;> {{ app.user.accessoire.count }} </span> accessoires </p>
\t\t\t\t\t\t<button>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t<span data-attr-span=\"Inventaire\"> Inventaire
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t{# CLOSE user info section #}
\t\t</section>

<!-- OUVERTURE CONTAINER DES JEUX  -->
    <section class=\"container-games\">
\t\t{# Si aucun jeu acheter #}
\t\t<h5> Mes Jeux </h5>
\t\t{% if (app.user.jeux.count == '0' ) %}
\t\t\t<p> Aucun jeux disponibles </p>
\t\t\t<div class=\"animate-box\">
\t\t\t\t<a href=\"{{ path('shop') }}\">  
\t\t\t\t\t<div class=\"animate-box-hidden\">
\t\t\t\t\t\t<p> <span style=color:orange;> <img class=\"glowing-img\" src=\"/images/logos/red-panda-sad.png\" width=\"100px\" height=\"100px\" alt=\"photo d'un panda triste, car aucun jeux n'est disponible !\"/> </span>  </p>
\t\t\t\t\t\t<button >
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t<span data-attr-span=\"Go boutique\"> Acheter des jeux 
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t{% endif %}
<!-- LISTE DES JEUX -->
\t  <div class=\"games-list\">
\t\t\t<ul>
\t\t\t\t{% for jeux in app.user.jeux %}
\t\t\t\t\t{% if (jeux.id == '1') %}
\t\t\t\t\t\t<li> <button class=\"btn btn-primary btn-lg\"> <a href=\"{{path('home_ppc')}}\"> {{ jeux.nom }}</a> </button> </li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if (jeux.id == '2') %}
\t\t\t\t\t\t<li> <button class=\"btn btn-primary btn-lg\"> <a href=\"{{path('home_ttt')}}\"> {{ jeux.nom }}</a> </button>  
\t\t\t\t\t\t</br>[Bug a gerer]</li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if (jeux.id == '3') %}
\t\t\t\t\t\t<li> <button class=\"btn btn-primary btn-lg\"> <a href=\"{{path('home_bb')}}\"> {{ jeux.nom }}</a> </button> 
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t\t
\t\t\t</ul>
\t  </div>

\t  {# Le main se ferme avec le footer #}
\t\t\t{# </main> #}
\t\t\t


{% endblock %}", "private-space/home_private.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/private-space/home_private.html.twig");
    }
}
