<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_bd1d61c21696aef5b068616889424df43e9c416d4e505189d1c332b0df144d1f extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6b65be71ace83eba8c73b950689715430c8918c42510e6840114f176c58924e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b65be71ace83eba8c73b950689715430c8918c42510e6840114f176c58924e->enter($__internal_d6b65be71ace83eba8c73b950689715430c8918c42510e6840114f176c58924e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b65be71ace83eba8c73b950689715430c8918c42510e6840114f176c58924e->leave($__internal_d6b65be71ace83eba8c73b950689715430c8918c42510e6840114f176c58924e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f4b98e9dc5a5e60898d0707c34776a63da3e62b5384063c5ad080deacc528072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b98e9dc5a5e60898d0707c34776a63da3e62b5384063c5ad080deacc528072->enter($__internal_f4b98e9dc5a5e60898d0707c34776a63da3e62b5384063c5ad080deacc528072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_f4b98e9dc5a5e60898d0707c34776a63da3e62b5384063c5ad080deacc528072->leave($__internal_f4b98e9dc5a5e60898d0707c34776a63da3e62b5384063c5ad080deacc528072_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
";
    }
}
