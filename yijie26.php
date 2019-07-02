<?php

include_once('./yijie22.php');

$location = $_POST['location'];
$sex = $_POST['sex'];
$show = '';

if(!checklocation(($location))){
    $show = "地區錯誤";
}

include('./yijie23.php');

?>