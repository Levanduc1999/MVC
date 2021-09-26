<?php
namespace MVC\Models;

use MVC\Models\TaskResourceModel;

class TaskRepository {
    public  $talkResourModel;
    
    public function  __construct() {
        $this->talkResourModel= new TaskResourceModel;
    }
    public function add($model){
        return $this->talkResourModel->save($model);
    }
    public function get($id) {
        return $this->talkResourModel->showTask($id);
    }
    public function delete($model){
        return $this->talkResourModel->delete($model);
    }
    public function getAll(){
        return $this->talkResourModel->showAllTasks();
    }
}
