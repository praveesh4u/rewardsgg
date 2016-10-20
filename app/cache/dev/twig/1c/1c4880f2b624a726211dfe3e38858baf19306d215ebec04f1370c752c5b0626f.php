<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_c30aa4f47f53b7b2a5028252d5d24c24153313abad00ae1eedbc41d232a6a3f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_90a5f9a155f9884bbcb2149e9378a2695f639df070a078dcf80a2527171f6978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a5f9a155f9884bbcb2149e9378a2695f639df070a078dcf80a2527171f6978->enter($__internal_90a5f9a155f9884bbcb2149e9378a2695f639df070a078dcf80a2527171f6978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90a5f9a155f9884bbcb2149e9378a2695f639df070a078dcf80a2527171f6978->leave($__internal_90a5f9a155f9884bbcb2149e9378a2695f639df070a078dcf80a2527171f6978_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7690f17795978547d41ef6b8b596a7a2ebf74857ac59ff32cad6ec6396bba6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7690f17795978547d41ef6b8b596a7a2ebf74857ac59ff32cad6ec6396bba6ff->enter($__internal_7690f17795978547d41ef6b8b596a7a2ebf74857ac59ff32cad6ec6396bba6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_7690f17795978547d41ef6b8b596a7a2ebf74857ac59ff32cad6ec6396bba6ff->leave($__internal_7690f17795978547d41ef6b8b596a7a2ebf74857ac59ff32cad6ec6396bba6ff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
