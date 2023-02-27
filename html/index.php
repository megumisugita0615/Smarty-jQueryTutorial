<?php

require 'vendor/autoload.php';
require './constructer.php';
require './components/article.php';

// ディレクトリのアクセス権をチェック
// $smarty->testInstall();

$smarty = new Smarty();

$smarty->assign('example_data', $example_data);

$smarty->display('index.tpl');
