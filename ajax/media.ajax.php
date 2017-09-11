<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/config/config.php');



if($_POST['target'] == 'delete'){


    if(is_dir(ROOT.$_POST['path'].$_POST['name'])){

        $rm = rmdir(ROOT.$_POST['path'].$_POST['name']);
        if($rm){
            echo 1;
        }else{
            echo 0;
        }
    }else{


        $un =  unlink(ROOT.$_POST['path'].$_POST['name']);
        if($un){
            echo 1;
        }else{
            echo 0;
        }
    }


}





if($_POST['target'] == 'scan'){
    

$scan = scandir(ROOT.$_POST['path']);
    
foreach($scan as $value){
    
    if($value != '.' && $value != '..'){
        if(is_dir(ROOT.$_POST['path'].$value)){
            $dir .= "
                    <div>
                    <a data-name='$value' class='d_scan'><i class='fa fa-window-close-o' aria-hidden='true'></i></a>
                    <i class='fa fa-folder-o' data-type='folder' data-name='$value' aria-hidden='true'></i>
                    <div>$value</div>
                    </div>

                    ";
        }else{
            $exp = explode('.',$value);

            if($exp[1] == 'jpg' || $exp[1] == 'jpeg' || $exp[1] == 'png' || $exp[1] == 'gif'){

                $dir .= "
                            <div>
                            <a data-name='$value' class='d_scan'><i class='fa fa-window-close-o' aria-hidden='true'></i></a>
                            <img src='".HOST."uploads/$value'>
                            <div>$value</div>
                            </div>




                    ";
            } 


            if($exp[1] == 'pdf'){

                $dir .= "
                            <div>
                            <a data-name='$value'><i class='fa fa-window-close-o' aria-hidden='true'></i></a>
                            <i class='fa fa-file-pdf-o' aria-hidden='true'></i>
                            <div>$value</div>
                            </div>




                    ";
            } 


            if($exp[1] == 'docx' || $exp[1] == 'doc' || $exp[1] == 'txt'){

                $dir .= "
                            <div>
                            <a data-name='$value' class='d_scan'><i class='fa fa-window-close-o' aria-hidden='true'></i></a>
                            <i class='fa fa-file-text-o' aria-hidden='true'></i>
                            <div>$value</div>
                            </div>




                    ";
            } 

            if($exp[1] == 'xlsx' || $exp[1] == 'xls' || $exp[1] == 'csv'){

                $dir .= "
                            <div>
                            <a data-name='$value' class='d_scan'><i class='fa fa-window-close-o' aria-hidden='true'></i></a>
                            <i class='fa fa-file-excel-o' aria-hidden='true'></i>
                            <div>$value</div>
                            </div>




                    ";
            } 
        }
    }
}

    $paste = "<div>
                            
                            <i class='fa fa-plus-square-o' id='paste' aria-hidden='true'></i>
                            <div>Загрузить файлы</div>
                            </div>
";
    
    
    
echo $paste.$dir;
}






    
    


?>