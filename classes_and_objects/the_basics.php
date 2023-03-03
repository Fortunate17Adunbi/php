<?php   
#   classes
//  a class can contain its own constants, variables(they are called "properties"), and functions(called "methods")
#   simple classes defination
class SimpleClass {
    // property declearation
    public $var = 'a default value';

    // method declearation 
    public function displayVar() {
        // the $this refers to the current object
        // the $this becomes available when a method is called from within an object 
        echo $this->var;
    }
}
class A {
    #   note on get_class() 
    // it only works for object
    // it throws error for anything that is not an object
    // it returns the name of the class of which an object is decleared
    // remember we declear object from classes. so the get_class() returns the class name
    function foo() {
        if(isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ')';
            

        }
        else {
            echo "\$this is not defined";
        }
    }
}
class B {
    function bar() {
        A::foo();
    }
}
$a = new A();
$a->foo();
echo "</br>";

#   call to a non static method
// call to a non static method generates an error
// this call is only used for static method call
    // B::bar();
// uncomment above

#   'new'
// the 'new' keyword is used to instantiate a class which must have been defined before
// if the new word is added to string which is a class an instance of that class is created
// if there are no argument to be passed to the class constructor the parethesis after the class name can be ommitted

// it can be done like this or using variable name
$instance = new SimpleClass();
var_dump($instance);
echo "</br>";

// using variable
$className = 'SimpleClass';
$instance = new $className;
var_dump($instance);
echo "</br>";
echo "</br>";

// $x = 4;
// $y =& $x;
// echo $x === $y;

$assigned = $instance;
$reference =& $instance;
$instance->var = "this value is assigned to the value in the class which is 'assigned'";

// the reference and the instance are now the same so what applies to one applies to the other
$reference = null;

var_dump($instance);
echo "</br>";
var_dump($reference);
echo "</br>";
var_dump($assigned);
echo "</br>";

#   creating objects
class Test {
    static public function getNew() {
        return new static;
    }
}
class child extends Test {}
$obj1  = new Test();
var_dump($obj1);
echo "</br>";
$obj2 = new $obj1;
var_dump($obj2);
echo "</br>";
echo "</br>";

// this returns false 
var_dump($obj1 === $obj2);
echo "</br>";
// the instanceof checks whether an object is an instance of the class specified
$obj3 = Test::getNew();
var_dump($obj3);
echo "</br>";
var_dump($obj3 instanceof Test); // it returns true if it is an instance of the class meaning it is an object
echo "</br>";
// we are able to access the below method because we extended the parent class
$obj4 = child::getNew();
var_dump($obj4 instanceof child);
echo "</br>";

#   access to member of newly created object
// we can simply access or create an object without using variable to assign or call it
echo (new DateTime())->format('Y');
echo "</br>";

#   properties and method
// class method and properties live in seperate namespaces so we can have property and method of the same name
// we use same notation in calling both method and property but depending which one to call depends on the context
class foo {
    public  $bar = "Property";
    public function bar() {
        return 'method';
    }
}
$obj5 = new foo;
echo $obj5->bar; // this is acall to property
echo "</br>";
echo $obj5->bar(); // this is a call to a method


#   instntiating class with abitrary expression 
// we can instantiatiate a new class by adding the new keyword
// it allows instatiatio of arbitray values and also complex types which output string but they must be wrapped in parenthesis
class ClassA extends \stdClass {}
class ClassB extends \stdClass {}
class ClassC extends ClassB {}
class ClassD extends ClassA {}

function getSomeClass() : string {
    return 'ClassA';
}
echo "</br>";
var_dump(new  (ClassD::class));
echo "</br>";
var_dump(new ('Class'.'B'));
echo "</br>";
var_dump(new ('Class'.'c'));
echo "</br>";
var_dump(new (getSomeClass()));
echo "<br>";


#   calling anonymous functions assigned to a property
// remeber that anonymous functions are functions wthout name but assigned to a variable
// we have to assign the property to a variable. for instance we can call it by enclosing it in a parentheses
class Foo1 {
    public $bar;
    public function __construct() {
        $this->bar = function()  {
            return 42;
        };
    }
}
$obj6 = new Foo1;
echo ($obj6->bar)();
echo "</br>";echo "</br>";

#   extends
// the extend is used to inherit properties, method, constant from another class when declearing it
// the inherited properties, method, constant can be redecleared with the name it was used to declear it in the parent class
// it is impossible to redeclear the what has been decleared when they are decleared with the keyword 'final'
// and if the class was decleared with the 'final' keyword, it cannot be extended
// we can access the formal value that have benn overridden with this reference "parent:: "
class ExtendedClass extends SimpleClass {
    // this method have been decleared in the parent class but we are redeclearing it
    function displayVar() {
        echo "Extending class";echo "</br>";
        // this is the original method from the parent class
        parent::displayVar();echo "</br>";
    }
}
$extended = new ExtendedClass;
$extended->displayVar();

#   signatures compatibility
// the chilld method overriden must be compatible with the parent method else, it will throw a fatal error 
// a child method that removes a parameter or mames an optional parameter mandatory is not compatible with  the parent method
// it must make newly added parameter optional
class Base {
    // this block of code will only run if the parameter supplied is an int...
    public function foo(int $a) {
        echo "Valid";echo "</br>";
    }
    // ...else it will not return anything
}
class Extend1 extends Base {
    // we are supplying the parameter and following the type of parameter to be supplied 
    // so if it correlates with the sample code of the parent class it will run it 
    // in this case if we do not supply an int it will throw a type error
    function foo(int $a = 5) {
        // the value of $a here is 5 which we have supplied in the argument list
        // it then goes to the parent class and decides if to run the code or not depending if the argument supplied correspond to the type of value expectd
        parent::foo($a);
    }
}
$extended1 = new Extend1;
// we don't need to supply the parameter here since it has already been supplied 
// we can also supplied if we do not want or has not been supplied while overriding the method
// e.g if it is like this 'function foo(int $a)'....
// ... we can do something like this '$extended1->foo(5)';

// and since we are calling a proerty we put parentheses in front of it (..remember)
$extended1->foo();
echo "</br>";
class Extend2 extends Base {
    // in this case the new parameter added is optional 
    function foo(int $a, $b = 5) {
        parent::foo($a);
    }
}
$extended2 = new Extend2;
$extended2->foo(5);





