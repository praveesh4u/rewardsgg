<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b9875b445b7f56cd2c4661dcf04a24899ef77c6fbe111ecd7d6eea3216e8cef5 extends Twig_Template
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
        $__internal_44a65ab377080c1d2c563849a531827981d02e19856b9bee3cf2a59f1b0dc239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a65ab377080c1d2c563849a531827981d02e19856b9bee3cf2a59f1b0dc239->enter($__internal_44a65ab377080c1d2c563849a531827981d02e19856b9bee3cf2a59f1b0dc239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_44a65ab377080c1d2c563849a531827981d02e19856b9bee3cf2a59f1b0dc239->leave($__internal_44a65ab377080c1d2c563849a531827981d02e19856b9bee3cf2a59f1b0dc239_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
