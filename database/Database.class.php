<?php

class Database {
    private $host = '';
    private $user= '';
    private $port = ''; // Especifica el puerto aquí
    private $password = '';
    private $database = '';

    public function getConnection(){
        $hostDB = "mysql:host=".$this->host.";port=".$this->port.";dbname=".$this->database.";";
        try {
            $connection = new PDO($hostDB,$this->user,$this->password);
            $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (\PDOException $e) {
            die("ERROR: ". $e->getMessage());
        }
    }
}