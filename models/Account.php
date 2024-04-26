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
    public static function create($accountData) {
        $account = new Account($accountData['id'], $accountData['username'], $accountData['password'], $accountData['type'], $accountData['email']);
        return $account;
    }

    public function save() {

    }

    // ------- Read
    public static function find_by($cname, $cvalue) {
        $accountData = query('GET', 'account.php', array('cname' => $cname, 'cvalue' => $cvalue));
        $account = Account::create($accountData);
        return $account;
    }

    // ------- Update

    // ------- Delete

    // ------- Authentication
    public static function login($username, $password) {
        list($httpCode, $accountData) = query('POST', 'login.php', ['username' => $username, 'password' => $password]);
        if ($httpCode == 200) {
            $account = Account::create($accountData);
        } else {
            $account = null;
        }
        return $account;
    }
}
?>