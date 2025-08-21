<?php
require_once '../src/config/database.php';
require_once '../src/controllers/UserController.php';

session_start();

$controller = new UserController();

$page = $_GET['page'] ?? 'dashboard';

switch ($page) {
    case 'dashboard':
        require '../src/views/dashboard.php';
        break;
    case 'profile':
        require '../src/views/profile.php';
        break;
    default:
        http_response_code(404);
        echo "Page not found.";
        break;
}
?>