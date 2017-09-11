<?php
class reg{
    public static function index(){
        global $twig;
        require_once MODELS.'RegModel.php';
        $page = $twig->render('reg.html');

        return $page;
    }
}



?>