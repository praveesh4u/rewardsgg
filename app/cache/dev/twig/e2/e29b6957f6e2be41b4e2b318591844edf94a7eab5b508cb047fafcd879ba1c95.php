<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_c14e32a1d0d7cab2b21ff78950cf75e1ff32bc407173dd1df82cd645a8099c77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6033154d8c5d567218cd1a9764030eda7d4d3dff9a2771af4b8b3571a13614e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6033154d8c5d567218cd1a9764030eda7d4d3dff9a2771af4b8b3571a13614e->enter($__internal_c6033154d8c5d567218cd1a9764030eda7d4d3dff9a2771af4b8b3571a13614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_c6033154d8c5d567218cd1a9764030eda7d4d3dff9a2771af4b8b3571a13614e->leave($__internal_c6033154d8c5d567218cd1a9764030eda7d4d3dff9a2771af4b8b3571a13614e_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_8ff7c37ea12b6471f68cf781b34e5e3bf9ab681c064695ec18e8b1609f489295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff7c37ea12b6471f68cf781b34e5e3bf9ab681c064695ec18e8b1609f489295->enter($__internal_8ff7c37ea12b6471f68cf781b34e5e3bf9ab681c064695ec18e8b1609f489295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_8ff7c37ea12b6471f68cf781b34e5e3bf9ab681c064695ec18e8b1609f489295->leave($__internal_8ff7c37ea12b6471f68cf781b34e5e3bf9ab681c064695ec18e8b1609f489295_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_75aba6e1ebe8165ad382d3847b17865e1b27a196ddda60d99e3102c49d6c43e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75aba6e1ebe8165ad382d3847b17865e1b27a196ddda60d99e3102c49d6c43e4->enter($__internal_75aba6e1ebe8165ad382d3847b17865e1b27a196ddda60d99e3102c49d6c43e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_75aba6e1ebe8165ad382d3847b17865e1b27a196ddda60d99e3102c49d6c43e4->leave($__internal_75aba6e1ebe8165ad382d3847b17865e1b27a196ddda60d99e3102c49d6c43e4_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_285fac8f4085cfbf6b9bebff43a585bbb3823ee91435defa5165bad6f7037379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_285fac8f4085cfbf6b9bebff43a585bbb3823ee91435defa5165bad6f7037379->enter($__internal_285fac8f4085cfbf6b9bebff43a585bbb3823ee91435defa5165bad6f7037379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_285fac8f4085cfbf6b9bebff43a585bbb3823ee91435defa5165bad6f7037379->leave($__internal_285fac8f4085cfbf6b9bebff43a585bbb3823ee91435defa5165bad6f7037379_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
";
    }
}
