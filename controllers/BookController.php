<?php

require_once 'models/Book.php';

class BookController {

    public function show($id) {
        $book = new Book($id, "Book " . $id, $id * 100);
        require 'views/book.php';
    }
}

?>