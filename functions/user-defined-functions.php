<?php   
    #   Functions in php
    // the real power of php comes from the functions
    // what is function?
    // a function is a code that take takes a parameter as input, process it and return a value
    // these are block of statement/ code that can be used repeatedly in a program
    // a function executes when it is called. one can create his own function

    // creating a function

    // defining a function
    function functionName(){
        // code to be executed
    }
    // calling a function
    functionName();

    #   conditional functions
    // naming function
    // a function name can start with a letter or underscore. it  cannow be followed by number or letters or undescore
    // function name are case insensitive
    // we do not need to define a function before referencing(calling) it. unless
    // it is a conditional funtion. it has to be defined before it can be called

    $makefoo = true;
    // immediately the the programm run this function execute
    // it is bar() that will first execute when the program start because it was called first
    bar();
    // this function cannot execute because it is condtional and it has to go through the condtion before it can execute
    // foo();
    
    // anycall to this function before it beign defined will through an error
    if($makefoo)
    {
        function foo(){
            echo "Cannot execute untill program reach me";
            echo "<br>";
        }
    }
    // this function can be safely called because it evaluates to true
    if($makefoo) foo();
    // we can call this function before the defination since it is not conditional
    function bar(){
        echo "This function exist immediately the programm start because it has already beign called";
        echo "<br>";
    }
    // when function has been defined, it cannot be redefined

    #   function within function
    function parent_func()
    {
        // this function cannot be called untill the parent function is called (parent_func())
        function child_func()
        {
            echo "This function is possible to be called because the parent function has already been called";
            echo "<br>";
        }
    }

    // calling child_func() here will not work because it does not yet exist
    // child_func();
    // we need to first call the parent function for other function inside it to exist
    parent_func();

    // we can now call child_func() because it now exist. it exist when the parent function(parent_func()) is called
    chiLD_fuNC();
    echo "<br>";

    // functions and classes have global scope
    // php does not support function overloading(having same function name performing differnt task), it is not possible to undefine or redefined function as mentioned above
    // function names are case insensitive (example on 65 line 65)

    // it is possible to call recursive functions(functions that call itsef)
    function recursion($a)
    {
        if ($a < 20) {
            echo "$a, ";
            recursion($a + 1);
        }
    }
    recursion(1);

?>