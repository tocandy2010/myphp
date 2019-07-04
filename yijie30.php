<?php

$path = "./dir1/file2.txt";

$fh = fopen($path,'r+');

fwrite($fh,"999999\r\n6666688888");

fflush($fh);  //將資料衝出暫時存區

$row = fgets($fh);
echo $row;

fclose($fh);


echo '<hr/>';
  //解析時要注意換行符號 \r\n
$line = file($path);

foreach($line as $v){
    if(strpos($v,"\r\n")){
        echo 1;
    }
}
?>