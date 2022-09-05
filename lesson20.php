<?php
for($i = 1; $i <= 10; $i++)
{
    $pow = $i ** 2 ;
    print "$i do potęgi 2 = $pow";
    echo "<br />";
}

$i = 10;
$sqrt = 0;

while($sqrt <=20)
{
    $sqrt = sqrt($i);
    printf("pierwiastek z %d = %.2f", $i, $sqrt);
    echo "<br />";
    $i += 50;
}

$i = 14;

do {
    $x = $i *2;
    print "$i * 2 = $x";
    echo "<br />";
    $i++;

} while ($i<15);