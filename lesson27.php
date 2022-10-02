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

//cw 3
echo "<br />";
$start = strtotime("now");
$end = strtotime("next friday 4pm");


$count = $end - $start;

$days = floor($count / (60 * 60 * 24));
$hours = floor(($count / (60 * 60)) % 24);
$minutes = floor(($count / 60) % 60);
$seconds = $count % 60;
echo "<br />";
printf("Weekend zaczyna się za %d dni, %d godzin, %d minut, %d sekund.", $days, $hours, $minutes, $seconds);


$table = [];
$i = 0;
do {
    $day = rand(1, 31);
    $month = rand(1, 31);
    $year = rand(2021, 2121);
    $hour = rand(0, 23);
    $min = rand(0, 59);
    $sec = rand(0, 59);

    if (checkdate($month, $day, $year)) {
        $table[] = strtotime("$year-$month-$day $hour:$min:$sec");
        $i++;
    }
} while ($i < 10);

sort($table);
foreach ($table as $t) {
    print date("Y.m.d H:i:s (D)", $t);
    echo "<br />";
}


//dodatkowe program losujacy
$b = 0;
$table2 = [];

do {
    $number = rand(1, 49);
    if (!(in_array($number, $table2))) {
        $table2[] = $number;
        $b++;
    }
    echo "<br />";
    
} while ($b< 6);

print_r($table2);
