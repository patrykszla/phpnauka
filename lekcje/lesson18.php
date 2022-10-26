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
echo "<br />";



$kalkulator = function(string $operacja, float $x, float $y) : float {
    return match($operacja)
    {
        '+' => $x + $y,
        '-' => $x - $y,
        '*' => $x * $y,
        '/' => fdiv($x, $y),
    };
};

$x = (float)12;
$y = (float)8;

printf("%.2f + %.2f = %.2f".PHP_EOL, $x, $y, $kalkulator('+',$x, $y)); 
echo "<br />";
printf("%.2f - %.2f = %.2f".PHP_EOL, $x, $y, $kalkulator('-',$x, $y)); 
echo "<br />";
printf("%.2f * %.2f = %.2f".PHP_EOL, $x, $y, $kalkulator('*',$x, $y)); 
echo "<br />";
printf("%.2f / %.2f = %.2f".PHP_EOL, $x, $y, $kalkulator('/',$x, 0)); 
echo "<br />";


function rectangle(float $a, float $b) {
    $p = $a * $b;
    return(float) $p;
} 

$a = (float)4;
$b = (float)6;
$rectangle = rectangle($a, $b);

printf("pole prostokąta o boku %d oraz boku %d wynosi %d",$a, $b, $rectangle);