<?php

$myText00 = "to jest maly krok dla czlowieka, ale dla karla normalny";
$searchText00 = "dla";

$pos = mb_strpos($myText00, $searchText00);
if ($pos !== false)
{
    print "pierwsze wystapienie ciagu znaków \"$searchText00\" ";
    print "zostalo odnalezione na pozycji nr $pos.";

} 
else
{
    print "szukany tekst nie został odnaleziony";
}

echo "<br />";

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

echo "<br />";

$myText1 = "zycie jest jak pudelko czekoladek- nie wiesz co sie trafi";
$myText2 = "miej serce i patrzaj w serce";

$len1 = mb_strlen($myText1);
$len2 = mb_strlen($myText2);

if($len1 == $len2)
{
    print "ciagi znakow maja ta sama dlugosc";
}
else
{
    print "ciagi znakow nie maja tej samej dlugosci." .PHP_EOL;
    print "pierwszy ma dlugosc $len1 znakow, a drugi ma dlugosc $len2 znakow";
}


echo "<br />";

$myText3 = "01101011";
$mask = "01"; //tych znakow szukamy

if (strspn($myText3, $mask) == strlen($myText3))
{
    print "lancuch '$myText3' to ciag znaków binarnych". PHP_EOL; 
}
