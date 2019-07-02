<?php
//檢查身分證字號
var_dump(isTWId("A123456782"));

function isTWId($id) : bool {
    $ret = false;
    if(preg_match("/^[A-Z][1-2][0-9]{8}$/",$id)){
        $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
        $c1 = substr($id,0,1);
        $n12 = strpos($letters,$c1)+10;
        $n1 = (int)($n12/10);
        $n2 = $n12%10;
        $n3 = substr($id,1,1);
        $n4 = substr($id,2,1);
        $n5 = substr($id,3,1);
        $n6 = substr($id,4,1);
        $n7 = substr($id,5,1);
        $n8 = substr($id,6,1);
        $n9 = substr($id,7,1);
        $n10 = substr($id,8,1);
        $n11 = substr($id,9,1);
        $num = ($n1*1+$n2*9+$n3*8+$n4*7+$n5*6+
               $n6*5+$n7*4+$n8*3+$n9*2+$n10*1+$n11*1)%10 === 0;
        if($num){$ret = true;}
    }
    return $ret;
}


?>