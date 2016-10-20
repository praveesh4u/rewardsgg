<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_c207ebdb4498b9caf2273cb0daf034108ea520d2d911315304bd43eebd23679a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_880bbb12b99ac732aeb9b53506d6cef163ed20c82b32f2c13964f5fc3d53134e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880bbb12b99ac732aeb9b53506d6cef163ed20c82b32f2c13964f5fc3d53134e->enter($__internal_880bbb12b99ac732aeb9b53506d6cef163ed20c82b32f2c13964f5fc3d53134e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_880bbb12b99ac732aeb9b53506d6cef163ed20c82b32f2c13964f5fc3d53134e->leave($__internal_880bbb12b99ac732aeb9b53506d6cef163ed20c82b32f2c13964f5fc3d53134e_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_22468ebeebee33960b3c2dcc002b4740698c8d25b15c0b91410fb6ff7c34f46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22468ebeebee33960b3c2dcc002b4740698c8d25b15c0b91410fb6ff7c34f46e->enter($__internal_22468ebeebee33960b3c2dcc002b4740698c8d25b15c0b91410fb6ff7c34f46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_22468ebeebee33960b3c2dcc002b4740698c8d25b15c0b91410fb6ff7c34f46e->leave($__internal_22468ebeebee33960b3c2dcc002b4740698c8d25b15c0b91410fb6ff7c34f46e_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_b53a8e051bb6f59f1e3c0c3fed07d3fcd379e95e39c52182309aa06836714701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53a8e051bb6f59f1e3c0c3fed07d3fcd379e95e39c52182309aa06836714701->enter($__internal_b53a8e051bb6f59f1e3c0c3fed07d3fcd379e95e39c52182309aa06836714701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_b53a8e051bb6f59f1e3c0c3fed07d3fcd379e95e39c52182309aa06836714701->leave($__internal_b53a8e051bb6f59f1e3c0c3fed07d3fcd379e95e39c52182309aa06836714701_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
";
    }
}
