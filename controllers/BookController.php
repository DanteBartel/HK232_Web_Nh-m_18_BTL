<?php

require_once 'models/Book.php';

class BookController {
    // ------ GET
    public function show($id) {
        // $book = new Book($id, "Book " . $id, $id * 100,'');
        $book = Book::find_by_id($id);
        $book->query_ad_images();
        require 'views/book.php';
    }

    public function showAll() {
        $books = Book::all();
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
            require 'views/books_admin.php';
        } else if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1) {
            require_once 'models/Account.php';
            $fav_book_ids = Account::favorite_book_ids_of($_SESSION['account_id']);
            require 'utils/is_fav_book.php';
            require 'views/books.php';
        } else {
            require 'views/books.php';
        }
    }

    public function showPage($page) {
        list($books, $total_pages) = Book::page($page);
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
            require 'views/books_admin.php';
        } else if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1) {
            require_once 'models/Account.php';
            $fav_book_ids = Account::favorite_book_ids_of($_SESSION['account_id']);
            require 'utils/is_fav_book.php';
            require 'views/books.php';
        } else {
            require 'views/books.php';
        }
    }

    public function showFavoriteBooks() {
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1) {
            require_once 'models/Account.php';
            [$books, $fav_book_ids] = Account::favorite_books_of($_SESSION['account_id']);
            require 'utils/is_fav_book.php';
            require 'views/books.php';
        } else {
            header('Location: index.php');
            exit;
        }
    }

    public function showFavoriteBooksPage($page) {
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1) {
            require_once 'models/Account.php';
            [$books, $fav_book_ids, $total_pages] = Account::favorite_books_of_page($_SESSION['account_id'], $page);
            require 'utils/is_fav_book.php';
            require 'views/books.php';
        } else {
            header('Location: index.php');
            exit;
        }
    }

    public function new() {
        // Return a page for input new book
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
            require 'views/books_admin_edit.php';
        } else {
            header('Location: index.php');
            exit;
        }
    }

    public function edit($id) {
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
            $book = Book::find_by_id($id);
            $book->query_ad_images();
            require 'views/books_admin_edit.php';
        } else {
            header('Location: index.php');
            exit;
        }
    }

    // ------ POST
    public function create() {
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Using Book model to create new book in db
            $book = new Book("", $_POST['isbn'], $_POST['name'], $_POST['price'], $_POST['author'], $_POST['description'], $_POST['image'], $_POST['quantity']);
            if ($book->create()) {
                echo "Book created successfully";
                $_SESSION['new_book'] = true;
                header('Location: index.php?action=books');
                exit;
            } else {
                echo "Book creation failed";
                $_SESSION['new_book'] = false;
                header('Location: index.php?action=books');
                exit;
            }
        }
    }

    public function update() {
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Using Book model to create new book in db
            $book = new Book($_POST['id'], $_POST['isbn'], $_POST['name'], $_POST['price'], $_POST['author'], $_POST['description'], $_POST['image'], $_POST['quantity']);
            $_SESSION['update_book'] = $book->update() ? true : false;
            header('Location: index.php?action=books&verb=edit&id=' . $_POST['id']);
            exit;
        }
    }

    public function destroy() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Using Book model to create new book in db
            $id = $_POST['id'];
            $_SESSION['delete_book'] = Book::delete($id) ? true : false;
            header('Location: index.php?action=books&page=' . $_GET['page']);
            exit;
        }
    }
}
?>