<?php

$pageHeading = 'Note';

$currentUserId = 1;

$config = require('config.php');
$db = new Database($config);

$id = $_GET['id'];

$note = $db->query("SELECT * FROM notes WHERE id = :id ",
    [
        "id" => $id
    ]
)->fetch();


if(! $note ) {
    abortNotFond(Response::NOT_FOUND);
}

if($note['user_id'] !== $currentUserId){
    abortNotFond(Response::FORBIDDEN);
}



require 'views/note.view.php';