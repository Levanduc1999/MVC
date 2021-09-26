<?php

namespace MVC\Models;

use MVC\Core\Model;

class TaskModel extends Model
{
    private $id;
    private $title;
    private $description;
    private $created_at;
    private $update_at;
    public function getID() {
        return $this->id;
    }
    public function setID($id) {
        $this->id= $id;
    }
    public function getTitle() {
        return $this->$title;
    }
    public function setTitle($title) {
        $this->title= $title;
    }
     public function getDescription() {
        return $this->description;
    }
    public function setDescription($description) {
        $this->description= $description;
    }
    public function getCreatedAt() {
        return $this->created_at;
    }
    public function setCreatedAt($created_at) {
        $this->created_at= $created_at;
    }
    public function getUpdateAt() {
        return $this->update_at;
    }
    public function setUpdateAt($update_at) {
        $this->update_at= $update_at;
    }
}
