<?php

/* FOSElasticaBundle:Collector:elastica.html.twig */
class __TwigTemplate_c31a7560ee5e620eb837169d4c25ade1ff8f885e7aad0023ca9a9d3a9e976c76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "FOSElasticaBundle:Collector:elastica.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_866b1a1479b6749530275f455ac28d54f14f22f3fcb98f143eaf277d2caa2a2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866b1a1479b6749530275f455ac28d54f14f22f3fcb98f143eaf277d2caa2a2f->enter($__internal_866b1a1479b6749530275f455ac28d54f14f22f3fcb98f143eaf277d2caa2a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSElasticaBundle:Collector:elastica.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_866b1a1479b6749530275f455ac28d54f14f22f3fcb98f143eaf277d2caa2a2f->leave($__internal_866b1a1479b6749530275f455ac28d54f14f22f3fcb98f143eaf277d2caa2a2f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_494b13ff1052210aaa99e07830a9aecfeeefcd8a0d60130935c123ac823615c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494b13ff1052210aaa99e07830a9aecfeeefcd8a0d60130935c123ac823615c9->enter($__internal_494b13ff1052210aaa99e07830a9aecfeeefcd8a0d60130935c123ac823615c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 4, $this->getSourceContext()); })()), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 7, $this->getSourceContext()); })()) == 1)) {
            // line 8
            echo "            <img alt=\"elastica\" src=\"data:image/png;base64,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\" />
            <span class=\"sf-toolbar-status\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 9, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
            echo "</span>
            ";
            // line 10
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->getSourceContext()); })()), "querycount", array()) > 0)) {
                // line 11
                echo "                <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "time", array())), "html", null, true);
                echo " ms</span>
            ";
            }
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            ";
            echo twig_include($this->env, $context, "@FOSElastica/Collector/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 15, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
            echo "</span>
            ";
            // line 16
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "querycount", array()) > 0)) {
                // line 17
                echo "                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">";
                // line 19
                echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->getSourceContext()); })()), "time", array())), "html", null, true);
                echo "</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            ";
            }
            // line 23
            echo "        ";
        }
        // line 24
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "    ";
        ob_start();
        // line 26
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Queries</b>
            <span class=\"sf-toolbar-status\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 28, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query Time</b>
            <span>";
        // line 32
        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 32, $this->getSourceContext()); })()), "time", array())), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Execution Time</b>
            <span>";
        // line 36
        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 36, $this->getSourceContext()); })()), "executionTime", array())), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 39
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "FOSElasticaBundle:Collector:elastica.html.twig", 39)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 39, $this->getSourceContext()); })()))));
        
        $__internal_494b13ff1052210aaa99e07830a9aecfeeefcd8a0d60130935c123ac823615c9->leave($__internal_494b13ff1052210aaa99e07830a9aecfeeefcd8a0d60130935c123ac823615c9_prof);

    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e585459d01dfe4bf6c3d6d55bddd34d8b88477cde1ca168bd8e023c08c45da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e585459d01dfe4bf6c3d6d55bddd34d8b88477cde1ca168bd8e023c08c45da1->enter($__internal_0e585459d01dfe4bf6c3d6d55bddd34d8b88477cde1ca168bd8e023c08c45da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 43
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 43, $this->getSourceContext()); })()), 1)) : (1));
        // line 44
        echo "
    <span class=\"label ";
        // line 45
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 45, $this->getSourceContext()); })()), "querycount", array())) ? ("") : ("disabled"));
        echo "\">
        ";
        // line 46
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 46, $this->getSourceContext()); })()) == 1)) {
            // line 47
            echo "            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAQAAADPJofWAAAAAXNSR0IArs4c6QAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH2woEDg0xnxGaxwAAA51JREFUOMt100ts1FUUx/Hvufc/8x9mOrTTDpbysEVsqTzUqAsRgpqQGIJiIhtZSEJcqNGFJrSiZSPYkKALBUyAiLEuWKjBhdFAaEwwPNQqEAgEaA0FEWh4lE477/+9x0WLsST+Fmf1ycnJvecI/0knW4ENgZkhr5gVMtcEMmB64z1msCOCboR70tlkOuQdQREMBovF7tQt71/mXtzZQo8s89jLycFETiSqKd/v5wSY32VN18Ak3JGiR1d7an+Y3Z/Np7yVeCY/9czU4efF2iPxZ+wLXPgXP7WCTZ7MvvlnZlbqSJnGGbMeam5pk6HTIw9qs7tiH6D9vrbXW9e1Tus/sbhHZ8VOtfU1uZSExCUe1ExLtqayjcPnx4qNssjOs3TQrY9rYdVB2aFRw7HWq2kbJxCjFAsDoY+3hbkbw9ebNBsQ6EJVNlb3yQIDY8lcaAIsBisxiSXGToTNWqi/JUWXMIoabrK/95ymDNYHzmDUYAiwWOImOle+EI2AxyiKVydQGVAIoyneiBUNsAQEWIn+LA2NJqOYw3hUFQV2DFbu+FSuKTk9kRGMBoyPE7m8vza7UhMrmQNlV+NwAlDZXmXkkcHaeNamQBCEiLyeb7w631C71yxfr8/6YT8GUP6ifKlcf3xJX26kWNQyJfL+TvVs3S8rCw31hfRm2/KzL+iGQz8BnLjz8EVd5TPXF9wI/E0ZK/gr6SOLj7+Yz9RRu2bmMXm6y2/0A/rS0f6JL985+prVQAJiKEU8kLid6ezaA8Gh7iVP6BKtHad7njQr+xmSeFELLi2YovwlJ5Nbu07DNoLFoVNVrwBvh6feSMwSDcVuLvWF0y3Brd9mDlRlTsuVweGPCRzI+NOBW2rW3iYv5ZPfbrm7ji2fx1/Vkn7U/OGlivE4HA5Yh+yqUKFAYa3QfXcVf/R7Segy3wDGo4x3Tr3H3LLmqX6mZ5+jC4A5DO7jLR3SmAoYj8eTqx5uMR+UKErp78q2/e7ARNuLgE940bR1E9jpcKx+16MxJUd5+68XJp+a5DnqFxU/yYZG8XiSfJ+awkIW9WW+zLF8sh6NeqJb0cs+biIcKjW8u3T3xj+uZXZ/PbSe3km2nHWbogb3ZlSgPWz/bt71tsf432Qa64bSh5PTIFAU0pqdG3oRIiCgBBgsVTwRpYwmnWgMAlUd1aR+6m+DA4QqBlDKRDgifCqq8WO+CoFW9Ctd7dvBA+NV8DgiognuSv4bbsA/e9y1PQRZggAAAAAASUVORK5CYII=\" alt=\"\" /></span>
        ";
        } else {
            // line 49
            echo "            <span class=\"icon\">";
            echo twig_include($this->env, $context, "@FOSElastica/Collector/icon.svg");
            echo "</span>
        ";
        }
        // line 51
        echo "        <strong>Elastica</strong>
    </span>
