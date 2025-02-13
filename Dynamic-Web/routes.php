<?php

// return  [
//     '/'=> 'controller/index.php',
//     '/about'=> 'controller/about.php',
//     '/notes'=> 'controller/notes/index.php',
//     '/note'=> 'controller/notes/show.php',
//     '/notes/create'=> 'controller/notes/create.php',
//     '/contactUs'=> 'controller/contactUs.php', 
// ];

$router -> get('/' , 'controller/index.php');
$router -> get('/about' , 'controller/about.php');
$router -> get('/notes' , 'controller/notes/index.php');
$router -> get('/note' , 'controller/notes/show.php');
$router -> delete('/note' , 'controller/notes/destroy.php');

$router -> get('/notes/create' , 'controller/notes/create.php');
$router -> post('/notes' , 'controller/notes/store.php');
$router -> get('/contactUs' , 'controller/contactUs.php');
