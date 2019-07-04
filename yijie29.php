<?php

//文件處裡

$path = "https://tw.stock.yahoo.com/q/bc?s=2330";

$fp = fopen($path,'r');

while($rows = fgetss($fp)){
    echo $rows;
}
fclose($fp);


?>