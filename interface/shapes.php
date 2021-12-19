<?php

// include "shapeInterface.php";
include "autoload.php";


class Triangle implements shapeInterface{
    public function getArea(){
        echo "Triangle Class";
    }
}
class Rectangle implements shapeInterface{
    public function getArea(){
        echo " Rectangle Area";
    }
}


$triangle = new Triangle();
echo $triangle->getArea();

$ractangle = new Rectangle();
echo $ractangle->getArea();

?>

<!-- 
this is the example of interface.
In this pice of code a developer force another developer to create function in same way.
If it is not same then it will give an error.
-->