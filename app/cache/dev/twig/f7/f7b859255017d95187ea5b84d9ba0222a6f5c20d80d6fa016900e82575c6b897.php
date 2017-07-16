<?php

/* NetelipUserBundle:Task:index.html.twig */
class __TwigTemplate_125c29bfdcabb34c6ca056f562874e4d64c019b69bfcfb203546e2ddd74cc752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NetelipUserBundle:Task:index.html.twig", 1);
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
        $__internal_52ff0a4d46aed5234466f5f409f8f5f0ffb4b7398fa2e35da0f5c0cbb14428e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ff0a4d46aed5234466f5f409f8f5f0ffb4b7398fa2e35da0f5c0cbb14428e8->enter($__internal_52ff0a4d46aed5234466f5f409f8f5f0ffb4b7398fa2e35da0f5c0cbb14428e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:Task:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52ff0a4d46aed5234466f5f409f8f5f0ffb4b7398fa2e35da0f5c0cbb14428e8->leave($__internal_52ff0a4d46aed5234466f5f409f8f5f0ffb4b7398fa2e35da0f5c0cbb14428e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c82d03515cd7742e5f68ff0040be27165ec014532ed589d49ed39424d6823149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c82d03515cd7742e5f68ff0040be27165ec014532ed589d49ed39424d6823149->enter($__internal_c82d03515cd7742e5f68ff0040be27165ec014532ed589d49ed39424d6823149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 6
        echo twig_include($this->env, $context, "NetelipUserBundle:Task:messages/success.html.twig");
        echo "

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tasks", array(), "messages");
        echo "</h2>
            </div>
            <div class=\"table-responsive\">
                <p>
                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Total records:", array(), "messages");
        echo " <span id=\"total\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 15, $this->getSourceContext()); })()), "getTotalItemCount", array()), "html", null, true);
        echo " </span>
                </p>
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>";
        // line 20
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 20, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "t.title");
        echo "</th>
                        <th>";
        // line 21
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 21, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date"), "t.cratedAt");
        echo "</th>
                        <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
        echo "</th>
                        <th>";
        // line 23
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 23, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status"), "t.status");
        echo "</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 27, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 28
            echo "                        <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
            echo "\">
                            <td>
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("netelip_task_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "title", array()), "html", null, true);
            echo "</a>
                            </td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "cratedAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "user", array()), "fullname", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 35
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "status", array()) == 0)) {
                // line 36
                echo "                                    <span class=\"glyphicon glyphicon-time text-danger\" title=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Waiting", array(), "messages");
                echo "\" id=\"glyphicon-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
                echo "\"></span>
                                ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 37
$context["task"], "status", array()) == 1)) {
                // line 38
                echo "                                    <span class=\"glyphicon glyphicon-ok text-success\" title=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Finish", array(), "messages");
                echo "\"></span>
                                ";
            }
            // line 40
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </tbody>
                </table>
                ";
        // line 46
        echo "                <div class=\"navigation\">
                    ";
        // line 47
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 47, $this->getSourceContext()); })()));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c82d03515cd7742e5f68ff0040be27165ec014532ed589d49ed39424d6823149->leave($__internal_c82d03515cd7742e5f68ff0040be27165ec014532ed589d49ed39424d6823149_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:Task:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 47,  145 => 46,  141 => 43,  133 => 40,  127 => 38,  125 => 37,  118 => 36,  116 => 35,  111 => 33,  107 => 32,  100 => 30,  94 => 28,  90 => 27,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  61 => 15,  54 => 11,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    {{ parent() }}

    {{ include('NetelipUserBundle:Task:messages/success.html.twig') }}

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">{% trans %}Tasks{% endtrans %}</h2>
            </div>
            <div class=\"table-responsive\">
                <p>
                    {% trans %}Total records: {% endtrans %} <span id=\"total\"> {{ pagination.getTotalItemCount }} </span>
                </p>
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>{{ knp_pagination_sortable(pagination, 'Title'|trans, 't.title') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Date'|trans, 't.cratedAt') }}</th>
                        <th>{{ 'User'|trans }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Status'|trans, 't.status') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for task in pagination %}
                        <tr data-id=\"{{ task.id }}\">
                            <td>
                                <a href=\"{{ path('netelip_task_view', {id: task.id}) }}\">{{ task.title }}</a>
                            </td>
                            <td>{{ task.cratedAt|date('d-m-Y H:i') }}</td>
                            <td>{{ task.user.fullname }}</td>
                            <td>
                                {% if task.status == 0 %}
                                    <span class=\"glyphicon glyphicon-time text-danger\" title=\"{% trans %}Waiting{% endtrans %}\" id=\"glyphicon-{{task.id}}\"></span>
                                {% elseif task.status == 1 %}
                                    <span class=\"glyphicon glyphicon-ok text-success\" title=\"{% trans %}Finish{% endtrans %}\"></span>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
                {# display navigation #}
                <div class=\"navigation\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "NetelipUserBundle:Task:index.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/Task/index.html.twig");
    }
}
