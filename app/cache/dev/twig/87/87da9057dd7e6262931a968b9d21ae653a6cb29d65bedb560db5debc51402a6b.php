<?php

/* base.html.twig */
class __TwigTemplate_a69bc002ce64d1144f521ddfcf8d37d86d91faa19f1a49291e6ee8320eb3ea27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf13e1bf5082591142d48539ac8172fab258041ee04d06e3fd46868c0d3eeb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf13e1bf5082591142d48539ac8172fab258041ee04d06e3fd46868c0d3eeb03->enter($__internal_bf13e1bf5082591142d48539ac8172fab258041ee04d06e3fd46868c0d3eeb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "
    </head>
    <body style=\"padding-top: 75px;\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Rewards Test</a>
                </div>
                <div id=\"navbar\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right \">
                    ";
        // line 31
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 32
            echo "                        ";
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 33
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
                echo "\">Admin Section</a></li>
                        ";
            }
            // line 35
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Logout</a></li>
                    ";
        } else {
            // line 37
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
                    ";
        }
        // line 39
        echo "                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "                </div>
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_bf13e1bf5082591142d48539ac8172fab258041ee04d06e3fd46868c0d3eeb03->leave($__internal_bf13e1bf5082591142d48539ac8172fab258041ee04d06e3fd46868c0d3eeb03_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_062ebe6dc83aa90f6beb5735c96d044ab16f3d83d9fa97f8233d7345fb0ad48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062ebe6dc83aa90f6beb5735c96d044ab16f3d83d9fa97f8233d7345fb0ad48d->enter($__internal_062ebe6dc83aa90f6beb5735c96d044ab16f3d83d9fa97f8233d7345fb0ad48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Rewards GG!";
        
        $__internal_062ebe6dc83aa90f6beb5735c96d044ab16f3d83d9fa97f8233d7345fb0ad48d->leave($__internal_062ebe6dc83aa90f6beb5735c96d044ab16f3d83d9fa97f8233d7345fb0ad48d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdbadb36d27ceeb32369e8d171be2238b988d40c62bd7912252c30013f7f3e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdbadb36d27ceeb32369e8d171be2238b988d40c62bd7912252c30013f7f3e00->enter($__internal_fdbadb36d27ceeb32369e8d171be2238b988d40c62bd7912252c30013f7f3e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_fdbadb36d27ceeb32369e8d171be2238b988d40c62bd7912252c30013f7f3e00->leave($__internal_fdbadb36d27ceeb32369e8d171be2238b988d40c62bd7912252c30013f7f3e00_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_690b89bc06801d01c6a22b0d9f6f5cce045a39becb60849d46a093f9f774a6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690b89bc06801d01c6a22b0d9f6f5cce045a39becb60849d46a093f9f774a6b6->enter($__internal_690b89bc06801d01c6a22b0d9f6f5cce045a39becb60849d46a093f9f774a6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
            <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_690b89bc06801d01c6a22b0d9f6f5cce045a39becb60849d46a093f9f774a6b6->leave($__internal_690b89bc06801d01c6a22b0d9f6f5cce045a39becb60849d46a093f9f774a6b6_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_8de1e0307215bf51607ac042ef79d5e8071d39aede435a1b4ad60d593f6a76fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de1e0307215bf51607ac042ef79d5e8071d39aede435a1b4ad60d593f6a76fb->enter($__internal_8de1e0307215bf51607ac042ef79d5e8071d39aede435a1b4ad60d593f6a76fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "
                    ";
        
        $__internal_8de1e0307215bf51607ac042ef79d5e8071d39aede435a1b4ad60d593f6a76fb->leave($__internal_8de1e0307215bf51607ac042ef79d5e8071d39aede435a1b4ad60d593f6a76fb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 47,  156 => 46,  147 => 13,  144 => 12,  138 => 11,  128 => 7,  122 => 6,  110 => 5,  98 => 49,  96 => 46,  87 => 39,  81 => 37,  75 => 35,  69 => 33,  66 => 32,  64 => 31,  46 => 15,  44 => 11,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Rewards GG!{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('bundles/app/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        {% block javascripts %}
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
            <script src=\"{{ asset('bundles/app/js/bootstrap.min.js')}}\"></script>
        {% endblock %}

    </head>
    <body style=\"padding-top: 75px;\">
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\">Rewards Test</a>
                </div>
                <div id=\"navbar\" class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav navbar-right \">
                    {% if app.user %}
                        {% if is_granted('ROLE_ADMIN') %}
                        <li><a href=\"{{ path(\"sonata_admin_dashboard\") }}\">Admin Section</a></li>
                        {% endif %}
                        <li><a href=\"{{ path(\"fos_user_security_logout\") }}\">Logout</a></li>
                    {% else %}
                        <li><a href=\"{{ path(\"fos_user_registration_register\") }}\">Register</a></li>
                    {% endif %}
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    {% block body %}

                    {% endblock %}
                </div>
            </div>
        </div>
    </body>
</html>
";
    }
}
