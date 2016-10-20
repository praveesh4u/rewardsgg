<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_9537e5f9989f08e07df21114768da6b527db5b29e49331086a35cd97110e7e84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e771366de5d7ef35dcc2bdb27802ae0759dab753c8d969795f9990c5585ee1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e771366de5d7ef35dcc2bdb27802ae0759dab753c8d969795f9990c5585ee1b->enter($__internal_0e771366de5d7ef35dcc2bdb27802ae0759dab753c8d969795f9990c5585ee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e771366de5d7ef35dcc2bdb27802ae0759dab753c8d969795f9990c5585ee1b->leave($__internal_0e771366de5d7ef35dcc2bdb27802ae0759dab753c8d969795f9990c5585ee1b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
";
    }
}
