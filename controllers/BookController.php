<?php

require_once 'models/Book.php';

class BookController {

    public function show($id) {
        // $book = new Book($id, "Book " . $id, $id * 100,'');
        $book= Book::find_by_id($id);
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
}

?>