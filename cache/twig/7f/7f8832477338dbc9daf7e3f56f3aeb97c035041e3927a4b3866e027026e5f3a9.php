<?php

/* dashboard.html.twig */
class __TwigTemplate_f7464d588bf65026ebdff22e141da0a3785d5f0d393a18f75d9015bd1ba2c129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "dashboard.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'widgets' => array($this, 'block_widgets'),
            'content' => array($this, 'block_content'),
            'content_bottom' => array($this, 'block_content_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD");
        // line 5
        $context["clear_cache_url"] = (((($context["base_url_relative"] ?? null) . "/cache.json/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . twig_escape_filter($this->env, "clearCache", "html_attr"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("asset", "dashboard", "any"));
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 12
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "css")) {
                // line 13
                echo "            ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => $this->getAttribute($context["asset"], "url", array())), "method");
                // line 14
                echo "        ";
            }
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 22
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("asset", "dashboard", "any"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["asset"]) {
            // line 23
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "link")) {
                // line 24
                echo "            <link rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "rel", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "url", array()), "html", null, true);
                echo "\" />
        ";
            }
            // line 26
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "twig")) {
                // line 27
                echo "            ";
                $this->loadTemplate($this->getAttribute($context["asset"], "url", array()), "dashboard.html.twig", 27)->display($context);
                // line 28
                echo "        ";
            }
            // line 29
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "javascript")) {
                // line 30
                echo "            ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => $this->getAttribute($context["asset"], "url", array())), "method");
                // line 31
                echo "        ";
            }
            // line 32
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    ";
    }

    // line 37
    public function block_titlebar($context, array $blocks = array())
    {
        // line 38
        echo "    <div class=\"button-bar\">
        ";
        // line 40
        echo "        ";
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "dashboard", "first", ($context["context"] ?? null));
        echo "
        ";
        // line 42
        echo "        ";
        // line 43
        echo "        ";
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "dashboard", "before:parent", ($context["context"] ?? null));
        echo "
        ";
        // line 45
        echo "
        ";
        // line 47
        echo "        ";
        $context["pageadd_items"] = $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list_filter("(&(objectClass=action)(menu=page:add)(scope=dashboard))", ($context["context"] ?? null));
        // line 48
        echo "        ";
        if ((count(($context["pageadd_items"] ?? null)) > 0)) {
            // line 49
            echo "        <div class=\"button-group\">
            ";
            // line 51
            echo "                ";
            // line 52
            echo "            ";
            // line 53
            echo "            <button type=\"button\" class=\"button disabled\" href=\"#\">
                <i class=\"fa fa-plus\"></i> ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "
            </button>
            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pageadd_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 61
                echo "                    ";
                $context["key"] = (($this->getAttribute($context["item"], "form_id", array())) ? (((("href=#" . $this->getAttribute($context["item"], "form_id", array())) . " data-remodal-target=") . $this->getAttribute($context["item"], "form_id", array()))) : (""));
                // line 62
                echo "                    <li><a class=\"button\" ";
                echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "caption", array()), "html", null, true);
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </ul>
        </div>
        ";
        }
        // line 67
        echo "        ";
        // line 68
        echo "        
        ";
        // line 69
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super", 2 => "admin.cache"))) {
            // line 70
            echo "            <div class=\"button-group\">
                <button data-clear-cache-type=\"\" data-clear-cache=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ($context["clear_cache_url"] ?? null), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" class=\"button\"><i class=\"fa fa-trash\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE"), "html", null, true);
            echo "</button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a data-clear-cache-type=\"all\" data-clear-cache=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "all"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"assets-only\" data-clear-cache=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "assets-only"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"images-only\" data-clear-cache=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "images-only"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"cache-only\" data-clear-cache=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "cache-only"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"tmp-only\" data-clear-cache=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["clear_cache_url"] ?? null) . "/cleartype") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "tmp-only"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_TMP_ONLY"), "html", null, true);
            echo "</a></li>
                </ul>
            </div>
        ";
        }
        // line 84
        echo "        ";
        // line 85
        echo "        ";
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "dashboard", "after:parent");
        echo "
        ";
        // line 87
        echo "        ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
            // line 88
            echo "            <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
            echo "</button>
        ";
        }
        // line 90
        echo "        ";
        // line 91
        echo "        ";
        echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "dashboard", "last");
        echo "
        ";
        // line 93
        echo "    </div>
    <h1><i class=\"fa fa-fw fa-th\"></i> ";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD"), "html", null, true);
        echo "</h1>
