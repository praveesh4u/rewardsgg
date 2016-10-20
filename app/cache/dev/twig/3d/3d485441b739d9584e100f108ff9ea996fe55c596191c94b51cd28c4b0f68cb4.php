<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_df479b7c660588d17ae359a8b5754cf5c583720ba7e1411c2b9f8d32ddb2c2ad extends Twig_Template
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
        $__internal_3ebe1211df319758791e18f6d0ed370e63e0ddf9f80249fced67d5473169d228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebe1211df319758791e18f6d0ed370e63e0ddf9f80249fced67d5473169d228->enter($__internal_3ebe1211df319758791e18f6d0ed370e63e0ddf9f80249fced67d5473169d228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3ebe1211df319758791e18f6d0ed370e63e0ddf9f80249fced67d5473169d228->leave($__internal_3ebe1211df319758791e18f6d0ed370e63e0ddf9f80249fced67d5473169d228_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
