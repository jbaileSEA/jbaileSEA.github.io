<?php

/* pages.html.twig */
class __TwigTemplate_0f252c495faa5587335fe07fea0497b427b7e98e1d7d3a1f9884d266a0dd48db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 86
        $context["macro"] = $this;
        // line 89
        if ($this->getAttribute(($context["admin"] ?? null), "route", array())) {
            // line 90
            $context["context"] = $this->getAttribute(($context["admin"] ?? null), "page", array(0 => true), "method");
        }
        // line 93
        if ($this->getAttribute(($context["uri"] ?? null), "param", array(0 => "new"), "method")) {
            // line 94
            $context["mode"] = "new";
        } elseif (        // line 95
($context["context"] ?? null)) {
            // line 96
            $context["mode"] = "edit";
            // line 97
            if ($this->getAttribute(($context["context"] ?? null), "exists", array())) {
                // line 98
                $context["page_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["context"] ?? null), "rawRoute", array()))));
                // line 99
                $context["exists"] = true;
                // line 100
                $context["title"] = (((($this->getAttribute(($context["context"] ?? null), "exists", array())) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "header", array()), "title", array())) : ($this->getAttribute(($context["context"] ?? null), "title", array()))));
            } else {
                // line 102
                $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 105
            $context["mode"] = "list";
            // line 106
            $context["title"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 109
        $context["modular"] = (($this->getAttribute(($context["context"] ?? null), "modular", array())) ? ("modular_") : (""));
        // line 110
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 111
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "admin_lang", array())) ? ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "admin_lang", array())) : ("en"));
        // line 112
        $context["page_lang"] = $this->getAttribute(($context["context"] ?? null), "language", array());
        // line 113
        $context["type"] = "page";
        // line 196
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "frontend_preview_target", array()) != "inline")) {
            // line 197
            $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) : ("/"));
            // line 198
            $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "frontend_preview_target", array());
            // line 199
            $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", array())) ? ((((((("<a class=\"button\" target=\"" . ($context["preview_target"] ?? null)) . "\" href=\"") . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        } else {
            // line 201
            $context["preview_html"] = (((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) ? ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute(($context["context"] ?? null), "home", array())) ? ("") : ($this->getAttribute(($context["context"] ?? null), "route", array()))))) : ("/"));
            // line 202
            $context["preview_link"] = (($this->getAttribute(($context["context"] ?? null), "routable", array())) ? ((((("<a class=\"button\" href=\"" . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 115
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 116
        echo "    ";
        if ((($context["mode"] ?? null) == "edit")) {
            // line 117
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => (($context["theme_url"] ?? null) . "/css/codemirror/codemirror.css")), "method");
            // line 118
            echo "    ";
        }
        // line 119
        echo "    ";
        // line 120
        echo "    ";
        $context["theScope"] = (((($context["mode"] ?? null) == "edit")) ? ("page") : ("pages"));
        // line 121
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_items("admin:stylesheets", ($context["theScope"] ?? null), "first"));
        foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
            // line 122
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => $context["sheet"]), "method");
            // line 123
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_items("admin:stylesheets", ($context["theScope"] ?? null), "before:parent"));
        foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
            // line 125
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => $context["sheet"]), "method");
            // line 126
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "    ";
        // line 128
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 130
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_items("admin:stylesheets", ($context["theScope"] ?? null), "after:parent"));
        foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
            // line 131
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => $context["sheet"]), "method");
            // line 132
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_items("admin:stylesheets", ($context["theScope"] ?? null), "last"));
        foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
            // line 134
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => $context["sheet"]), "method");
            // line 135
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "    ";
    }

    // line 139
    public function block_javascripts($context, array $blocks = array())
    {
        // line 140
        echo "    ";
        // line 141
        echo "    ";
        $context["theScope"] = (((($context["mode"] ?? null) == "edit")) ? ("page") : ("pages"));
        // line 142
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("asset", ($context["theScope"] ?? null), "first"));
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
            // line 143
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "link")) {
                // line 144
                echo "            <link rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "rel", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "url", array()), "html", null, true);
                echo "\" />
        ";
            }
            // line 146
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "twig")) {
                // line 147
                echo "            ";
                $this->loadTemplate($this->getAttribute($context["asset"], "url", array()), "pages.html.twig", 147)->display($context);
                // line 148
                echo "        ";
            }
            // line 149
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "javascript")) {
                // line 150
                echo "            ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => $this->getAttribute($context["asset"], "url", array())), "method");
                // line 151
                echo "        ";
            }
            // line 152
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
        // line 153
        echo "    ";
        // line 154
        echo "    ";
        // line 155
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("asset", ($context["theScope"] ?? null), "before:parent"));
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
            // line 156
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "link")) {
                // line 157
                echo "            <link rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "rel", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "url", array()), "html", null, true);
                echo "\" />
        ";
            }
            // line 159
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "twig")) {
                // line 160
                echo "            ";
                $this->loadTemplate($this->getAttribute($context["asset"], "url", array()), "pages.html.twig", 160)->display($context);
                // line 161
                echo "        ";
            }
            // line 162
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "javascript")) {
                // line 163
                echo "            ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => $this->getAttribute($context["asset"], "url", array())), "method");
                // line 164
                echo "        ";
            }
            // line 165
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
        // line 166
        echo "    ";
        // line 167
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 169
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("asset", ($context["theScope"] ?? null), "after:parent"));
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
            // line 170
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "link")) {
                // line 171
                echo "            <link rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "rel", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "url", array()), "html", null, true);
                echo "\" />
        ";
            }
            // line 173
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "twig")) {
                // line 174
                echo "            ";
                $this->loadTemplate($this->getAttribute($context["asset"], "url", array()), "pages.html.twig", 174)->display($context);
                // line 175
                echo "        ";
            }
            // line 176
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "javascript")) {
                // line 177
                echo "            ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => $this->getAttribute($context["asset"], "url", array())), "method");
                // line 178
                echo "        ";
            }
            // line 179
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
        // line 180
        echo "    ";
        // line 181
        echo "    ";
        // line 182
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("asset", ($context["theScope"] ?? null), "last"));
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
            // line 183
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "link")) {
                // line 184
                echo "            <link rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "rel", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["asset"], "url", array()), "html", null, true);
                echo "\" />
        ";
            }
            // line 186
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "twig")) {
                // line 187
                echo "            ";
                $this->loadTemplate($this->getAttribute($context["asset"], "url", array()), "pages.html.twig", 187)->display($context);
                // line 188
                echo "        ";
            }
            // line 189
            echo "        ";
            if (($this->getAttribute($context["asset"], "type", array()) == "javascript")) {
                // line 190
                echo "            ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => $this->getAttribute($context["asset"], "url", array())), "method");
                // line 191
                echo "        ";
            }
            // line 192
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
        // line 193
        echo "    ";
    }

    // line 205
    public function block_titlebar($context, array $blocks = array())
    {
        // line 206
        echo "    <div class=\"button-bar\">
        ";
        // line 207
        if ((($context["mode"] ?? null) == "list")) {
            // line 208
            echo "            ";
            // line 209
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "pages", "first", ($context["context"] ?? null));
            echo "
            ";
            // line 210
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "pages", "first", ($context["context"] ?? null));
            echo "
            ";
            // line 212
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "</a>

            ";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 215
                echo "                ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", array()), "bar") == "bar")) {
                    // line 216
                    echo "                    <a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", array()), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["add_modal"], "label", array())), "html", null, true);
                    echo "</a>
                ";
                }
                // line 218
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "
            ";
            // line 221
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "pages", "before:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 222
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "pages", "before:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 224
            echo "            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> ";
            // line 226
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
            echo "
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
            // line 233
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
            echo "</a></li>
                    ";
            // line 234
            if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))) {
                // line 235
                echo "                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 237
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 238
                echo "                        ";
                if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "show_in", array()), "bar") == "dropdown")) {
                    // line 239
                    echo "                            <li><a class=\"button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["add_modal"], "link_classes", array()), "html", null, true);
                    echo "\" href=\"#modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-remodal-target=\"modal-add_modal-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute($context["add_modal"], "label", array())), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 241
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 242
            echo "                    ";
            // line 243
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list_filter("(&(objectClass=action)(menu=page:add)(scope=pages))", ($context["context"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 244
                echo "                        ";
                $context["key"] = (($this->getAttribute($context["item"], "form_id", array())) ? (((("href=#" . $this->getAttribute($context["item"], "form_id", array())) . " data-remodal-target=") . $this->getAttribute($context["item"], "form_id", array()))) : (""));
                // line 245
                echo "                        <li><a class=\"button\" ";
                echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "caption", array()), "html", null, true);
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            echo "                    ";
            // line 248
            echo "                </ul>
            </div>

            ";
            // line 252
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "pages", "after:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 253
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "pages", "after:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 255
            echo "            ";
            if ($this->getAttribute(($context["admin"] ?? null), "multilang", array())) {
                // line 256
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 259
                $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), ($context["admin_lang"] ?? null), array(), "array");
                // line 260
                echo "                        ";
                echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                echo "
                    </button>
                    ";
                // line 262
                if ((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "languages_enabled", array())) > 1)) {
                    // line 263
                    echo "                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                    // line 267
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? null), "languages_enabled", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 268
                        echo "                            ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 269
                        echo "                            ";
                        if (($context["langCode"] != ($context["admin_lang"] ?? null))) {
                            // line 270
                            echo "                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((((((($context["base_url_relative"] ?? null) . $this->getAttribute(($context["theme"] ?? null), "slug", array())) . "/pages/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</a></li>
                            ";
                        }
                        // line 272
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 273
                    echo "                    </ul>
                    ";
                }
                // line 275
                echo "                </div>
            ";
            }
            // line 277
            echo "
            ";
            // line 279
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "pages", "last", ($context["context"] ?? null));
            echo "
            ";
            // line 280
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "pages", "last", ($context["context"] ?? null));
            echo "
            ";
            // line 282
            echo "        ";
        } elseif ((($context["mode"] ?? null) == "edit")) {
            // line 283
            echo "
            ";
            // line 284
            echo ($context["preview_link"] ?? null);
            echo "

            ";
            // line 287
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "page", "first", ($context["context"] ?? null));
            echo "
            ";
            // line 288
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "page", "first", ($context["context"] ?? null));
            echo "
            ";
            // line 290
            echo "            <a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/pages\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
            echo "\"><i class=\"fa fa-reply\"></i></a>

            ";
            // line 292
            $context["siblings"] = $this->getAttribute($this->getAttribute(($context["context"] ?? null), "parent", array(), "method"), "children", array(), "method");
            // line 293
            echo "
            ";
            // line 294
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isFirst", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method")) {
                // line 295
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "nextSibling", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method");
                // line 296
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", array()))));
                // line 297
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIOUS"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-left\"></i></a>
            ";
            }
            // line 299
            echo "
            ";
            // line 300
            if ( !$this->getAttribute(($context["siblings"] ?? null), "isLast", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method")) {
                // line 301
                echo "                ";
                $context["sib"] = $this->getAttribute(($context["siblings"] ?? null), "prevSibling", array(0 => $this->getAttribute(($context["context"] ?? null), "path", array())), "method");
                // line 302
                echo "                ";
                $context["sib_url"] = ((($context["base_url"] ?? null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sib"] ?? null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute(($context["sib"] ?? null), "rawRoute", array()))));
                // line 303
                echo "                <a class=\"button hidden-mobile\" href=\"";
                echo twig_escape_filter($this->env, ($context["sib_url"] ?? null), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NEXT"), "html", null, true);
                echo "\"><i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 305
            echo "
            ";
            // line 307
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "page", "before:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 308
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "page", "before:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 310
            echo "            
            ";
            // line 311
            if (($context["exists"] ?? null)) {
                // line 312
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> ";
                // line 314
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">";
                // line 320
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
                echo "</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">";
                // line 321
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FOLDER"), "html", null, true);
                echo "</a></li>
                        ";
                // line 322
                if ( !twig_test_empty($this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))) {
                    // line 323
                    echo "                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR"), "html", null, true);
                    echo "</a></li>
                        ";
                }
                // line 325
                echo "                        ";
                // line 326
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list_filter("(&(objectClass=action)(menu=page:add)(scope=page))", ($context["context"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 327
                    echo "                            ";
                    $context["key"] = (($this->getAttribute($context["item"], "form_id", array())) ? (((("href=#" . $this->getAttribute($context["item"], "form_id", array())) . " data-remodal-target=") . $this->getAttribute($context["item"], "form_id", array()))) : (""));
                    // line 328
                    echo "                            <li><a class=\"button\" ";
                    echo twig_escape_filter($this->env, ($context["key"] ?? null), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "caption", array()), "html", null, true);
                    echo "</a></li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 330
                echo "                        ";
                // line 331
                echo "                    </ul>
                </div>

                ";
                // line 335
                echo "                ";
                if (($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render_count("action", "page:more", "any", ($context["context"] ?? null)) > 0)) {
                    // line 336
                    echo "                    <div class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\" href=\"#\">
                            <i class=\"fa fa-plus-square\"></i> ";
                    // line 338
                    echo "More";
                    echo "
                        </button>
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu\">
                            ";
                    // line 344
                    echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "page:more", "any", ($context["context"] ?? null));
                    echo "
                        </ul>
                    </div>
                ";
                }
                // line 348
                echo "                ";
                // line 349
                echo "
                <a class=\"button disable-after-click\" href=\"";
                // line 350
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "copy"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY"), "html", null, true);
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 351
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE"), "html", null, true);
                echo "</a>
                ";
                // line 352
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin-pro", array(), "array"), "enabled", array())) {
                    // line 353
                    echo "                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.REVISIONS"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 355
                echo "                ";
                if (($context["warn"] ?? null)) {
                    // line 356
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-close\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE"), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 358
                    echo "                    <a class=\"button disable-after-click\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((($this->getAttribute(($context["uri"] ?? null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 360
                echo "            ";
            }
            // line 361
            echo "
            ";
            // line 363
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "page", "after:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 364
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "page", "after:parent", ($context["context"] ?? null));
            echo "
            ";
            // line 366
            echo "            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 367
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
            echo "</button>
                ";
            // line 368
            if ((($context["exists"] ?? null) && $this->getAttribute(($context["admin"] ?? null), "multilang", array()))) {
                // line 369
                echo "                    ";
                if ($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", array())) {
                    // line 370
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 374
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "untranslatedLanguages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 375
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 376
                        echo "                                ";
                        if (($context["langCode"] != ($context["page_lang"] ?? null))) {
                            // line 377
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo twig_escape_filter($this->env, $context["langCode"], "html", null, true);
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS"), "html", null, true);
                            echo " ";
                            echo twig_escape_filter($this->env, (twig_upper_filter($this->env, twig_slice($this->env, ($context["langName"] ?? null), 0, 1)) . twig_slice($this->env, ($context["langName"] ?? null), 1, null)), "html", null, true);
                            echo "</button>
                                ";
                        }
                        // line 379
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 380
                    echo "                        </ul>
                    ";
                }
                // line 382
                echo "                ";
            }
            // line 383
            echo "            </div>

            ";
            // line 386
            echo "            ";
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("renderer", "page", "last", ($context["context"] ?? null));
            echo "
            ";
            // line 387
            echo $this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_render("action", "page", "last", ($context["context"] ?? null));
            echo "
            ";
            // line 389
            echo "
        ";
        }
        // line 391
        echo "    </div>
    ";
        // line 392
        if ((($context["mode"] ?? null) == "new")) {
            // line 393
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE"), "html", null, true);
            echo "</h1>
    ";
        } elseif ((        // line 394
($context["mode"] ?? null) == "edit")) {
            // line 395
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 396
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "menu", array()), "html", null, true);
            echo "
        </h1>
    ";
        } else {
            // line 399
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES"), "html", null, true);
            echo "</h1>
    ";
        }
    }

    // line 403
    public function block_content($context, array $blocks = array())
    {
        // line 404
        echo "    <div class=\"clear admin-pages\">
    ";
        // line 405
        if ((($context["mode"] ?? null) == "new")) {
            // line 406
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 406)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "pages/page"), "method"), "data" => ($context["context"] ?? null))));
            // line 407
            echo "    ";
        } elseif ((($context["mode"] ?? null) == "edit")) {
            // line 408
            echo "        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                ";
            // line 411
            if (($this->getAttribute(($context["admin"] ?? null), "multilang", array()) && ($context["page_lang"] ?? null))) {
                // line 412
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 414
                if (($context["exists"] ?? null)) {
                    // line 415
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["page_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 417
                    echo "                                ";
                    echo twig_escape_filter($this->env, ($context["admin_lang"] ?? null), "html", null, true);
                    echo "
                            ";
                }
                // line 419
                echo "                        </button>
                        ";
                // line 420
                if ((($context["exists"] ?? null) && (twig_length_filter($this->env, $this->getAttribute(($context["context"] ?? null), "translatedLanguages", array())) > 1))) {
                    // line 421
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 425
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["context"] ?? null), "translatedLanguages", array()));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 426
                        echo "                                    ";
                        if (($context["language"] != ($context["page_lang"] ?? null))) {
                            // line 427
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "\" redirect=\"";
                            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["context"] ?? null), "rawRoute", array()), "/"), "html", null, true);
                            echo "\" form=\"blueprints\">";
                            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                            echo "</button>
                                    ";
                        }
                        // line 429
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 430
                    echo "                            </ul>
                        ";
                }
                // line 432
                echo "                    </div>
                ";
            }
            // line 434
            echo "
                ";
            // line 435
            if ($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", array()), "fields", array())) {
                // line 436
                echo "                ";
                $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 437
                echo "                ";
                $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 438
                echo "                ";
                $context["maxLen"] = max(array(0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))));
                // line 439
                echo "                ";
                $context["normalText"] = $context["macro"]->getspanToggle(($context["normalText"] ?? null), ($context["maxLen"] ?? null));
                // line 440
                echo "                ";
                $context["expertText"] = $context["macro"]->getspanToggle(($context["expertText"] ?? null), ($context["maxLen"] ?? null));
                // line 441
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 443
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array()), "html", null, true);
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 444
                echo ($context["normalText"] ?? null);
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 445
                echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
                echo "/pages/";
                echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", array()), "/"), "html", null, true);
                echo "/mode";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array()), "html", null, true);
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 446
                echo ($context["expertText"] ?? null);
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 451
            echo "
            </div>

            ";
            // line 455
            echo "            ";
            if (($context["current_form_data"] ?? null)) {
                // line 456
                echo "                ";
                $this->getAttribute(($context["context"] ?? null), "header", array(0 => $this->getAttribute(($context["current_form_data"] ?? null), "header", array())), "method");
                // line 457
                echo "                ";
                $this->getAttribute(($context["context"] ?? null), "content", array(0 => $this->getAttribute(($context["current_form_data"] ?? null), "content", array())), "method");
                // line 458
                echo "            ";
            }
            // line 459
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["context"] ?? null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", array()), "expert", array()) == "0"))) {
                // line 460
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 460)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["context"] ?? null), "blueprints", array()), "data" => ($context["context"] ?? null))));
                // line 461
                echo "            ";
            } else {
                // line 462
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 462)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => (("admin/pages/" . ($context["modular"] ?? null)) . "raw")), "method"), "data" => ($context["context"] ?? null))));
                // line 463
                echo "            ";
            }
            // line 464
            echo "        </div>
    ";
        } else {
            // line 466
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"";
            // line 468
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array(0 => array("id" => "mode", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_MODES")), 1 => array("id" => "type", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE_TYPES")), 2 => array("id" => "access", "name" => $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ACCESS_LEVELS")))), "html_attr");
            echo "\" data-filter-types=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute(($context["admin"] ?? null), "types", array()), $this->getAttribute(($context["admin"] ?? null), "modularTypes", array()))), "html_attr");
            echo "\" data-filter-access-levels=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["admin"] ?? null), "accessLevels", array())), "html_attr");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS"), "html", null, true);
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 471
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES"), "html", null, true);
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 474
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL"), "html", null, true);
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 475
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL"), "html", null, true);
            echo "</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                ";
            // line 480
            echo $context["macro"]->getloop(($context["pages"] ?? null), 0, $context);
            echo "
            </ul>
            ";
            // line 482
            $this->loadTemplate("partials/page-legend.html.twig", "pages.html.twig", 482)->display($context);
            // line 483
            echo "        </div>
    ";
        }
        // line 485
        echo "    </div>

    ";
        // line 487
        if (($context["context"] ?? null)) {
            // line 488
            echo "        ";
            $context["obj_data"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->cloneFunc(($context["context"] ?? null));
            // line 489
            echo "
        ";
            // line 490
            if ((($context["mode"] ?? null) == "edit")) {
                // line 491
                echo "            ";
                $this->getAttribute(($context["obj_data"] ?? null), "folder", array(0 => ""), "method");
                // line 492
                echo "        ";
            }
            // line 493
            echo "    ";
        }
        // line 494
        echo "
    ";
        // line 495
        if (((($context["mode"] ?? null) == "list") || (($context["mode"] ?? null) == "edit"))) {
            // line 496
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 497
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 497)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/new"), "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-page")));
            // line 498
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 501
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "pages.html.twig", 501)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/new_folder"), "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-folder")));
            // line 502
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 505
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 505)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/modular_new"), "method"), "data" => ($context["obj_data"] ?? null), "form_id" => "new-modular")));
            // line 506
            echo "    </div>

    ";
            // line 508
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "add_modals", array()));
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
            foreach ($context['_seq'] as $context["key"] => $context["add_modal"]) {
                // line 509
                echo "        <div class=\"remodal ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "modal_classes", array()), ""), "html", null, true);
                echo "\" data-remodal-id=\"modal-add_modal-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-remodal-options=\"hashTracking: false\">
            ";
                // line 510
                $this->loadTemplate($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "template", array()), "partials/blueprints-new.html.twig"), "pages.html.twig", 510)->display(array_merge($context, twig_array_merge(array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => $this->getAttribute($context["add_modal"], "blueprint", array())), "method"), "data" => ($context["context"] ?? null), "form_id" => "add-modal"), $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["add_modal"], "with", array()), array()))));
                // line 511
                echo "        </div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['add_modal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 513
            echo "        
    ";
            // line 515
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list_filter((("(&(objectClass=action)(menu=page:add)(scope=" . (((($context["mode"] ?? null) == "list")) ? ("pages") : ("page"))) . "))"), ($context["context"] ?? null)));
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
                // line 516
                echo "        ";
                if ($this->getAttribute($context["item"], "form_id", array())) {
                    // line 517
                    echo "            ";
                    $context["form_data"] = $this->getAttribute($context["item"], "form_data", array(0 => ($context["context"] ?? null)), "method");
                    // line 518
                    echo "            <div class=\"remodal\" data-remodal-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "form_id", array()), "html", null, true);
                    echo "\" data-remodal-options=\"hashTracking: false\">
                ";
                    // line 519
                    $this->loadTemplate("partials/blueprints-new-custom.html.twig", "pages.html.twig", 519)->display(array_merge($context, array("blueprints" => $this->getAttribute($context["item"], "form_blueprint", array()), "data" => ($context["obj_data"] ?? null), "form_data" => ($context["form_data"] ?? null), "form_id" => $this->getAttribute($context["item"], "form_id", array()))));
                    // line 520
                    echo "            </div>
        ";
                }
                // line 522
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
            // line 523
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Plugin\ServiceTwigExtensions')->service_list("action", (((($context["mode"] ?? null) == "list")) ? ("pages") : (array(0 => "page", 1 => "page:more"))), "any", ($context["context"] ?? null)));
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
                // line 524
                echo "        ";
                if ($this->getAttribute($context["item"], "form_id", array())) {
                    // line 525
                    echo "            ";
                    $context["form_data"] = $this->getAttribute($context["item"], "form_data", array(0 => ($context["context"] ?? null)), "method");
                    // line 526
                    echo "            <div class=\"remodal\" data-remodal-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "form_id", array()), "html", null, true);
                    echo "\" data-remodal-options=\"hashTracking: false\">
                ";
                    // line 527
                    $this->loadTemplate("partials/blueprints-new-custom.html.twig", "pages.html.twig", 527)->display(array_merge($context, array("blueprints" => $this->getAttribute($context["item"], "form_blueprint", array()), "data" => ($context["obj_data"] ?? null), "form_data" => ($context["form_data"] ?? null), "form_id" => $this->getAttribute($context["item"], "form_id", array()))));
                    // line 528
                    echo "            </div>
        ";
                }
                // line 530
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
            // line 531
            echo "    ";
            // line 532
            echo "    ";
        }
        // line 533
        echo "

    ";
        // line 535
        if ((($context["mode"] ?? null) == "edit")) {
            // line 536
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 538
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 538)->display(array_merge($context, array("blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", array(0 => "admin/pages/move"), "method"), "data" => ($context["context"] ?? null))));
            // line 539
            echo "    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 541
            try {
                $this->loadTemplate(array(0 => "partials/page-revisions.html.twig", 1 => "empty.html.twig"), "pages.html.twig", 541)->display(array_merge($context, array("data" => ($context["context"] ?? null))));
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 542
            echo "    </div>
    ";
        }
        // line 544
        echo "
    ";
        // line 545
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "pages.html.twig", 545)->display($context);
        // line 546
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"), "html", null, true);
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 551
        if (($context["context"] ?? null)) {
            // line 552
            echo "                    <strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["context"] ?? null), "title", array()), "html", null, true);
            echo "</strong>
                ";
        }
        // line 554
        echo "            </p>
            <p class=\"bigger\">
              ";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"), "html", null, true);
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 560
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 561
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 566
        try {
            $this->loadTemplate("partials/admin-pro-pages-addons.html.twig", "pages.html.twig", 566)->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 567
        echo "
";
    }

    // line 570
    public function block_bottom($context, array $blocks = array())
    {
        // line 571
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
<script>
    \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
</script>

";
        // line 577
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
        // line 579
        echo "    
    ";
        // line 581
        echo "    ";
        $context["like_data"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "like_data"), "method");
        // line 582
        echo "    ";
        $context["like_page"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "like_page"), "method");
        // line 583
        echo "    ";
        if (($context["like_page"] ?? null)) {
            // line 584
            echo "    <script>
        let title2 = \$('input[name=\"data[header][title]\"]');
        title2.val('";
            // line 586
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "use_title"), "method"), "html", null, true);
            echo "');
    
        let content2 = \$('textarea[name=\"data[content]\"]');
        content2.val(";
            // line 589
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "use_content"), "method"));
            echo ");

        {
            let c = \$('input[name=\"data[header][body_classes]\"]');
            c.val('";
            // line 593
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["like_page"] ?? null), "header", array()), "body_classes", array()), "html", null, true);
            echo "');
        }

        {
            let c = \$('select[name=\"data[name]\"]');
            c.val('";
            // line 598
            echo twig_escape_filter($this->env, $this->getAttribute(($context["like_page"] ?? null), "template", array()), "html", null, true);
            echo "');
        }

        ";
            // line 601
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "use_taxonomy"), "method"));
            foreach ($context['_seq'] as $context["name"] => $context["items"]) {
                // line 602
                echo "            let tax";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo " = \$('select[name=\"data[header][taxonomy][";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "][]\"]');
            tax";
                // line 603
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo ".val(";
                echo twig_jsonencode_filter($context["items"]);
                echo ");
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['items'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 605
            echo "    </script>
    ";
        }
        // line 607
        echo "    ";
        // line 608
        echo "    
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 7
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 8
            echo "    ";
            $context["self"] = $this;
            // line 9
            echo "
    ";
            // line 10
            $context["config"] = $this->getAttribute(($context["twig_vars"] ?? null), "config", array(), "array");
            // line 11
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
            // line 12
            echo "    ";
            $context["display_field"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "pages_list_display_field", array());
            // line 13
            echo "    ";
            $context["base_url"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative", array(), "array");
            // line 14
            echo "    ";
            $context["base_url_relative_frontend"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_relative_frontend", array(), "array");
            // line 15
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute(($context["twig_vars"] ?? null), "base_url_simple", array(), "array");
            // line 16
            echo "    ";
            $context["admin_route"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_route", array(), "array");
            // line 17
            echo "    ";
            $context["admin_lang"] = $this->getAttribute(($context["twig_vars"] ?? null), "admin_lang", array(), "array");
            // line 18
            echo "    ";
            $context["warn"] = $this->getAttribute(($context["twig_vars"] ?? null), "warn", array(), "array");
            // line 19
            echo "    ";
            $context["uri"] = $this->getAttribute(($context["twig_vars"] ?? null), "uri", array(), "array");
            // line 20
            echo "
    ";
            // line 21
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "admin", array()), "children_display_order", array()) == "collection") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()))) {
                // line 22
                echo "        ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "custom", array())) {
                    // line 23
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array()), "asc")) : ("asc")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "custom", array())), "method");
                    // line 24
                    echo "        ";
                } else {
                    // line 25
                    echo "            ";
                    $context["pcol"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array(), "any", false, true), "content", array(), "any", false, true), "order", array(), "any", false, true), "dir", array()), "asc")) : ("asc"))), "method");
                    // line 26
                    echo "        ";
                }
                // line 27
                echo "    ";
            } else {
                // line 28
                echo "        ";
                $context["pcol"] = $this->getAttribute(($context["page"] ?? null), "children", array(), "method");
                // line 29
                echo "    ";
            }
            // line 30
            echo "
    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pcol"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 32
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.FOLDER") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGE") . " &bull; "))) . (($this->getAttribute(                // line 33
$context["p"], "modular", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODULAR") . " &bull; ")) : (""))) . (($this->getAttribute(                // line 34
$context["p"], "routable", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ROUTABLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_ROUTABLE") . " &bull; ")))) . (($this->getAttribute(                // line 35
$context["p"], "visible", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VISIBLE") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_VISIBLE") . " &bull; ")))) . (($this->getAttribute(                // line 36
$context["p"], "published", array())) ? (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PUBLISHED") . " &bull; ")) : (($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NON_PUBLISHED") . " &bull; "))));
                // line 37
                echo "
        ";
                // line 38
                $context["page_url"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->getPageUrl($context, $context["p"]);
                // line 39
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "route", array()), "html", null, true);
                echo "\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" ";
                // line 42
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo ">
                    <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 43
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"";
                // line 47
                echo twig_trim_filter(($context["description"] ?? null), " &bull; ");
                echo "\" class=\"hint--top page-item__content-hint\">
                            ";
                // line 48
                $context["page_label"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute($context["p"], "header", array()), ($context["display_field"] ?? null)), $this->getAttribute($context["p"], ($context["display_field"] ?? null))), $this->getAttribute($context["p"], "title", array()));
                // line 49
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, ($context["page_url"] ?? null), "html", null, true);
                echo "\" class=\"page-edit\">";
                echo twig_escape_filter($this->env, ($context["page_label"] ?? null));
                echo "</a>
                        </span>
                        ";
                // line 51
                if ($this->getAttribute($context["p"], "language", array())) {
                    // line 52
                    echo "                            <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", array()) == ($context["admin_lang"] ?? null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "language", array()), "html", null, true);
                    echo "</span>
                        ";
                }
                // line 54
                echo "                        ";
                if ($this->getAttribute($context["p"], "home", array())) {
                    // line 55
                    echo "                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        ";
                }
                // line 57
                echo "                    </div>
                    <p class=\"page-route\">";
                // line 58
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array()))), "html", null, true);
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "template", array(), "method"), "html", null, true);
                echo "</p>
                </div>
                <span class=\"page-item__tools\">
                    ";
                // line 61
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "frontend_preview_target", array()) != "inline")) {
                    // line 62
                    echo "                        ";
                    $context["preview_target"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "admin", array()), "frontend_preview_target", array());
                    // line 63
                    echo "                        ";
                    $context["preview_html"] = ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute($context["p"], "home", array())) ? ("") : ($this->getAttribute($context["p"], "route", array()))))) ? (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . (($this->getAttribute($context["p"], "home", array())) ? ("") : ($this->getAttribute($context["p"], "route", array()))))) : ("/"));
                    // line 64
                    echo "                        ";
                    $context["preview_link"] = (($this->getAttribute($context["p"], "routable", array())) ? ((((((("<a class=\"page-view\" target=\"" . ($context["preview_target"] ?? null)) . "\" href=\"") . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\"></i></a>")) : (""));
                    // line 65
                    echo "                    ";
                } else {
                    // line 66
                    echo "                        ";
                    $context["preview_html"] = (((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute($context["p"], "home", array())) ? ("") : ($this->getAttribute($context["p"], "route", array()))))) ? ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url"] ?? null), "/") . "/preview") . (($this->getAttribute($context["p"], "home", array())) ? ("") : ($this->getAttribute($context["p"], "route", array()))))) : ("/"));
                    // line 67
                    echo "                        ";
                    $context["preview_link"] = (($this->getAttribute($context["p"], "routable", array())) ? ((((("<a class=\"page-view\" href=\"" . ($context["preview_html"] ?? null)) . "\" title=\"") . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREVIEW")) . "\"> <i class=\"fa fa-fw fa-eye\"></i></a>")) : (""));
                    // line 68
                    echo "                    ";
                }
                // line 69
                echo "                    ";
                echo ($context["preview_link"] ?? null);
                echo "
                    ";
                // line 70
                if (($context["warn"] ?? null)) {
                    // line 71
                    echo "                        <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 73
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => (((($context["page_url"] ?? null) . "/task") . ($context["separator"] ?? null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 75
                echo "                </span>
            </div>
            ";
                // line 77
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 78
                    echo "                <ul class=\"depth-";
                    echo twig_escape_filter($this->env, (($context["depth"] ?? null) + 1), "html", null, true);
                    echo "\" style=\"display:none;\">
                    ";
                    // line 79
                    echo $context["self"]->getloop($context["p"], (($context["depth"] ?? null) + 1), ($context["twig_vars"] ?? null));
                    echo "
                </ul>
            ";
                }
                // line 82
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1836 => 82,  1830 => 79,  1825 => 78,  1823 => 77,  1819 => 75,  1813 => 73,  1807 => 71,  1805 => 70,  1800 => 69,  1797 => 68,  1794 => 67,  1791 => 66,  1788 => 65,  1785 => 64,  1782 => 63,  1779 => 62,  1777 => 61,  1769 => 58,  1766 => 57,  1762 => 55,  1759 => 54,  1749 => 52,  1747 => 51,  1739 => 49,  1737 => 48,  1733 => 47,  1724 => 43,  1720 => 42,  1715 => 40,  1712 => 39,  1710 => 38,  1707 => 37,  1705 => 36,  1704 => 35,  1703 => 34,  1702 => 33,  1700 => 32,  1696 => 31,  1693 => 30,  1690 => 29,  1687 => 28,  1684 => 27,  1681 => 26,  1678 => 25,  1675 => 24,  1672 => 23,  1669 => 22,  1667 => 21,  1664 => 20,  1661 => 19,  1658 => 18,  1655 => 17,  1652 => 16,  1649 => 15,  1646 => 14,  1643 => 13,  1640 => 12,  1637 => 11,  1635 => 10,  1632 => 9,  1629 => 8,  1615 => 7,  1597 => 4,  1584 => 3,  1579 => 608,  1577 => 607,  1573 => 605,  1563 => 603,  1556 => 602,  1552 => 601,  1546 => 598,  1538 => 593,  1531 => 589,  1525 => 586,  1521 => 584,  1518 => 583,  1515 => 582,  1512 => 581,  1509 => 579,  1505 => 577,  1496 => 571,  1493 => 570,  1488 => 567,  1481 => 566,  1473 => 561,  1469 => 560,  1462 => 556,  1458 => 554,  1450 => 552,  1448 => 551,  1443 => 549,  1438 => 546,  1436 => 545,  1433 => 544,  1429 => 542,  1422 => 541,  1418 => 539,  1416 => 538,  1412 => 536,  1410 => 535,  1406 => 533,  1403 => 532,  1401 => 531,  1387 => 530,  1383 => 528,  1381 => 527,  1376 => 526,  1373 => 525,  1370 => 524,  1352 => 523,  1338 => 522,  1334 => 520,  1332 => 519,  1327 => 518,  1324 => 517,  1321 => 516,  1303 => 515,  1300 => 513,  1285 => 511,  1283 => 510,  1276 => 509,  1259 => 508,  1255 => 506,  1253 => 505,  1248 => 502,  1246 => 501,  1241 => 498,  1239 => 497,  1236 => 496,  1234 => 495,  1231 => 494,  1228 => 493,  1225 => 492,  1222 => 491,  1220 => 490,  1217 => 489,  1214 => 488,  1212 => 487,  1208 => 485,  1204 => 483,  1202 => 482,  1197 => 480,  1189 => 475,  1185 => 474,  1179 => 471,  1167 => 468,  1163 => 466,  1159 => 464,  1156 => 463,  1153 => 462,  1150 => 461,  1147 => 460,  1144 => 459,  1141 => 458,  1138 => 457,  1135 => 456,  1132 => 455,  1127 => 451,  1119 => 446,  1107 => 445,  1103 => 444,  1091 => 443,  1087 => 441,  1084 => 440,  1081 => 439,  1078 => 438,  1075 => 437,  1072 => 436,  1070 => 435,  1067 => 434,  1063 => 432,  1059 => 430,  1053 => 429,  1043 => 427,  1040 => 426,  1036 => 425,  1030 => 421,  1028 => 420,  1025 => 419,  1019 => 417,  1013 => 415,  1011 => 414,  1007 => 412,  1005 => 411,  1000 => 408,  997 => 407,  994 => 406,  992 => 405,  989 => 404,  986 => 403,  978 => 399,  972 => 396,  969 => 395,  967 => 394,  962 => 393,  960 => 392,  957 => 391,  953 => 389,  949 => 387,  944 => 386,  940 => 383,  937 => 382,  933 => 380,  927 => 379,  917 => 377,  914 => 376,  911 => 375,  907 => 374,  901 => 370,  898 => 369,  896 => 368,  892 => 367,  889 => 366,  885 => 364,  880 => 363,  877 => 361,  874 => 360,  868 => 358,  860 => 356,  857 => 355,  851 => 353,  849 => 352,  845 => 351,  839 => 350,  836 => 349,  834 => 348,  827 => 344,  818 => 338,  814 => 336,  811 => 335,  806 => 331,  804 => 330,  793 => 328,  790 => 327,  785 => 326,  783 => 325,  777 => 323,  775 => 322,  771 => 321,  767 => 320,  758 => 314,  754 => 312,  752 => 311,  749 => 310,  745 => 308,  740 => 307,  737 => 305,  729 => 303,  726 => 302,  723 => 301,  721 => 300,  718 => 299,  710 => 297,  707 => 296,  704 => 295,  702 => 294,  699 => 293,  697 => 292,  689 => 290,  685 => 288,  680 => 287,  675 => 284,  672 => 283,  669 => 282,  665 => 280,  660 => 279,  657 => 277,  653 => 275,  649 => 273,  643 => 272,  635 => 270,  632 => 269,  629 => 268,  625 => 267,  619 => 263,  617 => 262,  611 => 260,  609 => 259,  604 => 256,  601 => 255,  597 => 253,  592 => 252,  587 => 248,  585 => 247,  574 => 245,  571 => 244,  566 => 243,  564 => 242,  558 => 241,  546 => 239,  543 => 238,  538 => 237,  532 => 235,  530 => 234,  526 => 233,  522 => 232,  513 => 226,  509 => 224,  505 => 222,  500 => 221,  497 => 219,  491 => 218,  479 => 216,  476 => 215,  472 => 214,  464 => 212,  460 => 210,  455 => 209,  453 => 208,  451 => 207,  448 => 206,  445 => 205,  441 => 193,  427 => 192,  424 => 191,  421 => 190,  418 => 189,  415 => 188,  412 => 187,  409 => 186,  401 => 184,  398 => 183,  380 => 182,  378 => 181,  376 => 180,  362 => 179,  359 => 178,  356 => 177,  353 => 176,  350 => 175,  347 => 174,  344 => 173,  336 => 171,  333 => 170,  315 => 169,  310 => 167,  308 => 166,  294 => 165,  291 => 164,  288 => 163,  285 => 162,  282 => 161,  279 => 160,  276 => 159,  268 => 157,  265 => 156,  247 => 155,  245 => 154,  243 => 153,  229 => 152,  226 => 151,  223 => 150,  220 => 149,  217 => 148,  214 => 147,  211 => 146,  203 => 144,  200 => 143,  182 => 142,  179 => 141,  177 => 140,  174 => 139,  170 => 136,  164 => 135,  161 => 134,  156 => 133,  150 => 132,  147 => 131,  142 => 130,  137 => 128,  135 => 127,  129 => 126,  126 => 125,  121 => 124,  115 => 123,  112 => 122,  107 => 121,  104 => 120,  102 => 119,  99 => 118,  96 => 117,  93 => 116,  90 => 115,  86 => 1,  83 => 202,  81 => 201,  78 => 199,  76 => 198,  74 => 197,  72 => 196,  70 => 113,  68 => 112,  66 => 111,  64 => 110,  62 => 109,  59 => 106,  57 => 105,  53 => 102,  50 => 100,  48 => 99,  46 => 98,  44 => 97,  42 => 96,  40 => 95,  38 => 94,  36 => 93,  33 => 90,  31 => 89,  29 => 86,  11 => 1,);
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

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}

{% macro loop(page, depth, twig_vars) %}
    {% import _self as self %}

    {% set config = twig_vars['config'] %}
    {% set separator = config.system.param_sep %}
    {% set display_field = config.plugins.admin.pages_list_display_field %}
    {% set base_url = twig_vars['base_url_relative'] %}
    {% set base_url_relative_frontend = twig_vars['base_url_relative_frontend'] %}
    {% set base_url_simple = twig_vars['base_url_simple'] %}
    {% set admin_route = twig_vars['admin_route'] %}
    {% set admin_lang = twig_vars['admin_lang'] %}
    {% set warn = twig_vars['warn'] %}
    {% set uri = twig_vars['uri'] %}

    {% if page.header.admin.children_display_order == 'collection' and page.header.content.order.by %}
        {% if page.header.content.order.custom %}
            {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc'), page.header.content.order.custom) %}
        {% else %}
            {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir|default('asc')) %}
        {% endif %}
    {% else %}
        {% set pcol = page.children() %}
    {% endif %}

    {% for p in pcol %}
        {% set description = (not p.page ? \"PLUGIN_ADMIN.FOLDER\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.PAGE\"|tu ~ ' &bull; ') ~
            (p.modular ? \"PLUGIN_ADMIN.MODULAR\"|tu ~ ' &bull; ' : '') ~
            (p.routable ? \"PLUGIN_ADMIN.ROUTABLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_ROUTABLE\"|tu ~ ' &bull; ') ~
            (p.visible ? \"PLUGIN_ADMIN.VISIBLE\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_VISIBLE\"|tu ~ ' &bull; ') ~
            (p.published ? \"PLUGIN_ADMIN.PUBLISHED\"|tu ~ ' &bull; ' : \"PLUGIN_ADMIN.NON_PUBLISHED\"|tu ~ ' &bull; ') %}

        {% set page_url = getPageUrl(p) %}

        <li class=\"page-item\" data-nav-id=\"{{ p.route }}\">
            <div class=\"row page-item__row\">
                <span class=\"page-item__toggle\" {{ p.children(0).count > 0 ? 'data-toggle=\"children\"' : ''}}>
                    <i class=\"page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}\"></i>
                </span>
                <div class=\"page-item__content\">
                    <div class=\"page-item__content-name\">
                        <span data-hint=\"{{ description|trim(' &bull; ')|raw }}\" class=\"hint--top page-item__content-hint\">
                            {% set page_label = attribute(p.header, display_field)|defined(attribute(p, display_field))|defined(p.title) %}
                            <a href=\"{{ page_url }}\" class=\"page-edit\">{{ page_label|e }}</a>
                        </span>
                        {% if p.language %}
                            <span class=\"badge lang {% if p.language == admin_lang %}info{% endif %}\">{{p.language}}</span>
                        {% endif %}
                        {% if p.home %}
                            <span class=\"page-home\"><i class=\"fa fa-home\"></i></span>
                        {% endif %}
                    </div>
                    <p class=\"page-route\">{{ p.header.routes.default ?: p.route }} <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> {{ p.template() }}</p>
                </div>
                <span class=\"page-item__tools\">
                    {% if config.plugins.admin.frontend_preview_target != 'inline' %}
                        {% set preview_target = config.plugins.admin.frontend_preview_target %}
                        {% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (p.home ? '' : p.route)) ?: '/' %}
                        {% set preview_link = p.routable ? '<a class=\"page-view\" target=\"' ~ preview_target ~ '\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\"></i></a>' : '' %}
                    {% else %}
                        {% set preview_html = (base_url|rtrim('/') ~ '/preview' ~ (p.home ? '' : p.route)) ?: '/' %}
                        {% set preview_link = p.routable ? '<a class=\"page-view\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\"></i></a>' : '' %}
                    {% endif %}
                    {{ preview_link|raw }}
                    {% if warn %}
                        <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    {% else %}
                        <a href=\"{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    {% endif %}
                </span>
            </div>
            {% if p.children().count > 0 %}
                <ul class=\"depth-{{ depth + 1 }}\" style=\"display:none;\">
                    {{ self.loop(p, depth + 1, twig_vars) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% import _self as macro %}


{% if admin.route %}
    {% set context = admin.page(true) %}
{% endif %}

{% if uri.param('new') %}
    {% set mode = 'new' %}
{%  elseif context %}
    {% set mode = 'edit' %}
    {% if context.exists %}
        {% set page_url = base_url ~ '/pages' ~ (context.header.routes.default ?: context.rawRoute) %}
        {% set exists = true %}
        {% set title = (context.exists ? \"PLUGIN_ADMIN.EDIT\"|tu : \"PLUGIN_ADMIN.CREATE\"|tu ) ~ \" \" ~ (context.header.title ?: context.title) %}
    {% else %}
        {% set title = \"PLUGIN_ADMIN.ADD_PAGE\"|tu %}
    {% endif %}
{% else %}
    {% set mode = 'list' %}
    {% set title = \"PLUGIN_ADMIN.PAGES\"|tu %}
{% endif %}

{% set modular = context.modular ? 'modular_' : '' %}
{% set warn = config.plugins.admin.warnings.delete_page %}
{% set admin_lang = admin.session.admin_lang ?: 'en' %}
{% set page_lang = context.language %}
{% set type = 'page' %}

{% block stylesheets %}
    {% if mode == 'edit' %}
        {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}
    {% endif %}
    {#tt#}
    {% set theScope = mode == 'edit' ? 'page' : 'pages' %}
    {% for sheet in service_items('admin:stylesheets', theScope, 'first') %}
        {% do assets.addCss(\"#{sheet}\") %}
    {% endfor %}
    {% for sheet in service_items('admin:stylesheets', theScope, 'before:parent') %}
        {% do assets.addCss(\"#{sheet}\") %}
    {% endfor %}
    {#tt end#}
    {{ parent() }}
    {#tt#}
    {% for sheet in service_items('admin:stylesheets', theScope, 'after:parent') %}
        {% do assets.addCss(\"#{sheet}\") %}
    {% endfor %}
    {% for sheet in service_items('admin:stylesheets', theScope, 'last') %}
        {% do assets.addCss(\"#{sheet}\") %}
    {% endfor %}
    {#tt end#}
{% endblock %}

{% block javascripts %}
    {#tt#}
    {% set theScope = mode == 'edit' ? 'page' : 'pages' %}
    {% for asset in service_list('asset', theScope, 'first') %}
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
    {#tt#}
    {% for asset in service_list('asset', theScope, 'before:parent') %}
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
    {{ parent() }}
    {#tt#}
    {% for asset in service_list('asset', theScope, 'after:parent') %}
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
    {#tt#}
    {% for asset in service_list('asset', theScope, 'last') %}
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

{% if config.plugins.admin.frontend_preview_target != 'inline' %}
{% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}
    {% set preview_target = config.plugins.admin.frontend_preview_target %}
{% set preview_link = context.routable ? '<a class=\"button\" target=\"' ~ preview_target ~ '\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}
{% else %}
    {% set preview_html = (base_url|rtrim('/') ~ '/preview' ~ (context.home ? '' : context.route)) ?: '/' %}
    {% set preview_link = context.routable ? '<a class=\"button\" href=\"' ~ preview_html ~ '\" title=\"' ~ \"PLUGIN_ADMIN.PREVIEW\"|tu ~ '\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>' : '' %}
{% endif %}

{% block titlebar %}
    <div class=\"button-bar\">
        {% if mode == 'list' %}
            {#tt#}
            {{ service_render('renderer', 'pages', 'first', context) | raw }}
            {{ service_render('action', 'pages', 'first', context) | raw }}
            {#tt end#}
            <a class=\"button\" href=\"{{ base_url }}\"><i class=\"fa fa-reply\"></i> {{ \"PLUGIN_ADMIN.BACK\"|tu }}</a>

            {% for key, add_modal in config.plugins.admin.add_modals %}
                {% if add_modal.show_in|defined('bar') == 'bar' %}
                    <a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\"><i class=\"fa fa-plus\"></i> {{ add_modal.label|tu }}</a>
                {% endif %}
            {% endfor %}

            {#tt#}
            {{ service_render('renderer', 'pages', 'before:parent', context) | raw }}
            {{ service_render('action', 'pages', 'before:parent', context) | raw }}
            {#tt end#}
            <div class=\"button-group\">
                <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                    <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                </button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                    <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                    {% if admin.modularTypes is not empty %}
                        <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                    {% endif %}
                    {% for key, add_modal in config.plugins.admin.add_modals %}
                        {% if add_modal.show_in|defined('bar') == 'dropdown' %}
                            <li><a class=\"button {{ add_modal.link_classes }}\" href=\"#modal-add_modal-{{ key }}\" data-remodal-target=\"modal-add_modal-{{ key }}\">{{ add_modal.label|tu }}</a></li>
                        {% endif %}
                    {% endfor %}
                    {#tt#}
                    {% for item in service_list_filter(\"(&(objectClass=action)(menu=page:add)(scope=pages))\", context) %}
                        {% set key = item.form_id ? \"href=##{item.form_id} data-remodal-target=#{item.form_id}\" : \"\" %}
                        <li><a class=\"button\" {{ key }}>{{ item.caption }}</a></li>
                    {% endfor %}
                    {#tt end#}
                </ul>
            </div>

            {#tt#}
            {{ service_render('renderer', 'pages', 'after:parent', context) | raw }}
            {{ service_render('action', 'pages', 'after:parent', context) | raw }}
            {#tt end#}
            {% if admin.multilang %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        {% set langName = admin.siteLanguages[admin_lang] %}
                        {{ langName[:1]|upper ~ langName[1:] }}
                    </button>
                    {%  if admin.languages_enabled|length > 1 %}
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        {% for langCode in admin.languages_enabled %}
                            {% set langName = admin.siteLanguages[langCode] %}
                            {% if langCode != admin_lang %}
                                <li><a href=\"{{ uri.addNonce(base_url_relative ~ theme.slug ~ '/pages/task' ~ config.system.param_sep ~ 'switchlanguage/lang' ~ config.system.param_sep ~ langCode, 'admin-form', 'admin-nonce') }}\">{{ langName[:1]|upper ~ langName[1:] }}</a></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                    {% endif %}
                </div>
            {% endif %}

            {#tt#}
            {{ service_render('renderer', 'pages', 'last', context) | raw }}
            {{ service_render('action', 'pages', 'last', context) | raw }}
            {#tt end#}
        {% elseif mode == 'edit' %}

            {{ preview_link|raw }}

            {#tt#}
            {{ service_render('renderer', 'page', 'first', context) | raw }}
            {{ service_render('action', 'page', 'first', context) | raw }}
            {#tt end#}
            <a class=\"button\" href=\"{{ base_url }}/pages\" title=\"{{ \"PLUGIN_ADMIN.BACK\"|tu }}\"><i class=\"fa fa-reply\"></i></a>

            {% set siblings = context.parent().children() %}

            {% if not siblings.isFirst(context.path) %}
                {% set sib = siblings.nextSibling(context.path) %}
                {% set sib_url = base_url ~ '/pages' ~ (sib.header.routes.default ?: sib.rawRoute) %}
                <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.PREVIOUS\"|tu }}\"><i class=\"fa fa-chevron-left\"></i></a>
            {% endif %}

            {% if not siblings.isLast(context.path) %}
                {% set sib = siblings.prevSibling(context.path) %}
                {% set sib_url = base_url ~ '/pages' ~ (sib.header.routes.default ?: sib.rawRoute) %}
                <a class=\"button hidden-mobile\" href=\"{{ sib_url }}\" title=\"{{ \"PLUGIN_ADMIN.NEXT\"|tu }}\"><i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}

            {#tt#}
            {{ service_render('renderer', 'page', 'before:parent', context) | raw }}
            {{ service_render('action', 'page', 'before:parent', context) | raw }}
            {#tt end#}
            
            {% if exists %}
                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">
                        <i class=\"fa fa-plus\"></i> {{ \"PLUGIN_ADMIN.ADD\"|tu }}
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li><a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\">{{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</a></li>
                        <li><a class=\"button\" href=\"#modal-folder\" data-remodal-target=\"modal-folder\">{{ \"PLUGIN_ADMIN.ADD_FOLDER\"|tu }}</a></li>
                        {% if admin.modularTypes is not empty %}
                            <li><a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\">{{ \"PLUGIN_ADMIN.ADD_MODULAR\"|tu }}</a></li>
                        {% endif %}
                        {#tt#}
                        {% for item in service_list_filter(\"(&(objectClass=action)(menu=page:add)(scope=page))\", context) %}
                            {% set key = item.form_id ? \"href=##{item.form_id} data-remodal-target=#{item.form_id}\" : \"\" %}
                            <li><a class=\"button\" {{ key }}>{{ item.caption }}</a></li>
                        {% endfor %}
                        {#tt end#}
                    </ul>
                </div>

                {#tt#}
                {% if service_render_count('action', 'page:more', 'any', context) > 0 %}
                    <div class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\" href=\"#\">
                            <i class=\"fa fa-plus-square\"></i> {{ \"More\" }}
                        </button>
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu\">
                            {{ service_render('action', 'page:more', 'any', context) | raw }}
                        </ul>
                    </div>
                {% endif %}
                {#tt end#}

                <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'copy', 'admin-form', 'admin-nonce') }}\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> {{ \"PLUGIN_ADMIN.COPY\"|tu }}</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> {{ \"PLUGIN_ADMIN.MOVE\"|tu }}</a>
                {% if config.plugins['admin-pro'].enabled %}
                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> {{ \"PLUGIN_ADMIN_PRO.REVISIONS\"|tu }}</a>
                {% endif %}
                {% if warn %}
                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\"><i class=\"fa fa-close\"></i> {{ \"PLUGIN_ADMIN.DELETE\"|tu }}</a>
                {% else %}
                    <a class=\"button disable-after-click\" href=\"{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                {% endif %}
            {% endif %}

            {#tt#}
            {{ service_render('renderer', 'page', 'after:parent', context) | raw }}
            {{ service_render('action', 'page', 'after:parent', context) | raw }}
            {#tt end#}
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SAVE\"|tu }}</button>
                {% if exists and admin.multilang %}
                    {% if context.untranslatedLanguages %}
                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            {% for langCode in context.untranslatedLanguages %}
                                {% set langName = admin.siteLanguages[langCode] %}
                                {% if langCode != page_lang %}
                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"{{langCode}}\" form=\"blueprints\" type=\"submit\">{{ \"PLUGIN_ADMIN.SAVE_AS\"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                {% endif %}
            </div>

            {#tt#}
            {{ service_render('renderer', 'page', 'last', context) | raw }}
            {{ service_render('action', 'page', 'last', context) | raw }}
            {#tt end#}

        {% endif %}
    </div>
    {% if mode == 'new' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.ADD_PAGE\"|tu }}</h1>
    {% elseif mode == 'edit' %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            {{ context.menu }}
        </h1>
    {% else %}
        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> {{ \"PLUGIN_ADMIN.MANAGE_PAGES\"|tu }}</h1>
    {% endif %}
{% endblock %}

{% block content %}
    <div class=\"clear admin-pages\">
    {% if mode == 'new' %}
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}
    {% elseif mode == 'edit' %}
        <div class=\"admin-form-wrapper\">
            <div id=\"admin-topbar\">

                {% if admin.multilang and page_lang %}
                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            {% if exists %}
                                {{ page_lang }}
                            {% else %}
                                {{ admin_lang }}
                            {% endif %}
                        </button>
                        {% if exists and context.translatedLanguages|length > 1 %}
                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                {% for language, route in context.translatedLanguages %}
                                    {% if language != page_lang %}
                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"{{language}}\" redirect=\"{{context.rawRoute|trim('/')}}\" form=\"blueprints\">{{ language }}</button>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        {% endif %}
                    </div>
                {% endif %}

                {% if context.blueprints.fields %}
                {% set normalText = \"PLUGIN_ADMIN.NORMAL\"|tu %}
                {% set expertText = \"PLUGIN_ADMIN.EXPERT\"|tu %}
                {% set maxLen = max([normalText|length, expertText|length]) %}
                {% set normalText = macro.spanToggle(normalText, maxLen) %}
                {% set expertText = macro.spanToggle(expertText, maxLen) %}
                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
                        <label for=\"normal\">{{ normalText|raw }}</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
                        <label for=\"expert\">{{ expertText|raw }}</label>
                        <a></a>
                    </div>
                </form>
                {% endif %}

            </div>

            {# Set current form data back into page content #}
            {% if current_form_data %}
                {% do context.header(current_form_data.header) %}
                {% do context.content(current_form_data.content) %}
            {% endif %}
            {% if context.blueprints.fields and admin.session.expert == '0' %}
                {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}
            {% else %}
                {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('admin/pages/'~modular~'raw'), data: context } %}
            {% endif %}
        </div>
    {% else %}
        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-filter-labels=\"{{ [{'id': 'mode', 'name': 'PLUGIN_ADMIN.PAGE_MODES'|tu}, {'id': 'type', 'name': 'PLUGIN_ADMIN.PAGE_TYPES'|tu}, {'id': 'access', 'name': 'PLUGIN_ADMIN.ACCESS_LEVELS'|tu}] |json_encode|e('html_attr')}}\" data-filter-types=\"{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}\" data-filter-access-levels=\"{{ admin.accessLevels|json_encode|e('html_attr') }}\" placeholder=\"{{ \"PLUGIN_ADMIN.ADD_FILTERS\"|tu }}\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"{{ \"PLUGIN_ADMIN.SEARCH_PAGES\"|tu }}\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> {{ \"PLUGIN_ADMIN.EXPAND_ALL\"|tu }}</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> {{ \"PLUGIN_ADMIN.COLLAPSE_ALL\"|tu }}</span>
            </div>
        </form>
        <div class=\"pages-list\">
            <ul class=\"depth-0\">
                {{ macro.loop(pages, 0, _context) }}
            </ul>
            {% include 'partials/page-legend.html.twig' %}
        </div>
    {% endif %}
    </div>

    {% if context %}
        {% set obj_data = clone(context) %}

        {% if mode == 'edit' %}
            {% do obj_data.folder('') %}
        {% endif %}
    {% endif %}

    {% if mode == 'list' or mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/new'), data: obj_data, form_id:'new-page' } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new-folder.html.twig' with { blueprints: admin.blueprints('admin/pages/new_folder'), data: obj_data, form_id:'new-folder' } %}
    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('admin/pages/modular_new'), data: obj_data, form_id:'new-modular' } %}
    </div>

    {% for key, add_modal in config.plugins.admin.add_modals %}
        <div class=\"remodal {{ add_modal.modal_classes|defined('') }}\" data-remodal-id=\"modal-add_modal-{{ key }}\" data-remodal-options=\"hashTracking: false\">
            {% include add_modal.template|defined('partials/blueprints-new.html.twig') with { blueprints: admin.blueprints(add_modal.blueprint), data: context, form_id:'add-modal' }|merge(add_modal.with|defined({})) %}
        </div>
    {% endfor %}
        
    {#tt#}
    {% for item in service_list_filter(\"(&(objectClass=action)(menu=page:add)(scope=#{ mode=='list' ? 'pages' : 'page' }))\", context) %}
        {% if item.form_id %}
            {% set form_data = item.form_data(context) %}
            <div class=\"remodal\" data-remodal-id=\"{{ item.form_id }}\" data-remodal-options=\"hashTracking: false\">
                {% include \"partials/blueprints-new-custom.html.twig\" with { blueprints:  item.form_blueprint, data: obj_data, form_data:form_data, form_id:\"#{item.form_id}\" } %}
            </div>
        {% endif %}
    {% endfor %}
    {% for item in service_list(\"action\", mode == 'list' ? \"pages\" : [\"page\", \"page:more\"], \"any\", context) %}
        {% if item.form_id %}
            {% set form_data = item.form_data(context) %}
            <div class=\"remodal\" data-remodal-id=\"{{ item.form_id }}\" data-remodal-options=\"hashTracking: false\">
                {% include \"partials/blueprints-new-custom.html.twig\" with { blueprints:  item.form_blueprint, data: obj_data, form_data:form_data, form_id:\"#{item.form_id}\" } %}
            </div>
        {% endif %}
    {% endfor %}
    {#tt end#}
    {% endif %}


    {% if mode == 'edit' %}
    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('admin/pages/move'), data: context } %}
    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        {% include ['partials/page-revisions.html.twig', 'empty.html.twig'] ignore missing with { data: context } %}
    </div>
    {% endif %}

    {% include 'partials/modal-changes-detected.html.twig' %}

    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>{{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE\"|tu }}</h1>
            <p class=\"bigger\">
                {% if context %}
                    <strong>{{ \"PLUGIN_ADMIN.PAGE\"|tu }}: {{ context.title }}</strong>
                {% endif %}
            </p>
            <p class=\"bigger\">
              {{ \"PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC\"|tu }}
            </p>
            <br>
            <div class=\"button-bar\">
            <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</button>
            <a class=\"button disable-after-click\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

    {% include 'partials/admin-pro-pages-addons.html.twig' ignore missing %}

{% endblock %}

{% block bottom %}
    {{ parent() }}
<script>
    \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
</script>

{#tt - remove this when the admin plugin is fixed#}
{{ assets.js('bottom') | raw }}
{#tt end#}
    
    {#tt#}
    {% set like_data = grav.session.getFlashObject(\"like_data\") %}
    {% set like_page = grav.session.getFlashObject(\"like_page\") %}
    {% if like_page %}
    <script>
        let title2 = \$('input[name=\"data[header][title]\"]');
        title2.val('{{ grav.session.getFlashObject('use_title')  }}');
    
        let content2 = \$('textarea[name=\"data[content]\"]');
        content2.val({{ grav.session.getFlashObject('use_content') | json_encode | raw }});

        {
            let c = \$('input[name=\"data[header][body_classes]\"]');
            c.val('{{ like_page.header.body_classes }}');
        }

        {
            let c = \$('select[name=\"data[name]\"]');
            c.val('{{ like_page.template }}');
        }

        {% for name, items in grav.session.getFlashObject('use_taxonomy')  %}
            let tax{{ name }} = \$('select[name=\"data[header][taxonomy][{{ name }}][]\"]');
            tax{{ name }}.val({{ items | json_encode | raw }});
        {% endfor %}
    </script>
    {% endif %}
    {#tt end#}
    
{% endblock %}
", "pages.html.twig", "/Users/jon/Portfolio/user/plugins/core-service-manager/admin/templates-grav-1_9/pages.html.twig");
    }
}
