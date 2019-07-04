<?php

if(!isset($_GET['account'])){
    exit;
}
include_once('sql.php');

$account = $_GET['account'];

$sql = "select * from member where account = ?";

$stm = $mysqli->prepare($sql);

$stm->bind_param("s",$account);
$stm->execute();
$stm->store_result();
echo  $stm->num_rows;
 
?>