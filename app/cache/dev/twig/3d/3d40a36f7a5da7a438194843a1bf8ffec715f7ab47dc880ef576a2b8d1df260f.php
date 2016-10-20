<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_e82b8541b7018650b89c44b4fe8c820288fd13513d2fc39476092f0cbaa26617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_391d97e61eb847dd467a9b53e314bd1753595a4b1ecfc1da15a7072c408ed097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391d97e61eb847dd467a9b53e314bd1753595a4b1ecfc1da15a7072c408ed097->enter($__internal_391d97e61eb847dd467a9b53e314bd1753595a4b1ecfc1da15a7072c408ed097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_391d97e61eb847dd467a9b53e314bd1753595a4b1ecfc1da15a7072c408ed097->leave($__internal_391d97e61eb847dd467a9b53e314bd1753595a4b1ecfc1da15a7072c408ed097_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_01dcbb8324d5a258b18b30813763a82045778c853b888839422914a968347da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dcbb8324d5a258b18b30813763a82045778c853b888839422914a968347da6->enter($__internal_01dcbb8324d5a258b18b30813763a82045778c853b888839422914a968347da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_01dcbb8324d5a258b18b30813763a82045778c853b888839422914a968347da6->leave($__internal_01dcbb8324d5a258b18b30813763a82045778c853b888839422914a968347da6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block user_block %}{# Customize this value #}{% endblock %}
";
    }
}
