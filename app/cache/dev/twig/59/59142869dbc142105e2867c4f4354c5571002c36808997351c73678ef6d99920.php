<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_87c465930420cafadf71665c3bdf84d1d154c914791ee53bc69b1847eb48c870 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a5ea3aa3bebe2803e4c925d17ca1ebc67b502cf4d2eea94b0668417417ba76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5ea3aa3bebe2803e4c925d17ca1ebc67b502cf4d2eea94b0668417417ba76b->enter($__internal_4a5ea3aa3bebe2803e4c925d17ca1ebc67b502cf4d2eea94b0668417417ba76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a5ea3aa3bebe2803e4c925d17ca1ebc67b502cf4d2eea94b0668417417ba76b->leave($__internal_4a5ea3aa3bebe2803e4c925d17ca1ebc67b502cf4d2eea94b0668417417ba76b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
";
    }
}
