<?php

// import method query
require_once 'models/query.php';

class Book {
    public $id;
    public $name;
    public $price;
    public $image;

    public function __construct($id, $isbn, $name, $price, $author, $description, $image, $quantity) {
        $this->id = $id;
        $this->isbn = $isbn;
        $this->name = $name;
        $this->price = $price;
        $this->author = $author;
        $this->description = $description;
        $this->image = $image;
        $this->quantity = $quantity;
    }

    // ------- Create
    public static function create($bookData) {
        $book = new Book($bookData['id'], $bookData['isbn'], $bookData['name'], $bookData['price'], $bookData['author'], $bookData['description'], $bookData['image'], $bookData['quantity']);
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
        list($httpCode, $bookData) = query('GET', 'book.php', ['id' => $id]);
        $book = Book::create($bookData);
        return $book;
    }

    // ------- Update

    // ------- Delete
}

?>