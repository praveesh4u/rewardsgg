<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_178048f57c727919f5ff7ea0ebf33c4d0c3ea66bba777dab144cefa6719c5980 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fe1edad3db048bc7d8c2239c3639e80ec4129155c47d85096fefde1a38602b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe1edad3db048bc7d8c2239c3639e80ec4129155c47d85096fefde1a38602b8->enter($__internal_9fe1edad3db048bc7d8c2239c3639e80ec4129155c47d85096fefde1a38602b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fe1edad3db048bc7d8c2239c3639e80ec4129155c47d85096fefde1a38602b8->leave($__internal_9fe1edad3db048bc7d8c2239c3639e80ec4129155c47d85096fefde1a38602b8_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_d4c297471730bed4c9d6c031e3f73e3d9b3ac4ef3dbb23c4d1ee81fad3a59118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c297471730bed4c9d6c031e3f73e3d9b3ac4ef3dbb23c4d1ee81fad3a59118->enter($__internal_d4c297471730bed4c9d6c031e3f73e3d9b3ac4ef3dbb23c4d1ee81fad3a59118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_d4c297471730bed4c9d6c031e3f73e3d9b3ac4ef3dbb23c4d1ee81fad3a59118->leave($__internal_d4c297471730bed4c9d6c031e3f73e3d9b3ac4ef3dbb23c4d1ee81fad3a59118_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
";
    }
}
