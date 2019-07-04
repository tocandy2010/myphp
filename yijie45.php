<?php

//mysqli 查詢

$mysqli = new mysqli('localhost','root','','cy');
$mysqli->set_charset('utf8');

$sql = "select * from cust";
$stm = $mysqli->prepare($sql);
$stm->execute();
$stm->store_result();

$cuntdata =  $stm->num_rows;

$stm->bind_result($id,$cname,$tel,$birthday);

//將資料庫取出來的data轉json
$ret = new stdClass();  //標準型空物件(物件最頂層)
if($cuntdata){
    $row = [];
    $ret->result = $cuntdata;
    while($stm->fetch()){  //循環印出所有查詢
        //echo "{$id} : {$cname} : {$tel} : {$birthday}<br/>";
        $row['id'] = $id;
        $row['cname'] = $cname;
        $row['tel'] = $tel;
        $row['birthday'] = $birthday;

        $ret->data[] = $row;
    }
}else{
    $ret->result = "no data";
}

$stm->free_result(); //釋放資料庫記憶體
$stm->close(); //關閉資料庫連線

echo json_encode($ret);



?>