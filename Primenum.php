<?php

require('./Primenumfun.php');

$start = $_POST['start'];
$end = $_POST['end'];
$error = [
    0=>'資料錯誤，系統將自動跳轉...',
    1=>'範圍錯誤，系統將自動跳轉...',
];
    


if(!is_numeric($start)||!is_numeric($end)){
    echo $error[0];
    echo backindex();
    exit;
}

if($start>$end){
    echo $error[1];
    echo backindex();
    exit;
}



if($start<1){
    $newstart =2;
}else{
    $newstart = $start;
}

$ispnum = findpnum($newstart,$end);

$range = range($start,$end);

include_once("showPrimenum.html");
?>