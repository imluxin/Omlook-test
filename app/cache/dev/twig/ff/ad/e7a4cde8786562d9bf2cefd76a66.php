<?php

/* ::base.html.twig */
class __TwigTemplate_ffade7a4cde8786562d9bf2cefd76a66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'left_bar' => array($this, 'block_left_bar'),
            'right_bar' => array($this, 'block_right_bar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - FAQ - OMLOOK</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width\">
        
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 25
        echo "    \t<div class=\"navbar navbar-inverse navbar-fixed-top\">
\t    \t<div class=\"navbar-inner\">
\t        \t<div class=\"container\">
\t          \t\t<button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t            \t\t<span class=\"icon-bar\"></span>
\t            \t\t<span class=\"icon-bar\"></span>
\t            \t\t<span class=\"icon-bar\"></span>
\t          \t\t</button>
\t          \t\t<a class=\"brand\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("omlook_faq_homepage");
        echo "\">Omlook FAQ</a>
\t          \t\t<div class=\"nav-collapse collapse\">
\t            \t\t<ul class=\"nav\">
\t            \t\t\t";
        // line 36
        $context["controller"] = $this->env->getExtension('lx_extension')->getControllerName();
        // line 37
        echo "\t              \t\t\t<li class=\"";
        if (($this->getContext($context, "controller") == "default")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("omlook_faq_homepage");
        echo "\">Home</a></li>
\t              \t\t\t<li class=\"dropdown ";
        // line 38
        if (twig_in_filter($this->getContext($context, "controller"), array(0 => "question", 1 => "category", 2 => "answer"))) {
            echo "active";
        }
        echo "\">
\t                  \t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">FAQ Admin <b class=\"caret\"></b></a>
\t                  \t\t\t<ul class=\"dropdown-menu\">
\t                    \t\t\t<li class=\"";
        // line 41
        if (($this->getContext($context, "controller") == "question")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("question_index");
        echo "\">Question Admin</a></li>
\t                    \t\t\t<li class=\"";
        // line 42
        if (($this->getContext($context, "controller") == "category")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("category_index");
        echo "\">Category Admin</a></li>
\t                  \t\t\t</ul>
\t                \t\t</li>
\t            \t\t</ul>
\t          \t\t</div><!--/.nav-collapse -->
        \t\t</div>
      \t\t</div>
    \t</div>
    \t
    \t<div class=\"container\">
      \t\t<div class=\"row\">
\t\t        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "        \t</div>
\t      \t<hr>
\t\t\t  
\t\t    <footer>
\t\t    \t";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "\t\t    </footer>
      \t</div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        \t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/omlookfaq/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\">
\t        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/omlookfaq/bootstrap/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/omlookfaq/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "        \t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/omlookfaq/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
        \t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/omlookfaq/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "\t\t        ";
        $this->displayBlock('left_bar', $context, $blocks);
        // line 55
        echo "\t\t        ";
        $this->displayBlock('right_bar', $context, $blocks);
        // line 56
        echo "\t\t\t\t";
    }

    // line 54
    public function block_left_bar($context, array $blocks = array())
    {
    }

    // line 55
    public function block_right_bar($context, array $blocks = array())
    {
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "\t\t        \t<p>© Luxin YAO - <a mailto=\"luxin.yao@hotmail.com\">luxin.yao@hotmail.com</a></p>
\t\t        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 62,  195 => 61,  190 => 55,  185 => 54,  181 => 56,  178 => 55,  175 => 54,  172 => 53,  166 => 18,  161 => 17,  158 => 16,  152 => 13,  148 => 12,  143 => 11,  140 => 10,  135 => 5,  127 => 64,  125 => 61,  119 => 57,  117 => 53,  99 => 42,  91 => 41,  83 => 38,  74 => 37,  72 => 36,  66 => 33,  56 => 25,  45 => 16,  26 => 1,  163 => 55,  159 => 53,  149 => 49,  141 => 44,  136 => 42,  132 => 40,  120 => 37,  115 => 35,  112 => 34,  106 => 33,  100 => 29,  98 => 28,  93 => 26,  85 => 23,  81 => 22,  77 => 21,  73 => 19,  68 => 18,  65 => 17,  59 => 13,  57 => 12,  53 => 11,  50 => 21,  47 => 20,  42 => 15,  39 => 10,  32 => 5,  27 => 2,);
    }
}
