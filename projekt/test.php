<?php

use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

require_once __DIR__."/libs/vendor/autoload.php";

$smarty = new Smarty;
$mail = new PHPMailer(true);

$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

$smarty->testInstall();