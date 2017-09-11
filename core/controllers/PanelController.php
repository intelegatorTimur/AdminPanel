<?php
class panel{
    public static function index(){
        global $twig;
        require_once MODELS.'PanelModel.php';
        if(isset($_SESSION['auth_admin']) || $_SESSION['auth_admin'] == 1){
            $page = $twig->render('home.html');
            return $page;
        }
        
   
        
    }
    public static function auth(){
        require_once MODELS.'PanelModel.php';
        
        PanelModel::Panel_auth();
        
    }
    
    public static function logout(){
        unset($_SESSION['auth_admin']);
        
        header("Location:".HOST."panel/");
        
    }
    
    public static function statistics(){
        global $twig;
        require_once MODELS.'PanelModel.php';
        if(isset($_SESSION['auth_admin']) || $_SESSION['auth_admin'] == 1){
            $page = $twig->render('statistics.html');
            return $page;
        }
    }
    
    public static function static_page(){
        global $twig;
        require_once MODELS.'PanelModel.php';
        if(isset($_SESSION['auth_admin']) || $_SESSION['auth_admin'] == 1){
            $page = $twig->render('static_page.html');
            return $page;
        }
    }
    
    public static function category(){
        global $twig;
        require_once MODELS.'PanelModel.php';
        if(isset($_SESSION['auth_admin']) || $_SESSION['auth_admin'] == 1){
            $page = $twig->render('category.html');
            return $page;
        }
    }
    
    public static function page_generate(){
        global $twig;
        require_once MODELS.'PanelModel.php';
        if(isset($_SESSION['auth_admin']) || $_SESSION['auth_admin'] == 1){
            $page = $twig->render('page_generate.html');
            PanelModel::Generate();
            return $page;
            
        }
        
    }
    
    public static function settings(){
        global $twig;
        require_once MODELS.'PanelModel.php';
        if(isset($_SESSION['auth_admin']) || $_SESSION['auth_admin'] == 1){
            $page = $twig->render('settings.html');
            return $page;
        }
    }
    
    
    public static function media_manager(){
        global $twig;
     
        if(isset($_SESSION['auth_admin']) || $_SESSION['auth_admin'] == 1){
            $page = $twig->render('media_manager.html');
       
            return $page;
        }
    }
}



?>