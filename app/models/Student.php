<?php

class Student {

private $id;
private $name;
private $age;
private $course;

public function __construct($database) {
    $this->conn = $database;
}
}