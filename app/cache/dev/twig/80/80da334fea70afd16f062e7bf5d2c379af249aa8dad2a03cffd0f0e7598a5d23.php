<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_f8cd4b5a88b36824c73ba4cc7dd817f448e57849f38cf88ece542b7780a7eeaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38e1dc2aa529bb6cf29b1dd247398861870bacb786aec54bf65676570701dc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e1dc2aa529bb6cf29b1dd247398861870bacb786aec54bf65676570701dc4e->enter($__internal_38e1dc2aa529bb6cf29b1dd247398861870bacb786aec54bf65676570701dc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e1dc2aa529bb6cf29b1dd247398861870bacb786aec54bf65676570701dc4e->leave($__internal_38e1dc2aa529bb6cf29b1dd247398861870bacb786aec54bf65676570701dc4e_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_5dd32f6167380b25847ff4e572a07d80f97c457fe3778b5994afecc1e08d19bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd32f6167380b25847ff4e572a07d80f97c457fe3778b5994afecc1e08d19bd->enter($__internal_5dd32f6167380b25847ff4e572a07d80f97c457fe3778b5994afecc1e08d19bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_5dd32f6167380b25847ff4e572a07d80f97c457fe3778b5994afecc1e08d19bd->leave($__internal_5dd32f6167380b25847ff4e572a07d80f97c457fe3778b5994afecc1e08d19bd_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_98be67eb206cf4c9bec432fd45e0235c147779557a838a066798851f9e397750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98be67eb206cf4c9bec432fd45e0235c147779557a838a066798851f9e397750->enter($__internal_98be67eb206cf4c9bec432fd45e0235c147779557a838a066798851f9e397750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_98be67eb206cf4c9bec432fd45e0235c147779557a838a066798851f9e397750->leave($__internal_98be67eb206cf4c9bec432fd45e0235c147779557a838a066798851f9e397750_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_c6252cc02067ec5308d4aa6cf448f78c478671efa6c78959e29d6e8467c0e8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6252cc02067ec5308d4aa6cf448f78c478671efa6c78959e29d6e8467c0e8b6->enter($__internal_c6252cc02067ec5308d4aa6cf448f78c478671efa6c78959e29d6e8467c0e8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_c6252cc02067ec5308d4aa6cf448f78c478671efa6c78959e29d6e8467c0e8b6->leave($__internal_c6252cc02067ec5308d4aa6cf448f78c478671efa6c78959e29d6e8467c0e8b6_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_01ac9cfdc922583ee02bf32005091ef270b8207583ea77b1c52d4af502cd36c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ac9cfdc922583ee02bf32005091ef270b8207583ea77b1c52d4af502cd36c1->enter($__internal_01ac9cfdc922583ee02bf32005091ef270b8207583ea77b1c52d4af502cd36c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_01ac9cfdc922583ee02bf32005091ef270b8207583ea77b1c52d4af502cd36c1->leave($__internal_01ac9cfdc922583ee02bf32005091ef270b8207583ea77b1c52d4af502cd36c1_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a190ab47ca6d171e43ef73a3a833a1f20219f74f8e8ed1e6577dc91c476424ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a190ab47ca6d171e43ef73a3a833a1f20219f74f8e8ed1e6577dc91c476424ff->enter($__internal_a190ab47ca6d171e43ef73a3a833a1f20219f74f8e8ed1e6577dc91c476424ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_a190ab47ca6d171e43ef73a3a833a1f20219f74f8e8ed1e6577dc91c476424ff->leave($__internal_a190ab47ca6d171e43ef73a3a833a1f20219f74f8e8ed1e6577dc91c476424ff_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_ae13cbdf40754cc57ffc0da35b6060f33a8cc7c3342d2ab4961ae32f3a87793f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae13cbdf40754cc57ffc0da35b6060f33a8cc7c3342d2ab4961ae32f3a87793f->enter($__internal_ae13cbdf40754cc57ffc0da35b6060f33a8cc7c3342d2ab4961ae32f3a87793f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_ae13cbdf40754cc57ffc0da35b6060f33a8cc7c3342d2ab4961ae32f3a87793f->leave($__internal_ae13cbdf40754cc57ffc0da35b6060f33a8cc7c3342d2ab4961ae32f3a87793f_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_901d840511386505367bb2cbc22c34da2ccd498278f1033e1407fb7210670837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901d840511386505367bb2cbc22c34da2ccd498278f1033e1407fb7210670837->enter($__internal_901d840511386505367bb2cbc22c34da2ccd498278f1033e1407fb7210670837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_901d840511386505367bb2cbc22c34da2ccd498278f1033e1407fb7210670837->leave($__internal_901d840511386505367bb2cbc22c34da2ccd498278f1033e1407fb7210670837_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
";
    }
}
