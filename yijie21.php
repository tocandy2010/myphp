<?php

foreach($_POST as $k=>$v){
    if(is_array($v)){
        foreach($v as $kk=> $vv){
            echo "{$kk}=>{$vv}<br/>";
        }
    }else{
        echo "{$k}=>{$v}<br/>";
    }
}

?>