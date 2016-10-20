<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0abe1cc4a1d0868882caa28ea654db68b4629cf5ad5031e77af117f1f23f66bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdc71497618a778e757800250d255e286689cb16c8144e51df67fb371fe4bd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc71497618a778e757800250d255e286689cb16c8144e51df67fb371fe4bd7e->enter($__internal_cdc71497618a778e757800250d255e286689cb16c8144e51df67fb371fe4bd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdc71497618a778e757800250d255e286689cb16c8144e51df67fb371fe4bd7e->leave($__internal_cdc71497618a778e757800250d255e286689cb16c8144e51df67fb371fe4bd7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fad38bd83ba04f56e0b9b4a54215dfe052a4f216d82a123daff7f7755ae2f5c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad38bd83ba04f56e0b9b4a54215dfe052a4f216d82a123daff7f7755ae2f5c7->enter($__internal_fad38bd83ba04f56e0b9b4a54215dfe052a4f216d82a123daff7f7755ae2f5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fad38bd83ba04f56e0b9b4a54215dfe052a4f216d82a123daff7f7755ae2f5c7->leave($__internal_fad38bd83ba04f56e0b9b4a54215dfe052a4f216d82a123daff7f7755ae2f5c7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_136338b12536a3817e74f3e47341fa8a3796d8e3d549251019fcff2444ee039b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136338b12536a3817e74f3e47341fa8a3796d8e3d549251019fcff2444ee039b->enter($__internal_136338b12536a3817e74f3e47341fa8a3796d8e3d549251019fcff2444ee039b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_136338b12536a3817e74f3e47341fa8a3796d8e3d549251019fcff2444ee039b->leave($__internal_136338b12536a3817e74f3e47341fa8a3796d8e3d549251019fcff2444ee039b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae0dcddf31dbe7d30f68a5ebd6a3e6d08133cffb8a0c1a15ac077895aa9c5960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0dcddf31dbe7d30f68a5ebd6a3e6d08133cffb8a0c1a15ac077895aa9c5960->enter($__internal_ae0dcddf31dbe7d30f68a5ebd6a3e6d08133cffb8a0c1a15ac077895aa9c5960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ae0dcddf31dbe7d30f68a5ebd6a3e6d08133cffb8a0c1a15ac077895aa9c5960->leave($__internal_ae0dcddf31dbe7d30f68a5ebd6a3e6d08133cffb8a0c1a15ac077895aa9c5960_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
";
    }
}
