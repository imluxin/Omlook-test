<?php

/* OmlookFaqBundle:Category:create.html.twig */
class __TwigTemplate_67b63ba2622630b8576d67b51b13803c extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "New category of questions";
    }

    // line 5
    public function block_left_bar($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"span12\">
\t\t<h1>Create a new category of questions</h1>
\t\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("category_create");
        echo "\" method=\"post\" id=\"cat-form\">
\t\t\t";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
\t\t\t";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'label');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget');
        echo "
\t\t\t
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
\t\t\t<br>
\t\t\t<input type=\"submit\" class=\"btn btn-primary\" name=\"submit\" value=\"Confirm\" />
\t\t\t<a class=\"btn btn-inverse\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("category_index");
        echo "\">Cancel</a>
\t\t</form>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "OmlookFaqBundle:Category:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  57 => 12,  50 => 10,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
