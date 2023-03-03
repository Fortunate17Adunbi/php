<?php
// the class callable syntax was introduced in php 8.1.0
// it is a way of creating closure(anonymous function) from callable
// it supersede existing callable syntax using strings and arrays
// it is available to static analysis and uses the scope where callable is acquired 
// CallableExpr(...) syntax is used to create a Closure object from callable. CallableExpr accepts any expression that can be directly called in the PHP grammar: 
class foo {
    public function method() {echo "method function";}
    public static function staticmethod() {echo "static method function";}
    public function __invoke() {echo "its php";}
}
$obj = new foo();
$classStr = 'foo';
$methodStr = 'method';
$staticmethodStr = 'staticmethod';

$f1 = strlen(...);
$f2 = $obj(...); // invokable object
call_user_func($f2); // this automaticaly call the __invoke function
echo "<br>";
$f3 = $obj->method(...);
$f4 = $obj->$methodStr(...);

$f5 = foo::staticmethod(...);
$f6 = foo::$staticmethodStr(...);

// the traditional method of callable using string and array
$f7 = 'strlen'(...);
$f8 = [$obj, 'method'](...);
$f9 = [Foo::class, 'staticmethod'](...);

// instead of doing something like this
// remember that this only work for static function
call_user_func(array("foo", "staticmethod"));
echo "<br>";
// can use to call both static and non static
call_user_func(array($obj, 'method'));
echo "<br>";
echo "<br>";

// we do this..
call_user_func($obj->method(...));
echo "<br>";
call_user_func($obj->$methodStr(...));
echo "<br>";echo "<br>";

call_user_func($obj(...)); // this calls the invoke function
echo "<br>";echo "<br>";

call_user_func(foo::staticmethod(...));
echo "<br>";
call_user_func(foo::$staticmethodStr(...));
