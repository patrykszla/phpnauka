<?php
require_once __DIR__."/libs/vendor/autoload.php";

$smarty = new Smarty;

$smarty->setTemplateDir('smarty/templates');
$smarty->setCompileDir('smarty/templates_c');
$smarty->setCacheDir('smarty/cache');
$smarty->setConfigDir('smarty/configs');

$smarty->assign('title', 'zmienne w smarty');
$smarty->assign('name', 'Krzysiek');
$smarty->assign('x', 120);
$smarty->assign('y', 540);
$smarty->assign('liczby', [2,3,5,7,11,13]);

$smarty->display('index.tpl');