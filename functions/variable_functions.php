<?php
// a variable function is a variable with parenthesis attached to it
// what happens is that the program will execute the function of the value of the variable if it exist
function foo() {
    echo "In foo() <br />";
}

function bar($arg = '') {
    echo "In bar(); argument was '$arg'.<br />";
}

function echoit($string) {
    echo $string;
}

$func = 'foo';
$func(); // this calls the function foo() because it is the value of the variable that we called as a function

$func = 'bar'; 
$func('test'); // since we have assigned a new value for $func it overrights the formal and calls the value function of the variable
// and set the parameter as what is within the parenthesis. but the formal value that has been called exist (it runs from top to bottom) and first execute that one and the execution chage for the second one

$func = 'echoit'; 
$func('test'); // this first calls the function echoit() and set the parameter to test

#   object in variable function
class Foo {
    function Variable() {
        $name = 'Bar';
        $this->$name(); // this calls Bar function later defined below
        // the '$this' is the owner of the function
        
    }
    function Bar() {
        echo "This is bar";
    }
}
$foo = new Foo();
$funcname = "Variable";
$foo->$funcname(); // this call Variable() in the object $foo alias of $foo->Variable()

echo "<br>";

#   variable function on static property
// the '::' is only used for static property call

class few {
    static $variable = 'static property';
    static function func() {
        echo "method func called";
    }
}
echo few::$variable; // this outputs : static property
echo "<br>";
$value = 'func';
echo few::$value(); // this looks for the value of $value which is func and call it as a function in the class few
echo "<br>";
#   complex calls 
class code {
    static function php() {
        echo "php script";
        echo "<br>";
    }
    function mySql() {
        echo "mySql query";
        echo "<br>";
    }
}
// this recognizes it as call to a static function. it execute the class and call the static function
// array to call static function of a class function
// if the other parameter for the function is not a static function it returns an error
$fun = array("code", "php");
$fun(); // this prints: php script
// this can be used to call both static and non-static function
$fun = array(new code, "mySql");
$fun(); // this prints : mySql query
// this can also be used to call the static function as normally used in variable function
$fun = "code::php";
$fun(); //this prints: php script
// echo phpinfo(); 






