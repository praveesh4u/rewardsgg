<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5b33bd579f30c5d85e3b3b249b0cacd54d6fe12f7ed453a09aefd04692856f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bbc166dd600f4951b7952af304317fef128ca7c35277f61604dd8a34957fd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bbc166dd600f4951b7952af304317fef128ca7c35277f61604dd8a34957fd2d->enter($__internal_3bbc166dd600f4951b7952af304317fef128ca7c35277f61604dd8a34957fd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bbc166dd600f4951b7952af304317fef128ca7c35277f61604dd8a34957fd2d->leave($__internal_3bbc166dd600f4951b7952af304317fef128ca7c35277f61604dd8a34957fd2d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7ac6ccce71bebe01bc55276244e2667d220288476f04aa63b5946cc6547e162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ac6ccce71bebe01bc55276244e2667d220288476f04aa63b5946cc6547e162->enter($__internal_c7ac6ccce71bebe01bc55276244e2667d220288476f04aa63b5946cc6547e162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c7ac6ccce71bebe01bc55276244e2667d220288476f04aa63b5946cc6547e162->leave($__internal_c7ac6ccce71bebe01bc55276244e2667d220288476f04aa63b5946cc6547e162_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
