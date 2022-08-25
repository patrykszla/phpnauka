<?php
declare(strict_types = 1);

function calcStatsYears(int $start, int $end, ?bool $print = true) : int
{
    $days = ($end - $start) * 365;
    $hours = $days * 24;
    $mins = $hours * 60;
    $secs = $mins * 60;

    if ($print === true){
        print "Od początku roku $start do konca roku $end jest:";
        print "$days dni, $hours godzin, $secs sekund!";
    }
    return(int)$secs;
}

$sec1 = calcStatsYears(start:1901, end: 2000, print: true);
echo "<br />";
$sec2 = calcStatsYears(end:2019, start: 2001);
echo "<br />";
print "razem sekund: ". ($sec1 + $sec2);