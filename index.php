<?php
use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

// require_once__DIR__.('../projekt/libs/vendor/autoload.php');
require_once __DIR__."/libs/vendor/autoload.php";
// require_once__DIR__."";

$smarty = new Smarty;
$mail = new PHPMailer(true);

// if($smarty && $mail){
//     print "zainstalowane";
// }



// print "lubie programować!";

// $myText = 'PHP';

// print 'ten tekst ma wiele linii '. $myText . ' ';
// echo "przykład umieszczenia \"cudzyslowiu\" w tekscie";

// $name = "  Robert  ";
// print "Tekst oryginalny: >" . $name . '<'.PHP_EOL;
// print "Tekst oryginalny: >" . trim($name) . '<'.PHP_EOL;

// $inwokacja = <<< EOF
// Litwo ojczyzno moja jestest jak zdrowie cos tam cos 
// ten tylko sie dowie kto cie stracil gosciu nie gledz 
// mi tutaj juz koncz wasc wstydu oszczędź.
// EOF;

// print $inwokacja;



$tekst = 'Adam,Ewa,Janusz';
$elementy = explode(',', $tekst);
print $tekst.PHP_EOL;
print_r($elementy);