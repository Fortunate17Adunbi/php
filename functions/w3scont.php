<?php   
    // passing argument to a function
    // function familyName(string $name, int $year)
    // but we can leave it without data type declearation
    function familyName($name, $year)
    {
        echo "$name familly in the year $year <br>";
    }
    familyName("Seiyes", 1848);

    // in php 7 use strict declearation type to state type of data and if the parameter aand the argument do no have the same data type it throws an error
    // this states type of data it is exepected as parameter
    function addNumber(int $a, int $b)
    {
        return $a + $b;
    }
    // THIS returns error because the paramter for the second argument should be an int 
    // strict data type has already been included in earlier version of php
    echo addNumber(5, "5 DAYS");
    // to include strict types in earlier version of php we add it at the top of the php program as decleared below
    // <?php declear(strict_types=1) : this is how to ensure strict data type inearlier version

?>
