<?php

set_time_limit(600);
ini_set("default_socket_timeout", 300);
ob_implicit_flush();

$host = 'localhost';
$port = 12345;

$limit = 2;
$cnt = 1;

print "<Odebrałem> Uruchamiam serwer...".PHP_EOL;

if(($connect = stream_socket_server('tcp://'.$host.':'.$port)) === false)
{
    die("nie moge uruchomic serwera");
}
print "Gotowe!".PHP_EOL;
print "Limit połączen: $limit".PHP_EOL;

while ($socket = stream_socket_accept($connect))
{
    print"[$cnt] Zaakceptowane połączenie z  klientem".PHP_EOL;

    $read = stream_socket_recvfrom($socket, 1500, 0, $sender);
    if(empty($read) === false)
    {
        print "</Odebrałem wiadomość...".PHP_EOL;
        $response ='';
        
        switch($read)
        {
            case 'czas':
                $response = 'Czas lokalny: '. date('Y-m-d H:i:s');
        }
    }
}