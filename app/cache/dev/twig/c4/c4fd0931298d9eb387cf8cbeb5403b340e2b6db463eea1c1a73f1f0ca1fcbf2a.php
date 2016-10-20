<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_740b9277f7825fd1e476ffdd1dd963afd571788156608953a5c38a1dcd9e90fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_571443d3b5b1150a8ab53415e38b5c1cef83d19bd2313983e3714edd261794a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571443d3b5b1150a8ab53415e38b5c1cef83d19bd2313983e3714edd261794a3->enter($__internal_571443d3b5b1150a8ab53415e38b5c1cef83d19bd2313983e3714edd261794a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_571443d3b5b1150a8ab53415e38b5c1cef83d19bd2313983e3714edd261794a3->leave($__internal_571443d3b5b1150a8ab53415e38b5c1cef83d19bd2313983e3714edd261794a3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
";
    }
}
