<?php

session_start();
include_once("./sql.php");

spl_autoload_register(function($class_name){  
    require_once("{$class_name}.php");
});


if(!isset($_SESSION['member']) || empty($_SESSION['member'])){
    header("location:login.php");
}

$member = $_SESSION['member'];
$cart = $_SESSION['cart'];

$icon = base64_encode($member->icon);

$sql = "select * from product";
$result = $mysqli->query($sql);

?>


<h1>cy Super Big Company</h1>
<hr/>
welcome,<?php echo $member->realname; ?>
<img src='data:image/jpeg;base64, <?php echo $icon; ?>' alt="cat">
<a href="logout.php">登出</a>
<hr/>
<table  border='1' width='50%'>
    <tr>
        <th>編號</th>
        <th>商品</th>
        <th>價格</th>
        <th>購買</th>
    </tr>
<?php
while ($product = $result->fetch_object()){
        echo '<tr>';
        echo "<td>{$product->id}</td>";
        echo "<td><a href='showPimage.php?id={$product->id}'>{$product->pname}</a></td>";
        echo "<td>{$product->price}</td>";
        echo "<td>";
        echo "<input type='number' min=1  id='num_product'>";
        echo "<input type='button' value='加入購物車' onclick='addcart({$product->id})'>";
        echo "</td>";
    }
?>
</table>
<hr/>
2019 Copyright. Power By Cy corp.

<script>

function addcart(id,num){
    let xhr = new XMLHttpRequest();
    let product = `id=${id}&pnum=${num}`;
    xhr.open("post","./addcart.php",true);
    xhr.onreadystatechange = function(){
        if(this.readyState === 4 && this.status ===200){
            alert(xhr.responseText);
        }
    }
    xhr.send();
}

</script>