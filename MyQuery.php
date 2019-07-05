<?php

class MyQuery {
    private $mysqli;
    const QUERY_PNAME = 'pname';
    const QUERY_PRICE = 'price';
    
    public function __construct($mysqli){
        $this->mysqli = $mysqli;
    }

   public function getField($pid,$field){
        $sql = "select * from product where id ={$pid}";
        $result = $this->mysqli->query($sql);
        if($result->num_rows == 0){
            return false;
        }else{
            $product = $result->fetch_assoc();
            return $product[$field];
        }
    }

}

?>