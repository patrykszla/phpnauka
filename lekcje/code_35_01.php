<?php

set_time_limit(600);
ini_set("default_socket_timeout", 500);
ob_implicit_flush();

$host = 'localhost';
$port = 12345;

$limit = 5;
$cnt = 1;

print "<Odebrałem> Uruchamiam serwer..." . PHP_EOL;

if (($connect = stream_socket_server('tcp://' . $host . ':' . $port)) === false) {
    die("nie moge uruchomic serwera");
}
print "Gotowe!" . PHP_EOL;
print "Limit połączen: $limit" . PHP_EOL;

while ($socket = stream_socket_accept($connect)) {
    print "[$cnt] Zaakceptowane połączenie z  klientem" . PHP_EOL;

    $read = stream_socket_recvfrom($socket, 1500, 0, $sender);
    if (empty($read) === false) {
        print "</Odebrałem wiadomość..." . PHP_EOL;
        $response = '';

        switch ($read) {
            case 'kalkulator':
                $response = 'To co wyslales ='.$read;
                print "<?> Przygotowuje odpowiedz na twoj kalkukator".PHP_EOL;
                break;
            case 'czas':
                $response = 'Czas lokalny: ' . date('Y-m-d H:i:s');
                print "<?> Przygotowuje informacje o aktualnym czasie..." . PHP_EOL;
                break;
            case 'wersja-php':
                $response = 'Wersja PHP: ' . phpversion();
                print "<?> Przygotowuje informacje o wersji PHP..." . PHP_EOL;
                break;
            default:
                $response = 'Echo: ' . $read;
        }
        stream_socket_sendto($socket, $response, 0, $sender);
        echo  nl2br("=> Wyslałem wiadomość \n ");
        //    print '=> Wyslałem wiadomość ...'.PHP_EOL
    }

    fclose($socket);
    sleep(1);

    $cnt++;
    if ($cnt > $limit) {
        echo nl2br("[*] Przekroczono limit połączeń \n");
        break;
    }
}

print "<> Wyłączam serwer...";

stream_socket_shutdown($connect, \STREAM_SHUT_RDWR);

print "Gotowe!";
