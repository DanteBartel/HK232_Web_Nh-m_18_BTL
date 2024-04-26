<?php

// import method query
require_once 'models/query.php';

class Book {
    public $id;
    public $name;
    public $price;
    public $image;

    public function __construct($id, $name, $price, $image) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    // ------- Create
    public static function create($bookData) {
        $book = new Book($bookData['id'], $bookData['name'], $bookData['price'], $bookData['image']);
        return $book;
    }

    public function save() {

    }

    // ------- Read
    public static function all() {
        $books = [];
        list($httpCode, $bookDatas) = query('GET', 'books.php', []);
        foreach ($bookDatas as $bookData) {
            $book = Book::create($bookData);
            $books[] = $book;
        }
        return $books;
    }

    public static function find_by_id($id) {
        list($httpCode, $bookData) = query('GET', 'book.php', array('id' => $id));
        $book = Book::create($bookData);
        return $book;
    }

    // ------- Update

    // ------- Delete
}

?>