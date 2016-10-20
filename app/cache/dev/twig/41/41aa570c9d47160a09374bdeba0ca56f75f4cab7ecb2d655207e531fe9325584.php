<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_b73de66d7ad4086bddab39cbbd75dd824ed7db8786acdc94ad55cd3aef96ded1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af8b9e7f7654a861bc52dab8995929ff3f7c3cf2b61ebe56e206204163642531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8b9e7f7654a861bc52dab8995929ff3f7c3cf2b61ebe56e206204163642531->enter($__internal_af8b9e7f7654a861bc52dab8995929ff3f7c3cf2b61ebe56e206204163642531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_af8b9e7f7654a861bc52dab8995929ff3f7c3cf2b61ebe56e206204163642531->leave($__internal_af8b9e7f7654a861bc52dab8995929ff3f7c3cf2b61ebe56e206204163642531_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_068b4e6e262ba45977843d7e28138b852895404b9e704211b200936e5e231663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068b4e6e262ba45977843d7e28138b852895404b9e704211b200936e5e231663->enter($__internal_068b4e6e262ba45977843d7e28138b852895404b9e704211b200936e5e231663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_068b4e6e262ba45977843d7e28138b852895404b9e704211b200936e5e231663->leave($__internal_068b4e6e262ba45977843d7e28138b852895404b9e704211b200936e5e231663_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    public function getSource()
    {
        return "{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
";
    }
}
