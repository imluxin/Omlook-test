<?php

/* OmlookFaqBundle:Default:category.html.twig */
class __TwigTemplate_d41d1d46b16013e61d25a00dc9a8898e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'left_bar' => array($this, 'block_left_bar'),
            'right_bar' => array($this, 'block_right_bar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["cat_id"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "id"), "method");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "cat_name"), "html", null, true);
        echo " - Category";
    }

    // line 5
    public function block_left_bar($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        $this->env->loadTemplate("OmlookFaqBundle:Default:_leftbar.html.twig")->display(array_merge($context, array("cats" => $this->getContext($context, "cats"))));
    }

    // line 9
    public function block_right_bar($context, array $blocks = array())
    {
        // line 10
        echo "\t<div class=\"span9\">
\t\t<h1>Questions of ";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "cat_name"), "html", null, true);
        echo "</h1>
\t\t";
        // line 12
        if (twig_test_empty($this->getContext($context, "qts"))) {
            // line 13
            echo "\t\t\t<div class=\"alert\">
\t\t\t  <strong>Warning!</strong> There is no question exist.
\t\t\t</div>
\t\t";
        } else {
            // line 17
            echo "\t\t\t<div class=\"accordion\" id=\"accordion2\">
\t\t\t\t";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "qts"));
            foreach ($context['_seq'] as $context["k"] => $context["q"]) {
                if ($this->getAttribute($this->getContext($context, "q"), "visible")) {
                    // line 19
                    echo "\t\t\t\t  <div class=\"accordion-group\">
\t\t\t\t    <div class=\"accordion-heading\">
\t\t\t\t      <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "id"), "html", null, true);
                    echo "\">
\t\t\t\t        ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "content"), "html", null, true);
                    echo "
\t\t\t\t      \t<span class=\"pull-right\">";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "username"), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "updatedAt"), "Y-m-d H:i"), "html", null, true);
                    echo "</span>
\t\t\t\t      </a>
\t\t\t\t    </div>
\t\t\t\t    <div id=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "id"), "html", null, true);
                    echo "\" class=\"accordion-body collapse\">
\t\t\t\t      <div class=\"accordion-inner\">
\t\t\t\t      \t";
                    // line 28
                    if (twig_test_empty($this->getAttribute($this->getContext($context, "q"), "answers"))) {
                        // line 29
                        echo "\t\t\t\t      \t\t<div class=\"alert alert-danger\">
\t\t\t\t      \t\t\tNo answer exists.
\t\t\t\t      \t\t</div>
\t\t\t\t      \t";
                    } else {
                        // line 33
                        echo "\t\t\t\t\t        ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "q"), "answers"));
                        foreach ($context['_seq'] as $context["k"] => $context["a"]) {
                            if ($this->getAttribute($this->getContext($context, "a"), "visible")) {
                                // line 34
                                echo "\t\t\t\t\t        \t<div class=\"alert alert-info\">
\t\t\t\t\t        \t\t";
                                // line 35
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "content"), "html", null, true);
                                echo "
\t\t\t\t\t        \t\t<hr>
\t\t\t\t\t        \t\t<div class=\"text-right\">";
                                // line 37
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "username"), "html", null, true);
                                echo " - ";
                                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "a"), "updatedAt"), "Y-m-d H:i"), "html", null, true);
                                echo "</div>
\t\t\t\t\t        \t</div>
\t\t\t\t\t        ";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['a'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "\t\t\t\t\t        <script type=\"text/javascript\">
\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t\tlen = \$(\"#";
                        // line 42
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "id"), "html", null, true);
                        echo " .alert-info\").length;
\t\t\t\t\t\t\t\t\tif (len == '0'){
\t\t\t\t\t\t\t\t\t\t\$(\"#";
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "q"), "id"), "html", null, true);
                        echo " .accordion-inner\").append(\"<div class='alert alert-danger'>No answer exists.</div>\");
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t});
\t\t\t\t\t        </script>
\t\t\t\t        ";
                    }
                    // line 49
                    echo "\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t\t\t\t";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['q'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t</div>
\t\t";
        }
        // line 55
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "OmlookFaqBundle:Default:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 55,  159 => 53,  149 => 49,  141 => 44,  136 => 42,  132 => 40,  120 => 37,  115 => 35,  112 => 34,  106 => 33,  100 => 29,  98 => 28,  93 => 26,  85 => 23,  81 => 22,  77 => 21,  73 => 19,  68 => 18,  65 => 17,  59 => 13,  57 => 12,  53 => 11,  50 => 10,  47 => 9,  42 => 6,  39 => 5,  32 => 3,  27 => 2,);
    }
}
