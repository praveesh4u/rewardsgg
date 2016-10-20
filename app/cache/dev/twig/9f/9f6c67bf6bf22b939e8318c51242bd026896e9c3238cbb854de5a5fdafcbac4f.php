<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_9d8a5bfcbefdf8bbd29fa93569defc01d93d878c02ab316e125377caba46b7bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35120b2a6bec0eec5fce6eda4ef6c64821450e6ef1603d354d096e6b891d6c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35120b2a6bec0eec5fce6eda4ef6c64821450e6ef1603d354d096e6b891d6c4b->enter($__internal_35120b2a6bec0eec5fce6eda4ef6c64821450e6ef1603d354d096e6b891d6c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35120b2a6bec0eec5fce6eda4ef6c64821450e6ef1603d354d096e6b891d6c4b->leave($__internal_35120b2a6bec0eec5fce6eda4ef6c64821450e6ef1603d354d096e6b891d6c4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be697aa929cae31cbac0dda19ab7be3e090e02289505dbcd6da46d035960cb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be697aa929cae31cbac0dda19ab7be3e090e02289505dbcd6da46d035960cb5f->enter($__internal_be697aa929cae31cbac0dda19ab7be3e090e02289505dbcd6da46d035960cb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_be697aa929cae31cbac0dda19ab7be3e090e02289505dbcd6da46d035960cb5f->leave($__internal_be697aa929cae31cbac0dda19ab7be3e090e02289505dbcd6da46d035960cb5f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a006c3bc4a9511ee06cb364a0ee9db046a84dcc7c7840549787a2b1868df75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a006c3bc4a9511ee06cb364a0ee9db046a84dcc7c7840549787a2b1868df75b->enter($__internal_8a006c3bc4a9511ee06cb364a0ee9db046a84dcc7c7840549787a2b1868df75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_8a006c3bc4a9511ee06cb364a0ee9db046a84dcc7c7840549787a2b1868df75b->leave($__internal_8a006c3bc4a9511ee06cb364a0ee9db046a84dcc7c7840549787a2b1868df75b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e25d8ee388bfb28fc21817c08f5fa53cf7abf308d18e93ac326b19d88bb3a175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25d8ee388bfb28fc21817c08f5fa53cf7abf308d18e93ac326b19d88bb3a175->enter($__internal_e25d8ee388bfb28fc21817c08f5fa53cf7abf308d18e93ac326b19d88bb3a175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_e25d8ee388bfb28fc21817c08f5fa53cf7abf308d18e93ac326b19d88bb3a175->leave($__internal_e25d8ee388bfb28fc21817c08f5fa53cf7abf308d18e93ac326b19d88bb3a175_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_fe663c445e02447eeb6ff29fc85ab652ae44fe8d7b505999d58ed93b4bb4d976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe663c445e02447eeb6ff29fc85ab652ae44fe8d7b505999d58ed93b4bb4d976->enter($__internal_fe663c445e02447eeb6ff29fc85ab652ae44fe8d7b505999d58ed93b4bb4d976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fe663c445e02447eeb6ff29fc85ab652ae44fe8d7b505999d58ed93b4bb4d976->leave($__internal_fe663c445e02447eeb6ff29fc85ab652ae44fe8d7b505999d58ed93b4bb4d976_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
";
    }
}
