<?php
$name = "dark matter";
$read = true;
$string;


if ($read) {
    $string = "you have read \"$name\".";
} else {
    $string = "you haven't read \"$name\".";
}


$books = [
            [
        'name' => 'do androids dream of electric sheep?',
        'author' => "philip k. dick",
        'purchase' => 'https://google.com',
        'release_year' => 1968
    ],
    [
        'name' => 'brave new world',
        'author' => "Aldous huxley",
        'purchase' => 'https://google.com',
        'release_year' => 1931
    ],
    [
        'name' => 'The Martian',
        'author' => "Andy Weir",
        'purchase' => 'https://google.com',
        'release_year' => 2011 
    ],
    [
        'name' => 'Project Hail Mary',
        'author' => "Andy Weir",
        'purchase' => 'https://google.com',
        'release_year' => 2021 
    ],
];
//lambda function -> fully valid but redundant
$filter = function (array $items, $fn) {
    $filteredItems = [];
    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        } 
    }
    return $filteredItems;
};

//php build in array function
$filteredBooks = array_filter($books, function ($book) {
    return $book['release_year'] >= 1950;
});

require "index.view.php";
