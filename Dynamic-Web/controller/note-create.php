<?php
$heading = "Create Note";

$config = require 'config.php';
$db = new Database($config['database']);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    // dd($_POST);
    $db -> query('INSERT INTO notes (notes, user_id) VALUES ( :notes, :user_id)', [
        'notes' => $_POST['notes'],
        'user_id' => 3
    ]);
}


require('view/note-create.view.php');