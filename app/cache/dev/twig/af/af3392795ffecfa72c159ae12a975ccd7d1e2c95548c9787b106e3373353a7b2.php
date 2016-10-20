<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_bd5c31f42df6322fc6d3e304bb410e181cd949469388de9e2b9617b5783b0508 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a573e8cb4639ce11314f68a8140bf39902a85d7872d2d7eceb5e3a1757eb6448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a573e8cb4639ce11314f68a8140bf39902a85d7872d2d7eceb5e3a1757eb6448->enter($__internal_a573e8cb4639ce11314f68a8140bf39902a85d7872d2d7eceb5e3a1757eb6448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a573e8cb4639ce11314f68a8140bf39902a85d7872d2d7eceb5e3a1757eb6448->leave($__internal_a573e8cb4639ce11314f68a8140bf39902a85d7872d2d7eceb5e3a1757eb6448_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_10ee89fe97161658d7ce2434e4321c85b9e88bd092519f7701302bef9290966f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ee89fe97161658d7ce2434e4321c85b9e88bd092519f7701302bef9290966f->enter($__internal_10ee89fe97161658d7ce2434e4321c85b9e88bd092519f7701302bef9290966f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_10ee89fe97161658d7ce2434e4321c85b9e88bd092519f7701302bef9290966f->leave($__internal_10ee89fe97161658d7ce2434e4321c85b9e88bd092519f7701302bef9290966f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
";
    }
}
