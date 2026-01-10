<?php
require_once 'App/Models/Task.php';
class TaskController extends Controller {
    public function index() {
        $db = (new Database())->getConnection();
        $tasks = (new Task($db))->getAll($_SESSION['user_id']);
        $this->view('Tasks/index', ['tasks' => $tasks]);
    }
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $db = (new Database())->getConnection();
            (new Task($db))->create($_POST['title'], $_SESSION['user_id']);
            header("Location: /todo/tasks"); exit();
        }
    }
    public function complete() {
        if (isset($_GET['id'])) {
            $db = (new Database())->getConnection();
            (new Task($db))->markAsCompleted($_GET['id'], $_SESSION['user_id']);
        }
        header("Location: /todo/tasks"); exit();
    }
}