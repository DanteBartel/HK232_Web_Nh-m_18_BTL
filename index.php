<?php

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        require_once 'controllers/HomeController.php';
        $controller = new HomeController();
        $controller->index();
        break;
    case 'book':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        require_once 'controllers/BookController.php';
        $controller = new BookController();
        $controller->show($id);
        break;
    default:
        echo "404 Not Found";
        break;
}

?>