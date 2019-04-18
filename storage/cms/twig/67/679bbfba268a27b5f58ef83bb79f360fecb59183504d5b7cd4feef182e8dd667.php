<?php

/* C:\xampp\htdocs\rpsOct/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm */
class __TwigTemplate_c8ee80cf70718f7986017ce682a332cd3a07593c8ba7d8ae119f12384bf2c021 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"navbar\" class=\"m-b-3 sec\">
\t<nav class=\"navbar navbar-default navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">the GREAT TOKEN</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []) == "features")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("features");
        echo "\">Statistic</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item";
        // line 9
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "baseFileName", []) == "author")) ? (" active") : (""));
        echo "\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("author");
        echo "\">Profile</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 12
        if (($context["user"] ?? null)) {
            // line 13
            echo "\t\t\t\t\t<li ><a class=\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "login")) {
                echo " active ";
            }
            echo "\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t<li class=\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "id", []) == "login")) {
                echo " active ";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("login");
            echo "\">Login or Register</a></li>
\t\t\t\t";
        }
        // line 17
        echo "
\t\t\t</ul>
\t\t</div>
\t</nav>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\rpsOct/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 17,  61 => 15,  53 => 13,  51 => 12,  46 => 10,  42 => 9,  37 => 7,  33 => 6,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"navbar\" class=\"m-b-3 sec\">
\t<nav class=\"navbar navbar-default navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">the GREAT TOKEN</a>
\t\t\t<ul class=\"nav navbar-nav pull-xs-right\">
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'features' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'features'|page }}\">Statistic</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item{{ this.page.baseFileName == 'author' ? ' active' }}\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ 'author'|page }}\">Profile</a>
\t\t\t\t</li>
\t\t\t\t{% if user %}
\t\t\t\t\t<li ><a class=\"{% if this.page.id == 'login' %} active {% endif %}\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">Sign out</a></li>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"{% if this.page.id == 'login' %} active {% endif %}\"><a href=\"{{ 'login'|page }}\">Login or Register</a></li>
\t\t\t\t{% endif %}

\t\t\t</ul>
\t\t</div>
\t</nav>
</section>", "C:\\xampp\\htdocs\\rpsOct/themes/hambern-hambern-blank-bootstrap-4/partials/navbar.htm", "");
    }
}
