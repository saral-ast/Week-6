<?php

use Core\Database;
use Core\App;

$db =App::resolve(Database ::class);
$currentUser = 2;

$note = $db -> query("SELECT *FROM notes where id = :id",[
    'id' => $_GET['id']]
)->findOrFail();

authorize($note['user_id'] == $currentUser);


view('notes/show.view.php',[
        'heading' => "My Note",
        'note' => $note
    ] );



