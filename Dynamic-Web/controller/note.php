<?php
$heading = "Note";
$config = require 'config.php';
$db = new Database($config['database']);

// dd($db); 



$note = $db -> query("SELECT * FROM notes where id = :id",[
    'id' => $_GET['id']]
)->findorFail();
// dd($note);


$currentUser = 3;
authorize($note['user_id'] == $currentUser);
// dd($notes);

require('view/note.view.php');