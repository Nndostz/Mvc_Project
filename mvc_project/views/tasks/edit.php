<h1>Edit Task</h1>
<form method="POST">
    <input type="text" name="name" value="<?= htmlspecialchars($task['name']) ?>">
    <button type="submit">Update</button>
</form>
<a href="/mvc_project">Back</a>
