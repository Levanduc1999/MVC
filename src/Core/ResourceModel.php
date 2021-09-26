<?php
namespace MVC\Core;

use MVC\Core\ResourceModelInterface; 
use MVC\Config\Database;

class ResourceModel implements ResourceModelInterface {
    private $table;
    private $id;
    private $model;
    
    public function _init($table, $id, $model) {
        $this->table= $table;
        $this->id= $id;
        $this->model= $model;
    }

    public function save($model) {
        $sql = "INSERT INTO $this->table (title, description, created_at, updated_at) VALUES (:title, :description, :created_at, :updated_at)";

        $req = Database::getBdd()->prepare($sql);

        return $req->execute([
            'title' => $title,
            'description' => $description,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);
    }
    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE $this->id = ?";
        $req = Database::getBdd()->prepare($sql);
        return $req->execute([$id]);
    }
    public function showTask($id)
    {
        $sql = "SELECT * FROM $this->table WHERE $this->id =" . $id;
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetch();
    }

    public function showAllTasks()
    {
        $sql = "SELECT * FROM $this->table";
        $req = Database::getBdd()->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}