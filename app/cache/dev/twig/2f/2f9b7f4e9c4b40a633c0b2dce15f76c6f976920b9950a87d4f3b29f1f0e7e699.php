<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_12557d7a4bbb69d1fe280c0c242697b946029f990a36dfe507f5e6a2e61e1a1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea53d81276a7e8bf7a8ffe42787905bb6688d2cb1aa5450df924c8218fd5a970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea53d81276a7e8bf7a8ffe42787905bb6688d2cb1aa5450df924c8218fd5a970->enter($__internal_ea53d81276a7e8bf7a8ffe42787905bb6688d2cb1aa5450df924c8218fd5a970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea53d81276a7e8bf7a8ffe42787905bb6688d2cb1aa5450df924c8218fd5a970->leave($__internal_ea53d81276a7e8bf7a8ffe42787905bb6688d2cb1aa5450df924c8218fd5a970_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
";
    }
}
