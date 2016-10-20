<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_0fdf4f28123e2f51ef0dd0c560187c2641e55a291c9ecbb85886abc55de8a495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a0e23d4225874de2f6a47633485a0accb5cacbe2735fe0637aac525d65887bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0e23d4225874de2f6a47633485a0accb5cacbe2735fe0637aac525d65887bb->enter($__internal_4a0e23d4225874de2f6a47633485a0accb5cacbe2735fe0637aac525d65887bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a0e23d4225874de2f6a47633485a0accb5cacbe2735fe0637aac525d65887bb->leave($__internal_4a0e23d4225874de2f6a47633485a0accb5cacbe2735fe0637aac525d65887bb_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b45b8cbc961974981dea753bbf5a68f5decd22a1d02175e20bf4cf196a9fa061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45b8cbc961974981dea753bbf5a68f5decd22a1d02175e20bf4cf196a9fa061->enter($__internal_b45b8cbc961974981dea753bbf5a68f5decd22a1d02175e20bf4cf196a9fa061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_b45b8cbc961974981dea753bbf5a68f5decd22a1d02175e20bf4cf196a9fa061->leave($__internal_b45b8cbc961974981dea753bbf5a68f5decd22a1d02175e20bf4cf196a9fa061_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_1abf761b2be1e1f3244d4a501babe5d3f4de2c0777caa1eb3e2e48b9128fb073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abf761b2be1e1f3244d4a501babe5d3f4de2c0777caa1eb3e2e48b9128fb073->enter($__internal_1abf761b2be1e1f3244d4a501babe5d3f4de2c0777caa1eb3e2e48b9128fb073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_1abf761b2be1e1f3244d4a501babe5d3f4de2c0777caa1eb3e2e48b9128fb073->leave($__internal_1abf761b2be1e1f3244d4a501babe5d3f4de2c0777caa1eb3e2e48b9128fb073_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_5a13226a46e830158f8e179f5594c500078de7f37bb5f0a595c6517ef539253d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a13226a46e830158f8e179f5594c500078de7f37bb5f0a595c6517ef539253d->enter($__internal_5a13226a46e830158f8e179f5594c500078de7f37bb5f0a595c6517ef539253d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_5a13226a46e830158f8e179f5594c500078de7f37bb5f0a595c6517ef539253d->leave($__internal_5a13226a46e830158f8e179f5594c500078de7f37bb5f0a595c6517ef539253d_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_6e2186d5b0ed0579da6aa974f91fb059f0574aaf010b5ff0cd8f75dd6b1f90ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2186d5b0ed0579da6aa974f91fb059f0574aaf010b5ff0cd8f75dd6b1f90ca->enter($__internal_6e2186d5b0ed0579da6aa974f91fb059f0574aaf010b5ff0cd8f75dd6b1f90ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_6e2186d5b0ed0579da6aa974f91fb059f0574aaf010b5ff0cd8f75dd6b1f90ca->leave($__internal_6e2186d5b0ed0579da6aa974f91fb059f0574aaf010b5ff0cd8f75dd6b1f90ca_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_89fc5960e6798b5be22a807a1b317a18321b0987e9032796afeeae42938b314a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fc5960e6798b5be22a807a1b317a18321b0987e9032796afeeae42938b314a->enter($__internal_89fc5960e6798b5be22a807a1b317a18321b0987e9032796afeeae42938b314a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_89fc5960e6798b5be22a807a1b317a18321b0987e9032796afeeae42938b314a->leave($__internal_89fc5960e6798b5be22a807a1b317a18321b0987e9032796afeeae42938b314a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  162 => 56,  156 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 46,  126 => 45,  123 => 44,  119 => 43,  116 => 42,  109 => 38,  105 => 36,  103 => 35,  100 => 34,  96 => 33,  93 => 32,  87 => 31,  77 => 27,  70 => 23,  66 => 21,  60 => 20,  49 => 17,  38 => 14,  11 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
";
    }
}
