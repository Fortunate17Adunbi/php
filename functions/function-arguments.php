<?php   
    #   not sure of this info
    // informations can be passed to a function via the argument list
    // a parameter is a variable passed to a function while argument is the value of the parameter

    // argument are infomation passed to a function via the argument list. argument are variables they are passed into the parentheses after the function name
    // argument list is where infomtion about a function is passed. many argument can be added but must be seperated by a comma
    // php support passing argument by values(the default way), by reference, default argument value, variable-length argument list and also named argument

    #   taking array as argument
                        // passing argument by value
    function takes_array($input)
    {
        echo "$input[0] + $input[1] = ", $input[0]+$input[1];
    }
    // functions can also be defined with tailing commas
    function takes_many_args(
        $first_arg,
        $second_arg,
        $arg_with_default = 5,
        $again = 'a default string',
        // this form of passing argument was made available from php 8.0.0
    )
    {
        // 
    }

    #   passing argumnet with reference
    // by default argument are passed by value. passing by reference allows a function modify its aargument
    // this show that we want to add another argument represented by the &
    // this shows we are going to add another variable 
    function add_some_extra(&$string)
    {
        $string .= "add something extra";
        
    }
    $str = "This is a string, ";
    // this is the value that will be passes as represented by the &
    add_some_extra($str);
    echo $str;
    echo "<br>";


    #   default argument value
    // this is done by using syntax similar to assigning values to variable
    // we can change the value when calling the function by specifing the value in the parenthesis
    // when we use the null when calling the function it will empty the value
    function makecoffe($type = "cappuccino")
    {
        return "Making a cup of $type.<br>";
    }
    // have to echo return value for it to show
    echo makecoffe(); // returns the default value
    echo makecoffe(NULL); // this retuns nothing as the $type
    echo makecoffe("espresso"); // set return value to the what is in the parenthesis
    echo makecoffe(); // returns the default value
    // default parameter value maybe scalar value(single value e.g string, int  instead of multiple value like array), array, null, object as at php 8.1.0


    #   using non-scalar(e.g array) type as value as follow:
    #   use of array
    function coffe($type = array("cappuccino"), $coffemaker = NULL)
    {
        // this checks if the variable coffemaker is null,
        // then if it is null(true) the value that will be assigned to $device will be "hands" if it is not null(false) the value of $device will be the value of $coffemaker
        $device = is_null($coffemaker) ? "hands" : $coffemaker;
        // this concatenate after imploding the value or values of $type and also return along the value of device from above
        return "Making a cup ".join(", ", $type)." with $device";
        // the join() function is for joining elemnts of array together the first parameter is the seperator(what will seperate each element) and the variable to implode() or join.
        // the first parameter is optional incase you want them to stay back to back (e.g imploding array of 'a', 'b', 'c' you may want it to look like abc. but if you include the seperator  e.g ', ' or '. ' it will be something like a, b, c or a. b. c)
        // join() is alias of implode

    }
    echo "<br>";
    // since the coffemaker is null(true) the value of device is hands
    echo coffe();
    echo "<br>";
    // since we have two coffe it implode the array, join it together but seperate elements by ', '
    // anad the value of device is the value of $coffemaker since it is not null at this point: teapot
    echo coffe(array("capaccino", "tea"), "teapot");
    echo "<br>";
    #   using object as default value
    // since class is a template for an object we first declear our class
    class defaultcoffemaker{
        public function brew()
        {
            return "Making coffe";
        } 
    }
    class fancycoffemaker {
        public function brew()
        {
            return "Crafting a beutiful coffe just for you";
        }
    }
    // deault value for the argument is the class defaultcoffemaker
    function coffea($coffemaker = new defaultcoffemaker){
        return $coffemaker->brew();
    }
    // retuns the default value of the function
    echo coffea();
    echo "<br>";
    // we can also return another value by specifying the class
    echo coffea(new fancycoffemaker);
    echo "<br>";
    // optional argument should be specified after the required argumnent else they would be compulsory
    // defualt value of argument must be a constant not another variable e.g $coffemaker = $x, or function call e.g $coffemaker = myfunction(), or member of a class e.g calling a function from a class
    #   incorrect use of default argument funtion
    // function makeyogurt($container = 'bowl', $flavour){
    //     return "Making a $container of $flavour yogurt";
    // }
    // // this genertes error because flavour does not have value so we are meant to assign the value enter to the $flavour not $container. $flavour requires it own argument
    // echo makeyogurt("raspberry");
    #   correct usage of the default argument function
    function makeyogurt( $flavour, $container = 'bowl'){
        return "Making a $container of $flavour yogurt";
    }
    //this assign the value of the argument to $flavour
    echo makeyogurt("raspberry");
    echo "<br>";
    #   correct usage of the default argument function
    function makeyogurt2($container = "bowl", $flavour = "raspberry", $style = "Greek"){
        return "Making a $container of $flavour $style yogurt";
    }
    echo makeyogurt2(style : "Natural");
    echo "<br>";
    // as of php 8.0.0 declearing mandatory argument after optional argument is not accepted(dissapproved)
    #   variable-length argument list
    // this allows the variable to be treted as an array(...)
    function sum(...$numbers) {
        $acc = 0;
        // this acces each element of the argument as an array
        // foreach only works on array an object
        foreach ($numbers as $x)
        {
            $acc += $x;
        }
        return $acc;
    }
    // this adds the argument supplied
    echo sum(10, 2);
    echo "<br>";
    echo "<br>";
    // in older version of php we can do something like this without having to convert it to an array
    function sum2() {
        $sum2 = 0;
        foreach (func_get_args() as $n) {
            $sum2 += $n;
        }
        return $sum2;
    }
    sum2(1, 3, 5);
    echo "<br>";
    echo "<br>";
    // using the (...) to unpack an array
    function add($a, $b)
    {
        return $a + $b;
    }
    // we can use it to specify the argument with array
    echo add(...[1, 2]);
    echo "<br>";
    // we can also supply the argument with a variable of array
    $t = [1, 2];
    echo add(...$t);echo "<br>";


    function total_intervals($unit, DateInterval ...$intervals) {
        $time = 0;
        foreach ($intervals as $interval) {
            $time += $interval->$unit;
         echo "<br>";
        }
        return $time;
    }
    
    $a = new DateInterval('P1D');
    $b = new DateInterval('P2D');
    echo total_intervals('d', $a, $b).' days';echo "<br>";
    
    // This will fail, since null isn't a DateInterval object.
    echo total_intervals('d', null);
?>