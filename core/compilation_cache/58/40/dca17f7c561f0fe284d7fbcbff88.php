<?php

/* main.html */
class __TwigTemplate_5840dca17f7c561f0fe284d7fbcbff88 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["css"]) ? $context["css"] : null), "html", null, true);
        echo "css/bootstrap.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["css"]) ? $context["css"] : null), "html", null, true);
        echo "css/bootstrap-theme.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["css"]) ? $context["css"] : null), "html", null, true);
        echo "css/font-awesome.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["css"]) ? $context["css"] : null), "html", null, true);
        echo "css/style.css\">
    
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
        echo "js/jquery-3.2.1.min.js\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
        echo "js/bootstrap.js\"></script>
 
    
    
    
</head>
<body>
   <div class=\"left_bk\">
      <div class=\"hello_admin\"><h3>HELLO ADMIN</h3></div>
      <div class=\"menu_box\">
          <ul>
              <li><a href=\"/panel/\">Home</a></li>
              <li><a href=\"/panel/statistics/\">Statistics</a></li>
              <li><a href=\"/panel/static_page/\">Static page</a></li>
              <li><a href=\"/panel/media_manager/\">Media manager</a></li>
              <li><a href=\"/panel/category/\">Category <span class=\"label label-success\">5</span></a></li>
              <li><a href=\"/panel/page_generate/\">Page generate</a></li>
              <li><a href=\"/panel/settings/\">Settings</a></li>
              <li> <a href=\"/panel/logout/\">EXIT</a></li>
          </ul>
          
        
          
      </div>
      
       
       
   </div>
    <div class=\"right_bk\"> 
    
    ";
        // line 42
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    
    </div>
   
</body>
</html>
<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
        echo "js/ajax.js\"></script>
<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
        echo "js/script.js\"></script>";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 49,  89 => 48,  80 => 42,  47 => 12,  43 => 11,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
