<?php
class Database {
    public static function connect() {
        try {
            return new PDO(
                "mysql:host=localhost;dbname=pokedex;charset=utf8",
                "root",
                "",
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {
            die("Erreur DB : " . $e->getMessage());
        }
    }
}
