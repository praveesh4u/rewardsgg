<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_a383ded8e6fab8ef0da8a53850af6b4b2d252c0efab7ada508fdd7a6c3e2b272 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_969f0304743725d57ccc9900c123ba8cb9c9c4a1fe991851b5b03fdd253e1ba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969f0304743725d57ccc9900c123ba8cb9c9c4a1fe991851b5b03fdd253e1ba3->enter($__internal_969f0304743725d57ccc9900c123ba8cb9c9c4a1fe991851b5b03fdd253e1ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_969f0304743725d57ccc9900c123ba8cb9c9c4a1fe991851b5b03fdd253e1ba3->leave($__internal_969f0304743725d57ccc9900c123ba8cb9c9c4a1fe991851b5b03fdd253e1ba3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_98c766591f639d4605dca2c10b3d37f2588a09da2b0382b66f68f5d131fc4298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c766591f639d4605dca2c10b3d37f2588a09da2b0382b66f68f5d131fc4298->enter($__internal_98c766591f639d4605dca2c10b3d37f2588a09da2b0382b66f68f5d131fc4298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_98c766591f639d4605dca2c10b3d37f2588a09da2b0382b66f68f5d131fc4298->leave($__internal_98c766591f639d4605dca2c10b3d37f2588a09da2b0382b66f68f5d131fc4298_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
