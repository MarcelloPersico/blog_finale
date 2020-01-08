<?php
class Book{
    private $title;
    private $autor;
    private $ISBN;
    private $pages;
    private $quote;


    public function __construct($title, $autor, $ISBN, $pages, $quote){
        $this->title = $title;
        $this->autor = $autor;
        $this->ISBN = $ISBN;
        $this->pages = $pages;
        $this->quote = $quote;
    }
    public function getTitle(){
        return $this->title;
    }

    public function getPrice() {
        return $this->quote + ($this->pages * 0.02);
    }
  
}   

class BookList {
    private $books = [];

    public function addBook($book){
        array_push($this->books, $book);
    }
    public function printList(){
       foreach($this->books as $book ){
            echo "</br>" . $book->getTitle();
        }

    }





}


?>