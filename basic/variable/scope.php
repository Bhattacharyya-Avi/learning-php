<?php
/*
there are 3 type of scope for variables. Global, local, static.
*/
 // global scope
$x = 5;

function test(){
    // gives an error to access it in this function. to see the error un comment it.
    // echo "value of x is: $x";
}
test();
echo "value of x is: $x";

// local scope

function secondtest(){
    $y = 10;
    echo"value of y is: $y";
}
secondtest();
echo "value of y is $y"; // will give error or null 

// php global keyword.
$a =10;
$b = 20;
function sum(){
    global $a,$b;
    $b = $a+$b;
}
sum();
echo "sum is $b";

//static
/*
each time the function is called it will hold its last value that is assigned to it. 
*/
function teststatic() {
  static $x = 0;
  echo $x;
  $x++;
}

teststatic();
echo "<br>";
teststatic();
echo "<br>";
teststatic();