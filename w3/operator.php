<?php   
    #   PHP Operator
    // operator are used for performing operation on variable
    /*
        division of the operator       
        1. Arithmetic operator
        2. Assignment operator
        3. Comparison operator
        4. Increment/Decrement operator
        5. Logical operator
        6. String operator
        7. Array operator
        8. Conditional assignment operator
    */
    #   1. Arithmetic operator
    // + (additional) operator
    $x = 2;
    $y = 5;
    echo $x + $y;
    echo "<br>";
    // - (substraction) operator
    echo $x - $y;
    echo "<br>";
    // * (multiplication) operator
    echo $x * $y;
    echo "<br>";
    // / (division) operator
    echo $x / $y;
    echo "<br>";
    // % (modulo) operator
    echo $x % $y;
    echo "<br>";
    // ** exponentiation operator 
    echo $x ** $y; // raises $y to the power of $y
    echo "<br>";

    #   Assignment operator
    // revist later

    #   comparision operator
    // for comparing two value
    $x = 100;
    $y = "100";
    // equal operator 
    // returns true if two variable have the same value not neccesarilly same data type
    var_dump($x == $y) ; // returns true(1) because they have same value 
    echo "<br>";
    // identical operator
    // returns true only if data type and value are equal
    var_dump($x === $y); // retuns false because data type is not equal even though value are equal
    echo "<br>";
    // not equal
    // returns false if it has same value
    var_dump($x != $y);
    echo "<br>";
    var_dump($x <> $y);
    echo "<br>";

    #   increment/ decrement operator
    // ++$x : pre-increment : increment the variable by one and returns the the increment
    // $x++ : post-increment : returns the variable and increases it by one when it is called next
    // --$x : pre-decrement 
    // $x-- : post decrement
    $a = 10;
    echo ++$a;
    echo "<br>";
    echo ++$a;
    echo "<br>";
    $b = 10;
    echo $b++;
    echo "<br>";
    echo $b;
    echo "<br>";
    $c = 10; 
    echo --$c;
    echo "<br>";
    $d = 10;
    echo $d--;
    echo "<br>";
    echo $d;
    echo "<br>";
    
    #   logical operation
    // and : returns true if $x and $y is true
    // or : returns true if either $x or $y is true or both
    // xor : returns true only if one out of $x or $y is true but not the two
    // && : alias of and
    // || : alias of or
    // ! : (!$x) returns true if $x is not true

    #   string operator
    // . : concatenation
    // .= : concatenation assignment
    $txt = "Hello World.";
    $txt2 = "Welcome to kodn tutorial.";
    echo $txt.$txt2;
    echo "<br>";
    $txt3 = "This explanation of w3school php tutorial.";
    $txt .= $txt3;
    echo $txt;
    echo "<br>";
    
    #   conditional assignment operators
    // ?: :ternary => $x = expr1 ? expr2 : expr3;
    //  the value of $x is expr2 if expr1 is true or
    //  expr3 if expr1 is false
    // the empty is used to check if a variable is empty
    // if empty($user) = TRUE, set $status = "anonymous"
    // here the empty($user) retuns true so the value is anonymous
    echo $status = (empty($user)) ? "Anonymous" : "logged in";
    echo "<br>";
    $user = "John";
    // if empty($user) = FALSE, set $status = "logged in"
    // in this case $user is not empty which is false so the value is logged in
    echo $status = (empty($user)) ? "Anonymous" : "logged in";
    echo "<br>";   

    // ?? : null coalescing $x = expr1 ?? expr2
    // it returns the first operand if it already exist and it is not null else it returns the second operand
    // it returns expr1 if it exist and it is not null, if it does not exist or it is null, it returns false
    // the value of is $user have already been sey so ot uses it 
    echo $new = $user ?? "Anonymous";
    echo "<br>";
    // the value of $_GET['new'] is $new
    echo $new = $_GET['new'] ?? "Anonymous";
    echo "<br>";
    $j = "random";
    // it takes the value of $j since $i does not exist
    echo $new = $i ?? $j;
?>