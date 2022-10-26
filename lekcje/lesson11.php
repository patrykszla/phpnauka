<?php

$a = 11;
$b = 8;

if ($a >= 10 && $b < 12)
{
    print "super, wszyskie zmienne spełniaja warunek!";
}
else
{
    print "niestety, któraś zmienna nie spełnia warunku";
}
echo "<br />";

$c = 1973;
$d = 2021;
if ($c >= 1950 || $d < 966)
{
    print "fajnie, ze przynajmniej jedna spelnia warunek";
}
else
{
    print "szkoda, zadna zmienna nie spelnia warunku";
}


echo "<br />";

$wiek = 11;
if (!($wiek >= 18))
{
    print "niestety, nie jestes pelnoletni!";

}
else
{
    print "jestes pelnoletni";
}


echo "<br />";

$g = 151;
$h = 81;
$i = 55;
$j = 12;

if (($g >= 50 && $h < 100) || ($i < 80 && $j != 20))
{
    print "wykonuje kod pierwszy.".PHP_EOL;
    
}
