<?php
   if(isset($_GET['controller']) && !empty($_GET['controller'])){
            $controller = trim(strtolower($_GET['controller']));
       if(file_exists(CONTROLLERS.$controller.'Controller.php')){
           
           require_once CONTROLLERS.$controller.'Controller.php';
           
           if(isset($_GET['func']) && !empty($_GET['func'])){
               $function = trim(strtolower($_GET['func']));
               if(class_exists($controller) && method_exists($controller,$function)){
                   $html = $controller::$function();
               }else{
                   header("Location:".HOST."404.html");
               }
               
           }else{
               if(class_exists($_GET['controller']) && method_exists($_GET['controller'],'index')){
                  $html =  $controller::index();
               }else{
                   header("Location:".HOST."404.html");
               }
               
           }

       }else{
           header("Location:".HOST."404.html");
       }
       
       
       
       
       
       
   }else{
       if(file_exists(CONTROLLERS.'MainController.php')){
           require_once CONTROLLERS.'MainController.php';
           
           if(class_exists('main') && method_exists('main','index')){
               $html = main::index();
           }else{
               throw new Exception('Class or method not found');
           }
       }else{
           throw new Exception('Main controller not found');
       }
       
       
      
   }

?>
