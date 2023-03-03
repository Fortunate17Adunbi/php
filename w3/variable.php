<?php 
    #   enter your name below
    $name = "Fortunate";
    #   declearing variable
    $txt = "Hello world";
    #   output variable using echo
    echo $txt;
    echo "<br>";
    #   concatenate using period (.)
    echo "Hi everybody and ".$txt.". My name is $name.";
    // php is loosely typed you do not need to state the variable type

    # variable scope
    /* 
        1. Global
        2. Local 
        3. Static
    */
    #   Global scope 
    // global variable are variable created outside of a function
    // it can only be accessed outside a function. 
    $x = 5; //  global scope
    function myTest(){
        // this is going to generate an error
        echo "<p>Variable x inside this function is: $x (this produces an error above)</p>";
    }
    myTest();

    // this is outputing a global variable outside any function (this is the correct way to output a variable) 
    echo "<p>Variable x outside any function: $x</p>";

    #   Local scope
    // it can only be accessed within a function
    function myTest2(){
        $x2 = 5; // local scope
        // it can only be accessed within this function
        echo "<p>Variable x2 inside this function is: $x2</p>";
    }
    myTest2();
    // x2 cannot be accesed here
    echo "<p>x2 cannot be accessed here since it is a local scope so $x2  error is generated (above).</p>";

    #   the "global keyword"
    // it is used to access a global variable within a within a function
    $a = 5;
    $b = 10;
    function myTest3(){
        // define global variables with function
        global $a, $b;
        $b = $a + $b;
    }
    myTest3();
    echo "using the global keyword to access the global variables in functions: the value is = $b";

    /* php stores all global variable in array called $GLOBALS[index]. The index is the name of the variable.
    And this array is accessible from within the function*/
    

    $c = 5;
    $d = 10;
    function myTest4(){
        // accessing global variables from the GLOBALS array
        $GLOBALS['d'] = $GLOBALS['d'] + $GLOBALS['c'];
    }
    myTest4();
    echo "<p>Accessing global variable from the GLOBALS array: the value is = $d</p>";

    #   using the static keyword 
    // when a function hs executed, all its variables are deleted but we may want local variables not to be deleted for further work 
    // we use the static keyword for this
    // this function increases the value of variable x by 1 every time it is called 
    function myTest5(){
        // decleares local variable so that it can be reused
        static $x = 0;
        // print the value of x
        echo "<p>$x</p>";
        // increase the value of x by 1
        $x++;
    }
    // increses the value of the last value of x by 1
    myTest5(); // default value:  output 0
    myTest5(); // previous vlue of x(0) is increased by 1: output 1
    myTest5(); // previous vlue of x(1) is increased by 1: output 2

?>