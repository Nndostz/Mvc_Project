<?php
include 'models/Task.php';
include 'controllers/TaskController.php';

$pdo = include 'database.php';
$taskModel = new Task($pdo);
$taskController = new TaskController($taskModel);

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if ($action === 'create') {
    $taskController->create();
} elseif ($action === 'edit' && $id) {
    $taskController->edit($id);
} elseif ($action === 'delete' && $id) {
    $taskController->delete($id);
} else {
    $taskController->index();
}
