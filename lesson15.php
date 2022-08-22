<?php

$a = 12;
$p = $a**2;
$o = $a*4;
$q = $a*sqrt(2);

printf("Pole kwadratu o boku %.1f wynosi %.1f \n", $a, $p);
echo "<br />";
printf ("obwod o boku %.1f wynosi %.1f \n", $a, $o);
echo "<br />";
printf ("obwod o boku %.1f wynosi %.1f \n", $a, $q);
echo "<br />";

$a = 25;
$b = 12;
$c = sqrt($a**2 + $b**2);
$o = $a + $b + $c;
$po = $o / 2;
$p = sqrt($po*($po-$a)*($po-$b)*($po-$c));

printf("pole trojkąta o bokach a=%.1f, b=%.1f, c=%.1f wynosi %.1f", $a, $b, $c, $p);
echo "<br />";
printf("pole trojkąta o bokach a=%.1f, b=%.1f, c=%.1f wynosi %.1f", $a, $b, $c, $o);
echo "<br />";
$r = 45;
$p = pi()*$r**2;
$o = 2*pi()*$r;

printf("pole kola o promieniu %.1f wynosi %.1f", $r, $p);
echo "<br />";
printf("pole kola o promieniu %.1f wynosi %.1f", $r, $o);
echo "<br />";
