<?php

/* AppBundle:GiveAway:search.html.twig */
class __TwigTemplate_b770dd041a6505f8c2d945a896f2ba058c07de4eb578fc18d456b9275084bd9d extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
   <form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"post\">
    <div>
\t    <label for=\"_name\">Giveaway Name</label>
\t    <input type=\"text\" class=\"form-control\" id=\"name\" name=\"_name\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["_name"]) ? $context["_name"] : null), "html", null, true);
        echo "\" required=\"required\" />
\t</div>
\t<div>
\t<label for=\"sort\">Sort By Price</label>
   \t<select class=\"form-control\" id=\"sort\" name=\"_sort\">
            <option ";
        // line 13
        if (((isset($context["_sort"]) ? $context["_sort"] : null) == "asc")) {
            echo " selected ";
        }
        echo " value=\"asc\">Low to High</option>
            <option ";
        // line 14
        if (((isset($context["_sort"]) ? $context["_sort"] : null) == "desc")) {
            echo " selected ";
        }
        echo " value=\"desc\">High to Low</option>
    </select>
    </div>
    <br>
    <div>
    \t<input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Search\" />
    </div>
</form>

<div>


<br>
";
        // line 27
        if ( !twig_test_empty((isset($context["giveaways"]) ? $context["giveaways"] : null))) {
            // line 28
            echo "    ";
            echo $this->env->getExtension('AppBundle\Twig\TwigExtension')->paginationButtonControls((isset($context["pagination"]) ? $context["pagination"] : null));
            echo "
<table border=1px >
<tr><th>GiveAway</th><th>Slug</th><th>Price</th></tr>
    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["giveaways"]) ? $context["giveaways"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["gives"]) {
                // line 32
                echo "        
        <tr>
            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["gives"], "name", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["gives"], "slug", array()), "html", null, true);
                echo "</td>
            <td>\$";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["gives"], "price", array()), "html", null, true);
                echo "</td>
            
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gives'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "</table>

    ";
            // line 42
            $this->displayBlock('paginationControl', $context, $blocks);
            // line 43
            echo "    ";
            $this->displayBlock('paginationStats', $context, $blocks);
        }
        // line 45
        echo "
</div>
";
    }

    // line 42
    public function block_paginationControl($context, array $blocks = array())
    {
        echo $this->env->getExtension('AppBundle\Twig\TwigExtension')->paginationPageControl((isset($context["pagination"]) ? $context["pagination"] : null));
    }

    // line 43
    public function block_paginationStats($context, array $blocks = array())
    {
        echo $this->env->getExtension('AppBundle\Twig\TwigExtension')->paginationStats((isset($context["pagination"]) ? $context["pagination"] : null));
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
        return array (  131 => 43,  125 => 42,  119 => 45,  115 => 43,  113 => 42,  109 => 40,  99 => 36,  95 => 35,  91 => 34,  87 => 32,  83 => 31,  76 => 28,  74 => 27,  56 => 14,  50 => 13,  42 => 8,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
