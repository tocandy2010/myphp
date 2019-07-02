<?php

function checklocation($data) :bool {
    $lo = range(10,33);
    $no = [20,25,26,31];
    foreach($lo as $k=>$v){
        if(in_array($v,$no)){
            unset($lo[$k]);
        }else{
            $lo[$k] = (string)$v;
        }
    }

    if(in_array($data,$lo)){
        return true;
    }else{
        return false;
    }
}

function checksex($data) : bool {
    $sex = ['1','2'];
    if(in_array($data,$sex)){
        return true;
    }else{
        return false;
    }

}

function randnum($min,$max) : int {
    $r = rand($min,$max);
    return $r;
}


?>