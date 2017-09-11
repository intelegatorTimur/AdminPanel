<?php

/* main.html */
class __TwigTemplate_f6dedcca04899caa0ae69e20fe6ff3d7 extends Twig_Template
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
        echo "css/style.css\">
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["js"]) ? $context["js"] : null), "html", null, true);
        echo "js/script.js\"></script>
    
</head>
<body>
   <section id=\"header\">
       
   </section>
   
   
   
   <div id=\"content\">
    ";
        // line 18
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
   </div>
   
   
   
   
   <section id=\"footer\">
       
   </section>
</body>
</html>";
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
        return array (  44 => 18,  30 => 7,  26 => 6,  19 => 1,);
    }
}
