<?php
$a = 10001;
echo "is_int(), is_integer(),is_long() all boolean function. checkes that the variable is integer or not.","<br>";
# var dump() dumping a variable and show the type and value of variable. Act like dd()in laravel. 
var_dump(is_int($a));
// echo "<br>";
// echo PHP_INT_MAX;   #return The largest integer supported
// echo "<br>";
// echo PHP_INT_MIN;   #return The smallest integer supported
// echo "<br>";
// echo PHP_INT_SIZE;  #return The size of an integer in bytes
echo '<br>';

$b = 1001.001;
echo "is_float(), is_double() boolean function. checkes that the variable is float or double type or not."."<br>";
var_dump(is_float($b));
// echo "<br>";
// echo PHP_FLOAT_MAX;     # The largest representable floating point number
// echo "<br>";
// echo PHP_FLOAT_MIN;     # The smallest representable positive floating point number
// echo "<br>";
// echo - PHP_FLOAT_MAX;   # The smallest representable negative floating point number
// echo "<br>";
// echo PHP_FLOAT_DIG;     # The number of decimal digits that can be rounded into a float and back without precision loss
// echo "<br>";
// echo PHP_FLOAT_EPSILON; # The smallest representable positive number x, so that x + 1.0 != 1.0
echo "<br>";

$x = 1.9e411;
echo "is_finite(),is_infinite() checkes that the value that is larger than PHP_FLOAT_MAX or not. larger values are considered as infinite. "."<br>";
var_dump($x);
echo "<br>";

echo "is_nan() checkes that a number is numaric or not."."<br>";
$x = acos(8); # Return the arc cosine of numbers. Range should be -1 to 1.
var_dump($x);
echo "<br>";
