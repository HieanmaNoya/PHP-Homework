
<?php

$article = [
    'title' => 'Название статьи',
    'text' => 'Текст статьи',
    'author' => [
        'first_name' => ['Иван'],
        'last_name' => 'Иванов'
    ]
];
$article['author']['first_name'][] = 'Дурак';
var_dump($article);