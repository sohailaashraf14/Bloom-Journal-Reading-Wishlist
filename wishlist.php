<?php
$wishlistBooks = [
    [
        'id' => 1,
        'title' => 'The Guest List',
        'author' => 'Lucy Foley',
        'priority' => 'nice-to-have',
        'estimated_price' => 100,
    ],
    [
        'id' => 2,
        'title' => 'The Tenant',
        'author' => 'Freida McFadden',
        'priority' => 'must-have',
        'estimated_price' => 400,
    ],
    [
        'id' => 3,
        'title' => 'Nine Lives',
        'author' => 'Peter Swanson',
        'priority' => 'nice-to-have',
        'estimated_price' => 100,
    ],
    [
        'id' => 4,
        'title' => 'The Girl In His Shadow',
        'author' => 'Audrey Blake',
        'priority' => 'medium',
        'estimated_price' => 349,
    ]
];
$formatted = array_map(function($book){
    return $book['title'] . ' by ' . $book['author'] . ' — ' . $book['estimated_price'] . ' EGP (' . $book['priority'] . ')';
}, $wishlistBooks);