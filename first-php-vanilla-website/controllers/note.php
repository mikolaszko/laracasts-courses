<?php
$heading = "My Notes";
$config = require "config.php";

$db = new Database($config['database'], "root", "root");
$id = $_GET['id'];
$note = $db->query("SELECT * FROM notes WHERE id = :id", ['id' => $id])->fetch();
require "views/note.view.php";
