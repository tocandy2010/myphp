<?php

class Bike{
    protected $speed = 0;

    public function addspeed(){
        $this->speed++;
    }
    public function downspeed(){
        $this->speed--;
    }
    public function getSpeed(){
        return $this->speed;
    }
    
}

class Scooter extends Bike{

    private $gear = 0;

    //overwrite
    /*public function addspeed(){
        parent::addspeed();   //使用父類方法
        //$this->speed+=2;
    }*/

    public function chgear($gear){
        $this->gear = $gear;
    }

    public function addspeed(){
        $this->speed = $this->speed<=0?1:$this->speed;
        $this->speed = ($this->gear*1.2)*$this->speed;
    }
}

class person{
    private  $myBike;
    private  $myScooter;
    private  $myName;

    function __construct($name){
        $this->myBike = new Bike();
        $this->myScooter = new Scooter();
        $this->myName = $name;
    }
}

$s1 = new Scooter();

$s1->chgear(2);

$s1->addspeed();

$s1->addspeed();
echo $s1->getSpeed();

echo "<hr/>";

$p = new person("yijie");
var_dump($p);


?>