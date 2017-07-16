<?php

/* NetelipUserBundle:Task:messages/warning.html.twig */
class __TwigTemplate_f6809e0f638f2168d53f7a5977f1392c608a22109d7b410fa122a9f2d69151c2 extends Twig_Template
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
        $__internal_a94c1acc929cbd7791c1ff6724902810524f786bbc2e0c52b26ae04d82a3447c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a94c1acc929cbd7791c1ff6724902810524f786bbc2e0c52b26ae04d82a3447c->enter($__internal_a94c1acc929cbd7791c1ff6724902810524f786bbc2e0c52b26ae04d82a3447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:Task:messages/warning.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ( !array_key_exists("flasMessaje", $context)) {
            // line 3
            echo "    <div class=\"alert alert-warning hidden\" id=\"message-warning\" role=\"alert\">
        <div class=\"container\">
            <span id=\"user-message-warning\"></span>
        </div>
    </div>
";
        }
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessaje"]) {
            // line 11
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
        <div class=\"container\">";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessaje"], "html", null, true);
            echo "</div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessaje'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a94c1acc929cbd7791c1ff6724902810524f786bbc2e0c52b26ae04d82a3447c->leave($__internal_a94c1acc929cbd7791c1ff6724902810524f786bbc2e0c52b26ae04d82a3447c_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:Task:messages/warning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  42 => 11,  38 => 10,  35 => 9,  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% if flasMessaje is not defined %}
    <div class=\"alert alert-warning hidden\" id=\"message-warning\" role=\"alert\">
        <div class=\"container\">
            <span id=\"user-message-warning\"></span>
        </div>
    </div>
{% endif %}

{% for flashMessaje in app.session.flashbag.get('message')%}
    <div class=\"alert alert-warning\" role=\"alert\">
        <div class=\"container\">{{ flashMessaje }}</div>
    </div>
{% endfor %}", "NetelipUserBundle:Task:messages/warning.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/Task/messages/warning.html.twig");
    }
}
