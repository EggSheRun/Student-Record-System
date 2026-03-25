<?php
require_once __DIR__ . '../../models/Student.php';

class StudentController {

    private $model;
    
    public function __construct() {
    $this->model = new Student();

    }
    public function index() {
        $students = $this->model->getAllStudents();

        require __DIR__ . '../../views/students/index.php';  
    }

    public function create() {
        
    require_once __DIR__ . '/../views/students/create.php';
    }

    public function store() {
        $data = [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'course' => $_POST['course'],
            'year_level' => $_POST['year_level'],
            'status' => $_POST['status'],
        ];
        $this->model->createStudent($data);
        header('location: ../index.php');
    }

    public function edit($id) {
        $students = $this->model->getStudentById($id);
        require __DIR__ . '/../views/students/edit.php';
    }

    public function update($id) {
        $data = [
            'id' => $id,
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'course' => $_POST['course'],
            'year_level' => $_POST['year_level'],
            'status' => $_POST['status'],
            ];
            $this->model->updateStudent($data);
            header('location: ../index.php');

    }

    public function delete($id) {
        $this->model->deleteStudent($id);
        header('location: ../index.php');
    }
}