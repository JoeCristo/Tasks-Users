<?php

/* NetelipUserBundle:User:forms/form.html.twig */
class __TwigTemplate_b81554e389275e90ca1276cd39b381ba30b5fb8613ec22af11e6b33319fbee94 extends Twig_Template
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
        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter(($context["id"] ?? null), "form")) : ("form")))));
        echo "

    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "

    ";
        // line 5
        if (( !array_key_exists("with_submit", $context) || (($context["with_submit"] ?? null) == true))) {
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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

<script>
    var message = '";
        // line 13
        echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
        echo "';
    function confirmDelete(){
        bootbox.confirm(message, function(result){
            if (result){
                document.form.submit();
            }
        });
    }
</script>";
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
        return array (  47 => 13,  41 => 10,  38 => 9,  31 => 6,  29 => 5,  24 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NetelipUserBundle:User:forms/form.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/User/forms/form.html.twig");
    }
}
