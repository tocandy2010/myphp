<?php


/*

在 PHP 中switch 是不已對型態  ==

在 js 中的 switch 是會比對型態的  ===

*/

$a = 10;

switch ($a) {
    case 1:
        echo 'A';
        break;
    case 10:
        echo 'B';
        break;
    case 100:
        echo 'C';
        break;
    default:
        echo 'x';
}

$rand = rand(1, 12);

$m = $rand % 2 === 0 ? 0 : 1;
if ($rand === 2) {
    $m = 2;
} else if ($rand === 7) {
    $m = 0;
}

echo $rand;


switch ($m) {
    case 2:
        echo '28';
        break;
    case 1:
        echo '30';
        break;
    case 0:
        echo '31';
        break;
    default:
        echo '這是月份嗎?';
}


switch ($rand) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
    echo "31";
    break;
    case 4:
    case 6:
    case 9:
    case 11:
    echo "30";
    break;
    case 2:
    echo 28;
    break;
    default:
    echo 'NO';
}
