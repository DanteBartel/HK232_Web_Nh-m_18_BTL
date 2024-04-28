<?php

require_once 'models/Book.php';

class HomeController {
    public function index() {
        $book = Book::find_by_id(1);
        require 'views/home.php';
    }
}
?>