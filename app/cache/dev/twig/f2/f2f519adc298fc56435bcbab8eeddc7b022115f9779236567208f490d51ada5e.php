<?php

/* AppBundle:GiveAway:search.html.twig */
class __TwigTemplate_dce1dbe945b06415f30f9acf75274d9d37460e99d16a724c4d30f1d0bc941850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:GiveAway:search.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'paginationControl' => array($this, 'block_paginationControl'),
            'paginationStats' => array($this, 'block_paginationStats'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0d01275f237ef65b72345922a8df76ac7981aab512d409af34e6b1cbf62e41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d01275f237ef65b72345922a8df76ac7981aab512d409af34e6b1cbf62e41b->enter($__internal_a0d01275f237ef65b72345922a8df76ac7981aab512d409af34e6b1cbf62e41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:GiveAway:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d01275f237ef65b72345922a8df76ac7981aab512d409af34e6b1cbf62e41b->leave($__internal_a0d01275f237ef65b72345922a8df76ac7981aab512d409af34e6b1cbf62e41b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95e76fafc87be9b143fab49a9953b94f2b1d691a2b2211db03ff40ef96473e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e76fafc87be9b143fab49a9953b94f2b1d691a2b2211db03ff40ef96473e43->enter($__internal_95e76fafc87be9b143fab49a9953b94f2b1d691a2b2211db03ff40ef96473e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
   <form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
    <div>
\t    <label for=\"_name\">Giveaway Name</label>
\t    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"_name\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["_name"]) ? $context["_name"] : $this->getContext($context, "_name")), "html", null, true);
        echo "\" required=\"required\" />
\t</div>
\t<div>
\t<label for=\"sort\">Sort By Price</label>
   \t<select class=\"form-control\" id=\"sort\" name=\"_sort\">
            <option default value=\"\" >Please select order</option>
            <option ";
        // line 14
        if (((isset($context["_sort"]) ? $context["_sort"] : $this->getContext($context, "_sort")) == "ASC")) {
            echo " selected ";
        }
        echo " value=\"ASC\">Low to High</option>
            <option ";
        // line 15
        if (((isset($context["_sort"]) ? $context["_sort"] : $this->getContext($context, "_sort")) == "DESC")) {
            echo " selected ";
        }
        echo " value=\"DESC\">High to Low</option>
    </select>
    </div>
    <br>
    <div>
    \t<input class=\"btn btn-default\" type=\"submit\" id=\"_submit\"  value=\"Search\" />
    \t<a class=\"btn btn-danger\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\">Reset</a>
    </div>
</form>

<div>


<br>
";
        // line 29
        if ((twig_length_filter($this->env, (isset($context["giveaways"]) ? $context["giveaways"] : $this->getContext($context, "giveaways"))) > 0)) {
            // line 30
            echo "    <div class=\"row\">

    </div>
    <table class=\"table table-bordered table-striped table-condensed\" >
        <thead>";
            // line 34
            echo $this->env->getExtension('AppBundle\Twig\TwigExtension')->paginationTableHeader((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            echo "</thead>
        <tbody>
        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["giveaways"]) ? $context["giveaways"] : $this->getContext($context, "giveaways")));
            foreach ($context['_seq'] as $context["_key"] => $context["gives"]) {
                // line 37
                echo "            <tr>
                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["gives"], "id", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["gives"], "name", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["gives"], "price", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["gives"], "slug", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gives'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </tbody>
    </table>
    <div class=\"row\" style=\"margin-top:20px;\">

    </div>

    ";
            // line 50
            $this->displayBlock('paginationControl', $context, $blocks);
            // line 51
            echo "    ";
            $this->displayBlock('paginationStats', $context, $blocks);
        }
        // line 53
        echo "
</div>
";
        
        $__internal_95e76fafc87be9b143fab49a9953b94f2b1d691a2b2211db03ff40ef96473e43->leave($__internal_95e76fafc87be9b143fab49a9953b94f2b1d691a2b2211db03ff40ef96473e43_prof);

    }

    // line 50
    public function block_paginationControl($context, array $blocks = array())
    {
        $__internal_8d81a86938498fb51ead79a17090335497752f9a7a48977d588ec34761342100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d81a86938498fb51ead79a17090335497752f9a7a48977d588ec34761342100->enter($__internal_8d81a86938498fb51ead79a17090335497752f9a7a48977d588ec34761342100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginationControl"));

        echo $this->env->getExtension('AppBundle\Twig\TwigExtension')->paginationPageControl((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        
        $__internal_8d81a86938498fb51ead79a17090335497752f9a7a48977d588ec34761342100->leave($__internal_8d81a86938498fb51ead79a17090335497752f9a7a48977d588ec34761342100_prof);

    }

    // line 51
    public function block_paginationStats($context, array $blocks = array())
    {
        $__internal_9521b76ced24d98fb8791fe719bc629bf2414701cdcd5e53e4bec82f67fcd70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9521b76ced24d98fb8791fe719bc629bf2414701cdcd5e53e4bec82f67fcd70a->enter($__internal_9521b76ced24d98fb8791fe719bc629bf2414701cdcd5e53e4bec82f67fcd70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginationStats"));

        echo $this->env->getExtension('AppBundle\Twig\TwigExtension')->paginationStats((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        
        $__internal_9521b76ced24d98fb8791fe719bc629bf2414701cdcd5e53e4bec82f67fcd70a->leave($__internal_9521b76ced24d98fb8791fe719bc629bf2414701cdcd5e53e4bec82f67fcd70a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:GiveAway:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 51,  152 => 50,  143 => 53,  139 => 51,  137 => 50,  129 => 44,  120 => 41,  116 => 40,  112 => 39,  108 => 38,  105 => 37,  101 => 36,  96 => 34,  90 => 30,  88 => 29,  77 => 21,  66 => 15,  60 => 14,  51 => 8,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block body %}

   <form action=\"{{path(\"search\")}}\" method=\"get\">
    <div>
\t    <label for=\"_name\">Giveaway Name</label>
\t    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"_name\" value=\"{{_name}}\" required=\"required\" />
\t</div>
\t<div>
\t<label for=\"sort\">Sort By Price</label>
   \t<select class=\"form-control\" id=\"sort\" name=\"_sort\">
            <option default value=\"\" >Please select order</option>
            <option {% if (_sort == 'ASC') %} selected {% endif %} value=\"ASC\">Low to High</option>
            <option {% if (_sort == 'DESC') %} selected {% endif %} value=\"DESC\">High to Low</option>
    </select>
    </div>
    <br>
    <div>
    \t<input class=\"btn btn-default\" type=\"submit\" id=\"_submit\"  value=\"Search\" />
    \t<a class=\"btn btn-danger\" href=\"{{ path(\"search\") }}\">Reset</a>
    </div>
</form>

<div>


<br>
{% if giveaways|length >0  %}
    <div class=\"row\">

    </div>
    <table class=\"table table-bordered table-striped table-condensed\" >
        <thead>{{ pagination|paginationTableHeader|raw }}</thead>
        <tbody>
        {% for gives in giveaways %}
            <tr>
                <td>{{gives.id}}</td>
                <td>{{ gives.name }}</td>
                <td>{{ gives.price }}</td>
                <td>{{ gives.slug }}</td>
            </tr>
        {% endfor  %}
        </tbody>
    </table>
    <div class=\"row\" style=\"margin-top:20px;\">

    </div>

    {% block paginationControl %}{{ pagination|paginationPageControl|raw }}{% endblock %}
    {% block paginationStats %}{{ pagination|paginationStats|raw }}{% endblock %}
{% endif %}

</div>
{% endblock body %}";
    }
}
