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

/* admin/edit_news.html.twig */
class __TwigTemplate_042705dc16cfe2c19d65c05ed5656cd5ea77407ef985606d27521b7398d3f5c9 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/edit_news.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit_news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/edit_news.html.twig"));

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

        echo " 
    ";
        // line 4
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <header>
        <h5> Modifier un article</h5>
    </header>
    <div class=\"container-admin\">
        <h5> Modifier un évènement  </h5>
        <a href='/admin/'> <button class=\"btn btn-error\">  Retour </button> </a>
        <div class=\"container-row\">
            ";
        // line 13
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "container-form"]]);
        echo "
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 14, $this->source); })()), "nom", []), 'label');
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 15, $this->source); })()), "nom", []), 'widget');
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 16, $this->source); })()), "nom", []), 'errors');
        echo "

            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 18, $this->source); })()), "contenu", []), 'label');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 19, $this->source); })()), "contenu", []), 'widget');
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 20, $this->source); })()), "contenu", []), 'errors');
        echo "

            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 22, $this->source); })()), "auteur", []), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 23, $this->source); })()), "auteur", []), 'widget');
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 24, $this->source); })()), "auteur", []), 'errors');
        echo "


            <input class=\"btn btn-success\" type=\"submit\" value=\"Publiez !\">
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 28,  138 => 24,  134 => 23,  130 => 22,  125 => 20,  121 => 19,  117 => 18,  112 => 16,  108 => 15,  104 => 14,  99 => 13,  88 => 4,  77 => 3,  57 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}
{% block title %} {{parent()}} {% endblock %}
{% block body %} 
    {{parent()}}
    <header>
        <h5> Modifier un article</h5>
    </header>
    <div class=\"container-admin\">
        <h5> Modifier un évènement  </h5>
        <a href='/admin/'> <button class=\"btn btn-error\">  Retour </button> </a>
        <div class=\"container-row\">
            {# <div class=\"container-form\">  #}
            {{ form_start(newsForm, {'attr': {'class': 'container-form'}} ) }}
            {{ form_label(newsForm.nom) }}
            {{ form_widget(newsForm.nom) }}
            {{ form_errors(newsForm.nom) }}

            {{ form_label(newsForm.contenu) }}
            {{ form_widget(newsForm.contenu) }}
            {{ form_errors(newsForm.contenu) }}

            {{ form_label(newsForm.auteur) }}
            {{ form_widget(newsForm.auteur) }}
            {{ form_errors(newsForm.auteur) }}


            <input class=\"btn btn-success\" type=\"submit\" value=\"Publiez !\">
            {{ form_end(newsForm) }}
        </div>
    </div>
    {# </div> #}
{% endblock %}", "admin/edit_news.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/admin/edit_news.html.twig");
    }
}
