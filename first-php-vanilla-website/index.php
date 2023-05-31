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
            "Do Androids Dream of Electric Sheep?",
            "Neuromancer",
            "Brave New World"
        ];
    ?>
    <h1>
        <?= $string ?>
    </h1>
    <h4>Recommended Books</h4>
    <!-- long way -->
    <!--<ul>
        <?php foreach ($books as $book) {
            echo "<li>$book</li>";
        } ?>
    </ul>-->
    <!-- shorthand -->
    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

