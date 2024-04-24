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
    public function save() {

    }

    // ------- Read
    public static function all() {
        $books = query('GET', 'books.php', []);
        return $books;
    }

    // ------- Update

    // ------- Delete
}

?>