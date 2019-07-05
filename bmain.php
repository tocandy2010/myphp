<?php
include_once("./sql.php");

if(isset($_REQUEST['cloneid'])){
    $cloneid = $_REQUEST['cloneid'];
    $sql = "insert into product (pname,price)".
    "select pname,price from product where id = ?";
    $stm = $mysqli->prepare($sql);
    $stm->bind_param('i',$cloneid);
    $stm->execute();
    $stm->error;
}else if(isset($_REQUEST['delid'])){
    $delid = $_REQUEST['delid'];
    $sql = "delete from product where id= ?";
    $stm = $mysqli->prepare($sql);
    $stm->bind_param('i',$delid);
    $stm->execute();
}

$page=  isset($_GET['page'])?$_GET['page']:1;  //頁次
$rpp = 4;  //u一次顯示幾筆資料
$start = ($page-1) * $rpp; //


$sql = "select * from product limit {$start},{$rpp}";
$result = $mysqli->query($sql);

?>


<script>

function confirmDelete(name){
    return confirm('確認刪除 '+name+' 嗎?');
}
</script>

<a href="./addProduct.php">新增商品</a>
<table border='1' width="100%">
    <tr>
        <th>id</th>
        <th>pname</th>
        <th>price</th>
        <th>Edit/Delete</th>
    </tr>
    <?php
    while ($product = $result->fetch_object()){
        echo '<tr>';
        echo "<td>{$product->id}</td>";
        echo "<td><a href='showPimage.php?id={$product->id}'>{$product->pname}</a></td>";
        echo "<td>{$product->price}</td>";
        echo "<td>";
        echo "<a href='./editProduct.php?editid={$product->id}'>Edit </a>| ";
        echo "<a href='./bmain.php?delid={$product->id}' onclick='return confirmDelete(\"$product->pname\")'>Delete | </a>";
        echo "<a href='./bmain.php?cloneid={$product->id}'>clone</a>";
        echo "<td>";
    }


    ?>

</table>
