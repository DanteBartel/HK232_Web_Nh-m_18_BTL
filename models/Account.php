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
        $id = isset($accountData['id']) ? $accountData['id'] : '';
        $username = isset($accountData['username']) ? $accountData['username'] : '';
        $password = isset($accountData['password']) ? $accountData['password'] : '';
        $type = isset($accountData['type']) ? $accountData['type'] : '';
        $email = isset($accountData['email']) ? $accountData['email'] : '';
        $account = new Account($id, $username, $password, $type, $email);
        return $account;
    }

    public function save() {
        list($httpCode, $datas) = query('POST', 'accounts.php', ['username' => $this->username, 'password' => $this->password, 'type' => $this->type, 'email' => $this->email]);
        if ($httpCode == 201) { return true; } else { return false; }
    }

    // ------- Read
    public static function all() {
        $accounts = [];
        list($httpCode, $accountDatas) = query('GET', 'accounts.php', []);
        foreach ($accountDatas as $accountData) {
            $account = Account::new($accountData);
            $accounts[] = $account;
        }
        return $accounts;
    }

    public static function find_by_id($id) {
        list($httpCode, $accountData) = query('GET', 'accounts.php', ['id' => $id]);
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

    public static function favorite_books_of_page($id, $page) {
        list($httpCode, $datas) = query('GET', 'favorite_book.php', ['account_id' => $id, 'return_type' => 'books', 'page' => $page]);
        if ($httpCode == 200) {
            // Books
            require_once 'models/Book.php';
            $bookDatas = $datas['bookDatas'];
            [$books, $book_ids] = [[], []];
            foreach ($bookDatas as $bookData) {
                $book = Book::new($bookData);
                $books[] = $book;
                $book_ids[] = $bookData['id'];
            }
            
            // $total_pages
            $total_pages = $datas['total_pages'];

            // Return ans
            return [$books, $book_ids, $total_pages];
        } else {
            return [[], [], []];
        }
    }

    // ------- Update
    public function update($old_password) {
        if (strlen($this->username) > 0) {
            list($httpCode, $accountDatas) = query('PUT', 'accounts.php', ['id' => $this->id, 'username' => $this->username]);
            if ($httpCode == 200) { return true; } else { return false; }
        } else if (strlen($this->email) > 0) {
            list($httpCode, $accountDatas) = query('PUT', 'accounts.php', ['id' => $this->id, 'email' => $this->email]);
            if ($httpCode == 200) { return true; } else { return false; }
        } else if (strlen($this->password) > 0) {
            list($httpCode, $accountDatas) = query('PUT', 'accounts.php', ['id' => $this->id, 'new_password' => $this->password, 'old_password' => $old_password]);
            if ($httpCode == 200) { return true; } else { return false; }
        }
        return false;
    }

    // ------- Delete
    public static function delete($id) {
        list($httpCode, $accountDatas) = query('DELETE', 'accounts.php', ['id' => $id]);
        if ($httpCode == 204) { return true; } else { return false; }
    }

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