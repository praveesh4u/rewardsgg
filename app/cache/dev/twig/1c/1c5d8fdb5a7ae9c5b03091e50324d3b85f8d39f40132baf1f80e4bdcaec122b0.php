<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_138b08e0c4c2c09131f399781533e013fa015172b12ef726db52d8e2689ec309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_89376d3a4d25326df26edec4d5d8ea9c1ccf28ff0815c29c4e67f6b7510d2c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89376d3a4d25326df26edec4d5d8ea9c1ccf28ff0815c29c4e67f6b7510d2c7d->enter($__internal_89376d3a4d25326df26edec4d5d8ea9c1ccf28ff0815c29c4e67f6b7510d2c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89376d3a4d25326df26edec4d5d8ea9c1ccf28ff0815c29c4e67f6b7510d2c7d->leave($__internal_89376d3a4d25326df26edec4d5d8ea9c1ccf28ff0815c29c4e67f6b7510d2c7d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2fc24e9ce1dc79ed5a7e9642c170ad9af2717d72f4e844a987dc2017fabed22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc24e9ce1dc79ed5a7e9642c170ad9af2717d72f4e844a987dc2017fabed22a->enter($__internal_2fc24e9ce1dc79ed5a7e9642c170ad9af2717d72f4e844a987dc2017fabed22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2fc24e9ce1dc79ed5a7e9642c170ad9af2717d72f4e844a987dc2017fabed22a->leave($__internal_2fc24e9ce1dc79ed5a7e9642c170ad9af2717d72f4e844a987dc2017fabed22a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
