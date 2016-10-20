<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_5766b0a75908b3561b259d51d8ffe86e788244217d3e0ba5f34e9f1f9fc5153c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cdfeeacc85103cb26641c2255041d5c46429582b2685af35f2fb0416883c17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdfeeacc85103cb26641c2255041d5c46429582b2685af35f2fb0416883c17f->enter($__internal_4cdfeeacc85103cb26641c2255041d5c46429582b2685af35f2fb0416883c17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cdfeeacc85103cb26641c2255041d5c46429582b2685af35f2fb0416883c17f->leave($__internal_4cdfeeacc85103cb26641c2255041d5c46429582b2685af35f2fb0416883c17f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d5587184bf6decc6b7993f06160747604bf9093fc9d3f8f80c2d30296a55c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5587184bf6decc6b7993f06160747604bf9093fc9d3f8f80c2d30296a55c7c->enter($__internal_4d5587184bf6decc6b7993f06160747604bf9093fc9d3f8f80c2d30296a55c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4d5587184bf6decc6b7993f06160747604bf9093fc9d3f8f80c2d30296a55c7c->leave($__internal_4d5587184bf6decc6b7993f06160747604bf9093fc9d3f8f80c2d30296a55c7c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
