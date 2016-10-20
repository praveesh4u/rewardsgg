<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_9fc8a8223c127472e85356d12dac21ea8a434d8c24fddb6e11428e16715d7e27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca11dd930e0cee38d1a946ab86977a241e3f386b13fc619b3852e9729f01f972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca11dd930e0cee38d1a946ab86977a241e3f386b13fc619b3852e9729f01f972->enter($__internal_ca11dd930e0cee38d1a946ab86977a241e3f386b13fc619b3852e9729f01f972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca11dd930e0cee38d1a946ab86977a241e3f386b13fc619b3852e9729f01f972->leave($__internal_ca11dd930e0cee38d1a946ab86977a241e3f386b13fc619b3852e9729f01f972_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
";
    }
}
