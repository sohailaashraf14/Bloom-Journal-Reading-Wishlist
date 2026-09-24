<?php
require 'library.php';
require 'wishlist.php';
function findBookById($books,$id)
{

 foreach($books as $book){
     if($book['id'] === $id){
         return $book;
     }
 }
 return null;
}
function countByStatus($books){

    $count = ['reading'=>0, 'finished'=>0, 'to-read'=>0, 'dnf'=>0];
    foreach($books as $book){

           $count[$book['status']]++;
    }
    return $count;
}

