<?php
/*
$rand = mt_rand(0, 100);

echo $rand;

$arr = [
    'A' => $rand >= 90,
    'B' => $rand >= 80 && $rand < 90,
    'C' => $rand >= 70 && $rand < 80,
    'D' => $rand >= 60 && $rand < 70,
];

foreach ($arr as $k => $v) {
    if ($v === true) {
        echo $k;
        exit;
    }
}
*/
echo "E";
$rand = 2011;
echo $rand;
echo "<hr/>";

$r1 = '閏年';
$r2 = '非閏年';
if(($rand % 400) === 0){
    echo $r1;
}else if(($rand % 100) === 0){
    echo $r2;
}else if(($rand % 4) === 0){
    echo $r1;
}else{
    echo $r2;
}


if($rand % 4 === 0){
    if($rand % 100 === 0){
        if($rand % 400 ===0){
            echo 29;
        }else{
            echo 28;
        }
    }else{
        echo 28;
    }
}else{
    echo 28;
}