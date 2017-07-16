<?php

/* NetelipUserBundle:Task:forms/form.html.twig */
class __TwigTemplate_339b69d32dc99e6b9e6e4ba4a50857fabb1f89a86e1b889e3b7d7f1b3787cff6 extends Twig_Template
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
        $__internal_1bde6c6a109bf3465b471feaaa6d448a58f3e77b30f626666a8b33e2a8bd4bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bde6c6a109bf3465b471feaaa6d448a58f3e77b30f626666a8b33e2a8bd4bff->enter($__internal_1bde6c6a109bf3465b471feaaa6d448a58f3e77b30f626666a8b33e2a8bd4bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:Task:forms/form.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->getSourceContext()); })()), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 1, $this->getSourceContext()); })()), "form")) : ("form")))));
        echo "

    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'widget');
        echo "

    ";
        // line 5
        if (( !array_key_exists("with_submit", $context) || ((isset($context["with_submit"]) || array_key_exists("with_submit", $context) ? $context["with_submit"] : (function () { throw new Twig_Error_Runtime('Variable "with_submit" does not exist.', 5, $this->getSourceContext()); })()) == true))) {
            // line 6
            echo "        <input type=\"button\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete task"), "html", null, true);
            echo "\"
               class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete()\">
    ";
        }
        // line 9
        echo "
";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_end');
        echo "

<script>
    var message = '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new Twig_Error_Runtime('Variable "message" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "';
    function confirmDelete(){
        bootbox.confirm(message, function(result){
            if (result){
                document.form.submit();
            }
        });
    }
</script>";
        
        $__internal_1bde6c6a109bf3465b471feaaa6d448a58f3e77b30f626666a8b33e2a8bd4bff->leave($__internal_1bde6c6a109bf3465b471feaaa6d448a58f3e77b30f626666a8b33e2a8bd4bff_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:Task:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  44 => 10,  41 => 9,  34 => 6,  32 => 5,  27 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr': {'id': id | default('form')}}) }}

    {{ form_widget(form) }}

    {% if with_submit is not defined or with_submit == true %}
        <input type=\"button\" value=\"{{ 'Delete task' | trans }}\"
               class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete()\">
    {% endif %}

{{ form_end(form) }}

<script>
    var message = '{{ message }}';
    function confirmDelete(){
        bootbox.confirm(message, function(result){
            if (result){
                document.form.submit();
            }
        });
    }
</script>", "NetelipUserBundle:Task:forms/form.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/Task/forms/form.html.twig");
    }
}
