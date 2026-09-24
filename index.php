<?php
require 'library.php';
require 'wishlist.php';
require 'functions.php';

$routes=[
  '/'=>'index.php',
    '/wishlist'=>'wishlist.php',
    '/book'=>'book.php',

];
print_r(countByStatus($books));
//
//print_r(($filteredBooks));

print_r($formatted);