<?php   
    #   Data types in php
    // examples of Data types
    /*  
        1. Strings 
        2. Integers
        3. Float
        4. Booleans
        5. Array
        6. Object
        7. NULL
        8. Resource
    */

    /* php provides automatic data type conversion
    i.e it recognizes the type of data provide in a variable
    some languages like C, Java, C++ etc.. require the data type while declearing variable
    but php does not require declearing datatype while declearing variables 
    php is smart enough to recognize the type of data for a variable beign decleared 
    but this automatic conversion sometimes can break the code */

    #   Strings
    //  strings are sequence of character in double or single quote e.g "Hello world!", 'Hello world!'
    $x = "Hello world!";
    $y = 'Hello world!';
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    #   Integers
    //  it is a "non decimal" number ranging from -2,147,483,648 to 2,147,483,647
    //  it must be at least 1 digit, it must not have decimal point, it can be either negative or positive
    $a = 2023;
    var_dump($a);
    echo "<br>";
    #   var_dump return data type and value of the variable (it dumps information about a variable)

    #   float
    // A float is a number with decimal point
    $b = 1.23;
    var_dump($b);
    echo "<br>";

    #   boolean is either true or false 

    #   Array
    // it is used for storing multiple values in a variable
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    echo "<br>";

    #   Object
    // an object is a data type used in storing data and information on how to process the data
    // we must first declear a class of object
    // a class is a template for object and object is instance for class
    // what object uses is class
    // when objects are created they inherit all properties from the class beign used
    // e.g lets say we have a class called car it has properties like model, color e.t.c
    // then when individual objects like ->(volvo, BMW, toyota) are created they inherit all propertiews from the the class but they hve different values( e.g diffrent model and different color)
    // if a __construct() function is created php calls this function when a object is created from a class
    class Car {
        public $color;
        public $model;

        public function __construct($color, $model)
        {
            // creating a new variable and assigning the value of parameter entered to the new variable
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a ".$this->color." ".$this->model."!";
        }
    }
    // this is the object that is creted and inherit the property of the class stated
    $myCar = new Car("Blue", "Benz");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Car("Gray", "Toyota");
    echo $myCar->message();
    /*
        $benz = new Car("Blue", "Benz");
        echo $benz->message();
        echo "<br>";
        $toyota = new Car("Gray", "Toyota");
        echo $toyota->message();

    */

    #   null
    // a variable with a data type null has no valued assigned to it
    // a variable can be emptied with the null
    echo "<br>";
    $random = "Hello World!";
    $random = null;
    var_dump($random);
    // echo "<br>";
    // echo $random; //this does not output anything because it has bern emptied with the null

    #   PHP Resource
    // The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

    // A common example of using the resource data type is a database call.

    // We will not talk about the resource type here, since it is an advanced topic.
    
?>