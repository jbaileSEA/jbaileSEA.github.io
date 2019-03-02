<?php

/* partials/nav-dropdown-menu.html.twig */
class __TwigTemplate_19424d83c168d65cc2546bf9b3ace46197808799e829e57258b813f15a8a526a extends Twig_Template
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
        echo "<style>
    #admin-menu button {
        background: transparent;
        border: 0;
    }

    #admin-menu ul.dropdown-menu {
        left: initial;
        right: 0;
        position: relative;
        width: 100%;
    }

    #admin-menu ul.dropdown-menu,
    #admin-menu ul.dropdown-menu * {
        background-color: transparent;
    }

    .ga-theme-16x #admin-menu .nav-drop .button {
        color: rgba(209, 222, 231, 0.9);
    }

    .ga-theme-16x #admin-menu .nav-drop .button:hover {
        color: #fff;
    }

    #admin-menu > li > div {
        /*display: inline-block;*/
        position: relative;
        /*tt tweak to line up with others */
        margin-left: 2px;
    }

    .ga-theme-16x #admin-menu > li > div {
        display: block;
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        transition: all 0.2s ease;
        position: relative;
    }

    .ga-theme-16x #admin-menu > li.nav-drop .button .fa {
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        transition: all 0.2s ease;
        margin-right: 8px;
    }

    .ga-theme-17x #admin-menu > li > div {
        display: block;
        position: relative;
    }

    /* #admin-menu from li > a of admin theme */
    .ga-theme-17x #admin-menu li > div {
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        transition: all 0.2s ease;
        /*display: block;*/
        /*padding-left: 25px;*/
        padding-top: 0.7rem;
        padding-bottom: 0.7rem;
        /*position: relative;*/
    }

    .ga-theme-17x #admin-menu > li.nav-drop .button .fa {
        margin-right: 8px;
    }

    /* Only show the dropdown toggle */
    @media only all and (max-width: 74.938em) and (min-width: 47.938em) {
        #admin-menu > li.nav-drop > a {
            display: none;
        }

        .ga-theme-17x #admin-menu > li.nav-drop .button .fa {
            margin-right: 0px;
        }

        #admin-menu .dropdown-menu em {
            display: block;
        }

        #admin-menu .dropdown-menu .button {
            padding-left: 8px;
        }
    }

    /* This is to match the li > a settings of the nav */
    .ga-theme-16x #admin-menu li > div:hover {
        background: #1e333e;
        color: #fff;
    }

    .ga-theme-16x #admin-menu li div:hover .fa {
        font-size: 1.2rem;
    }

    .ga-theme-17x #admin-menu li div.button-group:hover {
        background: #434753;
        color: #fff;
    }

    .ga-theme-17x #admin-menu li.selected div {
        background: #323640;
        color: #fff;
        border-left: 9px solid #007ab8;
    }

    /* Override parent rule if under the dropdown div */
    #admin-menu li.selected .dropdown-menu li a {
        /*background: #323640;*/
        /*color: #fff;*/
        border-left: initial;
    }
    #admin-menu li.selected .dropdown-menu li.selected a {
        /*background: #323640;*/
        /*color: #fff;*/
        border-left: 9px solid #007ab8;
    }

    /* TODO not sure what this was set to */
    .ga-theme-16x #admin-menu li.selected div {
        background: #323640;
        color: #fff;
        border-left: 9px solid #007ab8;
    }

