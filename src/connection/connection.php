<?php
class Connection {
    private $host = "localhost";
    private $dbname = "PeerSync";
    private $username = "root";
    private $password = "";
    public function connect() {
        try {
            $conn = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8",$this->username,$this->password);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed : " . $e->getMessage();
            return null;
        }
    }
}