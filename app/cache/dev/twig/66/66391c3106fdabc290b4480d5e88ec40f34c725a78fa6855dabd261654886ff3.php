<?php

/* NetelipUserBundle:Task:view.html.twig */
class __TwigTemplate_0b1477a6cb19f7e935ff91a73d4d14217ae21cd0b7cf2c56d27ac6f553f1dab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NetelipUserBundle:Task:view.html.twig", 1);
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
        $__internal_bc160618440d45797cc485201e5e4671bd0dc7998e2b4576f0bcb4f9b342df4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc160618440d45797cc485201e5e4671bd0dc7998e2b4576f0bcb4f9b342df4a->enter($__internal_bc160618440d45797cc485201e5e4671bd0dc7998e2b4576f0bcb4f9b342df4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:Task:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc160618440d45797cc485201e5e4671bd0dc7998e2b4576f0bcb4f9b342df4a->leave($__internal_bc160618440d45797cc485201e5e4671bd0dc7998e2b4576f0bcb4f9b342df4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c63c32f5ab0c18f9810acdb66297d84e41ed0bf280ea43cba29b4efc4601c0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63c32f5ab0c18f9810acdb66297d84e41ed0bf280ea43cba29b4efc4601c0d4->enter($__internal_c63c32f5ab0c18f9810acdb66297d84e41ed0bf280ea43cba29b4efc4601c0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-md-9\">
            <h2>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new Twig_Error_Runtime('Variable "task" does not exist.', 7, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</h2>
            <br>
            <dl>
                <dt>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new Twig_Error_Runtime('Variable "task" does not exist.', 12, $this->getSourceContext()); })()), "description", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 19, $this->getSourceContext()); })()), "fullName", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 26
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new Twig_Error_Runtime('Variable "task" does not exist.', 26, $this->getSourceContext()); })()), "status", array()) == 0)) {
            // line 27
            echo "                        <span class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Waiting"), "html", null, true);
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 28
(isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new Twig_Error_Runtime('Variable "task" does not exist.', 28, $this->getSourceContext()); })()), "status", array()) == 1)) {
            // line 29
            echo "                        <span class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Finish"), "html", null, true);
            echo "</span>
                    ";
        }
        // line 31
        echo "                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new Twig_Error_Runtime('Variable "task" does not exist.', 37, $this->getSourceContext()); })()), "cratedAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new Twig_Error_Runtime('Variable "task" does not exist.', 44, $this->getSourceContext()); })()), "updateAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "            <div class=\"col-md-3\">
                <h4>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
            echo ":</h4>
                <p>
                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("netelip_task_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["task"]) || array_key_exists("task", $context) ? $context["task"] : (function () { throw new Twig_Error_Runtime('Variable "task" does not exist.', 54, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">
                        <span class=\"glyphicon glyphicon-edit\"></span>
                        ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit task"), "html", null, true);
            echo "
                    </a>
                </p>
                <p>
                    ";
            // line 60
            echo twig_include($this->env, $context, "NetelipUserBundle:Task:forms/form.html.twig", array("form" => (isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 60, $this->getSourceContext()); })()), "message" => "Are you sure?"));
            echo "
                </p>
            </div>
        ";
        }
        // line 64
        echo "    </div>
";
        
        $__internal_c63c32f5ab0c18f9810acdb66297d84e41ed0bf280ea43cba29b4efc4601c0d4->leave($__internal_c63c32f5ab0c18f9810acdb66297d84e41ed0bf280ea43cba29b4efc4601c0d4_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:Task:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 64,  154 => 60,  147 => 56,  142 => 54,  137 => 52,  134 => 51,  132 => 50,  123 => 44,  118 => 42,  110 => 37,  105 => 35,  99 => 31,  93 => 29,  91 => 28,  86 => 27,  84 => 26,  79 => 24,  71 => 19,  66 => 17,  58 => 12,  53 => 10,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"container well\">
        <div class=\"col-md-9\">
            <h2>{{ task.title }}</h2>
            <br>
            <dl>
                <dt>{{ 'Description'|trans }}</dt>
                <dd>
                    {{ task.description }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{ 'User'|trans }}</dt>
                <dd>
                    {{ user.fullName }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{ 'Status'|trans }}</dt>
                <dd>
                    {% if task.status == 0 %}
                        <span class=\"text-danger\">{{ 'Waiting'|trans }}</span>
                    {% elseif task.status == 1 %}
                        <span class=\"text-success\">{{ 'Finish'|trans }}</span>
                    {% endif %}
                    &nbsp;
                </dd>
                <br>

                <dt>{{ 'Created'|trans }}</dt>
                <dd>
                    {{ task.cratedAt|date('d-m-Y H:i') }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{ 'Updated'|trans }}</dt>
                <dd>
                    {{ task.updateAt|date('d-m-Y H:i') }}
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"col-md-3\">
                <h4>{{ 'Actions'|trans }}:</h4>
                <p>
                    <a href=\"{{ path('netelip_task_edit', {id: task.id}) }}\" class=\"btn btn-primary btn-lg btn-block\">
                        <span class=\"glyphicon glyphicon-edit\"></span>
                        {{ 'Edit task'|trans }}
                    </a>
                </p>
                <p>
                    {{ include('NetelipUserBundle:Task:forms/form.html.twig', { form: delete_form, message: 'Are you sure?'}) }}
                </p>
            </div>
        {% endif %}
    </div>
{% endblock %}", "NetelipUserBundle:Task:view.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/Task/view.html.twig");
    }
}
