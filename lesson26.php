<?php
require_once "funkcje.php";
require_once "licznik.php";


$numer = 'KWI 25242';
$woj = rejestracja_pojazdu(numer: $numer);



if ($woj !== false) {
    print "Rejestracja pojazdu $numer to województwo $woj";
} else {
    print "wpisz poprawny numer rejestracyjny";
}

echo "<br />";

print "Jestes " . licznik(filename: 'licznik.txt') . " gosciem na mojej stronie";


echo "<br />";

if (function_exists("triangle")) {
    $a = 12;
    $h = 5;
    $t = triangle(a: $a, h: $h);

    printf("pole trojkata o podstawie %d i wysokosci %d wynosi %d", $a, $h, $t);
} else {
    print "Dolacz kod funkcji 'triangle do swojego programu";
}
