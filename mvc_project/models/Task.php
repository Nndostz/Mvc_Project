<?php
class Task {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM tasks");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name) {
        $stmt = $this->db->prepare("INSERT INTO tasks (name) VALUES (:name)");
        $stmt->execute(['name' => $name]);
    }

    public function update($id, $name) {
        $stmt = $this->db->prepare("UPDATE tasks SET name = :name WHERE id = :id");
        $stmt->execute(['name' => $name, 'id' => $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
