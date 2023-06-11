<?php 
$config = require "config.php";

$db = new Database($config['database'], "root", "root");

$heading="Create Note";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    if (strlen($_POST['body']) === 0) {
        $errors['body'] = "The note body is required";
    } else if (strlen($_POST['body']) > 255) {
        $errors['body'] = "The note body is too long";
    } else if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' =>2 
        ]);
    }
}
require 'views/note-create.view.php';
