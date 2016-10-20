<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f9e371827cdf75fed7356f205cd77770d0174e4e8e60a74c1acd20900262eeba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a1db0b8f39a6a627e7967341b4a244791f082789e57b1eeb7216aaeaf5fc6dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1db0b8f39a6a627e7967341b4a244791f082789e57b1eeb7216aaeaf5fc6dbc->enter($__internal_a1db0b8f39a6a627e7967341b4a244791f082789e57b1eeb7216aaeaf5fc6dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1db0b8f39a6a627e7967341b4a244791f082789e57b1eeb7216aaeaf5fc6dbc->leave($__internal_a1db0b8f39a6a627e7967341b4a244791f082789e57b1eeb7216aaeaf5fc6dbc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cddcdbf7533588add8f6d7f03251e78a7c4d88ee2e3a7c91a133e9d6cd02abaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cddcdbf7533588add8f6d7f03251e78a7c4d88ee2e3a7c91a133e9d6cd02abaa->enter($__internal_cddcdbf7533588add8f6d7f03251e78a7c4d88ee2e3a7c91a133e9d6cd02abaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cddcdbf7533588add8f6d7f03251e78a7c4d88ee2e3a7c91a133e9d6cd02abaa->leave($__internal_cddcdbf7533588add8f6d7f03251e78a7c4d88ee2e3a7c91a133e9d6cd02abaa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d3ef19d8e9dae0491e927949391b05c205bc7bdb27da44b4766ea8187133aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3ef19d8e9dae0491e927949391b05c205bc7bdb27da44b4766ea8187133aa9->enter($__internal_7d3ef19d8e9dae0491e927949391b05c205bc7bdb27da44b4766ea8187133aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_7d3ef19d8e9dae0491e927949391b05c205bc7bdb27da44b4766ea8187133aa9->leave($__internal_7d3ef19d8e9dae0491e927949391b05c205bc7bdb27da44b4766ea8187133aa9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
