<?php

/* error404.html.twig */
class __TwigTemplate_696e680695bcace11fbed4724bc2f87dc2b1893add96b8445630a31ad5cfba8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig ", "error404.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_bar' => array($this, 'block_top_bar'),
            'left_bar' => array($this, 'block_left_bar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Error 404";
    }

    // line 5
    public function block_top_bar($context, array $blocks = array())
    {
    }

    // line 8
    public function block_left_bar($context, array $blocks = array())
    {
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "  <h1>ERROR 404</h1>
";
    }

    public function getTemplateName()
    {
        return "error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  47 => 11,  42 => 8,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig '%}

{% block title %}Error 404{% endblock %}

{% block top_bar %}
{% endblock %}

{% block left_bar %}
{% endblock %}

{% block main %}
  <h1>ERROR 404</h1>
{% endblock %}
", "error404.html.twig", "C:\\wamp64\\www\\wiki\\View\\templates\\error404.html.twig");
    }
}
