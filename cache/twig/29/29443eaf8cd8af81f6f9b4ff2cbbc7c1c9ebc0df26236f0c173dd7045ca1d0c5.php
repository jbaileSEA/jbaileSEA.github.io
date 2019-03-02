<?php

/* forms/default/form.html.twig */
class __TwigTemplate_5a10aa3bdb377656b4c2cd99352827bf43a80be512d48fbf621753e3ee4cec39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'inner_markup_fields_start' => array($this, 'block_inner_markup_fields_start'),
            'inner_markup_fields_end' => array($this, 'block_inner_markup_fields_end'),
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
            'inner_markup_buttons_end' => array($this, 'block_inner_markup_buttons_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((null === ($context["form"] ?? null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "form"), "method");
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 8
        $context["multipart"] = "";
        // line 9
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", array())), "POST");
        // line 10
        $context["client_side_validation"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "client_side_validation", array()))) ? ($this->getAttribute(($context["form"] ?? null), "client_side_validation", array())) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array(), "any", false, true), "form", array(), "any", false, true), "client_side_validation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array(), "any", false, true), "form", array(), "any", false, true), "client_side_validation", array()), true)) : (true))));
        // line 11
        $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", array()))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "form", array()), "inline_errors", array(0 => false), "method")));
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 14
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 15
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 16
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
";
        // line 19
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", array())) ? ((($context["base_url"] ?? null) . $this->getAttribute(($context["form"] ?? null), "action", array()))) : (((($context["base_url"] ?? null) . $this->getAttribute(($context["page"] ?? null), "route", array())) . $this->getAttribute(($context["uri"] ?? null), "params", array()))));
        // line 20
        echo "
";
        // line 21
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 22
            echo "    ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 24
        echo "
";
        // line 25
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", array())) {
            // line 26
            echo "    ";
            if ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", array()), "browser", array()) == "msie") && ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "browser", array()), "version", array()) < 12))) {
                // line 27
                echo "        ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "plugin://form/assets/object.assign.polyfill.js"), "method");
                // line 28
                echo "    ";
            }
            // line 29
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "plugin://form/assets/form.vendor.js", 1 => array("group" => "bottom", "loading" => "defer")), "method");
            // line 30
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "plugin://form/assets/form.min.js", 1 => array("group" => "bottom", "loading" => "defer")), "method");
        }
        // line 32
        echo "
";
        // line 33
        $this->getAttribute(($context["assets"] ?? null), "addInlineJs", array(0 => (((((((((("
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '" . $this->getAttribute(        // line 36
($context["uri"] ?? null), "route", array(0 => true), "method")) . "',
        base_url_relative: '") .         // line 37
($context["base_url_relative"] ?? null)) . "',
        param_sep: '") . $this->getAttribute($this->getAttribute(        // line 38
($context["config"] ?? null), "system", array()), "param_sep", array())) . "',
        form_nonce: '") . $this->getAttribute(        // line 39
($context["form"] ?? null), "getNonce", array())) . "',
        session_timeout: ") . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 40
($context["config"] ?? null), "system", array()), "session", array()), "timeout", array())) . "
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
"), 1 => array("group" => "bottom")), "method");
        // line 44
        echo "
