<?php

/* forms/fields/uniqueid/uniqueid.html.twig */
class __TwigTemplate_8093fa9eb526ede4de341c664575f38c79c59e8d1801553ec0f7d36160d42583 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"__unique_form_id__\" value=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->randomStringFunc(20);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "forms/fields/uniqueid/uniqueid.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<input type=\"hidden\" name=\"__unique_form_id__\" value=\"{{ random_string(20) }}\" />", "forms/fields/uniqueid/uniqueid.html.twig", "/Users/jon/Portfolio/user/plugins/form/templates/forms/fields/uniqueid/uniqueid.html.twig");
    }
}
