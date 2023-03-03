<?php
#   class constants
// class constant cannot be channged when they have been decleared
// they are case sensitive and advised to be decleared in upper case
// we create constant with the keyword "const" and access them with "::"
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for learning php here";
    public function byebye() {
        echo self::LEAVING_MESSAGE;
    }
}
echo Goodbye::LEAVING_MESSAGE;echo "<br>";
// we access normal method and properties using $this, but constants are accessed using self
$obj = new Goodbye;
$obj->byebye();