<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_1c060e122929175594c410407f3950de75f6b27ddeed443e88a601ae2a41e09e extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19cb26db517960452ee25eb65b9157f3e91f559b1cf31b3276e2b7890e5910a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cb26db517960452ee25eb65b9157f3e91f559b1cf31b3276e2b7890e5910a5->enter($__internal_19cb26db517960452ee25eb65b9157f3e91f559b1cf31b3276e2b7890e5910a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19cb26db517960452ee25eb65b9157f3e91f559b1cf31b3276e2b7890e5910a5->leave($__internal_19cb26db517960452ee25eb65b9157f3e91f559b1cf31b3276e2b7890e5910a5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}
";
    }
}
