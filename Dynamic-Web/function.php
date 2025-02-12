<?php

function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}
function urlIs($value) {
    // var_dump($value);
    return $_SERVER['REQUEST_URI'] === $value;
}

