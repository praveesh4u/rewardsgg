<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_680f8accd0a0e285368206aa78a0569254a608547313475c580a1042c853a3a5 extends Twig_Template
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
        $__internal_19be68caf347c3cf357c0a634978e25f47293410931d0ce39d9fa7371e5ac0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19be68caf347c3cf357c0a634978e25f47293410931d0ce39d9fa7371e5ac0cc->enter($__internal_19be68caf347c3cf357c0a634978e25f47293410931d0ce39d9fa7371e5ac0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_19be68caf347c3cf357c0a634978e25f47293410931d0ce39d9fa7371e5ac0cc->leave($__internal_19be68caf347c3cf357c0a634978e25f47293410931d0ce39d9fa7371e5ac0cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include 'TwigBundle:Exception:error.xml.twig' %}
";
    }
}
