<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_166a7c7e91aca10a76161c07951034806b6f50bfc2c3c4e0f5676338ea2f5590 extends Twig_Template
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
        $__internal_a99c5f96f2777f1679bfd8f9b9ae946d0b240e57ef92709f2751640a1f9dd086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99c5f96f2777f1679bfd8f9b9ae946d0b240e57ef92709f2751640a1f9dd086->enter($__internal_a99c5f96f2777f1679bfd8f9b9ae946d0b240e57ef92709f2751640a1f9dd086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_a99c5f96f2777f1679bfd8f9b9ae946d0b240e57ef92709f2751640a1f9dd086->leave($__internal_a99c5f96f2777f1679bfd8f9b9ae946d0b240e57ef92709f2751640a1f9dd086_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
