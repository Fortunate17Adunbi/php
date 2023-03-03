<?php
#   basic enumerstions
// enumerations are restricting layers on top of of classes and class constants intended to provide a way to define a closed set of possible values of a type
enum Suit {
    case Hearts;
    case Diamonds;
    case Clubs;
    case Spades;
}

function do_stuff(Suit $a)
{
    //  ...
}

do_stuff(Suit::Spades);

#   casting
// If an enum is converted to an object, it is notmodified.
// If an enum is converted to an array,an array with a single name key (for Pure enums) oran array with both name and value keys(for Backed enums) is created. 
// All other cast types will result in an error. 