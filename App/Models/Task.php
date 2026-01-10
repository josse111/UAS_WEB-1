<?php
class Task {
    private $conn;
    public function __construct($db) { $this->conn = $db; }

    public function getAll($user_id) {
        $stmt = $this->conn->prepare("SELECT * FROM tasks WHERE user_id = :uid ORDER BY status DESC, id DESC");
        $stmt->execute(['uid' => $user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($title, $user_id) {
        $stmt = $this->conn->prepare("INSERT INTO tasks (title, user_id, status) VALUES (:title, :uid, 'pending')");
        return $stmt->execute(['title' => $title, 'uid' => $user_id]);
    }

    public function markAsCompleted($id, $user_id) {
        $stmt = $this->conn->prepare("UPDATE tasks SET status = 'completed' WHERE id = :id AND user_id = :uid");
        return $stmt->execute(['id' => $id, 'uid' => $user_id]);
    }
}