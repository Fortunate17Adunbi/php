<?php  
    #   Numbers in php
    /* php provides automatic data type conversion
    i.e it recognizes the type of data provide in a variable
    but some languages like C, Java, C++ etc.. require the data type while declearing variable
    but php does not require declearing datatype while declearing variables
    php is smart enough to recognize the type of data for a variable beign decleared
    but this automatic conversion sometimes can break the code */

    #   INTEGERS
    #   php signed integer
    // signed integers are integers that can be positive and negative
    // integers non-decimal number
    /*  integers in 32 bit system ranges between -2,147,483,648 to +2,147,483,647
    while integers in 64 bits system ranges between -9,223,372,036,854,775,808 to +9,223,372,036,854,775,807 */
    #   php unsigned integers
    // usigned integers are whole numbers without the + or - symbol so they are zero or positive numbers(non-negative)
    # integers rule
    /*
        1. It must have at least one digit
        2. It must not have decimal point
        3. It can be positive or negative
        4. Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
    */

    #   predefined constant for integers
    // PHP_INT_MAX : the largest integer supported
    // PHP_INT_MIN : the smallest integer supported
    // PHP_INT_SIZE : size of the integer in bits

    #  function checking if a variable is an integer
    // is_int()
    // is_integer() : alias(alternative) name for is_int()
    // is_long() : alias(alternative) name for is_int()

    // the function is_int() returns a bool
    $x = 2023;
    echo "$x is an int true / false: ";var_dump(is_int($x)); // returns true if it is an integer
    echo "<br>";
    echo "$x is an int true / false: ".is_int($x); // this returns 1 
    // in computer science 1 means true / on, while 0 means false / off 
    echo "<br>";

    $y = 99.9;
    echo "$y is an integer(alias int) true / false: ";var_dump(is_integer($y)); // returns false if it is not an integer
    echo "<br>";
    echo "$y is an integer(alias int) true / false: ".is_integer($y); // it does not retun anything which means false
    echo "<br>";
    echo "$y is a long(alias int) true / false: ";var_dump(is_long($y));
    echo "<br>";
    echo "$y is a long(alias int) true / false: ".is_long($y);

    #   FLOAT
    #   predefined constant for float
    // PHP_FLOAT_MAX : Largest representable floating point number
    // PHP_FLOAT_MIN : Smallest representable positive floating number 
    // -PHP_FLOAT_MAX : Smallest representable negative floating point number
    // PHP_FLOAT_EPSILON : The smallest representable positive number x, so x + 1.0 != 1.0
    // PHP_FLOAT_DIG : The number of decimal point that can rounded up to a float and without loosing any precision

    #   function for checking a float
    // is_float() 
    // is_double() : alias of is_float()

    echo "<br>";
    echo "$y is a float true / false: "; var_dump(is_float($y)); // returns true
    echo "<br>";
    echo "$y is a double(alias float) true / false: ".is_double($y);  // returns 1(true)
    echo "<br>";
    echo "$x is a float true / false: "; var_dump(is_float($x)); // returns false
    echo "<br>";
    echo "$x is a double(alias float) true / false: ".is_double($x); // it does not show anything which means it is false (0)
    echo "<br>";

    #   PHP infinity
    // any floating point number larger than PHP_FLOAT_MAX is considered infinite
    // we can use the following function to check whether a number is finite or infinite
    // is_finite()
    // is_infinite()
    $c = 1.9e411;
    echo "c is infinite: ".is_infinite($c);
    // we can use the var_dump to check this since it output datatype and value
    echo "<br>";
    var_dump("$c");

    #   PHP NaN
    // This means Not a Number
    // this is used for impossible mathematical operations. we use is_nan() to check this
    echo "<br>";
    $e = acos(8);
    var_dump($e);

    #   PHP numeric string 
    // the is_numeric() is used to check whether a variable is numeric
    echo "<br>";
    $x = "Hello";
    var_dump(is_numeric($x)); // returns false
    echo "<br>";
    $x = "39"; //  $x = 39; : returns true 
    var_dump(is_numeric($x)); // returns true
    echo "<br>";
    $x = "59.85" + 100;
    var_dump(is_numeric($x)); // returns true

    #   PHP casting float and strings to integers
    // this involes changing the data type of numeric variable
    // we use (int) (integer) intval()

    // converting float to int
    echo "<br>";
    $z = 23465.768;
    $int_cast = (int)$z; // this will remove all the number after the decimal point
    echo $int_cast;

    // converting string to int
    echo "<br>";
    $g = "23465.768";
    $cast = intval($g); // converts the string to an integer
    echo $cast; 




?>