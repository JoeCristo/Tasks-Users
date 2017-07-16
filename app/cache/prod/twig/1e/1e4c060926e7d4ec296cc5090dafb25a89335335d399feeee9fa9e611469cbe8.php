<?php

/* NetelipUserBundle:User:index.html.twig */
class __TwigTemplate_12fb0fc429222db0ad1be88a30028b6e601c39cb3400d70a8fb041c19b805f74 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["pagination"] ?? null), "getTotalItemCount", array()), "html", null, true);
        echo "</span>
                </p>

                <form method=\"get\" action=\"\" class=\"form-inline\" role=\"search\">
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"query\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
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
        if ( !twig_length_filter($this->env, ($context["pagination"] ?? null))) {
            // line 27
            echo "                    <h4 >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No search results"), "html", null, true);
            echo "</h4>
                ";
        }
        // line 29
        echo "                ";
        if (twig_length_filter($this->env, ($context["pagination"] ?? null))) {
            // line 30
            echo "                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>";
            // line 33
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "u.username");
            echo "</th>      <!-- PODEMOS TRADUCIR CON LA ETIQUETA O CON ESTE FILTRO -->
                            <th>";
            // line 34
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "u.firstName");
            echo "</th>
                            <th>";
            // line 35
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "u.lastName");
            echo "</th>
                            <th>";
            // line 36
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "u.email");
            echo "</th>
                            <th>";
            // line 37
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? null), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role"), "u.role");
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
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? null));
        echo "
                </div>

            </div>
        </div>
    </div>

    ";
        // line 76
        echo twig_include($this->env, $context, "NetelipUserBundle:User:forms/form.html.twig", array("form" =>         // line 77
($context["delete_form_ajax"] ?? null), "message" => "Are you sure?", "id" => "form-delete", "with_submit" => false));
        echo "


";
    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        // line 82
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/netelipuser/js/deleteUser.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  241 => 83,  236 => 82,  233 => 81,  225 => 77,  224 => 76,  214 => 69,  211 => 68,  209 => 67,  205 => 65,  194 => 60,  188 => 59,  182 => 58,  177 => 56,  173 => 55,  170 => 54,  165 => 53,  160 => 52,  158 => 51,  153 => 49,  149 => 48,  145 => 47,  141 => 46,  136 => 45,  132 => 44,  125 => 40,  121 => 39,  117 => 38,  113 => 37,  109 => 36,  105 => 35,  101 => 34,  97 => 33,  92 => 30,  89 => 29,  83 => 27,  81 => 26,  75 => 23,  68 => 21,  59 => 16,  57 => 15,  51 => 12,  43 => 7,  39 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NetelipUserBundle:User:index.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/User/index.html.twig");
    }
}
