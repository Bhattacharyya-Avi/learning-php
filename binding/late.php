<?php

    class Fruit{
        public $name = 'Mango';
        public function getname(){
            return "Fruit name is ".$this->name;
        }

        public function getfruit(){
            return $this->getname();
        }
    }

    class newFruit extends Fruit{
        public function fruits(){
            return "fruits are ".$this->name." and banana";
        }
    }

    $fruit = new Fruit;
    echo $fruit->getfruit();

    // $newfruit = new newFruit;
    // echo $newfruit->fruits();
?>

<!-- 
this is known as late binding. the velues are set to the variable before running [during compile time ] but the 
function calling another function it is set when the function is called.

but if we make the function static and only use the object of the extended class to call the function then we may 
not get the required result
-->

