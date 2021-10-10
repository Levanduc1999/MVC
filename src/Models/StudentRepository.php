<?php
namespace MVC\Models;

use MVC\Models\StudentResourceModel;

class StudentRepository {
    public  $studentResourModel;
    
    public function  __construct() {
        $this->studentResourModel= new StudentResourceModel;
    }
    public function add($model){
        return $this->studentResourModel->save($model);
    }
    public function get($id) {
        return $this->studentResourModel->showTask($id);
    }
    public function delete($model){
        return $this->studentResourModel->delete($model);
    }
    public function getAll(){
        return $this->studentResourModel->showAllTasks();
    }
}
