<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_7e1a69ba1591fee03d99119e2adfe647aa1a9d18476a197cb54f6f5a0dc2e4ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2fdd53ed671cd304dc7e46d62907770dba8256995879ba2f7628ebea547fa92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdd53ed671cd304dc7e46d62907770dba8256995879ba2f7628ebea547fa92a->enter($__internal_2fdd53ed671cd304dc7e46d62907770dba8256995879ba2f7628ebea547fa92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fdd53ed671cd304dc7e46d62907770dba8256995879ba2f7628ebea547fa92a->leave($__internal_2fdd53ed671cd304dc7e46d62907770dba8256995879ba2f7628ebea547fa92a_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee30bc8c313401d051072194b3f5548c8c97a186737f2cfbfbbdb179625e3b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee30bc8c313401d051072194b3f5548c8c97a186737f2cfbfbbdb179625e3b50->enter($__internal_ee30bc8c313401d051072194b3f5548c8c97a186737f2cfbfbbdb179625e3b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_ee30bc8c313401d051072194b3f5548c8c97a186737f2cfbfbbdb179625e3b50->leave($__internal_ee30bc8c313401d051072194b3f5548c8c97a186737f2cfbfbbdb179625e3b50_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_3095403c88131eec15e4fd782d97f2a231b06921c72c9f41a2620eff21be589b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3095403c88131eec15e4fd782d97f2a231b06921c72c9f41a2620eff21be589b->enter($__internal_3095403c88131eec15e4fd782d97f2a231b06921c72c9f41a2620eff21be589b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3095403c88131eec15e4fd782d97f2a231b06921c72c9f41a2620eff21be589b->leave($__internal_3095403c88131eec15e4fd782d97f2a231b06921c72c9f41a2620eff21be589b_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ebda70a2686824080207cb854dca37e0694f6dc9ba75e8265e1d4eece286b3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebda70a2686824080207cb854dca37e0694f6dc9ba75e8265e1d4eece286b3c4->enter($__internal_ebda70a2686824080207cb854dca37e0694f6dc9ba75e8265e1d4eece286b3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_ebda70a2686824080207cb854dca37e0694f6dc9ba75e8265e1d4eece286b3c4->leave($__internal_ebda70a2686824080207cb854dca37e0694f6dc9ba75e8265e1d4eece286b3c4_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_5e394af3d5c392ddc0fb39702f040d831e216ea108e183076fee1fd0f0416b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e394af3d5c392ddc0fb39702f040d831e216ea108e183076fee1fd0f0416b7d->enter($__internal_5e394af3d5c392ddc0fb39702f040d831e216ea108e183076fee1fd0f0416b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_5e394af3d5c392ddc0fb39702f040d831e216ea108e183076fee1fd0f0416b7d->leave($__internal_5e394af3d5c392ddc0fb39702f040d831e216ea108e183076fee1fd0f0416b7d_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_3a0a3961433b9a52c98552be3f5bfa051f1651adb8e0a56202d616fcb49ff8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0a3961433b9a52c98552be3f5bfa051f1651adb8e0a56202d616fcb49ff8a2->enter($__internal_3a0a3961433b9a52c98552be3f5bfa051f1651adb8e0a56202d616fcb49ff8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_3a0a3961433b9a52c98552be3f5bfa051f1651adb8e0a56202d616fcb49ff8a2->leave($__internal_3a0a3961433b9a52c98552be3f5bfa051f1651adb8e0a56202d616fcb49ff8a2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 36,  125 => 35,  113 => 30,  106 => 27,  100 => 26,  90 => 23,  84 => 22,  73 => 18,  67 => 16,  64 => 15,  58 => 14,  51 => 12,  49 => 33,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}
{% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
";
    }
}
