<?php

function licznik(?string $filename = 'licznik.txt'): int
{
    if (!is_file($filename)) {
        file_put_contents($filename, "1");
        return (int)1;
    } else {
        $file = fopen($filename, "r+");

        if (flock($file, LOCK_EX)) {
            $counter = (int)fread($file, filesize($filename));
            $counter++;
            fseek($file, 0);
            fwrite($file, $counter);
            flock($file, LOCK_UN);
        }

        fclose($file);
        return (int)$counter;
    }
}

print "Jestes " . licznik(filename: 'licznik.txt') . " gosciem na mojej stronie.";
