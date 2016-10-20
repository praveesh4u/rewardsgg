<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_502e39297bd2f62919741408928728ce753ca4a4c7fad74b16ba9fbb8a1a08fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_8b94d62c85ac26cc600ceffb634b703fbe4cf2e0a0897d1e2a69a6e23589d3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b94d62c85ac26cc600ceffb634b703fbe4cf2e0a0897d1e2a69a6e23589d3b0->enter($__internal_8b94d62c85ac26cc600ceffb634b703fbe4cf2e0a0897d1e2a69a6e23589d3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b94d62c85ac26cc600ceffb634b703fbe4cf2e0a0897d1e2a69a6e23589d3b0->leave($__internal_8b94d62c85ac26cc600ceffb634b703fbe4cf2e0a0897d1e2a69a6e23589d3b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_69684d3eb2e00db9529b01eb86792545cccb96d0d7dd72d9cd853d7205b426f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69684d3eb2e00db9529b01eb86792545cccb96d0d7dd72d9cd853d7205b426f3->enter($__internal_69684d3eb2e00db9529b01eb86792545cccb96d0d7dd72d9cd853d7205b426f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_69684d3eb2e00db9529b01eb86792545cccb96d0d7dd72d9cd853d7205b426f3->leave($__internal_69684d3eb2e00db9529b01eb86792545cccb96d0d7dd72d9cd853d7205b426f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
