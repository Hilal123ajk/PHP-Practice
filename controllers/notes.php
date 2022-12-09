<?php

$config = require('config.php');
$db = new Database($config);

$notes = $db->query("SELECT * FROM notes WHERE user_id = 1")->fetchAll();


$pageHeading = 'My Notes';

require 'views/notes.view.php';