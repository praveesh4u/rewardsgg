<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_7e10ca99a89ed69d96bb663c2771635568fc678a783f8217354203118b94117e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b4c69816cb66a7c8c2869051175e7c2a09ae65e666a907d12a9c848254363f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4c69816cb66a7c8c2869051175e7c2a09ae65e666a907d12a9c848254363f1->enter($__internal_6b4c69816cb66a7c8c2869051175e7c2a09ae65e666a907d12a9c848254363f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b4c69816cb66a7c8c2869051175e7c2a09ae65e666a907d12a9c848254363f1->leave($__internal_6b4c69816cb66a7c8c2869051175e7c2a09ae65e666a907d12a9c848254363f1_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a9800eeb4503540d8d2d8bef4db4fe50817edf4127ab53793768ae5fc1fb03cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9800eeb4503540d8d2d8bef4db4fe50817edf4127ab53793768ae5fc1fb03cc->enter($__internal_a9800eeb4503540d8d2d8bef4db4fe50817edf4127ab53793768ae5fc1fb03cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_a9800eeb4503540d8d2d8bef4db4fe50817edf4127ab53793768ae5fc1fb03cc->leave($__internal_a9800eeb4503540d8d2d8bef4db4fe50817edf4127ab53793768ae5fc1fb03cc_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ content|raw }}
{% endblock %}
";
    }
}
