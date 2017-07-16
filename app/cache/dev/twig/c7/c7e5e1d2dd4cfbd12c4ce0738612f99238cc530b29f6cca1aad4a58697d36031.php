<?php

/* NetelipUserBundle:User:view.html.twig */
class __TwigTemplate_5db57819827385637849db3f5945087f13897f85a6df19b83097b77e2fe71b15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NetelipUserBundle:User:view.html.twig", 1);
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
        $__internal_057cf8987f46dbb5be4b5c2f22c6ca2bcfab7218d4aa42ac3f85f20d19c924d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057cf8987f46dbb5be4b5c2f22c6ca2bcfab7218d4aa42ac3f85f20d19c924d7->enter($__internal_057cf8987f46dbb5be4b5c2f22c6ca2bcfab7218d4aa42ac3f85f20d19c924d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:User:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_057cf8987f46dbb5be4b5c2f22c6ca2bcfab7218d4aa42ac3f85f20d19c924d7->leave($__internal_057cf8987f46dbb5be4b5c2f22c6ca2bcfab7218d4aa42ac3f85f20d19c924d7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a742a7ad944d45744b33cc48be36ffd76fd6778dee2ba2a0dcd7576068bf8302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a742a7ad944d45744b33cc48be36ffd76fd6778dee2ba2a0dcd7576068bf8302->enter($__internal_a742a7ad944d45744b33cc48be36ffd76fd6778dee2ba2a0dcd7576068bf8302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-md-9\">
            <h2>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "lastName", array()), "html", null, true);
        echo "</h2>
            <br>
            <dl>
                <dt>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->getSourceContext()); })()), "firstName", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->getSourceContext()); })()), "lastName", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 33, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 40
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 40, $this->getSourceContext()); })()), "role", array()) == "ROLE_ADMIN")) {
            // line 41
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Administrator", array(), "messages");
            // line 42
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 42, $this->getSourceContext()); })()), "role", array()) == "ROLE_USER")) {
            // line 43
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("User", array(), "messages");
            // line 44
            echo "                    ";
        }
        // line 45
        echo "                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 51
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 51, $this->getSourceContext()); })()), "isActive", array()) == 1)) {
            // line 52
            echo "                        <span class=\"text-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Enabled", array(), "messages");
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 53
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 53, $this->getSourceContext()); })()), "isActive", array()) == 0)) {
            // line 54
            echo "                        <span class=\"text-warning\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Disabled", array(), "messages");
            echo "</span>
                    ";
        }
        // line 56
        echo "                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 62, $this->getSourceContext()); })()), "createAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 69, $this->getSourceContext()); })()), "updateAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        <div class=\"col-md-3\">
            <h3>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo ":</h3>
            <p>
                <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("netelip_user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 78, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">
                    <span class=\"glyphicon glyphicon-edit\"></span>
                    ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit user"), "html", null, true);
        echo "
                </a>
            </p>
            <p>
                ";
        // line 84
        echo twig_include($this->env, $context, "NetelipUserBundle:User:forms/form.html.twig", array("form" => (isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 84, $this->getSourceContext()); })()), "message" => "Are you sure?"));
        echo "
            </p>
        </div>
    </div>
";
        
        $__internal_a742a7ad944d45744b33cc48be36ffd76fd6778dee2ba2a0dcd7576068bf8302->leave($__internal_a742a7ad944d45744b33cc48be36ffd76fd6778dee2ba2a0dcd7576068bf8302_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 84,  196 => 80,  191 => 78,  186 => 76,  176 => 69,  171 => 67,  163 => 62,  158 => 60,  152 => 56,  146 => 54,  144 => 53,  139 => 52,  137 => 51,  132 => 49,  126 => 45,  123 => 44,  120 => 43,  117 => 42,  114 => 41,  112 => 40,  107 => 38,  99 => 33,  94 => 31,  86 => 26,  81 => 24,  73 => 19,  68 => 17,  60 => 12,  55 => 10,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"container well\">
        <div class=\"col-md-9\">
            <h2>{{ user.firstName }} {{ user.lastName }}</h2>
            <br>
            <dl>
                <dt>{{'Username'|trans}}</dt>
                <dd>
                    {{ user.username }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'First name'|trans}}</dt>
                <dd>
                    {{ user.firstName }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Last name'|trans}}</dt>
                <dd>
                    {{ user.lastName }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Email'|trans}}</dt>
                <dd>
                    {{ user.email }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Role'|trans}}</dt>
                <dd>
                    {% if user.role == 'ROLE_ADMIN' %}
                        {% trans %}Administrator{% endtrans %}
                    {% elseif user.role == 'ROLE_USER' %}
                        {% trans %}User{% endtrans %}
                    {% endif %}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Active'|trans}}</dt>
                <dd>
                    {% if user.isActive == 1 %}
                        <span class=\"text-success\">{% trans %}Enabled{% endtrans %}</span>
                    {% elseif user.isActive == 0 %}
                        <span class=\"text-warning\">{% trans %}Disabled{% endtrans %}</span>
                    {% endif %}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Created'|trans}}</dt>
                <dd>
                    {{ user.createAt|date('d-m-Y H:i') }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Updated'|trans}}</dt>
                <dd>
                    {{ user.updateAt|date('d-m-Y H:i') }}
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        <div class=\"col-md-3\">
            <h3>{{ 'Actions'|trans }}:</h3>
            <p>
                <a href=\"{{ path('netelip_user_edit', { id: user.id }) }}\" class=\"btn btn-primary btn-lg btn-block\">
                    <span class=\"glyphicon glyphicon-edit\"></span>
                    {{ 'Edit user'|trans }}
                </a>
            </p>
            <p>
                {{ include('NetelipUserBundle:User:forms/form.html.twig', { form: delete_form, message: 'Are you sure?'}) }}
            </p>
        </div>
    </div>
{% endblock %}", "NetelipUserBundle:User:view.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/User/view.html.twig");
    }
}
