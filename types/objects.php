<?php
    #   objects
    // to create an object we add 'new' keyword to a class
    class foo {
        // do_foo is a property of this class
        function do_foo()
        {
            echo "Doing foo";
            echo "<br>";
        }
    }

    // this is an object by instantiating a class 'foo'
    // the object is '$bar'
    $bar = new foo;
    $bar->do_foo();
    echo "<br>";

    #   converting to object
    // if an object is converted to an object it is not modified but if another type is concerted a new instance of 'stdClass' is created...
    // this is because object is an instance of a class. a class must exist to create an object
    // if the value was null the new instance will be empty
    // if an array is converted to an object the properties will be named by the key(s) of the array and the corresponding value
    
    // converting an array to object
    $obj = (object) array('1' => 'foo');
    // isset checks if a variable is decleared and is not null. it returns true if it is decleared and not null and false if it is not decleared and or is null
    // we are accessing a property of $obj which is an array converted to an object. and we access it by the 'key' of the array converted asthe property of the object
    var_dump(isset($obj->{'1'})); // returns true beacuse the variable is decleared and is not null
    echo "<br>";
    echo $obj->{'1'};
    echo "<br>";
    // can you see we are accessing the property this object by using hte key of the formal array
    var_dump(key($obj)); // but calllign key on an object is deprecated so this is a bad method
    echo "<br>";

    // for any other value which is not array a variable named scalar will hold their value (.. remember the defination of scalar in the introductory part)
    $obj = (object) 'ciao';
    echo $obj->scalar;
    # try out each of this one after the other true is 1 and false is 0. the last value of the variable will be what will show if 
    // $obj = (object) 1;
    // $obj = (object) 2.4;
    // $obj = (object) false;
    echo "<br>";
    echo $obj->scalar;
    echo "<br>";
    echo $obj->{'1'};
    // as new value are assigneed to existing variable it overwrites each of the old value and updates it will the value of the new one 
    // e.g $obj->{'1'} existed before and we have called it but since we have assigned a new value to it, it has been deleted
    