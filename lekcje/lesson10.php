<?php 
$city = "Londyn";

switch ($city) {
    case "Londyn":
        print "$city to stolica wielkiej brytanii";
        break;
    case "Berlin":
    case "Monachium";
        print "$city to interesujace miasto w niemczech";
        break;
    case "Zakopane":
    case "Krakow":
        print "$city to bardzo piekne miasto w Polsce!";
        break;
    default:
        print "pozostale miasta tez sa fajne";
}
echo '<br />';

//match

$code = 432;

$e = match($code) {
    400 => 'kwas',
    401, 402, 403 => 'alginian',
    432, 433 => 'monolaurynian',
    483 => 'winian',
    default => 'nie mam pojecia',
};

print "dodatek do zywnosci o kodzie $code to jakiś $e.".PHP_EOL;

echo '<br />';

$text = 'czesc';
$lang = match(true) {
    str_contains($text, 'czesc') => 'polski',
    str_contains($text, 'welcome') => 'angielski',
    str_contains($text, 'Hola') => 'hiszpanski0',
    default => '',

};
print "w lancuchu 'Czesc' wykryłem jezyk polski";
