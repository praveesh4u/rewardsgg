<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0e9ae76bff80105665872e9ce782911fe2bd32c3c2711578c29e5391d3a6c81d extends Twig_Template
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
        $__internal_06881a9207daaa7c3b20bffc4c6b2a0ac2540de2ec749b6f3fdc2bacdb560c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06881a9207daaa7c3b20bffc4c6b2a0ac2540de2ec749b6f3fdc2bacdb560c75->enter($__internal_06881a9207daaa7c3b20bffc4c6b2a0ac2540de2ec749b6f3fdc2bacdb560c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_06881a9207daaa7c3b20bffc4c6b2a0ac2540de2ec749b6f3fdc2bacdb560c75->leave($__internal_06881a9207daaa7c3b20bffc4c6b2a0ac2540de2ec749b6f3fdc2bacdb560c75_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
