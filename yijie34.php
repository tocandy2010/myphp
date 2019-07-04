<?php

if(!isset($_FILES['upfile'])) exit(0);

$fil = $_FILES['upfile'];

var_dump($fil);

$filerror = [];

foreach($fil['error'] as $k=>$v){
    if($v === 0){
        if(is_uploaded_file($fil['tmp_name'][$k])){
            if(move_uploaded_file($fil['tmp_name'][$k],"./dir1/{$fil['name'][$k]}")){
                echo "ok";
            }else{
                echo "fali";    
            }
        }
    }
}


?>