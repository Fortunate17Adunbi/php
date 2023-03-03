<?php   
    #   PHP Constant
    // constant are like variable but cannot be undefined or changed. they are identifier for simple value
    // constant names start with letter or underscore not $
    // constant are global through out the script we use define() to create constant
    // it takes three parameter
    // define(name, value, case-sensitivity)
    // name is the name of the constant
    // if no value is supplied in the case sensitive parameter means it is case sensitive. the default is false(case sensitive) 

    // in php version 8.0 and above true is not accepted it will throw error
    // version 7.3.0 the case insensitive(true) is allowed 
    // version 7.0.0 array value are accepted

    define("GREETING", "Hello world!"); // this is case sensitive
    // the default is false
    // define("GREETING", "Hello world!", false);
    echo GREETING;
    echo "<br>";
    // this will throw error
    // define("INTRO", "This is kodn tutorial", true);
    // echo INTRO;

    define("cars", ["Alfa Romeo", "BMW", "Toyota"]);
    echo cars[0];
    
    echo "<br>";
    // constant global variable
    function myfunction(){
        // the constant are global they can be accessed within a function
        echo GREETING;
    }
    myfunction();
    
?>