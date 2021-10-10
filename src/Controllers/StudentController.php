<?php

namespace MVC\Controllers;

use MVC\Models\Student;
use MVC\Config\Database;
use MVC\Core\Controller;
use MVC\Models\StudentModel;
use MVC\Models\StudentRepository;

class StudentController extends Controller
{
    private  $studentRepository;

    public function  __construct() {
        $this->studentRepository= new StudentRepository;
    }

    function index()
    {
        require(ROOT . 'Models/Student.php');


        $d['students'] = $this->studentRepository->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    { 
        if (isset($_POST["ten"]))
        {
            $studentModel= new StudentModel();
            $studentModel->setTen($_POST["ten"]);
            $studentModel->setTuoi($_POST["tuoi"]);
            $studentModel->setDiachi($_POST["diachi"]);
            $studentModel->setNgaysinh($_POST["ngaysinh"]);
            $studentModel->setGioitinh($_POST["gioitinh"]);
            if ($this->studentRepository->add($studentModel))
            {
                header("Location: " . WEBROOT . "student/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/Student.php');
        $student= new Student();

        $d["students"] = $this->studentRepository->get($id);

        if (isset($_POST["ten"]))
        {   
            $studentModel= new StudentModel();
            $studentModel->setID($id);
            $studentModel->setTen($_POST["ten"]);
            $studentModel->setTuoi($_POST["tuoi"]);
            $studentModel->setDiachi($_POST["diachi"]);
            $studentModel->setNgaysinh($_POST["ngaysinh"]);
            $studentModel->setGioitinh($_POST["gioitinh"]);
            if ($this->studentRepository->add($studentModel))
            {
                header("Location: " . WEBROOT . "student/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {

        if ($this->studentRepository->delete($id))
        {
            header("Location: " . WEBROOT . "student/index");
        }
    }

}
?>