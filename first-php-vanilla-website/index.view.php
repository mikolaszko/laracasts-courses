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

