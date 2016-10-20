<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3681e4d3020078ff9ebbbd03292d025cbcd730e4a310c145cff511d75da24716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_6db71cd81d2622eb7401603e7439ea05adf5ad5c7bd829d8a1e34147fbfb9062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db71cd81d2622eb7401603e7439ea05adf5ad5c7bd829d8a1e34147fbfb9062->enter($__internal_6db71cd81d2622eb7401603e7439ea05adf5ad5c7bd829d8a1e34147fbfb9062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6db71cd81d2622eb7401603e7439ea05adf5ad5c7bd829d8a1e34147fbfb9062->leave($__internal_6db71cd81d2622eb7401603e7439ea05adf5ad5c7bd829d8a1e34147fbfb9062_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a88a84f83881421605a3397753343ab228ce506f7185cefddb1af64bc82898b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a88a84f83881421605a3397753343ab228ce506f7185cefddb1af64bc82898b->enter($__internal_4a88a84f83881421605a3397753343ab228ce506f7185cefddb1af64bc82898b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_4a88a84f83881421605a3397753343ab228ce506f7185cefddb1af64bc82898b->leave($__internal_4a88a84f83881421605a3397753343ab228ce506f7185cefddb1af64bc82898b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
