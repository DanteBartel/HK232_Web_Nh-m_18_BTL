<?php

// import method query
require_once 'models/query.php';

class Account {
    public $id;
    public $username;
    public $password;
    public $type;
    public $email;

    public function __construct($id, $username, $password, $type, $email) {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->type = $type;
        $this->email = $email;
    }

    // ------- Create
    public static function new($accountData) {
        $account = new Account($accountData['id'], $accountData['username'], $accountData['password'], $accountData['type'], $accountData['email']);
        return $account;
    }

    public function save() {

    }

    // ------- Read
    public static function find_by($cname, $cvalue) {
        $accountData = query('GET', 'account.php', array('cname' => $cname, 'cvalue' => $cvalue));
        $account = Account::new($accountData);
        return $account;
    }

    public static function favorite_book_ids_of($id) {
        list($httpCode, $datas) = query('GET', 'favorite_book.php', ['account_id' => $id, 'return_type' => 'book_ids']);
        if ($httpCode == 200) {
            return array_map(fn($data) => $data['book_id'], $datas);
        } else {
            return [];
        }
    }

    public static function favorite_books_of($id) {
        list($httpCode, $bookDatas) = query('GET', 'favorite_book.php', ['account_id' => $id, 'return_type' => 'books']);
        if ($httpCode == 200) {
            require_once 'models/Book.php';
            $books = [];
            $book_ids = [];
            foreach ($bookDatas as $bookData) {
                $book = Book::new($bookData);
                $books[] = $book;
                $book_ids[] = $bookData['id'];
            }
            return [$books, $book_ids];
        } else {
            return [[], []];
        }
    }

    // ------- Update

    // ------- Delete

    // ------- Authentication
    public static function login($username, $password) {
        list($httpCode, $accountData) = query('POST', 'login.php', ['username' => $username, 'password' => $password]);
        if ($httpCode == 200) {
            $account = Account::new($accountData);
        } else {
            $account = null;
        }
        return $account;
    }
}
?>