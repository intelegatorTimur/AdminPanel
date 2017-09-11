<?php session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'/config/config.php';

if(SITEMODE == 'local'){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}


try{
    
    if(file_exists(ROOT."config/db.php")){
        require_once ROOT."config/db.php";
    }else{
        throw new Exception("FATAL_ERROR");
    }
    require_once HELPERS.'Protect.helpers.php';
    require_once ROOT.'core/lib/Twig/Autoloader.php';
    Twig_Autoloader::register();

    $front = new Twig_Loader_Filesystem(FRONT);
    $back = new Twig_Loader_Filesystem(BACK);
  
    if($_GET['controller'] != 'panel' || !isset($_GET['controller'])){

        $twig = new Twig_Environment($front, array(
            'cache'       => ROOT.'core/compilation_cache',
            'auto_reload' => true
        ));

    }elseif($_GET['controller'] == 'panel'){
        $twig = new Twig_Environment($back, array(
            'cache'       => ROOT.'core/compilation_cache',
            'auto_reload' => true
        ));
    }
   
    
    require_once ROOT.'core/router.php'; 
    if($_GET['controller'] != 'panel' || !isset($_GET['controller'])){
        
    
    echo $twig->render('main.html', array('content' => $html, 
                                          'css' => HOST.'app/front/',
                                          'js' => HOST.'app/front/',
                                          'images' => HOST.'app/front/'
                                         ));
    
    }elseif($_GET['controller'] == 'panel'){
        if(!isset($_SESSION['auth_admin']) || $_SESSION['auth_admin'] == 0){
            
                if(Protect::Read() == true){
                    echo $twig->render('auth.html', array('content' => $html, 
                                                          'css' => HOST.'app/back/',
                                                          'js' => HOST.'app/back/',
                                                          'images' => HOST.'app/back/'
                                                         ));
                }elseif(Protect::Read() == false){
                    echo $twig->render('blocked.html');
                }
            
            
        }elseif(isset($_SESSION['auth_admin']) && $_SESSION['auth_admin'] == 1)
        {
            echo $twig->render('main.html', array('content' => $html, 
                                                   'css' => HOST.'app/back/',
                                                   'js' => HOST.'app/back/',
                                                   'images' => HOST.'app/back/'
                                                  ));
        }
        
    }
    
    
}catch(Exception $e){
    echo $e->getMessage();
}
//$_SESSION['auth_admin'] = 0;







?>