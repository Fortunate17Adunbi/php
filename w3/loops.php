<?php   
    #   loops
    // they help in repeating code instead coping and pasting 
    // they repeat a block of code as long as a conditon is correct
    /*
        Types of loop
        1. while loop
        2. do..while loop
        3. for loop
        4. foreach
    */
    #   while loop
    // it loops through a block of code as long as a specified conditon is true
    // it executes a block code as long as a condition is correct
    $x = 1;
    // as long as the present value of $x is <= 5, it executes this block of code
    while($x <= 5)
    {
        // it first print 1
        echo "The number: $x";
        // it then increases it by 1
        $x++;
        // it then print a new line
        echo "<br>";
        // then goes up and update the value of x 
        // checks if the condition is met and repeat the block of code untill the condtion is no longer correct
    }

    $y = 0;
    while ($y <= 100)
    {
        echo $y;
        // this add 10 to the present value of $y
        $y += 10;
        echo "<br>";
        // it then update the value of $y
    }

    #   do..while loop
    // it will first execute a block of code once and then check the condtion
    // it will then repeat the loop if the condition continues to be true
    // the difference between the 'while' and 'do..while' loop is that:
        // the 'while' loop first check the condition before executing a block of code 
        // while the 'do..while' loop first execute the block of code once before checking the condtion to know how many times it should repeat the block of code 
    // the 'do..while' loop will run at leat one time before it can be first
    $a = 1;
    do{
        echo "The number is: $a";
        $a++;
        echo "<br>";
    }
    while($a <= 5);

    // for example this code runs first before it become false
    $b = 6;
    do{
        echo "This is: $b";
        $a++;
        echo "<br>";
    }
    while($b <= 5);

    #   for loop
    // this is used for iterating through a block of code for a specified time
    // we first initialize the loop counter value 
    // we then evaluate the vaiable to determine how many time the loop will run. if it is evaluted true the loop continues or else it stops
    // then we incremnt the counter 
    for ($i = 0; $i <= 10; $i++)
    {
        echo "The number: $i";
        echo "<br>";
    }

    // another examples that increses the counter by 10 each time
    for ($i = 0; $i <= 100; $i += 10)
    {
        echo "Multiple number: $i";
        echo "<br>";
    }

    #   foreach loop
    // this loop through every element in an array (it loops through the array value). it only works for array
    // it loops each elemt of the array and stores each value in a variable $value and the array pointer is moved by one to store other element of the array
    $color = array("Blue", "Green", "Purple", "Yellow");

    foreach ($color as $value)
    {
        // print all the element stored in different memory loaction
        echo $value;
        echo "<br>";
    }

    // another example
    $peopleage = array("Peter"=>"12", "John"=>"17", "Luke"=>"72");
    foreach ($peopleage as $x => $val)
    {
        echo "<br>";
        echo "$x = $val";
        echo "<br>";echo "<br>";echo "<br>";
    }

    #   break and continue
    // the break is used to jump out of a swicth statement

    // this loop break when $i = 4 and stops
    for ($i = 0; $i <= 10; $i++)
    {
        if ($i === 4)
        {
            break;
        }
        echo "The number is: $i";
        echo "<br>";echo "<br>";
    }

    // this loop skips the incidence when the if condition is true
    for ($i = 0; $i <= 10; $i++)
    {
        if ($i === 4)
        {
            continue;
        }
        echo "The number is: $i";
        echo "<br>";
    }

    echo "<br>";echo "<br>";echo "<br>";
    // break and continue in while loop

    // this stops the loop at the incidence if the occurnce
    $g = 0;
    while ($g <= 10)
    {
        if ($g === 4)
        {
            break;
        }
        echo "Number is: $g";
        $g++;
        echo "<br>";
    }
    echo "<br>";echo "<br>";

    // this skip the incidence of the occurence
    $j = 0;
    while ($j <= 10)
    {
        if ($j === 4)
        {
            $j++;
            continue;
        }
        echo "Number is: $j";
        $j++;
        echo "<br>";
    }
?>