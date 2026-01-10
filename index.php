<?php
session_start();
require_once 'Core/Database.php';
require_once 'Core/Controller.php';

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'login';

// Routing Sistem
if ($url == 'login') {
    require_once 'App/Controllers/AuthController.php';
    (new AuthController())->login();
} elseif ($url == 'tasks') {
    if (!isset($_SESSION['user_id'])) { header("Location: /todo/login"); exit(); }
    require_once 'App/Controllers/TaskController.php';
    (new TaskController())->index();
} elseif ($url == 'task/store') {
    if (!isset($_SESSION['user_id'])) { header("Location: /todo/login"); exit(); }
    require_once 'App/Controllers/TaskController.php';
    (new TaskController())->store();
} elseif ($url == 'task/complete') {
    if (!isset($_SESSION['user_id'])) { header("Location: /todo/login"); exit(); }
    require_once 'App/Controllers/TaskController.php';
    (new TaskController())->complete();
} elseif ($url == 'logout') {
    session_destroy();
    header("Location: /todo/login");
    exit();
} else {
    header("Location: /todo/login");
    exit();
}