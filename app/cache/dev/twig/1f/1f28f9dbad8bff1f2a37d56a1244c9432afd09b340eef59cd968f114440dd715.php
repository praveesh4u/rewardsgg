<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_2f5be404afb8122679d44b466c8ac25e2fd10ee9f4762b74e8e143f9d75e9251 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47578fb66a7f76ecaccb56fc8f96b34ce827bd7b0bb69599dadf9e2561a4a1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47578fb66a7f76ecaccb56fc8f96b34ce827bd7b0bb69599dadf9e2561a4a1d0->enter($__internal_47578fb66a7f76ecaccb56fc8f96b34ce827bd7b0bb69599dadf9e2561a4a1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_47578fb66a7f76ecaccb56fc8f96b34ce827bd7b0bb69599dadf9e2561a4a1d0->leave($__internal_47578fb66a7f76ecaccb56fc8f96b34ce827bd7b0bb69599dadf9e2561a4a1d0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
";
    }
}
