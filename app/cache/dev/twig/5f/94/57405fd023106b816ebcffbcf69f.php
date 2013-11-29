<?php

/* OmlookFaqBundle::delete_confirm.html.twig */
class __TwigTemplate_5f9457405fd023106b816ebcffbcf69f extends Twig_Template
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
        // line 2
        echo "<div id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "modal_id"), "html", null, true);
        echo "\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-body\">
    <p>Are you sure?</p>
  </div>
  <div class=\"modal-footer\">
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\" class=\"btn btn-danger\">Delete</a>
    <a href=\"#\" class=\"btn btn-inverse\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancel</a>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "OmlookFaqBundle::delete_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  19 => 2,  141 => 43,  138 => 42,  132 => 38,  116 => 35,  114 => 34,  110 => 33,  106 => 32,  101 => 30,  98 => 29,  81 => 28,  70 => 19,  61 => 16,  57 => 14,  53 => 13,  50 => 12,  44 => 8,  42 => 7,  38 => 5,  35 => 4,  29 => 2,);
    }
}
