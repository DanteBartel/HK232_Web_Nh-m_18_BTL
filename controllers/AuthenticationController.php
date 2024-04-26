<?php

require_once 'models/Account.php';

class AuthenticationController {
    public function login() {
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $username = $_POST['username'];
            $password = $_POST['password'];
            $remember = isset($_POST['remember']) ? true : false;

            // Calling log in api
            $account = Account::login($username, $password);

            // Verify credentials
            if ($account) {
                // Credentials are correct, start a new session
                $_SESSION['loggedin'] = true;
                $_SESSION['user_id'] = $account->id;
                $_SESSION['username'] = $account->username;
                header('Location: index.php?action=index');
                exit;
            } else {
                // Incorrect username or password
                $error = 'Invalid username or password';
            }
        } else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            // TODO: Implement Remember Me
        }
        require 'views/login.php';
    }

    public function signup() {

    }

    public function logout() {
        // Check if user is logged in
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            // TODO: Implement remove remember me

            // Unset all session variables
            $_SESSION = [];

            // Destroy the session
            session_destroy();
        }

        // Redirect to login page after logout
        header('Location: index.php');
        exit;
    }
}
?>