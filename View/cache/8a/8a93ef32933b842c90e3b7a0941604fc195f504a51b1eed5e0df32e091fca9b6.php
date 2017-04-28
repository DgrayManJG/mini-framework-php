<?php

/* detail.html.twig */
class __TwigTemplate_20cec86347ef4ee3205e15c9a6118e3b471bf73b434d446327b51ade239dadfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "detail.html.twig", 1);
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
        echo "
    <h1>le term: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailTerm"]) ? $context["detailTerm"] : null), "term", array()), "html", null, true);
        echo "</h1>

    <h2>Définition: ";
        // line 9
        if (twig_test_empty($this->getAttribute((isset($context["detailTerm"]) ? $context["detailTerm"] : null), "definition1", array()))) {
            // line 10
            echo "                       N/A
                    ";
        } else {
            // line 12
            echo "                       ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailTerm"]) ? $context["detailTerm"] : null), "definition1", array()), "html", null, true);
            echo "
                    ";
        }
        // line 14
        echo "    </h2>

    <h2>example: ";
        // line 16
        if (twig_test_empty($this->getAttribute((isset($context["detailTerm"]) ? $context["detailTerm"] : null), "example", array()))) {
            // line 17
            echo "                   N/A
                 ";
        } else {
            // line 19
            echo "                   ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailTerm"]) ? $context["detailTerm"] : null), "example", array()), "html", null, true);
            echo "
                 ";
        }
        // line 21
        echo "    </h2>

    <h2>traduction: ";
        // line 23
        if (twig_test_empty($this->getAttribute((isset($context["detailTerm"]) ? $context["detailTerm"] : null), "translation", array()))) {
            // line 24
            echo "                      N/A
                    ";
        } else {
            // line 26
            echo "                      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailTerm"]) ? $context["detailTerm"] : null), "translation", array()), "html", null, true);
            echo "
                    ";
        }
        // line 28
        echo "    </h2>

    <h2>variations: ";
        // line 30
        if (twig_test_empty($this->getAttribute((isset($context["detailTerm"]) ? $context["detailTerm"] : null), "variations", array()))) {
            // line 31
            echo "                      N/A
                    ";
        } else {
            // line 33
            echo "                      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailTerm"]) ? $context["detailTerm"] : null), "variations", array()), "html", null, true);
            echo "
                    ";
        }
        // line 35
        echo "    </h2>

    <h2>prononciation: ";
        // line 37
        if (twig_test_empty($this->getAttribute((isset($context["detailTerm"]) ? $context["detailTerm"] : null), "pronunciation", array()))) {
            // line 38
            echo "                        N/A
                       ";
        } else {
            // line 40
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detailTerm"]) ? $context["detailTerm"] : null), "pronunciation", array()), "html", null, true);
            echo "
                       ";
        }
        // line 42
        echo "    </h2>

";
    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        // line 47
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " ";
    }

    public function getTemplateName()
    {
        return "detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 47,  130 => 46,  124 => 42,  118 => 40,  114 => 38,  112 => 37,  108 => 35,  102 => 33,  98 => 31,  96 => 30,  92 => 28,  86 => 26,  82 => 24,  80 => 23,  76 => 21,  70 => 19,  66 => 17,  64 => 16,  60 => 14,  54 => 12,  50 => 10,  48 => 9,  43 => 7,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
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

    <h1>le term: {{ detailTerm.term }}</h1>

    <h2>Définition: {% if detailTerm.definition1 is empty %}
                       N/A
                    {% else %}
                       {{ detailTerm.definition1 }}
                    {% endif %}
    </h2>

    <h2>example: {% if detailTerm.example is empty %}
                   N/A
                 {% else %}
                   {{ detailTerm.example }}
                 {% endif %}
    </h2>

    <h2>traduction: {% if detailTerm.translation is empty %}
                      N/A
                    {% else %}
                      {{ detailTerm.translation }}
                    {% endif %}
    </h2>

    <h2>variations: {% if detailTerm.variations is empty %}
                      N/A
                    {% else %}
                      {{ detailTerm.variations }}
                    {% endif %}
    </h2>

    <h2>prononciation: {% if detailTerm.pronunciation is empty %}
                        N/A
                       {% else %}
                        {{ detailTerm.pronunciation }}
                       {% endif %}
    </h2>

{% endblock %}

{% block javascripts %}
  {{ parent () }} {# blabla #}
{% endblock %}
", "detail.html.twig", "C:\\wamp64\\www\\wiki\\View\\templates\\detail.html.twig");
    }
}
