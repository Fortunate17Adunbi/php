<?php   
    #   pi() function
    // this returns the value of pi
    echo("The value of pi is ".pi());

    #   the min() and max() function : this is used to know the lowest or highest value in a list of argument
    echo "<br>";
    echo("The maximum number among the following number is ".max(0, 1, 434, 782, 34, 4));
    echo "<br>";
    echo("The minimum number among the following number is ".min(0, 1, 434, 782, 34, 4));

    #   abs() function
    // this retuns the positive value of a number
    echo "<br>";
    echo(abs(-6.43));
    echo "<br>";

    #   sqrt() 
    // returns the square root of a number
    echo("The square root of 81 is ".sqrt(81));

    #   round()
    // this converts a number to the nearest integer
    echo "<br>";
    echo(round(0.60)); // return 1
    echo "<br>";
    echo(round(0.49)); // return 0
    echo "<br>";

    # random numbers
    // rand() this function generates random numbers
    echo(rand());
    // ranges of numbers to be generated from can be given
?>