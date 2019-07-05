<?php
include_once("./sql.php");
if(isset($_REQUEST['editid'])){
    $editid = $_REQUEST['editid'];

    $sql = "select * from product where id = {$editid}";
    $result = $mysqli->query($sql);
    $product = $result->fetch_object();
}else if(isset($_REQUEST['updateid'])){

    $updateid = $_REQUEST['updateid'];
    $pname = $_REQUEST['pname'];
    $price = $_REQUEST['price'];

    $sql = "update product set pname='{$pname}',price='{$price}' where id = {$updateid}";
    $mysqli->query($sql);
    header("location:bmain.php");
}



?>

<p>修改商品</p>
<form action="addProduct.php" method="get" enctype="multipart/form-data">
<input type="hidden" name="updateid" values="<?php echo $product->id ?>">
    <div>
        <label for="pname">商品名稱</label>
        <input type="text" name="pname" id="pname" value="<?php echo $product->pname ; ?>">
    </div>
    <div>
        <label for="price">商品價格</label>
        <input type="number" name="price" id="price" value="<?php echo $product->price ; ?>">
    </div>
    <div>
        <input type="submit" value="修改商品">
    </div>
</form>