<?php
function drukuj(?string $tekst = "", ?bool $nowa_linia = true)
{
    print $tekst;
    if($nowa_linia === true)
    {
        echo "<br />";
    }
}

drukuj("lubię ", false);
drukuj("programować");
drukuj();
drukuj("ale lubie tez wakacje");


$drukuj = function(string $tekst2) {
    print $tekst2;
    echo "<br />";
};

$drukuj('funkcja $drukuj po raz pierwszy');

function mojaFunkcja($callback) {
    $callback('Funkcja $drukuj po raz drugi');
    echo "<br />";
}

mojaFunkcja($drukuj);

$zmienna = 'Funkcja $drukuj po raz trzeci';

$drukujWiek = function($callback) use ($zmienna) {
    $callback($zmienna);
};

$drukujWiek($drukuj);

function printUpper(string $tekst3) {
    $tekstUppercase = strtoupper($tekst3);
    print($tekstUppercase);
}

printUpper('duzy tekst');
echo'<br />';

function printUpDown(string $tekst4, $jaki) {
    if($jaki == 'duzy'){
        print(strtoupper($tekst4));
    }elseif($jaki== 'maly'){
        print(strtolower($tekst4));
    }
}

printUpDown('Ten tekst', 'maly');