<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b8a45551b240b5c2ece07fea4980723f3cf61c829efede513a52aef691f14784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25c86ca50846c36b92d66c275f069bdbc79bb3b105640fd12d59884a282293de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c86ca50846c36b92d66c275f069bdbc79bb3b105640fd12d59884a282293de->enter($__internal_25c86ca50846c36b92d66c275f069bdbc79bb3b105640fd12d59884a282293de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25c86ca50846c36b92d66c275f069bdbc79bb3b105640fd12d59884a282293de->leave($__internal_25c86ca50846c36b92d66c275f069bdbc79bb3b105640fd12d59884a282293de_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48dc58f73f6f71ab713331d3f858d52f48f9811b2ca936fc48075902bf114be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dc58f73f6f71ab713331d3f858d52f48f9811b2ca936fc48075902bf114be0->enter($__internal_48dc58f73f6f71ab713331d3f858d52f48f9811b2ca936fc48075902bf114be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type=\"email\"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type=\"password\"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
";
        
        $__internal_48dc58f73f6f71ab713331d3f858d52f48f9811b2ca936fc48075902bf114be0->leave($__internal_48dc58f73f6f71ab713331d3f858d52f48f9811b2ca936fc48075902bf114be0_prof);

    }

    // line 49
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8345bb2dd5d859a89273edbfe0c47728909644a97508c9ff18913e626c127ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8345bb2dd5d859a89273edbfe0c47728909644a97508c9ff18913e626c127ca6->enter($__internal_8345bb2dd5d859a89273edbfe0c47728909644a97508c9ff18913e626c127ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 50
        echo "    <div class=\"container\">

        ";
        // line 52
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 53
            echo "            <p class=\"bg-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</p>
        ";
        }
        // line 55
        echo "
        <form class=\"form-signin form-horizontal\" action=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
            <div class=\"form-group\">
                <label for=\"username\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
            </div>
            <div class=\"form-group\">
                <label for=\"password\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>
            <div class=\"form-group\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>
            <input class=\"btn btn-default\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
        </form>
    </div> <!-- /container -->
";
        
        $__internal_8345bb2dd5d859a89273edbfe0c47728909644a97508c9ff18913e626c127ca6->leave($__internal_8345bb2dd5d859a89273edbfe0c47728909644a97508c9ff18913e626c127ca6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 70,  141 => 68,  133 => 63,  127 => 60,  123 => 59,  118 => 57,  114 => 56,  111 => 55,  105 => 53,  103 => 52,  99 => 50,  93 => 49,  41 => 5,  35 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}
{% block stylesheets %}
    {{ parent() }}
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type=\"email\"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type=\"password\"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
{% endblock %}
{% block fos_user_content %}
    <div class=\"container\">

        {% if error %}
            <p class=\"bg-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</p>
        {% endif %}

        <form class=\"form-signin form-horizontal\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            <div class=\"form-group\">
                <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
            </div>
            <div class=\"form-group\">
                <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
            </div>
            <div class=\"form-group\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
            </div>
            <input class=\"btn btn-default\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
        </form>
    </div> <!-- /container -->
{% endblock fos_user_content %}
";
    }
}
