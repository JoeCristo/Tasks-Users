<?php

/* NetelipUserBundle:User:index.html.twig */
class __TwigTemplate_5a691adac33a871f5e4452496189e94c73798db62c4a62b1a518793069a88f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NetelipUserBundle:User:index.html.twig", 1);
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
        $__internal_5f3fbf8abb122c7e5695259f0559a355627b3970ba2603fa6bc295f95daea03f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3fbf8abb122c7e5695259f0559a355627b3970ba2603fa6bc295f95daea03f->enter($__internal_5f3fbf8abb122c7e5695259f0559a355627b3970ba2603fa6bc295f95daea03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NetelipUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f3fbf8abb122c7e5695259f0559a355627b3970ba2603fa6bc295f95daea03f->leave($__internal_5f3fbf8abb122c7e5695259f0559a355627b3970ba2603fa6bc295f95daea03f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e7a15a8ca88c3bcd42058b5dc942f9ecabc3e2da3693f1fa85beba358420798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7a15a8ca88c3bcd42058b5dc942f9ecabc3e2da3693f1fa85beba358420798->enter($__internal_3e7a15a8ca88c3bcd42058b5dc942f9ecabc3e2da3693f1fa85beba358420798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "


    ";
        // line 6
        echo twig_include($this->env, $context, "NetelipUserBundle:User:messages/success.html.twig");
        echo "
    ";
        // line 7
        echo twig_include($this->env, $context, "NetelipUserBundle:User:messages/danger.html.twig");
        echo "

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Users", array(), "messages");
        echo "</h2>
            </div>
            <div class=\"table-responsive\">
                <p class=\"text-muted\">";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Total records:", array(), "messages");
        // line 16
        echo "                    <span id=\"total\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 16, $this->getSourceContext()); })()), "getTotalItemCount", array()), "html", null, true);
        echo "</span>
                </p>

                <form method=\"get\" action=\"\" class=\"form-inline\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"query\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search user"), "html", null, true);
        echo "\" required/>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "\" class=\"btn btn-default\"/>
                </form>
                <br>
                ";
        // line 26
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 26, $this->getSourceContext()); })()))) {
            // line 27
            echo "                    <h4 >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No search results"), "html", null, true);
            echo "</h4>
                ";
        }
        // line 29
        echo "                ";
        if (twig_length_filter($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 29, $this->getSourceContext()); })()))) {
            // line 30
            echo "                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>";
            // line 33
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 33, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "u.username");
            echo "</th>      <!-- PODEMOS TRADUCIR CON LA ETIQUETA O CON ESTE FILTRO -->
                            <th>";
            // line 34
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 34, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "u.firstName");
            echo "</th>
                            <th>";
            // line 35
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 35, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "u.lastName");
            echo "</th>
                            <th>";
            // line 36
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 36, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "u.email");
            echo "</th>
                            <th>";
            // line 37
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 37, $this->getSourceContext()); })()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role"), "u.role");
            echo "</th>
                            <th>";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Created", array(), "messages");
            echo "</th>
                            <th>";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Updated", array(), "messages");
            echo "</th>
                            <th>";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Actions", array(), "messages");
            echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 44, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 45
                echo "                        <tr data-id=\" ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()), "html", null, true);
                echo " \">
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "username", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "firstName", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "lastName", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "email", array()), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 51
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "role", array()) == "ROLE_ADMIN")) {
                    // line 52
                    echo "                                    <strong>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Administrator", array(), "messages");
                    echo "</strong> ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "role", array()) == "ROLE_USER")) {
                    // line 53
                    echo "                                    <strong>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("User", array(), "messages");
                    echo "</strong> ";
                }
                // line 54
                echo "                            </td>
                            <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "createAt", array()), "d-m-Y H:i:s"), "html", null, true);
                echo "</td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "updateAt", array()), "d-m-Y H:i:s"), "html", null, true);
                echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("netelip_user_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("View", array(), "messages");
                echo "</a>
                                <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("netelip_user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit", array(), "messages");
                echo "</a>
                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">";
                // line 60
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Delete", array(), "messages");
                echo "</a>
                            </td>
                        </tr>
                        </tbody>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                    </table>
                ";
        }
        // line 67
        echo "                ";
        // line 68
        echo "                <div class=\"navigation\">
                    ";
        // line 69
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 69, $this->getSourceContext()); })()));
        echo "
                </div>

            </div>
        </div>
    </div>

    ";
        // line 76
        echo twig_include($this->env, $context, "NetelipUserBundle:User:forms/form.html.twig", array("form" =>         // line 77
(isset($context["delete_form_ajax"]) || array_key_exists("delete_form_ajax", $context) ? $context["delete_form_ajax"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form_ajax" does not exist.', 77, $this->getSourceContext()); })()), "message" => "Are you sure?", "id" => "form-delete", "with_submit" => false));
        echo "


";
        
        $__internal_3e7a15a8ca88c3bcd42058b5dc942f9ecabc3e2da3693f1fa85beba358420798->leave($__internal_3e7a15a8ca88c3bcd42058b5dc942f9ecabc3e2da3693f1fa85beba358420798_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a41ab9fab4eee7fed46cb824718bba319fbc79f60f1c8f41bffe780fc30b6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a41ab9fab4eee7fed46cb824718bba319fbc79f60f1c8f41bffe780fc30b6b9->enter($__internal_7a41ab9fab4eee7fed46cb824718bba319fbc79f60f1c8f41bffe780fc30b6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/netelipuser/js/deleteUser.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7a41ab9fab4eee7fed46cb824718bba319fbc79f60f1c8f41bffe780fc30b6b9->leave($__internal_7a41ab9fab4eee7fed46cb824718bba319fbc79f60f1c8f41bffe780fc30b6b9_prof);

    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 83,  251 => 82,  245 => 81,  234 => 77,  233 => 76,  223 => 69,  220 => 68,  218 => 67,  214 => 65,  203 => 60,  197 => 59,  191 => 58,  186 => 56,  182 => 55,  179 => 54,  174 => 53,  169 => 52,  167 => 51,  162 => 49,  158 => 48,  154 => 47,  150 => 46,  145 => 45,  141 => 44,  134 => 40,  130 => 39,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  110 => 34,  106 => 33,  101 => 30,  98 => 29,  92 => 27,  90 => 26,  84 => 23,  77 => 21,  68 => 16,  66 => 15,  60 => 12,  52 => 7,  48 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block body %}
    {{ parent() }}


    {{ include('NetelipUserBundle:User:messages/success.html.twig') }}
    {{ include('NetelipUserBundle:User:messages/danger.html.twig') }}

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">{% trans %}Users{% endtrans %}</h2>
            </div>
            <div class=\"table-responsive\">
                <p class=\"text-muted\">{% trans %} Total records: {% endtrans %}
                    <span id=\"total\">{{ pagination.getTotalItemCount }}</span>
                </p>

                <form method=\"get\" action=\"\" class=\"form-inline\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"query\" value=\"{{ app.request.get('query') }}\" class=\"form-control\" placeholder=\"{{ 'Search user' | trans }}\" required/>
                    </div>
                    <input type=\"submit\" value=\"{{ 'Search' | trans }}\" class=\"btn btn-default\"/>
                </form>
                <br>
                {% if not pagination | length %}
                    <h4 >{{ 'No search results' | trans }}</h4>
                {% endif %}
                {% if pagination | length %}
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>{{ knp_pagination_sortable(pagination, 'Username' | trans, 'u.username') }}</th>      <!-- PODEMOS TRADUCIR CON LA ETIQUETA O CON ESTE FILTRO -->
                            <th>{{ knp_pagination_sortable(pagination, 'First name' | trans, 'u.firstName') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Last name' | trans, 'u.lastName') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Email' | trans, 'u.email') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Role' | trans, 'u.role') }}</th>
                            <th>{% trans %}Created{% endtrans %}</th>
                            <th>{% trans %}Updated{% endtrans %}</th>
                            <th>{% trans %}Actions{% endtrans %}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for user in pagination %}
                        <tr data-id=\" {{ user.id }} \">
                            <td>{{ user.username }}</td>
                            <td>{{ user.firstName }}</td>
                            <td>{{ user.lastName }}</td>
                            <td>{{ user.email }}</td>
                            <td>
                                {% if user.role == 'ROLE_ADMIN' %}
                                    <strong>{% trans %}Administrator{% endtrans %}</strong> {% elseif user.role == 'ROLE_USER' %}
                                    <strong>{% trans %}User{% endtrans %}</strong> {% endif %}
                            </td>
                            <td>{{ user.createAt|date(\"d-m-Y H:i:s\") }}</td>
                            <td>{{ user.updateAt|date(\"d-m-Y H:i:s\") }}</td>
                            <td class=\"actions\">
                                <a href=\"{{ path('netelip_user_view', { id: user.id }) }}\" class=\"btn btn-sm btn-info\">{% trans %}View{% endtrans %}</a>
                                <a href=\"{{ path('netelip_user_edit', { id: user.id }) }}\" class=\"btn btn-sm btn-primary\">{% trans %}Edit{% endtrans %}</a>
                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">{% trans %}Delete{% endtrans %}</a>
                            </td>
                        </tr>
                        </tbody>
                        {% endfor %}
                    </table>
                {% endif %}
                {# display navegation #}
                <div class=\"navigation\">
                    {{ knp_pagination_render(pagination) }}
                </div>

            </div>
        </div>
    </div>

    {{ include('NetelipUserBundle:User:forms/form.html.twig',
    { form: delete_form_ajax, message: 'Are you sure?', id: 'form-delete', with_submit: false }) }}


{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/netelipuser/js/deleteUser.js') }}\"></script>
{% endblock %}", "NetelipUserBundle:User:index.html.twig", "/var/www/html/Tareas/src/Netelip/UserBundle/Resources/views/User/index.html.twig");
    }
}
