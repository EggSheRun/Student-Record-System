<?php
require 'Model.php';

class Student extends Model {
    private $table = 'students';

    public function __construct() {
    parent::__construct();

    }
    public function getAllStudents() {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table}");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function getStudentById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function createStudent($data) {
        $stmt = $this->conn->prepare("INSERT INTO {$this->table} (name, email, course, year_level, status) VALUES (:name, :email, :course, :year_level, :status)");
        return $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':course' => $data['course'],
            ':year_level' => $data['year_level'],
            ':status' => $data['status'],
        ]);
    }

    public function deleteStudent($id) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table} WHERE id = :id");
        return $stmt->execute([':id => $id']);
    }

    public function updateStudent($data) {
        $stmt = $this->conn->prepare("UPDATE {$this->table} SET name = :name, email = :email, course = :course, year_level = :year_level, status = :status WHERE id = :id");
        return $stmt->execute([
            ':id' => $data['id'],
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':course' => $data['course'],
            ':year_level' => $data['year_level'],
            ':status' => $data['status'],
        ]);
    }
}