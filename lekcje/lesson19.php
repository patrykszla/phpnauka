<?php

$name = "Ken";

function printName() {
    $name = "agentka polowa rio ";
    print ("zmienna lolkalna: $name");
}
echo "<br />";
print "zmienna globalna $name";
echo "<br />";
printName();
echo "<br />";
print "zmienna globalna $name";


echo "<br />";


$name2 = 'name numer 2';

function printName2()
{
    global $name2;
    print "globalna przed zmiana: $name2";
    $name2 = "imie po zmianie globalnej";
    print "globalna po zmianie: $name2";
}

print "zmienna globalna: $name2";
printName2();
echo "<br />";
print "zmienna globalna: $name2";
echo "<br />";
print_r($_SERVER);
