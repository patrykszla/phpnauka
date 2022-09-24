<?php
// $filename = "plik1.txt";

// if (is_file($filename)) {
//     $file = fopen($filename, "r");

//     $contents = fread($file, filesize($filename));
//     print_r($contents);

//     fclose($file);
// }

// $filename2 = "plik2.txt";
// $file2 = fopen("plik2.txt", "w");

// fwrite($file2, "To bedzie dobry dzien");

// // $contents2 = fread($file2, filesize($filename2));
// // echo "<br />";
// // print_r($contents2);

// $wiersz = <<<EOT
// To jest moj piekny wiersz
// o wszystkim, co mi sie podoba!
// EOT;

// $filename3 =  "wiersz.txt";

// if(!$file = fopen($filename3, "w")) {
//     die("nie moge utworzyc pliku $filename3");
// }

// if(fwrite($file, $wiersz) === false) {
//     die("Nie moge zapisac w pliku $filename3");
// }

// fclose($file);

// print "wiersz zostal zapisany w pliku  $filename3";


$url = "http://www.mbnet.com.pl/dl.txt";
$filename = "losowanie.txt";

$year = "1977";
$month = "09";

$table = [];
$table2 = [];

if (!is_file($filename)) {
    $data = file_get_contents($url);
    file_put_contents($filename, $data);
}

if (is_file($filename)) {
    $file = fopen($filename, "r");
    while (!feof($file)) {
        $data = fgets($file);
        if ($data) {
            // printf($data);
            $t1 = explode(" ", $data);
            $t2 = explode(".", $t1[1]);
            $pos1 = mb_strpos($t1[2], "10");
            $pos2 = mb_strpos($t1[2], "20");
            $pos3 = mb_strpos($t1[2], "30");

            if($pos1 !== false && $pos2 !== false && $pos3 !== false) {
                $table2[$t2[2]][$t2[1]][$t2[0]] = $t1[2];
                print $data;
            }
            // $pos = mb_strpos($data, $month . "." . $year);
            // if ($pos !== false) {
            //     echo $data;
            //     echo "<br />";
            //     $t1 = explode(" ", $data);
            //     $t2 = explode(".", $t1[1]);
            //     $table2[$t2[2]][$t2[1]][$t2[0]] = $t1[2];
            //     $table[$t2[2]][$t2[1]][$t2[0]] = explode(",", $t1[2]);
            // }
        }
    }

    fclose($file);
}
print_r($table2);
echo "<br />";
print_r($table);