<form name=\"";
        // line 45
        echo $this->getAttribute(($context["form"] ?? null), "name", array());
        echo "\"
      action=\"";
        // line 46
        echo twig_trim_filter(($context["action"] ?? null), "/", "right");
        echo "\"
      method=\"";
        // line 47
        echo ($context["method"] ?? null);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
      ";
        // line 48
        if ($this->getAttribute(($context["form"] ?? null), "id", array())) {
            echo "id=\"";
            echo $this->getAttribute(($context["form"] ?? null), "id", array());
            echo "\"";
        }
        // line 49
        echo "      ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 52
        echo "      ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", array())) {
            echo "novalidate";
        }
        // line 53
        echo "      ";
        if ($this->getAttribute(($context["form"] ?? null), "keep_alive", array())) {
            echo "data-grav-keepalive=\"true\"";
        }
        // line 54
        echo ">

  ";
        // line 56
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 57
        echo "
  ";
        // line 58
        $context["data"] = (($context["data"]) ?? ($this->getAttribute(($context["form"] ?? null), "data", array())));
        // line 59
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
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
            // line 60
            echo "    ";
            $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 61
            echo "    ";
            try {
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/default/form.html.twig", 61)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 62
            echo "  ";
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
        // line 63
        echo "
  ";
        // line 64
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 64)->display($context);
        // line 65
        echo "
  ";
        // line 66
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 67
        echo "
  ";
        // line 68
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 71
        echo "
  ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 73
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "<div class=\" ";
                echo $this->getAttribute($context["button"], "outerclasses", array());
                echo "\">";
            }
            // line 74
            echo "          ";
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 75
                echo "              <a href=\"";
                echo (((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $this->getAttribute($context["button"], "url", array())) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "http") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) ? ($this->getAttribute($context["button"], "url", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", array()))));
                echo "\">
          ";
            }
            // line 77
            echo "          <button
                ";
            // line 78
            if ($this->getAttribute($context["button"], "id", array())) {
                echo "id=\"";
                echo $this->getAttribute($context["button"], "id", array());
                echo "\"";
            }
            // line 79
            echo "                ";
            $this->displayBlock('button_classes', $context, $blocks);
            // line 82
            echo "                ";
            if ($this->getAttribute($context["button"], "disabled", array())) {
                echo "disabled=\"disabled\"";
            }
            // line 83
            echo "
                type=\"";
            // line 84
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\"

                ";
            // line 86
            if ($this->getAttribute($context["button"], "task", array())) {
                // line 87
                echo "                    name=\"task\" value=\"";
                echo $this->getAttribute($context["button"], "task", array());
                echo "\"
                ";
            }
            // line 89
            echo "            >
                ";
            // line 90
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "
          </button>
          ";
            // line 92
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 93
                echo "              </a>
          ";
            }
            // line 95
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "</div>";
            }
            // line 96
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
  ";
        // line 98
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 101
        echo "
  ";
        // line 102
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "forms/default/form.html.twig", 102)->display($context);
        // line 103
        echo "  ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>

