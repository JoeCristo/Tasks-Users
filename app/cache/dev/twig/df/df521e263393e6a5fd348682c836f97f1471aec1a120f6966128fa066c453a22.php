<?php

/* NetelipUserBundle:Task:add.html.twig */
class __TwigTemplate_9659c1a6d1402b60d48f8b2eec503b507233ef9c272c784507cd29f2730544c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NetelipUserBundle:Task:add.html.twig", 1);
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
        $__internal_472ef5a7f92fb97d747715821d9a6ae1872c11a35cdbebacdf785909246d49c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_472ef5a7f92fb97d747715821d9a6ae1872c11a35cdbebacdf785909246d49c1->enter($__internal_472ef5a7f92fb97d747715821d9a6ae1872c11a35cdbebacdf785909246d49c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:Task:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_472ef5a7f92fb97d747715821d9a6ae1872c11a35cdbebacdf785909246d49c1->leave($__internal_472ef5a7f92fb97d747715821d9a6ae1872c11a35cdbebacdf785909246d49c1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c9b8743e07861f71aef6e2cc8306c2b07343ac454a71fc2ba727a6e77c4fde8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9b8743e07861f71aef6e2cc8306c2b07343ac454a71fc2ba727a6e77c4fde8->enter($__internal_8c9b8743e07861f71aef6e2cc8306c2b07343ac454a71fc2ba727a6e77c4fde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New task", array(), "messages");
        echo "</h2>
                </div>
                ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'form_start', array("attr" => array("role" => "form")));
        echo "

                <fieldset>
                    <div class=\"form-group\">
                        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "title", array()), 'label');
        echo "
                        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Task title")));
        echo "
                        <span class=\"text-danger\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "title", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "user", array()), 'label');
        echo "
                        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "user", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "user", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "description", array()), 'label');
        echo "
                        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Task description")));
        echo "
                        <span class=\"text-danger\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "description", array()), 'errors');
        echo "</span>
                    </div>
                </fieldset>

                <p>
                    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "save", array()), 'widget', array("label" => "Create task", "attr" => array("class" => "btn btn-success")));
        echo "
                </p>

                ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_8c9b8743e07861f71aef6e2cc8306c2b07343ac454a71fc2ba727a6e77c4fde8->leave($__internal_8c9b8743e07861f71aef6e2cc8306c2b07343ac454a71fc2ba727a6e77c4fde8_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:Task:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  107 => 34,  99 => 29,  95 => 28,  91 => 27,  84 => 23,  80 => 22,  76 => 21,  69 => 17,  65 => 16,  61 => 15,  54 => 11,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>{% trans %}New task{% endtrans %}</h2>
                </div>
                {{ form_start(form, {'attr': {'role' : 'form' }}) }}

                <fieldset>
                    <div class=\"form-group\">
                        {{ form_label(form.title) }}
                        {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder' : 'Task title' }}) }}
                        <span class=\"text-danger\">{{ form_errors(form.title) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.user) }}
                        {{ form_widget(form.user, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.user) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.description) }}
                        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder' : 'Task description'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.description) }}</span>
                    </div>
                </fieldset>

                <p>
                    {{ form_widget(form.save, {'label' : 'Create task', 'attr': {'class': 'btn btn-success'}}) }}
                </p>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "NetelipUserBundle:Task:add.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/Task/add.html.twig");
    }
}
