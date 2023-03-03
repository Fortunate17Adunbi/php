<?php   
// we can use the settype() change the type of a variable 
// we can do dat by stating the variable  to be converted as the first parameter and the data type to be converted to as second parameter as stated below
$var = "5foo"; //string
$bar = true; // boolean

settype($var, int); // set $var to 5 which is now an int
settype($bar, string); // set $bar to "1" which is a string (numerical string)

// or we can simply do ..
$foo = '123456';

$foo = (int) $foo; // this is known as type casting
$foo = (string) $foo;
// the type can be any of the following
// "boolean" or "bool"  
// "integer" or "int"  
// "float" or "double"  
// "string"  
// "array"  
// "object"  
// "null" 

// we can also do this as it is an alias of the traditional casting for strings
$a = 10;
$str = "$a"; // this method converts $a into a string

$b = "car";
$b[0] = "b";
echo $b; // this is now bar
