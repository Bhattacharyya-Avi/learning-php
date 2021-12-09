<?php
    class Fruit{
        public $name;
        public $color;

        public function set($name,$color)
        {
            $this->name = $name;
            $this->color = $color;
        }
    }

    class Apple extends Fruit{
        public function juice(){
            echo 'Apple juice';
        }
    }

    class Mango extends Fruit{

    }

    $mango = new Mango();
    $mango->set('mango', 'yellow');
    echo $mango->name;
    echo $mango->color;



    $apple = new Apple();
    $apple->set('Apple','Red');
    echo $apple->name;
    echo $apple->color;
    echo $apple->juice();

?>