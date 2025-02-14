<?php

use Core\Database;
use Core\App;
$db = App::resolve(Database ::class);

$notes = $db -> query('SELECT * FROM notes where user_id = 2') -> get();
// dd($notes);

view('notes/index.view.php',[
    'heading' => "My Notes",
    'notes' => $notes
] );