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
                $_SESSION['account_id'] = $account->id;
                $_SESSION['username'] = $account->username;
                $_SESSION['user_type'] = $account->type;
                // Create cookie
                setcookie('account_id', $account->id);
                // Head back to home page
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
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve form data
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            // Creating new Account object
            $account = new Account('', $username, $password, 1, $email);

            // Verify credentials
            if ($account->save()) {
                // Head back to home page
                $_SESSION['new_account'] = true;
                header('Location: index.php?action=login');
                exit;
            } else {
                // Incorrect username or password
                $error = 'Sign up Failed';
            }
        }
        require 'views/signup.php';
    }

    public function logout() {
        // Check if user is logged in
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            // TODO: Implement remove remember me

            // Unset all session variables
            $_SESSION = [];

            // Unset cookie
            $cookies = $_COOKIE;
            foreach ($cookies as $name => $value) {
                setcookie($name, '', time() - 3600, '/');
            }

            // Destroy the session
            session_destroy();
        }

        // Redirect to login page after logout
        header('Location: index.php');
        exit;
    }
}
?>