<?php

/* @WebProfiler/Collector/events.html.twig */
class __TwigTemplate_5e59f17efa838a62e13c7cbbc40580c6040a3efcb487eb76525e378de12013be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/events.html.twig", 1);
        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdc87a0d2e3838bcd3cc1f65a7c6552c32b8a7652cd70c691d543825f6727e81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc87a0d2e3838bcd3cc1f65a7c6552c32b8a7652cd70c691d543825f6727e81->enter($__internal_cdc87a0d2e3838bcd3cc1f65a7c6552c32b8a7652cd70c691d543825f6727e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/events.html.twig"));

        // line 3
        $context["__internal_0b750a28313a5be2334b4327d02d851cfac076c4b34ece3e2841b9efbf18dba2"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdc87a0d2e3838bcd3cc1f65a7c6552c32b8a7652cd70c691d543825f6727e81->leave($__internal_cdc87a0d2e3838bcd3cc1f65a7c6552c32b8a7652cd70c691d543825f6727e81_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4ae75383a01ee62c1403cd4da5a8a59510f9b276e818a433d5382926659455e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ae75383a01ee62c1403cd4da5a8a59510f9b276e818a433d5382926659455e->enter($__internal_f4ae75383a01ee62c1403cd4da5a8a59510f9b276e818a433d5382926659455e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"26\" height=\"34\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 34\" enable-background=\"new 0 0 26 34\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15.5 14.8c0.5-0.6 0.9-1.4 0.9-2.3c0-1.9-1.5-3.4-3.4-3.4s-3.4 1.5-3.4 3.4c0 0.9 0.3 1.7 0.9 2.3L3.2 34 h2.5l0.4-1.1l6.8-4.3l6.8 4.3l0.4 1.1h2.5L15.5 14.8z M16 22.6l-2.1-1l1.4-0.7L16 22.6z M13 16c0.1 0 0.3 0 0.4 0l1.6 4.2l-2 1 l-2-1l1.6-4.2C12.7 15.9 12.9 16 13 16z M12.1 21.6l-2.1 1l0.6-1.7L12.1 21.6z M7 30.7L8.8 26l2.9 1.8L7 30.7z M9.3 24.7l0.4-1 L13 22l3.4 1.7l0.4 1L13 27L9.3 24.7z M14.3 27.8l2.9-1.8l1.8 4.7L14.3 27.8z\"/><g><path fill=\"#3F3F3F\" d=\"M6.2 6.2c0.7-0.7 1.7-1.1 2.7-1.1v1.3c-0.7 0-1.3 0.2-1.8 0.7S6.4 8.2 6.4 8.9H5.1 C5.1 7.9 5.5 6.9 6.2 6.2z\"/><path fill=\"#3F3F3F\" d=\"M2.5 8.9c0-1.7 0.7-3.3 1.9-4.5s2.8-1.9 4.5-1.9l0 1.3c-1.4 0-2.6 0.5-3.6 1.5S3.8 7.5 3.8 8.9 C3.8 8.9 2.5 8.9 2.5 8.9z\"/><path fill=\"#3F3F3F\" d=\"M5.6 0.7C6.6 0.2 7.7 0 8.9 0l0 0v1.3c-2 0-4 0.8-5.4 2.2S1.3 6.9 1.3 8.9H0c0-1.2 0.2-2.3 0.7-3.3 c0.4-1.1 1.1-2.1 2-2.9S4.4 1.1 5.6 0.7L5.6 0.7z\"/></g><g><path fill=\"#3F3F3F\" d=\"M20.9 8.9h-1.3c0-0.7-0.2-1.3-0.7-1.8c-0.5-0.5-1.1-0.7-1.8-0.7V5.1c1 0 2 0.4 2.7 1.1 C20.5 6.9 20.9 7.9 20.9 8.9z\"/><path fill=\"#3F3F3F\" d=\"M22.2 8.9c0-1.4-0.5-2.6-1.5-3.6c-1-1-2.2-1.5-3.6-1.5V2.5c1.7 0 3.3 0.7 4.5 1.9s1.9 2.8 1.9 4.5 C23.5 8.9 22.2 8.9 22.2 8.9z\"/><path fill=\"#3F3F3F\" d=\"M20.5 0.7c1.1 0.4 2.1 1.1 2.9 2s1.5 1.8 2 2.9C25.8 6.6 26 7.7 26 8.9h-1.3c0-2-0.8-4-2.2-5.4 s-3.4-2.2-5.4-2.2V0l0 0C18.3 0 19.4 0.2 20.5 0.7L20.5 0.7z\"/></g></g></svg></span>
    <strong>Events</strong>
</span>
";
        
        $__internal_f4ae75383a01ee62c1403cd4da5a8a59510f9b276e818a433d5382926659455e->leave($__internal_f4ae75383a01ee62c1403cd4da5a8a59510f9b276e818a433d5382926659455e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6cdfa40ae74fefe4956bc7e42de49015b0ac11f4eefc545b5ad411b68d19a3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdfa40ae74fefe4956bc7e42de49015b0ac11f4eefc545b5ad411b68d19a3ef->enter($__internal_6cdfa40ae74fefe4956bc7e42de49015b0ac11f4eefc545b5ad411b68d19a3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "calledlisteners", array()))) {
            // line 14
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        } else {
            // line 16
            echo "        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    ";
        }
        
        $__internal_6cdfa40ae74fefe4956bc7e42de49015b0ac11f4eefc545b5ad411b68d19a3ef->leave($__internal_6cdfa40ae74fefe4956bc7e42de49015b0ac11f4eefc545b5ad411b68d19a3ef_prof);

    }

    // line 23
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_85ec042ac7916af5bab83aa4139a038b480973f9520c7e95aba77721ae679b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ec042ac7916af5bab83aa4139a038b480973f9520c7e95aba77721ae679b90->enter($__internal_85ec042ac7916af5bab83aa4139a038b480973f9520c7e95aba77721ae679b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 24
        echo "    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 31, $this->getSourceContext()); })()), "calledlisteners", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
            // line 32
            echo "            <tr>
                <td><code>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["listener"], "event", array()), "html", null, true);
            echo "</code></td>
                <td><code>";
            // line 34
            echo $context["__internal_0b750a28313a5be2334b4327d02d851cfac076c4b34ece3e2841b9efbf18dba2"]->macro_display_listener($context["listener"]);
            echo "</code></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>

    <h2>Not Called Listeners</h2>

    ";
        // line 41
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 41, $this->getSourceContext()); })()), "notcalledlisteners", array())) {
            // line 42
            echo "        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            ";
            // line 47
            $context["listeners"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 47, $this->getSourceContext()); })()), "notcalledlisteners", array());
            // line 48
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new Twig_Error_Runtime('Variable "listeners" does not exist.', 48, $this->getSourceContext()); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                // line 49
                echo "                <tr>
                    <td><code>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new Twig_Error_Runtime('Variable "listeners" does not exist.', 50, $this->getSourceContext()); })()), $context["listener"], array(), "array"), "event", array()), "html", null, true);
                echo "</code></td>
                    <td><code>";
                // line 51
                echo $context["__internal_0b750a28313a5be2334b4327d02d851cfac076c4b34ece3e2841b9efbf18dba2"]->macro_display_listener(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new Twig_Error_Runtime('Variable "listeners" does not exist.', 51, $this->getSourceContext()); })()), $context["listener"], array(), "array"));
                echo "</code></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </table>
    ";
        } else {
            // line 56
            echo "        <p>
            <strong>No uncalled listeners</strong>.
        </p>
        <p>

            All listeners were called for this request or an error occurred
            when trying to collect uncalled listeners (in which case check the
            logs to get more information).

        </p>
    ";
        }
        
        $__internal_85ec042ac7916af5bab83aa4139a038b480973f9520c7e95aba77721ae679b90->leave($__internal_85ec042ac7916af5bab83aa4139a038b480973f9520c7e95aba77721ae679b90_prof);

    }

    // line 69
    public function macro_display_listener($__listener__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "listener" => $__listener__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2bc0fcf3bbaf9459a20b146bca39633066e6df2ae6f094976345661b5f55704e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2bc0fcf3bbaf9459a20b146bca39633066e6df2ae6f094976345661b5f55704e->enter($__internal_2bc0fcf3bbaf9459a20b146bca39633066e6df2ae6f094976345661b5f55704e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_listener"));

            // line 70
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listener"]) || array_key_exists("listener", $context) ? $context["listener"] : (function () { throw new Twig_Error_Runtime('Variable "listener" does not exist.', 70, $this->getSourceContext()); })()), "type", array()) == "Closure")) {
                // line 71
                echo "        Closure
    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 72
(isset($context["listener"]) || array_key_exists("listener", $context) ? $context["listener"] : (function () { throw new Twig_Error_Runtime('Variable "listener" does not exist.', 72, $this->getSourceContext()); })()), "type", array()) == "Function")) {
                // line 73
                echo "        ";
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listener"]) || array_key_exists("listener", $context) ? $context["listener"] : (function () { throw new Twig_Error_Runtime('Variable "listener" does not exist.', 73, $this->getSourceContext()); })()), "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listener"]) || array_key_exists("listener", $context) ? $context["listener"] : (function () { throw new Twig_Error_Runtime('Variable "listener" does not exist.', 73, $this->getSourceContext()); })()), "line", array()));
                // line 74
                echo "        ";
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 74, $this->getSourceContext()); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 74, $this->getSourceContext()); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listener"]) || array_key_exists("listener", $context) ? $context["listener"] : (function () { throw new Twig_Error_Runtime('Variable "listener" does not exist.', 74, $this->getSourceContext()); })()), "function", array()), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listener"]) || array_key_exists("listener", $context) ? $context["listener"] : (function () { throw new Twig_Error_Runtime('Variable "listener" does not exist.', 74, $this->getSourceContext()); })()), "function", array()), "html", null, true);
                }
                // line 75
                echo "    ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listener"]) || array_key_exists("listener", $context) ? $context["listener"] : (function () { throw new Twig_Error_Runtime('Variable "listener" does not exist.', 75, $this->getSourceContext()); })()), "type", array()) == "Method")) {
                // line 76
                echo "        ";
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listener"]) || array_key_exists("listener", $context) ? $context["listener"] : (function () { throw new Twig_Error_Runtime('Variable "listener" does not exist.', 76, $this->getSourceContext()); })()), "file", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listener"]) || array_key_exists("listener", $context) ? $context["listener"] : (function () { throw new Twig_Error_Runtime('Variable "listener" does not exist.', 76, $this->getSourceContext()); })()), "line", array()));
                // line 77
                echo "        ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listener"]) || array_key_exists("listener", $context) ? $context["listener"] : (function () { throw new Twig_Error_Runtime('Variable "listener" does not exist.', 77, $this->getSourceContext()); })()), "class", array()));
                echo "::";
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 77, $this->getSourceContext()); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new Twig_Error_Runtime('Variable "link" does not exist.', 77, $this->getSourceContext()); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listener"]) || array_key_exists("listener", $context) ? $context["listener"] : (function () { throw new Twig_Error_Runtime('Variable "listener" does not exist.', 77, $this->getSourceContext()); })()), "method", array()), "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["listener"]) || array_key_exists("listener", $context) ? $context["listener"] : (function () { throw new Twig_Error_Runtime('Variable "listener" does not exist.', 77, $this->getSourceContext()); })()), "method", array()), "html", null, true);
                }
                // line 78
                echo "    ";
            }
            
            $__internal_2bc0fcf3bbaf9459a20b146bca39633066e6df2ae6f094976345661b5f55704e->leave($__internal_2bc0fcf3bbaf9459a20b146bca39633066e6df2ae6f094976345661b5f55704e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 78,  221 => 77,  218 => 76,  215 => 75,  204 => 74,  201 => 73,  199 => 72,  196 => 71,  193 => 70,  178 => 69,  160 => 56,  156 => 54,  147 => 51,  143 => 50,  140 => 49,  135 => 48,  133 => 47,  126 => 42,  124 => 41,  118 => 37,  109 => 34,  105 => 33,  102 => 32,  98 => 31,  89 => 24,  83 => 23,  71 => 16,  65 => 14,  62 => 13,  56 => 12,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% from _self import display_listener %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><svg width=\"26\" height=\"34\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 34\" enable-background=\"new 0 0 26 34\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15.5 14.8c0.5-0.6 0.9-1.4 0.9-2.3c0-1.9-1.5-3.4-3.4-3.4s-3.4 1.5-3.4 3.4c0 0.9 0.3 1.7 0.9 2.3L3.2 34 h2.5l0.4-1.1l6.8-4.3l6.8 4.3l0.4 1.1h2.5L15.5 14.8z M16 22.6l-2.1-1l1.4-0.7L16 22.6z M13 16c0.1 0 0.3 0 0.4 0l1.6 4.2l-2 1 l-2-1l1.6-4.2C12.7 15.9 12.9 16 13 16z M12.1 21.6l-2.1 1l0.6-1.7L12.1 21.6z M7 30.7L8.8 26l2.9 1.8L7 30.7z M9.3 24.7l0.4-1 L13 22l3.4 1.7l0.4 1L13 27L9.3 24.7z M14.3 27.8l2.9-1.8l1.8 4.7L14.3 27.8z\"/><g><path fill=\"#3F3F3F\" d=\"M6.2 6.2c0.7-0.7 1.7-1.1 2.7-1.1v1.3c-0.7 0-1.3 0.2-1.8 0.7S6.4 8.2 6.4 8.9H5.1 C5.1 7.9 5.5 6.9 6.2 6.2z\"/><path fill=\"#3F3F3F\" d=\"M2.5 8.9c0-1.7 0.7-3.3 1.9-4.5s2.8-1.9 4.5-1.9l0 1.3c-1.4 0-2.6 0.5-3.6 1.5S3.8 7.5 3.8 8.9 C3.8 8.9 2.5 8.9 2.5 8.9z\"/><path fill=\"#3F3F3F\" d=\"M5.6 0.7C6.6 0.2 7.7 0 8.9 0l0 0v1.3c-2 0-4 0.8-5.4 2.2S1.3 6.9 1.3 8.9H0c0-1.2 0.2-2.3 0.7-3.3 c0.4-1.1 1.1-2.1 2-2.9S4.4 1.1 5.6 0.7L5.6 0.7z\"/></g><g><path fill=\"#3F3F3F\" d=\"M20.9 8.9h-1.3c0-0.7-0.2-1.3-0.7-1.8c-0.5-0.5-1.1-0.7-1.8-0.7V5.1c1 0 2 0.4 2.7 1.1 C20.5 6.9 20.9 7.9 20.9 8.9z\"/><path fill=\"#3F3F3F\" d=\"M22.2 8.9c0-1.4-0.5-2.6-1.5-3.6c-1-1-2.2-1.5-3.6-1.5V2.5c1.7 0 3.3 0.7 4.5 1.9s1.9 2.8 1.9 4.5 C23.5 8.9 22.2 8.9 22.2 8.9z\"/><path fill=\"#3F3F3F\" d=\"M20.5 0.7c1.1 0.4 2.1 1.1 2.9 2s1.5 1.8 2 2.9C25.8 6.6 26 7.7 26 8.9h-1.3c0-2-0.8-4-2.2-5.4 s-3.4-2.2-5.4-2.2V0l0 0C18.3 0 19.4 0.2 20.5 0.7L20.5 0.7z\"/></g></g></svg></span>
    <strong>Events</strong>
</span>
{% endblock %}

{% block panel %}
    {% if collector.calledlisteners|length %}
        {{ block('panelContent') }}
    {% else %}
        <h2>Events</h2>
        <p>
            <em>No events have been recorded. Are you sure that debugging is enabled in the kernel?</em>
        </p>
    {% endif %}
{% endblock %}

{% block panelContent %}
    <h2>Called Listeners</h2>

    <table>
        <tr>
            <th>Event name</th>
            <th>Listener</th>
        </tr>
        {% for listener in collector.calledlisteners %}
            <tr>
                <td><code>{{ listener.event }}</code></td>
                <td><code>{{ display_listener(listener) }}</code></td>
            </tr>
        {% endfor %}
    </table>

    <h2>Not Called Listeners</h2>

    {% if collector.notcalledlisteners %}
        <table>
            <tr>
                <th>Event name</th>
                <th>Listener</th>
            </tr>
            {% set listeners = collector.notcalledlisteners %}
            {% for listener in listeners|keys|sort %}
                <tr>
                    <td><code>{{ listeners[listener].event }}</code></td>
                    <td><code>{{ display_listener(listeners[listener]) }}</code></td>
                </tr>
            {% endfor %}
        </table>
    {% else %}
        <p>
            <strong>No uncalled listeners</strong>.
        </p>
        <p>

            All listeners were called for this request or an error occurred
            when trying to collect uncalled listeners (in which case check the
            logs to get more information).

        </p>
    {% endif %}
{% endblock %}

{% macro display_listener(listener) %}
    {% if listener.type == \"Closure\" %}
        Closure
    {% elseif listener.type == \"Function\" %}
        {% set link = listener.file|file_link(listener.line) %}
        {% if link %}<a href=\"{{ link }}\">{{ listener.function }}</a>{% else %}{{ listener.function }}{% endif %}
    {% elseif listener.type == \"Method\" %}
        {% set link = listener.file|file_link(listener.line) %}
        {{ listener.class|abbr_class }}::{% if link %}<a href=\"{{ link }}\">{{ listener.method }}</a>{% else %}{{ listener.method }}{% endif %}
    {% endif %}
{% endmacro %}
", "@WebProfiler/Collector/events.html.twig", "/var/www/html/Tareas/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/events.html.twig");
    }
}
