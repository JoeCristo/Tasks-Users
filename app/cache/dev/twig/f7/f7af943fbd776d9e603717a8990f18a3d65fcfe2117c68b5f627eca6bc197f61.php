<?php

/* NetelipUserBundle:User:add.html.twig */
class __TwigTemplate_f289179753dfb4e5593425a247d8e34cddc68152af419a6df9fb804600b0589f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NetelipUserBundle:User:add.html.twig", 1);
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
        $__internal_b9e8382d6d608aa15d03d580b9aa6bc37f73262b6bd861771edb702f4fbb471b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e8382d6d608aa15d03d580b9aa6bc37f73262b6bd861771edb702f4fbb471b->enter($__internal_b9e8382d6d608aa15d03d580b9aa6bc37f73262b6bd861771edb702f4fbb471b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:User:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e8382d6d608aa15d03d580b9aa6bc37f73262b6bd861771edb702f4fbb471b->leave($__internal_b9e8382d6d608aa15d03d580b9aa6bc37f73262b6bd861771edb702f4fbb471b_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_f6727121f7ee472ebfe931185e728523d705af0eb40faece16d12f5df7c12225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6727121f7ee472ebfe931185e728523d705af0eb40faece16d12f5df7c12225->enter($__internal_f6727121f7ee472ebfe931185e728523d705af0eb40faece16d12f5df7c12225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"main container\">
    <div class=\"row well\">
        <div class=\"col-md-6\">
            <div class=\"page-header\">
                <h2>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New User", array(), "messages");
        echo "</h2>
            </div>
            ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "

            <div class=\"form-group\">
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), "username", array()), 'label');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your username")));
        echo "
                <span class=\"text-danger\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "username", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group\">
                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "firstName", array()), 'label');
        echo "
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your first name")));
        echo "
                <span class=\"text-danger\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), "firstName", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group\">
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "lastName", array()), 'label');
        echo "
                ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your last name")));
        echo "
                <span class=\"text-danger\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), "lastName", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group\">
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "email", array()), 'label');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"text-danger\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group\">
                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "password", array()), 'label');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your password")));
        echo "
                <span class=\"text-danger\">";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "password", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"form-group\">
                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "role", array()), 'label');
        echo "
                ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"text-danger\">";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), "role", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"checkbox\">
                <label>
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), "isActive", array()), 'widget');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Active", array(), "messages");
        // line 46
        echo "\t\t\t\t\t\t<span class=\"text-danger\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->getSourceContext()); })()), "isActive", array()), 'errors');
        echo "</span>
\t\t\t\t    </label>
            </div>
            <p>
                ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), "save", array()), 'widget', array("label" => "Create user", "attr" => array("class" => "btn btn-success")));
        echo "
            </p>

            ";
        // line 53
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_f6727121f7ee472ebfe931185e728523d705af0eb40faece16d12f5df7c12225->leave($__internal_f6727121f7ee472ebfe931185e728523d705af0eb40faece16d12f5df7c12225_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 53,  157 => 50,  149 => 46,  146 => 45,  138 => 40,  134 => 39,  130 => 38,  123 => 34,  119 => 33,  115 => 32,  109 => 29,  105 => 28,  101 => 27,  95 => 24,  91 => 23,  87 => 22,  81 => 19,  77 => 18,  73 => 17,  67 => 14,  63 => 13,  59 => 12,  53 => 9,  48 => 7,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %} {% block body %} {{ parent() }}

<div class=\"main container\">
    <div class=\"row well\">
        <div class=\"col-md-6\">
            <div class=\"page-header\">
                <h2>{% trans %}New User{% endtrans %}</h2>
            </div>
            {{ form_start(form, { 'attr' : { 'novalidate' : 'novalidate', 'role' : 'form' } }) }}

            <div class=\"form-group\">
                {{ form_label(form.username) }}
                {{ form_widget(form.username, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Your username'} }) }}
                <span class=\"text-danger\">{{ form_errors(form.username) }}</span>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.firstName) }}
                {{ form_widget(form.firstName, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Your first name'} }) }}
                <span class=\"text-danger\">{{ form_errors(form.firstName) }}</span>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.lastName) }}
                {{ form_widget(form.lastName, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Your last name'} }) }}
                <span class=\"text-danger\">{{ form_errors(form.lastName) }}</span>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.email) }}
                {{ form_widget(form.email, { 'attr' : {'class' : 'form-control'} }) }}
                <span class=\"text-danger\">{{ form_errors(form.email) }}</span>
            </div>
            <div class=\"form-group\">
                {{ form_label(form.password) }}
                {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder' : 'Your password'}}) }}
                <span class=\"text-danger\">{{ form_errors(form.password) }}</span>
            </div>

            <div class=\"form-group\">
                {{ form_label(form.role) }}
                {{ form_widget(form.role, {'attr': {'class': 'form-control'}}) }}
                <span class=\"text-danger\">{{ form_errors(form.role) }}</span>
            </div>

            <div class=\"checkbox\">
                <label>
\t\t\t\t\t\t{{ form_widget(form.isActive) }}{% trans %}Active{% endtrans %}
\t\t\t\t\t\t<span class=\"text-danger\">{{ form_errors(form.isActive) }}</span>
\t\t\t\t    </label>
            </div>
            <p>
                {{ form_widget(form.save, { 'label' : 'Create user', 'attr' : { 'class' : 'btn btn-success' } }) }}
            </p>

            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}", "NetelipUserBundle:User:add.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/User/add.html.twig");
    }
}
