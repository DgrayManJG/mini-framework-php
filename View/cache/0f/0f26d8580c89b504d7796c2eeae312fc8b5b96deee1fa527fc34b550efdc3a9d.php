<?php

/* home.html.twig */
class __TwigTemplate_1fbfe35593b11c82e89519d1ee7de095f73c063ac625ce92dd7317a8da4ce995 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " | home";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "  <h1>Dashboard</h1>
  <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["randomTerm"] ?? null), "term", array()), "html", null, true);
        echo "</h2>
  <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["randomTerm"] ?? null), "definition1", array()), "html", null, true);
        echo "</h2>

";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " ";
        // line 14
        echo "  <script src=\"Assets/js/home.js\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  57 => 13,  54 => 12,  47 => 8,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block title %}{{ parent() }} | home{% endblock %}

{% block main %}
  <h1>Dashboard</h1>
  <h2>{{ randomTerm.term }}</h2>
  <h2>{{ randomTerm.definition1 }}</h2>

{% endblock %}

{% block javascripts %}
  {{ parent () }} {# blabla #}
  <script src=\"Assets/js/home.js\" charset=\"utf-8\"></script>
{% endblock %}
", "home.html.twig", "C:\\xampp\\htdocs\\workspace\\dev_perso\\mini-framework-php\\View\\templates\\home.html.twig");
    }
}
