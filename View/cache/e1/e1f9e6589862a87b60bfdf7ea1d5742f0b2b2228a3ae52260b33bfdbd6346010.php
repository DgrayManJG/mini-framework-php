<?php

/* faq.html.twig */
class __TwigTemplate_5c432dea01156fae3b900b05b43c6f8ac9483a88a5e8e33122ce95fbb09315c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "faq.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
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
        echo " | FAQ";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
  <h2>FAQ</h2>

";
    }

    public function getTemplateName()
    {
        return "faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} | FAQ{% endblock %}

{% block main %}

  <h2>FAQ</h2>

{% endblock %}
", "faq.html.twig", "C:\\xampp\\htdocs\\workspace\\dev_perso\\mini-framework-php\\View\\templates\\faq.html.twig");
    }
}
