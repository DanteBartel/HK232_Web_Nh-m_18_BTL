<?php

require_once 'models/Account.php';

class AccountController {
    // ------ GET
    public function showAll() {
        $accounts = Account::all();
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
            require 'views/accounts_admin.php';
        } else {
            header('Location: index.php');
            exit;
        }
    }

    public function edit($id) {
        $account = Account::find_by_id($id);
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1) {
            require 'views/account.php';
        }
    }

    public function new() {}

    // ------ POST
    public function create() {}

    public function update() {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $new_password = isset($_POST['new_password']) ? $_POST['new_password'] : '';
        $old_password = isset($_POST['old_password']) ? $_POST['old_password'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $account = new Account($_SESSION['account_id'], $username, $new_password, '', $email);
        if ($account->update($old_password)) {
            $_SESSION['update_account'] = true;
            if (strlen($username) > 0) { $_SESSION['username'] = $account->username; }
        } else {
            $_SESSION['update_account'] = false;
        }
        header('Location: index.php?action=accounts&verb=edit&id=' . $_SESSION['account_id']);
        exit;
    }

    public function destroy() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Using Account model to delete book in db
            $id = $_POST['id'];
            $_SESSION['delete_account'] = Account::delete($id) ? true : false;
            header('Location: index.php?action=accounts');
            exit;
        }
    }
}

?>