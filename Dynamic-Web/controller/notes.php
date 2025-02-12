<?php
$heading = "My Notes";
$config = require 'config.php';
$db = new Database($config['database']);


// dd($db); 

$notes = $db -> query('SELECT * FROM notes where user_id = 3') -> get();
// dd($notes);

require('view/notes.view.php');