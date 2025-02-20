<?php

class Database{
    private $host = "localhost";
    private $dbname = "student";
    private $password = "";
    private $username ="root";

    protected function connect(){
        try {
            $conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}",$this->username, $this-> password);
            return $conn;
        } catch (PDOException $e) {
            echo "connection failed ". $e->getMessage();
        }
    }
}