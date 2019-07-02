<?php


function sayheool($data){
    $arr = explode(',',$data);
    foreach($arr as $v){
        echo "hello{$v}<br/>";
    }
}


function sayhellov4(){
    $n = func_get_args();
    echo $n[0];
}

echo sayhellov4(66,2);




?>