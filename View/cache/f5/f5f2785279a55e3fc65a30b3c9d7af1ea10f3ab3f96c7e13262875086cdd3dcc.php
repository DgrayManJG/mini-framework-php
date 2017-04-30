<?php

/* vuejs.html.twig */
class __TwigTemplate_4fdac24cece46662f4078ed2e6cce9860bae04d606a9ff429a47cd566f9baf29 extends Twig_Template
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
        // line 27
        echo "
  <div id=\"app\">
    <a :href=\"link\" :title=\"message\">{{ message }}</a>

    <div class=\"alert alert-success\" v-if=\"success\">
      <p>Bravo votre enregistrement à été validé</p>
    </div>
    <div class=\"alert alert-danger\" v-else>
      <p>Echec</p>
    </div>

    <ul class=\"list-group\">
      <li class=\"list-group-item\" v-for=\"person in persons\">{{ person }}</li>
    </ul>

  </div>
";
        echo "

";
        // line 31
        echo "

";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
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
        return array (  77 => 36,  74 => 35,  68 => 31,  47 => 27,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
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
    <a :href=\"link\" :title=\"message\">{{ message }}</a>

    <div class=\"alert alert-success\" v-if=\"success\">
      <p>Bravo votre enregistrement à été validé</p>
    </div>
    <div class=\"alert alert-danger\" v-else>
      <p>Echec</p>
    </div>

    <ul class=\"list-group\">
      <li class=\"list-group-item\" v-for=\"person in persons\">{{ person }}</li>
    </ul>

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
", "vuejs.html.twig", "C:\\xampp\\htdocs\\workspace\\dev_perso\\mini-framework-php\\View\\templates\\vuejs.html.twig");
    }
}
