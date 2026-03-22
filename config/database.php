<?php

class Database {

private $host = "localhost";
private $username = "root";
private $password = "";
private $database = "student_crud";

private $conn;

public function connect() {
$this->conn = null;
try {

    $dsn = "mysql:host=$this->host};dbname$this->database};charset=utf8mb4";

    $options = [
        PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    $this->conn = new PDO ($dsn, $this->username, $this->password, $options);

    } catch (PDOException $e) {
        echo "Connection Error: " .$e->getMessage();
    }

    return $this->conn;
    }

}