<?php

require_once 'models/Book.php';

class HomeController {
    
    public function index() {
        $book = new Book(1, 'Book 1', 100, 'assets/img/purplebook.jpg');
        require 'views/home.php';
    }
}

?>