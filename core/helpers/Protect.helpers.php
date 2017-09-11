<?php

class Protect{
 
 
    
    public static function Read(){
        
        if(file_exists(LOGS.$_SERVER['REMOTE_ADDR'].".ini")){
            $try = file_get_contents(LOGS.$_SERVER['REMOTE_ADDR'].".ini");
            $exp = explode(';',$try);
            $trying =  explode('=',$exp[0]);
           
            $time = explode('=',$exp[1]);
            
            if(intval($trying[1]) == 4){
                
                if(time() - intval($time[1]) >= 60){
                    self::WriteReset();
                    return true;
                }else{
                    return false;
                }
            }else{
                return true;
            }
                
            
        }else{
            return true;
        }
    }
    
    
    
    public static function Write(){
        
       

        if(file_exists(LOGS."$_SERVER[REMOTE_ADDR]".".ini")){
            $try = file_get_contents(LOGS.$_SERVER['REMOTE_ADDR'].".ini");
            $exp = explode(';',$try);
            $exp1 =  explode('=',$exp[0]);
        if(intval($exp1[1]) > 0 && intval($exp1[1]) < 4){
            $int = intval($exp1[1]) + 1; 
            $open = fopen(LOGS.$_SERVER['REMOTE_ADDR'].".ini","w");
            fwrite($open,"try = $int; time = ".time());
            fclose($open);
            
        }
          
         
        }else{
            $open = fopen(LOGS."$_SERVER[REMOTE_ADDR]".".ini","w");
            fwrite($open,"try = 1; time = ".time());
            fclose($open);
        }
       
        
        
        
    }
    
    public static function WriteReset(){
        
        
        if(file_exists(LOGS.$_SERVER['REMOTE_ADDR'].".ini")){
            unlink(LOGS.$_SERVER['REMOTE_ADDR'].".ini");
        }
        
    }
    
    
    
    
    
}


?>