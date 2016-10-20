<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_42eb89c9a4886d9617545c1115aeb0873d52736239c38be033729534f964d79d extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bf14f2cd76096b6528c911695a974c928d83869f4096e5842659103e9ad6150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf14f2cd76096b6528c911695a974c928d83869f4096e5842659103e9ad6150->enter($__internal_6bf14f2cd76096b6528c911695a974c928d83869f4096e5842659103e9ad6150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bf14f2cd76096b6528c911695a974c928d83869f4096e5842659103e9ad6150->leave($__internal_6bf14f2cd76096b6528c911695a974c928d83869f4096e5842659103e9ad6150_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e3c40fc3748a5c7ccdd3ea2a67d49474691bd71efc791ea762afd21e84134fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c40fc3748a5c7ccdd3ea2a67d49474691bd71efc791ea762afd21e84134fcd->enter($__internal_e3c40fc3748a5c7ccdd3ea2a67d49474691bd71efc791ea762afd21e84134fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_e3c40fc3748a5c7ccdd3ea2a67d49474691bd71efc791ea762afd21e84134fcd->leave($__internal_e3c40fc3748a5c7ccdd3ea2a67d49474691bd71efc791ea762afd21e84134fcd_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
";
    }
}
