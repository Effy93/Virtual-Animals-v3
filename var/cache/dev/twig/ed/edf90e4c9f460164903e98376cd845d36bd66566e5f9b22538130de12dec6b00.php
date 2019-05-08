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

/* base.html.twig */
class __TwigTemplate_3c36e01c75a7574da6a8cfd6efbbf96e9aa5788ee6448980540fbde67bd2994b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "    </main>
        <footer>
            <nav>
                <ul>
                    <li><a href=\"https://github.com/Effy93\"> <img src=\"/images/logos/logo-github.svg\" width=\"50px\" height=\"50px\" alt=\"logo GitHub représente un chat avec des tentacule\"  /> </a></li>
                    <li><a href=\"https://www.linkedin.com/in/eva-philippo-7264b7161/\"> <img src=\"/images/logos/logo-linkedin.png\" width=\"50px\" height=\"50px\" alt=\"logo Linkedin \"  /> </a></li> 
                    <li><p> ©2019-Eva Philippo </p></li>
                </ul>
            </nav>
        </footer>

        ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Virtual Animals ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        
        <link rel=\"stylesheet\" href=\"https://unpkg.com/spectre.css/dist/spectre.min.css\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/spectre.css/dist/spectre-exp.min.css\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/spectre.css/dist/spectre-icons.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
        <link rel=\"icon\" type=\"image/png\" href=\"/images/logos/logo-red-panda.png\"> 
       
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "
                <nav id=\"menu\">
                    <ul>
                        
                
<!-- ADMIN / DESIGNER  -->
                        ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DESIGNER")) {
            // line 25
            echo "                            ";
            // line 26
            echo "                            <div class=\"dropdown\">
                                <li class=\"dropdownbtn\"><a href =\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\"> Accueil &darr; </a></li>
                                    <ul class=\"dropdown-content\">
                                        <li><a href =\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
            echo "\"> Admin BOARD </a></li>
                                        <li><a href =\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_monster");
            echo "\"> Édition  <i class=\"icon icon-edit\"></i> </a></li>
                                        <li><a href =\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_news");
            echo "\"> News  <i class=\"icon icon-edit\"></i> </a></li>
                                    </ul>
                            </div>
                        ";
        } else {
            // line 35
            echo "                            <li><a href =\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\"> Accueil </a></li>
                        ";
        }
        // line 37
        echo "<!-- USER  -->
                        ";
        // line 39
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 40
            echo "                            <li><a href =\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\"> Boutique </a></li>
                            
                            ";
            // line 43
            echo "                            <div class=\"dropdown\">
                                <li class=\"dropdownbtn\"><a href =\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home-private");
            echo "\"> Espace personnel &darr; </a></li>
                                    <ul class=\"dropdown-content\">
                                        <li><a href =\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bestiary");
            echo "\"> Bestiaire </a></li>
                                        <li><a href =\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventory");
            echo "\"> Inventaire </a></li>
                                    </ul>
                            </div>
                            <li><a href =\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"> Déconnexion <i class=\"icon icon-shutdown\"></i> </a></li>

                        ";
            // line 53
            echo "                        ";
        } else {
            // line 54
            echo "                            <li><a href =\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"> Inscription </a></li>
                            <li> <a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Connexion <i class=\"icon icon-shutdown\"></i> </a></li>
                        ";
        }
        // line 57
        echo "                    </ul>
                </nav>
            
            ";
        // line 63
        echo "           
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  257 => 77,  248 => 76,  237 => 63,  232 => 57,  227 => 55,  222 => 54,  219 => 53,  214 => 50,  208 => 47,  204 => 46,  199 => 44,  196 => 43,  190 => 40,  187 => 39,  184 => 37,  178 => 35,  171 => 31,  167 => 30,  163 => 29,  158 => 27,  155 => 26,  153 => 25,  151 => 24,  143 => 18,  134 => 17,  117 => 7,  108 => 6,  90 => 5,  78 => 78,  76 => 76,  63 => 65,  61 => 17,  57 => 15,  55 => 6,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %} Virtual Animals {% endblock %}</title>
        {% block stylesheets %}
        
        <link rel=\"stylesheet\" href=\"https://unpkg.com/spectre.css/dist/spectre.min.css\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/spectre.css/dist/spectre-exp.min.css\">
        <link rel=\"stylesheet\" href=\"https://unpkg.com/spectre.css/dist/spectre-icons.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
        <link rel=\"icon\" type=\"image/png\" href=\"/images/logos/logo-red-panda.png\"> 
       
        {% endblock %}
    </head>
    <body>
        {% block body %}

                <nav id=\"menu\">
                    <ul>
                        
                
<!-- ADMIN / DESIGNER  -->
                        {% if (is_granted('ROLE_DESIGNER')) %}
                            {# Sous menu ADMIN #}
                            <div class=\"dropdown\">
                                <li class=\"dropdownbtn\"><a href =\"{{path('home')}}\"> Accueil &darr; </a></li>
                                    <ul class=\"dropdown-content\">
                                        <li><a href =\"{{path('home_admin')}}\"> Admin BOARD </a></li>
                                        <li><a href =\"{{path('edit_monster')}}\"> Édition  <i class=\"icon icon-edit\"></i> </a></li>
                                        <li><a href =\"{{path('add_news')}}\"> News  <i class=\"icon icon-edit\"></i> </a></li>
                                    </ul>
                            </div>
                        {% else %}
                            <li><a href =\"{{path('home')}}\"> Accueil </a></li>
                        {% endif %}
<!-- USER  -->
                        {# Si l'utilisateur est connecté de nouveaux menus apparaissent #}
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                            <li><a href =\"{{path('shop')}}\"> Boutique </a></li>
                            
                            {# Sous menu espace privé #}
                            <div class=\"dropdown\">
                                <li class=\"dropdownbtn\"><a href =\"{{path('home-private')}}\"> Espace personnel &darr; </a></li>
                                    <ul class=\"dropdown-content\">
                                        <li><a href =\"{{path('bestiary')}}\"> Bestiaire </a></li>
                                        <li><a href =\"{{path('inventory')}}\"> Inventaire </a></li>
                                    </ul>
                            </div>
                            <li><a href =\"{{path('logout')}}\"> Déconnexion <i class=\"icon icon-shutdown\"></i> </a></li>

                        {# Sinon #}
                        {% else %}
                            <li><a href =\"{{path('app_register')}}\"> Inscription </a></li>
                            <li> <a href=\"{{path('app_login')}}\"> Connexion <i class=\"icon icon-shutdown\"></i> </a></li>
                        {% endif %}
                    </ul>
                </nav>
            
            {# <header>
                <h1> Bienvenue dans Virtual Animals </h1>
            </header> #}
           
        {% endblock %}
    </main>
        <footer>
            <nav>
                <ul>
                    <li><a href=\"https://github.com/Effy93\"> <img src=\"/images/logos/logo-github.svg\" width=\"50px\" height=\"50px\" alt=\"logo GitHub représente un chat avec des tentacule\"  /> </a></li>
                    <li><a href=\"https://www.linkedin.com/in/eva-philippo-7264b7161/\"> <img src=\"/images/logos/logo-linkedin.png\" width=\"50px\" height=\"50px\" alt=\"logo Linkedin \"  /> </a></li> 
                    <li><p> ©2019-Eva Philippo </p></li>
                </ul>
            </nav>
        </footer>

        {% block javascripts %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/dwwm/Documents/Cours/6-Symfony_p/VA-Symfony/templates/base.html.twig");
    }
}
