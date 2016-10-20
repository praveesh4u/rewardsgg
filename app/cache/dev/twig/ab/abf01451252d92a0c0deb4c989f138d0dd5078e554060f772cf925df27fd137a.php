<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_7b1b23b89d681de2d9c84985e61d4da0483b88762267ab5466eb3d26bb09ee8a extends Twig_Template
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
        $__internal_9fc18d3dd84068d5e30e8d2c622df52bd39800172f4532650062dd7e5b305dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc18d3dd84068d5e30e8d2c622df52bd39800172f4532650062dd7e5b305dc9->enter($__internal_9fc18d3dd84068d5e30e8d2c622df52bd39800172f4532650062dd7e5b305dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9fc18d3dd84068d5e30e8d2c622df52bd39800172f4532650062dd7e5b305dc9->leave($__internal_9fc18d3dd84068d5e30e8d2c622df52bd39800172f4532650062dd7e5b305dc9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}
";
    }
}
