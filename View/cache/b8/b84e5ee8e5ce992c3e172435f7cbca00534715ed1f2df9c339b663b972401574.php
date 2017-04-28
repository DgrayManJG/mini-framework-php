<?php

/* list.html.twig */
class __TwigTemplate_210eb4a27a30d7cf6f98f112ede9e417a48d0136cc069bd13dd79731adf6fbd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "list.html.twig", 1);
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
        echo " | liste";
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTerm"]) ? $context["listTerm"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["listTerms"]) {
            // line 7
            echo "    <li><a href=\"?page=detail&id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listTerms"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listTerms"], "term", array()), "html", null, true);
            echo "</li></a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listTerms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        // line 12
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 12,  58 => 11,  45 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
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

{% block title %}{{ parent() }} | liste{% endblock %}

{% block main %}
  {% for listTerms in listTerm %}
    <li><a href=\"?page=detail&id={{ listTerms.id }}\">{{ listTerms.term }}</li></a>
  {% endfor %}
{% endblock %}

{% block javascripts %}
  {{ parent () }} {# blabla #}
{% endblock %}
", "list.html.twig", "C:\\wamp64\\www\\wiki\\View\\templates\\list.html.twig");
    }
}
