<?php

declare(strict_types=1);
function rejestracja_pojazdu(?string $numer = ''): string|bool
{
    $rej = [
        "B" => 'podlaskie',
        "C" => 'kujawsko-pomorskie',
        "D" => 'dolnoslaskie',
        "E" => 'łódzkie',
        "F" => 'lubuskie',
        "G" => 'pomorskie',
        "K" => 'malopolskie',
        "L" => 'lubelskie'
    ];
    $prefiks = mb_strtoupper(mb_substr($numer, 0, 1));
    return isset($rej[$prefiks]) ? (string)$rej[$prefiks] : (bool)false;
}

function triangle($a, $h) {
    return ($a * $h) /2;
}