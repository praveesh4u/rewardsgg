<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0fc735df37e617dcc54c3dc9282b571ee6c8c3dacfd5bd2663705a26ae044e63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_56ad14fdf1d2e9d732816c81c2906f8b5a8422feff9cc7d93a95199c608ce652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ad14fdf1d2e9d732816c81c2906f8b5a8422feff9cc7d93a95199c608ce652->enter($__internal_56ad14fdf1d2e9d732816c81c2906f8b5a8422feff9cc7d93a95199c608ce652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56ad14fdf1d2e9d732816c81c2906f8b5a8422feff9cc7d93a95199c608ce652->leave($__internal_56ad14fdf1d2e9d732816c81c2906f8b5a8422feff9cc7d93a95199c608ce652_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb90e0c06cc3ab625649b7b215e14758e587a8968711b5c52a1bf51da6da8a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb90e0c06cc3ab625649b7b215e14758e587a8968711b5c52a1bf51da6da8a24->enter($__internal_fb90e0c06cc3ab625649b7b215e14758e587a8968711b5c52a1bf51da6da8a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_fb90e0c06cc3ab625649b7b215e14758e587a8968711b5c52a1bf51da6da8a24->leave($__internal_fb90e0c06cc3ab625649b7b215e14758e587a8968711b5c52a1bf51da6da8a24_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
