<?php

/* blocked.html */
class __TwigTemplate_730bb8b86169d36495af9afc8da02385 extends Twig_Template
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
</head>
<body>
    ДОСТУП ЗАПРЕЩЕН!
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "blocked.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
