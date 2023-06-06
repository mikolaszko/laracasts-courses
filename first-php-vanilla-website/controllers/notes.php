<?php
$heading = "My Notes";
$config = require "config.php";

$db = new Database($config['database'], "root", "root");
$notes = $db->query("SELECT * FROM notes WHERE user_id = 2")->fetchAll();
require "views/notes.view.php";
