<?php
date_default_timezone_set("Europe/Warsaw");
print "aktualna data i czas: " . date("Y.m.d H:i:s");
echo "<br />";

$unix_time = time();
// print $unix_time;
echo "<br />";
$unix_time_2000 = mktime(0, 0, 0, 0, 0, 2000);

print "Od poczatku 2000 roku uplynelo " . ($unix_time - $unix_time_2000) . " sekund.";
echo "<br />";
$week = ['niedziela', 'poniedziałek', 'wtorek', 'sroda', 'czwartek', 'piatek', 'sobota'];
$month = 8;
$day = 30;
$year = 1997;

if (checkdate($month, $day, $year)) {
    $d = date("w", mktime(0, 0, 0, $month, $day, $year));
  
    print "$year.$month.$day to " . $week[$d];
} else {
    print "data jest bledna";
}
