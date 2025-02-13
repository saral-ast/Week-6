<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$currentUser = 2;

$note = $db -> query("SELECT *FROM notes where id = :id",[
    'id' => $_POST['id']]
)->findOrFail() ?? [];

authorize($note['user_id'] == $currentUser);

$db -> query("DELETE FROM notes where id = :id",[
        'id' => $_POST['id']
    ]);

header('Location: /notes');
exit();



