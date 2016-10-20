<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_65f7e1a3edcc71cc1b1dfede5a07425698c54b55b14e768b9d4feb6425083c4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85fddcb05984ec18b22b87245584629117934c9e5d66c65e7d13f5e026da1b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85fddcb05984ec18b22b87245584629117934c9e5d66c65e7d13f5e026da1b84->enter($__internal_85fddcb05984ec18b22b87245584629117934c9e5d66c65e7d13f5e026da1b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85fddcb05984ec18b22b87245584629117934c9e5d66c65e7d13f5e026da1b84->leave($__internal_85fddcb05984ec18b22b87245584629117934c9e5d66c65e7d13f5e026da1b84_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
";
    }
}
