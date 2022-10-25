<?php

$host = 'localhost';
$port = 12345;

$command = (isset($argv[1])) ? trim($argv[1]) : 'kalkulatorr';

echo nl2br("<> Nawiazuje połączenie z serwerem... \n");

if (($socket = stream_socket_client('tcp://'.$host.':'.$port)) === false) {
    die('Nie moge uruchomic klienta.');
}

if (stream_socket_sendto($socket, $command) !== false) {
    $response = fread($socket, 4096);
    print $response;
}

stream_socket_shutdown($socket, STREAM_SHUT_RDWR);
