<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_7932388424141a3e1722c55dfaac55fd4390fee856b59022f87fd3b10c2735ba extends Twig_Template
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
        echo "<div id=\"sidebar\">
<h1 id=\"logo\"><a href=\"";
        // line 2
        echo ($context["base_url_absolute"] ?? null);
        echo "\">";
        echo twig_upper_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()));
        echo "</a></h1>

";
        // line 4
        $this->loadTemplate("partials/navigation.html.twig", "partials/sidebar.html.twig", 4)->display($context);
        // line 5
        echo "
";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 7
            echo "<section class=\"box search\">
    ";
            // line 8
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 8)->display($context);
            // line 9
            echo "</section>
";
        }
        // line 11
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 12
            echo "<section class=\"box recent-comments\">
    <header>
        <h2>Related Posts</h2>
    </header>
    ";
            // line 16
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 16)->display($context);
            // line 17
            echo "</section>
";
        }
        // line 19
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 20
            echo "<section class=\"box text-style1\">
    <div class=\"inner\">
        <header>
            <h2>Random Article</h2>
        </header>
        <a href=\"";
            // line 25
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
    </div>
</section>
";
        }
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 30
            echo "    <section class=\"box recent-posts\">
        <header>
            <h2>Archives</h2>
        </header>
        ";
            // line 34
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 34)->display($context);
            // line 35
            echo "    </section>
";
        }
        // line 37
        echo "
";
        // line 38
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 39
            echo "<section class=\"box recent-comments\">
    <header>
        <h2>Popular Tags</h2>
    </header>
    ";
            // line 43
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 43)->display(array_merge($context, array("taxonomy" => "tag")));
            // line 44
            echo "</section>
";
        }
        // line 46
        echo "
";
        // line 47
        if ($this->getAttribute(($context["site"] ?? null), "calendar", array())) {
            // line 48
            echo "<section class=\"box calendar\">
    <div class=\"inner\">
        <div id=\"datepicker\"></div>
    </div>
</section>
";
        }
        // line 54
        echo "
";
        // line 55
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 56
            echo "<section class=\"box text-style1\">
    <header>
        <h2>Syndicate</h2>
    </header>
    <a class=\"button\" style=\"padding-right: 1em;padding-left: 1em;\" href=\"";
            // line 60
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" style=\"padding-right: 1em;padding-left: 1em;\" href=\"";
            // line 61
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</section>
";
        }
        // line 64
        echo "
<ul id=\"copyright\">
    <li>&copy; ";
        // line 66
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", array()), "name", array());
        echo "</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
    <li>Demo Images: <a href=\"http://unsplash.com\">Unsplash</a></li>
</ul>

</div>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 66,  140 => 64,  134 => 61,  130 => 60,  124 => 56,  122 => 55,  119 => 54,  111 => 48,  109 => 47,  106 => 46,  102 => 44,  100 => 43,  94 => 39,  92 => 38,  89 => 37,  85 => 35,  83 => 34,  77 => 30,  75 => 29,  68 => 25,  61 => 20,  59 => 19,  55 => 17,  53 => 16,  47 => 12,  45 => 11,  41 => 9,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  29 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"sidebar\">
<h1 id=\"logo\"><a href=\"{{ base_url_absolute }}\">{{ site.title|upper }}</a></h1>

{% include 'partials/navigation.html.twig' %}

{% if config.plugins.simplesearch.enabled %}
<section class=\"box search\">
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</section>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
<section class=\"box recent-comments\">
    <header>
        <h2>Related Posts</h2>
    </header>
    {% include 'partials/relatedpages.html.twig' %}
</section>
{% endif %}
{% if config.plugins.random.enabled %}
<section class=\"box text-style1\">
    <div class=\"inner\">
        <header>
            <h2>Random Article</h2>
        </header>
        <a href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
    </div>
</section>
{% endif %}
{% if config.plugins.archives.enabled %}
    <section class=\"box recent-posts\">
        <header>
            <h2>Archives</h2>
        </header>
        {% include 'partials/archives.html.twig' %}
    </section>
{% endif %}

{% if config.plugins.taxonomylist.enabled %}
<section class=\"box recent-comments\">
    <header>
        <h2>Popular Tags</h2>
    </header>
    {% include 'partials/taxonomylist.html.twig' with {'taxonomy':'tag'} %}
</section>
{% endif %}

{% if site.calendar %}
<section class=\"box calendar\">
    <div class=\"inner\">
        <div id=\"datepicker\"></div>
    </div>
</section>
{% endif %}

{% if config.plugins.feed.enabled %}
<section class=\"box text-style1\">
    <header>
        <h2>Syndicate</h2>
    </header>
    <a class=\"button\" style=\"padding-right: 1em;padding-left: 1em;\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" style=\"padding-right: 1em;padding-left: 1em;\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</section>
{% endif %}

<ul id=\"copyright\">
    <li>&copy; {{ site.author.name }}</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
    <li>Demo Images: <a href=\"http://unsplash.com\">Unsplash</a></li>
</ul>

</div>
", "partials/sidebar.html.twig", "/Users/jon/Portfolio/user/themes/striped/templates/partials/sidebar.html.twig");
    }
}
