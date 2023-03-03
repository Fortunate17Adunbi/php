<?php   
    #   switch
    // we first evaluate a variable lets say $x
    // we now use the value of the variable to compare other value of each case
    // if it matches it executes the match
    // we use break to check and move from one case to another

    $favcar = "Benz";

    // state the variable to check
    switch ($favcar) {
        // if the value of variable is Tesla
        case "Tesla":
            echo "Your Favourite car is Tesla";
            break;
        case "Rolls Royce":
            echo "Your Favourite car is Rolls Royce";
            break;
        case "Toyota":
            echo "Your Favourite car is Toyota";
            break;
        case "Benz":
            echo "Your Favourite car is Benz";
            break;
        // if the value entered for the variable is not part of the case it executes this code
        default:
            echo "Your Favourite car is neither Tesla, Rolls Royce, Toyota or Benz";


        
    }
?>