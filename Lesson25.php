<?php
declare(strict_types=1);
define('ERROR_CODE', 4);

// function myFunction(int $x, int $y): float
// {
//     if ($y == 0) {
//         throw new Exception('4, nie wolno dzielic przez zero!');
//     }
//     print "2, funkcja zwraca wynik dzielenia.";
//     return (float)$x / $y;
// }

// try {
//     print "1. Wywołuje funkcje z parametrami.";
//     myFunction(x: 5, y: 20);
//     myFunction(x: 5, y: 0);
// } catch (\Exception $e) {
//     print "3 . funkcja zglosila wyjatek";
//     print $e->getMessage();
// } finally {
//     print "5. Ten kod wykona sie zawsze po try-catch";
// }



class MyException extends Exception
{
    public function errorMessage()
    {
        return sprintf("Wystąpił błąd '%s' o numerze %d w linii %d.", $this->getMessage(), $this->getCode(), $this->getLine());
    }
}

$kalkulator = function (string $operacja, float $x, float $y): float {
    if ($operacja == '/' && $y == 0) {
        throw new MyException('Nie dziel przez zero!', ERROR_CODE);
    }

    return match ($operacja) {
        '+' => $x + $y,
        '-' => $x - $y,
        '*' => $x * $y,
        '/' => fdiv($x, $y),
    };
};

try {
    print $kalkulator(operacja: '/', x: 5, y: 2);
    echo "<br />";
    print $kalkulator(operacja: '/', x: 5, y: 0);
} catch (\Exception $e) {
    print $e->errorMessage();
}
