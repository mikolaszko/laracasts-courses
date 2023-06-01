<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>my website</title>
    <meta name="description" content="my website">
    <meta name="author" content="mikolaszko">
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
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
    ?>


    <h4>recommended books</h4>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <a href="<?= $book['purchase'] ?>">
                <li><?= $book['name'] ?> (<?= $book['release_year'] ?>)</li>
            </a>
        <?php endforeach; ?>
    </ul>
</body>
</html>

