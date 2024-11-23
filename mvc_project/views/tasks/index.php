<h1>To-Do List</h1>
<a href="?action=create">Add Task</a>
<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?= htmlspecialchars($task['name']) ?>
            <a href="?action=edit&id=<?= $task['id'] ?>">Edit</a>
            <a href="?action=delete&id=<?= $task['id'] ?>">Delete</a>
        </li>
    <?php endforeach; ?>
</ul>
