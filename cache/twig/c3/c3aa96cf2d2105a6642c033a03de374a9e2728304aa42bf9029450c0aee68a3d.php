<?php

/* partials/pagination.html.twig */
class __TwigTemplate_7d05d3287c5ecdda95788bf592ce8771ebca92116e86bb1b209db2b7d31979ac extends Twig_Template
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
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 2
            if ((($context["base_url"] ?? null) == "")) {
                // line 3
                echo "    ";
                $context["base_url"] = "/";
            }
            // line 5
            echo "<div class=\"pagination\">
    <div class=\"pages\">
      ";
            // line 7
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", array())) {
                // line 8
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", array())), array("//" => "/"));
                // line 9
                echo "        <a rel=\"prev\" href=\"";
                echo ($context["url"] ?? null);
                echo "\">&laquo;</a>
    ";
            } else {
                // line 11
                echo "        <span>&laquo;</span>
    ";
            }
            // line 13
            echo "
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 15
                echo "        ";
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 16
                    echo "            <span>";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</span>
        ";
                } elseif ($this->getAttribute(                // line 17
$context["paginate"], "isInDelta", array())) {
                    // line 18
                    echo "        ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute($context["paginate"], "url", array())), array("//" => "/"));
                    // line 19
                    echo "      <a href=\"";
                    echo ($context["url"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a>
        ";
                } elseif ($this->getAttribute(                // line 20
$context["paginate"], "isDeltaBorder", array())) {
                    // line 21
                    echo "            <span>&hellip;</span>
        ";
                }
                // line 23
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", array())) {
                // line 25
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", array())), array("//" => "/"));
                // line 26
                echo "        <a rel=\"next\" href=\"";
                echo ($context["url"] ?? null);
                echo "\">&raquo;</a>
    ";
            } else {
                // line 28
                echo "        <span>&raquo;</span>
    ";
            }
            // line 30
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  97 => 28,  91 => 26,  88 => 25,  85 => 24,  79 => 23,  75 => 21,  73 => 20,  66 => 19,  63 => 18,  61 => 17,  56 => 16,  53 => 15,  49 => 14,  46 => 13,  42 => 11,  36 => 9,  33 => 8,  31 => 7,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pagination|length > 1 %}
{% if base_url == '' %}
    {% set base_url = '/' %}
{% endif %}
<div class=\"pagination\">
    <div class=\"pages\">
      {% if pagination.hasPrev %}
        {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <a rel=\"prev\" href=\"{{ url }}\">&laquo;</a>
    {% else %}
        <span>&laquo;</span>
    {% endif %}

    {% for paginate in pagination %}
        {% if paginate.isCurrent %}
            <span>{{ paginate.number }}</span>
        {% elseif paginate.isInDelta %}
        {% set url =  (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
      <a href=\"{{ url }}\">{{ paginate.number }}</a>
        {% elseif paginate.isDeltaBorder %}
            <span>&hellip;</span>
        {% endif %}
    {% endfor %}
    {% if pagination.hasNext %}
        {% set url =  (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <a rel=\"next\" href=\"{{ url }}\">&raquo;</a>
    {% else %}
        <span>&raquo;</span>
    {% endif %}
    </div>
</div>
{% endif %}
", "partials/pagination.html.twig", "/Users/jon/Portfolio/user/themes/striped/templates/partials/pagination.html.twig");
    }
}
