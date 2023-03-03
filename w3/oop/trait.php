<?php
#   php traits
// php only support inheritance from single parent class
// if we need to inherit from mutiple classes we use trait
// traits are used to declear method that can be used in different class
// they can have methods, abstract method, and method can also access modifiers

#   declearing triat
trait message {
    public function msg1() {
        echo "OOP is fun"."<br>";
    }
}
trait message2 {
    public function msg2() {
        echo "OOP reduces code<br>";
    }
}
#   using trait
class welcome {
    use message;
}
class welcome2 {
    use message, message2;
}
$obj = new welcome;
$obj->msg1();
$obj2 = new welcome2;
$obj2->msg2();
// use of trait reduces code duplication as it reduce declearing same method and property again