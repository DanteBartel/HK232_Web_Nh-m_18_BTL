<?php

// import method query
require_once 'models/query.php';

class Book {
    public $id;
    public $isbn;
    public $name;
    public $price;
    public $author;
    public $description;
    public $image;
    public $quantity;
    public $ad_images;

    // ------- Ultility
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
    
    public function data() {
        return ["id" => $this->id, "isbn" => $this->isbn, "name" => $this->name, "price" => $this->price, "author" => $this->author, "description" => $this->description, "image" => $this->image, "quantity" => $this->quantity];
    }

    public function query_ad_images() {
        require_once 'models/AdImage.php';
        $this->ad_images = AdImage::find_by_book_id($this->id);
    }

    // ------- Create
    public static function new($bookData) {
        $book = new Book($bookData['id'], $bookData['isbn'], $bookData['name'], $bookData['price'], $bookData['author'], $bookData['description'], $bookData['image'], $bookData['quantity']);
        return $book;
    }

    public function create() {
        list($httpCode, $bookDatas) = query('POST', 'books.php', $this->data());
        if ($httpCode == 201) { return true; } else { return false; }
    }

    // ------- Read
    public static function all() {
        $books = [];
        list($httpCode, $bookDatas) = query('GET', 'books.php', []);
        foreach ($bookDatas as $bookData) {
            $book = Book::new($bookData);
            $books[] = $book;
        }
        return $books;
    }

    public static function page($page) {
        $books = [];
        list($httpCode, $datas) = query('GET', 'books.php', ['page' => $page]);
        [$bookDatas, $total_pages] = [$datas['bookDatas'], $datas['total_pages']];
        foreach ($bookDatas as $bookData) {
            $book = Book::new($bookData);
            $books[] = $book;
        }
        return [$books, $total_pages];
    }

    public static function find_by_id($id) {
        list($httpCode, $bookData) = query('GET', 'book.php', ['id' => $id]);
        $book = Book::new($bookData);
        return $book;
    }

    // ------- Update
    public function update() {
        list($httpCode, $bookDatas) = query('PUT', 'books.php', $this->data());
        if ($httpCode == 200) { return true; } else { return false; }
    }

    // ------- Delete
    public static function delete($id) {
        list($httpCode, $bookDatas) = query('DELETE', 'books.php', ['id' => $id]);
        if ($httpCode == 204) { return true; } else { return false; }
    }
}
?>