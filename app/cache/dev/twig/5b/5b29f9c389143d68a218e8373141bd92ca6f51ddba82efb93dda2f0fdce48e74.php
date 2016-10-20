<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_d94ce6738bc3c725fd340afeac1e23a97b77f3ea89f6a99a879ea251911cde3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ea2d818d88f59967fbdb096cc7e320b70cdd085b3caea48ea10964c8c420e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea2d818d88f59967fbdb096cc7e320b70cdd085b3caea48ea10964c8c420e0d->enter($__internal_9ea2d818d88f59967fbdb096cc7e320b70cdd085b3caea48ea10964c8c420e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ea2d818d88f59967fbdb096cc7e320b70cdd085b3caea48ea10964c8c420e0d->leave($__internal_9ea2d818d88f59967fbdb096cc7e320b70cdd085b3caea48ea10964c8c420e0d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
";
    }
}
