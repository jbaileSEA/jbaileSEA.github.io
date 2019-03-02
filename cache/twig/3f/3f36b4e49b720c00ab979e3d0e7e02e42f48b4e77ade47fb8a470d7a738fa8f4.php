<?php

/* partials/nav.html.twig */
class __TwigTemplate_b6ce1117e5352c551c698b526f344117a4d996027bffa84a8de662e9064bf65f extends Twig_Template
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
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.login", 1 => "admin.super"))) {
            // line 2
            echo "    <nav id=\"admin-sidebar\" data-quickopen=\"";
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "sidebar", array()), "activate", array()) == "hover")) ? ("true") : ("false"));
            echo "\" data-quickopen-delay=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "sidebar", array()), "hover_delay", array()), "html", null, true);
            echo "\">
        ";
            // line 3
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "sidebar", array()), "activate", array()) != "hover")) {
                // line 4
                echo "            <div id=\"open-handle\" data-sidebar-toggle><i class=\"fa fa-angle-right\"></i></div>
        ";
            }
            // line 6
            echo "
        <div id=\"admin-logo\">
            ";
            // line 8
            $this->loadTemplate("partials/logo.html.twig", "partials/nav.html.twig", 8)->display($context);
            // line 9
            echo "        </div>

        ";
            // line 11
            $this->loadTemplate("partials/nav-user-details.html.twig", "partials/nav.html.twig", 11)->display($context);
            // line 12
            echo "
        ";
            // line 13
            $this->loadTemplate("partials/nav-quick-tray.html.twig", "partials/nav.html.twig", 13)->display($context);
            // line 14
            echo "
        <div class=\"admin-menu-wrapper\">
            <ul id=\"admin-menu\">
                ";
            // line 18
            echo "                ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "admin:sidebar", "first");
            echo "
                ";
            // line 20
            echo "                ";
            // line 21
            echo "                ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "admin:sidebar", "before:parent");
            echo "
                ";
            // line 23
            echo "                <li class=\"";
            echo (((($context["location"] ?? null) == "dashboard")) ? ("selected") : (""));
            echo "\">
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-th\"></i><em>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD"), "html", null, true);
            echo "</em></a>
                </li>
                ";
            // line 26
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.configuration", 1 => "admin.super"))) {
                // line 27
                echo "                    <li class=\"";
                echo (((((($context["location"] ?? null) == "system") || (($context["location"] ?? null) == "site")) || (($context["location"] ?? null) == "config"))) ? ("selected") : (""));
                echo "\">
                        <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/config/system\"><i class=\"fa fa-fw fa-wrench\"></i><em>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
                echo "</em></a>
                    </li>
                ";
            }
            // line 31
            echo "                ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.pages", 1 => "admin.super"))) {
                // line 32
                echo "                    <li class=\"";
                echo (((($context["location"] ?? null) == "pages")) ? ("selected") : (""));
                echo "\">
                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/pages\">
                            <i class=\"fa fa-fw fa-file-text-o\"></i>
                            <em>";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES"), "html", null, true);
                echo "</em>
                            <span class=\"badges\">
                                <span class=\"badge count\">";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "pagesCount", array()), "html", null, true);
                echo "</span>
                            </span>
                        </a>
                    </li>
                ";
            }
            // line 42
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_hooked_nav", array())) {
                // line 43
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_hooked_nav", array()));
                foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                    // line 44
                    echo "                        ";
                    if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(((($this->getAttribute($context["item"], "authorize", array(), "any", true, true) && twig_test_iterable($this->getAttribute($context["item"], "authorize", array())))) ? ($this->getAttribute($context["item"], "authorize", array())) : (array(0 => (($this->getAttribute($context["item"], "authorize", array())) ? ($this->getAttribute($context["item"], "authorize", array())) : (("admin." . (($this->getAttribute($context["item"], "location", array())) ? ($this->getAttribute($context["item"], "location", array())) : ($this->getAttribute($context["item"], "route", array())))))), 1 => "admin.super"))))) {
                        // line 45
                        echo "                            <li class=\"";
                        echo (((($context["location"] ?? null) == (($this->getAttribute($context["item"], "location", array())) ? ($this->getAttribute($context["item"], "location", array())) : ($this->getAttribute($context["item"], "route", array()))))) ? ("selected") : (""));
                        echo "\">
                                <a href=\"";
                        // line 46
                        echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                        echo "/";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "route", array())) ? ($this->getAttribute($context["item"], "route", array())) : ($this->getAttribute($context["item"], "location", array()))), "html", null, true);
                        echo "\">
                                    <i class=\"fa fa-fw ";
                        // line 47
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                        echo "\"></i>
                                    <em>";
                        // line 48
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($context["label"]), "html", null, true);
                        echo "</em>
                                    ";
                        // line 49
                        if ($this->getAttribute($context["item"], "badge", array())) {
                            // line 50
                            echo "                                    <span class=\"badges ";
                            if ($this->getAttribute($this->getAttribute($context["item"], "badge", array(), "any", false, true), "updates", array(), "any", true, true)) {
                                echo "with-updates";
                            }
                            echo "\">
                                        ";
                            // line 51
                            if ($this->getAttribute($this->getAttribute($context["item"], "badge", array(), "any", false, true), "updates", array(), "any", true, true)) {
                                echo "<span class=\"badge updates\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "badge", array()), "updates", array()), "html", null, true);
                                echo "</span>";
                            }
                            // line 52
                            echo "                                        <span class=\"badge count\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "badge", array()), "count", array()), "html", null, true);
                            echo "</span>
                                    </span>
                                    ";
                        }
                        // line 55
                        echo "                                </a>
                            </li>
                        ";
                    }
                    // line 58
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                ";
            }
            // line 60
            echo "                ";
            // line 61
            echo "                ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "admin:sidebar", "after:parent");
            echo "
                ";
            // line 63
            echo "                ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.plugins", 1 => "admin.super"))) {
                // line 64
                echo "                    <li class=\"";
                echo (((($context["location"] ?? null) == "plugins")) ? ("selected") : (""));
                echo "\">
                        <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/plugins\">
                            <i class=\"fa fa-fw fa-plug\"></i>
                            <em>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGINS"), "html", null, true);
                echo "</em>
                            <span class=\"badges\">
                                <span class=\"badge updates\"></span>
                                <span class=\"badge count\">";
                // line 70
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "plugins", array())), "html", null, true);
                echo "</span>
                            </span>
                        </a>
                    </li>
                ";
            }
            // line 75
            echo "                ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.themes", 1 => "admin.super"))) {
                // line 76
                echo "                    <li class=\"";
                echo (((($context["location"] ?? null) == "themes")) ? ("selected") : (""));
                echo "\">
                        <a href=\"";
                // line 77
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/themes\">
                            <i class=\"fa fa-fw fa-tint\"></i>
                            <em>";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES"), "html", null, true);
                echo "</em>
                            <span class=\"badges\">
                                <span class=\"badge updates\"></span>
                                <span class=\"badge count\">";
                // line 82
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "themes", array())), "html", null, true);
                echo "</span>
                            </span>
                        </a>
                    </li>
                ";
            }
            // line 87
            echo "                ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.tools", 1 => "admin.super"))) {
                // line 88
                echo "                    <li class=\"";
                echo (((($context["location"] ?? null) == "tools")) ? ("selected") : (""));
                echo "\">
                        <a href=\"";
                // line 89
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo "/tools\">
                            <i class=\"fa fa-fw fa-briefcase\"></i>
                            <em>";
                // line 91
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TOOLS"), "html", null, true);
                echo "</em>
                        </a>
                    </li>
                ";
            }
            // line 95
            echo "
                ";
            // line 96
            try {
                $this->loadTemplate("partials/nav-pro.html.twig", "partials/nav.html.twig", 96)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 97
            echo "
                <li>
                    <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["base_url_relative"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "logout"), 1 => "logout-form", 2 => "logout-nonce"), "method"), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-sign-out\"></i><em>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOGOUT"), "html", null, true);
            echo "</em></a>
                </li>
                ";
            // line 102
            echo "                ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "admin:sidebar", "last");
            echo "
                ";
            // line 104
            echo "            </ul>
        </div>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 104,  289 => 102,  282 => 99,  278 => 97,  271 => 96,  268 => 95,  261 => 91,  256 => 89,  251 => 88,  248 => 87,  240 => 82,  234 => 79,  229 => 77,  224 => 76,  221 => 75,  213 => 70,  207 => 67,  202 => 65,  197 => 64,  194 => 63,  189 => 61,  187 => 60,  184 => 59,  178 => 58,  173 => 55,  166 => 52,  160 => 51,  153 => 50,  151 => 49,  147 => 48,  143 => 47,  137 => 46,  132 => 45,  129 => 44,  124 => 43,  121 => 42,  113 => 37,  108 => 35,  103 => 33,  98 => 32,  95 => 31,  87 => 28,  82 => 27,  80 => 26,  73 => 24,  68 => 23,  63 => 21,  61 => 20,  56 => 18,  51 => 14,  49 => 13,  46 => 12,  44 => 11,  40 => 9,  38 => 8,  34 => 6,  30 => 4,  28 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if authorize(['admin.login', 'admin.super']) %}
    <nav id=\"admin-sidebar\" data-quickopen=\"{{ config.plugins.admin.sidebar.activate == 'hover' ? 'true' : 'false' }}\" data-quickopen-delay=\"{{ config.plugins.admin.sidebar.hover_delay }}\">
        {% if config.plugins.admin.sidebar.activate != 'hover' %}
            <div id=\"open-handle\" data-sidebar-toggle><i class=\"fa fa-angle-right\"></i></div>
        {% endif %}

        <div id=\"admin-logo\">
            {% include 'partials/logo.html.twig' %}
        </div>

        {% include 'partials/nav-user-details.html.twig' %}

        {% include 'partials/nav-quick-tray.html.twig' %}

        <div class=\"admin-menu-wrapper\">
            <ul id=\"admin-menu\">
                {#tt#}
                {{ service_render(\"action\", \"admin:sidebar\", 'first') | raw }}
                {#tt end#}
                {#tt#}
                {{ service_render(\"action\", \"admin:sidebar\", 'before:parent') | raw }}
                {#tt end#}
                <li class=\"{{ (location == 'dashboard') ? 'selected' : '' }}\">
                    <a href=\"{{ base_url_relative }}\"><i class=\"fa fa-fw fa-th\"></i><em>{{ \"PLUGIN_ADMIN.DASHBOARD\"|tu }}</em></a>
                </li>
                {% if authorize(['admin.configuration', 'admin.super']) %}
                    <li class=\"{{ (location == 'system' or location == 'site' or location == 'config') ? 'selected' : '' }}\">
                        <a href=\"{{ base_url_relative }}/config/system\"><i class=\"fa fa-fw fa-wrench\"></i><em>{{ \"PLUGIN_ADMIN.CONFIGURATION\"|tu }}</em></a>
                    </li>
                {% endif %}
                {% if authorize(['admin.pages', 'admin.super']) %}
                    <li class=\"{{ (location == 'pages') ? 'selected' : '' }}\">
                        <a href=\"{{ base_url_relative }}/pages\">
                            <i class=\"fa fa-fw fa-file-text-o\"></i>
                            <em>{{ \"PLUGIN_ADMIN.PAGES\"|tu }}</em>
                            <span class=\"badges\">
                                <span class=\"badge count\">{{ admin.pagesCount }}</span>
                            </span>
                        </a>
                    </li>
                {% endif %}
                {% if grav.twig.plugins_hooked_nav %}
                    {% for label, item in grav.twig.plugins_hooked_nav %}
                        {% if authorize((item.authorize is defined and item.authorize is iterable) ? item.authorize : [item.authorize ?: ('admin.' ~ (item.location ?: item.route)), 'admin.super']) %}
                            <li class=\"{{ (location == (item.location ?: item.route)) ? 'selected' : '' }}\">
                                <a href=\"{{ base_url_relative }}/{{ item.route ?: item.location }}\">
                                    <i class=\"fa fa-fw {{ item.icon }}\"></i>
                                    <em>{{ label|tu }}</em>
                                    {% if item.badge %}
                                    <span class=\"badges {% if item.badge.updates is defined %}with-updates{% endif %}\">
                                        {% if item.badge.updates is defined %}<span class=\"badge updates\">{{ item.badge.updates }}</span>{% endif %}
                                        <span class=\"badge count\">{{ item.badge.count }}</span>
                                    </span>
                                    {% endif %}
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                {% endif %}
                {#tt#}
                {{ service_render(\"action\", \"admin:sidebar\", 'after:parent') | raw }}
                {#tt end#}
                {% if authorize(['admin.plugins', 'admin.super']) %}
                    <li class=\"{{ (location == 'plugins') ? 'selected' : '' }}\">
                        <a href=\"{{ base_url_relative }}/plugins\">
                            <i class=\"fa fa-fw fa-plug\"></i>
                            <em>{{ \"PLUGIN_ADMIN.PLUGINS\"|tu }}</em>
                            <span class=\"badges\">
                                <span class=\"badge updates\"></span>
                                <span class=\"badge count\">{{ admin.plugins|length }}</span>
                            </span>
                        </a>
                    </li>
                {% endif %}
                {% if authorize(['admin.themes', 'admin.super']) %}
                    <li class=\"{{ (location == 'themes') ? 'selected' : '' }}\">
                        <a href=\"{{ base_url_relative }}/themes\">
                            <i class=\"fa fa-fw fa-tint\"></i>
                            <em>{{ \"PLUGIN_ADMIN.THEMES\"|tu }}</em>
                            <span class=\"badges\">
                                <span class=\"badge updates\"></span>
                                <span class=\"badge count\">{{ admin.themes|length }}</span>
                            </span>
                        </a>
                    </li>
                {% endif %}
                {% if authorize(['admin.tools', 'admin.super']) %}
                    <li class=\"{{ (location == 'tools') ? 'selected' : '' }}\">
                        <a href=\"{{ base_url_relative }}/tools\">
                            <i class=\"fa fa-fw fa-briefcase\"></i>
                            <em>{{ \"PLUGIN_ADMIN.TOOLS\"|tu }}</em>
                        </a>
                    </li>
                {% endif %}

                {% include 'partials/nav-pro.html.twig' ignore missing %}

                <li>
                    <a href=\"{{ uri.addNonce(base_url_relative ~ '/task' ~ config.system.param_sep ~ 'logout', 'logout-form', 'logout-nonce') }}\"><i class=\"fa fa-fw fa-sign-out\"></i><em>{{ \"PLUGIN_ADMIN.LOGOUT\"|tu }}</em></a>
                </li>
                {#tt#}
                {{ service_render(\"action\", \"admin:sidebar\", 'last') | raw }}
                {#tt end#}
            </ul>
        </div>
    </nav>
{% endif %}
", "partials/nav.html.twig", "/Users/jon/Portfolio/user/plugins/core-service-manager/admin/templates-grav-1_9/partials/nav.html.twig");
    }
}