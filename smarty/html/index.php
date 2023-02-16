<?php

require 'vendor/autoload.php';
require 'src/Constructers/Constructer.php';
// require 'src/examples/Var.php';

$smarty = new Smarty();
$smarty->assign('index', 'Index');
$smarty->assign('var', 'Var');
$smarty->assign('comment', 'Comment');
$smarty->display('index.tpl');
