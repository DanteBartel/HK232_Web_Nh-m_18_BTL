<?php

require_once 'models/Book.php';

class HomeController {
    
    public function index() {
        $books = [
            new Book(1, 'Book 1', 100),
            new Book(2, 'Book 2', 200),
            new Book(3, 'Book 3', 300),
        ];

        require 'views/home.php';
    }
}

?>