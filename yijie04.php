<?php



$var1 = "Yijie";
$var2 = 80;
echo "{$var2}kg=>{$var1}";  //單引號'不能解析變數  而雙引號"可以解析變數
echo '<br>';

$var3 = '666';  
$var4 = 06;
echo $var3 + $var4;  

$var3 = '666';  
$var4 = 'a666';
echo $var3 + $var4;  // 當使用+號運算相加中含有字串 指解析到非數字前

$var3 = '666';  
$var4 = '6a66';
echo $var3 + $var4;//

?>