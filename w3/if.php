<?php   
    #    if
    // hour of the date is assigned to $t
    $t = date("H");
    // if the condition is correct it executes the code inside
    // if it is not correct it does not return anything
    if ($t < "20")
    {
        echo "Have a good day";
    }
    echo "<br>";

    #   if...else
    // if the hour of the present date is less than 20
    // executed this block of code
    if ($t < "20")
    {
        echo "Have a good day";
    }
    // if it is greater than it it should execute this block of code
    else{
        echo "Have a good night!";
    }
    echo "<br>";

    #   if..elseif..else
    if ($t < "10")
    {
        echo "Good morning";
    }
    // executes this block of code if first condition is false and this condition is true 
    elseif ($t < "20")
    {
        echo "Have a nice day!";
    }
    // if all condition is false execute this block of code
    else
    {
        echo "Have a good night";
    }

?>