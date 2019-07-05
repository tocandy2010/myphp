<?php

//$ch = curl_init("http://localhost/myphp/yijie50.php");
$ch = curl_init("http://localhost/myphp/yijie51.php");
$data = "id=55";

curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);

$ret = curl_exec($ch);   //curl_exec 執行

curl_close($ch);  //關閉資源

$ret = json_decode($ret);

if($ret->code === '200'){
    var_dump($ret);
}

?>