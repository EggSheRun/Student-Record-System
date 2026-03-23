<?php
require_once '../models/Student.php';

class StudentController {

    private $model;
    
    public function __construct() {
    $this->model = new Student();

    }
    public function index() {
        $students = $this->model->getAllStudents();

        require '../views/students/index.php';  
    }

    public function create() {
        $create = $this->model();
    }

    public function store() {
        $store = $this->model->createStudent($data);

        require '../views/students/create.php';
    }

    public function
}