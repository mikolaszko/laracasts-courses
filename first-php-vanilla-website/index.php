<?php

require 'utils/functions.php';
require 'router.php';
require 'Database.php';
$config = require 'config.php';

// connect to the MySQL database and execute a query.
$db = new Database($config['database'], "root", "root");
$id = $_GET['id'];
$query = "SELECT * FROM posts where id = :id";
$posts = $db->query($query, [':id' => $id])->fetchAll();

foreach ($posts as $post) {
    echo "<li> {$post['title']} </li>";
}
