<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_94ac2291061d376a542d8090a3e5a5a88510b982c6fe8a8832aad0886cfa6357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1864e9626a6983bf2ee9302301d8719d7bd93166e627be2a5749cedc85521c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1864e9626a6983bf2ee9302301d8719d7bd93166e627be2a5749cedc85521c0->enter($__internal_e1864e9626a6983bf2ee9302301d8719d7bd93166e627be2a5749cedc85521c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e1864e9626a6983bf2ee9302301d8719d7bd93166e627be2a5749cedc85521c0->leave($__internal_e1864e9626a6983bf2ee9302301d8719d7bd93166e627be2a5749cedc85521c0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_90d0c315584c2f2ca580e08c28bd82101e6b839dbf6b95b68e29ab0e5e037a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d0c315584c2f2ca580e08c28bd82101e6b839dbf6b95b68e29ab0e5e037a86->enter($__internal_90d0c315584c2f2ca580e08c28bd82101e6b839dbf6b95b68e29ab0e5e037a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_90d0c315584c2f2ca580e08c28bd82101e6b839dbf6b95b68e29ab0e5e037a86->leave($__internal_90d0c315584c2f2ca580e08c28bd82101e6b839dbf6b95b68e29ab0e5e037a86_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_60386f3ed122a6819c74e05872ccc633c5187e5c3f903fe7c1be37b828ba1de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60386f3ed122a6819c74e05872ccc633c5187e5c3f903fe7c1be37b828ba1de5->enter($__internal_60386f3ed122a6819c74e05872ccc633c5187e5c3f903fe7c1be37b828ba1de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_60386f3ed122a6819c74e05872ccc633c5187e5c3f903fe7c1be37b828ba1de5->leave($__internal_60386f3ed122a6819c74e05872ccc633c5187e5c3f903fe7c1be37b828ba1de5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7889c96c04bf4d170f3fc206f3b28d5f4587029f79d7af813611c0cf877ae9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7889c96c04bf4d170f3fc206f3b28d5f4587029f79d7af813611c0cf877ae9c9->enter($__internal_7889c96c04bf4d170f3fc206f3b28d5f4587029f79d7af813611c0cf877ae9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7889c96c04bf4d170f3fc206f3b28d5f4587029f79d7af813611c0cf877ae9c9->leave($__internal_7889c96c04bf4d170f3fc206f3b28d5f4587029f79d7af813611c0cf877ae9c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
