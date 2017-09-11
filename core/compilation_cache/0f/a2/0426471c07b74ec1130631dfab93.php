<?php

/* auth.html */
class __TwigTemplate_0fa20426471c07b74ec1130631dfab93 extends Twig_Template
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
    <title>Авторизация</title>
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
   <div class=\"form\">
   <fieldset>
   <legend>Autorization</legend>
    <form method=\"post\" action=\"/panel/auth/\">
       <ul>
           <li><input type=\"text\" name=\"auth_login\" placeholder=\"Login\"></li>
           <li><input type=\"password\" name=\"auth_password\" placeholder=\"*****\"></li>
           <li><button type=\"submit\" name=\"auth_submit\">Enter</button></li>
        </ul>
    </form>
       </fieldset>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "auth.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  19 => 1,);
    }
}
