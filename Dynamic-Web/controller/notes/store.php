<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db =App::resolve(Database ::class);

$errors = [];

if(!Validator::string($_POST['notes'],1,1000)){
    $errors['note'] = "Note has to be 1 to 1000 characters long";
}
   
    

if(!empty($errors)){
    view('notes/create.view.php',[
        'heading' => "My Notes",
        'errors' => $errors
    ] );
    die();
}

$db -> query('INSERT INTO notes (notes, user_id) VALUES ( :notes, :user_id)', [
    'notes' => $_POST['notes'],
        'user_id' => 2,
]);
header('Location: /notes');
exit();