<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_8efddc144dee42ad70c59fd249f21235558c583273ed0d1d926d844c850191cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41444e7651efcbbe4a465dd8c262d15281b6417ea69c579eb1a6a1b1e111ce1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41444e7651efcbbe4a465dd8c262d15281b6417ea69c579eb1a6a1b1e111ce1c->enter($__internal_41444e7651efcbbe4a465dd8c262d15281b6417ea69c579eb1a6a1b1e111ce1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41444e7651efcbbe4a465dd8c262d15281b6417ea69c579eb1a6a1b1e111ce1c->leave($__internal_41444e7651efcbbe4a465dd8c262d15281b6417ea69c579eb1a6a1b1e111ce1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb7abe6228628e3248f81a2023b82ccd782287ee02a79877b42dca58f362db0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7abe6228628e3248f81a2023b82ccd782287ee02a79877b42dca58f362db0d->enter($__internal_bb7abe6228628e3248f81a2023b82ccd782287ee02a79877b42dca58f362db0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_bb7abe6228628e3248f81a2023b82ccd782287ee02a79877b42dca58f362db0d->leave($__internal_bb7abe6228628e3248f81a2023b82ccd782287ee02a79877b42dca58f362db0d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
