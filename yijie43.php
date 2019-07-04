<?php



class mysql{
    private $host = "localhost";
    private $user = 'root';
    private $pass = '';
    private $db = 'cy';
    private $charset = 'utf8';
    private $con = null;

    public function __construct(){
        try{
            $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
            $this->con->set_charset($this->charset);
            throw new Exception($e);
        }catch (Exception $e){
            echo $e->getCode();
        }
    }

}


?>