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

/* admin/add_article.html.twig */
class __TwigTemplate_2f94552e7597025fb2a69127f81665be0f96dbb8780436f96d0d4cdf5babbe40 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/home_admin.html.twig", "admin/add_article.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "admin/home_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/add_article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/add_article.html.twig"));

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

        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 8, $this->source); })()), 'form_start');
        echo "

    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 10, $this->source); })()), "nom", []), 'label');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 11, $this->source); })()), "nom", []), 'widget');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 12, $this->source); })()), "nom", []), 'errors');
        echo "

    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 14, $this->source); })()), "contenu", []), 'label');
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 15, $this->source); })()), "contenu", []), 'widget');
        echo "
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 16, $this->source); })()), "contenu", []), 'errors');
        echo "

    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 18, $this->source); })()), "auteur", []), 'label');
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 19, $this->source); })()), "auteur", []), 'widget');
        echo "
    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 20, $this->source); })()), "auteur", []), 'errors');
        echo "

    <button class=\"btn btn-lg btn-primary\"> Envoyez </button>

    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["newsForm"]) || array_key_exists("newsForm", $context) ? $context["newsForm"] : (function () { throw new RuntimeError('Variable "newsForm" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
</div>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/add_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 24,  130 => 20,  126 => 19,  122 => 18,  117 => 16,  113 => 15,  109 => 14,  104 => 12,  100 => 11,  96 => 10,  91 => 8,  86 => 6,  77 => 5,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/home_admin.html.twig' %}

{% block title %} {{parent()}} {% endblock %}

{% block body %}
{{parent()}}

    {{ form_start(newsForm) }}

    {{ form_label(newsForm.nom) }}
    {{ form_widget(newsForm.nom) }}
    {{ form_errors(newsForm.nom) }}

    {{ form_label(newsForm.contenu) }}
    {{ form_widget(newsForm.contenu) }}
    {{ form_errors(newsForm.contenu) }}

    {{ form_label(newsForm.auteur) }}
    {{ form_widget(newsForm.auteur) }}
    {{ form_errors(newsForm.auteur) }}

    <button class=\"btn btn-lg btn-primary\"> Envoyez </button>

    {{ form_end(newsForm) }}
</div>





{% endblock %}", "admin/add_article.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/admin/add_article.html.twig");
    }
}
