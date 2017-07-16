<?php

/* NetelipUserBundle:User:messages/danger.html.twig */
class __TwigTemplate_5068a5a9b52a36ad782087b55198de26c6fa51cc5c691ac2b30a8e8ab42a6326 extends Twig_Template
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
        $__internal_cdd0fb554e080d3dc7d7c67ab2024b289425af3c4ed1bc4a663cbc807f390e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd0fb554e080d3dc7d7c67ab2024b289425af3c4ed1bc4a663cbc807f390e4a->enter($__internal_cdd0fb554e080d3dc7d7c67ab2024b289425af3c4ed1bc4a663cbc807f390e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:User:messages/danger.html.twig"));

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
        
        $__internal_cdd0fb554e080d3dc7d7c67ab2024b289425af3c4ed1bc4a663cbc807f390e4a->leave($__internal_cdd0fb554e080d3dc7d7c67ab2024b289425af3c4ed1bc4a663cbc807f390e4a_prof);

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
{% endfor %}", "NetelipUserBundle:User:messages/danger.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/User/messages/danger.html.twig");
    }
}
