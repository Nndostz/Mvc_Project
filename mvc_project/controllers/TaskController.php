<?php
class TaskController {
    private $task;

    public function __construct($task) {
        $this->task = $task;
    }

    public function index() {
        $tasks = $this->task->getAll();
        include 'views/tasks/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->task->create($_POST['name']);
            header('Location: /mvc_project');
        }
        include 'views/tasks/create.php';
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->task->update($id, $_POST['name']);
            header('Location: /mvc_project');
        }
        include 'views/tasks/edit.php';
    }

    public function delete($id) {
        $this->task->delete($id);
        header('Location: /mvc_project');
    }
}
