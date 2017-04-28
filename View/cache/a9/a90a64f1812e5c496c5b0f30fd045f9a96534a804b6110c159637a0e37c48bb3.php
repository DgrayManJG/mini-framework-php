<?php

/* connection.html.twig */
class __TwigTemplate_f59ef68adde5ffca127d2bf535a69d2f8a9aeba92b93a29d6516f40667e6588f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "connection.html.twig", 1);
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
        echo "<br>
<br>

<h1>Connection</h1>
<br>

<form class=\"?page=connection\" method=\"post\">

    <div class=\"form-group row\">
      <label for=\"example-text-input\" class=\"col-2 col-form-label\">username</label>
      <div class=\"col-10\">
        <input class=\"form-control\" type=\"text\" name=\"username\" value=\"";
        // line 17
        if (twig_test_empty($this->getAttribute((isset($context["param"]) ? $context["param"] : null), "username", array()))) {
            echo "jimmy";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["param"]) ? $context["param"] : null), "username", array()), "html", null, true);
        }
        echo "\" id=\"example-text-input\">
      </div>
    </div>

    <div class=\"form-group row\">
      <label for=\"example-password-input\" class=\"col-2 col-form-label\">Password</label>
      <div class=\"col-10\">
        <input class=\"form-control\" type=\"password\" name=\"password\" value=\"";
        // line 24
        if (twig_test_empty($this->getAttribute((isset($context["param"]) ? $context["param"] : null), "password", array()))) {
            echo "jimmy";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["param"]) ? $context["param"] : null), "password", array()), "html", null, true);
        }
        echo "\" id=\"example-password-input\">
      </div>
    </div>

    <button type=\"submit\" name=\"button\">submit</button>
  </form>

";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "connection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 34,  83 => 33,  67 => 24,  53 => 17,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
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
<br>
<br>

<h1>Connection</h1>
<br>

<form class=\"?page=connection\" method=\"post\">

    <div class=\"form-group row\">
      <label for=\"example-text-input\" class=\"col-2 col-form-label\">username</label>
      <div class=\"col-10\">
        <input class=\"form-control\" type=\"text\" name=\"username\" value=\"{% if param.username is empty %}jimmy{% else %}{{ param.username }}{% endif %}\" id=\"example-text-input\">
      </div>
    </div>

    <div class=\"form-group row\">
      <label for=\"example-password-input\" class=\"col-2 col-form-label\">Password</label>
      <div class=\"col-10\">
        <input class=\"form-control\" type=\"password\" name=\"password\" value=\"{% if param.password is empty %}jimmy{% else %}{{ param.password }}{% endif %}\" id=\"example-password-input\">
      </div>
    </div>

    <button type=\"submit\" name=\"button\">submit</button>
  </form>

{% endblock %}

{% block javascripts %}
  {{ parent () }}
{% endblock %}
", "connection.html.twig", "C:\\wamp64\\www\\wiki\\View\\templates\\connection.html.twig");
    }
}
