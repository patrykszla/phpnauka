<?php

$kontakt = [];

$kontakt["imie"] = 'Adam';
$kontakt["nazwisko"] = 'Kowalski';
$kontakt['telefon'] ='22211133';

$kontakty = [];

array_push($kontakty, $kontakt);
print_r($kontakty);
echo "<br />";

$kontakt['imie'] = 'Ania';
$kontakt['nazwisko'] = 'Nowak';
$kontakt['telefon'] ='33331211';

$kontakty[] = $kontakt;

print_r($kontakty);
echo "<br />";

printf("imie pierwszego kontaktu to: %s", $kontakty[0]['imie']);
echo "<br />";

$e = count($kontakty);

for ($i = 0; $i < $e; $i++) {
    echo "<br />";
    printf(
        "%s\t%s\ttel. %s".PHP_EOL,
        $kontakty[$i]['imie'],
        $kontakty[$i]['nazwisko'],
        $kontakty[$i]['telefon']
    );
}

