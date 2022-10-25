<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Lista ksiazek</h2>
    <ol>
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
                [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']
            );
            $db_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $wynik = $db_pdo->query("SELECT autor, tytul FROM ksiazki");

            while ($wiersz = $wynik->fetch()) {
                printf(
                    "
            <li> %s, %s</li>
            ",
                    $wiersz['autor'],
                    $wiersz['tytul']
                );
            }
        } catch (PDOException $e) {
            print "bład:" . $e->getMessage();
            die();
        }
        ?>
    </ol>
</body>

</html>