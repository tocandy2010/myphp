<?php


$poker = [];
$newpoker = [];
$t = 51;
for($i=0;$i<=$t;$i++){
    $poker[] = $i;
}

print_r($poker);

while($t>0){   //當t 等於0時 就只剩下一張牌不用再洗了
    $r =rand(0,$t);   //產生亂數與最後一張牌互換
    [$poker[$t],$poker[$r]] = [$poker[$r],$poker[$t]];  //利用值互換洗牌
    $t--;//往前換每次前進一張
}

print_r($poker);

?>