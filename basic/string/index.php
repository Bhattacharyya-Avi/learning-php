<?php
$text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
echo "our text is ". $text;
echo "<br>";

echo "strlen()";
// gives the length count of the string stored in the variable.
echo strlen($text);
echo "<br>";

echo"str_word_count()";
//gives the word count of a string;
echo str_word_count($text);
echo "<br>";

echo "strrev()";
// make the full string in reverse form
echo strrev($text);
echo "<br>";

echo "strpos()";
// try to find a text in the string. if found then gives the position number of the text, else return false.
echo "tring to find dummy"."<br>";
echo strpos($text,"dummy");
echo "<br>";

echo "str_replace()";
// try to replace some text in to given text

// Which text i want to replace
// the text i want to set
// full text
echo"replace text with Hello World"."<br>";
echo str_replace("text","Hello World",$text); 
echo "<br>";

echo"addcslashes()";
// add a cslashes in front of the word position
echo"add \ before t"."<br>";
echo addcslashes($text,"t");
echo "<br>";

echo"addslashes()";
$text2 = 'i love "my" country.';
// add backslashes before and end of "" word. 
echo addslashes($text2);
echo "<br>";

echo "bin2hex()";
// convert any text in its binary form.
echo bin2hex($text);
echo "<br>";

echo "chop()";
// remove  selected text from the right side of the original text.
echo chop($text,'industry.');
echo "<br>";

echo "chr()";
// converts any ascii value in to character 
echo "character of ascii value  53"."<br>";
echo chr(053)." in decimal <br>"; // for decimal value
echo chr(053)." in octal<br>"; // Octal value
echo chr(0x53)." in hex"; // hex value
echo "<br>";
