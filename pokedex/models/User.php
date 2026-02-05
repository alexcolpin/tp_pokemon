<?php
require_once 'config/database.php';

class User {

    public static function register($username, $password) {
        $db = Database::connect();
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $db->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
        return $stmt->execute([$username, $hash]);
    }

    public static function login($username, $password) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }
}
