<?php

/* list.html.twig */
class __TwigTemplate_bd3dc803a7333226afbbceb810d5ab9781f90f4ac4dcb33fd2be2fad751b3bb5 extends Twig_Template
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
        echo "  <label for=\"filter-field\">Rechercher..</label>
  <input type=\"text\" id=\"filter-field\">

  <ul id=\"terms-list\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listTerm"]) ? $context["listTerm"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["listTerms"]) {
            // line 11
            echo "      <li><a href=\"?page=detail&id=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listTerms"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["listTerms"], "term", array()), "html", null, true);
            echo "</li></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listTerms'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </ul>

";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"Assets/js/filter.js\" charset=\"utf-8\"></script>
";
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
        return array (  70 => 18,  67 => 17,  61 => 13,  50 => 11,  46 => 10,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
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
  <label for=\"filter-field\">Rechercher..</label>
  <input type=\"text\" id=\"filter-field\">

  <ul id=\"terms-list\">
    {% for listTerms in listTerm %}
      <li><a href=\"?page=detail&id={{ listTerms.id }}\">{{ listTerms.term }}</li></a>
    {% endfor %}
  </ul>

{% endblock %}

{% block javascripts %}
  {{ parent () }}
  <script src=\"Assets/js/filter.js\" charset=\"utf-8\"></script>
{% endblock %}
", "list.html.twig", "C:\\wamp64\\www\\wiki\\View\\templates\\list.html.twig");
    }
}
