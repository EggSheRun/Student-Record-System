<?php
require_once 'app/models/Model.php';
require_once 'app/models/Student.php';
class StudentController {
    public function index() {
        // The Controller "asks" the Model for the data
        $students = Student::all();
        require_once 'app/views/students/index.php';
    } 
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $course = $_POST['course'];

            $students = new Student();
        }
    }
}