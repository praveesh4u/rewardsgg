<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_bc98db796bba5e7c0a1a3e2714fdbac44a3948b48bf1b436f62d9414616b408a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30fcbeb5d5d0209ded7d74c86567d363aaff2cef641a4bbec18541f1fb26c8e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fcbeb5d5d0209ded7d74c86567d363aaff2cef641a4bbec18541f1fb26c8e2->enter($__internal_30fcbeb5d5d0209ded7d74c86567d363aaff2cef641a4bbec18541f1fb26c8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30fcbeb5d5d0209ded7d74c86567d363aaff2cef641a4bbec18541f1fb26c8e2->leave($__internal_30fcbeb5d5d0209ded7d74c86567d363aaff2cef641a4bbec18541f1fb26c8e2_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_246ec4fa1514a4bca0cd42a40b2f087f0881e0142662de074e8067ef9be9e400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246ec4fa1514a4bca0cd42a40b2f087f0881e0142662de074e8067ef9be9e400->enter($__internal_246ec4fa1514a4bca0cd42a40b2f087f0881e0142662de074e8067ef9be9e400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
        echo "
";
        
        $__internal_246ec4fa1514a4bca0cd42a40b2f087f0881e0142662de074e8067ef9be9e400->leave($__internal_246ec4fa1514a4bca0cd42a40b2f087f0881e0142662de074e8067ef9be9e400_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_9e5a4af508a3f0baa50ce2a23d73108b226a5e3c5c7856e20db98201dc12f48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5a4af508a3f0baa50ce2a23d73108b226a5e3c5c7856e20db98201dc12f48f->enter($__internal_9e5a4af508a3f0baa50ce2a23d73108b226a5e3c5c7856e20db98201dc12f48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_9e5a4af508a3f0baa50ce2a23d73108b226a5e3c5c7856e20db98201dc12f48f->leave($__internal_9e5a4af508a3f0baa50ce2a23d73108b226a5e3c5c7856e20db98201dc12f48f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_title %}
    {{ name|trans({}, admin.translationdomain) }}
{% endblock %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
";
    }
}
