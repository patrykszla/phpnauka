<?php
for ($i = 1; $i <= 10; $i++) 
{
    if($i % 2 != 0) {
        continue;
    }
    $pow = $i ** 2;
    print "$i do potegi 2 = $pow";
    echo "<br />";
}

$i = 10;
$sqrt = 0;

while(true)
{
    $sqrt = sqrt($i);
    printf("pierwiastek z %d = %.2f", $i, $sqrt);
    echo "<br />";
    if($sqrt > 8)
    {
        break;
    }

    $i += 25;
}


function silnia($i) {
    if($i < 2){
        return 1;
    } else {
        return $i * silnia($i - 1);
    }
}

for($x = 1; $x <= 10; $x++)
{
    print "$x! = ".silnia($x);
    echo "<br />";
}


for ($i = 1; $i <= 40;) {
    
    echo "<br />";
    $i += 4;
    print "$i";
}