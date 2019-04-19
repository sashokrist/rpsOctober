<?php

/* C:\xampp\htdocs\rpsOct/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm */
class __TwigTemplate_d5e8ae530d9dbc3dc7f69008148afbdaaf5ce0bc2c1fd4d0ef749f4539301fb3 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"flex-center position-ref full-height\">
      <div class=\"content\">
        <div class=\"title m-b-md\">
          Welcome To Rock, Paper Scissors!
        </div>
        <div>
          ";
        // line 8
        if (($context["user"] ?? null)) {
            // line 9
            echo "            <p>Hello ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", []), "html", null, true);
            echo "</p>
            <a href=\"/game\" class=\"btn btn-primary\">New Game</a>
            <a href=\"/\" class=\"btn btn-primary\">Statistic</a>
          ";
        } else {
            // line 13
            echo "            <p>Nobody is logged in</p>
            <a href=\"/login\" class=\"btn btn-primary\">Login</a>
            <a href=\"/login\" class=\"btn btn-primary\">Register</a>
          ";
        }
        // line 17
        echo "

        </div>
      </div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\rpsOct/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  42 => 13,  34 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"flex-center position-ref full-height\">
      <div class=\"content\">
        <div class=\"title m-b-md\">
          Welcome To Rock, Paper Scissors!
        </div>
        <div>
          {% if user %}
            <p>Hello {{ user.name }}</p>
            <a href=\"/game\" class=\"btn btn-primary\">New Game</a>
            <a href=\"/\" class=\"btn btn-primary\">Statistic</a>
          {% else %}
            <p>Nobody is logged in</p>
            <a href=\"/login\" class=\"btn btn-primary\">Login</a>
            <a href=\"/login\" class=\"btn btn-primary\">Register</a>
          {% endif %}


        </div>
      </div>
    </div>
  </div>", "C:\\xampp\\htdocs\\rpsOct/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm", "");
    }
}
