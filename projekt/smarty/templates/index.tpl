<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
</head>
<body>
    <p>Cześć <strong>{$name}</strong>!</p>
    <p>Witaj na mojej stronie</p>
    <p>Zmienna <strong>$x</strong> = {$x}, a <strong>$y</strong> = {$y}</p>
    <p>{$x} * {$y} = {math equation="x * y" x=$x y=$y}</p>

    <p>
        {*To jest komentarz w szablonie smarty*}
        {if $x>100}
            Wartosc zmiennej <strong>$x</strong> jest wieksza od 1000!
        {/if}
    </p>
    <p>
        Początkowe liczby pierwsze to:
        {foreach item=liczba from=$liczby}
            {$liczba},
        {/foreach}
    </p>
</body>
</html>