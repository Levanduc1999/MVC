<?php

namespace MVC\Models;

use MVC\Core\Model;
use MVC\Config\Database;

class Student extends Model
{

    public function create($ten, $tuoi, $diachi, $ngaysinh, $gioitinh)
    {
        $sql = "INSERT INTO students (ten, tuoi, diachi, ngaysinh, gioitinh ) VALUES (:ten, :tuoi, :diachi, :ngaysinh, :gioitinh)";
       
        $req = Database::getBdd()->prepare($sql);
        var_dump($req);
        print_r($req->execute([
            'ten' => $ten,
            'tuoi' => $tuoi,
            'diachi' => $diachi,
            'ngaysinh' => $ngaysinh,
            'gioitinh' => $gioitinh,
        ]));
        die;
    }
    public function edit($id, $ten, $tuoi, $diachi, $ngaysinh, $gioitinh)
    {
        $sql = "UPDATE students SET ten = :ten, tuoi = :tuoi , diachi = :diachi, ngaysinh = :ngaysinh, gioitinh = :gioitinh WHERE id = :id";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'id' => $id,
            'ten' => $ten,
            'tuoi' => $tuoi,
            'diachi' => $diachi,
            'ngaysinh' => $ngaysinh,
            'gioitinh' => $gioitinh,
        ]);
    }
}
?>