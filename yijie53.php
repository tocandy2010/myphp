<?php
// PDO


$dsn = "mysql:host=localhost;dbname=cy";
$opt = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8",
);

$pdo = new PDO($dsn,'root','',$opt);

$sql = "select * from product";

$result = $pdo->prepare($sql);

$result->execute();

while($product = $result->fetch(PDO::FETCH_OBJ)){
    var_dump($product);
}


?>