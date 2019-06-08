<?php
require($_SERVER['DOCUMENT_ROOT'].'/config/config.php');


class Database {

    private static $pdo = null;

    private function __construct() {

    }

    public static function getConnection(): PDO {
        if(self::$pdo == null) {
            try {
                self::$pdo = new PDO("mysql:host=".DB_HOST.":".DB_PORT.";dbname=".DB_NAME, DB_USER, DB_PWD);
            } catch(PDOException $e) {
                die('Erro ao conectar com o MySQL: ' . $e->getMessage());
            }
            self::$pdo->exec('set names utf8');
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
    }
}
?>