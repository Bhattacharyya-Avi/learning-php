<?php
 class Book{
     public $name="Avindra";
     public function getName(){
        return "The author name is ".$this->name;
    }
 }

 class NewBook extends Book{
    // public function getName(){
    //     return "THE Authors are ".$this->name." and xyz"; // this only take the variable and use is as it is.
    // }

    public function getName(){
        return parent::getName()." and The author is XYZ";  // This will take the function of the main class and modify it and show the resualt. 
    }
 }

 $book = new NewBook;
 echo $book ->getName();
?>