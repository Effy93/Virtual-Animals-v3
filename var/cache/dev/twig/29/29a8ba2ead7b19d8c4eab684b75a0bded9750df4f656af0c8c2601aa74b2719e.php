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

/* private-space/games/ppc/ppc.html.twig */
class __TwigTemplate_1cb436697cf4038a8da9ab9bfb2fd82933e1e4eb69521e85ac0ccff819636a9a extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("private-space/games/layout.html.twig", "private-space/games/ppc/ppc.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "private-space/games/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/games/ppc/ppc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "private-space/games/ppc/ppc.html.twig"));

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

        echo " 
    ";
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
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h5> Pierre feuille ciseaux </h5>
    <section class=\"container-body-PPC\">
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["PPCform"]) || array_key_exists("PPCform", $context) ? $context["PPCform"] : (function () { throw new RuntimeError('Variable "PPCform" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        <div class=\"container-row\">
            <div class=\"container-column\">   
                <img src=\"/images/games/ppc/pierre.png\" alt=\"représente le signe de la pierre\" width=\"100px\" height=\"100px\" />
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PPCform"]) || array_key_exists("PPCform", $context) ? $context["PPCform"] : (function () { throw new RuntimeError('Variable "PPCform" does not exist.', 15, $this->source); })()), "choix", []), 0, [], "array"), 'label');
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PPCform"]) || array_key_exists("PPCform", $context) ? $context["PPCform"] : (function () { throw new RuntimeError('Variable "PPCform" does not exist.', 16, $this->source); })()), "choix", []), 0, [], "array"), 'widget');
        echo "
            </div>
            <div class=\"container-column\">
                <img src=\"/images/games/ppc/papier.png\" alt=\"représente le signe de la pierre\" width=\"100px\" height=\"100px\" />
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PPCform"]) || array_key_exists("PPCform", $context) ? $context["PPCform"] : (function () { throw new RuntimeError('Variable "PPCform" does not exist.', 20, $this->source); })()), "choix", []), 1, [], "array"), 'label');
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PPCform"]) || array_key_exists("PPCform", $context) ? $context["PPCform"] : (function () { throw new RuntimeError('Variable "PPCform" does not exist.', 21, $this->source); })()), "choix", []), 1, [], "array"), 'widget');
        echo "
            </div>
            <div class=\"container-column\">
                <img src=\"/images/games/ppc/ciseaux.png\" alt=\"représente le signe de la pierre\" width=\"100px\" height=\"100px\" />
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PPCform"]) || array_key_exists("PPCform", $context) ? $context["PPCform"] : (function () { throw new RuntimeError('Variable "PPCform" does not exist.', 25, $this->source); })()), "choix", []), 2, [], "array"), 'label');
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["PPCform"]) || array_key_exists("PPCform", $context) ? $context["PPCform"] : (function () { throw new RuntimeError('Variable "PPCform" does not exist.', 26, $this->source); })()), "choix", []), 2, [], "array"), 'widget');
        echo "
            </div>
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["PPCform"]) || array_key_exists("PPCform", $context) ? $context["PPCform"] : (function () { throw new RuntimeError('Variable "PPCform" does not exist.', 28, $this->source); })()), "choix", []), 'row');
        echo "
        </div>
        <button class=\"btn btn-lg btn-primary\" type=\"submit\"> Valider </button>
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["PPCform"]) || array_key_exists("PPCform", $context) ? $context["PPCform"] : (function () { throw new RuntimeError('Variable "PPCform" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
    </section>
    <div>
        <button class=\"btn btn-error\"> <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home-private");
        echo "\"> Retour </a> </button>
    </div>

";
        // line 53
        echo "       

        ";
        // line 63
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "private-space/games/ppc/ppc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 63,  152 => 53,  146 => 34,  140 => 31,  134 => 28,  129 => 26,  125 => 25,  118 => 21,  114 => 20,  107 => 16,  103 => 15,  96 => 11,  89 => 8,  80 => 7,  68 => 4,  57 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'private-space/games/layout.html.twig' %}

{% block title %} 
    {{parent()}} 
{% endblock %}

{% block body %}
    {{parent()}}
    <h5> Pierre feuille ciseaux </h5>
    <section class=\"container-body-PPC\">
        {{ form_start(PPCform) }}
        <div class=\"container-row\">
            <div class=\"container-column\">   
                <img src=\"/images/games/ppc/pierre.png\" alt=\"représente le signe de la pierre\" width=\"100px\" height=\"100px\" />
                {{ form_label(PPCform.choix[0]) }}
                {{ form_widget(PPCform.choix[0]) }}
            </div>
            <div class=\"container-column\">
                <img src=\"/images/games/ppc/papier.png\" alt=\"représente le signe de la pierre\" width=\"100px\" height=\"100px\" />
                {{ form_label(PPCform.choix[1]) }}
                {{ form_widget(PPCform.choix[1]) }}
            </div>
            <div class=\"container-column\">
                <img src=\"/images/games/ppc/ciseaux.png\" alt=\"représente le signe de la pierre\" width=\"100px\" height=\"100px\" />
                {{ form_label(PPCform.choix[2]) }}
                {{ form_widget(PPCform.choix[2]) }}
            </div>
            {{ form_row(PPCform.choix) }}
        </div>
        <button class=\"btn btn-lg btn-primary\" type=\"submit\"> Valider </button>
        {{ form_end(PPCform) }}
    </section>
    <div>
        <button class=\"btn btn-error\"> <a href=\"{{ path('home-private') }}\"> Retour </a> </button>
    </div>

{# <div class=\"post_as\">
        {{ form_label(form.is_anonymous, 'Post as:') }}
        {{ form_errors(form.is_anonymous) }}
    
        {% form_theme form _self %}
        {% block _factor_is_anonymous_0_label %}
            <img src=\"/images/anonymous-32.png\"/>
            {{ block ('form_label') }}
        {% endblock %}
        {% block _factor_is_anonymous_1_label %}
            <img src=\"/images/user-32.png\"/>
            {{ block ('form_label') }}
        {% endblock %}
    
        {{ form_widget(form.is_anonymous) }}
    </div> #}
       

        {# {% block _factor_is_anonymous_0_label %}
    <img src=\"/images/anonymous-32.png\"/>
    {{ block ('form_label') }}
{% endblock %}
{% block _factor_is_anonymous_1_label %}
    <img src=\"/images/user-32.png\"/>
    {{ block ('form_label') }}
{% endblock %} #}
    
{% endblock %}", "private-space/games/ppc/ppc.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/private-space/games/ppc/ppc.html.twig");
    }
}
