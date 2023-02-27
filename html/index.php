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


// APIで記事を取得
$base_url = 'https://hacker-news.firebaseio.com/v0/';
$top_id = mb_convert_encoding(
    file_get_contents(
        $base_url.'topstories.json'
    ),
    'UTF8',
    'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN'
);

$article_data = mb_convert_encoding(
    file_get_contents(
        $base_url.'item/'.$top_id[1].'.json'
    ),
    'UTF8',
    'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN'
);

$smarty = new Smarty();

/* テンプレートに変数を出力 */
$smarty->assign('example_data', $example_data);

$smarty->assign('base_url', $base_url);
$smarty->assign('top_id', $top_id);
$smarty->assign('article_data', $article_data);

$smarty->display('index.tpl');
