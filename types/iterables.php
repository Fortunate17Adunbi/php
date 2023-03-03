<?php   
#   Iterables 
// it is a pseudo-type. it accepts array or object for implementing the traversable interface
// these two types (array, object) are iterable using foreach
// the iterable is used as a parameter type to indicate that a function requires a set of values which will be used with the foreach() function which will only work on array or instance of Traversable, and if it is not any of this it throws a type error
function foo(iterable $iterable) {
    foreach($iterable as $value) {
        // ...
    }
}

#   iterable parameter with default parameter value
function bar(iterable $iterable = []) {
    // 
}

#   using iterable as return value

// how to specify return value from a function
// for example this function returns an int
// function func(): int{

// }

// specifying iterable as return value
// if the return value is not an array or instance of traversable it throws a type errror
function func(): iterable {
    return [1, 2, 3];
}
// function declearing iterable as return value can also be generators(allows to write code that uses foreach to iterate a set data without needinf to build arrary)
// a generator type is just like a normal function just that it 'yield's value instead of returning it
// any function with the 'yield' keyword is a generator function. the generator returns an object that can be iterated over
// the 'yield' function is a instead or returning the value, it provides a value to the code running the loop over the generator and pauses execution of the generator function
function gen(): iterable {
    yield 1;
    yield 2;
    yield 3;
}
