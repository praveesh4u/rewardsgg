<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_7461074c69085ffedd66a3962634bbe503da279698797d1963357b5fce051f84 extends Twig_Template
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
        $__internal_d34e7c7354e3fc0da40f5956158e0404a6ef0ba38e723d49942fa5e74e729d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34e7c7354e3fc0da40f5956158e0404a6ef0ba38e723d49942fa5e74e729d55->enter($__internal_d34e7c7354e3fc0da40f5956158e0404a6ef0ba38e723d49942fa5e74e729d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_d34e7c7354e3fc0da40f5956158e0404a6ef0ba38e723d49942fa5e74e729d55->leave($__internal_d34e7c7354e3fc0da40f5956158e0404a6ef0ba38e723d49942fa5e74e729d55_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
        return "{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
";
    }
}
