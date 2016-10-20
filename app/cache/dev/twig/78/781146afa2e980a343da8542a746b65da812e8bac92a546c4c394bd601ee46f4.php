<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_38cca4a54154c70737ce5d195f3e82b76ba1b9c4b44234d5c4691f2217c0cec7 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa2a790a44bbcd7ff97cd0eeb3d8153083b9ac3e422db6d2dcc5e51585632179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2a790a44bbcd7ff97cd0eeb3d8153083b9ac3e422db6d2dcc5e51585632179->enter($__internal_aa2a790a44bbcd7ff97cd0eeb3d8153083b9ac3e422db6d2dcc5e51585632179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa2a790a44bbcd7ff97cd0eeb3d8153083b9ac3e422db6d2dcc5e51585632179->leave($__internal_aa2a790a44bbcd7ff97cd0eeb3d8153083b9ac3e422db6d2dcc5e51585632179_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cf009b807e771c0f04d76e199cf582d2a0b3eb05bce94d9c1a83e44d0d887085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf009b807e771c0f04d76e199cf582d2a0b3eb05bce94d9c1a83e44d0d887085->enter($__internal_cf009b807e771c0f04d76e199cf582d2a0b3eb05bce94d9c1a83e44d0d887085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_cf009b807e771c0f04d76e199cf582d2a0b3eb05bce94d9c1a83e44d0d887085->leave($__internal_cf009b807e771c0f04d76e199cf582d2a0b3eb05bce94d9c1a83e44d0d887085_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
