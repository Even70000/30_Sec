<?php
class Database{
    private $local = 'localhost';
    private $user  = 'root';
    private $pass  = '';
    private $dbname = 'aser_picture';
    private $conn;

    public function getConnection(){

        $this->conn = null;

        $this->conn = new PDO('mysql:host='.$this->local.';dbname='.$this->dbname,$this->user,$this->pass);
        return $this->conn;
        
    }
}
