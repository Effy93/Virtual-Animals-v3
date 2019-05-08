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

/* admin/add_monster.html.twig */
class __TwigTemplate_a105097097352ef873f96c12dd0eb8dd19f6653016f0c72e31a5155b209e38f2 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("admin/home_admin.html.twig", "admin/add_monster.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/add_monster.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/add_monster.html.twig"));

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
";
        // line 8
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 9, $this->source); })()), 'form_start');
        echo "

    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 11, $this->source); })()), "nom", []), 'label');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 12, $this->source); })()), "nom", []), 'widget');
        echo "

    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 14, $this->source); })()), "description", []), 'label');
        echo "
    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 15, $this->source); })()), "description", []), 'widget');
        echo "

    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 17, $this->source); })()), "race", []), 'label');
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 18, $this->source); })()), "race", []), 'widget');
        echo "

    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 20, $this->source); })()), "classe", []), 'label');
        echo "
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 21, $this->source); })()), "classe", []), 'widget');
        echo "
        
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 23, $this->source); })()), "element", []), 'label');
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 24, $this->source); })()), "element", []), 'widget');
        echo "
    
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 26, $this->source); })()), "habitat", []), 'label');
        echo "
    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 27, $this->source); })()), "habitat", []), 'widget');
        echo "  
    
    <div class=\"container-row-space\">
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 30, $this->source); })()), "photo", []), 'label');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 31, $this->source); })()), "photo", []), 'widget');
        echo "
    </div>
   
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 34, $this->source); })()), "termsAccepted", []), 'widget');
        echo " <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ml");
        echo "\"> Mentions légales </a>

    <button class=\"btn btn-lg btn-primary\"> Envoyez </button>

    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["monsterForm"]) || array_key_exists("monsterForm", $context) ? $context["monsterForm"] : (function () { throw new RuntimeError('Variable "monsterForm" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/add_monster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 38,  163 => 34,  157 => 31,  153 => 30,  147 => 27,  143 => 26,  138 => 24,  134 => 23,  129 => 21,  125 => 20,  120 => 18,  116 => 17,  111 => 15,  107 => 14,  102 => 12,  98 => 11,  93 => 9,  90 => 8,  86 => 4,  77 => 3,  57 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/home_admin.html.twig' %}
{% block title %} {{parent()}} {% endblock %}
{% block body %}
{{parent()}}
{# ########################################################################### #}
{#                       FORMULAIRE : ajouter un monstre (no lien)             #}
{# ########################################################################### #}

    {{ form_start(monsterForm) }}

    {{ form_label(monsterForm.nom) }}
    {{ form_widget(monsterForm.nom) }}

    {{ form_label(monsterForm.description) }}
    {{ form_widget(monsterForm.description) }}

    {{ form_label(monsterForm.race) }}
    {{ form_widget(monsterForm.race) }}

    {{ form_label(monsterForm.classe) }}
    {{ form_widget(monsterForm.classe) }}
        
    {{ form_label(monsterForm.element) }}
    {{ form_widget(monsterForm.element) }}
    
    {{ form_label(monsterForm.habitat) }}
    {{ form_widget(monsterForm.habitat) }}  
    
    <div class=\"container-row-space\">
        {{ form_label(monsterForm.photo) }}
        {{ form_widget(monsterForm.photo) }}
    </div>
   
    {{ form_widget(monsterForm.termsAccepted) }} <a href=\"{{ path('ml') }}\"> Mentions légales </a>

    <button class=\"btn btn-lg btn-primary\"> Envoyez </button>

    {{ form_end(monsterForm) }}
</div>

{% endblock %}", "admin/add_monster.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/admin/add_monster.html.twig");
    }
}
