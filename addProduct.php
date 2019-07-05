<?php
include_once("./sql.php");
if(isset($_REQUEST['pname'])){
    $pname = $_REQUEST['pname'];
    $price = $_REQUEST['price'];

    $sql = "insert into product (pname,price) values('{$pname}',{$price})";

    $mysqli->query($sql);

    $newid = $mysqli->insert_id;

    if(isset($_FILES['pimg'])){
        $pimg = $_FILES['pimg']; $n = 1;
        foreach($pimg['error'] as $k=>$v){
            if($v == 0){
                echo copy($pimg['tmp_name'][$k],"./pimgs/p_{$newid}_{$n}.jpg");
                $n++;
            }
        }
    }
    header("location: bmain.php");
}



?>


<form action="addProduct.php" method="post" enctype="multipart/form-data">
    <div>
        <label for="pname">商品名稱</label>
        <input type="text" name="pname" id="pname">
    </div>
    <div>
        <label for="price">商品價格</label>
        <input type="number" name="price" id="price">
    </div>
    <div>
        <label>商品圖片1</label>
        <input type="file" name="pimg[]" >
    </div>
    <div>
        <label>商品圖片2</label>
        <input type="file" name="pimg[]" >
    </div>
    <div>
        <label>商品圖片3</label>
        <input type="file" name="pimg[]" >
    </div>
    <div>
        <label>商品圖片4</label>
        <input type="file" name="pimg[]" >
    </div>
    <div>
        <label>商品圖片5</label>
        <input type="file" name="pimg[]" >
    </div>
    <div>
        <input type="submit" value="增加">
    </div>
</form>