<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_25508079c6b32d9af1dfa596ab6296d8165a8b454e64778be2c090d06bb471cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f532c795bb91395cbaeb4315903f208e530aafe5e349733a316e030e36d12b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f532c795bb91395cbaeb4315903f208e530aafe5e349733a316e030e36d12b2->enter($__internal_7f532c795bb91395cbaeb4315903f208e530aafe5e349733a316e030e36d12b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f532c795bb91395cbaeb4315903f208e530aafe5e349733a316e030e36d12b2->leave($__internal_7f532c795bb91395cbaeb4315903f208e530aafe5e349733a316e030e36d12b2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1dd1b9ca32c3a7071394994eaffedc996d5fbce1f9bf630feb7f9acabfd21519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd1b9ca32c3a7071394994eaffedc996d5fbce1f9bf630feb7f9acabfd21519->enter($__internal_1dd1b9ca32c3a7071394994eaffedc996d5fbce1f9bf630feb7f9acabfd21519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_1dd1b9ca32c3a7071394994eaffedc996d5fbce1f9bf630feb7f9acabfd21519->leave($__internal_1dd1b9ca32c3a7071394994eaffedc996d5fbce1f9bf630feb7f9acabfd21519_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
";
    }
}
