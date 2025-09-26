<?php


use Controllers\LoginCustomerController;

require_once __DIR__ . "/../Controllers/LoginCustomerController.php";

$controller = new LoginCustomerController();

$action = $_GET['action'] ?? 'login';

if ($action === 'logout') {
    $controller->logout();
} elseif ($action === 'adminlogout') {
    $controller->adminlogout();
} else {
    $controller->login();
}
