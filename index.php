<?php

session_start();

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
    case 'books':
        require_once 'controllers/BookController.php';
        $controller = new BookController();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['id']) && !isset($_GET['verb'])) {
                if (isset($_GET['page'])) {
                    $controller->showPage($_GET['page']);
                } else {
                    $controller->showAll();
                }
            } else if (isset($_GET['verb']) && $_GET['verb'] == 'new') {
                $controller->new();
            } else if (isset($_GET['id']) && !isset($_GET['verb'])) {
                $controller->show($_GET['id']);
            } else if (isset($_GET['id']) && isset($_GET['verb']) && $_GET['verb'] == 'edit') {
                $controller->edit($_GET['id']);
            }
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!isset($_GET['verb'])) {
                $controller->create();
            } else if (isset($_GET['verb']) && $_GET['verb'] == 'update') {
                $controller->update();
            } else if (isset($_GET['verb']) && $_GET['verb'] == 'destroy') {
                $controller->destroy();
            }
        }
        break;
    case 'favorite_books':
        require_once 'controllers/BookController.php';
        $controller = new BookController();
        if (isset($_GET['page'])) {
            $controller->showFavoriteBooksPage($_GET['page']);
        } else {
            $controller->showFavoriteBooks();
        }
        break;
    case 'ad_images':
        require_once 'controllers/AdImageController.php';
        $controller = new AdImageController();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_GET['book_id']) && isset($_GET['verb']) && $_GET['verb'] == 'new') {
                $controller->new();
            } else if (isset($_GET['id']) && isset($_GET['verb']) && $_GET['verb'] == 'edit') {
                $controller->edit($_GET['id']);
            }
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!isset($_GET['verb'])) {
                $controller->create();
            } else if (isset($_GET['verb']) && $_GET['verb'] == 'update') {
                $controller->update();
            } else if (isset($_GET['verb']) && $_GET['verb'] == 'destroy') {
                $controller->destroy();
            }
        }
    case 'accounts':
        require_once 'controllers/AccountController.php';
        $controller = new AccountController();
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['id']) && !isset($_GET['verb'])) {
                $controller->showAll();
            } else if (isset($_GET['verb']) && $_GET['verb'] == 'new') {
                $controller->new();
            } else if (isset($_GET['id']) && !isset($_GET['verb'])) {
                $controller->show($_GET['id']);
            } else if (isset($_GET['id']) && isset($_GET['verb']) && $_GET['verb'] == 'edit') {
                $controller->edit($_GET['id']);
            }
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!isset($_GET['verb'])) {
                $controller->create();
            } else if (isset($_GET['verb']) && $_GET['verb'] == 'update') {
                $controller->update();
            } else if (isset($_GET['verb']) && $_GET['verb'] == 'destroy') {
                $controller->destroy();
            }
        }
        break;
    case 'login':
        require_once 'controllers/AuthenticationController.php';
        $controller = new AuthenticationController();
        $controller->login();
        break;
    case 'logout':
        require_once 'controllers/AuthenticationController.php';
        $controller = new AuthenticationController();
        $controller->logout();
        break;
    case 'signup':
        require_once 'controllers/AuthenticationController.php';
        $controller = new AuthenticationController();
        $controller->signup();
        break;
    default:
        echo "404 Not Found";
        break;
}
?>