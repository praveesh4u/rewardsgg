<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_5d2f3e75e8aa0594b031a7c0bc6aa68db54051976a026e3c5e3c7eb0f2815b5c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_680975733e847e311e2df69ecb0dccc82c1040272aed757a17c79a3c21dad5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_680975733e847e311e2df69ecb0dccc82c1040272aed757a17c79a3c21dad5a8->enter($__internal_680975733e847e311e2df69ecb0dccc82c1040272aed757a17c79a3c21dad5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_680975733e847e311e2df69ecb0dccc82c1040272aed757a17c79a3c21dad5a8->leave($__internal_680975733e847e311e2df69ecb0dccc82c1040272aed757a17c79a3c21dad5a8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6e08e64ea10408a03aa78d8f3984098db857ef3d7f98dc5921133e38c995e371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e08e64ea10408a03aa78d8f3984098db857ef3d7f98dc5921133e38c995e371->enter($__internal_6e08e64ea10408a03aa78d8f3984098db857ef3d7f98dc5921133e38c995e371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_6e08e64ea10408a03aa78d8f3984098db857ef3d7f98dc5921133e38c995e371->leave($__internal_6e08e64ea10408a03aa78d8f3984098db857ef3d7f98dc5921133e38c995e371_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
";
    }
}
