<?php
$path = "./dir1";
if(!is_dir($path)){
    mkdir($path,0700);
    echo 'OK';
}else{
    echo "false";
}


?>