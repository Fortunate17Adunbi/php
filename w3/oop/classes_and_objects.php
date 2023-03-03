<?php
class Fruit {
    // we can setting the values of these properties 
    // within the methods or outside the class
    // we declear properties here..
    public $name;
    public $color;
    
    // this is a method
    function set_name($name) {
        // .. then assign the value of the parameter enter as the value of the property
        // setting values of property within a method using $this
        $this->name = $name;//var_dump($this);
    }
    function get_name() {
        // by this time we have assigned the value of the set_name argument to the name
        return $this->name;
        echo "<br>";
    }  
    function set_color($color) {
        $this->color = $color;
    }
    function get_color() {
        return $this->color;
    }
}
// object
$banana = new Fruit;
$banana->set_name("Banana");
echo $banana->get_name(); echo "<br>";
$orange = new Fruit;
$orange->set_name("Orange");
echo $orange->get_name(); echo "<br>";
// setting values of properties outside the class
$banana->color = "Yellow";
echo $banana->get_color();echo "<br>";

#   instanceof 
// it is used to check if an object is an instance of a class
var_dump($banana instanceof Fruit);echo "<br>";