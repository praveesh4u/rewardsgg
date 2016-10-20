<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_0178348b772a4b8b0de2e51f2c611a194b0bd5f16a6904b6f47300b6de6f417d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c65287177911bf07a8541024afb4fed135d62ad29905fe4b0cc3a6cc37a84be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c65287177911bf07a8541024afb4fed135d62ad29905fe4b0cc3a6cc37a84be->enter($__internal_5c65287177911bf07a8541024afb4fed135d62ad29905fe4b0cc3a6cc37a84be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c65287177911bf07a8541024afb4fed135d62ad29905fe4b0cc3a6cc37a84be->leave($__internal_5c65287177911bf07a8541024afb4fed135d62ad29905fe4b0cc3a6cc37a84be_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
";
    }
}