</style>
<li class=\"nav-drop ";
        // line 130
        echo ((($context["selected"] ?? null)) ? ("selected") : (""));
        echo "\">
    ";
        // line 132
        echo "    ";
        // line 133
        echo "    ";
        // line 134
        echo "    ";
        // line 135
        echo "    <div class=\"button-group\">
        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-fw ";
        // line 137
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo "\"></i> <em>";
        echo twig_escape_filter($this->env, ($context["caption"] ?? null), "html", null, true);
        echo "</em> <i class=\"fa fa-fw fa-caret-down\"></i>
        </button>
        <ul class=\"dropdown-menu\">
            ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 141
            echo "                <li><a class=\"button\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "href", array()), "html", null, true);
            echo "\"
                       onclick='";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "onclick", array()), "html", null, true);
            echo "'><em>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "caption", array()), "html", null, true);
            echo "</em></a></li>
                ";
            // line 144
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "        </ul>
        ";
        // line 147
        echo "        ";
        // line 148
        echo "    </div>
    ";
        // line 150
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "partials/nav-dropdown-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 150,  198 => 148,  196 => 147,  193 => 145,  187 => 144,  181 => 142,  176 => 141,  172 => 140,  164 => 137,  160 => 135,  158 => 134,  156 => 133,  154 => 132,  150 => 130,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
    #admin-menu button {
        background: transparent;
        border: 0;
    }

    #admin-menu ul.dropdown-menu {
        left: initial;
        right: 0;
        position: relative;
        width: 100%;
    }

    #admin-menu ul.dropdown-menu,
    #admin-menu ul.dropdown-menu * {
        background-color: transparent;
    }

    .ga-theme-16x #admin-menu .nav-drop .button {
        color: rgba(209, 222, 231, 0.9);
    }

    .ga-theme-16x #admin-menu .nav-drop .button:hover {
        color: #fff;
    }

    #admin-menu > li > div {
        /*display: inline-block;*/
        position: relative;
        /*tt tweak to line up with others */
        margin-left: 2px;
    }

    .ga-theme-16x #admin-menu > li > div {
        display: block;
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        transition: all 0.2s ease;
        position: relative;
    }

    .ga-theme-16x #admin-menu > li.nav-drop .button .fa {
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        transition: all 0.2s ease;
        margin-right: 8px;
    }

    .ga-theme-17x #admin-menu > li > div {
        display: block;
        position: relative;
    }

    /* #admin-menu from li > a of admin theme */
    .ga-theme-17x #admin-menu li > div {
        -webkit-transition: all 0.2s ease;
        -moz-transition: all 0.2s ease;
        transition: all 0.2s ease;
        /*display: block;*/
        /*padding-left: 25px;*/
        padding-top: 0.7rem;
        padding-bottom: 0.7rem;
        /*position: relative;*/
    }

    .ga-theme-17x #admin-menu > li.nav-drop .button .fa {
        margin-right: 8px;
    }

    /* Only show the dropdown toggle */
    @media only all and (max-width: 74.938em) and (min-width: 47.938em) {
        #admin-menu > li.nav-drop > a {
            display: none;
        }

        .ga-theme-17x #admin-menu > li.nav-drop .button .fa {
            margin-right: 0px;
        }

        #admin-menu .dropdown-menu em {
            display: block;
        }

        #admin-menu .dropdown-menu .button {
            padding-left: 8px;
        }
    }

    /* This is to match the li > a settings of the nav */
    .ga-theme-16x #admin-menu li > div:hover {
        background: #1e333e;
        color: #fff;
    }

    .ga-theme-16x #admin-menu li div:hover .fa {
        font-size: 1.2rem;
    }

    .ga-theme-17x #admin-menu li div.button-group:hover {
        background: #434753;
        color: #fff;
    }

    .ga-theme-17x #admin-menu li.selected div {
        background: #323640;
        color: #fff;
        border-left: 9px solid #007ab8;
    }

    /* Override parent rule if under the dropdown div */
    #admin-menu li.selected .dropdown-menu li a {
        /*background: #323640;*/
        /*color: #fff;*/
        border-left: initial;
    }
    #admin-menu li.selected .dropdown-menu li.selected a {
        /*background: #323640;*/
        /*color: #fff;*/
        border-left: 9px solid #007ab8;
    }

    /* TODO not sure what this was set to */
    .ga-theme-16x #admin-menu li.selected div {
        background: #323640;
        color: #fff;
        border-left: 9px solid #007ab8;
    }

</style>
<li class=\"nav-drop {{ selected ? 'selected' : '' }}\">
    {#<a href=\"#\">#}
    {#<i class=\"fa {{ icon }}\"></i><em>{{ caption }}</em>#}
    {#</a>#}
    {#<a href=\"#\">#}
    <div class=\"button-group\">
        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
            <i class=\"fa fa-fw {{ icon }}\"></i> <em>{{ caption }}</em> <i class=\"fa fa-fw fa-caret-down\"></i>
        </button>
        <ul class=\"dropdown-menu\">
            {% for item in items %}
                <li><a class=\"button\" href=\"{{ item.href }}\"
                       onclick='{{ item.onclick }}'><em>{{ item.caption }}</em></a></li>
                {#<li><a class=\"button\" {{  \"onclick='#{item.onclick}'\" }} href=\"#modal\" data-remodal-target=\"modal\">{{ item.caption }}</a></li>#}
            {% endfor %}
        </ul>
        {#<button type=\"button\" class=\"button disabled\" href=\"#modal\" data-remodal-target=\"modal\">#}
        {#</button>#}
    </div>
    {#</a>#}
</li>
", "partials/nav-dropdown-menu.html.twig", "/Users/jon/Portfolio/user/plugins/core-service-manager/admin/templates-twelvetone/partials/nav-dropdown-menu.html.twig");
    }
}
