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
