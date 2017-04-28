<?php

/* layout.html.twig */
class __TwigTemplate_21347e3bd8771731e967a61b9fa2c12022761ac15f80869ce2cef54580e037c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    <!-- Custom styles for this template -->
    <link href=\"dashboard.css\" rel=\"stylesheet\">
  </head>

  <body>
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
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>
    </nav>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <nav class=\"col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar\">
          <ul class=\"nav nav-pills flex-column\">
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
          </ul>
        </nav>

        <main class=\"col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3\">

          ";
        // line 76
        echo "          ";
        $this->displayBlock('main', $context, $blocks);
        // line 77
        echo "
        </main>

      </div>
    </div>

    ";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 87
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

    // line 76
    public function block_main($context, array $blocks = array())
    {
    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        // line 84
        echo "      <script src=\"Assets/js/jquery-3.2.1.min.js\" charset=\"utf-8\"></script>
      <script src=\"Assets/js/bootstrap.min.js\" charset=\"utf-8\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  135 => 84,  132 => 83,  127 => 76,  121 => 9,  114 => 87,  112 => 83,  104 => 77,  101 => 76,  32 => 9,  22 => 1,);
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

    <!-- Custom styles for this template -->
    <link href=\"dashboard.css\" rel=\"stylesheet\">
  </head>

  <body>
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
        </ul>
        <form class=\"form-inline mt-2 mt-md-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>
    </nav>

    <div class=\"container-fluid\">
      <div class=\"row\">
        <nav class=\"col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar\">
          <ul class=\"nav nav-pills flex-column\">
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
          </ul>
        </nav>

        <main class=\"col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3\">

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
", "layout.html.twig", "C:\\wamp64\\www\\wiki\\View\\templates\\layout.html.twig");
    }
}
