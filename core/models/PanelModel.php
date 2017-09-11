<?php

class PanelModel{
    
    public static function Panel_auth(){
        global $PDO;
      
        if(!empty($_POST['auth_login']) && !empty($_POST['auth_password'])){
            $auth_login = $_POST['auth_login'];
           
            if(preg_match('/\b[a-zA-Z0-9\_]{3,100}\b/',$auth_login)){
                
                $query = $PDO->query("SELECT * FROM users u LEFT JOIN hash h ON u.users_id=h.user_id LEFT JOIN email e ON e.user_id=u.users_id WHERE u.users_login='$auth_login' ")->fetch(PDO::FETCH_ASSOC);
                if(!empty($query['users_login'])){
                    if(password_verify($_POST['auth_password'], $query['hash_pass'])){
                        Protect::WriteReset();
                        $_SESSION['auth_admin'] = 1;
                        header("Location:".HOST."panel/");
                    }else{
                        Protect::Write();
                        throw new Exception("Введите правильный пароль");
                        
                        
                        
                    }
                }else{
                    Protect::Write();
                    throw new Exception("Введите правильный логин");
                }
                
            }else{
                throw new Exception("Разрешены только буквы,цифры, и _ ");
            }
            
        }else{
            throw new Exception("Заполните логин и пароль");
        }
        
        
    }
    
    public static function Generate(){
       
        if(isset($_POST['submit'])){
            
            if(!empty($_POST['controller_generate'])){
                
                if(!file_exists(CONTROLLERS.$_POST['controller_generate']."Controller.php") && !file_exists(MODELS.$_POST['controller_generate']."Model.php")){
                  
                    $openC = fopen(CONTROLLERS.ucfirst(trim($_POST['controller_generate']))."Controller.php","w");
                    $openM = fopen(MODELS.ucfirst(trim($_POST['controller_generate']))."Model.php","w");
                    fwrite($openM,$_POST['codeM']);
                    fwrite($openC,$_POST['codeC']);
                    fclose($openC);
                    fclose($openM);
                }else{
                    echo "Файл с таким именем уже существует";
                }
               
            }else{
                echo "Заполните поля!";
            }
            
            
            if(!empty($_POST['view_generate'])){
                if(!file_exists(BACK.$_POST['view_generate'].".html")){
                    $openV = fopen(BACK.strtolower(trim($_POST['view_generate'])).".html","w");
                    fclose($openV);
                }else{
                    echo "Файл с таким именем уже существует";
                }
            }else{
                echo "Заполните поля!";
            }
        }
        
    }
}





?>