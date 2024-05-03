<?php

require_once 'models/Account.php';

class AccountController {
    // ------ GET
    public function showAll() {
        $accounts = Account::all();
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
            require 'views/accounts_admin.php';
        }
    }

    // ------ POST
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