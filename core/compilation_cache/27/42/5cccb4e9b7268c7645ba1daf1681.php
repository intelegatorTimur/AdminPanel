<?php

/* settings.html */
class __TwigTemplate_27425cccb4e9b7268c7645ba1daf1681 extends Twig_Template
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
        echo "
<ol class=\"breadcrumb\">
    <li><a href=\"#\">two.loc</a></li>
    <li><a href=\"#\">settings</a></li>
</ol>   



<div class=\"alert alert-warning\" role=\"alert\">
    Settings
</div>








<div class=\"page-header\">
    <h4>Build block</h4>
    
</div>
<form>
    <div class=\"checkbox\">
        <label>
            <input type=\"checkbox\" value=\"\">
            Сайт на реконструкции
        </label>
        
    </div>
    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
    
</form>











<div class=\"page-header\">
    <h4>Mail to</h4>
    
</div>
<form>

    <div class=\"form-group\">
        <label for=\"inputPassword2\" class=\"sr-only\">Password</label>
        <input type=\"email\" class=\"form-control\" id=\"inputPassword2\" placeholder=\"Email\">
    </div>
    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
</form>








<div class=\"page-header\">
    <h4>Meta-box</h4>

</div>

<form>
    <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Title</label>
        <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Title\">
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputEmail1\">Description</label>
        <input type=\"text\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Description\">
    </div>
    <div class=\"form-group\">
        <label for=\"exampleInputPassword1\">Keywords</label>
        <input type=\"text\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Keywords\">
    </div>
    
    
    <button type=\"submit\" class=\"btn btn-default\">Submit</button>
</form>



";
    }

    public function getTemplateName()
    {
        return "settings.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
