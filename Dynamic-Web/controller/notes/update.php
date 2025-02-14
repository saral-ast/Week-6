<?php

use Core\Database;
use Core\App;
use Core\Validator;

$db =App::resolve(Database ::class);
$currentUser = 2;
$errors = [];

$note = $db -> query("SELECT *FROM notes where id = :id",[
    'id' => $_POST['id']]
)->findOrFail();

authorize($note['user_id'] == $currentUser);

if(!Validator::string($_POST['notes'],1,1000)){
    $errors['note'] = "Note has to be 1 to 1000 characters long";
}

if(count($errors)){
     return view('notes/edit.view.php',[
        'heading' => "Edit Note",
        'note' => $note,
        'errors' => $errors
    ]);
}

$db->query("UPDATE notes SET notes = :notes WHERE id = :id",[
    'notes' => $_POST['notes'],
    'id' => $_POST['id']
]);

header('Location: /notes');
