<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_76d8c388b05c2d300efced7ee5292f003e61348e780ab703814386f28fec00be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_5687770c81870da9000746c2f55a346b95d97ceee86521f644dd5d2def4fabfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5687770c81870da9000746c2f55a346b95d97ceee86521f644dd5d2def4fabfd->enter($__internal_5687770c81870da9000746c2f55a346b95d97ceee86521f644dd5d2def4fabfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5687770c81870da9000746c2f55a346b95d97ceee86521f644dd5d2def4fabfd->leave($__internal_5687770c81870da9000746c2f55a346b95d97ceee86521f644dd5d2def4fabfd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a0507914b6da61a1c980cc98e867220e0c026c5e4119ba71a361528513d1418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a0507914b6da61a1c980cc98e867220e0c026c5e4119ba71a361528513d1418->enter($__internal_2a0507914b6da61a1c980cc98e867220e0c026c5e4119ba71a361528513d1418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2a0507914b6da61a1c980cc98e867220e0c026c5e4119ba71a361528513d1418->leave($__internal_2a0507914b6da61a1c980cc98e867220e0c026c5e4119ba71a361528513d1418_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
";
    }
}
