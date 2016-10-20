<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_daeb20f314335447e44f51631e6de8eda5538e62d6ce5f78705718c9ec484de9 extends Twig_Template
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
        $__internal_c39038a08aa1c6487247280612da413b7235633dc064342f6fc539d8c62a46a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39038a08aa1c6487247280612da413b7235633dc064342f6fc539d8c62a46a2->enter($__internal_c39038a08aa1c6487247280612da413b7235633dc064342f6fc539d8c62a46a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c39038a08aa1c6487247280612da413b7235633dc064342f6fc539d8c62a46a2->leave($__internal_c39038a08aa1c6487247280612da413b7235633dc064342f6fc539d8c62a46a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
