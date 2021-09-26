<?php

namespace MVC\Controllers;

use MVC\Models\Task;
use MVC\Config\Database;
use MVC\Core\Controller;
use MVC\Models\TaskRepository;

class TaskController extends Controller
{
    private  $taskRepository;
    public function  __construct() {
        $this->taskRepository= new TaskRepository;
    }
    function index()
    {
        require(ROOT . 'Models/Task.php');

        $tasks = new Task();

        $d['tasks'] = $this->taskRepository->getAll();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["title"]))
        {
            require(ROOT . 'Models/Task.php');

            $task= new Task();

            if ($task->create($_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "task/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/Task.php');
        $task= new Task();

        $d["task"] = $task->showTask($id);

        if (isset($_POST["title"]))
        {
            if ($task->edit($id, $_POST["title"], $_POST["description"]))
            {
                header("Location: " . WEBROOT . "task/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Task.php');

        $task = new Task();
        if ($task->delete($id))
        {
            header("Location: " . WEBROOT . "task/index");
        }
    }
}
?>