<?php

/* NetelipUserBundle:User:forms/form.html.twig */
class __TwigTemplate_a38271bd208a0c590c860fbe555170d80dd0634deec8d3c785deae342c72897d extends Twig_Template
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
        $__internal_8802a668b09cdaec5506eed395767c9ed887061106b5fca3b900bf3c6f1340e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8802a668b09cdaec5506eed395767c9ed887061106b5fca3b900bf3c6f1340e8->enter($__internal_8802a668b09cdaec5506eed395767c9ed887061106b5fca3b900bf3c6f1340e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:User:forms/form.html.twig"));

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
            echo "    <input type=\"button\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete user"), "html", null, true);
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
        
        $__internal_8802a668b09cdaec5506eed395767c9ed887061106b5fca3b900bf3c6f1340e8->leave($__internal_8802a668b09cdaec5506eed395767c9ed887061106b5fca3b900bf3c6f1340e8_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:User:forms/form.html.twig";
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
    <input type=\"button\" value=\"{{ 'Delete user' | trans }}\"
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
</script>", "NetelipUserBundle:User:forms/form.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/User/forms/form.html.twig");
    }
}
