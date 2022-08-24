<?php
$a = 9;
$b = 3;

$c = sqrt($a**2 + $b**2);

$sina = $a/$c;
$cosa = $b/$c;

$result = $sina * $cosa;
printf("kąt ac: sina * cosa = %.2f * %.2f = %.2f", $sina, $cosa, $result);
echo "<br />";

$deg = 45;
$rad = deg2rad($deg);
$sin = sin($rad);
$cos = cos($rad);
$tan = tan($rad);

printf("Sinus kąta %.2f stopni (%.2f radiana) wynosi %.2f", $deg, $rad, $sin);
echo "<br />";
printf("Cosinus kąta %.2f stopni (%.2f radiana) wynosi %.2f", $deg, $rad, $cos);
echo "<br />";
printf("Tangens kąta %.2f stopni (%.2f radiana) wynosi %.2f", $deg, $rad, $tan);
echo "<br />";

$arg1 = M_E;
$log = log($arg1);

$arg2 = 45;
$log10 = log10($arg2);

$x = -85;

$abs = abs($x);

printf("Logarytm naturalny z liczby %.2f wynosi %.2f", $arg1, $log);
echo "<br />";
printf("Logarytm dziesietny z liczby %.2f wynosi %.2f", $arg1, $log10);
echo "<br />";
printf("Wartośc bezwgledna z liczby %.2f wynosi %.2f", $arg1, $abs);
echo "<br />";