<?php

require_once 'Model.php';

class Student extends Model { // This 'extends' is the secret sauce!
    public $name;
    public $age;
    public $course;


    // You can REMOVE the __construct here entirely. 
    // It will automatically use the one from Model.php.

    public static function all() {
        $instance = new self(); // This triggers the database connection in Model.php
        $stmt = $instance->conn->query("SELECT * FROM students");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}