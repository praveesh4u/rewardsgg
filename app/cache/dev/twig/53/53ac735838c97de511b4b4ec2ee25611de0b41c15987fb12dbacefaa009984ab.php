<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_f1e0d2581bbe862471ba4713b336c35e6edc8e83fdafbb2b8490401bb1fd4bd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_1923656eb4412984d804303e0298ba5e7c40987709f4da3396173b58bfdf4653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1923656eb4412984d804303e0298ba5e7c40987709f4da3396173b58bfdf4653->enter($__internal_1923656eb4412984d804303e0298ba5e7c40987709f4da3396173b58bfdf4653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1923656eb4412984d804303e0298ba5e7c40987709f4da3396173b58bfdf4653->leave($__internal_1923656eb4412984d804303e0298ba5e7c40987709f4da3396173b58bfdf4653_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_79b6af0f80dd303daae63f361f487016e2f9307d3cb6194f8d80a55c99f1aa6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b6af0f80dd303daae63f361f487016e2f9307d3cb6194f8d80a55c99f1aa6d->enter($__internal_79b6af0f80dd303daae63f361f487016e2f9307d3cb6194f8d80a55c99f1aa6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_79b6af0f80dd303daae63f361f487016e2f9307d3cb6194f8d80a55c99f1aa6d->leave($__internal_79b6af0f80dd303daae63f361f487016e2f9307d3cb6194f8d80a55c99f1aa6d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
";
    }
}
