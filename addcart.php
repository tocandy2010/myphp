<?php

include_once('sql.php');


spl_autoload_register(function($class_name){  
    require_once("{$class_name}.php");
});

session_start();

$id = $_POST['id'];
$qty = $_POST['qty'];

$sql = "select * from product where id = ?";
$result = $mysqli->prepare($sql);
$result->bind_param('i',$id);
$result->execute();
$row = $result->get_result();
if($row->num_rows <=0){
    echo 3;
    exit;
}

$cart = $_SESSION['cart'];
if($cart->addProduct($id,$qty)){
    echo 1;
}else{
    echo 0;
}





?>