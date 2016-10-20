<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_780ca76fae93291d02c6c6fc5431d952ffb9496ecc8d1cffe1e69c4581c5e066 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_8982ccaa3f77f61155780b300837cdbff8f9ee2f1f6b7f15e5b51acc56d55f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8982ccaa3f77f61155780b300837cdbff8f9ee2f1f6b7f15e5b51acc56d55f13->enter($__internal_8982ccaa3f77f61155780b300837cdbff8f9ee2f1f6b7f15e5b51acc56d55f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8982ccaa3f77f61155780b300837cdbff8f9ee2f1f6b7f15e5b51acc56d55f13->leave($__internal_8982ccaa3f77f61155780b300837cdbff8f9ee2f1f6b7f15e5b51acc56d55f13_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_06c3b349063e2a865cee8a5f725091fc7ee6bf711287c91fcd3af23fa438d6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c3b349063e2a865cee8a5f725091fc7ee6bf711287c91fcd3af23fa438d6f7->enter($__internal_06c3b349063e2a865cee8a5f725091fc7ee6bf711287c91fcd3af23fa438d6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_06c3b349063e2a865cee8a5f725091fc7ee6bf711287c91fcd3af23fa438d6f7->leave($__internal_06c3b349063e2a865cee8a5f725091fc7ee6bf711287c91fcd3af23fa438d6f7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
