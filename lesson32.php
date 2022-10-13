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
        [PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8"]
    );

    $db_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    print "zawartosć bazy danych MySql";
    echo "<br />";
   

} catch (PDOException $e) {
    print "Błąd!: " .$e->getMessage();
    die();
}