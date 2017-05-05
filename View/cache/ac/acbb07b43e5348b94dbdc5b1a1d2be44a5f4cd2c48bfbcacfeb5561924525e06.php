<?php

/* vuejs.html.twig */
class __TwigTemplate_e0a96043956dfb331e8677d1a2297c06bbbfe66b1e59f3a5f36494f42ac1ada0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "vuejs.html.twig", 1);
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
        echo " | Inscription";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"\">
    <h1>Tuto VueJS</h1>
</div>

";
        // line 19
        echo "
  <div id=\"app\">

    {{ persons }}

    <button @click=\"addPerson\">Ajouter une personne</button>

  </div>
";
        echo "

";
        // line 23
        echo "

";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"https://unpkg.com/vue\"></script>
  <script src=\"Assets/js/vuejs.js\" charset=\"utf-8\"></script>
";
    }

    public function getTemplateName()
    {
        return "vuejs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 28,  66 => 27,  60 => 23,  47 => 19,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} | Inscription{% endblock %}

{% block main %}

<div class=\"\">
    <h1>Tuto VueJS</h1>
</div>

{% verbatim %}
  <div id=\"app\">

    {{ persons }}

    <button @click=\"addPerson\">Ajouter une personne</button>

  </div>
{% endverbatim %}

{# suivre cette video #}
{# https://www.youtube.com/watch?v=XkgiXngcpWk je suis a 11:28 min #}


{% endblock %}

{% block javascripts %}
  {{ parent () }}
  <script src=\"https://unpkg.com/vue\"></script>
  <script src=\"Assets/js/vuejs.js\" charset=\"utf-8\"></script>
{% endblock %}
", "vuejs.html.twig", "C:\\xampp\\htdocs\\mini-framework-php\\View\\templates\\vuejs.html.twig");
    }
}
