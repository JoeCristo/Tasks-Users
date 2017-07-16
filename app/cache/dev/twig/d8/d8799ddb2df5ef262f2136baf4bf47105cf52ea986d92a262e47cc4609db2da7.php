<?php

/* NetelipUserBundle:Task:custom.html.twig */
class __TwigTemplate_300919e83dfa04b5c853b00d33ed146b1f5884527bc6ea5a7aa3d96ea71e38ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NetelipUserBundle:Task:custom.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ede84061530d87cd931d09e9e18445941139045d6561ff8441c28b0a317da0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ede84061530d87cd931d09e9e18445941139045d6561ff8441c28b0a317da0c->enter($__internal_8ede84061530d87cd931d09e9e18445941139045d6561ff8441c28b0a317da0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:Task:custom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ede84061530d87cd931d09e9e18445941139045d6561ff8441c28b0a317da0c->leave($__internal_8ede84061530d87cd931d09e9e18445941139045d6561ff8441c28b0a317da0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_60f61025519329bff30fac14a27f8c6720aa47fd77ed374c016381c19e462c6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f61025519329bff30fac14a27f8c6720aa47fd77ed374c016381c19e462c6a->enter($__internal_60f61025519329bff30fac14a27f8c6720aa47fd77ed374c016381c19e462c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 6
        echo twig_include($this->env, $context, "NetelipUserBundle:Task:messages/success.html.twig");
        echo "
    ";
        // line 7
        echo twig_include($this->env, $context, "NetelipUserBundle:Task:messages/warning.html.twig");
        echo "

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
        echo "</h2>
            </div>
            ";
        // line 14
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 14, $this->getSourceContext()); })()))) {
            // line 15
            echo "                <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No tasks"), "html", null, true);
            echo "</h3>
            ";
        }
        // line 17
        echo "            ";
        if (twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 17, $this->getSourceContext()); })()))) {
            // line 18
            echo "                <div class=\"table-responsive\">
                    <p>
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total records:"), "html", null, true);
            echo " <span id=\"total\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 20, $this->getSourceContext()); })()), "getTotalItemCount", array()), "html", null, true);
            echo " </span>
                    </p>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>";
            // line 25
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 25, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "t.title");
            echo "</th>
                            <th>";
            // line 26
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 26, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date"), "t.cratedAt");
            echo "</th>
                            <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
            echo "</th>
                            <th>";
            // line 28
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 28, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status"), "t.status");
            echo "</th>
                            <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
            echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 33, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 34
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
                echo "\">
                                <td>
                                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("netelip_task_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "title", array()), "html", null, true);
                echo "</a>
                                </td>
                                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "cratedAt", array()), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "user", array()), "lastName", array()), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 41
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "status", array()) == 0)) {
                    // line 42
                    echo "                                        <span class=\"glyphicon glyphicon-time text-danger\" title=\"Waiting\" id=\"glyphicon-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
                    echo "\"></span>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 43
$context["task"], "status", array()) == 1)) {
                    // line 44
                    echo "                                        <span class=\"glyphicon glyphicon-ok text-success\" title=\"Finish\"></span>
                                    ";
                }
                // line 46
                echo "                                </td>
                                <td class=\"actions\">
                                    <a href=\"#\" class=\"btn btn-sm btn-success btn-process\" id=\"button-";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
                echo "\">
                                        ";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Finalize"), "html", null, true);
                echo "
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                        </tbody>
                    </table>
                    ";
            // line 57
            echo "                    <div class=\"navigation\">
                        ";
            // line 58
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 58, $this->getSourceContext()); })()));
            echo "
                    </div>
                </div>
            ";
        }
        // line 62
        echo "        </div>
    </div>

    ";
        // line 65
        echo twig_include($this->env, $context, "NetelipUserBundle:User:forms/form.html.twig", array("form" => (isset($context["update_form"]) || array_key_exists("update_form", $context) ? $context["update_form"] : (function () { throw new Twig_Error_Runtime('Variable "update_form" does not exist.', 65, $this->getSourceContext()); })()), "id" => "form-update", "with_submit" => false, "message" => null));
        echo "


";
        
        $__internal_60f61025519329bff30fac14a27f8c6720aa47fd77ed374c016381c19e462c6a->leave($__internal_60f61025519329bff30fac14a27f8c6720aa47fd77ed374c016381c19e462c6a_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b5318ea49e5878086286e3d45cb2f670c4aff0559bca67d2b5226286c0b4c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5318ea49e5878086286e3d45cb2f670c4aff0559bca67d2b5226286c0b4c5e->enter($__internal_8b5318ea49e5878086286e3d45cb2f670c4aff0559bca67d2b5226286c0b4c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/netelipuser/js/task-process.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8b5318ea49e5878086286e3d45cb2f670c4aff0559bca67d2b5226286c0b4c5e->leave($__internal_8b5318ea49e5878086286e3d45cb2f670c4aff0559bca67d2b5226286c0b4c5e_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:Task:custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 72,  208 => 71,  202 => 70,  191 => 65,  186 => 62,  179 => 58,  176 => 57,  172 => 54,  161 => 49,  157 => 48,  153 => 46,  149 => 44,  147 => 43,  142 => 42,  140 => 41,  133 => 39,  129 => 38,  122 => 36,  116 => 34,  112 => 33,  105 => 29,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  79 => 20,  75 => 18,  72 => 17,  66 => 15,  64 => 14,  59 => 12,  51 => 7,  47 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    {{ parent() }}

    {{ include('NetelipUserBundle:Task:messages/success.html.twig') }}
    {{ include('NetelipUserBundle:Task:messages/warning.html.twig') }}

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">{{ 'Tasks'|trans }}</h2>
            </div>
            {% if not pagination|length %}
                <h3>{{ 'No tasks'|trans }}</h3>
            {% endif %}
            {% if pagination|length %}
                <div class=\"table-responsive\">
                    <p>
                        {{ 'Total records:'|trans }} <span id=\"total\"> {{ pagination.getTotalItemCount }} </span>
                    </p>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>{{ knp_pagination_sortable(pagination, 'Title'|trans, 't.title') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Date'|trans, 't.cratedAt') }}</th>
                            <th>{{ 'User'|trans }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Status'|trans, 't.status') }}</th>
                            <th>{{ 'Actions'|trans }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for task in pagination %}
                            <tr data-id=\"{{ task.id }}\">
                                <td>
                                    <a href=\"{{ path('netelip_task_view', { id: task.id }) }}\">{{ task.title }}</a>
                                </td>
                                <td>{{ task.cratedAt|date('d-m-Y H:i') }}</td>
                                <td>{{ task.user.firstName }} {{ task.user.lastName }}</td>
                                <td>
                                    {% if task.status == 0 %}
                                        <span class=\"glyphicon glyphicon-time text-danger\" title=\"Waiting\" id=\"glyphicon-{{task.id}}\"></span>
                                    {% elseif task.status == 1 %}
                                        <span class=\"glyphicon glyphicon-ok text-success\" title=\"Finish\"></span>
                                    {% endif %}
                                </td>
                                <td class=\"actions\">
                                    <a href=\"#\" class=\"btn btn-sm btn-success btn-process\" id=\"button-{{ task.id }}\">
                                        {{ 'Finalize'|trans }}
                                    </a>
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
            {% endif %}
        </div>
    </div>

    {{ include('NetelipUserBundle:User:forms/form.html.twig', {form: update_form, id: 'form-update', with_submit: false, message: null}) }}


{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/netelipuser/js/task-process.js') }}\"></script>
{% endblock %}", "NetelipUserBundle:Task:custom.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/Task/custom.html.twig");
    }
}
