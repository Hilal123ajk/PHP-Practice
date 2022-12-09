<?php

$pageHeading = 'Home Page';


$config = require('config.php');
$db = new Database($config);

require 'views/index.view.php';
      