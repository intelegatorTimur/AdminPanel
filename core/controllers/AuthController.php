<?php
class auth{
    public static function index(){
        global $twig;
        require_once MODELS.'AuthModel.php';
        $page = $twig->render('auth.html');

        return $page;
    }
}



?>