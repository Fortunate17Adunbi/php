<?php   
// the callback are denoted by the type declearation i.e how it is decleared
// functions like call_user_func() and usort() accept user-defined callback functions (function) as parameter 
// callback functions can be objects, method like static class method e.t.c 

#   passing
// a method of an instatiated object (i.e class) is passed as an array : if we want to call an object we do it using array
// the object will be at index 0 and the method in index 1
// we can access private and static method also
// we can pass static class without instantiating an object by passing the class name at index 0 and the method name at index 1
// also apart from the normal userdefined functions, we can pass anonymous and arrow functions as parameter
// we can also use the __invoke() can also be passed as a parameter to the callableback
// the invoke is used when a script attempt to call an object as a function just as we called can call variable as function

// callback function
function my_callback_function() {
    echo "Hello World!";
    echo "<br>";
}

// callback method
class myClass {
    static function myCallBackMethod() {
        echo 'hello world';
        echo "<br>";
    }
    public function any(){
        echo "it is me";
        echo "<br>";
    }
}

// call to a simple callback function
// specify the name of the function
call_user_func("my_callback_function");

// call to a static class method
// we call it as an array, then .....
// specify the name of the class at index 0 and the method at index 1
# this method only works for static call
call_user_func(array("myClass", "myCallBackMethod"));


// we can also instantiate a class and pass the object at index 0
$obj = new myClass();
call_user_func(array($obj, "myCallBackMethod"));
// to call functions that are not static we have to first intitiate the class
// and pass the object as the first parameter not the class
// this method works for both static an non static
call_user_func(array($obj, "any"));

// we can use the static method call
#   this only work for static call
$metd = "myCallBackMethod";
call_user_func("myClass::$metd");
// or
call_user_func('myClass::myCallBackMethod');

class A {
    public static function who() {
        echo "A";
        echo "<br>";
    }
}

class B extends A {
    public static function who() {
        echo "B";
        echo "<br>";
    }
}
// the parent refer to the one that have been extended and call the function 'who'  so this prints "A"
call_user_func(array('B', 'parent::who'));


// using the invoke as the callback parameter
class C {
    public function __invoke($name) {
        echo "Hello, ".$name;
        echo "<br>";
    }
}
// the function within the class C execute immediately it is called
$c = new C;
// notice we did not put the parameter as array showing we are calling the object as a function
// it is when we are calling function we just put the name of the function in it
// the __invoke we use is to call an object as a function
call_user_func($c, "PHP");

// callback using closure/anonymous function
// so we can use the callback to supply argumnet of functions
$double = function($a) {
    return $a * 2;
    echo "<br>";
};
// the range create an array containg range of elements
$number = range(1, 5);
var_dump($number); // this shows that it is an array
echo "<br>";
//  the array_map() applies callback to the element of a given array
// since the range creates an array the array_map() is used to apply callback to it
// the first parameter is a callable and the second is an array
$new_numbers = array_map($double, $number);
// the print outputs a string
// the implode joins array elements with a string
// the first parametr is the seperator which can be ',', '/', '.' e.t.c but we use ' ' space
print implode(" ", $new_numbers);
echo "<br>";
// the first class callable syntax got introduced in php 8.1.0
// this will be considered in functions sections#
class D {
    public function method() {}
    public static function staticmethod() {}
    public function __invoke() {}
}
$obj2 = new D();
// this is the traditional way of calling it before
// we have to specify it as an array
// the first parameter is the class and the second is the method

#   not sure of the comment below 
[$obj2, 'method'](...); //this and the one bellow is the syntax for the call_user_func just that we put this one in array but we specified array in the other one and the parenthesis with the 3 period is the call_user_func
[D::class, 'staticmethod'](...); 