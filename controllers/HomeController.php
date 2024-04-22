<?php

require_once 'models/Book.php';

class HomeController {
    
    public function index() {
        $book = new Book(1, 'Book 1', 100);
        require 'views/home.php';
    }
}

?>