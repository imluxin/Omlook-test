<?php

/* OmlookFaqBundle:Category:index.html.twig */
class __TwigTemplate_975760818810e8c5c62da0aa34a6bdb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'left_bar' => array($this, 'block_left_bar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Categories of questions";
    }

    // line 4
    public function block_left_bar($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"span12\">
\t\t<h1>List of categories of questions</h1>
\t\t";
        // line 7
        if (twig_test_empty($this->getContext($context, "cats"))) {
            // line 8
            echo "\t\t\t<div class=\"alert\">
\t\t\t  <strong>Warning!</strong> There is no category exist.
\t\t\t</div>
\t\t";
        } else {
            // line 12
            echo "\t\t
\t\t";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "cat_success"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "\t\t\t<div class=\"alert alert-success\">
\t\t\t  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t  <strong>Well done!</strong> ";
                // line 16
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t
\t\t<table class=\"table table-striped span6\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Name</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cats"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["k"] => $context["cat"]) {
                // line 29
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cat"), "name"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_edit", array("id" => $this->getAttribute($this->getContext($context, "cat"), "id"))), "html", null, true);
                echo "\" class=\"btn btn-primary\">Edit</a> 
\t\t\t\t\t\t\t<a href=\"#modal-";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "cat"), "id"), "html", null, true);
                echo "\" role=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\">Delete</a>
\t\t\t\t\t\t\t";
                // line 34
                $this->env->loadTemplate("OmlookFaqBundle::delete_confirm.html.twig")->display(array_merge($context, array("modal_id" => ("modal-" . $this->getAttribute($this->getContext($context, "cat"), "id")), "url" => $this->env->getExtension('routing')->getPath("category_delete", array("id" => $this->getAttribute($this->getContext($context, "cat"), "id"))))));
                // line 35
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t</tbody>
\t\t</table>
\t\t
\t\t";
        }
        // line 42
        echo "\t\t<div class=\"span12\">
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("category_create");
        echo "\">Add a new category</a>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "OmlookFaqBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  138 => 42,  132 => 38,  116 => 35,  114 => 34,  110 => 33,  106 => 32,  101 => 30,  98 => 29,  81 => 28,  70 => 19,  61 => 16,  57 => 14,  53 => 13,  50 => 12,  44 => 8,  42 => 7,  38 => 5,  35 => 4,  29 => 2,);
    }
}
