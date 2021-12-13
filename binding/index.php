<?php

    use Fruit as GlobalFruit;

    class Fruit{
        public $name = 'Mango';
        public function getname(){
            return "Fruit name is ".$this->name;
        }
    }

    class newFruit extends Fruit{
        public function fruits(){
            return "fruits are ".$this->name." and banana";
        }
    }

    $fruit = new Fruit;
    echo $fruit->getname();

    $newfruit = new newFruit;
    echo $newfruit->fruits();
?>

<!-- this is known as early binding. the velues are set to the variable before running [during compile time ]. -->

