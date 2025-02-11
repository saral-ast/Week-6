<?php 
    

    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2023,
            'purchaseUrl' => 'http://example.com'
        ]

    ]; 

    $filterBooks = array_filter($books, function($book){
        return $book['releaseYear'] >= 1957 and $book['releaseYear'] <= 2020;
    });

require 'associativeArray.php';