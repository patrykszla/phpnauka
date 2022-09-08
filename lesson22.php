<?php
$owoce = ['jablko', 'banan'];

print_r($owoce);
echo "<br />";
print "tablica ma " . count($owoce) . " elementy.";
echo "<br />";
array_push($owoce, 'arbuz');
array_push($owoce, 'gruszka');
print_r($owoce);
echo "<br />";
print "tablica ma " . count($owoce) . " elementy.";
echo "<br />";

print str_repeat('-', 30);

$owoc = array_pop($owoce);
print_r($owoc);
echo "<br />";
print_r($owoce);


$liczby = [];
$ile = 10;

for ($i = 0; $i <= $ile; $i++) {
    if ($i % 2 == 0) {
        $liczby[] = $i;
    }
}

$e = count($liczby);
for ($i = 0; $i < $e; $i++) {
    print "klucz = $i, wartosc = $liczby[$i]";
    echo "<br />";
}



$owoce = ["jablko", "banan", "arbuz", "gruszka"];

print "przed sortowaniem:";
print_r($owoce);

sort($owoce);
print_r($owoce);

echo "<br />";

$owoce = [
    "c" => "jablko",
    "a" => "banan",
    "b" => "arbuz"
    
];

print "przed sortowaniem:";
print_r($owoce);
echo "<br />";

ksort($owoce);
print_r($owoce);


//napisz program ktory wydrukuje tabele z kolejnymi liczbami nieparzystymi
$numbers = [];
for($i = 1; $i <= 20; $i++){
    if($i % 2 != 0 ) {
        print($i);
        echo "<br />";
        array_push($numbers, $i);
    }
}
print_r($numbers);