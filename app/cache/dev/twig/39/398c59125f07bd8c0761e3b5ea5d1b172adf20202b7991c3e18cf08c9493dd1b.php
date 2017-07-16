<?php

/* layout.html.twig */
class __TwigTemplate_9214039dbdb4f8cb3420ec968da0ac6cfeb88401e992019143972f52a9433c81 extends Twig_Template
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
        $__internal_f10825503ee6c83e3d241287fdc614d32cfc128168d307b54f3b6ebd5f0b4043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10825503ee6c83e3d241287fdc614d32cfc128168d307b54f3b6ebd5f0b4043->enter($__internal_f10825503ee6c83e3d241287fdc614d32cfc128168d307b54f3b6ebd5f0b4043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_f10825503ee6c83e3d241287fdc614d32cfc128168d307b54f3b6ebd5f0b4043->leave($__internal_f10825503ee6c83e3d241287fdc614d32cfc128168d307b54f3b6ebd5f0b4043_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d08317c32fb98d3c945e8951f2def71cb93a35702a78b478fa7f322591372d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d08317c32fb98d3c945e8951f2def71cb93a35702a78b478fa7f322591372d4->enter($__internal_3d08317c32fb98d3c945e8951f2def71cb93a35702a78b478fa7f322591372d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Users ";
        
        $__internal_3d08317c32fb98d3c945e8951f2def71cb93a35702a78b478fa7f322591372d4->leave($__internal_3d08317c32fb98d3c945e8951f2def71cb93a35702a78b478fa7f322591372d4_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f8b8ffc29aa8526bfbc38684cdd97430bad1985216bc7f2147675ffc92ffdaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f8b8ffc29aa8526bfbc38684cdd97430bad1985216bc7f2147675ffc92ffdaa->enter($__internal_8f8b8ffc29aa8526bfbc38684cdd97430bad1985216bc7f2147675ffc92ffdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\"> ";
        
        $__internal_8f8b8ffc29aa8526bfbc38684cdd97430bad1985216bc7f2147675ffc92ffdaa->leave($__internal_8f8b8ffc29aa8526bfbc38684cdd97430bad1985216bc7f2147675ffc92ffdaa_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ab4c760e20d683176c4bfb9ac6e33631768ca24e6704bfe126ee7e82f382ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab4c760e20d683176c4bfb9ac6e33631768ca24e6704bfe126ee7e82f382ad2->enter($__internal_1ab4c760e20d683176c4bfb9ac6e33631768ca24e6704bfe126ee7e82f382ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 17
            echo "        ";
            echo twig_include($this->env, $context, "menu.html.twig");
            echo "
    ";
        }
        
        $__internal_1ab4c760e20d683176c4bfb9ac6e33631768ca24e6704bfe126ee7e82f382ad2->leave($__internal_1ab4c760e20d683176c4bfb9ac6e33631768ca24e6704bfe126ee7e82f382ad2_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb2a94317030688747d82490e60b2815c9ccd443980f7e83467f570e5bb9987d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2a94317030688747d82490e60b2815c9ccd443980f7e83467f570e5bb9987d->enter($__internal_bb2a94317030688747d82490e60b2815c9ccd443980f7e83467f570e5bb9987d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_bb2a94317030688747d82490e60b2815c9ccd443980f7e83467f570e5bb9987d->leave($__internal_bb2a94317030688747d82490e60b2815c9ccd443980f7e83467f570e5bb9987d_prof);

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

</html>", "layout.html.twig", "/var/www/html/Tareas/app/Resources/views/layout.html.twig");
    }
}