";
    }

    // line 97
    public function block_widgets($context, array $blocks = array())
    {
        // line 98
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "notifications", array()), "dashboard", array())) {
            // line 99
            echo "    <div class=\"dashboard-notifications-container\"></div>
    ";
        }
        // line 101
        echo "
    <div id=\"admin-dashboard\">
        ";
        // line 103
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_hooked_dashboard_widgets_top", array())) {
            // line 104
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_hooked_dashboard_widgets_top", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 105
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "widgets", array()), $this->getAttribute($context["widget"], "template", array())) == true)) {
                    // line 106
                    echo "                    <div class=\"dashboard-item-flex\">
                        ";
                    // line 107
                    $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", array())) . ".html.twig"), "dashboard.html.twig", 107)->display($context);
                    // line 108
                    echo "                    </div>
                ";
                }
                // line 110
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "        ";
        }
        // line 112
        echo "    </div>
";
    }

    // line 115
    public function block_content($context, array $blocks = array())
    {
        // line 116
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_hooked_dashboard_widgets_main", array())) {
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_hooked_dashboard_widgets_main", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 118
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "widgets", array()), $this->getAttribute($context["widget"], "template", array())) == true)) {
                    // line 119
                    echo "                ";
                    $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", array())) . ".html.twig"), "dashboard.html.twig", 119)->display($context);
                    // line 120
                    echo "            ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 125
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list_filter("(&(objectClass=action)(menu=page:add)(scope=dashboard))", ($context["context"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 126
            echo "        ";
            if ($this->getAttribute($context["item"], "form_id", array())) {
                // line 127
                echo "            ";
                $context["form_data"] = $this->getAttribute($context["item"], "form_data", array(0 => ($context["context"] ?? null)), "method");
                // line 128
                echo "            <div class=\"remodal\" data-remodal-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "form_id", array()), "html", null, true);
                echo "\" data-remodal-options=\"hashTracking: false\">
                ";
                // line 129
                $this->loadTemplate("partials/blueprints-new-custom.html.twig", "dashboard.html.twig", 129)->display(array_merge($context, array("blueprints" => $this->getAttribute($context["item"], "form_blueprint", array()), "data" => ($context["obj_data"] ?? null), "form_data" => ($context["form_data"] ?? null), "form_id" => $this->getAttribute($context["item"], "form_id", array()))));
                // line 130
                echo "            </div>
        ";
            }
            // line 132
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "    ";
        // line 134
        echo "    
";
    }

    // line 137
    public function block_content_bottom($context, array $blocks = array())
    {
        // line 138
        echo "    <div id=\"admin-dashboard\">";
        // line 139
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_hooked_dashboard_widgets_bottom", array())) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_hooked_dashboard_widgets_bottom", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 141
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "widgets", array()), $this->getAttribute($context["widget"], "template", array())) == true)) {
                    // line 142
                    echo "                    ";
                    $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", array())) . ".html.twig"), "dashboard.html.twig", 142)->display($context);
                    // line 143
                    echo "                ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 146
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  509 => 146,  493 => 143,  490 => 142,  488 => 141,  471 => 140,  469 => 139,  467 => 138,  464 => 137,  459 => 134,  457 => 133,  443 => 132,  439 => 130,  437 => 129,  432 => 128,  429 => 127,  426 => 126,  408 => 125,  392 => 120,  389 => 119,  387 => 118,  370 => 117,  368 => 116,  365 => 115,  360 => 112,  357 => 111,  343 => 110,  339 => 108,  337 => 107,  334 => 106,  331 => 105,  313 => 104,  311 => 103,  307 => 101,  303 => 99,  300 => 98,  297 => 97,  291 => 94,  288 => 93,  283 => 91,  281 => 90,  275 => 88,  272 => 87,  267 => 85,  265 => 84,  256 => 80,  250 => 79,  244 => 78,  238 => 77,  232 => 76,  222 => 71,  219 => 70,  217 => 69,  214 => 68,  212 => 67,  207 => 64,  196 => 62,  193 => 61,  189 => 60,  180 => 54,  177 => 53,  175 => 52,  173 => 51,  170 => 49,  167 => 48,  164 => 47,  161 => 45,  156 => 43,  154 => 42,  149 => 40,  146 => 38,  143 => 37,  139 => 33,  125 => 32,  122 => 31,  119 => 30,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  99 => 24,  96 => 23,  78 => 22,  73 => 20,  70 => 19,  66 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 12,  46 => 11,  41 => 9,  38 => 8,  34 => 1,  32 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% set title = \"PLUGIN_ADMIN.DASHBOARD\"|tu %}

{% set clear_cache_url = base_url_relative ~ '/cache.json/task' ~ config.system.param_sep ~ 'clearCache'|e('html_attr') %}


{% block stylesheets %}
    {{ parent() }}
    {#tt#}
    {% for asset in service_list('asset', 'dashboard', 'any') %}
        {% if asset.type == 'css' %}
            {% do assets.addJs(\"#{asset.url}\") %}
        {% endif %}
    {% endfor %}
    {#tt end#}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {#tt#}
    {% for asset in service_list('asset', 'dashboard', 'any') %}
        {% if asset.type == 'link' %}
            <link rel=\"{{ asset.rel }}\" href=\"{{ asset.url }}\" />
        {% endif %}
        {% if asset.type == 'twig' %}
            {% include \"#{asset.url}\" %}
        {% endif %}
        {% if asset.type == 'javascript' %}
            {% do assets.addJs(\"#{asset.url}\") %}
        {% endif %}
    {% endfor %}
    {#tt end#}
{% endblock %}


{% block titlebar %}
    <div class=\"button-bar\">
        {#tt#}
        {{ service_render('renderer', 'dashboard', 'first', context) | raw }}
        {#tt end#}
        {#tt#}
        {{ service_render('renderer', 'dashboard', 'before:parent', context) | raw }}
        {#tt end#}

        {#tt#}
        {% set pageadd_items = service_list_filter(\"(&(objectClass=action)(menu=page:add)(scope=dashboard))\", context) %}
        {% if pageadd_items|count > 0 %}
        <div class=\"button-group\">
            {#<button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">#}
                {#<i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}#}
            {#</button>#}
            <button type=\"button\" class=\"button disabled\" href=\"#\">
                <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
            </button>
            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                <i class=\"fa fa-caret-down\"></i>
            </button>
            <ul class=\"dropdown-menu\">
                {% for item in pageadd_items %}
                    {% set key = item.form_id ? \"href=##{item.form_id} data-remodal-target=#{item.form_id}\" : \"\" %}
                    <li><a class=\"button\" {{ key }}>{{ item.caption }}</a></li>
                {% endfor %}
            </ul>
        </div>
        {% endif %}
        {#tt end#}
        
        {% if authorize(['admin.maintenance', 'admin.super', 'admin.cache']) %}
            <div class=\"button-group\">
                <button data-clear-cache-type=\"\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url, 'admin-form', 'admin-nonce') }}\" class=\"button\"><i class=\"fa fa-trash\"></i> {{ \"PLUGIN_ADMIN.CLEAR_CACHE\"|tu }}</button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a data-clear-cache-type=\"all\" data-clear-cache=\"{{  uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'all', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE\"|tu }}</a></li>
                    <li><a data-clear-cache-type=\"assets-only\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'assets-only', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY\"|tu }}</a></li>
                    <li><a data-clear-cache-type=\"images-only\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'images-only', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY\"|tu }}</a></li>
                    <li><a data-clear-cache-type=\"cache-only\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'cache-only', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY\"|tu }}</a></li>
                    <li><a data-clear-cache-type=\"tmp-only\" data-clear-cache=\"{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'tmp-only', 'admin-form', 'admin-nonce') }}\" href=\"#\">{{ \"PLUGIN_ADMIN.CLEAR_CACHE_TMP_ONLY\"|tu }}</a></li>
                </ul>
            </div>
        {% endif %}
        {#tt#}
        {{ service_render('renderer', 'dashboard', 'after:parent') | raw }}
        {#tt end#}
        {% if authorize(['admin.maintenance', 'admin.super']) %}
            <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> {{ \"PLUGIN_ADMIN.CHECK_FOR_UPDATES\"|tu }}</button>
        {% endif %}
        {#tt#}
        {{ service_render('renderer', 'dashboard', 'last') | raw }}
        {#tt end#}
    </div>
    <h1><i class=\"fa fa-fw fa-th\"></i> {{ \"PLUGIN_ADMIN.DASHBOARD\"|tu }}</h1>
{% endblock %}

{% block widgets %}
    {% if config.plugins.admin.notifications.dashboard %}
    <div class=\"dashboard-notifications-container\"></div>
    {% endif %}

    <div id=\"admin-dashboard\">
        {% if grav.twig.plugins_hooked_dashboard_widgets_top %}
            {% for widget in grav.twig.plugins_hooked_dashboard_widgets_top %}
                {% if attribute(config.plugins.admin.widgets, widget.template) == true %}
                    <div class=\"dashboard-item-flex\">
                        {% include 'partials/' ~ widget.template ~ '.html.twig' %}
                    </div>
                {% endif %}
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}

{% block content %}
    {%- if grav.twig.plugins_hooked_dashboard_widgets_main -%}
        {%- for widget in grav.twig.plugins_hooked_dashboard_widgets_main -%}
            {%- if attribute(config.plugins.admin.widgets, widget.template) == true %}
                {% include 'partials/' ~ widget.template ~ '.html.twig' %}
            {% endif -%}
        {%- endfor -%}
    {%- endif -%}

    {#tt#}
    {% for item in service_list_filter(\"(&(objectClass=action)(menu=page:add)(scope=dashboard))\", context) %}
        {% if item.form_id %}
            {% set form_data = item.form_data(context) %}
            <div class=\"remodal\" data-remodal-id=\"{{ item.form_id }}\" data-remodal-options=\"hashTracking: false\">
                {% include \"partials/blueprints-new-custom.html.twig\" with { blueprints:  item.form_blueprint, data: obj_data, form_data:form_data, form_id:\"#{item.form_id}\" } %}
            </div>
        {% endif %}
    {% endfor %}
    {#tt end#}
    
{% endblock %}

{% block content_bottom %}
    <div id=\"admin-dashboard\">
        {%- if grav.twig.plugins_hooked_dashboard_widgets_bottom -%}
            {%- for widget in grav.twig.plugins_hooked_dashboard_widgets_bottom -%}
                {%- if attribute(config.plugins.admin.widgets, widget.template) == true %}
                    {% include 'partials/' ~ widget.template ~ '.html.twig' %}
                {% endif -%}
            {%- endfor -%}
        {%- endif -%}
    </div>
{% endblock %}
", "dashboard.html.twig", "/Users/jon/Portfolio/user/plugins/core-service-manager/admin/templates-grav-1_9/dashboard.html.twig");
    }
}
