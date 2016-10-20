<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_a0f788614b9d6af43c0ce9b600b76dfa34b75924a6fb8981215eb904ffdabe19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c5be515430d85022f0c9ca162eae0c82f96af331c36e5da7711fcde801e7d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5be515430d85022f0c9ca162eae0c82f96af331c36e5da7711fcde801e7d46->enter($__internal_7c5be515430d85022f0c9ca162eae0c82f96af331c36e5da7711fcde801e7d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c5be515430d85022f0c9ca162eae0c82f96af331c36e5da7711fcde801e7d46->leave($__internal_7c5be515430d85022f0c9ca162eae0c82f96af331c36e5da7711fcde801e7d46_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_dd1128154c70afcc1ddf42a807d8a884212c335eec3905bef98c2146e05f3be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1128154c70afcc1ddf42a807d8a884212c335eec3905bef98c2146e05f3be0->enter($__internal_dd1128154c70afcc1ddf42a807d8a884212c335eec3905bef98c2146e05f3be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_dd1128154c70afcc1ddf42a807d8a884212c335eec3905bef98c2146e05f3be0->leave($__internal_dd1128154c70afcc1ddf42a807d8a884212c335eec3905bef98c2146e05f3be0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
";
    }
}
