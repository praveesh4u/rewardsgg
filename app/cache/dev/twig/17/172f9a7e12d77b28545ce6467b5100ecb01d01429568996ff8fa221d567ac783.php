<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_69ea3d3600227ca9e886993177784b0eb54ae00c263dd52d694f5a1e892d3b8f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5e6064a48a739e2ef61a2b4f544011e0904584a0fdd652054c30c785d5fba92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5e6064a48a739e2ef61a2b4f544011e0904584a0fdd652054c30c785d5fba92->enter($__internal_c5e6064a48a739e2ef61a2b4f544011e0904584a0fdd652054c30c785d5fba92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e6064a48a739e2ef61a2b4f544011e0904584a0fdd652054c30c785d5fba92->leave($__internal_c5e6064a48a739e2ef61a2b4f544011e0904584a0fdd652054c30c785d5fba92_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dec53fc54d0f83c9cd24269b437710d30302faa3f19b921419afc455ca87f4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec53fc54d0f83c9cd24269b437710d30302faa3f19b921419afc455ca87f4d1->enter($__internal_dec53fc54d0f83c9cd24269b437710d30302faa3f19b921419afc455ca87f4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_dec53fc54d0f83c9cd24269b437710d30302faa3f19b921419afc455ca87f4d1->leave($__internal_dec53fc54d0f83c9cd24269b437710d30302faa3f19b921419afc455ca87f4d1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
";
    }
}
