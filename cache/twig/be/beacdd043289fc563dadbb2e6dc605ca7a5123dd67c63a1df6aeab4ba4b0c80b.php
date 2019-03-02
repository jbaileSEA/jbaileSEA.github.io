<?php

/* partials/simplesearch_searchbox.html.twig */
class __TwigTemplate_f4897d1ebaf33bbf442487b904af3cfb3b802ddf9e0e22bbf90ac53c9bf9d13d extends Twig_Template
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
        echo "<form>
  <input type=\"text\" class=\"text\" placeholder=\"Search...\" value=\"";
        // line 2
        echo ($context["query"] ?? null);
        echo "\" data-search-input=\"";
        echo ($context["base_url_relative"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "route", array());
        echo "/query\" />
</form>
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input') + '";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
        echo "' + input.val();
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_searchbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form>
  <input type=\"text\" class=\"text\" placeholder=\"Search...\" value=\"{{ query }}\" data-search-input=\"{{ base_url_relative }}{{ config.plugins.simplesearch.route}}/query\" />
</form>
<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input') + '{{ config.system.param_sep }}' + input.val();
        }
    });
});
</script>
", "partials/simplesearch_searchbox.html.twig", "/Users/jon/Portfolio/user/themes/striped/templates/partials/simplesearch_searchbox.html.twig");
    }
}
