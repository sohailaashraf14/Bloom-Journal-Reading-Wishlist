<?php
$books = [
    [
        'id' => 1,
        'title' => 'Little Women',
        'author' => 'Louisa May Alcott',
        'status'=>'dnf',
        'pages'=>320,
        'format'=>'physical',
        'rating'=>3,
    ],
    [
        'id' => 2,
        'title' => 'The Therapist',
        'author' => 'B.A. Paris',
        'status'=>'to-read',
        'pages'=>368,
        'format'=>'ebook',
        'rating'=>null,
    ],
    [
        'id' => 3,
        'title' => 'Red Mistress',
        'author' => 'Elizabeth Blackwell',
        'status'=>'to-read',
        'pages'=>312,
        'format'=>'ebook',
        'rating'=>null,
    ],
    [
        'id' => 4,
        'title' => 'Poor Folk',
        'author' => 'Dostoyevsky',
        'status'=>'to-read',
        'pages'=>304,
        'format'=>'ebook',
        'rating'=>null,
    ],
    [
        'id' => 5,
        'title' => 'Humiliated & Insulted',
        'author' => 'Dostoyevsky',
        'status'=>'to-read',
        'pages'=>616,
        'format'=>'ebook',
        'rating'=>null,
    ]

];


$filteredBooks = array_filter($books, function($book){
    return $book['status'] === 'finished';
});
