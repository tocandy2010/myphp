<?php

function test($var1){
    $var1+=10;
    return $var1;
}
$var1 = 100;
test($var1);
echo $var1;


?>