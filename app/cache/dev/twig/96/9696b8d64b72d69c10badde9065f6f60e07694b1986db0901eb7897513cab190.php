<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_ac35ef93c7e0bd3dae094426cf8227525b5546d484195b56c349b2cd807412f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99f015f50fcf08b2a32bc3d797eef40df8406de3b202eeda336e86f53551d546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f015f50fcf08b2a32bc3d797eef40df8406de3b202eeda336e86f53551d546->enter($__internal_99f015f50fcf08b2a32bc3d797eef40df8406de3b202eeda336e86f53551d546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f015f50fcf08b2a32bc3d797eef40df8406de3b202eeda336e86f53551d546->leave($__internal_99f015f50fcf08b2a32bc3d797eef40df8406de3b202eeda336e86f53551d546_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6a35ecb849fccef715673ba267c40f208c66d655fcc44f284d2da899e76c5d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a35ecb849fccef715673ba267c40f208c66d655fcc44f284d2da899e76c5d9a->enter($__internal_6a35ecb849fccef715673ba267c40f208c66d655fcc44f284d2da899e76c5d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_6a35ecb849fccef715673ba267c40f208c66d655fcc44f284d2da899e76c5d9a->leave($__internal_6a35ecb849fccef715673ba267c40f208c66d655fcc44f284d2da899e76c5d9a_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_8c7a4de0d28339fe2e4fe589ac22417183bf99f131cfe1eadf41fa01b8a25587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7a4de0d28339fe2e4fe589ac22417183bf99f131cfe1eadf41fa01b8a25587->enter($__internal_8c7a4de0d28339fe2e4fe589ac22417183bf99f131cfe1eadf41fa01b8a25587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_8c7a4de0d28339fe2e4fe589ac22417183bf99f131cfe1eadf41fa01b8a25587->leave($__internal_8c7a4de0d28339fe2e4fe589ac22417183bf99f131cfe1eadf41fa01b8a25587_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed48314fec14b849e3ae613d4307cca64ed3c76ae98787b091a0ee1b980c8225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed48314fec14b849e3ae613d4307cca64ed3c76ae98787b091a0ee1b980c8225->enter($__internal_ed48314fec14b849e3ae613d4307cca64ed3c76ae98787b091a0ee1b980c8225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_ed48314fec14b849e3ae613d4307cca64ed3c76ae98787b091a0ee1b980c8225->leave($__internal_ed48314fec14b849e3ae613d4307cca64ed3c76ae98787b091a0ee1b980c8225_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
";
    }
}
