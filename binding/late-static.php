<?php
    class Fruit{
        public static $name = "Mango";
        public static function name(){
            return "The fruit is ".static::$name;
        }
        
        public static function getname(){
            echo static::name();
        }

    }

    class NewFruit extends Fruit{
        public static function name()
        {
            return "The fruits are ".self::$name." and banana";
        } 
    }

    Fruit::getname();
    echo"<br>";
    NewFruit::getname();

    // in the binding we are geting result that is assigned on compile time. but in late static binding way we access the function and
    // assign the value during the runtime of the programm. 
    
    // in this part of code the functions are overriden. so if we want to stop overriding the things then we need to add final keyword in 
    // front of the function or class.

?>