<?php

/* registration.html.twig */
class __TwigTemplate_1099aac2d1de3b606a6457c479cda54901268d63095d1303404738d578bee6d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "registration.html.twig", 1);
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

<h1>Inscription</h1>
<br>

<form class=\"?page=inscription\" method=\"post\">

  <div class=\"form-group row\">
    <label for=\"example-text-input\" class=\"col-2 col-form-label\">username</label>
    <div class=\"col-10\">
      <input class=\"form-control\" type=\"text\" name=\"username\" value=\"";
        // line 17
        if (twig_test_empty($this->getAttribute(($context["param"] ?? null), "username", array()))) {
            echo "jimmy";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["param"] ?? null), "username", array()), "html", null, true);
        }
        echo "\" id=\"example-text-input\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label for=\"example-email-input\" class=\"col-2 col-form-label\">Email</label>
    <div class=\"col-10\">
      <input class=\"form-control\" type=\"email\" name=\"email\" value=\"";
        // line 24
        if (twig_test_empty($this->getAttribute(($context["param"] ?? null), "email", array()))) {
            echo "bootstrap@example.com";
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["param"] ?? null), "email", array()), "html", null, true);
        }
        echo "\" id=\"example-email-input\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label for=\"example-password-input\" class=\"col-2 col-form-label\">Password</label>
    <div class=\"col-10\">
      <input class=\"form-control\" type=\"password\" name=\"password\" value=\"";
        // line 31
        if (twig_test_empty($this->getAttribute(($context["param"] ?? null), "password", array()))) {
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["param"] ?? null), "password", array()), "html", null, true);
        }
        echo "\" id=\"example-password-input\">
    </div>
  </div>

  <button type=\"submit\" name=\"button\">submit</button>
</form>

";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 41,  96 => 40,  81 => 31,  67 => 24,  53 => 17,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
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

<h1>Inscription</h1>
<br>

<form class=\"?page=inscription\" method=\"post\">

  <div class=\"form-group row\">
    <label for=\"example-text-input\" class=\"col-2 col-form-label\">username</label>
    <div class=\"col-10\">
      <input class=\"form-control\" type=\"text\" name=\"username\" value=\"{% if param.username is empty %}jimmy{% else %}{{ param.username }}{% endif %}\" id=\"example-text-input\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label for=\"example-email-input\" class=\"col-2 col-form-label\">Email</label>
    <div class=\"col-10\">
      <input class=\"form-control\" type=\"email\" name=\"email\" value=\"{% if param.email is empty %}bootstrap@example.com{% else %}{{ param.email }}{% endif %}\" id=\"example-email-input\">
    </div>
  </div>

  <div class=\"form-group row\">
    <label for=\"example-password-input\" class=\"col-2 col-form-label\">Password</label>
    <div class=\"col-10\">
      <input class=\"form-control\" type=\"password\" name=\"password\" value=\"{% if param.password is empty %}{% else %}{{ param.password }}{% endif %}\" id=\"example-password-input\">
    </div>
  </div>

  <button type=\"submit\" name=\"button\">submit</button>
</form>

{% endblock %}

{% block javascripts %}
  {{ parent () }}
{% endblock %}
", "registration.html.twig", "C:\\xampp\\htdocs\\workspace\\dev_perso\\mini-framework-php\\View\\templates\\registration.html.twig");
    }
}
