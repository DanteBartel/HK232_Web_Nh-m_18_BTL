<?php

require_once 'models/Book.php';

class BookController {

    public function show($id) {
        $book = new Book($id, "Book " . $id, $id * 100,'');
        require 'views/book.php';
    }

    public function showAll() {
        $books = [
            new Book(1, 'The Purple Book', 100, 'assets/img/purplebook.jpg'),
            new Book(2, 'Kỳ án ánh trăng', 200, 'assets/img/biasach.jpg'),
            new Book(3, 'Cá voi và hồ nước', 300, 'assets/img/cavoi.jpg'),
            new Book(4, 'Săn cá thần', 400, 'assets/img/fish.jpg'),
            new Book(5, 'Điều bí mật', 500, 'assets/img/secret.webp'),
            new Book(6, 'Đơn giản', 600, 'assets/img/simple.jpg')
        ];
        require 'views/books.php';
    }
}

?>