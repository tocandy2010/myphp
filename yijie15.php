<?php

$a = 0;
$b = 0;
$c = 0;
$d = 0;
$e = 0;
$f = 0;

for ($i = 0; $i <= 99; $i++) {
    $r = rand(1, 6);
    switch ($r) {
        case 1:$a += 1;break;
        case 2:$b += 1;break;
        case 3:$c += 1;break;
        case 4:$d += 1;break;
        case 5:$e += 1;break;
        case 6:$f += 1;break;
        default:
    }
}


echo $a,'<br/>', $b,'<br/>', $c,'<br/>', $d,'<br/>', $e,'<br/>', $f,'<br/>';


//$s = [1=>0,2=>0,3=>0,4=>0,5=>0,6=>0];
$s = [1=>0,0,0,0,0,0];

for($i=0;$i<=99;$i++){
    $r = rand(1, 6);
    $s[$r]++;
}

print_r($s);

foreach($s as $k=>$v){
    echo "{$k}點數出現{$v}次<br/>";
}
