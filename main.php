<?php


include_once("./sql.php");

spl_autoload_register(function ($class_name) {
    require_once("{$class_name}.php");
});

session_start();
if (!isset($_SESSION['member']) || empty($_SESSION['member'])) {
    header("location:login.php");
}

$member = $_SESSION['member'];
$cart = $_SESSION['cart'];

$icon = base64_encode($member->icon);

$sql = "select * from product";
$result = $mysqli->query($sql);

?>


<h1>cy Super Big Company</h1>
<hr />
welcome,<?php echo $member->realname; ?>
<img src='data:image/jpeg;base64, <?php echo $icon; ?>' alt="cat">
<a href="logout.php">登出</a>
<a href="http://localhost/myphp/checkCart.php">查看購物車</a>
<hr />
<table border='1' width='50%'>
    <tr>
        <th>編號</th>
        <th>商品</th>
        <th>價格</th>
        <th>購買</th>
    </tr>
    <?php
    while ($product = $result->fetch_object()) {
        echo '<tr>';
        echo "<td>{$product->id}</td>";
        echo "<td><a href='showPimage.php?id={$product->id}'>{$product->pname}</a></td>";
        echo "<td>{$product->price}</td>";
        echo "<td>";
        echo "<input type='number' min=1  class ='num_product' id=\"num_product{$product->id}\". value=1>";
        echo "<input type='button' value='加入購物車' onclick='addcart({$product->id})'>";
        echo "</td>";
    }
    ?>
</table>
<hr />
2019 Copyright. Power By Cy corp.

<script>
    function addcart(id) {
        let xhr = new XMLHttpRequest();
        let fd = new FormData();
        let num_product = document.getElementById('num_product'+id);
        fd.append('id', id);
        fd.append('qty', num_product.value);
        xhr.open("POST", "./addcart.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                console.log(xhr.responseText);
                let response = xhr.responseText;
                if (response === '1') {
                    alert('購買成功')
                } else {
                    alert('購買失敗')
                }
            }
        }
        xhr.send(fd);
    }

    let num_product = document.getElementsByClassName('num_product');

    for (let i = 0; i < num_product.length; i++) {
        num_product[i].addEventListener('change', function() {
            let num = Number(this.value);
            if (typeof(num) !== 'number' || num <= 0) {
                this.value = 1;
            }
            this.value = Math.round(this.value,0);
        })
    }

</script>