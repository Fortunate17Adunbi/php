<?php
#   anonymous function variable assignment
// the anonymous function is an an alias of closure
// anonymous functions are functions with no specific name
// normal c coding stuff stuff
$greet = function($name) {
    printf("Hello, %s", $name);
    echo "<br>";
};
$greet("world");

#   inheriting variables from parent scope
$message = 'Hello';
$example = function() {
    var_dump($message);
    echo "<br>";
};
$example(); // this outputs an error message because the variable is not within the function so it does not recognize it

// this includes the variable in the function so as to be able to call the variable
$example = function() use ($message) {
    // since the variable has been include in the function, it can now be called
    var_dump($message);
    echo "<br>";
};
$example(); // we can now use the variable because we inherited by using the keyword 'use'
// we inherit variable when we define the function not when we call it
$message = "World";
// for example the value did not change here despite changing the value. 
// if we had changed it before defining hte variable it has effect on the function
$example();

// reset message 
$message = 'Hello';
// inheriting by reference
$example = function() use (&$message) {
    var_dump($message);
    echo "<br>";
};
$example();

// when we pass by reference, it has effect on change of value later
$message = "World";
$example();

// closure can also accept regular argument
// this just concatenate with the value that is supplied by argument
$message = function($arg) use ($message) {
    var_dump($arg.' '.$message);
    echo "<br>";
};
$message("Hello");

// class property defined with 'protected' can only be accessed within the class it is defined
// also like 'public' and 'private' that define where a property can be accessed

#   static anonymous function
// anonymous function can also be defined statically
// this prevent binding them or associating them with the current class

class Foo
{
    function __construct()
    {
        $func = static function() {
            var_dump($this);
        };
        $func();
    }
};
new Foo();