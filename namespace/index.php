<?php 

    namespace second; // needed when we are using fully qualified class name

    include "firstNS.php";
    include "secondNS.php";


    // $object = new second\A; // qualified  class name
    $object = new \A; // fully qualifier class name
    echo "<br/>";
    $object = new A; //unqualified class name


    /*
    namesapce is act like a different folder but in a virtual world. 
    when we are using a namespace before a class for creating an object then we don't need to add the namespace above accessing 
    class. 

    */


?>