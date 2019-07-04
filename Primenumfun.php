<?php

function backindex(){ //回到首頁
        return "<script>setTimeout(function(){
        window.location.href = 'http://localhost/myphp/Primenum.html'
        },2000)</script>";
}

function findpnum($str,$end){
    $ispnum = [];
    for($i=1;$i<=$end;$i++){
        for($j=2;$j<=$i;$j++){
            if($i%$j === 0){
                if($i === $j){
                    array_push($ispnum,$i);
                }else{
                    break;
                }
            }
        }
    }
    return $ispnum;
}


?>