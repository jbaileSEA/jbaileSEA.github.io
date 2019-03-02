<?php

/* item.html.twig */
class __TwigTemplate_767e1c8b86f367413b258d9801b2371403da762088e132edeee82ef67b18e8d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->loadTemplate("item.html.twig", "item.html.twig", 1, "292151779")->display($context);
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
\t{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
      {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
      {% set feed_url = base_url~'/'~page.parent.slug %}
  {% endif  %}
   
\t{% block content %}

    {% if site.calendar %}
        <script type=\"text/javascript\">
         \$(function() {
            \$( \"#datepicker\" ).datepicker( \"setDate\", \"{{ page.date|date(\"m\") }}/{{ page.date|date(\"d\") }}/{{ page.date|date(\"Y\") }}\" );
        });
        </script>
        {% endif %}



      {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}
\t\t
\t\t\t {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/Users/jon/Portfolio/user/themes/striped/templates/item.html.twig");
    }
}


/* item.html.twig */
class __TwigTemplate_767e1c8b86f367413b258d9801b2371403da762088e132edeee82ef67b18e8d4_292151779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["base_url"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "url", array());
        // line 3
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 5
        if ((($context["base_url"] ?? null) == "/")) {
            // line 6
            $context["base_url"] = "";
        }
        // line 9
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 10
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", array()), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
    ";
        // line 15
        if ($this->getAttribute(($context["site"] ?? null), "calendar", array())) {
            // line 16
            echo "        <script type=\"text/javascript\">
         \$(function() {
            \$( \"#datepicker\" ).datepicker( \"setDate\", \"";
            // line 18
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "m");
            echo "/";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d");
            echo "/";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "Y");
            echo "\" );
        });
        </script>
        ";
        }
        // line 22
        echo "


      ";
        // line 25
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
            // line 26
            echo "        ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "item.html.twig", 26)->display($context);
            // line 27
            echo "        ";
        }
        // line 28
        echo "\t\t
\t\t\t ";
        // line 29
        $this->loadTemplate("partials/blog_item.html.twig", "item.html.twig", 29)->display(array_merge($context, array("truncate" => false, "big_header" => true)));
        // line 30
        echo "\t";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  157 => 29,  154 => 28,  151 => 27,  148 => 26,  146 => 25,  141 => 22,  130 => 18,  126 => 16,  124 => 15,  121 => 14,  118 => 13,  114 => 1,  111 => 10,  109 => 9,  106 => 6,  104 => 5,  102 => 3,  100 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}
\t{% set base_url = page.parent.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
      {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
      {% set feed_url = base_url~'/'~page.parent.slug %}
  {% endif  %}
   
\t{% block content %}

    {% if site.calendar %}
        <script type=\"text/javascript\">
         \$(function() {
            \$( \"#datepicker\" ).datepicker( \"setDate\", \"{{ page.date|date(\"m\") }}/{{ page.date|date(\"d\") }}/{{ page.date|date(\"Y\") }}\" );
        });
        </script>
        {% endif %}



      {% if config.plugins.breadcrumbs.enabled %}
        {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}
\t\t
\t\t\t {% include 'partials/blog_item.html.twig' with {'truncate':false,'big_header':true} %}
\t{% endblock %}

{% endembed %}
", "item.html.twig", "/Users/jon/Portfolio/user/themes/striped/templates/item.html.twig");
    }
}
