<?php
class main{
    
    
    
    public static function index(){
        global $twig;
        require_once MODELS.'MainModel.php';
        $page = $twig->render('home.html');
        
        return $page;
        
   }
    
   
    
    
}

?>