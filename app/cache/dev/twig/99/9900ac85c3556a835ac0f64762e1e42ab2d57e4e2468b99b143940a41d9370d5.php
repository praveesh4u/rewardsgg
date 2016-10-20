<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4b6234061e9f0eaae21d788c4129f7b11edecc7210295cd4de3b608622c32f81 extends Twig_Template
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
        $__internal_b6cbaae1b981d9aa0bd68034001a1d473181b350a28523afb8811c5dc6846ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cbaae1b981d9aa0bd68034001a1d473181b350a28523afb8811c5dc6846ce8->enter($__internal_b6cbaae1b981d9aa0bd68034001a1d473181b350a28523afb8811c5dc6846ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b6cbaae1b981d9aa0bd68034001a1d473181b350a28523afb8811c5dc6846ce8->leave($__internal_b6cbaae1b981d9aa0bd68034001a1d473181b350a28523afb8811c5dc6846ce8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
