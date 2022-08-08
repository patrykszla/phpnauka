<?php
use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

// require_once__DIR__.('../projekt/libs/vendor/autoload.php');
require_once __DIR__."/libs/vendor/autoload.php";
// require_once__DIR__."";

$smarty = new Smarty;
$mail = new PHPMailer(true);

if($smarty && $mail){
    print "zainstalowane";
}