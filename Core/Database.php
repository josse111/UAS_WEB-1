<?php
class Database {
    private $host = "localhost", $user = "root", $pass = "", $db = "db_todolist";
    public $conn;
    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) { die("DB Error: " . $e->getMessage()); }
        return $this->conn;
    }
}