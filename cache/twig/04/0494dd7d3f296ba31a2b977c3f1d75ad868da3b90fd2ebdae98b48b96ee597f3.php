<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_6b166c10ee6735d4f23886c6c3ba8075e004fb6b646fab243c3e4edf95c50174 extends Twig_Template
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
        echo "<article class=\"box post post-excerpt\">

    ";
        // line 3
        if (($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "facebook", array()) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "twitter", array()))) {
            // line 4
            echo "    <script type=\"text/javascript\">
    ";
            // line 5
            if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "twitter", array())) {
                // line 6
                echo "    jQuery.getJSON('https://cdn.api.twitter.com/1/urls/count.json?url=";
                echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
                echo "/&callback=?', function (data) {
        jQuery('#so-url-shares";
                // line 7
                echo $this->getAttribute(($context["loop"] ?? null), "index", array());
                echo "').text(data.count);
    });
    ";
            }
            // line 10
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "facebook", array())) {
                // line 11
                echo "    jQuery.getJSON('http://graph.facebook.com/?id=";
                echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
                echo "', function (data) {
        jQuery('#so-fburl-shares";
                // line 12
                echo $this->getAttribute(($context["loop"] ?? null), "index", array());
                echo "').text(data.shares);
    });
    ";
            }
            // line 15
            echo "    </script>
    ";
        }
        // line 17
        echo "    <header>
        ";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 19
            echo "            <h2>
                ";
            // line 20
            if ( !($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
                // line 21
                echo "                    <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array());
                echo "\"></a>
                ";
            }
            // line 23
            echo "                <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
            </h2>
            ";
        } else {
            // line 26
            echo "            <h2><a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a></h2>
        ";
        }
        // line 28
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array())) {
            // line 29
            echo "        <p>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array());
            echo "</p>
        ";
        }
        // line 31
        echo "    </header>

    <div class=\"info\">
        <span class=\"date\">
            <span class=\"month\">";
        // line 35
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "M");
        echo "</span> 
            <span class=\"day\">";
        // line 36
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d");
        echo "</span>
        </span>    
            ";
        // line 38
        if (($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "facebook", array()) || $this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "twitter", array()))) {
            // line 39
            echo "            <ul class=\"stats\">
                ";
            // line 40
            if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "twitter", array())) {
                // line 41
                echo "                <li><a href=\"https://twitter.com/share\" data-url=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
                echo "\" data-text=\"";
                echo $this->getAttribute(($context["page"] ?? null), "title", array());
                echo "\" class=\"icon fa-twitter\"><span id=\"so-url-shares";
                echo $this->getAttribute(($context["loop"] ?? null), "index", array());
                echo "\"><i class=\"fa fa-circle-o-notch fa-spin\"></i></span></a></li>
                ";
            }
            // line 43
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "share", array()), "facebook", array())) {
                // line 44
                echo "                <li><a href=\"http://www.facebook.com/sharer.php?u=";
                echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
                echo "\" class=\"icon fa-facebook\"><span id=\"so-fburl-shares";
                echo $this->getAttribute(($context["loop"] ?? null), "index", array());
                echo "\">0</span></a></li>
                ";
            }
            // line 46
            echo "            </ul>
            ";
        }
        // line 48
        echo "        </div>

        ";
        // line 50
        if (($context["big_header"] ?? null)) {
            // line 51
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropResize", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute(($context["page"] ?? null), "title", array()), 1 => $this->getAttribute(($context["page"] ?? null), "title", array()), 2 => "image featured"), "method");
            echo "
        ";
        } else {
            // line 53
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropZoom", array(0 => 1038, 1 => 437), "method"), "html", array(0 => $this->getAttribute(($context["page"] ?? null), "title", array()), 1 => $this->getAttribute(($context["page"] ?? null), "title", array()), 2 => "image featured"), "method");
            echo "
        ";
        }
        // line 55
        echo "
        ";
        // line 56
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array())) {
            // line 57
            echo "        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            ";
            // line 59
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array());
            echo "
        </span>
        ";
        }
        // line 62
        echo "       
       ";
        // line 63
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
            // line 64
            echo "        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 67
                echo "            <li><a href=\"";
                echo ($context["base_url"] ?? null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        </ul>
        ";
        }
        // line 71
        echo "        
 
    ";
        // line 73
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 74
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "</p>
        ";
            // line 75
            if ( !($context["truncate"] ?? null)) {
                // line 76
                echo "        ";
                $context["show_prev_next"] = true;
                // line 77
                echo "        ";
            }
            // line 78
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 79
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "summary", array());
            echo "</p>
        <p><a class=\"button\" href=\"";
            // line 80
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } elseif (        // line 81
($context["truncate"] ?? null)) {
            // line 82
            echo "        <p>";
            echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", array()), 550);
            echo "</p>
        <p><a class=\"button\" href=\"";
            // line 83
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">Continue Reading...</a></p>
    ";
        } else {
            // line 85
            echo "        <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "</p>
        ";
            // line 86
            $context["show_prev_next"] = true;
            // line 87
            echo "    ";
        }
        // line 88
        echo "
    ";
        // line 89
        if (($context["show_prev_next"] ?? null)) {
            // line 90
            echo "
        <p class=\"prev-next\">
            ";
            // line 92
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", array())) {
                // line 93
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
                echo "\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            ";
            }
            // line 95
            echo "
            ";
            // line 96
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", array())) {
                // line 97
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
                echo "\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            ";
            }
            // line 99
            echo "        </p>
    ";
        }
        // line 101
        echo "
