<?php

/* layout.html.twig */
class __TwigTemplate_8e6111fc103f079de2dd516949704387b5455d1fb4fff76c1d5371a5c26a7fb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_bar' => array($this, 'block_top_bar'),
            'left_bar' => array($this, 'block_left_bar'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"Assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"Assets/css/style.css\">
  </head>

  <body>
  ";
        // line 17
        $this->displayBlock('top_bar', $context, $blocks);
        // line 64
        echo "
    <div class=\"container-fluid\">
      <div class=\"row\">

      ";
        // line 68
        $this->displayBlock('left_bar', $context, $blocks);
        // line 95
        echo "
        <main class=\"col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3\">
          ";
        // line 97
        if (twig_test_empty($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "errors", array()))) {
            // line 98
            echo "          ";
        } else {
            // line 99
            echo "          <div class=\"alert alert-danger\">
            <strong>Danger!</strong> ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "errors", array()), "html", null, true);
            echo ".
          </div>
          ";
        }
        // line 103
        echo "
          ";
        // line 104
        if (twig_test_empty($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "success", array()))) {
            // line 105
            echo "          ";
        } else {
            // line 106
            echo "          <div class=\"alert alert-success\">
            <strong>Success!</strong> ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "success", array()), "html", null, true);
            echo ".
          </div>
          ";
        }
        // line 110
        echo "          ";
        // line 111
        echo "          ";
        $this->displayBlock('main', $context, $blocks);
        // line 112
        echo "
        </main>

      </div>
    </div>

    ";
        // line 118
        $this->displayBlock('javascripts', $context, $blocks);
        // line 122
        echo "
  </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Wiki";
    }

    // line 17
    public function block_top_bar($context, array $blocks = array())
    {
        // line 18
        echo "    <nav class=\"navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse\">
      <button class=\"navbar-toggler navbar-toggler-right hidden-lg-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Dashboard</a>

      <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"?page=accueil\">Home <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"?page=list\">Liste</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"?page=faq\">FAQ</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"?page=vuejs\">VueJS</a>
          </li>
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <ul class=\"navbar-nav mr-auto\">
            ";
        // line 41
        if (twig_test_empty($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "username", array()))) {
            // line 42
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"?page=connection\">Connection</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"?page=inscription\">Inscription</a>
            </li>
            ";
        } else {
            // line 49
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link\">Bonjour ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "username", array()), "html", null, true);
            echo "</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"?page=deconnexion\">Deconnexion</a>
            </li>
            ";
        }
        // line 56
        echo "
          </ul>
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>
    </nav>
  ";
    }

    // line 68
    public function block_left_bar($context, array $blocks = array())
    {
        // line 69
        echo "        <nav class=\"col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar\">
          <!-- <ul class=\"nav nav-pills flex-column\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Overview <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Reports</a>
            </li>
          </ul>

          <ul class=\"nav nav-pills flex-column\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Nav item</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Nav item again</a>
            </li>
          </ul>

          <ul class=\"nav nav-pills flex-column\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Nav item again</a>
            </li>
          </ul> -->
        </nav>
        ";
    }

    // line 111
    public function block_main($context, array $blocks = array())
    {
    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
        // line 119
        echo "      <script src=\"Assets/js/jquery-3.2.1.min.js\" charset=\"utf-8\"></script>
      <script src=\"Assets/js/bootstrap.min.js\" charset=\"utf-8\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 119,  217 => 118,  212 => 111,  183 => 69,  180 => 68,  169 => 56,  160 => 50,  157 => 49,  148 => 42,  146 => 41,  121 => 18,  118 => 17,  112 => 9,  105 => 122,  103 => 118,  95 => 112,  92 => 111,  90 => 110,  84 => 107,  81 => 106,  78 => 105,  76 => 104,  73 => 103,  67 => 100,  64 => 99,  61 => 98,  59 => 97,  55 => 95,  53 => 68,  47 => 64,  45 => 17,  34 => 9,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% block title %}Wiki{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"Assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"Assets/css/style.css\">
  </head>

  <body>
  {% block top_bar %}
    <nav class=\"navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse\">
      <button class=\"navbar-toggler navbar-toggler-right hidden-lg-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">Dashboard</a>

      <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"?page=accueil\">Home <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"?page=list\">Liste</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"?page=faq\">FAQ</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"?page=vuejs\">VueJS</a>
          </li>
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <ul class=\"navbar-nav mr-auto\">
            {% if session.username is empty %}
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"?page=connection\">Connection</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"?page=inscription\">Inscription</a>
            </li>
            {% else %}
            <li class=\"nav-item\">
              <a class=\"nav-link\">Bonjour {{ session.username }}</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"?page=deconnexion\">Deconnexion</a>
            </li>
            {% endif %}

          </ul>
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>
    </nav>
  {% endblock %}

    <div class=\"container-fluid\">
      <div class=\"row\">

      {% block left_bar %}
        <nav class=\"col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar\">
          <!-- <ul class=\"nav nav-pills flex-column\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" href=\"#\">Overview <span class=\"sr-only\">(current)</span></a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Reports</a>
            </li>
          </ul>

          <ul class=\"nav nav-pills flex-column\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Nav item</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Nav item again</a>
            </li>
          </ul>

          <ul class=\"nav nav-pills flex-column\">
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Nav item again</a>
            </li>
          </ul> -->
        </nav>
        {% endblock %}

        <main class=\"col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3\">
          {% if session.errors is empty %}
          {% else %}
          <div class=\"alert alert-danger\">
            <strong>Danger!</strong> {{ session.errors }}.
          </div>
          {% endif %}

          {% if session.success is empty %}
          {% else %}
          <div class=\"alert alert-success\">
            <strong>Success!</strong> {{ session.success }}.
          </div>
          {% endif %}
          {# définit le bloc de contenu principal #}
          {% block main %}{% endblock %}

        </main>

      </div>
    </div>

    {% block javascripts %}
      <script src=\"Assets/js/jquery-3.2.1.min.js\" charset=\"utf-8\"></script>
      <script src=\"Assets/js/bootstrap.min.js\" charset=\"utf-8\"></script>
    {% endblock %}

  </body>
</html>
", "layout.html.twig", "C:\\xampp\\htdocs\\mini-framework-php\\View\\templates\\layout.html.twig");
    }
}
