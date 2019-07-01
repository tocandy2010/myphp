<?php

$var1 = 1; // $[a-z A-Z$_][az-zA-Z0-9]*
echo gettype($var1);  //gettype 查看變數型態


$var1 = 10;
$var2 = 3;
echo (int)$var3 = $var1/$var2; //強制轉型
$var4 = $var1 % $var3;
echo $var4;

$var5 = 012;  //如果數字已0開頭表示要用8進位運算
echo $var5;

$var6 = 0x12;
echo $var6;
echo "<hr/>";
$var7 = 10;
$var8 = $var7++;   //++在後先給值在++
echo "{$var7}:{$var8}";

?>