<?php

/* forms/fields/order-child/order-child.html.twig */
class __TwigTemplate_3c61c695580e5f17f5876eb29a160b141a6e3ce3ee76011b886e117c40916504 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin-power-tools", array(), "array"), "child_reordering_enabled", array())) {
            // line 2
            echo "    
    ";
            // line 3
            $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
            // line 4
            echo "    ";
            $context["siblings"] = $this->getAttribute(($context["data"] ?? null), "children", array());
            // line 5
            echo "    ";
            $context["canOrder"] = true;
            // line 6
            echo "    ";
            $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", array()) == "vertical");
            // line 7
            echo "
    ";
            // line 9
            echo "
    <div class=\"form-field grid pure-g";
            // line 10
            if (($context["vertical"] ?? null)) {
                echo " vertical";
            }
            echo "\">
        <div class=\"form-label";
            // line 11
            if ( !($context["vertical"] ?? null)) {
                echo " block size-1-3 pure-u-1-3";
            }
            echo "\">
            <label>
                ";
            // line 13
            if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
                // line 14
                echo "                    <span class=\"tooltip\" data-asTooltip-position=\"w\"
                          title=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "help", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
                echo "</span>
                ";
            } else {
                // line 17
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", array())), "html", null, true);
                echo "
                ";
            }
            // line 19
            echo "                ";
            echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
            echo "
            </label>
        </div>
        <div class=\"form-data";
            // line 22
            if ( !($context["vertical"] ?? null)) {
                echo " block size-2-3 pure-u-2-3";
            }
            echo "\">
            <div class=\"form-order-wrapper ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()), "html", null, true);
            echo "\">
                <input
                        type=\"hidden\"
                        data-order-child
                        ";
            // line 27
            if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 28
            echo "                        name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array()))), "html", null, true);
            echo "\"
                        value=\"\"/>
                ";
            // line 30
            if ( !($context["canOrder"] ?? null)) {
                // line 31
                echo "                    <div class=\"notice\">";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX");
                echo "</div>
                ";
            }
            // line 33
            echo "                ";
            if ((twig_length_filter($this->env, ($context["siblings"] ?? null)) == 0)) {
                // line 34
                echo "                    <label>No Child Pages</label>
                ";
            } elseif ((twig_length_filter($this->env,             // line 35
($context["siblings"] ?? null)) < 200)) {
                // line 36
                echo "                    ";
                $context["sortable_count"] = 0;
                // line 37
                echo "                    <ul id=\"ordering-child\" class=\"orderable ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", array()), "html", null, true);
                echo "\">
                        ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    if ($this->getAttribute($context["page"], "order", array())) {
                        // line 39
                        echo "                            <li class=\"drag-handle\"
                                data-id=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "slug", array()), "html", null, true);
                        echo "\" ";
                        echo ((($this->getAttribute($context["page"], "slug", array()) == $this->getAttribute(($context["data"] ?? null), "slug", array()))) ? ("data-active-id") : (""));
                        echo "><span
                                        class=\"page-order\">";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "order", array()), "html", null, true);
                        echo "</span> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()));
                        echo " <a
                                        href=\"";
                        // line 42
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->getPageUrl($context, $context["page"]), "html", null, true);
                        echo "\"><i class=\"fa fa-external-link\"></i></a></li>
                            ";
                        // line 43
                        $context["sortable_count"] = $this->getAttribute($context["loop"], "index", array());
                        // line 44
                        echo "                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                    </ul>
                    ";
                // line 46
                if ((($context["sortable_count"] ?? null) < twig_length_filter($this->env, ($context["siblings"] ?? null)))) {
                    // line 47
                    echo "                        <label>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UNSORTABLE_PAGES"), "html", null, true);
                    echo "</label>
                        <ul class=\"orderable disabled\">
                            ";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["siblings"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                        if ( !$this->getAttribute($context["page"], "order", array())) {
                            // line 50
                            echo "                                <li ";
                            echo ((($this->getAttribute($context["page"], "slug", array()) == $this->getAttribute(($context["data"] ?? null), "slug", array()))) ? ("data-active-id") : (""));
                            echo ">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()));
                            echo " <a
                                            href=\"";
                            // line 51
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->getPageUrl($context, $context["page"]), "html", null, true);
                            echo "\"><i class=\"fa fa-external-link\"></i></a></li>
                            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "                        </ul>
                    ";
                }
                // line 55
                echo "                ";
            } else {
                // line 56
                echo "                    <div class=\"notice\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS"), "html", null, true);
                echo "</div>
                ";
            }
            // line 58
            echo "            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/order-child/order-child.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 58,  207 => 56,  204 => 55,  200 => 53,  191 => 51,  184 => 50,  179 => 49,  173 => 47,  171 => 46,  168 => 45,  158 => 44,  156 => 43,  152 => 42,  146 => 41,  140 => 40,  137 => 39,  126 => 38,  121 => 37,  118 => 36,  116 => 35,  113 => 34,  110 => 33,  104 => 31,  102 => 30,  96 => 28,  92 => 27,  85 => 23,  79 => 22,  72 => 19,  66 => 17,  59 => 15,  56 => 14,  54 => 13,  47 => 11,  41 => 10,  38 => 9,  35 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if config.plugins['admin-power-tools'].child_reordering_enabled %}
    
    {% set value = (value is null ? field.default : value) %}
    {% set siblings = data.children %}
    {% set canOrder = true %}
    {% set vertical = field.style == 'vertical' %}

    {#TODO refactor common code from order and order-child#}

    <div class=\"form-field grid pure-g{% if vertical %} vertical{% endif %}\">
        <div class=\"form-label{% if not vertical %} block size-1-3 pure-u-1-3{% endif %}\">
            <label>
                {% if field.help %}
                    <span class=\"tooltip\" data-asTooltip-position=\"w\"
                          title=\"{{ field.help|e|tu }}\">{{ field.label|tu }}</span>
                {% else %}
                    {{ field.label|tu }}
                {% endif %}
                {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
            </label>
        </div>
        <div class=\"form-data{% if not vertical %} block size-2-3 pure-u-2-3{% endif %}\">
            <div class=\"form-order-wrapper {{ field.size }}\">
                <input
                        type=\"hidden\"
                        data-order-child
                        {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                        name=\"{{ (scope ~ field.name)|fieldName }}\"
                        value=\"\"/>
                {% if not canOrder %}
                    <div class=\"notice\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_PAGE_NO_PREFIX\"|tu|raw }}</div>
                {% endif %}
                {% if siblings|length == 0 %}
                    <label>No Child Pages</label>
                {% elseif siblings|length < 200 %}
                    {% set sortable_count = 0 %}
                    <ul id=\"ordering-child\" class=\"orderable {{ field.classes }}\">
                        {% for page in siblings if page.order %}
                            <li class=\"drag-handle\"
                                data-id=\"{{ page.slug }}\" {{ page.slug == data.slug ? 'data-active-id' : '' }}><span
                                        class=\"page-order\">{{ page.order }}</span> {{ page.title|e }} <a
                                        href=\"{{ getPageUrl(page) }}\"><i class=\"fa fa-external-link\"></i></a></li>
                            {% set sortable_count = loop.index %}
                        {% endfor %}
                    </ul>
                    {% if sortable_count < siblings|length %}
                        <label>{{ \"PLUGIN_ADMIN.UNSORTABLE_PAGES\"|tu }}</label>
                        <ul class=\"orderable disabled\">
                            {% for page in siblings if not page.order %}
                                <li {{ page.slug == data.slug ? 'data-active-id' : '' }}>{{ page.title|e }} <a
                                            href=\"{{ getPageUrl(page) }}\"><i class=\"fa fa-external-link\"></i></a></li>
                            {% endfor %}
                        </ul>
                    {% endif %}
                {% else %}
                    <div class=\"notice\">{{ \"PLUGIN_ADMIN.ORDERING_DISABLED_BECAUSE_TOO_MANY_SIBLINGS\"|tu }}</div>
                {% endif %}
            </div>
        </div>
    </div>
{% endif %}", "forms/fields/order-child/order-child.html.twig", "/Users/jon/Portfolio/user/plugins/admin-power-tools/admin/templates/forms/fields/order-child/order-child.html.twig");
    }
}
