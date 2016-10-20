<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_f300f6d5ce3ba84030e44d1fd2712020c2e873158aba96b6c35c61b276730b50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle::layout.html.twig", 1);
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
        $__internal_adf0168f08bdf06f96edf069081550335a4f8928bf45424bb3c05f8c3e6ac1ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf0168f08bdf06f96edf069081550335a4f8928bf45424bb3c05f8c3e6ac1ed->enter($__internal_adf0168f08bdf06f96edf069081550335a4f8928bf45424bb3c05f8c3e6ac1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adf0168f08bdf06f96edf069081550335a4f8928bf45424bb3c05f8c3e6ac1ed->leave($__internal_adf0168f08bdf06f96edf069081550335a4f8928bf45424bb3c05f8c3e6ac1ed_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f76249c37558651578536f17846bd78e62ae0afa166ac39140629b6398826fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f76249c37558651578536f17846bd78e62ae0afa166ac39140629b6398826fb->enter($__internal_0f76249c37558651578536f17846bd78e62ae0afa166ac39140629b6398826fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    {\"Your content goes here\"}

";
        
        $__internal_0f76249c37558651578536f17846bd78e62ae0afa166ac39140629b6398826fb->leave($__internal_0f76249c37558651578536f17846bd78e62ae0afa166ac39140629b6398826fb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
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
        return "{% extends 'base.html.twig' %}

{% block body %}

    {\"Your content goes here\"}

{% endblock body %}";
    }
}
