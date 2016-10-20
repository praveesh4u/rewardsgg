<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_8db02ddaf1bd7c57f77ceaf0332da236504cbee4d6eab38817b0b32db1f3b1be extends Twig_Template
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
        $__internal_244c997eccf9141ce1149d668d8fa83f10bdc219047a3403e6b6a82a025726a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244c997eccf9141ce1149d668d8fa83f10bdc219047a3403e6b6a82a025726a9->enter($__internal_244c997eccf9141ce1149d668d8fa83f10bdc219047a3403e6b6a82a025726a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_244c997eccf9141ce1149d668d8fa83f10bdc219047a3403e6b6a82a025726a9->leave($__internal_244c997eccf9141ce1149d668d8fa83f10bdc219047a3403e6b6a82a025726a9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d1623d522cfcb54c7e8b45827ba4b1f4e375e06fdb79f3fec5063576a5dd8529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1623d522cfcb54c7e8b45827ba4b1f4e375e06fdb79f3fec5063576a5dd8529->enter($__internal_d1623d522cfcb54c7e8b45827ba4b1f4e375e06fdb79f3fec5063576a5dd8529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d1623d522cfcb54c7e8b45827ba4b1f4e375e06fdb79f3fec5063576a5dd8529->leave($__internal_d1623d522cfcb54c7e8b45827ba4b1f4e375e06fdb79f3fec5063576a5dd8529_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_056037e8e260c4f762f09581d6149e4186a2c7a12979a537d357563241f1846a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056037e8e260c4f762f09581d6149e4186a2c7a12979a537d357563241f1846a->enter($__internal_056037e8e260c4f762f09581d6149e4186a2c7a12979a537d357563241f1846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_056037e8e260c4f762f09581d6149e4186a2c7a12979a537d357563241f1846a->leave($__internal_056037e8e260c4f762f09581d6149e4186a2c7a12979a537d357563241f1846a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6df16358c3497c878f9df57b41229b7cde02479ee78cad024fd064423554d9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df16358c3497c878f9df57b41229b7cde02479ee78cad024fd064423554d9c1->enter($__internal_6df16358c3497c878f9df57b41229b7cde02479ee78cad024fd064423554d9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6df16358c3497c878f9df57b41229b7cde02479ee78cad024fd064423554d9c1->leave($__internal_6df16358c3497c878f9df57b41229b7cde02479ee78cad024fd064423554d9c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
