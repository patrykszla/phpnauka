<?php

// $myText = "to jest maly krok dla czlowieka, ale dla karla normalny";
// $searchText = "dla";

// $pos = mb_strpos($myText,$searchText);
// if ($pos !== false)
// {
//     print "pierwsze wystapienie ciagu znaków \"$searchText\" ";
//     print "zostalo odnalezione na pozycji nr $pos.";

// } 
// else
// {
//     print "szukany tekst nie został odnaleziony";
// }

// echo "<br />";

$myText = "Jak czytac KSIAZKI i dlaczego ksiazki warto czytac";
$searchText ='ksiazki';

$pos1 = mb_stripos($myText, $searchText);
$pos2 = mb_strrpos($myText, $searchText);

if ($pos1 === false && $pos2 === false) {
    print "szukany tekst nie zostal odnaleziony";   
}
else
{
    if($pos1 !== false) {
        print "pierwsze wystapienie ciagu znaków \"$searchText\" ";
        print "zostalo odnalezione na pozycji nr $pos1";
    }
    print PHP_EOL;

    if($pos2 !== false) {
        print "ostatnie wystapienie ciagu znakow \"$searchText\" ";
        print "zostalo odnalezione na pozycji nr $pos2.";
    }
}
