<?php
// the __destruct function is called at the end of the script
// the __construct and __destruct helps to reduce code to write
class Fruit {
    public $name;
    public $color;
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct() {
        echo "The fruit is $this->name and the color is {$this->color}";
    }
}
$obj = new Fruit("Banana", "Yellow");