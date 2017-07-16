<?php

/* NetelipUserBundle:User:messages/success.html.twig */
class __TwigTemplate_5c9c7841958ad2053c9bf6125d859b00f80eaf712c23850674c1281ab55e1806 extends Twig_Template
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
        $__internal_28974f3c3ff1ab6ba31e2535e3aea092a82e678045dddf49a03c4ac3574ad231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28974f3c3ff1ab6ba31e2535e3aea092a82e678045dddf49a03c4ac3574ad231->enter($__internal_28974f3c3ff1ab6ba31e2535e3aea092a82e678045dddf49a03c4ac3574ad231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:User:messages/success.html.twig"));

        // line 1
        if ( !array_key_exists("flasMessaje", $context)) {
            // line 2
            echo "    <div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\">
        <div class=\"container\">
            <span id=\"user-message\"></span>
        </div>
    </div>
";
        }
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessaje"]) {
            // line 10
            echo "    <div class=\"alert alert-success\" role=\"alert\">
        <div class=\"container\">";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessaje"], "html", null, true);
            echo "</div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_28974f3c3ff1ab6ba31e2535e3aea092a82e678045dddf49a03c4ac3574ad231->leave($__internal_28974f3c3ff1ab6ba31e2535e3aea092a82e678045dddf49a03c4ac3574ad231_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:User:messages/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  39 => 10,  35 => 9,  32 => 8,  24 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if flasMessaje is not defined %}
    <div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\">
        <div class=\"container\">
            <span id=\"user-message\"></span>
        </div>
    </div>
{% endif %}

{% for flashMessaje in app.session.flashbag.get('message')%}
    <div class=\"alert alert-success\" role=\"alert\">
        <div class=\"container\">{{ flashMessaje }}</div>
    </div>
{% endfor %}", "NetelipUserBundle:User:messages/success.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/User/messages/success.html.twig");
    }
}
