<?php

/* NetelipUserBundle:Security:login.html.twig */
class __TwigTemplate_634025dfab37bc23c0066b9a927c67b776b2e8270a329b0f71663dc1603a872b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NetelipUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_376d50d5c393e7b953eac65231b1abb35c1c103521661660de392f0b703dd2ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376d50d5c393e7b953eac65231b1abb35c1c103521661660de392f0b703dd2ce->enter($__internal_376d50d5c393e7b953eac65231b1abb35c1c103521661660de392f0b703dd2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_376d50d5c393e7b953eac65231b1abb35c1c103521661660de392f0b703dd2ce->leave($__internal_376d50d5c393e7b953eac65231b1abb35c1c103521661660de392f0b703dd2ce_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50c01cda0b75a58e18a01a1b8a23c92462e8fbfa3b2459950ae9d800e883a21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c01cda0b75a58e18a01a1b8a23c92462e8fbfa3b2459950ae9d800e883a21d->enter($__internal_50c01cda0b75a58e18a01a1b8a23c92462e8fbfa3b2459950ae9d800e883a21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/signin.css"), "html", null, true);
        echo "\">
";
        
        $__internal_50c01cda0b75a58e18a01a1b8a23c92462e8fbfa3b2459950ae9d800e883a21d->leave($__internal_50c01cda0b75a58e18a01a1b8a23c92462e8fbfa3b2459950ae9d800e883a21d_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8f28e618ef3330ca32bb2aec4e1fe1bff736fcca883659253a655f400baf2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8f28e618ef3330ca32bb2aec4e1fe1bff736fcca883659253a655f400baf2b2->enter($__internal_c8f28e618ef3330ca32bb2aec4e1fe1bff736fcca883659253a655f400baf2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">
        <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("netelip_user_login_check");
        echo "\" method=\"post\" class=\"form-signin\">
            <h3 class=\"form-signin-heading text-center\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please sign in"), "html", null, true);
        echo "</h3>

            ";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 15, $this->getSourceContext()); })())) {
            // line 16
            echo "                <div class=\"text-danger\">
                    <p>
                        <strong>
                            ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 19, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 19, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "
                        </strong>
                    </p>
                </div>
            ";
        }
        // line 24
        echo "
            <label for=\"username\" class=\"sr-only\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo ":</label>
            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 26, $this->getSourceContext()); })()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "\" required autofocus />

            <label for=\"password\" class=\"sr-only\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password"), "html", null, true);
        echo ":</label>
            <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password"), "html", null, true);
        echo "\" required />

            <input type=\"hidden\" name=\"_target_path\" value=\"netelip_user_homepage\" />

            <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in"), "html", null, true);
        echo "</button>
        </form>
    </div> <!-- /container -->
";
        
        $__internal_c8f28e618ef3330ca32bb2aec4e1fe1bff736fcca883659253a655f400baf2b2->leave($__internal_c8f28e618ef3330ca32bb2aec4e1fe1bff736fcca883659253a655f400baf2b2_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  110 => 29,  106 => 28,  99 => 26,  95 => 25,  92 => 24,  84 => 19,  79 => 16,  77 => 15,  72 => 13,  68 => 12,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/signin.css') }}\">
{% endblock %}

{% block body %}
    {{ parent() }}

    <div class=\"container\">
        <form action=\"{{ path('netelip_user_login_check') }}\" method=\"post\" class=\"form-signin\">
            <h3 class=\"form-signin-heading text-center\">{{ 'Please sign in'|trans }}</h3>

            {% if error %}
                <div class=\"text-danger\">
                    <p>
                        <strong>
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </strong>
                    </p>
                </div>
            {% endif %}

            <label for=\"username\" class=\"sr-only\">{{ 'Username'|trans }}:</label>
            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"{{ 'Username'|trans }}\" required autofocus />

            <label for=\"password\" class=\"sr-only\">{{ 'Password'|trans }}:</label>
            <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"{{ 'Password'|trans }}\" required />

            <input type=\"hidden\" name=\"_target_path\" value=\"netelip_user_homepage\" />

            <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">{{ 'Sign in'|trans }}</button>
        </form>
    </div> <!-- /container -->
{% endblock %}", "NetelipUserBundle:Security:login.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/Security/login.html.twig");
    }
}
