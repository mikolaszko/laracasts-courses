<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Website</title>
    <meta name="description" content="My Website">
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
        $name = "Dark Matter";
        $read = true;
        $string;
        

        if ($read) {
            $string = "You have read \"$name\".";
        } else {
            $string = "You haven't read \"$name\".";
        }
        $books = [
            [
               'name' => 'Do Androids Dream of Electric Sheep?',
               'author' => "Philip K. Dick",
               'purchase' => 'https://google.com',
            ],
            [
               'name' => 'Brave New World',
               'author' => "Hello there",
               'purchase' => 'https://google.com',
            ],
        ];
    ?>
    <h1>
        <?= $string ?>
    </h1>
    <h4>Recommended Books</h4>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book['name'] ?></li>
        <?php endforeach; ?>
    </ul>
    <p><?= $books[0] ?></p>
</body>
</html>

