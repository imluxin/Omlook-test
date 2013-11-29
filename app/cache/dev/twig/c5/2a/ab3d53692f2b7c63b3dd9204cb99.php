<?php

/* OmlookFaqBundle:Default:index.html.twig */
class __TwigTemplate_c52aab3d53692f2b7c63b3dd9204cb99 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 4
    public function block_left_bar($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->env->loadTemplate("OmlookFaqBundle:Default:_leftbar.html.twig")->display(array_merge($context, array("cats" => $this->getContext($context, "cats"))));
    }

    // line 8
    public function block_right_bar($context, array $blocks = array())
    {
        // line 9
        echo "\t<div class=\"span9\">
\t\t<div class=\"hero-unit\">
\t\t\t<h1>Welcome!</h1>
\t\t\t<br>
\t\t\t<p>This is the FAQ system of OMLOOK.</p>
\t\t\t<hr>
\t\t\t<p>
\t\t\t\tPlease choose the category from the left bar to find the questions. 
\t\t\t\t<br>Of course, you can choose 'All' to see all of the questions.
\t\t\t</p>
\t\t\t<hr>
\t\t\t<p>
\t\t\t\tFor create, edit and delete <strong>questions</strong>, you can go to the link 'Question Admin' under 
\t\t\t\tthe menu 'FAQ Admin'. Be carefull when you delete a question, all the answers belong
\t\t\t\tto this question will be deleted too.
\t\t\t</p>
\t\t\t<hr>
\t\t\t<p>
\t\t\t\tFor create, edit and delete <strong>answers</strong>, you can go to the link 'Question Admin' under 
\t\t\t\tthe menu 'FAQ Admin'. Then after each question, you can see the 'View Answer' link.
\t\t\t</p>
\t\t\t<hr>
\t\t\t<p>
\t\t\t\tFor create, edit and delete <strong>the categories of questions</strong>, you can go to the link 'Category Admin' 
\t\t\t\tunder the menu 'FAQ Admin'. Be carefull When you delete a category, the category of all the 
\t\t\t\tquestions belong to this category will be set to 'Not set'.
\t\t\t</p>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "OmlookFaqBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  44 => 8,  39 => 5,  36 => 4,  30 => 2,);
    }
}
