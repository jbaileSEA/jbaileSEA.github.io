<?php

/* partials/blueprints-new-custom.html.twig */
class __TwigTemplate_e4a113587831ad7c58e19fea8168925c57f32b9a89bfdc56cdcbb9da8a17d2a4 extends Twig_Template
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
        $context["form_id"] = ((($context["form_id"] ?? null)) ? (($context["form_id"] ?? null)) : ("blueprints"));
        // line 2
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 3
        echo "
<form id=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" method=\"post\" data-grav-form=\"";
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\" data-grav-keepalive=\"true\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["blueprints"] ?? null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 6
            echo "        ";
            if ($this->getAttribute($context["field"], "type", array())) {
                // line 7
                echo "            ";
                $context["value"] = (($this->getAttribute($context["field"], "name", array())) ? ($this->getAttribute(($context["data"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method")) : ($this->getAttribute(($context["data"] ?? null), "toArray", array())));
                // line 8
                echo "            <div class=\"block block-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                echo "\">
                ";
                // line 9
                if (($this->getAttribute($context["field"], "type", array()) == "section")) {
                    // line 10
                    echo "                    ";
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "partials/blueprints-new-custom.html.twig", 10)->display($context);
                    // line 11
                    echo "                ";
                } else {
                    // line 12
                    echo "                    ";
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "partials/blueprints-new-custom.html.twig", 12)->display($context);
                    // line 13
                    echo "                ";
                }
                // line 14
                echo "            </div>
        ";
            }
            // line 16
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    <input type=\"hidden\" name=\"task\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "\"/>
    <div class=\"button-bar\">
        <button class=\"button primary\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</button>
    </div>

    ";
        // line 23
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("admin-form", "admin-nonce");
        echo "

</form>
";
    }

    public function getTemplateName()
    {
        return "partials/blueprints-new-custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 23,  100 => 20,  95 => 18,  92 => 17,  78 => 16,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  60 => 9,  55 => 8,  52 => 7,  49 => 6,  32 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set form_id = form_id ? form_id : 'blueprints' %}
{% set scope = scope ?: 'data.' %}

<form id=\"{{ form_id }}\" method=\"post\" data-grav-form=\"{{ form_id }}\" data-grav-keepalive=\"true\">
    {% for field in blueprints.fields %}
        {% if field.type %}
            {% set value = field.name ? data.value(field.name) : data.toArray %}
            <div class=\"block block-{{ field.type }}\">
                {% if field.type == 'section' %}
                    {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                {% else %}
                    {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                {% endif %}
            </div>
        {% endif %}
    {% endfor %}

    <input type=\"hidden\" name=\"task\" value=\"{{ form_id }}\"/>
    <div class=\"button-bar\">
        <button class=\"button primary\">{{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</button>
    </div>

    {{ nonce_field('admin-form', 'admin-nonce')|raw }}

</form>
", "partials/blueprints-new-custom.html.twig", "/Users/jon/Portfolio/user/plugins/core-service-manager/admin/templates-twelvetone/partials/blueprints-new-custom.html.twig");
    }
}
