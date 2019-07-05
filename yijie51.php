<?php

include_once("./sql.php");

$ret = new stdClass();
$ret->code = '';
if(isset($_POST['id'])  && !empty($_POST['id'])){
    $id = $_POST['id'];
    $mysql = new mysqli();
    $sql = "select * from product where id=?";

    $stm = $mysqli->prepare($sql);
    $stm->bind_param('i',$id);
    $stm->execute();
    $result = $stm->get_result();
    if($result->num_rows >0){
        $ret->code = '200';
        $product = $result->fetch_object();
        $ret->product = $product;

    }else{
        $ret->code = '404';
    }
    
}else{
    $ret->code = '500';
}

echo  json_encode($ret);

?>