<?php
require_once 'app/models/Model.php';
require_once 'app/models/Student.php';
class StudentController {
    public function index() {
        // The Controller "asks" the Model for the data
        $students = Student::all();
        $students = new Student();

        // Then it "loads" the view and passes the data to it
        require_once 'app/views/students/index.php';
    }
}