<?php
try {
    $db_server = 'localhost';
    $db_name = 'db_php8';
    $db_user = 'root';
    $db_password = '';

    $db_pdo = new PDO(
        "mysql:host=$db_server;dbname=$db_name",
        $db_user,
        $db_password,
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
    );

    $db_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db_pdo->exec(
        "CREATE TABLE IF NOT EXISTS `UczestnicyBalu` (
        `id` int PRIMARY KEY AUTO_INCREMENT,
        `imie` varchar(50) DEFAULT '',
        `postac` varchar(50) DEFAULT '',
        `wiek` tinyint UNSIGNED DEFAULT 0
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;"
    );

    $db_pdo->exec("INSERT INTO UczestnicyBalu (imie, postac, wiek)
    VALUES('Ariel', 'Szeryf', 8);");

    $db_pdo = NULL;
} catch (PDOException $e) {
    print "Blad :" . $e->getMessage();
    die();
}
