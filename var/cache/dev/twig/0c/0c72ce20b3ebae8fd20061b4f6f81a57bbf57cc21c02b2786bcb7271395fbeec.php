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

/* home/shop.html.twig */
class __TwigTemplate_720210490ec7a1dbe1dd028e23a2122fba000631ab278d5d6de800189c4529b8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/shop.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/shop.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/shop.html.twig"));

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
    ";
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "session", []), "flashBag", []), "get", [0 => "success"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <p> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    <section class=\"container-bestiary\">
        <h2> Boutique </h2>
        <div class=\"container-row-reverse\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monstres"]) || array_key_exists("monstres", $context) ? $context["monstres"] : (function () { throw new RuntimeError('Variable "monstres" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["monstre"]) {
            echo " 
                <article class=\"container-monster\">
                    <h5> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "nom", []), "html", null, true);
            echo "</h5> 
                    <p style=color:orange;> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "description", []), "html", null, true);
            echo " </p>
                    ";
            // line 18
            echo "                    <p> Classe : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "nom", []), "html", null, true);
            echo " <span> 
                            ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "pv", []), "html", null, true);
            echo " PV </br>
                            ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "mp", []), "html", null, true);
            echo " MP </br> 
                        Force : ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "puissance", []), "html", null, true);
            echo " </br> 
                        Defense : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "defense", []), "html", null, true);
            echo "</br> 
                        Vitesse : ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "classe", []), "vitesse", []), "html", null, true);
            echo "
                        </span>
                    </p>
                    <img src=";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monstre"], "photo", []), "html", null, true);
            echo " class=\"glowing-img\" width=\"150px\" height=\"150px\" alt=\"image du monstre\"/>
                    
                    <div class=\"animate-box\">
                    ";
            // line 30
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy_monster", ["id" => twig_get_attribute($this->env, $this->source, $context["monstre"], "id", [])]), "html", null, true);
            echo "\">  
                            <div class=\"animate-box-hidden\">
                                <p style=color:orange;>  ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "tarif", []), "prix", []), "html", null, true);
            echo " ruby </p>
                                <button>
                                    <span>
                                        <span>
                                            <span  data-attr-span=\"Acheter\">  ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monstre"], "tarif", []), "prix", []), "html", null, true);
            echo " ruby 
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
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monstre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        
            </div>
        </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 46,  171 => 36,  164 => 32,  158 => 30,  152 => 26,  146 => 23,  142 => 22,  138 => 21,  134 => 20,  130 => 19,  125 => 18,  121 => 16,  117 => 15,  110 => 13,  105 => 10,  96 => 8,  91 => 7,  86 => 5,  77 => 4,  57 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} {{parent()}} {% endblock %}

{% block body %}
    {{parent()}} 
    {# <h1> Boutique &hearts; </h1> #}
    {% for message in app.session.flashBag.get('success') %}
        <p> {{ message }}</p>
    {% endfor %}
    <section class=\"container-bestiary\">
        <h2> Boutique </h2>
        <div class=\"container-row-reverse\">
            {% for monstre in monstres %} 
                <article class=\"container-monster\">
                    <h5> {{ monstre.nom }}</h5> 
                    <p style=color:orange;> {{monstre.description}} </p>
                    {# ECHO STATS DES MONSTRES dans le pop-up #}
                    <p> Classe : {{ monstre.classe.nom }} <span> 
                            {{ monstre.classe.pv }} PV </br>
                            {{ monstre.classe.mp }} MP </br> 
                        Force : {{ monstre.classe.puissance }} </br> 
                        Defense : {{ monstre.classe.defense }}</br> 
                        Vitesse : {{ monstre.classe.vitesse }}
                        </span>
                    </p>
                    <img src={{ monstre.photo }} class=\"glowing-img\" width=\"150px\" height=\"150px\" alt=\"image du monstre\"/>
                    
                    <div class=\"animate-box\">
                    {# ANIMATE BORDER BOX => display Bestiary button #}
                        <a href=\"{{ path('buy_monster', {'id':monstre.id}) }}\">  
                            <div class=\"animate-box-hidden\">
                                <p style=color:orange;>  {{ monstre.tarif.prix }} ruby </p>
                                <button>
                                    <span>
                                        <span>
                                            <span  data-attr-span=\"Acheter\">  {{ monstre.tarif.prix }} ruby 
                                            </span>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </a>
                    </div>
                </article> 
            {% endfor %}
        
            </div>
        </section>
{% endblock %}", "home/shop.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/home/shop.html.twig");
    }
}
