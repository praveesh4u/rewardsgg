<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_2de834bb61c54dc465e0e04bf9b01fbcdeaa2622e1e8c6c03884473b2b486998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9435d94d8a5acfcf82b4244886397d75f26193f7a270752d71159e97a22a9f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9435d94d8a5acfcf82b4244886397d75f26193f7a270752d71159e97a22a9f4c->enter($__internal_9435d94d8a5acfcf82b4244886397d75f26193f7a270752d71159e97a22a9f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9435d94d8a5acfcf82b4244886397d75f26193f7a270752d71159e97a22a9f4c->leave($__internal_9435d94d8a5acfcf82b4244886397d75f26193f7a270752d71159e97a22a9f4c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
";
    }
}
