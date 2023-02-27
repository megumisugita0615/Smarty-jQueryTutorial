<?php

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
        $base_url.'item/'.$id.'.json'
    ),
    'UTF8',
    'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN'
);
