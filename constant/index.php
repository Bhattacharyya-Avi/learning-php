<?php
    class Circle{
        const PI = 3.1416; // it is a constant variable 
        public function area($radius){
            return self::PI * $radius * $radius;
        }
    }

    $circle = new Circle;
    echo $circle->area(10);
?>