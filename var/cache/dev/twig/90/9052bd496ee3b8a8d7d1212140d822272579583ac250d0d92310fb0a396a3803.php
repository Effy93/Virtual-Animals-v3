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
class __TwigTemplate_58ec710bcb0fc267842ce84322cfd56b5847fafd88428f20b1a52fb3c1678acf extends \Twig\Template
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
        // line 62
        echo "
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

        ";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
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
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "                            ";
            // line 25
            echo "                            <div class=\"dropdown\">
                                <li class=\"dropdownbtn\"><a href =\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\"> Accueil &darr; </a></li>
                                    <ul class=\"dropdown-content\">
                                        <li><a href =\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_admin");
            echo "\"> Admin </a></li>
                                        <li><a href =\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_monster");
            echo "\"> Edition </a></li>
                                    </ul>
                            </div>
                        ";
        } else {
            // line 33
            echo "                            <li><a href =\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\"> Accueil </a></li>
                        ";
        }
        // line 35
        echo "<!-- USER  -->
                        ";
        // line 37
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 38
            echo "                            <li><a href =\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shop");
            echo "\"> Boutique </a></li>
                            
                            ";
            // line 41
            echo "                            <div class=\"dropdown\">
                                <li class=\"dropdownbtn\"><a href =\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home-private");
            echo "\"> Espace personnel &darr; </a></li>
                                    <ul class=\"dropdown-content\">
                                        <li><a href =\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bestiary");
            echo "\"> Bestiaire </a></li>
                                        <li><a href =\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inventory");
            echo "\"> Inventaire </a></li>
                                    </ul>
                            </div>
                            <li><a href =\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"> Deconnexion  </a></li>

                        ";
            // line 51
            echo "                        ";
        } else {
            // line 52
            echo "                            <li><a href =\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"> Inscription </a></li>
                            <li> <a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Connexion</a></li>
                        ";
        }
        // line 55
        echo "                    </ul>
                </nav>
            ";
        // line 60
        echo "           
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
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
        return array (  252 => 75,  243 => 74,  232 => 60,  228 => 55,  223 => 53,  218 => 52,  215 => 51,  210 => 48,  204 => 45,  200 => 44,  195 => 42,  192 => 41,  186 => 38,  183 => 37,  180 => 35,  174 => 33,  167 => 29,  163 => 28,  158 => 26,  155 => 25,  153 => 24,  151 => 23,  144 => 18,  135 => 17,  118 => 7,  109 => 6,  91 => 5,  79 => 76,  77 => 74,  63 => 62,  61 => 17,  57 => 15,  55 => 6,  51 => 5,  45 => 1,);
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
                        {% if (is_granted('ROLE_ADMIN')) %}
                            {# Sous menu ADMIN #}
                            <div class=\"dropdown\">
                                <li class=\"dropdownbtn\"><a href =\"{{path('home')}}\"> Accueil &darr; </a></li>
                                    <ul class=\"dropdown-content\">
                                        <li><a href =\"{{path('home_admin')}}\"> Admin </a></li>
                                        <li><a href =\"{{path('edit_monster')}}\"> Edition </a></li>
                                    </ul>
                            </div>
                        {% else %}
                            <li><a href =\"{{path('home')}}\"> Accueil </a></li>
                        {% endif %}
<!-- USER  -->
                        {# Si l'utilisateur est connecté de nouveau menu apparaissent #}
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
                            <li><a href =\"{{path('logout')}}\"> Deconnexion  </a></li>

                        {# Sinon #}
                        {% else %}
                            <li><a href =\"{{path('app_register')}}\"> Inscription </a></li>
                            <li> <a href=\"{{path('app_login')}}\"> Connexion</a></li>
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
