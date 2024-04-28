<?php

require_once 'models/Book.php';

class BookController {
    // ------ GET
    public function show($id) {
        // $book = new Book($id, "Book " . $id, $id * 100,'');
        $book = Book::find_by_id($id);
        require 'views/book.php';
    }

    public function showAll() {
        $books = Book::all();
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
            require 'views/books_admin.php';
        } else {
            require 'views/books.php';
        }
    }

    public function new() {
        // Return a page for input new book
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
            require 'views/books_admin_new.php';
        } else {
            // header('Location: index.php');
            // exit;
        }
    }

    public function edit() {

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

    }

    public function destroy() {

    }
}

?>