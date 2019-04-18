<?php

/* C:\xampp\htdocs\rpsOct/themes/hambern-hambern-blank-bootstrap-4/pages/hpme.htm */
class __TwigTemplate_98d4c4cd4583c2d690071c0091dbbb94ebd7d0990a80e1f5352b41ead72a82ff extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('jumbotron'        );
        // line 2
        echo "  <h1 class=\"display-3\">Rock Paper Scissors</h1>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 4
        echo "


<h1 class=\"display-4 wow animated zoomInDown m-t-3\">Welcome username</h1>

<dl class=\"row m-t-3 wow animated zoomInUp\" data-wow-delay=\".1s\">
  <dt class=\"col-sm-3\">Bootstrap 4</dt>
  <dd class=\"col-sm-9\">Bootstrap is the most popular HTML, CSS, and JS framework in the world for building responsive, mobile-first projects on the web.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"http://v4-alpha.getbootstrap.com\">http://v4-alpha.getbootstrap.com</a></dd>

  <dt class=\"col-sm-3\">jQuery</dt>
  <dd class=\"col-sm-9\">jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"https://jquery.com\">https://jquery.com</a></dd>


</dl>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\rpsOct/themes/hambern-hambern-blank-bootstrap-4/pages/hpme.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 1,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put jumbotron %}
  <h1 class=\"display-3\">Rock Paper Scissors</h1>
{% endput %}



<h1 class=\"display-4 wow animated zoomInDown m-t-3\">Welcome username</h1>

<dl class=\"row m-t-3 wow animated zoomInUp\" data-wow-delay=\".1s\">
  <dt class=\"col-sm-3\">Bootstrap 4</dt>
  <dd class=\"col-sm-9\">Bootstrap is the most popular HTML, CSS, and JS framework in the world for building responsive, mobile-first projects on the web.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"http://v4-alpha.getbootstrap.com\">http://v4-alpha.getbootstrap.com</a></dd>

  <dt class=\"col-sm-3\">jQuery</dt>
  <dd class=\"col-sm-9\">jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.</dd>
  <dd class=\"offset-sm-3 col-sm-9\"><a href=\"https://jquery.com\">https://jquery.com</a></dd>


</dl>", "C:\\xampp\\htdocs\\rpsOct/themes/hambern-hambern-blank-bootstrap-4/pages/hpme.htm", "");
    }
}
