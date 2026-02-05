<?php
require_once 'models/User.php';

class AuthController {

    public function register() {
        if (!empty($_POST)) {
            User::register($_POST['username'], $_POST['password']);
            header("Location: index.php?action=login");
        }
        require 'views/auth/register.php';
    }

    public function login() {
        if (!empty($_POST)) {
            $user = User::login($_POST['username'], $_POST['password']);
            if ($user) {
                $_SESSION['user'] = $user['username'];
                header("Location: index.php");
                exit;
            }
        }
        require 'views/auth/login.php';
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
    }
}
