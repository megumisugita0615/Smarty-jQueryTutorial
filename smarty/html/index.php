<?php

require 'vendor/autoload.php';
$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setConfigDir('config/');
$smarty->setCompileDir('templates_c/');
$smarty->setCacheDir('cache/');
// $smarty->testInstall();

$smarty->assign('name', 'User');
$smarty->display('index.tpl');
