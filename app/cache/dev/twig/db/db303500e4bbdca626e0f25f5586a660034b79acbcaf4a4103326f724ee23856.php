<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_277f490af9890af8eea48b45623c7b4ef82567c463e1f09579453b61a2386d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_18ae7977d07c8233e548cf6e94280a9633f8cb93f14dd1d68e3e3e690c47b981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18ae7977d07c8233e548cf6e94280a9633f8cb93f14dd1d68e3e3e690c47b981->enter($__internal_18ae7977d07c8233e548cf6e94280a9633f8cb93f14dd1d68e3e3e690c47b981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18ae7977d07c8233e548cf6e94280a9633f8cb93f14dd1d68e3e3e690c47b981->leave($__internal_18ae7977d07c8233e548cf6e94280a9633f8cb93f14dd1d68e3e3e690c47b981_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b60c8698e0d8e4e4683ca212b2f7a4a3a0fee4a21d0c365d01b5056becf1cedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60c8698e0d8e4e4683ca212b2f7a4a3a0fee4a21d0c365d01b5056becf1cedf->enter($__internal_b60c8698e0d8e4e4683ca212b2f7a4a3a0fee4a21d0c365d01b5056becf1cedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b60c8698e0d8e4e4683ca212b2f7a4a3a0fee4a21d0c365d01b5056becf1cedf->leave($__internal_b60c8698e0d8e4e4683ca212b2f7a4a3a0fee4a21d0c365d01b5056becf1cedf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
