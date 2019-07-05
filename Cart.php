<?php

class Cart{
    private $list = [];

    public function __construct(){
        
    }

    public function addProduct($pid,$qty){
        if(array_key_exists($pid,$this->list)){
            $this->list[$pid] +=$qty;
        }else{
            $this->list[$pid]=$qty;
        }
    }

    public function modifyProduct($pid,$qty){
        if(array_key_exists($pid,$this->list)){
            $this->list[$pid] =$qty;
        }
    }

    public function removeProduct($pid){
        if(array_key_exists($pid,$this->list)){
            unset($this->list[$pid]);
        }
    }

    public function clearAll(){
        $this->list = [];
    }

    public function getAll(){
        return $this->list;
    }

    public function getItemQty($pid){  //商品存在返回數量  不存在返回-1
        $ret = -1;
        if(array_key_exists($pid,$this->list)){
            $ret = $this->list[$pid];
        }
        return $ret;
    }
}

?>