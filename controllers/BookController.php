<?php

require_once 'models/Book.php';

class BookController {

    public function show($id) {
        $book = new Book($id, "Book " . $id, $id * 100);
        require 'views/book.php';
    }

    public function showAll() {
        $books = [
            new Book(1, 'Book 1', 100),
            new Book(2, 'Book 2', 200),
            new Book(3, 'Book 3', 300),
        ];
        require 'views/books.php';
    }
}

?>