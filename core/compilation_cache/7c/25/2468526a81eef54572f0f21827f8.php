<?php

/* page_generate.html */
class __TwigTemplate_7c252468526a81eef54572f0f21827f8 extends Twig_Template
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
    <li><a href=\"#\">page_generate</a></li>
</ol>   


<div class=\"alert alert-warning\" role=\"alert\">
    Page generate
</div>










<div class=\"page-header\">
    <h4>Meta-box</h4>

</div>

<form method=\"post\" action=\"/panel/page_generate/\">
    <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Controller</label>
        <input type=\"text\" name=\"controller_generate\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"controller, class, model\">
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Views</label>
        <input type=\"text\" name=\"view_generate\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"views html file\">
    </div>
    <div class=\"form-group\">
        
        <label for=\"exampleInputPassword1\">Code Controller</label>
        <textarea name=\"codeC\" class=\"form-control\" rows=\"3\" style=\"height:350px;\">
            class cart{
            public static function index(){
            global \$twig;
            require_once MODELS.'CartModel.php';
            \$page = \$twig->render('cart.html');

            return \$page;
            }
            }
        </textarea>
        <label for=\"exampleInputPassword1\">Code Model</label>
        <textarea name=\"codeM\" class=\"form-control\" rows=\"3\" style=\"height:350px;\">
            MODEL CODE
        </textarea>
    </div>


    <button type=\"submit\" name=\"submit\" class=\"btn btn-default\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "page_generate.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
