<?php   
// the arrow function is used as a consise syntax for the anonymous function
// it is like the short syntax for a function
// the variable from the parent scope is automatic
// fn (argument_list) => expression
$y = 1;
// the $x is the parameter to be supplied while calling the function
// the $x + $y is the expression and does what is the when the function is called
$fn1 = fn($x) => $x + $y;
// the var_export() retunrns a valid php code that cam be assigned to a variable. it is similar to var_dump()
var_export($fn1(2)); // this outputs 3
echo "<br>";

// the syntax is similar to this
$fn2 = function ($x) use ($y) {
    return $x + $y;
};
//  we can also do somethimg like this 
$z = 1;
$fn3 = fn($x) => fn($y) => $x * $y + $z;
echo $fn3(5)(10);