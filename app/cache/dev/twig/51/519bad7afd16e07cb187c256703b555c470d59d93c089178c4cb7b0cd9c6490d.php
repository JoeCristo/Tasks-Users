<?php

/* layout.html.twig */
class __TwigTemplate_f6c82c5d8298d58d393bf5809dd93a926c23927f114bff3d5efe46f05f60cdee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f256dacdb0c6399ac21bbaace3e87e05e078670db489e04418e2e1ca23ace25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f256dacdb0c6399ac21bbaace3e87e05e078670db489e04418e2e1ca23ace25->enter($__internal_9f256dacdb0c6399ac21bbaace3e87e05e078670db489e04418e2e1ca23ace25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>

<body>
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "</body>

</html>";
        
        $__internal_9f256dacdb0c6399ac21bbaace3e87e05e078670db489e04418e2e1ca23ace25->leave($__internal_9f256dacdb0c6399ac21bbaace3e87e05e078670db489e04418e2e1ca23ace25_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_45ebb40fc5e77cd1b3cea3574f913721e38d2a001b14756e95f1f8dc9402f19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ebb40fc5e77cd1b3cea3574f913721e38d2a001b14756e95f1f8dc9402f19a->enter($__internal_45ebb40fc5e77cd1b3cea3574f913721e38d2a001b14756e95f1f8dc9402f19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Users ";
        
        $__internal_45ebb40fc5e77cd1b3cea3574f913721e38d2a001b14756e95f1f8dc9402f19a->leave($__internal_45ebb40fc5e77cd1b3cea3574f913721e38d2a001b14756e95f1f8dc9402f19a_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_73480dd798db2c9abac33bbeb8a51e304ee04f694edebc1e2a6c9a57f22c5fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73480dd798db2c9abac33bbeb8a51e304ee04f694edebc1e2a6c9a57f22c5fe1->enter($__internal_73480dd798db2c9abac33bbeb8a51e304ee04f694edebc1e2a6c9a57f22c5fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"> ";
        
        $__internal_73480dd798db2c9abac33bbeb8a51e304ee04f694edebc1e2a6c9a57f22c5fe1->leave($__internal_73480dd798db2c9abac33bbeb8a51e304ee04f694edebc1e2a6c9a57f22c5fe1_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_26252d53674d3c492ace88e16e2a89d0b272fe19bd92343e7f5cb3929381b361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26252d53674d3c492ace88e16e2a89d0b272fe19bd92343e7f5cb3929381b361->enter($__internal_26252d53674d3c492ace88e16e2a89d0b272fe19bd92343e7f5cb3929381b361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 17
            echo "        ";
            echo twig_include($this->env, $context, "menu.html.twig");
            echo "
    ";
        }
        
        $__internal_26252d53674d3c492ace88e16e2a89d0b272fe19bd92343e7f5cb3929381b361->leave($__internal_26252d53674d3c492ace88e16e2a89d0b272fe19bd92343e7f5cb3929381b361_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43b3526e12297059faa1d744fadaa1fd7917f3b7ceb97945e87eb1732b1dd3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b3526e12297059faa1d744fadaa1fd7917f3b7ceb97945e87eb1732b1dd3e1->enter($__internal_43b3526e12297059faa1d744fadaa1fd7917f3b7ceb97945e87eb1732b1dd3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_43b3526e12297059faa1d744fadaa1fd7917f3b7ceb97945e87eb1732b1dd3e1->leave($__internal_43b3526e12297059faa1d744fadaa1fd7917f3b7ceb97945e87eb1732b1dd3e1_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 23,  123 => 22,  118 => 21,  112 => 20,  101 => 17,  98 => 16,  92 => 15,  84 => 10,  79 => 9,  73 => 8,  61 => 6,  52 => 25,  50 => 20,  48 => 15,  40 => 11,  38 => 8,  33 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %} Users {% endblock %}</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset ('public/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{ asset ('public/css/style.css')}}\"> {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>

<body>
{% block body %}
    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        {{ include (\"menu.html.twig\") }}
    {% endif %}
{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('public/js/jquery-3.2.0.min.js') }}\"></script>
    <script src=\"{{ asset('public/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('public/js/bootbox.min.js') }}\"></script>
{% endblock %}
</body>

</html>", "layout.html.twig", "/var/www/html/users/app/Resources/views/layout.html.twig");
    }
}
