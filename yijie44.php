<?php

$a ='1';
$b = '2';
$c = '3';


$mysqli = new mysqli('localhost','root','','cy');

$mysqli->set_charset('utf8');

//$sql = 'insert into cust (cname,tel,birthday) values (?,?,?)';
//$sql = "update  cust set cname = 'Tony' where id = ? ";
$stm = $mysqli->prepare($sql);
$stm->bind_param('i',$a);  //參數1為資料型態 參數2必須為參數型態
$stm->execute();

echo $mysqli->affected_rows;  //查詢影響行數
echo $mysqli->error;
?>