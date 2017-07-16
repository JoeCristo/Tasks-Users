<?php

/* NetelipUserBundle:User:view.html.twig */
class __TwigTemplate_9c064015f206b79ff31d745fcc782214a6f46784e375e1f7c90a9865f6049751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NetelipUserBundle:User:view.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-md-9\">
            <h2>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "lastName", array()), "html", null, true);
        echo "</h2>
            <br>
            <dl>
                <dt>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "firstName", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "lastName", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 40
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "role", array()) == "ROLE_ADMIN")) {
            // line 41
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Administrator", array(), "messages");
            // line 42
            echo "                    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "role", array()) == "ROLE_USER")) {
            // line 43
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("User", array(), "messages");
            // line 44
            echo "                    ";
        }
        // line 45
        echo "                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 51
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "isActive", array()) == 1)) {
            // line 52
            echo "                        <span class=\"text-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Enabled", array(), "messages");
            echo "</span>
                    ";
        } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),         // line 53
($context["user"] ?? null), "isActive", array()) == 0)) {
            // line 54
            echo "                        <span class=\"text-warning\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Disabled", array(), "messages");
            echo "</span>
                    ";
        }
        // line 56
        echo "                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "createAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "updateAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        <div class=\"col-md-3\">
            <h3>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo ":</h3>
            <p>
                <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("netelip_user_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">
                    <span class=\"glyphicon glyphicon-edit\"></span>
                    ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit user"), "html", null, true);
        echo "
                </a>
            </p>
            <p>
                ";
        // line 84
        echo twig_include($this->env, $context, "NetelipUserBundle:User:forms/form.html.twig", array("form" => ($context["delete_form"] ?? null), "message" => "Are you sure?"));
        echo "
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "NetelipUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 84,  187 => 80,  182 => 78,  177 => 76,  167 => 69,  162 => 67,  154 => 62,  149 => 60,  143 => 56,  137 => 54,  135 => 53,  130 => 52,  128 => 51,  123 => 49,  117 => 45,  114 => 44,  111 => 43,  108 => 42,  105 => 41,  103 => 40,  98 => 38,  90 => 33,  85 => 31,  77 => 26,  72 => 24,  64 => 19,  59 => 17,  51 => 12,  46 => 10,  38 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NetelipUserBundle:User:view.html.twig", "/var/www/html/users/src/Netelip/UserBundle/Resources/views/User/view.html.twig");
    }
}
