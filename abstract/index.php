<?php
    include "mango.php";
    include "fruit.php";

    $mango = new fruit;
    echo $mango->getname();
?>


/*
* in this pice of code i have tried to access a function of an abstract class. 
*We can't create objects of an abstract class, but we can inharite them to use the function of them...
 */