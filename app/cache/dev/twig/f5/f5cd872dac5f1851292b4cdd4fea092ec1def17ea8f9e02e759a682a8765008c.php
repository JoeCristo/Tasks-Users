<?php

/* NetelipUserBundle:User:home.html.twig */
class __TwigTemplate_333da013e91ec9a8f910125759bb6002871a6c320361977860f5f3fb784b9604 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NetelipUserBundle:User:home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4e93661e8a0edaba3e6a4d432ef6e2126933ed777d93e44fd5140c3d7e9ee31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e93661e8a0edaba3e6a4d432ef6e2126933ed777d93e44fd5140c3d7e9ee31->enter($__internal_e4e93661e8a0edaba3e6a4d432ef6e2126933ed777d93e44fd5140c3d7e9ee31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:User:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e93661e8a0edaba3e6a4d432ef6e2126933ed777d93e44fd5140c3d7e9ee31->leave($__internal_e4e93661e8a0edaba3e6a4d432ef6e2126933ed777d93e44fd5140c3d7e9ee31_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_266a0c78c1385213024e602f35ec5cb832349002a0c37c573c8c2e181fb998eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266a0c78c1385213024e602f35ec5cb832349002a0c37c573c8c2e181fb998eb->enter($__internal_266a0c78c1385213024e602f35ec5cb832349002a0c37c573c8c2e181fb998eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <h3 class=\"text-center\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Welcome"), "html", null, true);
        echo "
            ";
        // line 8
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "user", array()), "role", array()) == "ROLE_ADMIN")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Administrator"), "html", null, true);
            echo "
            ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 10
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "user", array()), "role", array()) == "ROLE_USER")) {
            // line 11
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
            echo "
            ";
        }
        // line 13
        echo "        </h3>
        <h2 class=\"text-center\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
        echo "</h2>
    </div>
";
        
        $__internal_266a0c78c1385213024e602f35ec5cb832349002a0c37c573c8c2e181fb998eb->leave($__internal_266a0c78c1385213024e602f35ec5cb832349002a0c37c573c8c2e181fb998eb_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:User:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  66 => 13,  60 => 11,  58 => 10,  53 => 9,  51 => 8,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"container\">
        <h3 class=\"text-center\">
            {{ 'Welcome'|trans }}
            {% if app.user.role == 'ROLE_ADMIN' %}
                {{ 'Administrator'|trans }}
            {% elseif app.user.role == 'ROLE_USER' %}
                {{ 'User'|trans }}
            {% endif %}
        </h3>
        <h2 class=\"text-center\">{{ app.user.username }}</h2>
    </div>
{% endblock %}", "NetelipUserBundle:User:home.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/User/home.html.twig");
    }
}
