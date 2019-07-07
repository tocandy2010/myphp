<?php


include_once('./sql.php');

spl_autoload_register(function($class_name){  
    require_once("{$class_name}.php");
});

session_start();
$cart = $_SESSION['cart'];
if(isset($_GET['deletgoods'])){
    $delid = $_GET['deletgoods'];
    $cart->removeProduct($delid);
}



$cart_all = $cart->getAll();
$pid = array_keys($cart_all);
if(count($pid)>0){
        $sql = "select * from product where id in (". implode(",",$pid) .")";
    $result = $mysqli->prepare($sql);
    $result->execute();

    $rows = [];

    $row= $result->get_result();
    if($row->num_rows>0){
        while($r = $row->fetch_object()){
            $rows[] = $r;
        }
    }
}


$newrows = [];
if(!empty($rows)){  //商品依照購買順序倒序
    foreach($pid  as $k=>$v){
        foreach($rows as $kk=>$vv){
            if($vv->id === $v){
                array_unshift($newrows,$rows[$kk]);
            }
        }
    }
}


?>


<a href='http://localhost/myphp/main.php'>返回商品列表</a>
<table border='1px' width='50%'>
    <tr>
        <th>商品id</th>
        <th>商品名稱</th>
        <th>商品單價</th>
        <th>購買名數量</th>
        <th>小計</th>
        <th>刪除</th>
    </tr>
    <?php
        foreach($newrows as $k=>$v){
            echo "<tr>";
            echo "<td>{$v->id}</td>";
            echo "<td>{$v->pname}</td>";
            echo "<td>{$v->price}</td>";
            echo "<td>{$cart_all[$v->id]}</td>";
            echo "<td>".$cart_all[$v->id] * $v->price."</td>";
            echo "<td><a href='http://localhost/myphp/checkCart.php?deletgoods={$v->id}'>刪除</a></td>";
            echo "</tr>";
        }

    ?>
</table>