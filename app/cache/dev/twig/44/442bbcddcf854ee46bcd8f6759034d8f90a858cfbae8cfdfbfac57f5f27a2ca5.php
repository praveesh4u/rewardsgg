<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_746c356744329e2941b4be564ad1cdb55eaa0264f4e7dd2200658769115002f6 extends Twig_Template
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
        $__internal_198bb2ccbbe837bfe19fa880f73ae0cdc195d00e6a191acd30c3049e04897ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198bb2ccbbe837bfe19fa880f73ae0cdc195d00e6a191acd30c3049e04897ec9->enter($__internal_198bb2ccbbe837bfe19fa880f73ae0cdc195d00e6a191acd30c3049e04897ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_198bb2ccbbe837bfe19fa880f73ae0cdc195d00e6a191acd30c3049e04897ec9->leave($__internal_198bb2ccbbe837bfe19fa880f73ae0cdc195d00e6a191acd30c3049e04897ec9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{{ revision.timestamp|date }}
";
    }
}
