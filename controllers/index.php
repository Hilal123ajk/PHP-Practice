<?php

$pageHeading = 'Home Page';

require 'Database.php';

$config = require('config.php');

$db = new Database($config);
$posts = $db->query("select * from posts")->fetchAll();


require 'views/index.view.php';
 
