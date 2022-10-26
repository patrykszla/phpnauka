<?php

$myText = "Działaj! Nie jutro, nie za godzinę. Teraz!";
$myTextToLower = mb_strtolower($myText);
$myTextToUpper = mb_strtoupper($myText);

$myTextFirst1 = ucfirst($myTextToLower);
$myTextWords1 = ucwords($myTextToLower);
$myTextWord2 = mb_convert_case($myTextToLower, MB_CASE_TITLE, 'UTF-8');

print $myText.PHP_EOL;
echo "<br />";
print $myTextToLower.PHP_EOL;
echo "<br />";
print $myTextToUpper;
echo "<br />";
print $myTextFirst1;
echo "<br />";
print $myTextWords1;
echo "<br />";
print $myTextWord2;

echo "<br />";

$myText2 = "Z usmiechem na twarzy człowiek podwaja swoje możliwości";
$myTextLen = mb_strlen($myText2);
$myCut= 22;

$newText1 = mb_substr($myText2, 0 , 21);
$newText2 = mb_substr($myText2, $myCut, $myTextLen-$myCut);
$newText3 = mb_substr($myText2, $myCut, 8);

print $myText2;
echo "<br />";
print $newText1;
echo "<br />";
print $newText2;
echo "<br />";
print $newText3;


echo "<br />";
$myText4 ="Oczywiscie, że dzik jest najlepszym przyjacielem człowieka!";

$myTextDog = str_replace('dzik', 'pies', $myText4);
echo "<br />";

print $myText4;
echo "<br />";
print $myTextDog;
echo "<br />";

$myText5 = "Programowanie";
$myTextRev = strrev($myText5);
$myTextRepeat = str_repeat('*', 10);

print $myText5;
echo "<br />";
print $myTextRev;
echo "<br />";
print $myTextRepeat;
echo "<br />";



$name = "indra";
$enter = " Indra ";

$enter = mb_strtolower(trim($enter));
if ($name == $enter) {
    print "imiona sa identyczne";
} else {
    print "imiona sie roznia";
}
