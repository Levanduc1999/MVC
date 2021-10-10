<?php
namespace MVC\Core;

use MVC\Core\ResourceModelInterface; 
use MVC\Config\Database;
use MVC\Core\Model;
use MVC\Models\TaskModel;

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
        echo "<br>";
        $modelArray= $model->getProperties($model);
        var_dump($modelArray);
        echo "<br>";
        $stringQuery="";
        foreach ($modelArray as $key=> $value){
            $stringQuery .= $key . " = :$key, ";    
        }
        $stringModel= chop(str_replace("id = :id, ","", $stringQuery),", ");
        
        $id =$modelArray['id'];
       
        if ($id == null){
            unset($modelArray['id']);
            $sql = "INSERT INTO $this->table SET $stringModel";
        } else {
            $sql = "UPDATE $this->table SET  $stringModel WHERE $this->id = $id";
            unset($modelArray['id']);
        }
        $req = Database::getBdd()->prepare($sql);
        echo "<br>";
        var_dump($req);
        echo "<br>";
        return $req->execute($modelArray);
        
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