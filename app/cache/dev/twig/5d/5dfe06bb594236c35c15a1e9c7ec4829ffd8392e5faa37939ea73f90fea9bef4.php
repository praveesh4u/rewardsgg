<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_3e8b6fcecf6eddd6b9e750cbbc03ba5c3bd1ec64ed49e7e54dfa4cef6cb58bdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5326937c0dea1339d6380e197584f60cf92ff13a241d24f6fe3b923b1ebffce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5326937c0dea1339d6380e197584f60cf92ff13a241d24f6fe3b923b1ebffce8->enter($__internal_5326937c0dea1339d6380e197584f60cf92ff13a241d24f6fe3b923b1ebffce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5326937c0dea1339d6380e197584f60cf92ff13a241d24f6fe3b923b1ebffce8->leave($__internal_5326937c0dea1339d6380e197584f60cf92ff13a241d24f6fe3b923b1ebffce8_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e38ea3c34234c96336e152977c58dac64640189f3fb3ca1dd1b7aedf2cff9bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38ea3c34234c96336e152977c58dac64640189f3fb3ca1dd1b7aedf2cff9bea->enter($__internal_e38ea3c34234c96336e152977c58dac64640189f3fb3ca1dd1b7aedf2cff9bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_e38ea3c34234c96336e152977c58dac64640189f3fb3ca1dd1b7aedf2cff9bea->leave($__internal_e38ea3c34234c96336e152977c58dac64640189f3fb3ca1dd1b7aedf2cff9bea_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_c479b76e2ce8182b72ba71dcc3cd6d9d4abc3bcc238593b89fc21e0f79c2b8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c479b76e2ce8182b72ba71dcc3cd6d9d4abc3bcc238593b89fc21e0f79c2b8c7->enter($__internal_c479b76e2ce8182b72ba71dcc3cd6d9d4abc3bcc238593b89fc21e0f79c2b8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_c479b76e2ce8182b72ba71dcc3cd6d9d4abc3bcc238593b89fc21e0f79c2b8c7->leave($__internal_c479b76e2ce8182b72ba71dcc3cd6d9d4abc3bcc238593b89fc21e0f79c2b8c7_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_d41a3109c0fb3a1d0032e0c663a1abfb1c30578533e19b2f78748b05ee78adce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d41a3109c0fb3a1d0032e0c663a1abfb1c30578533e19b2f78748b05ee78adce->enter($__internal_d41a3109c0fb3a1d0032e0c663a1abfb1c30578533e19b2f78748b05ee78adce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_d41a3109c0fb3a1d0032e0c663a1abfb1c30578533e19b2f78748b05ee78adce->leave($__internal_d41a3109c0fb3a1d0032e0c663a1abfb1c30578533e19b2f78748b05ee78adce_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_24528bdfd7551d17d67f2887fb53d2ea5a2287408582af05b454cbc7fdd28862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24528bdfd7551d17d67f2887fb53d2ea5a2287408582af05b454cbc7fdd28862->enter($__internal_24528bdfd7551d17d67f2887fb53d2ea5a2287408582af05b454cbc7fdd28862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_24528bdfd7551d17d67f2887fb53d2ea5a2287408582af05b454cbc7fdd28862->leave($__internal_24528bdfd7551d17d67f2887fb53d2ea5a2287408582af05b454cbc7fdd28862_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
";
    }
}
