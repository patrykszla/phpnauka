<?php

$kontakt = [];

$kontakt["imie"] = 'Adam';
$kontakt["nazwisko"] = 'Kowalski';
$kontakt['telefon'] = '22211133';

$kontakty = [];

array_push($kontakty, $kontakt);
print_r($kontakty);
echo "<br />";

$kontakt['imie'] = 'Ania';
$kontakt['nazwisko'] = 'Nowak';
$kontakt['telefon'] = '33331211';

$kontakty[] = $kontakt;

print_r($kontakty);
echo "<br />";

printf("imie pierwszego kontaktu to: %s", $kontakty[0]['imie']);
echo "<br />";

$e = count($kontakty);

for ($i = 0; $i < $e; $i++) {
    echo "<br />";
    printf(
        "%s\t%s\ttel. %s" . PHP_EOL,
        $kontakty[$i]['imie'],
        $kontakty[$i]['nazwisko'],
        $kontakty[$i]['telefon']
    );
}

$klasa_1a = [
    ['imie' => 'Adam', 'ocena' => 2.5],
    ['imie' => 'Jola', 'ocena' => 1.5],
    ['imie' => 'Robert', 'ocena' => 4.5],
    ['imie' => 'Kasia', 'ocena' => 5.5]
];

$klasa_1b = [
    ['imie' => 'Kasia', 'ocena' => 3],
    ['imie' => 'Magda', 'ocena' => 4.5],
    ['imie' => 'Rafał', 'ocena' => 3.5],
    ['imie' => 'Antek', 'ocena' => 5.5],
];

$klasa_1c = [
    ['imie' => 'Kasia', 'ocena' => 3],
    ['imie' => 'Magda', 'ocena' => 4.5],
    ['imie' => 'Rafał', 'ocena' => 3.5],
    ['imie' => 'Antek', 'ocena' => 5.5],
];

$klasy = [
    '1a' => $klasa_1a,
    '1b' => $klasa_1b,
    '1c' => $klasa_1c
];

echo "<br />";
#print_r($klasy);

foreach ($klasy as $e => $klasa) {
    echo "<br />";
    print "Klasa :" . $e . "\n" .
        "--------------\n" .
        "Imie\tOcena\n" .
        "--------------\n";

    foreach ($klasa as $k) {
        echo "<br />";
        printf("%s\t%s\n", $k['imie'], $k['ocena']);
    }
    echo "<br />";
    print "--------------\n";

    $oceny = array_column($klasa, 'ocena');
    $srednia = array_sum($oceny) / count($oceny);
    printf("Srednia\t%.2f\n\n", $srednia);
}


$imiona = [];

$imiona = array_merge($klasa_1a, $klasa_1b);
$imiona = array_column($imiona, 'imie');
$imiona = array_unique($imiona);
echo "<br />";
sort($imiona);
print_r($imiona);

foreach ($imiona as $k => $imie) {
    echo "<br/>";
    print $imie . ", ";
}
