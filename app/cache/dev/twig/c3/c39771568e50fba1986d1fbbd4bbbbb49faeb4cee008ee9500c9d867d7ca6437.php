<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e9a5c0f2cc3b0cad00d144d986c7de6b090db4f30b09324311ae702ed606e774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31aac00979707b69b551ac5d113dbf5e1c312a17de120658d8ef6ce3b42483a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31aac00979707b69b551ac5d113dbf5e1c312a17de120658d8ef6ce3b42483a7->enter($__internal_31aac00979707b69b551ac5d113dbf5e1c312a17de120658d8ef6ce3b42483a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_31aac00979707b69b551ac5d113dbf5e1c312a17de120658d8ef6ce3b42483a7->leave($__internal_31aac00979707b69b551ac5d113dbf5e1c312a17de120658d8ef6ce3b42483a7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e6546144bbfa539e5412f61945a8b2f6c9f97414418dadf06f97f1f43af45c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6546144bbfa539e5412f61945a8b2f6c9f97414418dadf06f97f1f43af45c3->enter($__internal_2e6546144bbfa539e5412f61945a8b2f6c9f97414418dadf06f97f1f43af45c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2e6546144bbfa539e5412f61945a8b2f6c9f97414418dadf06f97f1f43af45c3->leave($__internal_2e6546144bbfa539e5412f61945a8b2f6c9f97414418dadf06f97f1f43af45c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
