<?php
$filename = "plik1.txt";

if (is_file($filename)) {
    $file = fopen($filename, "r");

    $contents = fread($file, filesize($filename));
    print_r($contents);

    fclose($file);
}

$filename2 = "plik2.txt";
$file2 = fopen("plik2.txt", "w");

fwrite($file2, "To bedzie dobry dzien");

// $contents2 = fread($file2, filesize($filename2));
// echo "<br />";
// print_r($contents2);

$wiersz = <<<EOT
To jest moj piekny wiersz
o wszystkim, co mi sie podoba!
EOT;

$filename3 =  "wiersz.txt";

if(!$file = fopen($filename3, "w")) {
    die("nie moge utworzyc pliku $filename3");
}

if(fwrite($file, $wiersz) === false) {
    die("Nie moge zapisac w pliku $filename3");
}

fclose($file);

print "wiersz zostal zapisany w pliku  $filename3";