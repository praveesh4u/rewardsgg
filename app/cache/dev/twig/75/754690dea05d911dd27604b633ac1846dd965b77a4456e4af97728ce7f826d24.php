<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_f358d47f4705c23b5deb183b0b727423d72e269dc9815c909696c07155967c9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac29e6f0c84c05ba0f49882b1dcb4d78353ce4c4bcb37dd5494a7cbb667a7cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac29e6f0c84c05ba0f49882b1dcb4d78353ce4c4bcb37dd5494a7cbb667a7cd1->enter($__internal_ac29e6f0c84c05ba0f49882b1dcb4d78353ce4c4bcb37dd5494a7cbb667a7cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac29e6f0c84c05ba0f49882b1dcb4d78353ce4c4bcb37dd5494a7cbb667a7cd1->leave($__internal_ac29e6f0c84c05ba0f49882b1dcb4d78353ce4c4bcb37dd5494a7cbb667a7cd1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8f87fdfd0480e211aa216f56cb3f47b6e05c25d3ab46b7ae4bceb6379ef9661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f87fdfd0480e211aa216f56cb3f47b6e05c25d3ab46b7ae4bceb6379ef9661->enter($__internal_a8f87fdfd0480e211aa216f56cb3f47b6e05c25d3ab46b7ae4bceb6379ef9661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "

";
        
        $__internal_a8f87fdfd0480e211aa216f56cb3f47b6e05c25d3ab46b7ae4bceb6379ef9661->leave($__internal_a8f87fdfd0480e211aa216f56cb3f47b6e05c25d3ab46b7ae4bceb6379ef9661_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}

    {{ block('fos_user_content')}}

{% endblock body %}";
    }
}
