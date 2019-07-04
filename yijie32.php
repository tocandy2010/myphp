<?php

if(!isset($_REQUEST['filename'])) die(header("location:./yijie31.html"));

$fn = $_POST['filename'];
$content = $_POST['content'];

$path = './dir1';
$fh = fopen($path.'/'.$fn,"w+");

if(fwrite($fh,$content)){
    header("location:{$path}/{$fn}");
}else{
    echo 'error';
}


?>