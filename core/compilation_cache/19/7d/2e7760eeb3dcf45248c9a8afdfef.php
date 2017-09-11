<?php

/* media_manager.html */
class __TwigTemplate_197d2e7760eeb3dcf45248c9a8afdfef extends Twig_Template
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
        echo "<ol class=\"breadcrumb\">
    <li><a href=\"#\">two.loc</a></li>
    <li><a href=\"#\">media_manager</a></li>
</ol>   


<div class=\"alert alert-warning\" role=\"alert\">
    Media Manager
</div>



<ul class=\"nav nav-tabs\" role=\"tablist\">
    <li role=\"presentation\" class=\"active\"><a href=\"#tab1\" role=\"tab\" data-toggle=\"tab\">Media Explorer</a></li>
    <li role=\"presentation\"><a href=\"#tab2\" role=\"tab\" data-toggle=\"tab\">Load Media Content</a></li>
    <li role=\"presentation\"><a href=\"#tab3\" role=\"tab\" data-toggle=\"tab\">SEPULENIE</a></li>
</ul>
<div class=\"tab-content\">
    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"tab1\">
       
      <div class=\"media_monitor\">
    
          
          
      </div> 
       
     
    </div>
    <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab2\">
        Устройства для сепуления.
    </div>
    <div role=\"tabpanel\" class=\"tab-pane\" id=\"tab3\">
        Занятие ардритов с планеты Энтеропия.
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "media_manager.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