";
        // line 106
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "forms", array()), "dropzone", array()), "enabled", array())) {
            // line 107
            echo "<div id=\"dropzone-template\" style=\"display:none;\">
    ";
            // line 108
            $this->loadTemplate("forms/dropzone/template.html.twig", "forms/default/form.html.twig", 108)->display($context);
            // line 109
            echo "</div>
";
        }
    }

    // line 49
    public function block_form_classes($context, array $blocks = array())
    {
        // line 50
        echo "      class=\"";
        echo ($context["form_outer_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["form"] ?? null), "classes", array());
        echo "\"
      ";
    }

    // line 56
    public function block_inner_markup_fields_start($context, array $blocks = array())
    {
    }

    // line 66
    public function block_inner_markup_fields_end($context, array $blocks = array())
    {
    }

    // line 68
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 69
        echo "  <div class=\"";
        echo ((($context["form_button_outer_classes"] ?? null)) ? (($context["form_button_outer_classes"] ?? null)) : ("buttons"));
        echo "\">
  ";
    }

    // line 79
    public function block_button_classes($context, array $blocks = array())
    {
        // line 80
        echo "                class=\"";
        echo ((($context["form_button_classes"] ?? null)) ? (($context["form_button_classes"] ?? null)) : ("button"));
        echo " ";
        echo $this->getAttribute(($context["button"] ?? null), "classes", array());
        echo "\"
                ";
    }

    // line 98
    public function block_inner_markup_buttons_end($context, array $blocks = array())
    {
        // line 99
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 99,  405 => 98,  396 => 80,  393 => 79,  386 => 69,  383 => 68,  378 => 66,  373 => 56,  364 => 50,  361 => 49,  355 => 109,  353 => 108,  350 => 107,  348 => 106,  341 => 103,  339 => 102,  336 => 101,  334 => 98,  331 => 97,  317 => 96,  312 => 95,  308 => 93,  306 => 92,  301 => 90,  298 => 89,  292 => 87,  290 => 86,  285 => 84,  282 => 83,  277 => 82,  274 => 79,  268 => 78,  265 => 77,  259 => 75,  256 => 74,  249 => 73,  232 => 72,  229 => 71,  227 => 68,  224 => 67,  222 => 66,  219 => 65,  217 => 64,  214 => 63,  200 => 62,  192 => 61,  189 => 60,  171 => 59,  169 => 58,  166 => 57,  164 => 56,  160 => 54,  155 => 53,  150 => 52,  147 => 49,  141 => 48,  135 => 47,  131 => 46,  127 => 45,  124 => 44,  119 => 40,  117 => 39,  115 => 38,  113 => 37,  111 => 36,  107 => 33,  104 => 32,  100 => 30,  97 => 29,  94 => 28,  91 => 27,  88 => 26,  86 => 25,  83 => 24,  79 => 22,  77 => 21,  74 => 20,  72 => 19,  69 => 18,  62 => 16,  59 => 15,  56 => 14,  52 => 13,  49 => 12,  47 => 11,  45 => 10,  43 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ? base_url ~ form.action : base_url ~ page.route ~ uri.params %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

{% if form.keep_alive %}
    {% if grav.browser.browser == 'msie' and grav.browser.version < 12 %}
        {% do assets.addJs('plugin://form/assets/object.assign.polyfill.js') %}
    {% endif %}
    {% do assets.addJs('plugin://form/assets/form.vendor.js', { 'group': 'bottom', 'loading': 'defer' }) %}
    {% do assets.addJs('plugin://form/assets/form.min.js', { 'group': 'bottom', 'loading': 'defer' }) %}
{% endif %}

{% do assets.addInlineJs(\"
    window.GravForm = window.GravForm || {};
    window.GravForm.config = {
        current_url: '\" ~ uri.route(true) ~\"',
        base_url_relative: '\" ~ base_url_relative ~ \"',
        param_sep: '\"~ config.system.param_sep ~ \"',
        form_nonce: '\" ~ form.getNonce ~ \"',
        session_timeout: \" ~ config.system.session.timeout ~ \"
    };
    window.GravForm.translations = Object.assign({}, window.GravForm.translations || {}, { PLUGIN_FORM: {} });
\", {'group': 'bottom'}) %}

<form name=\"{{ form.name }}\"
      action=\"{{ action | trim('/', 'right') }}\"
      method=\"{{ method }}\"{{ multipart }}
      {% if form.id %}id=\"{{ form.id }}\"{% endif %}
      {% block form_classes %}
      class=\"{{ form_outer_classes }} {{ form.classes }}\"
      {% endblock %}
      {% if form.novalidate %}novalidate{% endif %}
      {% if form.keep_alive %}data-grav-keepalive=\"true\"{% endif %}
>

  {% block inner_markup_fields_start %}{% endblock %}

  {% set data = data ?? form.data %}
  {% for field in form.fields %}
    {% set value = form.value(field.name) %}
    {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
  {% endfor %}

  {% include \"forms/fields/formname/formname.html.twig\" %}

  {% block inner_markup_fields_end %}{% endblock %}

  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}

  {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\" {{ button.outerclasses }}\">{% endif %}
          {% if button.url %}
              <a href=\"{{ button.url starts with 'http' ? button.url : url(button.url) }}\">
          {% endif %}
          <button
                {% if button.id %}id=\"{{ button.id }}\"{% endif %}
                {% block button_classes %}
                class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
                {% endblock %}
                {% if button.disabled %}disabled=\"disabled\"{% endif %}

                type=\"{{ button.type|default('submit') }}\"

                {% if button.task %}
                    name=\"task\" value=\"{{ button.task }}\"
                {% endif %}
            >
                {{ button.value|t|default('Submit') }}
          </button>
          {% if button.url %}
              </a>
          {% endif %}
      {% if button.outerclasses is defined %}</div>{% endif %}
  {% endfor %}

  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}

  {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
  {{ nonce_field('form', 'form-nonce')|raw }}
</form>

{% if config.forms.dropzone.enabled %}
<div id=\"dropzone-template\" style=\"display:none;\">
    {% include 'forms/dropzone/template.html.twig' %}
</div>
{% endif %}
", "forms/default/form.html.twig", "/Users/jon/Portfolio/user/plugins/form/templates/forms/default/form.html.twig");
    }
}
