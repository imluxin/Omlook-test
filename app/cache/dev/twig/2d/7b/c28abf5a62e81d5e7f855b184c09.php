<?php

/* OmlookFaqBundle:Default:_leftbar.html.twig */
class __TwigTemplate_2d7bc28abf5a62e81d5e7f855b184c09 extends Twig_Template
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
        // line 1
        $context["cat_id"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "id"), "method");
        // line 2
        echo "        
<div class=\"span3\">
\t<div class=\"well sidebar-nav\">
\t\t<ul class=\"nav nav-list\">
\t\t\t<li class=\"nav-header\">Question category</li>
\t\t\t<li class=\"";
        // line 7
        if (($this->getContext($context, "cat_id") == "all")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("faq_category", array("id" => "all"));
        echo "\">All</a></li>
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cats"));
        foreach ($context['_seq'] as $context["k"] => $context["c"]) {
            // line 9
            echo "\t\t\t\t<li class=\"";
            if (($this->getContext($context, "cat_id") == $this->getAttribute($this->getContext($context, "c"), "id"))) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("faq_category", array("id" => $this->getAttribute($this->getContext($context, "c"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "c"), "name"), "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t</ul>
\t</div>
</div>
      ";
    }

    public function getTemplateName()
    {
        return "OmlookFaqBundle:Default:_leftbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  40 => 9,  36 => 8,  28 => 7,  21 => 2,  19 => 1,  198 => 62,  195 => 61,  190 => 55,  185 => 54,  181 => 56,  178 => 55,  175 => 54,  172 => 53,  166 => 18,  161 => 17,  158 => 16,  152 => 13,  148 => 12,  143 => 11,  140 => 10,  135 => 5,  127 => 64,  125 => 61,  119 => 57,  117 => 53,  99 => 42,  91 => 41,  83 => 38,  74 => 37,  72 => 36,  66 => 33,  56 => 25,  45 => 16,  26 => 1,  163 => 55,  159 => 53,  149 => 49,  141 => 44,  136 => 42,  132 => 40,  120 => 37,  115 => 35,  112 => 34,  106 => 33,  100 => 29,  98 => 28,  93 => 26,  85 => 23,  81 => 22,  77 => 21,  73 => 19,  68 => 18,  65 => 17,  59 => 13,  57 => 12,  53 => 11,  50 => 21,  47 => 20,  42 => 15,  39 => 10,  32 => 5,  27 => 2,);
    }
}
