<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_90fede5579901f785cb03f1618c74f1baae68dbad0de1d50f8d7fc7bce6fa9da extends Twig_Template
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
        $__internal_bfff4bd559b18b83ddd4dd2f52c8beade6f54ea50165aeb6b54fe5cb907eb78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfff4bd559b18b83ddd4dd2f52c8beade6f54ea50165aeb6b54fe5cb907eb78d->enter($__internal_bfff4bd559b18b83ddd4dd2f52c8beade6f54ea50165aeb6b54fe5cb907eb78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bfff4bd559b18b83ddd4dd2f52c8beade6f54ea50165aeb6b54fe5cb907eb78d->leave($__internal_bfff4bd559b18b83ddd4dd2f52c8beade6f54ea50165aeb6b54fe5cb907eb78d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
