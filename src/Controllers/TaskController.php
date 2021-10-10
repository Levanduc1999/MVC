<?php

namespace MVC\Controllers;

use MVC\Models\Task;
use MVC\Config\Database;
use MVC\Core\Controller;
use MVC\Models\TaskModel;
use MVC\Models\TaskRepository;

class TaskController extends Controller
{
    private  $taskRepository;
    public function  __construct() {
        $this->taskRepository= new TaskRepository;
    }
    function index()
    {

        $d['tasks'] = $this->taskRepository->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            $task= new Task();
            $taskModel = new TaskModel();
            echo $_POST["title"];
            $taskModel->setTitle($_POST["title"]);
            $taskModel->setDescription($_POST["description"]);
            $taskModel->setCreatedAt(date('Y-m-d H:i:s'));
            $taskModel->setUpdatedAt(date('Y-m-d H:i:s'));
            if ($this->taskRepository->add($taskModel))
            {
                header("Location: " . WEBROOT . "task/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $d["task"] = $this->taskRepository->get($id);
        
        if (isset($_POST["title"]))
        {
            $taskModel = new TaskModel();
            $taskModel->setId($id);
            $taskModel->setTitle($_POST["title"]);
            $taskModel->setDescription($_POST["description"]);
            $taskModel->setCreatedAt(date('Y-m-d H:i:s'));
            $taskModel->setUpdatedAt(date('Y-m-d H:i:s'));
            if ($this->taskRepository->add($taskModel))
            {
                header("Location: " . WEBROOT . "task/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        if ( $this->taskRepository->delete($id))
        {
            header("Location: " . WEBROOT . "task/index");
        }
    }
}
?>