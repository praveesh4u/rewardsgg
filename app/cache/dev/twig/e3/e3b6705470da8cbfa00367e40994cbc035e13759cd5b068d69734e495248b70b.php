<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_73de969198e0da1136fa307764947a8caf401bcdd9bc00fee78a5e5cdce0ce8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05f3b4e12259d7f53ee29bae9760e77a18ff4f2a79187a2799f93637746aa928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f3b4e12259d7f53ee29bae9760e77a18ff4f2a79187a2799f93637746aa928->enter($__internal_05f3b4e12259d7f53ee29bae9760e77a18ff4f2a79187a2799f93637746aa928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05f3b4e12259d7f53ee29bae9760e77a18ff4f2a79187a2799f93637746aa928->leave($__internal_05f3b4e12259d7f53ee29bae9760e77a18ff4f2a79187a2799f93637746aa928_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_66f8d6bcfd9ea51f87a61b5fe459f2296ac2ca3cd35c84543ae50590bb0a9959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f8d6bcfd9ea51f87a61b5fe459f2296ac2ca3cd35c84543ae50590bb0a9959->enter($__internal_66f8d6bcfd9ea51f87a61b5fe459f2296ac2ca3cd35c84543ae50590bb0a9959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_66f8d6bcfd9ea51f87a61b5fe459f2296ac2ca3cd35c84543ae50590bb0a9959->leave($__internal_66f8d6bcfd9ea51f87a61b5fe459f2296ac2ca3cd35c84543ae50590bb0a9959_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
";
    }
}
