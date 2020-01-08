<?php 
require_once 'book.php';
$book = new Book ("ciao", "nessuno", 123456789, 500 , 5);
$book1 = new Book ("ciao1", "nessuno", 123456789, 500 , 5);
$book2 = new Book ("ciao2", "nessuno", 123456789, 500 , 5);
$book3 = new Book ("ciao3", "nessuno", 123456789, 500 , 5);
$book4 = new Book ("ciao4", "nessuno", 123456789, 500 , 5);
$books = new BookList;
echo $book->getPrice() . " $";

echo "</br>" . $book->getTitle();
$books->addBook($book);
$books->addBook($book1);
$books->addBook($book2);
$books->addBook($book3);
$books->addBook($book4);
$books->printList();
?>


