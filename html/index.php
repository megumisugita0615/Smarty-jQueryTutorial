<?php

require 'vendor/autoload.php';
require './constructer.php';

// ディレクトリのアクセス権をチェック
// $smarty->testInstall();

// example data
$example_data = [
    [
        'id' => '1',
        'title' => 'Sample1',
        'author' => 'User1',
        'point' => '1',
        'num_comments' => '1',
        'created_at' => '2023:01:11:11:11',
        'url' => 'https://news.ycombinator.com/'
    ],
    [
        'id' => '2',
        'title' => 'Sample2',
        'author' => 'User2',
        'point' => '2',
        'num_comments' => '2',
        'created_at' => '2023:02:22:22:22',
        'url' => 'https://news.ycombinator.com/'
    ],
    [
        'id' => '3',
        'title' => 'Sample3',
        'author' => 'User3',
        'point' => '3',
        'num_comments' => '3',
        'created_at' => '2023:03:13:33:33',
        'url' => 'https://news.ycombinator.com/'
    ],
    [
        'id' => '4',
        'title' => 'Sample4',
        'author' => 'User4',
        'point' => '4',
        'num_comments' => '4',
        'created_at' => '2023:01:14:44:44',
        'url' => 'https://news.ycombinator.com/'
    ],
    [
        'id' => '5',
        'title' => 'Sample5',
        'author' => 'User5',
        'point' => '5',
        'num_comments' => '5',
        'created_at' => '2023:05:15:15:55',
        'url' => 'https://news.ycombinator.com/'
    ]
];


$smarty = new Smarty();

/* テンプレートに変数を出力 */
$smarty->assign('example_data', $example_data);

$smarty->display('index.tpl');
