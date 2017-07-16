<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fe644ca013a0aa7758d0985e71e20552b4d94a2ad6272025ca7ad66b20980670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e838f9e63bafdf503607a94f82da77ab4515ac71671a6a05af34222c3790d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e838f9e63bafdf503607a94f82da77ab4515ac71671a6a05af34222c3790d43->enter($__internal_2e838f9e63bafdf503607a94f82da77ab4515ac71671a6a05af34222c3790d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e838f9e63bafdf503607a94f82da77ab4515ac71671a6a05af34222c3790d43->leave($__internal_2e838f9e63bafdf503607a94f82da77ab4515ac71671a6a05af34222c3790d43_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e766affa24efb9479f8703fc61063e8f6a8f0cac243fc143d350bd110d6e00f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e766affa24efb9479f8703fc61063e8f6a8f0cac243fc143d350bd110d6e00f0->enter($__internal_e766affa24efb9479f8703fc61063e8f6a8f0cac243fc143d350bd110d6e00f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e766affa24efb9479f8703fc61063e8f6a8f0cac243fc143d350bd110d6e00f0->leave($__internal_e766affa24efb9479f8703fc61063e8f6a8f0cac243fc143d350bd110d6e00f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9013232401997a3127dcddcd6643bc5284f2bcda7082b7def3ce435a6762d39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9013232401997a3127dcddcd6643bc5284f2bcda7082b7def3ce435a6762d39b->enter($__internal_9013232401997a3127dcddcd6643bc5284f2bcda7082b7def3ce435a6762d39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_9013232401997a3127dcddcd6643bc5284f2bcda7082b7def3ce435a6762d39b->leave($__internal_9013232401997a3127dcddcd6643bc5284f2bcda7082b7def3ce435a6762d39b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e218c9b6195d05c941e66a37e148e495b9e024065360556f1622c9b4bc268013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e218c9b6195d05c941e66a37e148e495b9e024065360556f1622c9b4bc268013->enter($__internal_e218c9b6195d05c941e66a37e148e495b9e024065360556f1622c9b4bc268013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e218c9b6195d05c941e66a37e148e495b9e024065360556f1622c9b4bc268013->leave($__internal_e218c9b6195d05c941e66a37e148e495b9e024065360556f1622c9b4bc268013_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/users/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
