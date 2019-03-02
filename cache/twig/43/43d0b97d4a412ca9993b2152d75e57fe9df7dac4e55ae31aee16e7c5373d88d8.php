<?php

/* partials/base.html.twig */
class __TwigTemplate_be72d81bd2db4035b4559babf4d8bd74765cf7538d7a0f3ab6c8311d795f2949 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\"> <!--<![endif]-->
<head>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 47
        echo "</head>

<body class=\"";
        // line 49
        echo $this->getAttribute(($context["site"] ?? null), "sidebar_position", array());
        echo "-sidebar\">
    <div id=\"wrapper\">
        ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "        ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 62
        echo "
    </div>

</body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
        ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />

        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

        <!--[if lte IE 8]><script src=\"";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/js/ie/html5shiv.js");
        echo "\"></script><![endif]-->

        ";
        // line 29
        if ($this->getAttribute(($context["site"] ?? null), "calendar", array())) {
            // line 30
            echo "           <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
       ";
        }
        // line 32
        echo "
       <!--[if lte IE 8]><script src=\"";
        // line 33
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/js/ie/respond.min.js");
        echo "\"></script><![endif]-->
       <!--[if lte IE 8]><script src=\"";
        // line 34
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/css/ie8.css");
        echo "\"></script><![endif]-->

       ";
        // line 36
        if ($this->getAttribute(($context["site"] ?? null), "calendar", array())) {
            // line 37
            echo "        <script type=\"text/javascript\">
        \$(function() {
            \$( \"#datepicker\" ).datepicker({
                hideIfNoPrevNext: true
            });
        });
        </script>
    ";
        }
        // line 45
        echo "
    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css/main.css"), "method");
        // line 16
        echo "        ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 21
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/util.js"), "method");
        // line 23
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/main.js"), "method");
        // line 24
        echo "        ";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "            <div id=\"content\">
                <div class=\"inner\">
                    ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 56
        echo "                </div>
            </div>
        ";
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
        // line 55
        echo "                    ";
    }

    // line 59
    public function block_sidebar($context, array $blocks = array())
    {
        // line 60
        echo "            ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 60)->display($context);
        // line 61
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 61,  204 => 60,  201 => 59,  197 => 55,  194 => 54,  188 => 56,  186 => 54,  182 => 52,  179 => 51,  175 => 24,  172 => 23,  169 => 22,  166 => 21,  163 => 20,  160 => 19,  156 => 16,  153 => 15,  150 => 14,  145 => 45,  135 => 37,  133 => 36,  128 => 34,  124 => 33,  121 => 32,  117 => 30,  115 => 29,  110 => 27,  104 => 25,  102 => 19,  96 => 17,  94 => 14,  89 => 12,  86 => 11,  84 => 10,  76 => 9,  73 => 8,  70 => 7,  61 => 62,  58 => 59,  56 => 51,  51 => 49,  47 => 47,  45 => 7,  40 => 5,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
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
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"{{ grav.language.getLanguage ?: 'en' }}\"> <!--<![endif]-->
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />

        {% block stylesheets %}
            {% do assets.addCss('theme://assets/css/main.css') %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://assets/js/skel.min.js') %}
            {% do assets.addJs('theme://assets/js/util.js') %}
            {% do assets.addJs('theme://assets/js/main.js') %}
        {% endblock %}
        {{ assets.js() }}

        <!--[if lte IE 8]><script src=\"{{ url('theme://assets/js/ie/html5shiv.js') }}\"></script><![endif]-->

        {% if site.calendar %}
           <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
       {% endif %}

       <!--[if lte IE 8]><script src=\"{{ url('theme://assets/js/ie/respond.min.js') }}\"></script><![endif]-->
       <!--[if lte IE 8]><script src=\"{{ url('theme://assets/css/ie8.css') }}\"></script><![endif]-->

       {% if site.calendar %}
        <script type=\"text/javascript\">
        \$(function() {
            \$( \"#datepicker\" ).datepicker({
                hideIfNoPrevNext: true
            });
        });
        </script>
    {% endif %}

    {% endblock head%}
</head>

<body class=\"{{ site.sidebar_position }}-sidebar\">
    <div id=\"wrapper\">
        {% block body %}
            <div id=\"content\">
                <div class=\"inner\">
                    {% block content %}
                    {% endblock %}
                </div>
            </div>
        {% endblock %}
        {% block sidebar %}
            {% include 'partials/sidebar.html.twig' %}
        {% endblock %}

    </div>

</body>
</html>
", "partials/base.html.twig", "/Users/jon/Portfolio/user/themes/striped/templates/partials/base.html.twig");
    }
}
