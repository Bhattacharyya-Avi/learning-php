<?php
include "person.php";
class Book{
    public $price;
    public $authors;

    /**
     * @return mixed
     */
    public function getPrice(int $price)
    {
        $this->price = $price;
    }

    public function authors(person $name){
        $this->authors = $name->name();
    }

}

    $books = new Book;
    //$books->getPrice(20);
    //echo $books->price;
    $authorsName = new Person();
    $books->authors($authorsName);
    print_r($books->authors);  // for prienting the array
?>

<!--
this is a example of typehinting.
in the first part of the code the velue fust need to be an int number.
in the second part of the code the value must need to be an array. The values are coming from person file, and we are using the
instance of that class.
-->
