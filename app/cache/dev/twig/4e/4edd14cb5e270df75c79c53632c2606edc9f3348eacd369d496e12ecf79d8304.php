<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_08b3f28c40376ce9a970c3125188bbca690f256a6aa85a3f05eaee6730be07f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_213a2cda400185084614a5a755a5366ff7a5142ffc68682ddffc164b4250baee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213a2cda400185084614a5a755a5366ff7a5142ffc68682ddffc164b4250baee->enter($__internal_213a2cda400185084614a5a755a5366ff7a5142ffc68682ddffc164b4250baee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_213a2cda400185084614a5a755a5366ff7a5142ffc68682ddffc164b4250baee->leave($__internal_213a2cda400185084614a5a755a5366ff7a5142ffc68682ddffc164b4250baee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53f4b0ec69c506fbd7639e017d1a6be37dc0ca9a281a044ed5231c8d0b5ebac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f4b0ec69c506fbd7639e017d1a6be37dc0ca9a281a044ed5231c8d0b5ebac1->enter($__internal_53f4b0ec69c506fbd7639e017d1a6be37dc0ca9a281a044ed5231c8d0b5ebac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_53f4b0ec69c506fbd7639e017d1a6be37dc0ca9a281a044ed5231c8d0b5ebac1->leave($__internal_53f4b0ec69c506fbd7639e017d1a6be37dc0ca9a281a044ed5231c8d0b5ebac1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
