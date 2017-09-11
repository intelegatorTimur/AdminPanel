<?php

/* home.html */
class __TwigTemplate_5df93d6761b498e5ff0d8aa1e2be4fbf extends Twig_Template
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
        echo "<div class=\"page-header\">
    <h3>Home page</h3>
</div>


<div class=\"alert alert-warning\" role=\"alert\">
    Short statistics
</div>";
    }

    public function getTemplateName()
    {
        return "home.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
