<?php
//Є масив $books
//Отримати масив відсортований за ціною книжок
//Отpимати відфільтрований массив книжок у яких є тег ‘php’

$books = [
    [
        'name' => 'Learning php, mysql & JavaScript',
        'author' => 'Robin Nixon',
        'price' => 30,
        'tags' => ['php', 'javascript', 'mysql']
    ],
    [
        'name' => 'Php for the Web: Visual QuickStart Guide',
        'author' => 'Larry Ullman',
        'price' => 25,
        'tags' => ['php']
    ],
    [
        'name' => 'pHp and MySqL for Dynamic Web Sites',
        'author' => 'Larry Ullman',
        'price' => 14.39,
        'tags' => ['php', 'mysql']
    ],
    [
        'name' => 'Modern PhP: New Features and Good Practices',
        'author' => 'Josh Lockhart',
        'price' => 24,
        'tags' => ['php']
    ],
    [
        'name' => 'JavaScript and JQuery: Interactive Front-End Web Development',
        'author' => 'Jon Duckett',
        'price' => 20,
        'tags' => ['javascript', 'jquery']
    ],
    [
        'name' => 'Miss Peregrine\'s Home for Peculiar Children',
        'author' => 'Ransom Riggs',
        'price' => 8.18
    ]
];

echo 'Array sorted by Price:';
var_dump(sortByPrice($books, 'price'));

echo 'Array filtered by Tag PHP:';
var_dump(filterByTag($books, 'php'));

function sortByValue($books, $value)
{
    uasort($books, function ($a, $b) use ($value){
        if ($a[$value] == $b[$value]) {
            return 0;
        }
        return $a[$value] < $b[$value] ? 1 : -1;
    });
    return $books;
}

function filterByTag($books, $tag)
{
    return array_filter($books, function($a) use ($tag) {
        if (empty($a['tags'])) {
            return false;
        }
        return in_array($tag,$a['tags']);
    });
}
