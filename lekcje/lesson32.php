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

    print "zawartosć bazy danych MySql";
    echo "<br />";
    print "ID\tAutor\t\tTYTUŁ\t\t\tROK\tSTRON";
    echo "<br />";

    $wynik = $db_pdo->query("SELECT * FROM ksiazki ORDER BY id ASC;");

    while ($wiersz = $wynik->fetch()) {
        printf(
            "%d\t%s\t%s\t%d\t%d",
            $wiersz['id'],
            $wiersz['autor'],
            $wiersz['tytul'],
            $wiersz['rok'],
            $wiersz['stron']

        );
        echo "<br />";
    }

    print "OSOBY";
    echo "<br />";
    print "ID\tIMIE\tNAZWISKO";
    echo "<br />";

    $wynik = $db_pdo->query("SELECT * FROM osoby ORDER BY id ASC;");
    while ($wiersz = $wynik->fetch()) {
        printf(
            "%d\t%s\t%s",
            $wiersz['id'],
            $wiersz['imie'],
            $wiersz['nazwisko']
        );
        echo "<br />";
    }

    print "WYPOZYCZENIA";
    echo "<br />";
    print "ID\tDATA\t\tID KSIAZKI\tID OSOBY";
    echo "<br />";

    $wynik = $db_pdo->query("SELECT * FROM wypozyczenia ORDER BY id ASC;");
    while ($wiersz = $wynik->fetch()) {
        printf(
            "%d\t%s\t%s\t\t%s",
            $wiersz['id'],
            $wiersz['data'],
            $wiersz['ksiazka'],
            $wiersz['osoba']
        );
        echo "<br />";
    }

    $db_pdo = NULL;
} catch (PDOException $e) {
    print "Błąd!: " . $e->getMessage();
    die();
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

    $result = $db_pdo->query(
        "SELECT w.id, w.data, k.tytul, o.imie, o.nazwisko
        FROM wypozyczenia as w, ksiazki AS k, osoby AS o
        WHERE w.ksiazka = k.id AND w.osoba = o.id AND k.rok > 2016
        ORDER BY w.id ASC;"
    );

    print "ID\tDATA\t\tTYTUł KSIĄŻKI\t\tWYPOZYCZAJACY";
    echo "<br />";

    foreach ($result as $r) {
        printf(
            "%s\t%s\t%s\t%s %s",
            $r['id'],
            $r['data'],
            $r['tytul'],
            $r['imie'],
            $r['nazwisko']
        );
        echo "<br />";
    }
    $db_pdo = NULL;
} catch (PDOException $e) {
    print "Błąd!: " . $e->getMessage();
    die();
}
