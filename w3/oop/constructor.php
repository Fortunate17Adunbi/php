<?php
// if a constructor function is created it is automatically called when an object is created
// it helps to reduce the lines of code
class Fruit {
    public $name;
    public $color;
    function __construct($name, $color) {
        // sets the propety name of the class Fruit to the value of the parameter entered when this function execute
        $this->name = $name;
        $this->color = $color;
    }
    function get_name() {
        return $this->name;
    }
    function get_color() {
        return $this->color;
    }
}
// this executes the __construct function immediately
// the parameter supplied is for the constructor
$obj = new Fruit("Apple", "Green");
echo $obj->get_name();echo "<br>";
echo $obj->get_color();echo "<br>";