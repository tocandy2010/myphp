<?php

include_once('./sql.php');
spl_autoload_register(function($class_name){  
    require_once("{$class_name}.php");
});

session_start();

$vcode = $_POST['vcode'];


if($vcode !== $_SESSION['vcode']){
    header('Location:login.php');
}

if(!isset($_REQUEST['account'])) header('Location:login.pnp');

$account = $_REQUEST['account'];
$pass = $_REQUEST['pass'];

$sql = 'select * from member where account = ?';

$stm = $mysqli->prepare($sql);

$stm->bind_param('s',$account);
$stm->execute();

$result = $stm->get_result();

if($result->num_rows > 0){
    $member = $result->fetch_object();
    if(password_verify($pass,$member->pass)){
        $_SESSION['member'] = $member;
        $_SESSION['cart'] = new Cart();
        header('Location:main.php');
    }else{
        
        header('Location:login.php');

    }
}else{
    
    header('Location:login.php');
}

?>