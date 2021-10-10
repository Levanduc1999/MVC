<?php
//$_POST["ten"], $_POST["tuoi"], $_POST["diachi"], $_POST["ngaysinh"], $_POST["gioitinh"])
namespace MVC\Models;

use MVC\Config\Database;

use MVC\Core\Model;

class StudentModel extends Model
{
    protected $id;
    protected $ten;
    protected $tuoi;
    protected $diachi;
    protected $ngaysinh;
    protected $gioitinh;
    public function getID() {
        return $this->id;
    }
    public function setID($id) {
        $this->id= $id;
    }
    public function getTen() {
        return $this->ten;
    }
    public function setTen($ten) {
        $this->ten= $ten;
    }
     public function getTuoi() {
        return $this->tuoi;
    }
    public function setTuoi($tuoi) {
        $this->tuoi= $tuoi;
    }
    public function getDiachi() {
        return $this->diachi;
    }
    public function setDiachi($diachi) {
        $this->diachi= $diachi;
    }
    public function getNgaysinh() {
        return $this->ngaysinh;
    }
    public function setNgaysinh($ngaysinh) {
        $this->ngaysinh= $ngaysinh;
    }
    public function getGioitinh() {
        return $this->gioitinh;
    }
    public function setGioitinh($gioitinh) {
        $this->gioitinh= $gioitinh;
    }
}
