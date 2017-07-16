<?php

/* NetelipUserBundle:User:messages/danger.html.twig */
class __TwigTemplate_d9b035782219a6839adc0927de1820765a235fcac7fbda1431bf6afa779403bc extends Twig_Template
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
        $__internal_09d980d5c19e4ca6825b60bad4267f0dd631ae743d76c6d64eeea470cd4dd829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d980d5c19e4ca6825b60bad4267f0dd631ae743d76c6d64eeea470cd4dd829->enter($__internal_09d980d5c19e4ca6825b60bad4267f0dd631ae743d76c6d64eeea470cd4dd829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:User:messages/danger.html.twig"));

        // line 1
        if ( !array_key_exists("flasMessaje", $context)) {
            // line 2
            echo "    <div class=\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\">
        <div class=\"container\">
            <span id=\"user-message-danger\"></span>
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
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
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
        
        $__internal_09d980d5c19e4ca6825b60bad4267f0dd631ae743d76c6d64eeea470cd4dd829->leave($__internal_09d980d5c19e4ca6825b60bad4267f0dd631ae743d76c6d64eeea470cd4dd829_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:User:messages/danger.html.twig";
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
    <div class=\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\">
        <div class=\"container\">
            <span id=\"user-message-danger\"></span>
        </div>
    </div>
{% endif %}

{% for flashMessaje in app.session.flashbag.get('message')%}
    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"container\">{{ flashMessaje }}</div>
    </div>
{% endfor %}", "NetelipUserBundle:User:messages/danger.html.twig", "/var/www/html/Tareas/src/Netelip/UserBundle/Resources/views/User/messages/danger.html.twig");
    }
}
