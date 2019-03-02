<?php

/* forms/fields/pagemediaselect/pagemediaselect.html.twig */
class __TwigTemplate_f83af95c1eac4a6c528608c386badf67b74b34e53f453519fef0c288700ff243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/fields/filepicker/filepicker.html.twig", "forms/fields/pagemediaselect/pagemediaselect.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/filepicker/filepicker.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/fields/pagemediaselect/pagemediaselect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"forms/fields/filepicker/filepicker.html.twig\" %}

", "forms/fields/pagemediaselect/pagemediaselect.html.twig", "/Users/jon/Portfolio/user/plugins/admin/themes/grav/templates/forms/fields/pagemediaselect/pagemediaselect.html.twig");
    }
}