</article>
";
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 101,  293 => 99,  287 => 97,  285 => 96,  282 => 95,  276 => 93,  274 => 92,  270 => 90,  268 => 89,  265 => 88,  262 => 87,  260 => 86,  255 => 85,  250 => 83,  245 => 82,  243 => 81,  239 => 80,  234 => 79,  231 => 78,  228 => 77,  225 => 76,  223 => 75,  218 => 74,  216 => 73,  212 => 71,  208 => 69,  194 => 67,  190 => 66,  186 => 64,  184 => 63,  181 => 62,  175 => 59,  171 => 57,  169 => 56,  166 => 55,  160 => 53,  154 => 51,  152 => 50,  148 => 48,  144 => 46,  136 => 44,  133 => 43,  123 => 41,  121 => 40,  118 => 39,  116 => 38,  111 => 36,  107 => 35,  101 => 31,  95 => 29,  92 => 28,  84 => 26,  75 => 23,  69 => 21,  67 => 20,  64 => 19,  62 => 18,  59 => 17,  55 => 15,  49 => 12,  44 => 11,  41 => 10,  35 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article class=\"box post post-excerpt\">

    {% if site.share.facebook or site.share.twitter %}
    <script type=\"text/javascript\">
    {% if site.share.twitter %}
    jQuery.getJSON('https://cdn.api.twitter.com/1/urls/count.json?url={{ page.url(true) }}/&callback=?', function (data) {
        jQuery('#so-url-shares{{ loop.index }}').text(data.count);
    });
    {% endif %}
    {% if site.share.facebook %}
    jQuery.getJSON('http://graph.facebook.com/?id={{ page.url(true) }}', function (data) {
        jQuery('#so-fburl-shares{{ loop.index }}').text(data.shares);
    });
    {% endif %}
    </script>
    {% endif %}
    <header>
        {% if page.header.link %}
            <h2>
                {% if page.header.continue_link is not sameas(false) %}
                    <a href=\"{{ page.url }}\"></a>
                {% endif %}
                <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
            </h2>
            {% else %}
            <h2><a href=\"{{ page.url }}\">{{ page.title }}</a></h2>
        {% endif %}
        {% if page.header.description %}
        <p>{{ page.header.description }}</p>
        {% endif %}
    </header>

    <div class=\"info\">
        <span class=\"date\">
            <span class=\"month\">{{ page.date|date(\"M\") }}</span> 
            <span class=\"day\">{{ page.date|date(\"d\") }}</span>
        </span>    
            {% if site.share.facebook or site.share.twitter %}
            <ul class=\"stats\">
                {% if site.share.twitter %}
                <li><a href=\"https://twitter.com/share\" data-url=\"{{ page.url(true) }}\" data-text=\"{{ page.title }}\" class=\"icon fa-twitter\"><span id=\"so-url-shares{{ loop.index }}\"><i class=\"fa fa-circle-o-notch fa-spin\"></i></span></a></li>
                {% endif %}
                {% if site.share.facebook %}
                <li><a href=\"http://www.facebook.com/sharer.php?u={{ page.url(true) }}\" class=\"icon fa-facebook\"><span id=\"so-fburl-shares{{ loop.index }}\">0</span></a></li>
                {% endif %}
            </ul>
            {% endif %}
        </div>

        {% if big_header %}
            {{ page.media.images|first.cropResize(1038,437).html(page.title, page.title, 'image featured') }}
        {% else %}
            {{ page.media.images|first.cropZoom(1038,437).html(page.title, page.title, 'image featured') }}
        {% endif %}

        {% if page.header.author %}
        <span class=\"list-blog-author\">
            <i class=\"fa fa-user\"></i>
            {{ page.header.author }}
        </span>
        {% endif %}
       
       {% if page.taxonomy.tag %}
        <ul class=\"tags\">
            <i class=\"fa fa-tag\"></i>
            {% for tag in page.taxonomy.tag %}
            <li><a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a></li>
            {% endfor %}
        </ul>
        {% endif %}
        
 
    {% if page.header.continue_link is sameas(false) %}
        <p>{{ page.content }}</p>
        {% if not truncate %}
        {% set show_prev_next = true %}
        {% endif %}
    {% elseif truncate and page.summary != page.content %}
        <p>{{ page.summary }}</p>
        <p><a class=\"button\" href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% elseif truncate %}
        <p>{{ page.content|truncate(550) }}</p>
        <p><a class=\"button\" href=\"{{ page.url }}\">Continue Reading...</a></p>
    {% else %}
        <p>{{ page.content }}</p>
        {% set show_prev_next = true %}
    {% endif %}

    {% if show_prev_next %}

        <p class=\"prev-next\">
            {% if not page.isFirst %}
                <a class=\"button\" href=\"{{ page.nextSibling.url }}\"><i class=\"fa fa-chevron-left\"></i> Next Post</a>
            {% endif %}

            {% if not page.isLast %}
                <a class=\"button\" href=\"{{ page.prevSibling.url }}\">Previous Post <i class=\"fa fa-chevron-right\"></i></a>
            {% endif %}
        </p>
    {% endif %}

</article>
", "partials/blog_item.html.twig", "/Users/jon/Portfolio/user/themes/striped/templates/partials/blog_item.html.twig");
    }
}
