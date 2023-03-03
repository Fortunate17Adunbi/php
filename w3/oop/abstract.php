<?php
#   Abstract classes and method
// abstract classes and method are when paren class has a named method but needs the the child class to fill the function
// an abstract class have at least one abstract method
//  an abstract method is a method that is decleared but does not execute any code
// when a child class is inheriting from the abstarct class,
// it must have the same method name
// the access modifier must be the same or less restictive
// number of argument must be the same, and can also have optional parameter
// parent class
Abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function intro() : string;
}

// child classes
class Audi extends Car {
    public function intro() : string {
        return "Choose Germany quality! I'm an $this->name!";
    }
}

class Volvo extends Car {
    public function intro() : string {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car {
    public function intro() : string {
        return "French extravagance! I'm a $this->name";
    }
}
$audi = new Audi("Audi");
echo $audi->intro()."<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro()."<br>";

$citroen = new Citroen("Citroen");
echo $citroen->intro()."<br>"."<br>";

// abstract method with parameters
abstract class ParentClass {
    abstract protected function prefixName($name);
}
class ChildClass extends ParentClass {
    // the access modifier is here less restrictive
    public function prefixName($name) {
        if ($name == "John Doe") {
            $prefix = "Mr.";
        }
        elseif ($name == "Jane Doe") {
            $prefix = "Mrs.";
        }
        else {
            $prefix = "";
        }
        return "$prefix $name";
    }
}
$class = new ChildClass;
echo $class->prefixName("John Doe")."<br>";
echo $class->prefixName("Jane Doe")."<br>"."<br>";

// optional argument supplied by child class
class ChildClass2 extends ParentClass {
    public function prefixName($name, $seperator = ".", $greet = "Dear") {
        if ($name == "John Doe") {
            $prefix = "Mr";
        }
        elseif ($name == "Jane Doe") {
            $prefix = "Mrs";
        }
        else {
            $prefix = "";
            $seperator = "";
        }
        return "{$greet} {$prefix}{$seperator} {$name}";
    }
}
$class2 = new ChildClass2;
echo $class2->prefixName("John Doe")."<br>";
echo $class2->prefixName("Jane Doe")."<br>";
echo $class2->prefixName("Fortunate")."<br>"."<br>";


