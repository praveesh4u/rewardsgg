<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_0dc2b3524f3eeb9ee0f7ac2e3c9c24aad9546ac00b34711f02574d05cf10d1c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0e31ec03588c3922fdc46d485f93f1da81649155fd5e0ef3a1199034cdada04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e31ec03588c3922fdc46d485f93f1da81649155fd5e0ef3a1199034cdada04->enter($__internal_e0e31ec03588c3922fdc46d485f93f1da81649155fd5e0ef3a1199034cdada04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_e0e31ec03588c3922fdc46d485f93f1da81649155fd5e0ef3a1199034cdada04->leave($__internal_e0e31ec03588c3922fdc46d485f93f1da81649155fd5e0ef3a1199034cdada04_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_48c19817e1a3cd881bf3520f40a1e3de3fc0dc1aad52ff97405f1ae751834a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c19817e1a3cd881bf3520f40a1e3de3fc0dc1aad52ff97405f1ae751834a0f->enter($__internal_48c19817e1a3cd881bf3520f40a1e3de3fc0dc1aad52ff97405f1ae751834a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_48c19817e1a3cd881bf3520f40a1e3de3fc0dc1aad52ff97405f1ae751834a0f->leave($__internal_48c19817e1a3cd881bf3520f40a1e3de3fc0dc1aad52ff97405f1ae751834a0f_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_94ec2171b64c41ef04916c6f76f37d50cd31e657642113b373fb425d06b944f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ec2171b64c41ef04916c6f76f37d50cd31e657642113b373fb425d06b944f3->enter($__internal_94ec2171b64c41ef04916c6f76f37d50cd31e657642113b373fb425d06b944f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_94ec2171b64c41ef04916c6f76f37d50cd31e657642113b373fb425d06b944f3->leave($__internal_94ec2171b64c41ef04916c6f76f37d50cd31e657642113b373fb425d06b944f3_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_5fc9807769500e1b1ea83f8f8d264df92f784d5e98c2a9ba77eb4615b1db0f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc9807769500e1b1ea83f8f8d264df92f784d5e98c2a9ba77eb4615b1db0f76->enter($__internal_5fc9807769500e1b1ea83f8f8d264df92f784d5e98c2a9ba77eb4615b1db0f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_5fc9807769500e1b1ea83f8f8d264df92f784d5e98c2a9ba77eb4615b1db0f76->leave($__internal_5fc9807769500e1b1ea83f8f8d264df92f784d5e98c2a9ba77eb4615b1db0f76_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
";
    }
}
