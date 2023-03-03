<?php   
// if the 'return' function is called in a function, it end the execution of the function returns its argument as the value of the functioncall

function square($param) {
    return $param * $param;
}
echo square(3);
// a function cannot return a multiple value but similar result can be obtained by returning an array