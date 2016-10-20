<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_902ef9836ba380b3eca2395be99c415e8d9421d8d4249a1eb9f401f0a941b8c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02be1f3538d17cfedb0d5a65bf51a246c15d9558302539f53f57ebefb767c0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02be1f3538d17cfedb0d5a65bf51a246c15d9558302539f53f57ebefb767c0ea->enter($__internal_02be1f3538d17cfedb0d5a65bf51a246c15d9558302539f53f57ebefb767c0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02be1f3538d17cfedb0d5a65bf51a246c15d9558302539f53f57ebefb767c0ea->leave($__internal_02be1f3538d17cfedb0d5a65bf51a246c15d9558302539f53f57ebefb767c0ea_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9b649ea8e923ace2e160628ebe0af80e3b9f13af1eb6ca98ec44dc263aa3c8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b649ea8e923ace2e160628ebe0af80e3b9f13af1eb6ca98ec44dc263aa3c8c8->enter($__internal_9b649ea8e923ace2e160628ebe0af80e3b9f13af1eb6ca98ec44dc263aa3c8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_9b649ea8e923ace2e160628ebe0af80e3b9f13af1eb6ca98ec44dc263aa3c8c8->leave($__internal_9b649ea8e923ace2e160628ebe0af80e3b9f13af1eb6ca98ec44dc263aa3c8c8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
