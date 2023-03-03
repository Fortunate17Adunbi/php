<?php 
    // string functions
    #   strlen()
    // it returns the length of strings
    $x = "Hello World!";
    echo strlen("$x");
    echo "<br>";
    #   str_word_count()
    // this count the number of words in a string
    echo str_word_count($x); // this returns 2
    #   strrev() 
    // this function reverses a string
    echo "<br>";
    echo strrev($x);
    #   strpos()
    // it searches for a particular text within a string if it is found it returns the charcter position of the first match
    // it will return nothing if it is not found
    /* note that character count start from 0 */
    echo "<br>";
    echo strpos("Hello world!", "world"); // the first occurnce of the text being searched is the first letter
    //           0123456789
    // the function returns 6 because index 6 is the first occurence counting from 0 including the space
    // so the first position in a string  represent the whole word
    echo "<br>"; 
    #   str_replace 
    // this function replaces a word or chracter with another word or character in astring
    echo str_replace("World", "Dolly", "Hello World!", $count); // this change only have effect within this function
    //  this function expects at least three parameter (1) "World"(the word to be changed), (2) "Dolly" (the word that is replacing it) (3) the word it string it should search
    // it also have a fourth parameter $count that returns the number of replacement made. The fourth parameter is "optional"
    // after running this function, the variable $count has value 1 since we only replace the world two times
    // the third parameter can be a variable of data type string like 'echo str_replace("World", "Dolly", $txt, $count);' only if a variable $txt have been defined
    // or inputing a string there 'echo str_replace("World", "Dolly", "Hello World!", $count);' like this
    echo "<br>";
    var_dump($count); // it has the value 1 since on one replacement was made

    

?>