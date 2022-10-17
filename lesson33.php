<?php
// try {

//     $db_server = 'localhost';
//     $db_name = 'db_php8';
//     $db_user = 'root';
//     $db_password = '';

//     $db_pdo = new PDO(
//         "mysql:host=$db_server;dbname=$db_name",
//         $db_user,
//         $db_password,
//         [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
//     );

//     $db_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $stmt = $db_pdo->prepare("SELECT * from ksiazki where id=:id");

//     if ($stmt->bindValue(':id', 1, PDO::PARAM_INT))
//     {
//         $stmt->execute();
//         print_r($stmt->fetch(PDO::FETCH_ASSOC));
//     }
//     $db_pdo = NULL;


// } catch (PDOException $e) {
//     print "Bład!: " . $e->getMessage();
//     die();
// }


$_GET['tytul'] = " WieŻa#";

$szukaj = (string)$_GET['tytul'];
$proces[] = $szukaj;

$szukaj = trim(mb_strtolower($szukaj));
$proces[] = $szukaj;

$szukaj = preg_replace('/[^0-9 a-z-!_\\p{L}]/u', '', $szukaj);
$proces[] = $szukaj;

if ($szukaj == '') {
    die("Nie ma co szukać");
}

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

    $stmt = $db_pdo->prepare("SELECT * FROM ksiazki WHERE tytul LIKE :tytul");
    $szukaj = '%' . $szukaj . '%';

    if ($stmt->bindValue(':tytul', $szukaj, PDO::PARAM_STR)) {
        $stmt->execute();
        print_r($stmt->fetch(PDO::FETCH_ASSOC));
        echo "<br />";
        print "Co sie dzialo ze zmienna szukaj: ";
        echo "<br />";
        foreach ($proces as $p) {
            print $p . " => ";
        }
    }
    print $szukaj;
    $db_pdo = NULL;
} catch (PDOException $e) {
    print "Bład!: " . $e->getMessage();
    die();
}
