<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_76742f1ea0b1b4ac20463e092e762e5f0af715b448524e510406f9c2cdd2b4fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5e66350c89df0bad2a3fec89093cb7e42baf6d7527ca93596147d6bbebaeccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e66350c89df0bad2a3fec89093cb7e42baf6d7527ca93596147d6bbebaeccd->enter($__internal_f5e66350c89df0bad2a3fec89093cb7e42baf6d7527ca93596147d6bbebaeccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5e66350c89df0bad2a3fec89093cb7e42baf6d7527ca93596147d6bbebaeccd->leave($__internal_f5e66350c89df0bad2a3fec89093cb7e42baf6d7527ca93596147d6bbebaeccd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
";
    }
}