";
        
        $__internal_0e585459d01dfe4bf6c3d6d55bddd34d8b88477cde1ca168bd8e023c08c45da1->leave($__internal_0e585459d01dfe4bf6c3d6d55bddd34d8b88477cde1ca168bd8e023c08c45da1_prof);

    }

    // line 55
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea2df72e6cfe45b5fd903b7d4732f5b47aa9db9ddf081b6c6dc2b1131092df0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2df72e6cfe45b5fd903b7d4732f5b47aa9db9ddf081b6c6dc2b1131092df0e->enter($__internal_ea2df72e6cfe45b5fd903b7d4732f5b47aa9db9ddf081b6c6dc2b1131092df0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 56
        echo "    <h2>Queries</h2>

    ";
        // line 58
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 58, $this->getSourceContext()); })()), "querycount", array())) {
            // line 59
            echo "        <div class=\"empty\">
            <p>No queries were performed.</p>
        </div>
    ";
        } else {
            // line 63
            echo "        <ul class=\"alt\">
            ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 64, $this->getSourceContext()); })()), "queries", array()));
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
            foreach ($context['_seq'] as $context["key"] => $context["query"]) {
                // line 65
                echo "                <li class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array())), "html", null, true);
                echo "\">
                    <strong>Path</strong>: ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "path", array()), "html", null, true);
                echo "<br />
                    <strong>Query</strong>: ";
                // line 67
                echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "queryString", array())), "html", null, true);
                echo "<br />
                    <strong>Method</strong>: ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "method", array()), "html", null, true);
                echo " <small>(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "connection", array()), "transport", array()), "html", null, true);
                echo " on ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "connection", array()), "host", array()), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "connection", array()), "port", array()), "html", null, true);
                echo ")</small>
                    <div>
                        <code>";
                // line 70
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "data", array())), "html", null, true);
                echo "</code>
                    </div>
                    <strong>Query time</strong>: ";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "engineMS", array()), "html", null, true);
                echo " ms<br />
                    <strong>Item count</strong>: ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "itemCount", array()), "html", null, true);
                echo "<br />
                    <small>
                        <strong>Time</strong>: ";
                // line 75
                echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "executionMS", array())), "html", null, true);
                echo " ms
                    </small>
                    ";
                // line 77
                if (twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "connection", array()), "transport", array()), array(0 => "Http", 1 => "Https"))) {
                    // line 78
                    echo "                        <a href=\"#elastica_curl_query_";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" onclick=\"return toggle_details(this);\" style=\"text-decoration: none;\" title=\"Get the cURL repeatable query\">
                            <img alt=\"+\" src=\"";
                    // line 79
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                    echo "\" style=\"display: inline; width: 12px; height: 12px; vertical-align: bottom;\" />
                            <img alt=\"-\" src=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                    echo "\" style=\"display: none; width: 12px; height: 12px; vertical-align: bottom;\" />
                            <small>Display cURL query</small>
                        </a>
                    ";
                }
                // line 84
                echo "                    ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "backtrace", array(), "any", true, true)) {
                    // line 85
                    echo "                        <a href=\"#elastica_query_backtrace_";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" onclick=\"return toggle_details(this);\" style=\"text-decoration: none;\" title=\"Display backtrace of query execution\">
                            <img alt=\"+\" src=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                    echo "\" style=\"display: inline; width: 12px; height: 12px; vertical-align: bottom;\" />
                            <img alt=\"-\" src=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                    echo "\" style=\"display: none; width: 12px; height: 12px; vertical-align: bottom;\" />
                            <small>Display query backtrace</small>
                        </a>
                    ";
                }
                // line 91
                echo "
                    ";
                // line 92
                if (twig_in_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "connection", array()), "transport", array()), array(0 => "Http", 1 => "Https"))) {
                    // line 93
                    echo "                        <div style=\"display: none;\" id=\"elastica_curl_query_";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                            <code>curl -X";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "method", array()), "html", null, true);
                    echo " '";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "connection", array()), "transport", array())), "html", null, true);
                    echo "://";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "connection", array()), "host", array()), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "connection", array()), "port", array()), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "path", array()), "html", null, true);
                    if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "queryString", array()))) {
                        echo "?";
                        echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "queryString", array())), "html", null, true);
                    }
                    echo "' -d '";
                    echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "data", array())), "html", null, true);
                    echo "'</code>
                        </div>
                    ";
                }
                // line 97
                echo "                    ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "backtrace", array(), "any", true, true)) {
                    // line 98
                    echo "                        <div style=\"display: none;\" id=\"elastica_query_backtrace_";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">
                            <code><pre>";
                    // line 99
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "backtrace", array()), "html", null, true);
                    echo "</pre></code>
                        </div>
                    ";
                }
                // line 102
                echo "                </li>
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "        </ul>

        <script type=\"text/javascript\">//<![CDATA[
            function toggle_details(link) {
                \"use strict\";

                var sections = link.children;

                if (sections[0].style.display != 'none') {
                    sections[0].style.display = 'none';
                    sections[1].style.display = 'inline';

                    document.getElementById(link.hash.replace(\"#\", \"\")).style.display = 'block';
                } else {
                    sections[0].style.display = 'inline';
                    sections[1].style.display = 'none';

                    document.getElementById(link.hash.replace(\"#\", \"\")).style.display = 'none';
                }

                return false;
            }
        </script>
    ";
        }
        
        $__internal_ea2df72e6cfe45b5fd903b7d4732f5b47aa9db9ddf081b6c6dc2b1131092df0e->leave($__internal_ea2df72e6cfe45b5fd903b7d4732f5b47aa9db9ddf081b6c6dc2b1131092df0e_prof);

    }

    public function getTemplateName()
    {
        return "FOSElasticaBundle:Collector:elastica.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 104,  333 => 102,  327 => 99,  322 => 98,  319 => 97,  299 => 94,  294 => 93,  292 => 92,  289 => 91,  282 => 87,  278 => 86,  273 => 85,  270 => 84,  263 => 80,  259 => 79,  254 => 78,  252 => 77,  247 => 75,  242 => 73,  238 => 72,  233 => 70,  222 => 68,  218 => 67,  214 => 66,  209 => 65,  192 => 64,  189 => 63,  183 => 59,  181 => 58,  177 => 56,  171 => 55,  162 => 51,  156 => 49,  152 => 47,  150 => 46,  146 => 45,  143 => 44,  140 => 43,  134 => 42,  126 => 39,  120 => 36,  113 => 32,  106 => 28,  102 => 26,  99 => 25,  96 => 24,  93 => 23,  86 => 19,  82 => 17,  80 => 16,  76 => 15,  71 => 14,  68 => 13,  62 => 11,  60 => 10,  56 => 9,  53 => 8,  50 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% set icon %}
        {% if profiler_markup_version == 1 %}
            <img alt=\"elastica\" src=\"data:image/png;base64,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\" />
            <span class=\"sf-toolbar-status\">{{ collector.querycount }}</span>
            {% if collector.querycount > 0 %}
                <span class=\"sf-toolbar-info-piece-additional-detail\">in {{ '%0.2f'|format(collector.time) }} ms</span>
            {% endif %}
        {% else %}
            {{ include('@FOSElastica/Collector/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
            {% if collector.querycount > 0 %}
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time) }}</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            {% endif %}
        {% endif %}
    {% endset %}
    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Queries</b>
            <span class=\"sf-toolbar-status\">{{ collector.querycount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query Time</b>
            <span>{{ '%0.2f'|format(collector.time) }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Execution Time</b>
            <span>{{ '%0.2f'|format(collector.executionTime) }} ms</span>
        </div>
    {% endset %}
    {% include 'WebProfilerBundle:Profiler:toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <span class=\"label {{ collector.querycount ? '' : 'disabled' }}\">
        {% if profiler_markup_version == 1 %}
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAQAAADPJofWAAAAAXNSR0IArs4c6QAAAAJiS0dEAP+Hj8y/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH2woEDg0xnxGaxwAAA51JREFUOMt100ts1FUUx/Hvufc/8x9mOrTTDpbysEVsqTzUqAsRgpqQGIJiIhtZSEJcqNGFJrSiZSPYkKALBUyAiLEuWKjBhdFAaEwwPNQqEAgEaA0FEWh4lE477/+9x0WLsST+Fmf1ycnJvecI/0knW4ENgZkhr5gVMtcEMmB64z1msCOCboR70tlkOuQdQREMBovF7tQt71/mXtzZQo8s89jLycFETiSqKd/v5wSY32VN18Ak3JGiR1d7an+Y3Z/Np7yVeCY/9czU4efF2iPxZ+wLXPgXP7WCTZ7MvvlnZlbqSJnGGbMeam5pk6HTIw9qs7tiH6D9vrbXW9e1Tus/sbhHZ8VOtfU1uZSExCUe1ExLtqayjcPnx4qNssjOs3TQrY9rYdVB2aFRw7HWq2kbJxCjFAsDoY+3hbkbw9ebNBsQ6EJVNlb3yQIDY8lcaAIsBisxiSXGToTNWqi/JUWXMIoabrK/95ymDNYHzmDUYAiwWOImOle+EI2AxyiKVydQGVAIoyneiBUNsAQEWIn+LA2NJqOYw3hUFQV2DFbu+FSuKTk9kRGMBoyPE7m8vza7UhMrmQNlV+NwAlDZXmXkkcHaeNamQBCEiLyeb7w631C71yxfr8/6YT8GUP6ifKlcf3xJX26kWNQyJfL+TvVs3S8rCw31hfRm2/KzL+iGQz8BnLjz8EVd5TPXF9wI/E0ZK/gr6SOLj7+Yz9RRu2bmMXm6y2/0A/rS0f6JL985+prVQAJiKEU8kLid6ezaA8Gh7iVP6BKtHad7njQr+xmSeFELLi2YovwlJ5Nbu07DNoLFoVNVrwBvh6feSMwSDcVuLvWF0y3Brd9mDlRlTsuVweGPCRzI+NOBW2rW3iYv5ZPfbrm7ji2fx1/Vkn7U/OGlivE4HA5Yh+yqUKFAYa3QfXcVf/R7Segy3wDGo4x3Tr3H3LLmqX6mZ5+jC4A5DO7jLR3SmAoYj8eTqx5uMR+UKErp78q2/e7ARNuLgE940bR1E9jpcKx+16MxJUd5+68XJp+a5DnqFxU/yYZG8XiSfJ+awkIW9WW+zLF8sh6NeqJb0cs+biIcKjW8u3T3xj+uZXZ/PbSe3km2nHWbogb3ZlSgPWz/bt71tsf432Qa64bSh5PTIFAU0pqdG3oRIiCgBBgsVTwRpYwmnWgMAlUd1aR+6m+DA4QqBlDKRDgifCqq8WO+CoFW9Ctd7dvBA+NV8DgiognuSv4bbsA/e9y1PQRZggAAAAAASUVORK5CYII=\" alt=\"\" /></span>
        {% else %}
            <span class=\"icon\">{{ include('@FOSElastica/Collector/icon.svg') }}</span>
        {% endif %}
        <strong>Elastica</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Queries</h2>

    {% if not collector.querycount %}
        <div class=\"empty\">
            <p>No queries were performed.</p>
        </div>
    {% else %}
        <ul class=\"alt\">
            {% for key, query in collector.queries %}
                <li class=\"{{ cycle(['odd', 'even'], loop.index) }}\">
                    <strong>Path</strong>: {{ query.path }}<br />
                    <strong>Query</strong>: {{ query.queryString|url_encode }}<br />
                    <strong>Method</strong>: {{ query.method }} <small>({{ query.connection.transport }} on {{ query.connection.host }}:{{ query.connection.port }})</small>
                    <div>
                        <code>{{ query.data|json_encode }}</code>
                    </div>
                    <strong>Query time</strong>: {{ query.engineMS }} ms<br />
                    <strong>Item count</strong>: {{ query.itemCount }}<br />
                    <small>
                        <strong>Time</strong>: {{ '%0.2f'|format(query.executionMS) }} ms
                    </small>
                    {% if query.connection.transport in ['Http', 'Https'] %}{# cURL support only HTTP #}
                        <a href=\"#elastica_curl_query_{{ key }}\" onclick=\"return toggle_details(this);\" style=\"text-decoration: none;\" title=\"Get the cURL repeatable query\">
                            <img alt=\"+\" src=\"{{ asset('bundles/framework/images/blue_picto_more.gif') }}\" style=\"display: inline; width: 12px; height: 12px; vertical-align: bottom;\" />
                            <img alt=\"-\" src=\"{{ asset('bundles/framework/images/blue_picto_less.gif') }}\" style=\"display: none; width: 12px; height: 12px; vertical-align: bottom;\" />
                            <small>Display cURL query</small>
                        </a>
                    {% endif %}
                    {% if query.backtrace is defined %}
                        <a href=\"#elastica_query_backtrace_{{ key }}\" onclick=\"return toggle_details(this);\" style=\"text-decoration: none;\" title=\"Display backtrace of query execution\">
                            <img alt=\"+\" src=\"{{ asset('bundles/framework/images/blue_picto_more.gif') }}\" style=\"display: inline; width: 12px; height: 12px; vertical-align: bottom;\" />
                            <img alt=\"-\" src=\"{{ asset('bundles/framework/images/blue_picto_less.gif') }}\" style=\"display: none; width: 12px; height: 12px; vertical-align: bottom;\" />
                            <small>Display query backtrace</small>
                        </a>
                    {% endif %}

                    {% if query.connection.transport in ['Http', 'Https'] %}{# cURL support only HTTP #}
                        <div style=\"display: none;\" id=\"elastica_curl_query_{{ key }}\">
                            <code>curl -X{{ query.method }} '{{ query.connection.transport|lower }}://{{ query.connection.host }}:{{ query.connection.port }}/{{ query.path }}{% if query.queryString|length %}?{{ query.queryString|url_encode }}{% endif %}' -d '{{ query.data|json_encode }}'</code>
                        </div>
                    {% endif %}
                    {% if query.backtrace is defined %}
                        <div style=\"display: none;\" id=\"elastica_query_backtrace_{{ key }}\">
                            <code><pre>{{ query.backtrace }}</pre></code>
                        </div>
                    {% endif %}
                </li>
            {% endfor %}
        </ul>

        <script type=\"text/javascript\">//<![CDATA[
            function toggle_details(link) {
                \"use strict\";

                var sections = link.children;

                if (sections[0].style.display != 'none') {
                    sections[0].style.display = 'none';
                    sections[1].style.display = 'inline';

                    document.getElementById(link.hash.replace(\"#\", \"\")).style.display = 'block';
                } else {
                    sections[0].style.display = 'inline';
                    sections[1].style.display = 'none';

                    document.getElementById(link.hash.replace(\"#\", \"\")).style.display = 'none';
                }

                return false;
            }
        </script>
    {% endif %}
{% endblock %}
", "FOSElasticaBundle:Collector:elastica.html.twig", "/var/www/html/users/vendor/friendsofsymfony/elastica-bundle/Resources/views/Collector/elastica.html.twig");
    }
}
