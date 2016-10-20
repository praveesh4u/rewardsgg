<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_634d28739ba519fe239b9d7a2e1fc5c1e5da71375f61e2b536497fa741db6887 extends Twig_Template
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
        $__internal_7d4efa1fed314cb38d4c04820005c1cf3b08c7e9493cd46a9050e3bd4a1d2919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4efa1fed314cb38d4c04820005c1cf3b08c7e9493cd46a9050e3bd4a1d2919->enter($__internal_7d4efa1fed314cb38d4c04820005c1cf3b08c7e9493cd46a9050e3bd4a1d2919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7d4efa1fed314cb38d4c04820005c1cf3b08c7e9493cd46a9050e3bd4a1d2919->leave($__internal_7d4efa1fed314cb38d4c04820005c1cf3b08c7e9493cd46a9050e3bd4a1d2919_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
