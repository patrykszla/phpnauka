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

    print "Ile potrzebuje czasu na przeczytanie ksiazki?";
    echo "<br />";

    print "AUTOR\t\tTYTUŁ\t\t\tCZAS";
    echo "<br />";

    $wynik = $db_pdo->query("
    SELECT (((stron * 3) / 60) +1) AS czas, autor,tytul FROM ksiazki
    ORDER BY stron DESC;");

    while ($wiersz = $wynik->fetch()) {
        printf(
            "%s\t%s\t%d godz." . '<br />',
            $wiersz['autor'], $wiersz['tytul'], $wiersz['czas']
        );
    }

    $db_pdo = NULL;

} catch (PDOException $e) {
    print "Błą!: " . $e->getMessage();
    die();
}
echo("<br/>");

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

    print "STATYSTYKA TABELI Z KSIAZKAMI";
    echo "<br />";

    $wynik = $db_pdo->query("
    SELECT
    count(*) AS liczba,
    SUM(stron) AS suma,
    AVG(stron) AS srednia,
    Min(rok) AS min,
    MAX(rok) AS max
    FROM ksiazki;
    ")->fetch();

    $db_pdo = NULL;
    printf("Liczba ksiazek w tabeli: %d ", $wynik['liczba']);
    echo "<br />";
    printf("suma wszystkich stron: %d", $wynik['suma']);
    echo "<br />";
    printf("srednia liczba stron: %d", $wynik['srednia']);
    echo "<br />";
    printf("Najstarsze wydanie: %d", $wynik['min']);
    echo "<br />";
    printf("Najnowsze wydanie: %d", $wynik['max']);
    echo "<br />";


} catch (PDOException $e) {
    print "Błąd :" . $e->getMessage();
    die();
}

