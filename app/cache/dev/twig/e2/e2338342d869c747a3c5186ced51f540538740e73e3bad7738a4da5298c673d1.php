<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_11cbaafb2d81c05f422610cfeee2b2978be49f805fd8761c4be17ad8b3906c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_6a55c8698e9d0a77ef994899ccd359fd77b776e212a826a48c73973e427beb96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a55c8698e9d0a77ef994899ccd359fd77b776e212a826a48c73973e427beb96->enter($__internal_6a55c8698e9d0a77ef994899ccd359fd77b776e212a826a48c73973e427beb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a55c8698e9d0a77ef994899ccd359fd77b776e212a826a48c73973e427beb96->leave($__internal_6a55c8698e9d0a77ef994899ccd359fd77b776e212a826a48c73973e427beb96_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d7815065067ced70f9ecd1bf85c85ddf165af2c053aa001a003974dd21a91dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7815065067ced70f9ecd1bf85c85ddf165af2c053aa001a003974dd21a91dd->enter($__internal_8d7815065067ced70f9ecd1bf85c85ddf165af2c053aa001a003974dd21a91dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8d7815065067ced70f9ecd1bf85c85ddf165af2c053aa001a003974dd21a91dd->leave($__internal_8d7815065067ced70f9ecd1bf85c85ddf165af2c053aa001a003974dd21a91dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
